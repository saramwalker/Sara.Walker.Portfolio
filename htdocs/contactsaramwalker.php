<?php
require ('model/database.php');

$name = filter_input(INPUT_POST, 'fname');
$email = filter_input(INPUT_POST, 'email');
$phone = filter_input(INPUT_POST, 'phone');
$mesage = filter_input(INPUT_POST, 'message');



if(!empty($name) && !empty($email) && !empty($phone) && !empty($mesage)) {

	$statement = $db->prepare("INSERT INTO contactsaramwalker(name, email, phone, mesage)
	VALUES (:fname, :email, :phone, :message)");
	$statement->execute(['fname' => $name, 'email' => $email, 'phone' => $phone, 'message' => $mesage]);
	$message = "Thank you for reaching out to me.  I look forward to talking to you soon!";
}
else {
	$message = 'Please complete all of the form fields';
}
?>

<p><?php echo $message ?></p>
<p><a href="http://swalke59.web.csit.jccc.edu/sarawalkerportfolio">Go back to Home Page</a></p>
