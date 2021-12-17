<html>

<head>
<title> </title>
  <link rel="stylesheet" href="./css/style.css">
    <script type="text/javascript" src="jquery-3.4.1.js"></script>
    <script type="text/javascript" src="script.js"></script>
</head>

<body class="LoginBg">

<form id="Form2" action="" method="POST">

<br><h1> Register </h1> 
<br>
<div class ="box">
<p>Email&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
<input type="text" name="email" placeholder="Enter Username">
<br><br>

<p> Username <p>
<input type="text" name="Iuname1" placeholder="Enter Username">
<br><br>
<p> Password: <p>
<input type="password" name="Iupass1" placeholder="Enter Password">
<br><br>
</div>
<div class="btnEntrance" >
  <input type="submit" name="btnRegister" value="Register">
</div>
<br>
<p>
Already have an account? <a href="Login.php"> Log in. </a>
</p>
</form>


</body>

</html>

<?php
if(isset($_POST['btnRegister'])){
require 'function/Action.php';

$ruru->AddUser();

}
?>