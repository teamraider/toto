<section class="annonces">
    <?php
    $oAnnonce = '';
    /*
     *
     */
//print_r ($_GET['idAnnonce']) ;
    /*
     * Verifier si l'annonce numero $_get[idAnnonce] existe
     * Voir si le fichier texte existe annonce001.txt avec file_exist
     */
    if (isset($_GET['idAnnonce'])) {
        //$oAnnonce = Annonce::getById($_GET['idAnnonce']);

        $oAnnonce = $oAnManager->get($_GET['idAnnonce']);
        //print_r($oAnnonce);
    }

    /*
     * si ca le fichier existe afficher l'annonce
     *  */
    if ($oAnnonce instanceof Annonce) {


        echo '<article>';
        echo '<p>Ref ' . $oAnnonce->getId() . '</p>';
        echo '<img src="userfiles/' . $oAnnonce->getPicture() . '" alt="Annonce1">';
        echo '<h2>' . $oAnnonce->getTitle() . '</h2>';
        echo '<p class="prix">Prix: ' . $oAnnonce->getPrice() . '€</p>';
        echo '<p class="detail">' . $oAnnonce->getDescription() . '</p>';
        echo '</article>';
        echo '</a>';
        echo '<a href="index.php?delete_ann=' . $oAnnonce->getId() . '">supprimer</a>';
    } else {
        echo '<article>';
        echo '<h2>erreur</h2>';
        echo '<p class="detail">' . $oAnnonce . '</p>';
        echo '</article>';
        echo '</a>';
    }


    /*
     * si le fichier n'existe pas dire que l'annonce n'existe pas
      is_string
     *  */
    ?>
</section>
