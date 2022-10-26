<?php 
session_start();
include("./includes/config.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SNLive | Homepage</title>
    
   <link rel="stylesheet" href="./css/index.css">
</head>
<body>
    <!-- header  -->
    <?php include("./includes/header.php"); ?>

    <div class="main-container">
        <?php include("./includes/mainNews.php"); ?>

       <?php include("./includes/sidebar.php"); ?>

       
    </div>
    <?php include("./includes/pagging.php"); ?>
    
    <footer>
        <?php include("./includes/footer.php") ?>
    </footer>
</body>
</html>