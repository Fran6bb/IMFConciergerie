<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> My Conciergerie</title>
    <link rel="stylesheet" href="style_acceuil.css">
   </head>
<body>
  <nav>
    <div class="nav-content">
      <div class="logo">
        <a href="#">IMFConciergerie</a>
      </div>
      <ul class="nav-links">
        <li><a href="#">Acceuil</a></li>
        <li><a href="#">Services</a></li>
        <li><a href="#">Abonnements</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
    </div>
  </nav>
  <section class="home"></section>


		<p class="text">
		<h2 class="titre">QUI SOMMES NOUS ?</h2>


			<div class="position">
				<img class="img_gauche1" src="images/Picto_Champagne-150x150.png" alt="champagne">
				<img class="img_gauche2" src="images/Picto_Alimentaire.png" alt="aliment">
				<img class="img_gauche3" src="images/Picto_Coiffeur.png" alt="coiffeur">
			</div>
		<div class=content>
			<div class="cade">

				<div class="element_gauche">
					Facilitez et améliorez l’organisation de vos tâches avec les services, abonnements et annuaires de notre conciergerie.
					Nous sommes disponible pour tous vos services à domicile ou au bureau, & LifeStyle management. Commencer à mieux concilier votre
			 		vie privée et votre vie professionnelle.<br><br>

			   		 L’équipe de IMF CONCIERGERIE et les partenaires commerciaux sont des spécialistes dans les domaines des services aux personnes
			    	et aux entreprises, de l’horeca, de la logistique, du secrétariat, de l’ICT, du web…
			    	Nous vous mettons en relation avec notre réseau du savoir-faire pour s’occuper de vos corvées, réaliser vos envies,
			    	et vos besoins en toute confiance.
				</div>
			</div>

			<div class="cade">
				<div class="card">
					<div class="card-side front">
		 				<img class="cloche" src="images/img5.jpg" alt="cloche">
					</div>
					<div class="card-side back">
		 				<span class="abc">Passer une commande</span>
					</div>

	  			</div>
			</div>

			<div class="cade">
				<div class="element_droit">
					IMF CONCIERGERIE vous offre le temps de profiter de la vie ! Détendez-vous ! Nous nous occupons de tout, pour vous !
					Rendez-vous sur votre page « Services & Réseau du savoir-faire »; des services pour les particuliers et pour les professionnels <br><br>

					Les experts sont là ! Ménagez-vous du temps pour faire ce que vous aimez ! Allez! Consacrez votre temps libre à vos proches, à vos amis
					et surtout à vous ! Confiez nous vos projets, ils méritent l’attention et le support d’une équipe professionnelle !

				</div>
			</div>
		</div>

			<div class="posi">
			<img class="img_droite1" src="images/Picto_VinFleurs.png" alt="vin_fleur">
			<img class="img_droite2" src="images/Picto_Coiffeur.png" alt="coiffeur">
			</div>

		</p>



	<p class="text">

			<h2 class="titre">CATALOGUE DE SERVICES</h2><br><br>

			<div class=content>
				<div class="cade">
					<div class="element_gauche">
						Les services à domicile sont particulièrement adaptés pour vous que se soient en télé-travail ou non. <br><br> Garde d’enfants,
						intervention d’un artisan, il est devenu indispensable d’avoir un accès facile à l’aide à domicile pour soi ou en tant qu’aidant.
						Nous sélectionnons les bons prestataires et faisons une mise en relation facile et pratique pour le plus grand bonheur de chacun.
					</div>
				</div>

			<div class="cade">
				<div class="card">
					<div class="card-side front">
		  				Bonjour bienvenue
					</div>
					<div class="card-side back">
						Decouvrir tout nos services
					</div>
				</div>
			</div>
				<div class="cade">
					<div class="element_droit">
						Nous vous livrons partout sur place pour vous faciliter
						l’accès à vos produits et services du quotidien, sans contrainte de déplacement et de temps. <br><br>
						Livrés à l’accueil, en consignes ou en boutique de conciergerie que se soient : pressing, maraicher, cordonnier, caviste, fleuriste, retoucheur,
						sont accessibles à tous, nous nous occupons de tout.
					</div>
				</div>
</div>
	</p>

<!-- Pied de page-->
<?php
require ('footer.php')
?>

  <script>
  let nav = document.querySelector("nav");
    window.onscroll = function() {
      if(document.documentElement.scrollTop > 20){
        nav.classList.add("sticky");
      }else {
        nav.classList.remove("sticky");
      }
    }
  </script>

</body>
</html>
