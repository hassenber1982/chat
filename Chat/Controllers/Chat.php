<?php

namespace Chat\Controllers;

use \Core\View;

/**
 * chat controller
 *
 * PHP version 7.2
 */
class Chat extends \Core\Controller
{

    public function indexAction() : void
    {
        if (isset($_SESSION['id']))
            View::render('Chat/index.php');
        else
            header("Location: /");

    }

    public function listAction() : void
    {

        View::render('Chat/list.php');
    }
}
