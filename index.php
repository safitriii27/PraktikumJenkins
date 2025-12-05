<?php
$title = "Selamat Datang di Website Safitri";
$desc  = "Ini adalah halaman index.php sederhana.";
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f2f2f2;
            padding: 30px;
            text-align: center;
        }
        .box {
            background: white;
            padding: 20px;
            margin: auto;
            width: 50%;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
    </style>
</head>
<body>
<div class="box">
    <h1><?php echo $title; ?></h1>
    <p><?php echo $desc; ?></p>
</div>
</body>
</html>
