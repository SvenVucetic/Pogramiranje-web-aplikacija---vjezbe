<?php

    $red="blue";
    
    if(isset($_POST['check']))
    {
        $clr=htmlentities($_POST['color']);
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab2-1</title>
    <style>
        body{color:<?php echo $clr ?>;}
        button{color:<?php echo $clr ?>;}
    </style>
</head>
<body>
    <form action="" method="post">
        <label for="color">Odaberite željenu boju: </label><br>
        <input type="color" id="color" name="color" default="<?php echo $clr ?>"></input><br><br>
        <input type="checkbox" id="check" name="check">
        <label for="check">Želim promijeniti boju</label><br><br>
        <button type="submit" value="submit">PROMJENI BOJU</button>
    </form>
</body>
</html>
