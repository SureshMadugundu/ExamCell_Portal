<?php
$servername="localhost";
$username="sqluser";
$password="Admin@3212#";
$database="Sample";


$handler=mysqli_connect($servername,$username,$password,$database);
if($handler)
{
    echo "connected"."<br>";
}
else
{
    echo "not connected"."<br>";
}

$query1="USE Sample;";
$result=mysqli_query($handler,$query1);
if($result)
{
    echo "Used"."<br>";
}
else
{
    echo "NOT USED"."<br>";
}
    

$query2 = "CREATE TABLE Student(SID varchar(7),NAME varchar(20));";
$resultTable = mysqli_query($handler,$query2);
if($resultTable)
	echo "table created"."<br>";
else
	echo "table not created "."<br>";
    
$query3="INSERT INTO Student VALUES('R190019','M.Suresh');";
$result_table=mysqli_query($handler,$query3);
if($result_table)
{
    echo "values inserted";
}
else
{
    echo "Values not inserted";
}
$query4= "SELECT * FROM Student;";
$resultSelect = mysqli_query($handler,$query4);

$rowcheck = mysqli_num_rows($resultSelect);
if($rowcheck>0)
{
	while($record = mysqli_fetch_assoc($resultSelect))
	{
		echo $record['SID']." ".$record['NAME']."<br>";
	}
}
$query5="DROP TABLE Student;";
$re=mysqli_query($handler,$query5);
if($re)
{
    echo "dropped";
}
else
{
    echo "NOT dropped";
}
?>