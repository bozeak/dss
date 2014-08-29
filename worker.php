<?php
//ini_set('display_errors', '1');

$server = "localhost";
$user = "root";
$password = "root";
$db = "feedback";

$mysqli = new mysqli($server, $user, $password, $db);

if ($mysqli->connect_errno) {
	printf("Connection failed: %s \n", $mysqli->connect_error);
	exit();
}
$mysqli->set_charset("utf8");


$email = mysqli_real_escape_string($mysqli, $_POST['email']);
$name = mysqli_real_escape_string($mysqli, $_POST['name']);
$subject = mysqli_real_escape_string($mysqli, $_POST['subject']);
$message = mysqli_real_escape_string($mysqli, $_POST['message']);
$date = date('r');
$ip=$_SERVER['REMOTE_ADDR'];

$required = array('email', 'name', 'subject', 'message');

$error = false;

foreach($required as $field) {
	if(empty($_POST[$field])) {
		$error = true;
	}
}

if($error) {
	echo "Error"; return false;
} else {
	$query = mysqli_query($mysqli, "INSERT INTO messages (`email`, `name`, `subject`, `message`, `ip`, `date_add`) VALUES ('$email', '$name', '$subject', '$message', '$ip', NOW())");
	echo "<script>
		$('#contact-us').hide();
		$('.info').html('Thank you for feedback!').addClass(' success');
		</script>";
}