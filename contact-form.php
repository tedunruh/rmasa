<!DOCTYPE html>
<html lang="en">
<body>

			<?php
  if($_POST){
    $to = 'heather@rockymountainasa.com';
    $subject = 'Contact Form Submission';
    $firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$phoneNumber = $_POST['number'];
    $email = $_POST['email'];
		$message = $_POST['message'];
    $robotest = $_POST['robotest'];
    if($robotest)
      $error = "You are a gutless robot.";
    else{
        if(mail($to, $subject, $firstname, $lastname, $phoneNumbe, $email, $message))
          $success = "Your message was sent!";
        else
          $error = "There was a problem sending the e-mail.";
				}
    {elseif ($success)
      echo '<div class="msg success">'.$success.'</div>';
    }
?>

</body>
</html>
