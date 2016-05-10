<?php

If (isset($_SESSION['idUser'])) {
    ?>
    <section class = "depotannonces">
        <h1>Depots annonces</h1>
        <div>
            <form id = "formAnnonce" method = "POST" enctype = "multipart/form-data">

                <label for = "titreForm">Titre : </label>
                <input type = "text" id = "titreForm" name = "titreForm" placeholder = "Saisir votre nom d'annonce" required><br/><br/>

                <label for = "descriptionForm">Description : </label>
                Description: <input id = "descriptionForm" type = "textarea" name = "descriptionForm" rows = "4" cols = "50" placeholder = "Saisir la description" required><br/><br/>

                <label for = "prixForm">Prix : </label>
                Prix: <input id = "prixForm" type = "text" name = "prixForm" placeholder = "Saisir le prix" required><br/><br/>

                <label for = "imgForm">Image : </label>
                Image url: <input id = "imgForm" type = "file" name = "imgForm" placeholder = "Placer votre image" required><br/><br/>


                <input id = "annonceForm" type = "submit" name = "annonceForm" value = "Creer"><br/><br/>
            </form>
        </div>
    </section>

    <?php

} else {
    //var_dump($_SESSION['bIsConnected']);
    echo 'Veuillez vous connecter pour déposer une annonce';
}
?>