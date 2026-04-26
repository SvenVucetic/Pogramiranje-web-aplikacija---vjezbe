<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab2-2</title>
    <style>
        button{color:white; background-color:gray;}
        table {margin: 8px;}
        td {border: 1px solid black; width:50px; height:25px;}
    </style>
</head>
<body>
    <form action="" method="post">
        <label for="red">Upišite broj redaka: </label><br>
        <input type="number" id="red" name="red"></input><br><br>
        <label for="stup">Upišite broj kolona: </label><br>
        <input type="number" id="stup" name="stup"><br><br>
        <button type="submit" value="submit">NAPRAVI TABLICU</button>
    </form><br><br>
    
    
    <?php

    if(isset($_POST['red']))
    {
        
        $red=htmlentities($_POST['red']);
        $stup=htmlentities($_POST['stup']);
        echo '<table>';

        for($i=1; $i<=$red; $i++){
            echo '<tr border="1">';
            for($j=1; $j<=$stup; $j++){
                echo '<td></td>';
            }
            echo '</tr>';
        }

        echo '</table>';
    }

    ?>

</body>

</html>