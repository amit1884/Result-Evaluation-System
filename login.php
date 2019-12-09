<?php 
include_once 'header.php';
?>
<title>login</title>
<div class ="container">
<div class= "row">
    <div class = "col-md-offset-3 col-md-6 col-sm-offset-2 col-sm-9">
   <div class="login">
<h1 id = "log-head"><u>LOGIN</u></h1>
<form action = "includes/login.inc.php" method = "POST">
<input type ="text" name = "user" placeholder = "JEE Roll no" class = "text-box">
<input type ="password" name = "pwd" placeholder = "Password" class = "text-box">
<center><button class = "btn btn-lg btn-success" name = "submit" type ="submit">Login</button></center>
</form>
</div>
    </div>
</div>
</div>
<?php 
include_once 'footer.php';
?>