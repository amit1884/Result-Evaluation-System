<?php
if(isset($_POST['submit']))
{
    include_once 'dbh.inc.php';
    $first = mysqli_real_escape_string($conn,$_POST['first']);
    $last = mysqli_real_escape_string($conn,$_POST['last']);
    $father = mysqli_real_escape_string($conn,$_POST['father']);
    $mother = mysqli_real_escape_string($conn,$_POST['mother']);
    $gen = mysqli_real_escape_string($conn,$_POST['gender']);
    $cat = mysqli_real_escape_string($conn,$_POST['category']);
    $dob = mysqli_real_escape_string($conn,$_POST['dob']);
    $email = mysqli_real_escape_string($conn,$_POST['email']);
    $pwd = mysqli_real_escape_string($conn,$_POST['pwd']);
    $mob = mysqli_real_escape_string($conn,$_POST['mobno']);
    $add = mysqli_real_escape_string($conn,$_POST['add']);
    if(empty($first)||empty($last)||empty($email)||empty($pwd)||empty($father)||empty($mother)||empty($dob)||empty($mob)||empty($add))
    {
        header("Location: ../signup.php?signup=empty");
        exit();
    }
    else
    {
        if(!preg_match("/^[a-zA-Z]*$/",$first)||!preg_match("/^[a-zA-Z]*$/",$last))
        {
            header("Location: ../signup.php?signup=invalid");
            exit();
        }
        else
        {
            if(!filter_var($email, FILTER_VALIDATE_EMAIL))
            {
                header("Location: ../signup.php?signup=invalid email");
                exit();
            }
              else
              {
                  try{
                    $hashedpwd = password_hash($pwd,PASSWORD_DEFAULT);
                    $sql= "INSERT INTO register (first,last,father,mother,dob,gender,category,mobile,email,address,password) VALUES ('$first','$last','$father','$mother','$dob','$gen','$cat','$mob','$email','$add','$hashedpwd');";
                    $result=mysqli_query($conn,$sql);

                    $query ="SELECT * FROM register WHERE first ='$first' AND father ='$father'";
                    $result =mysqli_query($conn,$query);
                    $resultCheck=mysqli_num_rows($result);
                    if($resultCheck>0)
                    {
                        while($row=mysqli_fetch_assoc($result))
                        {
                            $_SESSION['r_id']=$row['id'];
                            $_SESSION['pwd']=$row['password'];
                        }
                    }
                    header("Location: ../signup.php?signup=success");
                    exit();
                  }
                  catch(exception $e)
                  {
                    header("Location: ../signup.php?signup=error");
                    exit();
                  }
                
              }
        }

    }
    
}
else{
    header("Location: ../signup.php?signup=failed");
    exit();
}
?>