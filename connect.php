<?php
$servername = "sql305.infinityfree.com"; 
$username = "if0_39270221";             
$password = "arunadevi45";   
$dbname = "if0_39270221_cafe";          

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

session_start();
if (mysqli_query($con, $query)) {
    $_SESSION['user_details'] = [
        'name' => $a,
        'email' => $b,
        'phone_number' => $d,
        'specials' => $e,
        'dob' => $f,
        'id_proof' => $target_file
    ];
    header('Location: details.php');
    exit();
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($con);
}

mysqli_close($con);
?>
