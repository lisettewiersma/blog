<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,900|Reenie+Beanie&display=swap" rel="stylesheet">
    <title>Blog</title>
</head>
<body>
    <div class="header">
        <a href="#"><p class="knop">Log in</p></a>
        <a href="#"><h2 class="titel">Blog</h2></a>
        <a href="#"><p class="knop">Register</p></a>
    </div>
    <?php 
    include 'blogs.php';
    include 'headerblogs.php';
    headerblogs();
    blogs();
    ?>
</body>
</html>