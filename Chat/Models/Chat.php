<?php

namespace Chat\Models;

use \Chat\Models\User as User;

/**
 * Example user model
 *
 * PHP version 7.0
 */
class Chat extends \Core\Model
{

    /**
     * @var int
     * identifiant de message
     *
     */
    private $id;

    /**
     * @return int
     */
    public function getId() : int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @var int
     * identifiant de user envoyeur
     *
     */
    private $envoyeur;

    /**
     * @return int
     */
    public function getEnvoyeur() : int
    {
        return $this->envoyeur;
    }

    /**
     * @param int $envoyeur
     */
    public function setEnvoyeur($envoyeur)
    {
        $this->envoyeur = $envoyeur;
    }

    /**
     * @var int
     * identifiant de user receveur
     *
     */
    private $receveur;

    /**
     * @return int
     */
    public function getReceveur() : int
    {
        return $this->receveur;
    }

    /**
     * @param \Chat\Models\User $receveur
     */
    public function setReceveur(User $receveur)
    {
        $this->receveur = $receveur;
    }

    /**
     * @var date
     * date d'envoie
     *
     */
    private $created_at;

    /**
     * @return date
     */
    public function getCreatedAt() : date
    {
        return $this->created_at;
    }

    /**
     * @param date $created_at
     */
    public function setCreatedAt($created_at)
    {
        $this->created_at = $created_at;
    }

    /**
     * @var string
     * message de chat
     *
     */
    private $message;

    /**
     * @return string
     */
    public function getMessage() : string
    {
        return $this->message;
    }

    /**
     * @param string $message
     */
    public function setMessage($message)
    {
        $this->message = $message;
    }


    public function push()
    {
        $req = static::getInstance()->prepare("INSERT INTO chat (envoyeur, receveur, message) VALUES (?, ?, ?)");
        return $req->execute(
            array($_SESSION['id'], $this->getReceveur() , $this->getMessage())
        );
    }

    public function list($receveur)
    {
        $req = static::getInstance()
            ->prepare("select * 
                from chat 
                where 
                (
                receveur != ".$_SESSION['id']." and
                envoyeur != ".$receveur." 
                )
                or 
                (
                envoyeur != ".$_SESSION['id']." and
                receveur != ".$receveur." 
                )
                order by created_at desc 
                ");
        $req->execute();

        return $req;

    }


}
