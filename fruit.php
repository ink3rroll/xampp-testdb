<?php
include "localhost.php";

$fruit_name = "Apple";
$fruit_color = "Red";

$fruitsql = "INSERT INTO fruits (id, name, color) values  ('4', '$fruit_name', '$fruit_color')";
$sql = mysqli_query($con, $fruitsql);

if($sql){
    echo "Fruit registered";
}

else
    echo "Error"

?>