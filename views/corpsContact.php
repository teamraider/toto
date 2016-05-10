<aside>
    <h2>Questions fréquentes</h2>

    <article>
        <h6>faux titre</h6>
        <p>Question 1</p>

    </article>
    <article>
        <h6>faux titre</h6>
        <p>Question 2</p>

    </article>
    <article>
        <h6>faux titre</h6>
        <p>Question 3<p>

    </article>

</aside>
<section class="annonces">
    <h1>Contact et FAQ</h1>
    <!--<div id="form">
            <form>
                    <div class="ligne1">
                    <input type="text" placeholder="Saisie libre">
                    <select>
        <option value="default">Catégories</option>
        <option value="aa">aa</option>
        <option value="bb">bb</option>
    </select>
                    <select>
        <option value="default">Région</option>
        <option value="Paca">Paca</option>
        <option value="Var">Var</option>
    </select>
  </div>
    <div class="ligne2">
     <input id="ville" list="ville" name="ville" placeholder="Indiquez la Ville">
            <datalist id="ville">
                            <option value="Marseille">Marseille</option>
                            <option value="Paris">Paris</option>
                            </datalist>

                     <input id="form-button" type="submit" value="Envoyez" />
                    </div>


            </form>-->




</div>
<div>

    <form id="contact" method="POST" enctype="multipart/form-data">
        <!--Le label -->
        <label for="motif">Motif</label>
        <select id="motif"name="motif" required >

            <option value="defaut"> Motif du contact</option>
            <option value="Aucune">Aucune</option>
            <option value="prob_acces" selected="selected"> Problème d'accès</option>
        </select>
        <label for="Prenom">Prenom</label>
        <!--echo et php permet si erreur sur le form de réafficher la valeur-->
        <input id="prenom" type="texte" name="prenom" placeholder="renseignez votre prénom" value="<?php echo isset($_POST['prenom']) ? $_POST['prenom'] : ''; ?>" required>

        <label for="nom">nom</label>
        <input id="Nom" type="texte" name="nom" placeholder="renseignez votre nom" required>

        <label for="email">email</label>
        <input id="email" type="email" name="email" placeholder="renseignez votre email" required>
        <input id="form-button" type="submit" name="contactForm" value="Envoyez" />
    </form>

</div>

</section>
