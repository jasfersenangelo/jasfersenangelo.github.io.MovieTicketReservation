<html>

<head>
<title> </title>
  <link rel="stylesheet" href="./css/style.css">
    <script type="text/javascript" src="jquery-3.4.1.js"></script>
    <script type="text/javascript" src="script.js"></script>
<link rel="stylesheet" href="fontawesome/css/all.css">
</head>

<body>
<div class="LoginBg">
<form id="Form1" action="" method="POST">
<div class ="box">
<img src="avatar.svg" class="avatar">
<br><h1> Login </h1> 
<br>
<p>Username</p>
<input type="text" name="Iuname" placeholder="Enter Username">
<br><br>
<p>Password</p>
<input type="password" name="Iupass" placeholder="Enter Password">
<br><br>
</div>
<div class="btnEntrance" >
  <input type="submit" name="btnLogin" value="Login">
</div>
<br>
<p>
Don't have an account? <a href="Register.php"> Register. </a>
</p>
</form>
</div>

</body>

</html>

<?php
 
if(isset($_POST['btnLogin'])){
require 'function/Action.php';

$ruru->login();
}
?>