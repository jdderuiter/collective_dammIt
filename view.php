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

    // var_dump($moves);

    // foreach($moves as $move){
    //     echo $move;
    // }

    $vals = array_count_values($moves);
    print_r($vals);


} else{
    echo "0 results";

}
?>