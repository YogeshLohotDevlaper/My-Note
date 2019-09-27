<?php

session_start();


$sname="localhost";
$uname="root";
$pass="";
$dname="testdb";

$con=mysqli_connect($sname, $uname, $pass, $dname);

$LeigthBill=$_POST['LeigthBill'];

$KiranaBill=$_POST['KiranaBill'];

$PhoneBill=$_POST['PhoneBill'];

$DrBill=$_POST['DrBill'];

$BillDate=$_POST['BillDate'];

$U_id=$_SESSION["UserId"];


$sql="insert into exa2(LeigthBill, KiranaBill, PhoneBill, DrBill, BillDate, U_id) values('$LeigthBill', '$KiranaBill', '$PhoneBill', '$DrBill', '$BillDate', $U_id)";

$Result = mysqli_query($con,$sql);

if($Result)
{
    echo"DATA is an insert";
}









?>