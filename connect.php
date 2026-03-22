<?php
session_start();

// DB connection 
$host = "sql111.infinityfree.com";
$user = "if0_41438981";
$pass = "woSGiwTAOf9";
$db   = "if0_41438981_coffeebite";

$con = new mysqli($host, $user, $pass, $db);

if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

// Form data
$a = $_POST['name'];
$b = $_POST['email'];
$c = $_POST['password'];
$d = $_POST['phone_number'];
$e = $_POST['specials'];
$f = $_POST['dob'];

// File upload
$target_dir = __DIR__ . "/uploads/";

if (!is_dir($target_dir)) {
    mkdir($target_dir, 0777, true);
}

$filename = time() . "_" . basename($_FILES["id_proof"]["name"]);

// For DB (browser access)
$target_file = "uploads/" . $filename;

// For server storage
$full_path = $target_dir . $filename;

move_uploaded_file($_FILES["id_proof"]["tmp_name"], $full_path);

// Insert into DB
$stmt = $con->prepare("INSERT INTO details 
(name, email, password, phone_number, specials, dob, id_proof) 
VALUES (?, ?, ?, ?, ?, ?, ?)");

$stmt->bind_param("sssssss", $a, $b, $c, $d, $e, $f, $target_file);

if ($stmt->execute()) {
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
    echo "Error: " . $stmt->error;
}

$stmt->close();
$con->close();
?>
