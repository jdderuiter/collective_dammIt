<?php
    require_once('database.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Collective Dammen</title>
</head>
<body>
    <form action="?" method="POST">
        <select name="item1">
            <option value="a1">A1</option>
            <option value="a2">A2</option>
            <option value="a3">A3</option>
        </select>
        <select name="item2">
            <option value="a1">A1</option>
            <option value="a2">A2</option>
            <option value="a3">A3</option>
        </select>
        <input type="submit" value="Speel zet!">
    </form>

    <?php
        if(!empty($_POST)){
            $input1 = $_POST["item1"];
            $input2 = $_POST["item2"];

            $sql = "INSERT INTO dammit (input1, input2) VALUES('$input1','$input2')";
            $result = $conn->query($sql);

            if (!$result){
                echo "Error";
            }else{
                echo "inserted!";
            }
        }
        
    ?>
</body>
</html>