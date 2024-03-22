<html>
<head><title>PHPPROJECT</title></head>

<body>


<table border="2">
    <tr>
    <th>RegId</th>
    <th>Name</th>
    <th>SubjectName</th>
    <th>Cr</th> 
    <th>AT1</th>
    <th>AT2</th>	
    <th>ATs</th> 
    <th>MID1</th>
    <th>MID2</th>
    <th>MID3</th>
    <th>MIDs</th>
    <th>Internals</th>
    <th>GRADE</th>
    <th>Cr*Gr</th>
    </tr>


<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{



$id=$_POST['id'];

$servername="localhost";
$username="sqluser";
$password="Admin@3212#";
$database="Sample";


$handler=mysqli_connect($servername,$username,$password,$database);
/*if($handler)
{
    echo "connected"."<br>";
}
else
{
    echo "not connected"."<br>";
}*/
$query1="USE Sample;";
$db=mysqli_query($handler,$query1);
/*if($db)
    echo "used"."<br>";
else
    echo "NOT used"."<br>";
*/

$query4="select * from Results where RegId='$id';";
$resultSelect1 = mysqli_query($handler,$query4);
$rowcheck1 = mysqli_num_rows($resultSelect1);
$datas=array();
if($rowcheck1>0)
{   
        
        while($record1 = mysqli_fetch_assoc($resultSelect1))
        {
            echo "<tr><td>".$record1['RegId']."</td><td>".$record1['Name']."</td><td>".$record1['SubjectName']."</td><td>".$record1['SUBJECT']."</td><td>".$record1['AT1']."</td><td>".$record1['AT2']."</td><td>".$record1['ATs']."</td><td>".$record1['MID1']."</td><td>".$record1['MID2']."</td><td>".$record1['MID3']."</td><td>".$record1['MIDs']."</td><td>".$record1['Internals']."</td><td>".$record1['GRADE']."</td><td>".$record1['CREDITS']."</td></tr>";
        }
}

$query5="select CREDITS from Results where RegId='$id';";
$resultSelect2 = mysqli_query($handler,$query5);
$datas=array();
if(mysqli_num_rows($resultSelect2)>0)
{
    while($row=mysqli_fetch_assoc($resultSelect2))
    {
        $datas[]=$row;
    }
}

foreach($datas as $data)
{
    //echo $data['CREDITS']."<br>";
    
    $sum+=$data['CREDITS'];
}
//echo "SUM is:".$sum."<br>";
$SGPA=round(($sum/21.5),2);
echo "<tr><td colspan='12' align='right'>"."21.5"."</td><td colspan='2'>".$sum."</td></tr>";


echo "<tr><td colspan='14' align='center'>"."SGPA:$sum/21.5=$SGPA"."</td></tr>";
}

?>
</table>
</body>
</html>