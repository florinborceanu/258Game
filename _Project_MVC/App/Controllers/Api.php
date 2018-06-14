<?php
namespace App\Controllers;


/**
 * Home controller
 *
 * PHP version 5.4
 */
class Api extends \Core\Controller
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
    public function playerAction($name, $id)
    {   
        $file ="../Api/player/$name" . ".php";
        include_once $file;
    }
    public function villainsAction($name, $id)
    {
        $file ="../Api/villains/$name" . ".php";
        include_once $file;
    }
    public function statsAction($name, $id)
    {
        $file ="../Api/stats/$name" . ".php";
        include_once $file;
    }
   
}
