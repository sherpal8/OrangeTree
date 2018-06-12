

<form class="uk-form" action="/includes/mail_handler.inc.php" method="POST">

<legend>Contact Form<badge class="uk-badge uk-badge-success uk-align-center">Gentle request: All fields mandatory.</badge></legend>

<div>First name:</div>
<?php
	if (isset($_GET['name'])) {
		$name = $_GET['name'];
		echo '<input type="text" class="uk-width-medium" name="name" value="'.$name.'">';
		} else {
		echo '<input type="text" class="uk-width-medium" name="name">';
	}
?>

<br><br>

<div>Surname:</div>
<?php
	if (isset($_GET['surname'])) {
		$surname = $_GET['surname'];
		echo '<input type="text" class="uk-width-medium" name="surname" value="'.$surname.'">';
		} else {
		echo '<input type="text" class="uk-width-medium" name="surname">';
	}
?>

<br><br>

<div>E-mail:</div>
<?php
	if (isset($_GET['email'])) {
		$email = $_GET['email'];
		echo '<input type="text" class="uk-width-medium" name="email" value="'.$email.'">';
		} else {
		echo '<input type="text" class="uk-width-medium" name="email">';
	}
?>

<br><br>

<div>Subject:</div>
<?php
	if (isset($_GET['subject'])) {
		$subject = $_GET['subject'];
		echo '<input type="text" class="uk-width-medium" name="subject" value="'.$subject.'">';
		} else {
		echo '<input type="text" class="uk-width-medium" name="subject">';
	}
?>

<br><br>

<div>Message:</div>
	<textarea type="text" rows="5" cols="68" name="message">
		  <?php if(isset($_GET['message'])) { 
		  	$message = $_GET['message'];
         	echo $message; 
         } else {}
         ?>
	</textarea>

<br><br>

		<button type="submit" name="submit">Submit</button>	
</form>


<?php 

	
	$fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

	if (strpos($fullUrl, "contact=empty") == true) {
		echo "<p class='error'>Please fill in all fields.</p>";
		exit();
	}

	elseif (strpos($fullUrl, "contact=check-name") == true) {
		echo "<p class='error'>First name: Alphabets only. Avoid spaces.</p>";
		exit();
	}

	elseif (strpos($fullUrl, "contact=check-surname") == true) {
		echo "<p class='error'>Surname: Alphabets only. Avoid spaces.</p>";
		exit();
	}

	elseif (strpos($fullUrl, "contact=check-email") == true) {
		echo "<p class='error'>Please insert valid email address.</p>";
		exit();
	}

	elseif (strpos($fullUrl, "contact=success") == true) {
		echo "<p class='success'>Successful contact. We shall get back to soon.</p>";
		exit();
	} 
	


	/*
	if (!isset($_GET['submit'])) {
	}
	else {
		$contactCheck = $_GET['submit'];

		if ($contactCheck == "empty") {
		echo "<p class='error'>Gentle request: Please fill in all fields.</p>";
		}

		elseif ($contactCheck == "char") {
		echo "<p class='error'>Gentle request: Please use alphabets only. Avoid spaces.</p>";
		}

		elseif ($contactCheck == "email") {
		echo "<p class='error'>Gentle request: Please insert valid email address.</p>";
		}

		elseif ($contactCheck == "success") {
		echo "<p class='success'>Successful contact. We shall get back to you soon.</p>";
		}
	}
	*/
?>






