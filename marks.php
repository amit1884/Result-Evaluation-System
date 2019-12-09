<?php 
include_once 'header.php';
?>
<title>Marks</title>
<div class ="row">
<div class ="col-md-offset-4 col-md-6 col-sm-offset-3 col-sm-9">

<div class="marks">
<h1 id = "log-head">Marks</h1>
<form action = "includes/marks.inc.php" method = "POST">
<input type ="text" name = "user" placeholder = "JEE Roll no" class = "text-box">
<input type ="number" name = "phy" placeholder = "Physics" class = "text-box">
<input type ="number" name = "chem" placeholder = "Chemistry" class = "text-box">
<input type ="number" name = "math" placeholder = "Maths" class = "text-box">
<center><button class = "btn btn-lg btn-primary" name = "submit" type ="submit">Submit</button></center>
</form>
</div>
</div>
</div>

<?php 
include_once 'footer.php';
?>
