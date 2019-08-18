<?php

//get the q parameter from URL
$q=$_GET['search'];

$sql = "SELECT * FROM staff where name LIKE '%$q%';";

$result = $conn->query($sql);

echo $result;

// if ($result === FALSE){
//     echo "Error deleting table: " . $conn->error;
// } else {
//   //output the response
//   echo $result;
// }


?>
