<?php
namespace App\Controllers;

use \Core\View;

/**
 * Home controller
 *
 * PHP version 5.4
 */
class Home extends \Core\Controller
{

    /**
     * Before filter
     *
     * @return void
     */
    protected function before()
    {
        
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
        //echo 'Hello from the index action in the Home controller!';
        View::render('Home/Header.php');
        View::render('Home/chUsername.php');
        View::render('Home/chPassword.php');
        View::render('Home/chEmail.php');
        View::render('Home/Login.php');
        View::render('Home/Register.php');
        View::render('Home/Menu.php');
        View::render('Home/MainPage.php');
        View::render('Home/Footer.php');
    }
   
}
