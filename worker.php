<?php
$email = $_POST['email'];
$name = $_POST['name'];
$subject = $_POST['subject'];
$message = $_POST['message'];
$date = date('r');
$ip=$_SERVER['REMOTE_ADDR'];

$required = array('email', 'name', 'subject', 'message');

$error = false;

foreach($required as $field) {
	if(empty($_POST[$field])) {
		$error = true;
	}
}

$mysql_server = "localhost";
$mysql_user = "root";
$mysql_password = "root";
$mysql_db = "feedback";

$mysqli = new mysqli($mysql_server, $mysql_user, $mysql_password, $mysql_db);

if ($mysqli->connect_errno) {
	printf("Connection failed: %s \n", $mysqli->connect_error);
	exit();
}
$mysqli->set_charset("utf8");


if($error) {
	echo "Error"; return false;
} else {
	$query = mysqli_query($mysqli, "INSERT INTO messages (email, name, subject, message, ip, date_add) VALUES ('$email', '$name', '$subject', '$message', '$ip', NOW())");
	echo "<script>
		$('#contact-us').hide();
		$('.info').html('Thank you for feedback!').addClass(' success');
		</script>";
}