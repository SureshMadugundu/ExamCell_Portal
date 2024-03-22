
<?php
include "connection.php";

$name = $_POST['user'];
$pwd = $_POST['pwd'];


$query1 = "insert into userlogin values(?,?);";

$initilize = mysqli_stmt_init($handler);
if(!mysqli_stmt_prepare($initilize,$query1))
	echo "failed";
else
{

	mysqli_stmt_bind_param($initilize,"ss",$name,$pwd);
	mysqli_stmt_execute($initilize);
}
?>
