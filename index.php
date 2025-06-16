<?php
session_start();
require_once 'includes/config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Car Rental Shop</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="p-4">
    <div class="container">
        <h1>🚗 Welcome to the Car Rental Shop</h1>
        <p>If you see this page, the PHP config and DB connection are working!</p>

        <?php
        // Test query
        $query = "SELECT * FROM cars LIMIT 1";
        $result = $conn->query($query);

        if ($result) {
            echo "<p>Connected to database. Table 'cars' exists.</p>";
        } else {
            echo "<p> Connected to database, but could not find table 'cars'.</p>";
        }
        ?>
    </div>
</body>
</html>
