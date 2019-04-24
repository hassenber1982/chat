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

    /**
     * @throws \Exception
     */
    public function indexAction() : void
    {
        if (isset($_SESSION['id']))
            View::render('Chat/index.php');
        else
            header("Location: /");

    }

    /**
     * @throws \Exception
     */
    public function listAction() : void
    {
        /** @var User $user */
        $user = new User();
        View::render(
            'Chat/list.php',  [
                'result' => $user->list()
            ]
        );
    }


    /**
     * @throws \Exception
     */
    public function chatAction() : void
    {
        if (!empty($_POST['receveur'])) {
            if (isset($_POST['receveur'])) {
                $chat = new \Chat\Models\Chat();
                View::render(
                    'Chat/chat.php',  [
                        'result' => $chat->list($_POST['receveur'])
                    ]
                );
            }

        }

    }


    /**
     * @throws \Exception
     */
    public function submitAction() : void
    {
        $message = '';
        /** @var User $user */
        if (isset($_POST['receveur']) && isset($_POST['message'])) {

            $chat = new \Chat\Models\Chat();
            $chat->setReceveur($_POST['receveur']);
            $chat->setMessage($_POST['message']);
            if ($chat->push())
                $message .= 'chat create';
            else
                $message .= 'chat errone';
        }
        View::render('Home/connexion.php', [
            'result' => $message
        ]);

    }

}
