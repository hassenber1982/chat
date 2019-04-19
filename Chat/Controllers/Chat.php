<?php

namespace Chat\Controllers;

use \Core\View;

/**
 * Home controller
 *
 * PHP version 7.2
 */
class Chat extends \Core\Controller
{

    /**
     * Affichage de page chat
     *
     * @return void
     */
    public function indexAction() : void
    {
        if (isset($_SESSION['id']))
            View::render('Chat/index.php');
        else
            header("Location: /");

    }

    /**
     * Affichage de page chat
     *
     * @return void
     */
    public function listAction() : void
    {
        View::render('Chat/list.php');
    }
}
