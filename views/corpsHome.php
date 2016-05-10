

<aside>
    <?php
    //on fait un foreach pour que les annonces s'ajoutent dynamiquement
    foreach ($dataAnnonces as $annonce) {

        echo '<article>';
        echo '<p>Ref ' . $annonce->getId() . '</p>';
        echo '<p>' . $annonce->getTitle() . '</p>';
        echo '<img src="userfiles/' . $annonce->getPicture() . '" alt="Annonce1">';
        echo '<p>' . $annonce->getDescription() . '</p>';
        echo '</article>';
    }
    /*
      //annonce 1

      echo '<article>';
      echo '<p>Ref '.$annonce1->getiID().'</p>';
      echo '<p>'.$annonce1->getsTitle().'</p>';
      echo '<img src="'.$annonce1->getsImage().'" alt="Annonce1">';
      echo '</article>';

      //annonce 2
      echo '<article>';
      echo '<p>Ref '.$annonce2->getiID().'</p>';
      echo '<p>'.$annonce2->getsTitle().'</p>';
      echo '<img src="'.$annonce2->getsImage().'" alt="Annonce1">';
      echo '</article>';

      //annonce 3
      echo '<article>';
      echo '<p>Ref '.$annonce3->getiID().'</p>';
      echo '<p>'.$annonce3->getsTitle().'</p>';
      echo '<img src="'.$annonce3->getsImage().'" alt="Annonce1">';
      echo '</article>';
     */
    ?>
</aside>



<section class="annonces">
    <h1>Annonces disponibles</h1>
    <div id="form">
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


        </form>
    </div>
    <div >
        <!--
        <article>

                <img src="images/annonce1.png" title="Annonce 1" alt="Annonce 1">
                <h2>Titre annnonce 1</h2>
                <p class="prix">Prix: 10€</p>
                <p class="detail">Détail annonce 1</p>


        </article>
        -->
        <?php
        //faire un foreach pour que les autres annonces s'ajoutent

        foreach ($dataAnnonces as $annonce) {

            //ajouter un lien sur la balise <article>
            echo '<a href="index.php?page=detailAnnonce&idAnnonce=' . $annonce->getId() . '">';
            echo '<article>';
            echo '<p>Ref ' . $annonce->getId() . '</p>';
            echo '<img src="userfiles/' . $annonce->getPicture() . '" alt="Annonce1">';
            echo '<h2>' . $annonce->getTitle() . '</h2>';
            echo '<p class="prix">Prix: ' . $annonce->getPrice() . '€</p>';
            echo '<p class="detail">' . substr($annonce->getDescription(), 0, 100) . '</p>';
            echo '</article>';
            echo '</a>';
        }

        /*
          //annonce 1
          echo '<article>';
          echo '<p>Ref '.$annonce1->getiID().'</p>';
          echo '<img src="'.$annonce1->getsImage().'" alt="Annonce1">';
          echo '<h2>'.$annonce1->getsTitle().'</h2>';
          echo '<p class="prix">Prix: '.$annonce1->getiPrice().'€</p>';
          echo '<p class="detail">'.$annonce1->getsDescription().'</p>';
          echo '</article>';

          //annonce 2
          echo '<article>';
          echo '<p>Ref '.$annonce2->getiID().'</p>';
          echo '<img src="'.$annonce2->getsImage().'" alt="Annonce1">';
          echo '<h2>'.$annonce2->getsTitle().'</h2>';
          echo '<p class="prix">Prix: '.$annonce2->getiPrice().'€</p>';
          echo '<p class="detail">'.$annonce2->getsDescription().'</p>';
          echo '</article>';

          //Annonce 3
          echo '<article>';
          echo '<p>Ref '.$annonce3->getiID().'</p>';
          echo '<img src="'.$annonce3->getsImage().'" alt="Annonce1">';
          echo '<h2>'.$annonce3->getsTitle().'</h2>';
          echo '<p class="prix">Prix: '.$annonce3->getiPrice().'€</p>';
          echo '<p class="detail">'.$annonce3->getsDescription().'</p>';
          echo '</article>';
         */
        ?>
        <!--
        <article>

                <img src="images/annonce2.png" title="Annonce 2" alt="Annonce 2">
                <h2>Titre annnonce 2</h2>
                <p class="prix"> Prix: 20€</p>
                <p class="detail">Détail annonce 2</p>


        </article>
        <article>
                <img src="images/annonce3.png" title="Annonce 3" alt="Annonce 3">
                <h2>Titre annnonce 3</h2>
                <p class="prix">Prix: 30€</p>
                <p class="detail">Détail annonce 3</p>



        </article>
        -->
    </div>

</section>