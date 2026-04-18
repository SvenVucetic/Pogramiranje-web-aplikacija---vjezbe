<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vjezba6</title>
    <style>
        .btn { display:inline-block; padding:10px 16px; border:1px solid var(--accent);
           border-radius:10px; text-decoration:none; color: black; background-color: lightgray}
    </style>
</head>
<body>
    <p>Kalkulator (Switch naredba)</p>
    <form action="" method="get">
        <label for="broj"><b>Upiši prvi broj: </b></label>
        <input type="number" id="a" name="broj1"></input><br><br>
        <label for="broj"><b>Upiši drugi broj:</b> </label>
        <input type="number" id="b" name="broj2"></input><br><br>
        <button type="submit" name ="gumb" value="plus" class="btn">+</button>
        <button type="submit" name ="gumb" value="minus" class="btn">-</button>
        <button type="submit" name ="gumb" value="mnozi" class="btn">*</button>
        <button type="submit" name ="gumb" value="djeli" class="btn">/</button>
    </form>
    <p>Rezultat: </p>
</body>
</html> 

<?php
    if(isset($_GET['broj1'])){
        $a=htmlentities($_GET['broj1']);
        $b=htmlentities($_GET['broj2']);
        

        switch ($_GET['gumb']){
            case "plus": echo $a+$b;break;
            case "minus": echo $a-$b;break;
            case "mnozi": echo $a*$b;break;
            case "djeli": echo $a/$b;break;
        }
    }
?>