<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
	<title>Contact Form</title>
</head>
<body>
<header class="body">
</header>

<section class="body">
<form method="POST" action="email.php">

<label>Name</label>
<input name="name" placeholder="Type Here"><br><br>

<label>Email</label>
<input name="email" type="email" placeholder="Type Here"><br><br>

<label>Message</label><br>
<textarea name="message" placeholder="Type Here"></textarea><br><br>

<label>*What is 2+2?(Anti-spam)</label><br>
<input name="human" placeholder="Type Here">

<input type="submit" name="submit" id="submit" value="Submit">
</form>
</section>

<footer class="body">	
</footer>
<?php
$name=$_POST['name'];
$email=$_POST['email'];
$message=$_POST['message'];
$from='From: Html';
$to='peteronwonga68@gmail.com';
$subject='Hello';
$human=$_POST['human'];

$body="From: $name\n E-mail: $email\n Message:\n";

if($_POST['submit']&&$human=='4'){
	if(mail($to,$subject,$body,$from)){
		echo'<p>Your message has been sent!</p>';
	} else {
		echo '<p>Something went wrong, go back and please try again</p>';
	}
}elseif($_POST['submit']&&$human!='4'){
	echo '<p>You answered the anti-spam question incorrectly</p>';
}

?>
</body>
</html>