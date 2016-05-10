<?php

class AnnonceManager {

    private $oDB;

    public function __construct(PDO $oDB) {
        $this->oDB = $oDB;
    }

    public function getList() {
//on veut toutes les annonces et on construit l'objet on cherche dans la base de données
        $oStmt = $this->oDB->prepare('SELECT * FROM annonces');
        $oStmt->execute();
        //$oData = mysql_query('SELECT * FROM annonces');
//var_dump($oData); (affiche l'objet)

        $aList = array();
        while ($aLine = $oStmt->fetch(PDO::FETCH_ASSOC)) {
            $oAnnonce = new Annonce($aLine);
            $aList[] = $oAnnonce;
        }
        return $aList;
    }

//recupérer l'id de l'annonce pour afficher le detail
    public function get($id) {
        $oQuery = $this->oDB->prepare('SELECT * FROM annonces WHERE id = ?');
        $oQuery->bindValue(1, $id, PDO::PARAM_INT);
        $oQuery->execute();

        $aData = $oQuery->fetch(PDO::FETCH_ASSOC);
        return new Annonce($aData);
    }

//en mettant Annonce on force l'objet Annonce
//& passage par référence (adresse mémoire)
    public function insert(Annonce &$oAnnonce) {
        $oQuery = $this->oDB->prepare('INSERT INTO annonces
			(id_user, title, description, picture, price, created_date)
			VALUES (:id_user, :title, :description, :picture, :price, :created_date)');
        $oQuery->bindValue(':id_user', $oAnnonce->getIdUser(), PDO::PARAM_INT);
        $oQuery->bindValue(':title', $oAnnonce->getTitle(), PDO::PARAM_STR);
        $oQuery->bindValue(':description', $oAnnonce->getDescription(), PDO::PARAM_STR);
        $oQuery->bindValue(':picture', $oAnnonce->getPicture(), PDO::PARAM_STR);
        $oQuery->bindValue(':price', $oAnnonce->getPrice(), PDO::PARAM_INT);
        $oQuery->bindValue(':created_date', $oAnnonce->getCreatedDate()->format('Y-m-d H:i'), PDO::PARAM_STR);


        if ($oQuery->execute()) {
            $oAnnonce->setId($this->oDB->lastInsertId());
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function update(Annonce $oAnnonce) {
        $oQuery = $this->oDB->prepare('UPDATE annonces
			SET
                            title = :title,
                            description = :description,
                            picture = :picture,
                            price = :price
			WHERE id = :id');
        $oQuery->bindValue(':title', $oAnnonce->getTitle(), PDO::PARAM_STR);
        $oQuery->bindValue(':description', $oAnnonce->getDescription(), PDO::PARAM_STR);
        $oQuery->bindValue(':picture', $oAnnonce->getPicture(), PDO::PARAM_STR);
        $oQuery->bindValue(':price', $oAnnonce->getPrice(), PDO::PARAM_INT);
        $oQuery->bindValue(':id', $oAnnonce->getId(), PDO::PARAM_INT);

        if ($oQuery->execute()) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function delete($id) {
        $oQuery = $this->oDB->prepare('DELETE FROM  annonce WHERE id = :id');
        $oQuery->bindValue(':id', $oAnnonce->getId(), PDO::PARAM_INT);

        if ($oQuery->execute()) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

}
