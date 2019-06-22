<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta HTTP-EQUIV="pragma" content="no-cache">
	<meta name="viewport" content="width-device-width, initial-scale=1">
	<link rel="stylesheet" href="css/style.css">
	<script src="js/jquery3.4.0.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<title>Contact</title>
</head>
<body>
	<header>
		<?php require_once("require_once/menu.php") ?>
	</header>
		<h1>Contact</h1>
		<div class="container-fluid">
			<div class="row">
				<div id="formulaire_contact" class="col-md-6">
					<form>
						<div class="form-group">
							<label for="">Nom</label>
							<input type="text" class="form-control" name="">
						</div> <!--Fin div class="form-group"-->
						<div class="form-group">
							<label for="">Prenom</label>
							<input type="" class="form-control" name="">
						</div> <!--Fin div class="form-group"-->
						<div class="form-group">
							<label for="">E-mail</label>
							<input type="" class="form-control" name="">
						</div> <!--Fin div class="form-group"-->
						<div class="form-group">
							<label for="">Commentaire</label>
							<textarea class="form-control" id="commentaire_contact" rows="3"></textarea>
						</div> <!--Fin div class="form-group"-->
						<button type="submit" class="btn btn-primary">Envoyer</button>
					</form>
				</div> <!--Fin div id="formulaire_contact"-->
				<div id="carte_contact" class="col-md-6">
					<p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2627.4526385618656!2d2.192001814897309!3d48.81142451196781!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e67b851fa27c85%3A0x8310fbf89813df8f!2s50+Rue+de+la+Passerelle%2C+92370+Chaville!5e0!3m2!1sfr!2sfr!4v1547112500338" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe></p>
					<p><a href="tel: +33671888999">06 71 88 89 99</a></p>
					<p><a href="mailto:mbemba.fofana@gmail.com">mbemba.fofana@gmail.com</a></p>
				</div> <!--Fin div id="carte_contact"-->
			</div> <!--Fin div class="row"-->
		</div> <!--Fin div class="container-fluid"-->
	<footer></footer>

</body>
</html>