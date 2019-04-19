<?php

namespace Chat\Models;

use PDO;

/**
 * Class User model
 *
 * PHP version 7.2
 */
class User extends \Core\Model
{

    /**
     * @var int
     * identifiant de l'utilisateur
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
     * @var string
     * nom de l'utilisateur
     */
    private $user;

    /**
     * @return string
     */
    public function getUser() : string
    {
        return $this->user;
    }

    /**
     * @param string $user
     */
    public function setUser($user)
    {
        if (is_string($user))
            $this->user = $user;
        else
            $this->user = "";
    }

    /**
     * @var string
     * mot de passe d'utilisateur de l'utilisateur
     */
    private $password;

    /**
     * @return string
     */
    public function getPassword() : string
    {
        return $this->password;
    }

    /**
     * @param string $password
     */
    public function setPassword($password)
    {
        $this->password = password_hash($password,PASSWORD_BCRYPT, ['cost' => 12]);
    }

    /**
     * @var boolean
     * email d'utilisateur de l'utilisateur
     */
    private $is_connect;

    /**
     * @return bool
     */
    public function getIsConnect() : bool
    {
        return $this->is_connect;
    }

    /**
     * @param bool $is_connect
     * @return null
     */
    public function setIsConnect($is_connect)
    {
        $this->is_connect = $is_connect;
    }

    public static function getAll()
    {
        $db = static::getDB();
        $stmt = $db->query('SELECT id, name FROM users');
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function push()
    {
        $req = static::getInstance()->prepare("INSERT INTO user (user, password) VALUES (?, ?)");
        return $req->execute(array($this->getUser(), $this->getPassword()));
    }


    /**
     * @return string
     */

    public function findByName($user) : bool
    {
        $req = static::getInstance()->query("select * from user where user='".$user."'");
        return $req->rowCount();
    }

    public function login($user, $psd) : bool
    {

        $psd = password_hash($psd,PASSWORD_BCRYPT, ['cost' => 12]);

        $req = static::getInstance()
            ->query("select * from user 
                where user='".$user."' and password='".$psd."'"
        );
        if ($req->rowCount()>0) {
            $this->setIsConnect(1);
            $_SESSION['user'] = $req->fetch()[0]['user'];
            $_SESSION['id'] = $req->fetch()[0]['id'];
            return $_SESSION['id'];
        } else
            return $req->rowCount();

    }




}
