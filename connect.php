<?php
$servername = "sqlXXX.infinityfree.com"; 
$username = "epiz_XXXXXXX";             
$password = "your_database_password";   
$dbname = "epiz_XXXXXXX_cafe";          

$con = mysqli_connect($servername, $username, $password, $dbname);

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

$a = $_POST['name'];
$b = $_POST['email'];
$c = $_POST['password'];
$d = $_POST['phone_number'];
$e = $_POST['specials'];
$f = $_POST['dob'];

$target_dir = "uploads/";
if (!is_dir($target_dir)) {
    mkdir($target_dir, 0777, true);
}
$target_file = $target_dir . basename($_FILES["id_proof"]["name"]);
move_uploaded_file($_FILES["id_proof"]["tmp_name"], $target_file);

$query = "INSERT INTO details (name, email, password, phone_number, specials, dob, id_proof) 
          VALUES ('$a', '$b', '$c', '$d', '$e', '$f', '$target_file')";

if (mysqli_query($con, $query)) {
    echo "<script>alert('Thank you for registering!'); window.location.href='index.php';</script>";
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($con);
}

mysqli_close($con);
?>
