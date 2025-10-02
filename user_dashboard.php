<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Dashboard - OLFU Queueing Management System</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body { font-family: Arial, sans-serif; background: #f4f4f4; }
        .dashboard { max-width: 500px; margin: 40px auto; background: #fff; padding: 30px; border-radius: 8px; box-shadow: 0 2px 8px #ccc; }
        h2 { color: #2c3e50; }
        .info { margin: 20px 0; }
        .logout { display: inline-block; margin-top: 20px; padding: 8px 16px; background: #e74c3c; color: #fff; border: none; border-radius: 4px; text-decoration: none; }
        .logout:hover { background: #c0392b; }
    </style>
</head>
<body>
    <div class="dashboard">
        <div class="info">
            <strong>Your Queue Number:</strong> <span id="queue_number">12345</span><br>
            <strong>Status:</strong> <span id="queue_status">Waiting</span>
        </div>
        <a href="logout.php" class="logout">Logout</a>
    </div>
</body>
</html>
