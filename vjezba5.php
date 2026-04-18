<?php

$broj2=rand(1,9);


if(isset($_GET['broj1'])){
    $broj1=htmlentities($_GET['broj1']);
    if($broj1==$broj2){

        $bg="green";
        $letter="white";
        $gumb="Pogodak, probaj ponovo!";
    }
    else{

        $bg="red";
        $letter="white";
        $gumb="Krivo, probaj ponovo!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vjezba5</title>
    <style>
        .btn { display:inline-block; padding:10px 16px; border:1px solid var(--accent);
           border-radius:10px; text-decoration:none; color: <?php echo $letter;?>; background-color: <?php echo $bg;?>}
    </style>
</head>
<body>
    <p>Igra (pogodi broj)</p>
    <form action="" method="get">
        <label for="broj">Upiši jedan broj od 1 do 9</label>
        <input type="number" id="a" name="broj1"></input><br>
        <button type="submit" value="submit" class="btn"><?php echo $gumb;?></button>
    </form>
</body>
</html> 


<?php
if(isset($_GET['broj1'])){
    $broj1=htmlentities($_GET['broj1']);
    if($broj1==$broj2){
        echo "<br>Zamišljeni broj je $broj2";
    }
    else{
        echo "<br>Zamišljeni broj je $broj2";
    }
}
?>