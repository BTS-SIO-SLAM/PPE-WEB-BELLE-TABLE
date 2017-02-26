<?php
session_start();
if(isset($_SESSION['login'])){
	if($_SESSION['login'] != ""){
		$menuchange = true;
	}	
}
if(isset($_REQUEST['typeproduit'])){$typeproduit = $_REQUEST['typeproduit'];};

include('parametres.php');

$result = $bdd->query('SELECT * FROM `t_gamme` WHERE `numcateg` LIKE '.$typeproduit.'');

?>

<!DOCTYPE html>
<html lang="fr">

<head>

    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>BelleTable - Elegance a la Francaise</title>

    <link href="css/cssbelletable.css" rel="stylesheet">

    <link href="css/shop-homepage.css" rel="stylesheet">

</head>

<body>

    <br/>
	<div id="menuprincipal" align="center">
		<ul class="barremenu">
			<li>
				<a href="index.php"><img src="img/logo.png" alt="" width="150px"></a>	
			<li>
				<a href="pageproduits.php">Nos Produits</a>
			<li>
				<a href="pageinspi.php">Nos Inspirations</a>
			<li>
				<a href="#">A Propos</a>
			<li>
				<a href="contact.php">Contact</a>
			<li>
				<?php
				if(isset($menuchange)){
					echo'
					<a href="commandeencours.php">Mon Compte</a>
                    <li>
					<a href="lepanier.php">Mon Panier</a>';
				}
				else{
					echo'
					<a href="connexion.php">Connexion</a>';
				}
				?>
		</ul>
	</div>
	<br/>
<div class="contenupage">
    <div class="container">

        <div class="row">
            <div class="sousmenu">
			<br/><br/><br/>
                <div class="list-group">
                    <a href="pagediversproduit.php?typeproduit=1" class="list-group-item">Assiettes et Tasses</a>
                    <a href="pagediversproduit.php?typeproduit=2" class="list-group-item">Couverts</a>
                    <a href="pagediversproduit.php?typeproduit=3" class="list-group-item">Verres</a>
					<a href="pagediversproduit.php?typeproduit=4" class="list-group-item">Nappes et Serviettes</a>
					<a href="pagediversproduit.php?typeproduit=5" class="list-group-item">Mobilier</a>
					<a href="pagediversproduit.php?typeproduit=6" class="list-group-item">Accessoires</a>
                </div>
            </div>

            <div class="col-md-9">
				
                <div class="row lienproduits">
				<?php
					switch($typeproduit){
						case 1:
							echo'
							<h1 align="center">Nos Assiettes et Tasses</h1><br/>';
						break;
						case 2:
							echo'
							<h1 align="center">Nos Couverts</h1><br/>';
						break;
						case 3:
							echo'
							<h1 align="center">Nos Verres</h1><br/>';
						break;
						case 4:
							echo'
							<h1 align="center">Nos Nappes et Serviettes</h1><br/>';
						break;
						case 5:
							echo'
							<h1 align="center">Notre Mobilier</h1><br/>';
						break;
						case 6:
							echo'
							<h1 align="center">Nos Accessoires</h1><br/>';
						break;
					}
					
					while($row = $result->fetch()){
						echo'
							<div class="encadreproduit">
								<div class="encadre">
									<img src="img/'.$row['refimage'].'" alt="">
									<div class="caption">
										<h4><a href="pageproduitchoix.php?produit='.$row['numgamme'].'">'.$row['nomgamme'].'</a></h4>                         
									</div>               
								</div>
							</div>';
					}
				?>
                          
                </div>

            </div>

        </div>

    </div>
</div>
    <div class="container">

        <hr>

        <footer>
            <div class="row">
                <div class="encadrefooter">
                    <p>Copyright &copy; BelleTable 2017</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
