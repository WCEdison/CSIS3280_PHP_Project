<?php
#this is Login form page , if user is already logged in then we will not allow user to access this page by executing isset($_SESSION["id"])
?>


<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>Online Shopping</title>

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />

	<!-- Custom stylesheets -->
	<link type="text/css" rel="stylesheet" href="../../css/style.css" />
	<link type="text/css" rel="stylesheet" href="../../css/accountbtn.css" />
	<link type="text/css" rel="stylesheet" href="../../css/more-styles.css" />
	<link type="text/css" rel="stylesheet" href="../../css/searchInfo.css" />

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
                  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
                  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
                <![endif]-->

</head>

<div class="wait overlay">
	<div class="loader"></div>
</div>
<div class="container-fluid">
	<!-- row -->


	<div class="login-marg">
    <form method="post" action="login.php" class="login100-form">
        <div class="billing-details jumbotron">
            <div class="section-title">
                <h2 class="login100-form-title p-b-49">Login Here</h2>
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input class="input input-borders" type="email" name="email" placeholder="Email" required>
            </div>

            <div class="form-group">
                <label for="email">Password</label>
                <input class="input input-borders" type="password" name="password" placeholder="Password" required>
            </div>

            <div class="text-pad">
                <a href="#">Forgot password?</a>
            </div>

            <input class="primary-btn btn-block" type="submit" value="Login">

            <div class="panel-footer">
                <div class="alert alert-danger">
                    <h4 id="e_msg"><?php echo isset($error_message) ? $error_message : ''; ?></h4>
                </div>
            </div>
        </div>
    </form>
</div>
</div>