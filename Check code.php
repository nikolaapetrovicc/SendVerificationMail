<<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mynd Test Project</title>
    <link rel="stylesheet" type = "text/css" href="style.css">
    <script src="main.js"></script>
</head>
<body>
    <?php 
    if(isset($_POST['verify'])) //Function that checks if the entered code is right
    {
    if($_POST['code'] ==		$_SESSION['mycode'] )
    echo 'ok';
else
    echo 'not ok';
    }
    ?>
    <form action="" method="post"
 <div class="text">
        <h1 class="title">Let's make sure it's you</h1>
        <div class="form">
        <div class="group">      
            <input type="text" required>
            <span class="highlight"></span>
            <span class="bar"></span>
            <label>Enter 7-Digit code</label>
          </div>
        </div>

    </br>
        <button class="button" type="submit" name="verify">Confirm</button>
        <a href="style.scss" class="btn-flip" data-back="Back" data-front="Front"></a>
</form>
    </div>
</body>
</html>