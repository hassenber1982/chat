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
     * @var User
     * identifiant de user envoyeur
     *
     */
    private $envoyeur;

    /**
     * @return \Chat\Models\User
     */
    public function getEnvoyeur() : User
    {
        return $this->envoyeur;
    }

    /**
     * @param \Chat\Models\User $envoyeur
     */
    public function setEnvoyeur(User $envoyeur)
    {
        $this->envoyeur = $envoyeur;
    }

    /**
     * @var User
     * identifiant de user receveur
     *
     */
    private $receveur;

    /**
     * @return \Chat\Models\User
     */
    public function getReceveur() : User
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

}
