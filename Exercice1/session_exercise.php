<?php
session_start();

    $_SESSION['username'] = 'Ismael Billy';

    if (isset($_POST['submit'])) {

        $name = $_POST['name'];

        if($_SESSION['username'] == $name){

            $message = "Welcome mister $name ";
        }
        else{
            $_SESSION['username'] = $name;
            
            $message = "welcome first time sir $name";
        }
    }
    elseif(isset($_POST['deconnexion'])){
        session_destroy();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ExerciceXP-Exo1 | W7_D3</title>
</head>
<body>
    <center>
        <h1> Exercise 1 : Username Session</h1>
        <form action="<?php htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
            <div>
                <label for="name">Name: </label>
                <input type="text" name="name" id="name" placeholder="Your name">
            </div>
            <br>
            <button type="submit" name="submit">Connexion</button>
            <button type="submit" name="deconnexion">Deconnexion</button>
        </form>
        <br>
        <div>
            <?php 
                if (isset($message)) {
                    echo $message ;
                }
            ?>
        </div>
    </center>
</body>
</html>