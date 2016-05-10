<?php

/* affiche de facon formatée <pre> */


//vide la session
if (isset($_GET['logout'])) {
    unset($_SESSION);
    session_destroy();
    //rediriger l'utilisateurs
    header('Location: index.php');
    exit();
}

/* isset si elle existe. On teste si la valeur loginForm existe.
  Est ce que le formulaire a été validé? */
/* Pas connecté par defaut */
//! en début d'instruction pour inverser
if (!isset($_SESSION['bIsConnected'])) {
    $_SESSION['bIsConnected'] = false;
    $_SESSION['sEmailConnected'] = null;
}



/* isset si elle existe. On teste si la valeur loginForm existe.
  Est ce que le formulaire a été validé? */

//loginForm c'est le bouton de valiation du formulaire
if (isset($_POST['loginForm'])) {
    //récupérer les valeurs email et password utiliser le name du form
    $sEmailInput = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $sPasswordInput = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

    if ($sEmailInput && $sPasswordInput) {
        // Si oui, on parcours nos utilisateurs pour trouver une correspondance
        $oUser = $oUsersManager->getByEmailAndPassword($sEmailInput, $sPasswordInput);
        //echo 'toto';
        if ($oUser instanceof user) {
            $_SESSION
            //on a trouvé un utilisateur qui correspond
            $_SESSION['idUser'] = $oUser->getId();
            $_SESSION['sEmailConnected'] = $sEmailInput;
        }
    }
}

//Formulaire de Contact il faut récupérer le bouton de valisation name="contactForm"
if (isset($_POST['contactForm'])) {
    //récupérér les valeurs Motifs, Prenom, Nom, email
    $sMotifInput = filter_input(INPUT_POST, 'motif', FILTER_SANITIZE_STRING);
    $sPrenomInput = filter_input(INPUT_POST, 'prenom', FILTER_SANITIZE_STRING);
    $sNomInput = filter_input(INPUT_POST, 'nom', FILTER_SANITIZE_STRING);
    $sEmailInput = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);

    if ($sMotifInput && $sPrenomInput && $sNomInput && $sEmailInput) {
        //on vérifie si les valeurs sont correctes si vrai
        echo $sMotifInput;
        echo '<br/>';
        echo $sPrenomInput;
        echo '<br/>';
        echo $sNomInput;
        echo '<br/>';
        echo $sEmailInput;
    } else {
        echo 'Veuillez renseigner correctement vos informations';
    }
}
//Il faut récupérer l'annonce déposée, la sérialiser et la sauver.
//annonceForm c'est le bouton de validation qui permet de voir que le formulaire a été rempli (annonceForm c'est le bouton créer)
//on parcourt les cases de notre tableau
if (isset($_POST['annonceForm'])) {
    //récupérer les valeurs de l'annonce utiliser name du formulaire
    //filtrage et validation des champs de formulaire et netttoyage
    //$sTitreInput devient la valeur propre nettoyée
    $sTitreInput = filter_input(INPUT_POST, 'titreForm', FILTER_SANITIZE_STRING);
    $sDescriptionInput = filter_input(INPUT_POST, 'descriptionForm', FILTER_SANITIZE_STRING);
    $sPrixInput = filter_input(INPUT_POST, 'prixForm', FILTER_VALIDATE_INT);

    //Upload d'une image
    echo '<pre>';
    //print_r($_POST);
    print_r($_FILES);
    print_r($_FILES['imgForm']['tmp_name']);
    echo '</pre>';

    //Cette variable teste le type de fichier
    $aAllowedTypes = array('image/png', 'image/gif', 'image/jpg', 'image/jpeg');
    $sImage1 = false;

    //On recherche dans le tableau FILES
    if (isset($_FILES['imgForm']) && $_FILES['imgForm']['error'] == UPLOAD_ERR_OK && in_array($_FILES['imgForm']['type'], $aAllowedTypes)) {
        $sImage1 = $_FILES['imgForm']['tmp_name'];
    }

    //Vérifier que les données soient correctes pas nulles
    //permet d'afficher les valeurs nulles
    //var_dump(array($sTitreInput, $sDescriptionInput, $sPrixInput, $sImage1));
    if ($sTitreInput && $sDescriptionInput && $sPrixInput && $sImage1) {

        $oAnnonce = new Annonce(); //on crée notre objet annonce
        $oAnnonce->setTitle($sTitreInput); // on place dans l'objet les valeurs
        $oAnnonce->setDescription($sDescriptionInput);
        $oAnnonce->setPrice($sPrixInput);
        $oAnnonce->setCreatedDate('2016-05-09');

        $oAnManager->insert($oAnnonce);
        $sFileDest = 'image_ann' . $oAnnonce->getId() . '_001.png';
        if (move_uploaded_file($sImage1, 'userfiles/' . $sFileDest)) {
            print_r('yyy');
            $oAnnonce->setPicture($sFileDest);
            $oAnManager->update($oAnnonce);
            //sauvegarde de l'annonce voir fonction save dans class_annonce
            $oAnnonce->save();
        }
    }
}




//
