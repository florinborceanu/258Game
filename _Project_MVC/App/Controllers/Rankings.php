<?php

namespace App\Controllers;

use \Core\View;
use App\Models\Ranks;
/**
 * Home controller
 *
 * PHP version 5.4
 */
class Rankings extends \Core\Controller
{

    /**
     * Before filter
     *
     * @return void
     */
    protected function before()
    {
        //echo "(before) ";
        //return false;
    }

    /**
     * After filter
     *
     * @return void
     */
    protected function after()
    {
        //echo " (after)";
    }

    /**
     * Show the index page
     *
     * @return void
     */
    public function indexAction()
    {
        $ranks = Ranks::getAll();
        //echo 'Hello from the index action in the Home controller!';
        View::render('Rankings/Header.php');
        View::render('Rankings/Rankings.php',['ranks' => $ranks]);
        View::render('Rankings/Footer.php');
        View::render('Home/Menu.php');
    }
   
}
