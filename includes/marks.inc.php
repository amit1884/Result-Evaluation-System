<?php
if(isset($_POST['submit']))
{
    include_once 'dbh.inc.php';
    $roll = mysqli_real_escape_string($conn,$_POST['user']);
    $phy = mysqli_real_escape_string($conn,$_POST['phy']);
    $chem = mysqli_real_escape_string($conn,$_POST['chem']);
    $mat = mysqli_real_escape_string($conn,$_POST['math']);
    if(empty($roll)||empty($phy)||empty($chem)||empty($mat))
    {
        header("Location: ../marks.php?marks=empty");
        exit();
    }
        else
           {
               if($phy>120&&$chem>120&&$mat>120)
               {
                header("Location: ../marks.php?marks=limit exceeded");
                exit();
               }
               else
               {
                 $total =$phy+$chem+$mat;
                 $query="SELECT * FROM register WHERE id ='$roll'";
                 $result=mysqli_query($conn,$query);
                 $resultcheck = mysqli_num_rows($result);
                 if($resultcheck <1)
                 {
                     header("Location: ../marks.php?marks=rollno not found");
                 exit();
                 }
                 else
                 {
                    if($row = mysqli_fetch_assoc($result))
                    {
                        $cat=$row['category'];
                         
                    $sql= "INSERT INTO marks (rollno,category,physics,chemistry,maths,total) VALUES ('$roll','$cat','$phy','$chem','$mat','$total');";
                    $result=mysqli_query($conn,$sql);
                    header("Location: ../marks.php?marks=success");
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