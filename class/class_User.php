<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class user {

    protected $id;
    protected $email;
    protected $password;

    public function __construct($aData = array()) {
        if ($aData) {

            $this->hydrate($aData);
        }
    }

//fonction qui permet de faire le lien entre la base de données et la class
    public function hydrate($aData) {
        $this->setId($aData['id']);
        $this->setEmail($aData['email']);
        $this->setPassword($aData['password']);
    }

    function getId() {
        return $this->id;
    }

    function getEmail() {
        return $this->email;
    }

    function getPassword() {
        return $this->password;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setEmail($sEmail) {
        $this->email = $sEmail;
    }

    function setPassword($sPassword) {
        $this->password = $sPassword;
    }

}
