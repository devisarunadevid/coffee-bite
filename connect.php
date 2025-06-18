<?php

$a=$_POST['name'];
$b=$_POST['email'];
$c=$_POST['password'];
$d=$_POST['phone_number'];
$e=$_POST['specials'];
$f=$_POST['dob'];
$g=$_POST['id_proof'];

$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'cafe');
$query=("insert into details (name,email,password,phone_number,specials,dob,id_proof) values('$a','$b','$c','$d','$e','$f','$g')");
mysqli_query($con,$query);
include('register.php');
echo("<script>");
echo("alert('Thank You!for Registering')");
echo("</script>");
mysqli_close($con);

?>





