<?php 
function register() {
    include 'connect.php';

    if ( !isset($_POST['registerusername'], $_POST['registerpassword'], $_POST['image']) ) {
        die('Zorg dat alle velden gevuld zijn met de juiste informatie');
    }

}
function login() {
    include 'connect.php';

    if (isset ($_POST['submit'])){
        
        if ( !isset($_POST['username'], $_POST['password']) ) {
            die ('Vul je gebruikersnaam en wachtwoord in');
        }

        $user = $_POST["username"];
        $password = $_POST['password'];

        $query="SELECT * FROM users WHERE username ='" . $user . "' AND password ='" . $password . "'";
        $result=$connect->query($query);

        if($row = $result->fetch_assoc()) {
            echo "<script> 
            alert(' $user is ingelogd');
            location.href='showblogs.php';
            </script>";
        }
    }
}
?>