<<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mynd Test Project</title>
    <link rel="stylesheet" type = "text/css" href="style.css">
    <script src="Send code/main.js"></script>
</head>
<body>
	<?php
	if(isset($_POST['send']))
	{
		include("phpmailer.php");

		$activation = rand(111111,9999999); // Random number function
		$_SESSION['mycode'] =  $activation;
		$email = $_POST['email'];		
		//$stmtI = $GLOBALS['db']->prepare("INSERT INTO dp_owners (email,  activation) VALUES(?,?)");
		//$stmtI->execute(array($email, $activation));
			
		$mail = new PHPMailer(); 
		$mail->CharSet  = "UTF-8";
		$mail->Host = "mail.aresdevelops.com";	 // Server mail host
		$mail->Port = "465";  // Sending port
		$mail->IsHTML(true);
		$mail->Username = "noreply@aresdevelops.com";	// Make a email account named "noreply@yourdomain.com"
		$mail->Password = "mBv*S0rZJ.?,"; // Enter password set in Cpanel
		$mail->SetFrom("noreply@aresdevelops.com"); // Enter email adress again

		$mail->Subject = "Mail subject";  // Subject of the mail
		$link = $activation;

		$mail->Body = "Code: $link";	// Body text of the mail
		$mail->AddAddress($email);
		if(!$mail->Send()) 
		{
			die("Mailer Error: " . $mail->ErrorInfo);
		} 
		else 
		{
			echo "Message sent!";
			?>
			<script>
			window.location.href = 'http://mynd.aresdevelops.com/Send%20code/Check%20code/'; //Enter where it should redirect the page
		</script>
			<?php
		}
		
	}
	?>


	<form action="" method="post">
    <div class="text">
        <h1 class="title">Let's make sure it's you</h1>
        <div class="form">
        <div class="group">      
            <input type="text" required name="email"> 
            <span class="highlight"></span>
            <span class="bar"></span>
            <label>Email</label>
          </div>
        </div>

    </br>
        <button class="button" type="submit" name="send"><a class="link"style="text-decoration: none;" >Send mail</a></button></form>
        <a href="style.scss" class="btn-flip" data-back="Back" data-front="Front"></a>
    </div>
	</form>
</body>
</html>