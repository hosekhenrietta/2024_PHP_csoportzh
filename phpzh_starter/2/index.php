<?php


?>

<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Második feladat</title>
    <link rel="stylesheet" href="style.css">  
</head>
<body>
    <h1>Felvétel a Roxfortba</h1>

    <form action="" method="post">
        <label for="name">Név:</label>
        <input type="text" name="name" id="name">
        <br>
        <label for="house">Roxforti ház:</label>
        <select name="house" id="house">
            <option value="" selected>-- Válassz --</option>
            <option value="Griffendél">Griffendél</option>
            <option value="Hollóhát">Hollóhát</option>
            <option value="Mardekár">Mardekár</option>
            <option value="Hugrabug">Hugrabug</option>
        </select> <br>
            <br>
        <button type="submit">Felvétel</button>
    </form>

</body>
</html>
