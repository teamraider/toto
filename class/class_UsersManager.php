<?php

class UserManager {

    //instance PDO
    private $oDB;

    //constructeur class UserManager
    public function __construct(PDO $oDB) {
        $this->oDB = $oDB;
    }

    public function get($id) {
        $oQuery = $this->oDB->prepare('SELECT * FROM users WHERE id= ?');
        $oQuery = blindValue(1, $iId, PDO::PARAM_INT);
        $oQuery = execute();

        $aData = $oQuery->fetch(PDO::FETCH_ASSOC);
        return new User($aData);
    }

    public function getByEmailAndPassword($email, $password) {
        $oQuery = $this->oDB->prepare('SELECT * FROM users WHERE email = :email AND password = :password');
        $oQuery->bindValue(':email', $email, PDO::PARAM_STR);
        $oQuery->bindValue(':password', $password, PDO::PARAM_STR);
        $oQuery->execute();

        $aData = $oQuery->fetch(PDO::FETCH_ASSOC);
        return new User($aData);
    }

}
