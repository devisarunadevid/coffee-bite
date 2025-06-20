<?php
session_start();
if (!isset($_SESSION['user_details'])) {
    header('Location: register.php');
    exit();
}
$user = $_SESSION['user_details'];

// Price list for products
$prices = [
    'coffee' => 120,
    'mocha' => 150,
    'cappuccino' => 140,
    'brownie' => 90,
    'quinoa salad' => 110,
    'rosemilk' => 80,
    'croissants' => 100,
    'latte' => 130,
    'excelsa' => 125,
    'robusta' => 115,
    'americano' => 135,
    'espresso' => 145
];
$special = strtolower($user['specials']);
$price = isset($prices[$special]) ? $prices[$special] : 'N/A';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Details</title>
    <style>
        body {
            background: #fff8e7;
            font-family: 'Roboto', Arial, sans-serif;
            color: #3e2723;
            margin: 0;
            padding: 0;
        }
        .details-container {
            max-width: 500px;
            margin: 40px auto;
            background: #fff;
            border-radius: 12px;
            box-shadow: 0 4px 16px rgba(0,0,0,0.08);
            padding: 32px 24px;
        }
        h2 {
            text-align: center;
            color: chocolate;
            margin-bottom: 24px;
        }
        .detail-row {
            margin-bottom: 16px;
        }
        .detail-label {
            font-weight: bold;
            display: inline-block;
            width: 140px;
        }
        .price {
            font-size: 1.3rem;
            color: #b45f06;
            font-weight: bold;
            margin-top: 20px;
            text-align: center;
        }
        .id-proof-link {
            color: #8b4513;
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="details-container">
        <h2>Registration Details</h2>
        <div class="detail-row"><span class="detail-label">Name:</span> <?php echo htmlspecialchars($user['name']); ?></div>
        <div class="detail-row"><span class="detail-label">Email:</span> <?php echo htmlspecialchars($user['email']); ?></div>
        <div class="detail-row"><span class="detail-label">Phone Number:</span> <?php echo htmlspecialchars($user['phone_number']); ?></div>
        <div class="detail-row"><span class="detail-label">Product:</span> <?php echo htmlspecialchars($user['specials']); ?></div>
        <div class="detail-row"><span class="detail-label">Date of Birth:</span> <?php echo htmlspecialchars($user['dob']); ?></div>
        <div class="detail-row"><span class="detail-label">ID Proof:</span> <a class="id-proof-link" href="<?php echo htmlspecialchars($user['id_proof']); ?>" target="_blank">View File</a></div>
        <div class="price">Price: ₹<?php echo $price; ?></div>
    </div>
</body>
</html> 