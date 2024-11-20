<?php
$sql = "SELECT * from 'users'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"] . " - Phone number: " . $row["phone"] . " - Email: " . $row["email"] . "<br>";
    }
  } else {
    echo "0 results";
  }
  $conn->close();
?>