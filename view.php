<?php //require_once 'initialize.php'; ?>
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
        require_once 'db-functions.php';
        require_once 'db-credentials.php';
        $database = db_connect();

        $sql = "SELECT * FROM images ORDER BY id DESC";
        $result = $database->query($sql);

        if(mysqli_num_rows($result) > 0) {
            while($images = mysqli_fetch_assoc($result)) { ?>
                <div class="alb">
                    <img src="uploaded-images/<?= $images['image_url'] ?>">
                </div>
            <?php }
        } 
    ?>
</body>
</html>