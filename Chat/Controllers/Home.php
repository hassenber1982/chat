<?php

namespace Chat\Controllers;

use \Core\View;
use \Chat\Models\User;

/**
 * Home controller
 *
 */
class Home extends \Core\Controller
{

    public function indexAction()
    {
        View::render('Home/index.php');
    }

    public function loginAction()
    {
        $message = '';
        $user =  new User();
        if (isset($_POST['user']) && isset($_POST['password'])) {

            if ($user->login($_POST['user'], $_POST['password']))
                $message .= 'connexion reussi';
            else
                $message .= 'connexion errone';
        } else {
            $message .= 'Erreur POST';
        }
        View::render('Home/login.php', [
            'result' => $message
        ]);


    }

    public function connexionAction()
    {
        $user =  new User();
        $message = "";
        $sav = '1';

        if (isset($_POST['user']) && isset($_POST['password'])
            && isset($_POST['psd'])) {

            $user->setUser($_POST['user']);
            $user->setPassword($_POST['password']);
            $psd = $_POST['password'];
            $ver = $_POST['psd'];

            if ($psd !== $ver) {
                $message .= 'Merci de bien renseigner le mot de passée <br />';
                $sav = '0';
            }

            if ($user->findByName($user->getUser())) {
                $message .= 'Utilisateur est deja affecté <br />';
                $sav = '0';
            }

            if ($sav) {
                if ($user->push())
                    $message .='Succes. Vous pouvez vous conencter a present';
                else
                    $message .='Utilisateur errone';
            }

        } else {
            $message .= 'Erreur POST';
        }


        View::render('Home/connexion.php', [
            'result' => $message
        ]);

    }
}
