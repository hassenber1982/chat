<?php

namespace Chat\Controllers;

use \Core\View;
use \Chat\Models\User;


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
        $user = new User();


        View::render(
            'Chat/list.php',  [
                'result' => $user->list()
            ]
        );
    }
}
