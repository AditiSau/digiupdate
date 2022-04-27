<?php

// session_start();

$con = mysqli_connect('localhost', 'root', '');

mysqli_select_db($con, 'userdb');

$name = $_POST['user'];


$pass = $_POST['password'];

$email = $_POST['email'];

$s="select * from users where name = '$name' && password = '$pass' && email='$email'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1) {

echo "Username already taken";

}else{

$reg ="INSERT INTO `users` (`name`, `password`, `email`) VALUES('$name','$pass', '$email')";
mysqli_query($con,$reg);

header('Location:transaction.php');
 }

?>