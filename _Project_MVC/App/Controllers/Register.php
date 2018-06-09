<?php

namespace App\Controllers;
use \Core\Model;

/**
 * Home controller
 *
 * PHP version 5.4
 */
class Register extends \Core\Controller
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
        //echo 'Hello from the index action in the Home controller!'
        $file="../App/Models/Register.php";
        require $file;
    }
   
}
