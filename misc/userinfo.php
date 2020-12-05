<?php
$con=mysqli_connect('localhost','root','root');
if($con){
	echo "connection successful";
}
else{
	echo "not connected";
}
mysqli_select_db($con,'durgadata');
$username = $_POST['user'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$comments = $_POST['comment'];
$query = "insert into userinfo(username,email,mobile,comment)
values('$username','$email','$mobile','$comments')";

mysqli_query($con, $query);
header('location:index.php');
?>  