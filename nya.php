<?php

$con = mysql_connect('localhost','root','','prakash');
$name=$_POST['name'];
$number=$_POST['number'];
$password=$_POST['password'];
$confirmpassword=$_POST['confirmpassword'];

$sql= "INSERT INTO 'sign_up'('name','number','password','confirmpassword')VALUES ('0','name','number','password','confirmpassword')";

$rs=mysqli_query($con,$sql);

if($rs)
{
    echo "contact records inserted";
}

?>