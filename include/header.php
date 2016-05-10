<header>

    <?php if (isset($_SESSION['idUser'])) { ?>
        <span>Connecté sous <?php echo $_SESSION['sEmailConnected']; ?></span>
        <br />
        <a href="index.php?logout">Se déconnecter</a>
    <?php } else {
        ?>
        <!--on continue a afficher le formulaire-->
        <form action="index.php" id="connexion" method="POST"><!--Post pour les formulaires-->
            <div>
                <!-- Les champs de formulaire (input, textarea, select) doivent avoir un attribut "name" qui correspondra à la clé de notre tableau PHP quand nous récupérons les données de notre formulaire -->
                <input type="text" id="email" name="email" placeholder="Votre email" required />
            </div>
            <div>
                <input type="password" id="password" name="password" placeholder="Votre mot de passe" required/>
            </div>
            <input type="submit" name="loginForm" value="Se connecter" required />
        </form>
    <?php } ?>



    <section class="menu">
        <h6>faux titre</h6>
        <article id="logo">
            <h6>faux titre</h6>
            <img src="images/logo.png" title="le bon coin" alt="le bon coin">


        </article>

        <article>
            <h6>faux titre</h6>

            <nav>	<!--pour la semantique-->
                <ul>
                    <li><a href="index.php" title="accueil">Accueil</li>
                    <li><a href="index.php?page=depotAnnonce" > Déposer une annonce</a></li>
                    <li>Offre</li>
                    <li>Demande</li>
                    <li>Mes annonces</li>
                    <li><a href="index.php?page=contact" title="contact">Contact</a></li>
                    <!--menu ajax-->
                    <li ><a  id="homeajax" href="#" title="accueil-ajax">Accueil ajax</a></li>
                    <li ><a id="contactajax" href="#"  title="contact-ajax">Contact ajax</a></li>

                </ul>
            </nav>
        </article>

    </section>
</header>