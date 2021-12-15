<?php require_once 'initialize.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="index.php">&#8592;</a>
    <?php
    $sql = "SELECT * FROM images ORDER BY id DESC";
    $result = $database->query($sql);
    $row = $result->fetch_assoc();
    $result->free();
    
    ?>
        
    <img src="uploaded-images/<?= $row['image_url']; ?>">
       
</body>
</html>