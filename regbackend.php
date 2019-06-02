<?php
$name=$_POST['firstname'];
$uname=$_POST['uname'];
$pwd=$_POST['pwd'];
$age=$_POST['age'];
$gender=$_POST['gender'];
$str=$_POST['stream'];
$foi=$_POST['interest'];
$link=mysqli_connect("localhost","student-register-3130377c39","password123");
if(mysqli_connect_error()){
  echo "Failure of database! Please try again later."
}
$query="INSERT INTO 'studentreglist'('FullName','Username','Password','Gender','Age','Stream','Interestedfield') VALUES ($name,$uname,$pwd,$age,$gender,$stream,$interest);
			
?>
