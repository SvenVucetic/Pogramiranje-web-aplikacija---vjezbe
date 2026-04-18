<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vjezba7</title>
</head>
<body>
    <form action="" method="get">
        <label for="broj"><b>Upiši ocjenu I. kolokvija: </b></label>
        <input type="number" id="a" name="broj1"></input><br><br>
        <label for="broj"><b>Upiši ocjenu II. kolokvija: </b> </label>
        <input type="number" id="b" name="broj2"></input><br><br>
        <button type="submit" class="btn" value="submit">Izračunaj: </button>
</body>
</html>

<?php
    if(isset($_GET['broj1'])){
        $a=htmlentities($_GET['broj1']);
        $b=htmlentities($_GET['broj2']);
        $kolokvij=array($a,$b);

        if($kolokvij[0]==1 || $kolokvij[1]==1){
            echo "Krajnja ocjena je negativna(1).";
        }
        else if($kolokvij[0]>=6 || $kolokvij[0]<=0 || $kolokvij[1]>=6 || $kolokvij[1]<=0){
            echo "<br>Upisana je neispravna ocjena.";
        }
        else{
            $prosjek = ($kolokvij[0]+$kolokvij[1])/2;
            if($prosjek<1.5) echo "Krajnja ocjena je negativna(1).";
            else if($prosjek<2.5) echo "Krajnja ocjena je dovoljan(2).";
            else if($prosjek<3.5) echo "Krajnja ocjena je dobar(3).";
            else if($prosjek<4.5) echo "Krajnja ocjena je vrlo dobar(4).";
            else echo "Krajnja ocjena je odličan(5).";
        }

        
    }
?>