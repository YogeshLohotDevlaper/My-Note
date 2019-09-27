<?php

session_start();

$sname="localhost";
$uname="root";
$pass="";
$dname="testdb";

$con=mysqli_connect($sname, $uname, $pass, $dname);

$fname=$_POST['FirstName'];
$pass=$_POST['psw'];

$sql="select * from exa1";

$Result=mysqli_query($con,$sql);

$num=mysqli_num_rows($Result);

for($i=1; $i<=$num; $i++)
{
    $row=mysqli_fetch_array($Result);

    if($pass==$row['pass'] && $fname==$row['fname'])
    {
        if($_POST["remember"]=='1' || $_POST["remember"]=='on')
                            {
                            $hour = time() + 3600 * 24 * 30;
                            setcookie('username', $fname, $hour);
                                 setcookie('password', $pass, $hour);
                            }
        $_SESSION["UserId"]=$row['id'];
        header("Location: Recored.html");
    }
}
?>