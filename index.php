<?php
$message = "Pipeline Working!";
$version = "v1.0";
$deployed_at = date("Y-m-d H:i:s");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Project</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="status-dot"></div>
            <h1><?= $message ?></h1>
            <p class="version">Version: <strong><?= $version ?></strong></p>
            <p class="time">Server Time: <?= $deployed_at ?></p>
            <div class="badge">Auto Deploy Active</div>
        </div>
    </div>
</body>
</html>
