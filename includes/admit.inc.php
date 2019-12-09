<?php
session_start();
if(isset($_POST['submit']))
{
    include_once 'dbh.inc.php';
    $uid = mysqli_real_escape_string($conn,$_POST['user-email']);
    $pwd = mysqli_real_escape_string($conn,$_POST['pwd']);
    if(empty($uid)||empty($pwd))
    {
        header("Location: ../login.php?login=empty");
        exit();
    }
    else{
        $sql = "SELECT * FROM register WHERE email = '$uid'";
        $result= mysqli_query($conn,$sql);
        $resultcheck = mysqli_num_rows($result);
        if($resultcheck <1)
        {
            header("Location: ../admit.php?admitcard=email not found");
        exit();
        }
        else{
            if($row = mysqli_fetch_assoc($result))
            {
                   $hashedPwdCheck = password_verify($pwd,$row['password']);
                   if($hashedPwdCheck==false)
                   {
                    header("Location: ../admit.php?admitcard=wrong password");
                    exit(); 
                   }
                   else if($hashedPwdCheck ==true){
                            $_SESSION['u_id']=$row['id'];
                            $_SESSION['u_first']=$row['first'];
                            $_SESSION['u_last']=$row['last'];
                            $_SESSION['u_father']=$row['father'];
                            $_SESSION['u_cat']=$row['category'];
                            $_SESSION['u_dob']=$row['dob'];
                            header("Location: ../admitcard.php?login=success");
                            exit(); 
                   }
            }
        }
    }
}
else{
    header("Location: ../index.php?login=error");
    exit(); 
}
?>