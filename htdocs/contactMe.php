<?php
require ('../model/database.php');

$name = filter_input(INPUT_POST, 'fname');
$email = filter_input(INPUT_POST, 'email');
$phone = filter_input(INPUT_POST, 'phone');
$dept = filter_input(INPUT_POST, 'dept');
$agree = filter_input(INPUT_POST, 'vote');
$mesage = filter_input(INPUT_POST, 'message');



if(!empty($name) && !empty($email) && !empty($phone) && !empty($dept) && !empty($agree) && !empty($mesage)) {

	$statement = $db->prepare("INSERT INTO contactMe(name, email, phone, dept, agree, mesage)
	VALUES (:fname, :email, :phone, :dept, :vote, :message)");
	$statement->execute(['fname' => $name, 'email' => $email, 'phone' => $phone, 'dept' => $dept, 'vote' => $agree, 'message' => $mesage]);
	$message = "Thank you for your feedback.  It is greatly appreciated.";
}
else {
	$message = 'Please complete all of the form fields';
}
?>

<p><?php echo $message ?></p>
<p><a href="http://swalke59.web.csit.jccc.edu/web120/resumeproject">Go back to Home Page</a></p>
