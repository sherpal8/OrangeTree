<?php 
	$page_id = 8; 
?>

<!DOCTYPE html>
<html>
<head>
	<title>OrangeTree Production</title>

		<?php include dirname(__FILE__).'/includes/head.inc.php';?>

</head>
<body>

		<?php include dirname(__FILE__).'/includes/header.inc.php';?>

	<!---START: for  medium screen-->
	<div class="uk-hidden-small uk-block uk-block-secondary">
	<div class="uk-container uk-container-center uk-contrast">
		<h1 class="tm-people uk-text-center">Contact</h1>
	</div></div>

<!--START: for small screen-->

	<div class="uk-visible-small tm-people-block uk-block uk-block-secondary">
	<div class="uk-container uk-container-center uk-contrast">
		<h1>Contact</h1>
	</div></div>

<!--Content-->
	<div class="tm-contact uk-block uk-block-secondary">
	<div class="uk-container uk-container-center uk-contrast">

	<div class="uk-flex uk-grid uk-align-center">
		<div class="uk-width-medium-1-2 uk-width-small-1-1">
			<div>
				<p class="uk-h4">OrangeTree Production Sdn. Bhd. <br/>Suite 2-2-10, 2nd Floor<br/>Wisma Rampai, Jalan 34/26,<br/>Taman Sri Rampai, Setapak<br/>53300 Kuala Lumpur</p>
			</div>

			<div>
				<p>Tel: +603 4142 6986 / +603 4142 6988</p>
			</div>

			<div>
				<p>Fax: +60341426987</p>
			</div>

			<div>
				<p>Email: <a href="#">orangetreeproduction@yahoo.com</a></p>
			</div>
		</div>

		<div class="uk-width-medium-1-2 uk-hidden-small">

		<?php include dirname(__FILE__).'/includes/email.inc.php';?>

		</div>
	</div>


		<iframe class="uk-align-center uk-responsive-width uk-margin-large-top" width="1000" height="500" src="https://maps.google.com/maps?q=wisma rampai&t=&z=13&ie=UTF8&iwloc=&output=embed">
	</iframe>

</div></div>

	<div class="uk-block uk-block-secondary uk-margin-remove uk-padding-remove">
		<img class="uk-margin-remove" src="/htdocs-images/contact-images/ask-abstract.jpg" width="100%" height="1080">
	</div>
	
		<?php include dirname(__FILE__).'/includes/footer.inc.php';?>

	</body>