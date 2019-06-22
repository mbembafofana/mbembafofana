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
	<title>Stage de février 2019</title>
</head>
<body>
	<header>
		<?php require_once("require_once/menu.php") ?>
	</header>
		<h1>PRESENTATION</h1>
		<section>
			<p><a href="">Kodekh Telecom</a>, est une petite entreprise qui compte deux actionnaires et aucun salarié: Mr Koné et Mr Moudachirou, mon tuteur de stage. Basé à Asnières sur Seine, cette société est spécialisée dans le réseau et l’infogérance. Mais quand cela est nécessaire, pour des raisons commerciales, Kodekh Telecom développe des sites internet pour ses clients.</p>
			<h2>Stage de novembre</h2>
			<h3>Création d'un formulaire médical</h3>
			<h4>Comment c'était avant</h4>
			<p>Suite à mon premier stage chez Kodekh Telecom, le formulaire médical était de 4 pages. Une fois complété, un fichier texte nommé du numéro de dossier et du nom de famille du patient était généré sur le serveur de l’entreprise.</p>

			<h4>Pourquoi et quel besoin :</h4>
			<p>Les besoins du client ayant changé, un nouveau cahier des charges m’a été remis. Désormais :</p>
			<p>Le nombre que question a été raccourci</p>
			<p>Un fichier PDF doit être généré et sauvegardé dans un répertoire sur le serveur de Kodekh Telecom</p>
			<p>Ce fichier PDF doit être transmis par E-mail aux patients</p>

			<h4>Comment j’ai accompli ma tâche :</h4>
			<p>Monsieur Moudachirou étant spécialisé dans le réseau, j’ai dû trouver moi-même les technologies nécessaires afin de réaliser ces tâches. Après avoir exploré plusieurs pistes, j’ai donc opté pour les <a href="">FPDF</a> et <a href="">PHPMailer</a> de PHP.</p>

			<h5>FPDF</h5>
			<p>Après m’être documenté sur plusieurs technologies comme par exemple <a href="">HTML2PDF</a>, j’ai opté pour la class FPDF.</p>
			<p>Le PDF doit comporter le logo de l’institut du cancer, ses coordonnées.</p>
			<img src="images/images_redimenssionnees/coordonneesInstitutClient.PNG">
			<p>Ainsi que les questions et les réponses des patients.</p>
			<img src="images/images_redimenssionnees/questionsReponsesPDFInstitutClient.PNG">
			<p>Et grâce la fonction « Output » et « 'sortie/'.$numero_de_dossier.'-'.$nom_de_famille.'.pdf', 'F' » saisie dans ses paramètre le document PDF unique est créé dans le répertoire sortie. Le mode « F » permet de sauvegarder le document avec un nom choisi.</p>
			<img src="images/images_redimenssionnees/modeFPDF.PNG">

			<h5>PHPMailer</h5>
			<p>C’est après plusieurs recherche sur internet, que j’ai opté pour la librairie PHPMailer. Après avoir été sauvegardé sur le serveur, le document PDF, est envoyé par E-mail au patient grâce aux informations qu’il aura saisie dans le formulaire. </p>

			<h4>A quoi a servi mon travail :</h4>
			<p>Dorénavant, les patients recevront par e-mail le formulaire qu’ils auront complétés au format PDF. En parallèle, ce même document PDF sera sauvegardé dans un répertoire se trouvant sur le serveur de Kodekh Telecom.</p>
		</section>
	<footer></footer>

</body>
</html>