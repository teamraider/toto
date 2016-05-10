<?php

// le réferenctiel
class Annonce {

//les variables doivent être identiques aux entetes dans la base
    private $id;
    private $idUser;
    private $title;
    private $description;
    private $picture;
    private $price;
    private $created_date;
    public static $NB_ANNONCES = 0;

//Pour récupérer l'ID de l'annonce
    public static function getById($id) {
//print_r($id);
        $filename = 'data/' . 'annonce' . str_pad($id, 3, '0', STR_PAD_LEFT) . '.txt';
//print_r($filename);
        if (file_exists($filename)) {
            return unserialize(file_get_contents($filename));
        } else {
            return "Le fichier $filename n'existe pas.";
        }
    }

//on crée la fonction SAVE doit prendre l'objet annonce. $this fait référence à oAnnonce
    public function save() {
//on récupère le nom du fichier 0xx : 3 digit
        $sFilename = 'annonce' . str_pad($this->getId(), 3, '0', STR_PAD_LEFT);
//permet d'écrire dans un fichier
        file_put_contents('data/' . $sFilename . '.txt', serialize($this));
    }

//fonction
    public static function load() {
        $aList = array();
        foreach (glob('data/annonce*') as $filePath) {
            $aList[] = unserialize(file_get_contents($filePath));
            Annonce::$NB_ANNONCES = count($aList);
        }
        return $aList;
    }

//get
    public function getId() {
        return $this->id;
    }

    function getIdUser() {
        return $this->idUser;
    }

    public function getTitle() {
        return $this->title;
    }

    public function getDescription() {
        return $this->description;
    }

    public function getPicture() {
        return $this->picture;
    }

    public function getPrice() {
        return $this->price;
    }

    public function getCreatedDate() {
        return $this->created_date;
    }

//set la variable s'appelle comme on veut
    public function setId($var) {
        $this->id = $var;
    }

    function setIdUser($idUser) {
        $this->idUser = $idUser;
    }

    public function setTitle($var) {
        $this->title = $var;
    }

    public function setDescription($var) {
        $this->description = $var;
    }

    public function setPicture($var) {
        $this->picture = $var;
    }

    public function setPrice($var) {
        $this->price = $var;
    }

    public function setCreatedDate($var) {
        $this->created_date = $var;
    }

//contruct c'est pour les new
    public function __construct($aData = array()) {
        if ($aData) {
//on reprend les set de la classAnnonceManager
//$this->setiId($aData['id']);
//$this->setTitle($aData['title']);
//$this->setiId($aData['id']);
            $this->hydrate($aData);
        }
//print_r($this);
    }

//fonction qui permet de faire le lien entre la base de données et la class
    public function hydrate($aData) {
        $this->setId($aData['id']);
        $this->setTitle($aData['title']);
        $this->setDescription($aData['description']);
        $this->setPicture($aData['picture']);
        $this->setPrice($aData['price']);
        $this->setCreatedDate($aData['created_date']);

        //foreach (array_keys(get_class_vars(get_class($this))) as $skey) {
        //    if (isset($aData[$skey])) {
        //        $this->$skey = $aDate[$skey];
        //    }
    }

}

?>