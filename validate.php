<?php
// session_start();
$conn = mysqli_connect('localhost', 'root', '');
mysqli_select_db($conn, 'userdb');

$name = $_POST['user'];
$pass = $_POST['password'];
$sql="SELECT * FROM `users` where name = '$name' && password = '$pass'";
$result = mysqli_query($conn, $sql);
$num = mysqli_num_rows(($result));
if($num == 1)
 {
header('Location:home.php');
}
else
{
header('Location:home1.php');
}
?>