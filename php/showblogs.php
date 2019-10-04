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
        <a href="#"><p class="knop" id="inlogbttn">Log in</p> 
        <a href="#"><h3 class="titel">Blog</h3></a>
        <a href="userside/writeform.php"><p class="knop"> Schrijf blog</p></a>
    </div>

    <div id="inlogModal" class="modal">
        <div class="modal-content">
            <span class="inlogclose">&times;</span>
            <h3>Login</h3>
            <form action='' method="post">
            <label for="username"> Gebruikersnaam: </label>
                <input type="text" name="username" id="username"> <br> <br>
                <label for="password"> Wachtwoord: </label>
                <input type="password" name="password" id="password"> <br><br>
                <input type="submit" name="submit" value="Login">
                <a href="#"><p class="register" id="registerbttn"> Geen account? </p></a>
            </form>
        </div>
    </div>

   <div id="registerModal" class="registerModal">
        <div class="modal-content-register">
            <span class="registerclose">&times;</span>
            <h3>Maak account</h3>
            <form action="login.php" method="post">
                <label for="username"> Gebruikersnaam: </label>
                <input type="text" name="registerusername" id="registerusername"> <br><br>
                <label for="password"> Wachtwoord: </label>
                <input type="password" name="registerpassword" id="registerpassword"> <br><br>
                <label for="image">Upload profielfoto (afbeeldingurl)</label>
                <input type="text" name="image" id="image"> <br><br>
                <input type="submit" value="Maak account">
            </form>
        </div>
    </div>

    <?php 
    include 'login.php';
    include 'blogs.php';
    include 'headerblogs.php';
 
    
    headerblogs();
    echo "<div class='blogcontainer'>";
    blogs();
    echo "</div>";
    login();
    ?>

    <script src="../js/inlogmodal.js"></script>
    <script src="../js/registermodal.js"></script>
</body>
</html>