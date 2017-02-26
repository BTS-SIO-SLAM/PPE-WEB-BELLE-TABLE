<?php
session_start();
if(isset($_SESSION['login'])){
	if($_SESSION['login'] != ""){
		$menuchange = true;
	}	
}
if(isset($_REQUEST['email'])){
	$nom=$_REQUEST['nom'];
    $email=$_REQUEST['email'];
    $message=$_REQUEST['message'];
    if (($nom=="")||($email=="")||($message=="")){
        
	}
    else{        
		
	}
}
	
?>
<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
				<div class="formulairenevoi">
					<h1>Contactez-Nous</h1>
					<p>Pour nous contacter veuillez remplir ce formulaire.</p><br/>
					<form  action="contact.php" id="myform" method="GET" enctype="multipart/form-data">
						<p>Votre Nom et Prénom :</p>
						<input name="nom" type="text" value="" size="30"/><br><br>
						<p>Votre Email :</p>
						<input name="email" type="text" value="" size="30"/><br><br>
						<p>Votre Message :</p>
						<textarea name="message" rows="7" cols="35"></textarea><br><br>
						<input type="submit" id="envoimail" value="Envoyer" onclick="document.forms[\'form\'].submit();"/>
					</form>
					<br><br>
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