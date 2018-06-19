<?php
require_once('database.php');

$query = "SELECT input1, input2 FROM dammit";
$moves = [];
$result = $conn->query($query);

if ($result->num_rows >0) {
    $count = 1;
    while ($row = $result->fetch_array()) {
        $moves[] = $row['input1']." ". $row['input2'];
    }
    $vals = array_count_values($moves);
    arsort($vals);
} else{
    echo "0 results";

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <? foreach($vals as $key => $val): ?>
    <h3><?= $key ?></h3>
    <div class="meter">
        <span style="width: <?= $val ?>%"></span>
    </div>
    <? endforeach ?>
</body>
</html>