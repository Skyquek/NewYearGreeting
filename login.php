<?php
if(isset($_GET["info"])){
    if($_GET["info"] == '1'){
        echo '<script>alert("No this user.");</script>';
    }
    elseif($_GET["info"] == '2'){
        echo '<script>alert("Please login first.");</script>';
    }
}

?>

<!DOCTYPE html>
<!-- saved from url=(0048)https://colorlib.com/etc/lf/Login_v11/index.html -->
<html lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<title>Login V11</title>

<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="icon" type="image/png" href="https://colorlib.com/etc/lf/Login_v11/images/icons/favicon.ico">

<link rel="stylesheet" type="text/css" href="./assets/bootstrap.min.css">

<link rel="stylesheet" type="text/css" href="./assets/font-awesome.min.css">

<link rel="stylesheet" type="text/css" href="./assets/icon-font.min.css">

<link rel="stylesheet" type="text/css" href="./assets/animate.css">

<link rel="stylesheet" type="text/css" href="./assets/hamburgers.min.css">

<link rel="stylesheet" type="text/css" href="./assets/select2.min.css">

<link rel="stylesheet" type="text/css" href="./assets/util.css">
<link rel="stylesheet" type="text/css" href="./assets/main.css">

</head>
<body>
<div class="limiter">
<div class="container-login100">
<div class="wrap-login100 p-l-50 p-r-50 p-t-77 p-b-30">
<form method='POST' action='./session.php' class="login100-form validate-form">
<span class="login100-form-title p-b-55">
Login
</span>
<div class="wrap-input100 validate-input m-b-16" data-validate="Valid email is required: ex@abc.xyz">
<input class="input100" type="text" name="userName" placeholder="User Name">
<span class="focus-input100"></span>
<span class="symbol-input100">
<span class="lnr lnr-envelope"></span>
</span>
</div>
<div class="wrap-input100 validate-input m-b-16" data-validate="Password is required">
<input class="input100" type="password" name="password" placeholder="Password">
<span class="focus-input100"></span>
<span class="symbol-input100">
<span class="lnr lnr-lock"></span>
</span>
</div>
<div class="contact100-form-checkbox m-l-4">
<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
<label class="label-checkbox100" for="ckb1">
Remember me
</label>
</div>
<div class="container-login100-form-btn p-t-25">
<button class="login100-form-btn" name="login">
Login
</button>
</div>
<div class="text-center w-full p-t-42 p-b-22">
<span class="txt1">
Or login with
</span>
</div>
<a href="https://colorlib.com/etc/lf/Login_v11/index.html#" class="btn-face m-b-10">
<i class="fa fa-facebook-official"></i>
Facebook
</a>
<a href="https://colorlib.com/etc/lf/Login_v11/index.html#" class="btn-google m-b-10">
<img src="./assets/icon-google.png" alt="GOOGLE">
Google
</a>
<div class="text-center w-full p-t-115">
<span class="txt1">
Not a member?
</span>
<a class="txt1 bo1 hov1" href="https://colorlib.com/etc/lf/Login_v11/index.html#">
Sign up now
</a>
</div>
</form>
</div>
</div>
</div>

<script type="text/javascript" async="" src="./assets/analytics.js.download"></script><script src="./assets/jquery-3.2.1.min.js.download"></script>

<script src="./assets/popper.js.download"></script>
<script src="./assets/bootstrap.min.js.download"></script>

<script src="./assets/select2.min.js.download"></script>

<script src="./assets/main.js.download"></script>

<script async="" src="./assets/js"></script>
<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-23581568-13');
	</script>


</body></html>