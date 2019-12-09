<?php 
include_once 'header.php';
include_once 'includes/dbh.inc.php';
?>
<title>myresult</title>
<?php 
$roll = $_SESSION['u_id'];
$cat = $_SESSION['u_cat'];
$fame =$_SESSION['u_first'];
$last=$_SESSION['u_last'];
$cat=$_SESSION['u_cat'];
$i=0;
$j=0;

//All India Rank

$sql ="SELECT *FROM marks ORDER BY total DESC,physics DESC,maths DESC, chemistry DESC ";
$result=mysqli_query($conn,$sql);
$resultcheck=mysqli_num_rows($result);
if($resultcheck<1)
{
    header("Location: login.php?login=marks not available");
    exit(); 
}
else{
    while($row =mysqli_fetch_assoc($result))
    {
        $i++;
        if($row['rollno']==$roll)
        {
            $phy=$row['physics'];
            $chem=$row['chemistry'];
            $maths=$row['maths'];
            $total=$row['total'];
            break;
        }
    }
}


//category rank


$sql ="SELECT *FROM marks WHERE category ='$cat' ORDER BY total DESC,physics DESC,maths DESC, chemistry DESC ";
$result=mysqli_query($conn,$sql);
$resultcheck=mysqli_num_rows($result);
if($resultcheck<1)
{
    header("Location: login.php?login=marks not available");
    exit(); 
}
else{
    while($row =mysqli_fetch_assoc($result))
    {
        $j++;
        if($row['rollno']==$roll)
        {
            $phy=$row['physics'];
            $chem=$row['chemistry'];
            $maths=$row['maths'];
            $total=$row['total'];
            break;
        }
    }
}
?>
<center>
<h1 style = "color:purple;font-family:'times new roman',sans seriff;">JEE RESULT</h1></center>
<div class = "row">
<div class ="col-md-12 col-sm-12">
        <div class = "wrapper">
<table class = "main-table">
<tr class ="trow">
<td class ="l-text"><center>NAME</center></td>
<td class ="r-text"><center><?php echo $fame.' '.$last;?></center></td>
</tr>

<tr class ="trow">
<td class ="l-text"><center>Roll NO</center></td>
<td class ="r-text"><center><?php echo 'JEE '.$roll;?></center></td>
</tr>

<tr class ="trow">
<td class ="l-text"><center>CATEGORY</center></td>
<td class ="r-text"><center><?php echo $cat;?></center></td>
</tr>
<tr class ="trow">
<td class ="l-text"><center>AIR</center></td>
<td class ="r-text"><center><?php echo $i;?></center></td>
</tr>
<tr class ="trow">
<td class ="l-text"><center>CMR</center></td>
<td class ="r-text"><center><?php echo $j;?></center></td>
</tr>

<tr class ="trow">
<td class ="l-text"><center>PHYSICS</center></td>
<td class ="r-text"><center><?php echo $phy;?></center></td>
</tr>

<tr class ="trow">
<td class ="l-text"><center>CHEMISTRY</center></td>
<td class ="r-text"><center><?php echo $chem;?></center></td>
</tr>

<tr class ="trow">
<td class ="l-text"><center>MATHS</center></td>
<td class ="r-text"><center><?php echo $maths;?></center></td>
</tr>
<tr class ="trow">
<td class ="l-text"><center>TOTAL</center></td>
<td class ="r-text"><center><?php echo $total;?></center></td>
</tr>
<tr>
</table>
</div>
</div>
</div>
</div>
<?php 
include_once 'footer.php';
?>
