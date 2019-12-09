<?php 
include_once 'header.php';
?>
<div class="contact">
<center><h1 style="font-size:30px;color:purple;font-family:times new roman">CONTACT</h1></center>
</div>
<br><br>
<div class= "container">
<div class= "row">
<div class= "col-md-6 col-sm-12">
<div id ="con-info">
<p>Do You Have a Question ?</p>
<p>Contact Us ---></p> 
<span>Mobile&nbsp;&nbsp;: &nbsp;&nbsp;9470943924</span><br>
<span>Email&nbsp;&nbsp;: &nbsp;&nbsp;amit200@gmail.com</span>
</div>
</div>
<div class= "col-md-6 col-sm-12">
<div class ="contact-form">
<form  action ="includes/contact.inc.php" method = "POST">
<input type ="text" name ="name" placeholder = "Enter your name" class= "con-in">
<input type ="text" name ="email" placeholder = "Enter your email" class= "con-in">
<input type ="text" name ="subject" placeholder = "Enter your subkect" class= "con-in">
<textarea name ="message" placeholder = "Enter your message" class= "con-mes"></textarea>
<br><br>
<center>
<button class ="musica-btn" name= "submit">SEND</button></center>
</form>
</div>
</div>
</div>
</div>
<?php 
include_once 'footer.php';
?>