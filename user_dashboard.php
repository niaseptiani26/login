<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Dashboard User</h1>
        <p>Selamat datang, <strong><?php echo $_SESSION['username']; ?></strong>! Anda masuk sebagai <strong>User</strong>.</p>
        <div style="margin-top: 20px;">
            <a href="logout.php" class="button">Logout</a>
        </div>
    </div>
</body>
</html>
