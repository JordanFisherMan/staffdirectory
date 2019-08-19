<?php
$servername = "localhost";
$username = "root";
$password = "root";
$database = "staff";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);
//get the q parameter from URL
$q = $_GET['search'];
$field = $_GET['field'];

$sql = "SELECT * FROM staff where $field LIKE '%$q%';";

$result = $conn->query($sql);

$rows = array();
while($r = mysqli_fetch_assoc($result)) {
    $rows[] = $r;
}
echo json_encode($rows);

?>
