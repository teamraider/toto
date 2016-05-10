<?php
//tableau
$data=array();
$data[]=array (
	'titre'=>'toto',
	'prix'=>'20',
	'photo'=>'images/annonce1.png',
	);


?>
<aside>
			<h2>Premium Annonce</h2>
			
				<article>
					<h6>faux titre</h6>
					<p>Annonce premium1</p>
					<img src="images/annoncep1.png" title="Annonce premium 1" alt="Annonce premium 1">
				</article>
				<article>
					<h6>faux titre</h6>
					<p>Annonce premium2</p>
					<img src="images/annoncep2.png" title="Annonce premium 2" alt="Annonce premium 2">
				</article>
				<article>
					<h6>faux titre</h6>
					<p>Annonce premium3<p>
					<img src="images/annoncep3.png" title="Annonce premium 3" alt="Annonce premium 3">
				</article>
			
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
				<!--<article>

					<img src="images/annonce1.png" title="Annonce 1" alt="Annonce 1">	
					<h2>Titre annnonce 1</h2>
					<p class="prix">Prix: 10€</p>
					<p class="detail">Détail annonce 1</p>
					
						
				</article>-->
			<?php
				/*foreach ($data as $annonce){
					echo '<article>';
					echo '<img src="'.$annonce[photo].'" alt="Annonce1">';
					echo '<h2>'.$annonce[titre].'</h2>';

					
		
				}*/
			?>

				<article>
							
					<img src="images/annonce2.png" title="Annonce 2" alt="Annonce 2">
					<h2>Titre annnonce 888888</h2>
					<p class="prix"> Prix: 20€</p>
					<p class="detail">Détail annonce 2</p>
					
					
				</article>
				<article>
					<img src="images/annonce3.png" title="Annonce 3" alt="Annonce 3">
					<h2>Titre annnonce 3</h2>
					<p class="prix">Prix: 30€</p>
					<p class="detail">Détail annonce 3</p>
							
					
							
				</article>
			</div>
			
		
		</section>	