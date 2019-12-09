<?php 
include_once 'header.php';
include_once 'includes/dbh.inc.php';
?>
<title>fullresult</title>

<div class ="row">
    <div class = "col-sm-12">
        <center><h1 style = "font-family:times new roman;color:red;"><u>Full Result</u></h1></center>
</div>
</div>
<style>
    th{
        color:brown;
        font-size:18px;
        font-family:roboto;
        border:1px solid purple;
        padding:5px;
    }
    td{
        border:1px solid mediumpurple;
        padding:5px;
    }
    </style>
    <div class= "row"><div class ="col-sm-12">

    <table style = "width:100%;margin:10px;">
    <tr>
    <th>Sr. No</th>
    <th>NAME</th>
    <th>ROLL NO.</th>
    <th>CATEGORY</th>
    <th>PHYSICS</th>
    <th>CHEMISTRY</th>
    <th>MATHS</th>
    <th>TOTAL</th>
    <th>AIR</th>
    <!-- <th>CMR</th> -->
</tr>
<?php 
$s=0;$i=0;$j=0;
$sql="SELECT * FROM marks ORDER BY total DESC;";
$result=mysqli_query($conn,$sql);
$resultcheck=mysqli_num_rows($result);
if($resultcheck<1)
echo "NO result";
else
{
    while($row=mysqli_fetch_assoc($result))
    {
        $i++;
        $s++;
        $roll=$row['rollno'];
        $cat=$row['category'];
        $phy=$row['physics'];
        $chem=$row['chemistry'];
        $math=$row['maths'];
        $total=$row['total'];
        $query="SELECT *FROM register WHERE id='$roll'";
        $res=mysqli_query($conn,$query);
        $reschk=mysqli_num_rows($res);
        if($reschk<1)
        echo "no name";
        else
        {
            if($r=mysqli_fetch_assoc($res))
            $name=$r['first']." ".$r['last'];
            echo "<tr>";
            echo"<td>$s</td>";
            echo "<td>$name</td>";
            echo "<td>$roll</td>";
            echo "<td>$cat</td>";
            echo "<td>$phy</td>";
            echo "<td>$chem</td>";
            echo "<td>$math</td>";
            echo "<td>$total</td>";
            echo "<td>$i</td>";
            // echo "<td>1</td>";
            echo"</tr>";
        }
    }
}

?>

    <table>
    </div>
</div>

<?php 
include_once 'footer.php';
?>
