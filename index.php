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
    <script src="main.js"></script>
    <title>Collective Dammen</title>
</head>
<body class="bg">
        <form action="?" method="POST">
            <div class="custom-select">
                <label for="item1">Van:</label>
                <select name="item1">
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="C">C</option>
                    <option value="D">D</option>
                    <option value="E">E</option>
                    <option value="F">F</option>
                    <option value="G">G</option>
                    <option value="H">H</option>
                </select>
                <label for="item2"></label>
                <select name="item2">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                </select>
                <label for="item3">Naar:</label>
                <select name="item3">
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="C">C</option>
                    <option value="D">D</option>
                    <option value="E">E</option>
                    <option value="F">F</option>
                    <option value="G">G</option>
                    <option value="H">H</option>
                </select>
                <label for="item4"></label>
                <select name="item4">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                </select>
                <input type="submit" value="Kies zet!">
            </div>
        </form>
   

    <?php
        if(!empty($_POST)){
            $input1 = $_POST["item1"];
            $input2 = $_POST["item2"];
            $input3 = $_POST["item3"];
            $input4 = $_POST["item4"];

            $move1 = $input1.$input2;
            $move2 = $input3.$input4;


            $sql = "INSERT INTO dammit (input1, input2) VALUES('$move1','$move2')";
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