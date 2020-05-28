<?php
/*
* PHP version 7
* @category   Logga in
* @author     Karim Ryde <karye.webb@gmail.com>
* @license    PHP CC
*/

session_start();
if (!isset($_SESSION['login'])) {
    
}
?>
<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Logga in</title>
    <link rel="stylesheet" href="./scss/main.css">
</head>
<body>
    <div class="kontainer">
        <header class="loggaInHeader">
            <h1><a href="./index.php">FilmTipset</a></h1>
        </header>
        <main class="LoggaInMain">
            <div>
                <img src="./bilder/användaricon.png" alt="användar icon">
                <form action="#" method="POST">
                <label>Användarnamn</label>
                <input type="text" name="anamn" placeholder="Användarnamn" required>
                <label>Lösenord</label>
                <input type="password" name="losen" placeholder="Lösenord" required>
                </form>
            </div>
        </main>
    </div>
</body>
</html>