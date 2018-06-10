<?php

// get the HTTP method, path and body of the request
$method = $_SERVER['REQUEST_METHOD'];
$path_info = isset($_SERVER['PATH_INFO'])?$_SERVER['PATH_INFO']:'';
$request = explode('/', trim($path_info,'/'));
$input = $_POST;
$script = rtrim($_SERVER['PHP_SELF'],'/');

// connect to the mysql database
$database = 'Scharak';
$link = mysqli_connect('localhost', 'root', 'r22825462', $database);
mysqli_set_charset($link,'utf8');

// retrieve the stored procedure name
$procedure = preg_replace('/[^a-z0-9_]+/i','',array_shift($request));

// escape the columns and values from the input object
$columns = preg_replace('/[^a-z0-9_]+/i','',array_keys($input));
$values = array_map(function ($value) use ($link) {
	if ($value===null) return null;
	return mysqli_real_escape_string($link,(string)$value);
},array_values($input));

// check whether or not procedure exists

if (!$procedure) {
	$sql = "SELECT `SPECIFIC_NAME` FROM `INFORMATION_SCHEMA`.`ROUTINES` WHERE `ROUTINE_TYPE` = 'PROCEDURE' AND `ROUTINE_SCHEMA` = '$database';";

	// excecute SQL statement
	$result = mysqli_query($link,$sql);

	echo '<ul>';
	for ($i=0;$i<mysqli_num_rows($result);$i++) {
		$row = mysqli_fetch_assoc($result);
		$procedure = $row['SPECIFIC_NAME'];
		echo "<li><a href=\"$script/$procedure\">$procedure</a></li>\n";
	}
	echo '</ul>';

	// close mysql connection
	mysqli_close($link);

} else {

	$sql = "SELECT `SPECIFIC_NAME`,`ROUTINE_COMMENT` FROM `INFORMATION_SCHEMA`.`ROUTINES` WHERE `ROUTINE_TYPE` = 'PROCEDURE' AND `ROUTINE_SCHEMA` = '$database' and `SPECIFIC_NAME` = '$procedure';";

	// excecute SQL statement
	$result = mysqli_query($link,$sql);

	$row = mysqli_fetch_assoc($result);

	// die if SQL statement failed
	if (!$row) {
		http_response_code(404);
		die(mysqli_error());
	}

	$procedure = $row['SPECIFIC_NAME'];
	$comment = $row['ROUTINE_COMMENT'];

	$sql = "SELECT `ORDINAL_POSITION`,`PARAMETER_MODE`,`PARAMETER_NAME`,`DTD_IDENTIFIER` FROM `INFORMATION_SCHEMA`.`PARAMETERS` WHERE `ROUTINE_TYPE` = 'PROCEDURE' AND `SPECIFIC_SCHEMA` = '$database' AND `SPECIFIC_NAME` = '$procedure' ORDER BY `ORDINAL_POSITION`;";

	// excecute SQL statement
	$result = mysqli_query($link,$sql);

	// get parameters
	$parameters = array();
	$input = array();
	$output = array();
	for ($i=0;$i<mysqli_num_rows($result);$i++) {
		$row = mysqli_fetch_assoc($result);
		$mode = $row['PARAMETER_MODE'];
		$name = $row['PARAMETER_NAME'];
		$type = $row['DTD_IDENTIFIER'];
		$parameters[] = compact('mode','name','type');
		if ($mode=='IN') $input[$name] = isset($_POST[$name])?$_POST[$name]:false;
		if ($mode=='OUT') $output[$name] = false;
	}

	if ($method == 'GET') {
		echo "<p>$comment</p>\n";
		echo "<form action=\"\" method=\"POST\">\n";
		echo "<input type=\"submit\" value=\"call\"/>\n";
		echo "$procedure(\n";
		echo "<ol>\n";
		foreach ($parameters as $p) {
			$label = "$p[mode] - $p[name] - $p[type]";
			if ($p['mode']=='IN') $input = "<input name=\"$p[name]\"/>";
			else $input = '<input disabled="disabled">';
			echo "<li>$input $label</li>\n";
		}
		echo "</ol>);\n";
		echo "</form>\n";
	} elseif ($method == 'POST') {

		$values = array_map(function ($value) use ($link) {
			if ($value===null) return null;
			return mysqli_real_escape_string($link,(string)$value);
		},array_values($input));
		$input = implode('; ',array_map(function ($key,$value) { return "set @`$key` = '$value'"; },array_keys($input),$values));
		$output = implode(', ',array_map(function ($key) { return "@`$key` as `$key`"; },array_keys($output)));
		$names = implode(', ',array_map(function ($parameter) { return "@`$parameter[name]`"; },$parameters));
		if ($input) $input = "$input;";
		if ($output) $output = "; select $output";
		$sql = "$input CALL `$procedure` ($names) $output";
		//die($sql);

		// excecute SQL statement
		mysqli_multi_query($link,$sql);
		// get last result as json
		$first = true;
		echo '[';
		do {
			$result = mysqli_store_result($link);

			if ($result) {
				if (!$first) echo ',';
				else $first = false;
				// get last result as json
				echo '[';
				for ($i=0;$i<mysqli_num_rows($result);$i++) {
					echo ($i>0?',':'').json_encode(mysqli_fetch_object($result));
				}
				echo ']';
			}

		} while (mysqli_more_results($link)?mysqli_next_result($link):false);
		echo ']';

	}

}
