<?php
    setcookie('name', 'Kone', time() + 1 * 24 * 3600);
    
    if(isset($_POST['submit'])){
        $name = $_POST['name'];

        if($_COOKIE['name'] == $name){

            echo 'Connexion Réussie';
        }
        else{
            echo 'La connexion a échoué';
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ExerciceXP-Exo2 | W7_D3</title>
</head>
<body>
    <h1>Exercise 2 : Store Login Detail</h1>
    <form action="#" method="post">
        <input type="text" name="name" placeholder="Your Name">
        <input type="submit" name="submit" value="connexion">
    </form>
</body>
</html>