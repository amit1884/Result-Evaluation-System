<?php 
include_once 'header.php';
?><br>
<title>sign up</title>
<div class = "row">
<div class = "col-md-12 col-sm-12">
<center><div class="signup">
    <h2 id="signh">SIGNUP
    </h2>
    <form method = "POST" action = "includes/signup.inc.php">
    <div class = "row">
    <div class ="col-md-6 col-sm-12">
    <div class ="field">
    <label class ="ltext">First</label>
    <input type = "text" name = "first" class = "rtext">
    </div></div>
    <div class ="col-md-6 col-sm-12">
    <div class ="field">
    <label class ="ltext">Last</label>
    <input type = "text" name = "last" class = "rtext">
</div>
    </div>
    </div>
      <div class = "row">
      <div class= "col-md-6 col-sm-12">
      <div class ="field">
    <label class ="ltext">Father's Name</label>
    <input type = "text" name = "father" class = "rtext">
</div>
      </div>
      <div class= "col-md-6 col-sm-12">
      <div class ="field">
    <label class ="ltext">Mother's Name</label>
    <input type = "text" name = "mother" class = "rtext">
</div>
      </div>
      </div>
      <div class = "row">
      <div class= "col-md-6 col-sm-12">
      <div class ="field">
    <label class ="ltext">Gender</label>
   <select class = "drop rtext" name = "gender">
        <option value = "MALE">MALE</option>
        <option value = "FEMALE">FEMALE</option>
        <option value = "OTHER">OTHER</option>
</select>
      </div>
      </div>
      <div class= "col-md-6 col-sm-12">
      <div class ="field">
      <label class ="ltext">Category</label>
    <select class ="drop rtext"  name = "category">
        <option value = "GENERAL">General</option>
        <option value = "OBC">OBC</option>
        <option value = "SC">SC</option>
        <option value = "ST">ST</option>
    </select>
      </div>
      </div>
</div>

<div class = "row">
<div class = "col-md-6 col-sm-12">

<div class ="field">
    <label class ="ltext">Date Of Birth</label>
    <input type = "date" name = "dob" class = "rtext">
</div>

</div>
<div class = "col-md-6 col-sm-12">

<div class ="field">
    <label class ="ltext">E-Mail</label>
    <input type = "text" name = "email" class = "rtext">
    </div>

</div>
</div>
<div class = "row">
<div class = "col-md-6 col-sm-12">

<div class ="field">
    <label class ="ltext">Password</label>
    <input type = "password" name = "pwd" class = "rtext">
</div>
</div>
<div class = "col-md-6 col-sm-12">

<div class ="field">
    <label class ="ltext">Mobile No</label>
    <input type = "number" name = "mobno" class = "rtext">
</div>
</div>
</div>

<div class = "row">
<div class = "col-md-6 col-sm-12">
   <div class ="field">
    <label class ="ltext">Address</label>
    <input type = "text" name = "add" class = "rtext">
</div>
</div>
</div>
   <center> <button class = "btn btn-warning btn-lg" type = "submit" name ="submit">Register</button></center>
</form>
</div></div>
</div>
</div>
<br>
<br>
<?php 
include_once 'footer.php';
?>