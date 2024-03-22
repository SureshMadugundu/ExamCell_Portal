<html>
<body>
<?php
$servername="localhost";
$username="sqluser";
$password="Admin@3212#";
$database="suresh";



$handler = mysqli_connect($servername,$username,$password,$database);
if($handler)
echo "connection established"."<br>";
else
echo "connection not established"."<br>";



?>
</body>
</html>