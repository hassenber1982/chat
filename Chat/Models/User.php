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
        $this->password = md5($password);
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

    public function login($user, $psd) : int
    {
        $req = static::getInstance()
            ->query("select * from user 
                where user='".$user."'");
        $q = $req->fetch();
        if ($req->rowCount()>0 && md5($psd)== $q['password']) {
            $this->setIsConnect(1);
            $_SESSION['user'] = $q['user'];
            $_SESSION['id'] = $q['id'];
            return $_SESSION['id'];
        } else
            return 0;

    }

    public function list()
    {
        $req = static::getInstance()
            ->prepare("select * 
                from user 
                where id != ".$_SESSION['id']."
                ");
        $req->execute();

        return $req;

    }





}
