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
<body>

    
        <form action="?" method="POST">
            <div class="custom-select">
                <label for="item1">Vanaf:</label>
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
                <label for="item2">Naar:</label>
                <select name="item2">
                    <option value="a1">A1</option>
                    <option value="a2">A2</option>
                    <option value="a3">A3</option>
                </select>
                <input type="submit" value="Speel zet!">
            </div>
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