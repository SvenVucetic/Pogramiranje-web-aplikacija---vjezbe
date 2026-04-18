<?php
    if(isset($_GET['broj']))
    {
        $broj=htmlentities($_GET['broj']);
        if($broj%2==0) echo "Broj $broj je paran.";
        else echo "Broj $broj je neparan.";
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="get">
        <label for="a">broj</label>
        <input type="number" id="br" name="broj"></input><br>
        <button type="submit" value="submit">Paran / Neparan</button>
    </form>
</body>
</html>