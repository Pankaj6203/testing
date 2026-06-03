<?php $page = "About"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $page ?> - CI Pipeline</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav class="navbar">
        <a href="index.php">Home</a>
        <a href="about.php" class="active">About</a>
        <a href="contact.php">Contact</a>
    </nav>
    <div class="container">
        <div class="card">
            <h1>About This Project</h1>
            <p class="version">This is a CI/CD pipeline test project.</p>
            <p class="time">Deployed automatically via GitHub → cPanel.</p>
            <div class="badge">techotd.in</div>
        </div>
    </div>
</body>
</html>
