
<?php
if (isset($_POST['submit'])) 
{
	$to = "hntddt123@gmail.com";
	$from = $_POST['email'];
	$name = $_POST['name'];
	$subject = $_POST['subject'];
	$comment = $_POST['comment'];
	mail($to, $subject, $comment);
}


?>
<p>Your email has been sent.</p>

