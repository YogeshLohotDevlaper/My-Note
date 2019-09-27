<?php

$sname="localhost";
$uname="root";
$pass="";
$dname="testdb";

$con=mysqli_connect($sname, $uname, $pass, $dname);

$fname=$_POST['FirstName'];
$lname=$_POST['LastName'];
$pass=$_POST['psw'];

$sql="insert into exa1(fname, lname, pass) values('$fname', '$lname', '$pass')";

$Result=mysqli_query($con,$sql);

if($Result)
{
    header("Location: Login.html");
}

?>