<?php 
include_once 'header.php';
?>
<div class ="container">
<div class= "row">
<div class ="col-md-3 col-sm-12"></div>
<div class ="col-md-6 col-sm-12">

<div class ="admitcard">

<center><p style ="color:blue;font-size:24px;">JOINT ENTRANCE EXAMINATION</p></center>
<center><h3 style ="color:purple;font-size:20px;">ADMIT CARD</h3></center>
<table style ="padding:10px; margin:15px; width:100%">
<tr>
<td>Name</td>
<td><?php echo $_SESSION['u_first'].' '.$_SESSION['u_last'];?></td>
</tr>
<tr>
<td>Father's Name</td>
<td><?php echo $_SESSION['u_father']; ?></td>
</tr>
<tr>
<td>Roll No</td>
<td>JEE<?php echo $_SESSION['u_id']; ?></td>
</tr>
<tr>
<td>Category</td>
<td><?php echo $_SESSION['u_cat'];?></td>
</tr>
<tr>
<td>Date Of Birth</td>
<td><?php  echo $_SESSION['u_dob'];?></td>
</tr>
<table>
</div>
</div>
</div>
</div>
<form action = "includes/logout.inc.php" method = "POST">
<center><button class ="btn btn-success" type ="submit" name ="submit">LOGOUT</button></center>
</form>
