<!DOCTYPE html>
<html lang="fr">
<head>
	<title>ECOLE 241 BUSINESS</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--=========================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--=========================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= theme_url() ?>assets/css/util.css">
	<link rel="stylesheet" type="text/css" href="<?= theme_url() ?>assets/css/main.css">
<!--========================================================================================-->
</head>
<body>

<!--================= The container =======================-->
	<div class="container-contact100">
		<div class="wrap-contact100">
			<!--================= Start form =======================-->
			<form class="contact100-form validate-form">
				<span class="contact100-form-title">
					<img src="<?= theme_url() ?>assets/images/formulaires/Ebusiness.png" alt="">
				</span>
				<!--**** Start of the title ****-->
				<span class="contact100-form-title">
					Formulaire d'enregistrement du candidat
				</span>
				<!--**** End of the title ****-->
				<!--**** Start of the ALL input ****-->
				<div class="wrap-input100 validate-input" data-validate="Name is required">
					<input id="nom" class="input100" type="text" name="nom" placeholder="Nom">
					<span class="focus-input100"></span>
				</div>
				<div class="wrap-input100 validate-input" data-validate="Name is required">
					<input id="prenom" class="input100" type="text" name="prenom" placeholder="Prénom">
					<span class="focus-input100"></span>
				</div>
				<div class="wrap-input100 validate-input" data-validate="Name is required">
					<input id="sexe" class="input100" type="text" name="sexe" placeholder="Sexe Ex. H ou F">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate="Name is required">
					<input id="date" class="input100" type="text" name="date" placeholder="Date de naissance">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
					<input id="email" class="input100" type="text" name="email" placeholder="Address mail">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate="Name is required">
					<input id="telephone" class="input100" type="text" name="telephone" placeholder="Numéro de téléphone">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate="Name is required">
					<input id="numero-whatsapp" class="input100" type="text" name="numero-whatsapp" placeholder="Numéro de téléphone Whatsapp">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate="Name is required">
					<input id="horaire" class="input100" type="text" name="horaire" placeholder="Horaire Ex. Matin ou Soir">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate="Name is required">
					<input id="domain" class="input100" type="text" name="domain" placeholder="Domaine d’activité">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate="Name is required">
					<input id="service" class="input100" type="text" name="service" placeholder="Type de service">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate = "Message is required">
					<textarea id="attentes" class="input100" name="attentes" placeholder="Attentes"></textarea>
					<span class="focus-input100"></span>
				</div>

				<div class="container-contact100-form-btn">
					<button class="contact100-form-btn">
						S’enregistrer
					</button>
				</div>
			</form>

			<div class="contact100-more flex-col-c-m" style="background-image: url('<?= theme_url() ?>assets/images/formulaires/design1.jpg');">
			</div>
		</div>
	</div>

<!--===============================================================================================-->

<!--===============================================================================================-->
	<script src="js/main.js"></script>
</body>
</html>
