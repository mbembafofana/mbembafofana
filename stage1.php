<!DOCTYPE html>
<html class="h-100" lang="fr">
<head>
	<meta charset="utf-8">
	<meta HTTP-EQUIV="pragma" content="no-cache">
	<meta name="viewport" content="width-device-width, initial-scale=1">
	<link rel="stylesheet" href="css/style.css">
	<script src="js/jquery3.4.0.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<title>Stage de novembre 2018</title>
</head>
<body class="d-flex flex-column h-100">
	<header>
		<?php require_once("require_once/menu.php") ?>
	</header>
		<div class="container">
			<div class="row">
				<h1>PRESENTATION</h1>
				<section id="stage1">
					<p><a href="">Kodekh Telecom</a>, est une petite entreprise qui compte deux actionnaires et aucun salarié: Mr Koné et Mr Moudachirou, mon tuteur de stage. Basé à Asnières sur Seine, cette société est spécialisée dans le réseau et l’infogérance. Mais quand cela est nécessaire, pour des raisons commerciales, Kodekh Telecom développe des sites internet pour ses clients.</p>
					<h2>Stage de novembre</h2>
					<h3>Création d'un formulaire médical</h3>
					<h4>Comment c'était avant</h4>
					<p>Mr Moudachirou m’a remis, un cahier des charges ainsi que le template d’un formulaire acheté sur le site <a href="">themeforest.net</a>.</p>
					<img src="images/images_redimenssionnees/formulaire_depart.PNG">
						<br/>
					<img src="images/images_redimenssionnees/cahierDesCharges.PNG">
					<p>Mais plusieurs difficultés se présentent à moi :</p>
					<p>Coté Front :</p>
					<p>Comprendre comment fonctionne le Front du formulaire (CSS, JavaScript)</p>
					<p>Les champs du formulaire sont vides</p>
					<p>Une fois fait, le formulaire est trop long</p>
						<br/>
					<p>Coté back :</p>
					<p>Les informations saisies dans le formulaire ne sont pas collectées</p>
					<p>Comment collecter les informations d’un formulaire sur plusieurs pages ?</p>
					<p>Générer un fichier texte nommé du numéro de dossier et du nom de l’utilisateur dans un répertoire sur le serveur de l’entreprise.</p>
					<p>Le contenu fichier texte doit pouvoir être modifié.</p>

					<h4>Pourquoi et quel besoin :</h4>
					<p>Le but de ce formulaire, est de permettre aux patients d’un institut du cancer, de remplir ce formulaire sur internet avant une consultation. Ainsi, les médecins auront le jours du rendez-vous le formulaire dûment complété à leurs dispositions.</p>

					<h4>Comment j’ai accompli ma tâche :</h4>
					<p>Monsieur Moudachirou étant spécialisé en réseau, j’ai dû travailler en totale autonomie. Et n’ayant que de très faibles connaissances en HTML et CSS et aucune notion de PHP, j’ai tout d’abord dû me former à ces technologies notamment sur le site <a href="">Open Class Room</a>.</p>

					<p>Face à certaines difficultés, j’ai également du poster des questions sur des forums.</p>
					<img src="images/images_redimenssionnees/questionFormulaire1.PNG">
						<br/>
					<img src="images/images_redimenssionnees/questionFormulaire2.PNG">

					<h5>Mission 1 : La variables Super Globales $_SESSION de PHP</h5>
					<p>Le formulaire étant très long, j’ai dû le faire sur plusieurs pages. Mais n’ayant aucunes connaissances de PHP j’ai dû chercher un moyen de transmettre les informations saisies de pages en pages (4 pages) sur internet. Et j’ai donc trouvé les sessions de PHP.</p>
					<img src="images/images_redimenssionnees/$_SESSION_PHP_NET.PNG">
					<p>Pour les utiliser de la manière suivante sur 3 fichiers PHP qui ne me servait qu’à faire la passerelle entre les 4 pages du formulaire:</p>
					<img src="images/images_redimenssionnees/$_SESSION_utilisation.PNG">
						<br/><br/>
					<img src="images/images_redimenssionnees/headerLocation.PNG">
					<h5>Mission 2 Générer un fichier Texte dans un répertoire se trouvant sur le serveur</h5>
					<p>Pour réaliser cette tâche, j’ai dû effectuer de longues recherches sur internet et tester de nombreux code qui ne fonctionnait pas. Mais cette étape m’a permis de me documenter et de comprendre le fonction « fopen » et le mode « w+ » qui n’était pas documenté sur le site <a href="">Open Class Room</a>.</p>
					<img src="images/images_redimenssionnees/fopenModeOpenClassRoom.PNG">
					<p>Ce mode permet d’ouvrir un fichier texte en écriture seule ; place le pointeur de fichier au début du fichier. Si le fichier n'existe pas, il le créer.</p>
					<img src="images/images_redimenssionnees/fichierTexteW+.PNG">
					<p>Ensuite, j’ai utilisé le mode « a+ ». Ce mode permet d’ouvrir un fichier texte en lecture et écriture. Si le fichier n'existe pas, il est le créé automatiquement. Si le fichier existe déjà, le texte sera rajouté à la fin sans écraser le texte déjà saisi.</p>
					<img src="images/images_redimenssionnees/fichierTexteA+.PNG">
					<p>Enfin saisissant dans les paramètres de la fonction « fopen » « sortie/'.$numero_de_dossier.'.'.$nom.'.txt', "w+" » le fichier texte est généré dans le répertoire « sortie » se trouvant sur le serveur de l’entreprise et son nom est unique.</p>

					<h4>A quoi a servi mon travail :</h4>
					<p>Désormais, patients de cet établissement, n’auront plus à se présenter avant le rendez pour remplir ce formulaire de manière manuscrite. Ils pourront le faire depuis internet</p>
				</section>
			</div> <!--Fin div class="row"-->
		</div> <!--Fin div class="container"-->
	<footer></footer>

</body>
</html>