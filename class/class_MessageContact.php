<?php

/*
 * Construction d'une classe contact.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Contact {

    private $sMotif;
    private $sPrenom;
    private $sNom;
    private $sEmail;

    //setter ctrl i pour générer automatiquement
    function setSMotif($sMotif) {
        $this->sMotif = $sMotif;
    }

    function setSPrenom($sPrenom) {
        $this->sPrenom = $sPrenom;
    }

    function setSNom($sNom) {
        $this->sNom = $sNom;
    }

    function setSEmail($sEmail) {
        $this->sEmail = $sEmail;
    }

    //getter ctrl i pour générer automatiquement
    function getSMotif() {
        return $this->sMotif;
    }

    function getSPrenom() {
        return $this->sPrenom;
    }

    function getSNom() {
        return $this->sNom;
    }

    function getSEmail() {
        return $this->sEmail;
    }

}
