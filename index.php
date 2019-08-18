<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="/staffdirectory/src/stylesheets/index.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="/staffdirectory/src/javascript/main.js"></script>
  <title>Staff Directory</title>
</head>
<body>
  <?php
$servername = "localhost";
$username = "root";
$password = "root";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Create database
$sql = "CREATE DATABASE IF NOT EXISTS staff";
if ($conn->query($sql) === FALSE){
    echo "Error creating database: " . $conn->error;
}

$database = "staff";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

$sql = "DROP TABLE IF EXISTS staff;";

if ($conn->query($sql) === FALSE){
    echo "Error deleting table: " . $conn->error;
}

// sql to create table
$sql = "CREATE TABLE staff (
name varchar(100) PRIMARY KEY,
photo_path VARCHAR(100),
department VARCHAR(100),
description TEXT(1000)
)";

if ($conn->query($sql) === FALSE){
    echo "Error creating table: " . $conn->error;
}

$sql = "INSERT INTO staff (name, photo_path, department, description)
VALUES ('John Doe','/staffdirectory/src/images/photo.jpg','Computer Science','Description about John');";
if ($conn->query($sql) === FALSE) {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$sql = "INSERT INTO staff (name, photo_path, department, description)
VALUES ('Paul Potts','/staffdirectory/src/images/photo.jpg','Opera','Description about Paul');";
if ($conn->query($sql) === FALSE) {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$sql = "INSERT INTO staff (name, photo_path, department, description)
VALUES ('Bob Smith','/staffdirectory/src/images/photo.jpg','Social Studies','Description about Bob');";
if ($conn->query($sql) === FALSE) {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

?>

  <div class="container">
    <h1 class="page-title">Staff Directory</h1>
    <div class="index__staff-search">
      <div class="staff-search">
        <input id="js-search" type="text" name="search" value="" placeholder="Keywords...">
        <select id="js-field-select" class="" name="">
          <option value="department">Department</option>
          <option value="name">Name</option>
        </select>
      </div>
    </div>
    <?php
    $sql = "SELECT * FROM staff";
    $result = $conn->query($sql);

    // output data of each row
    while($row = $result->fetch_assoc()) { ?>
      <div class="staff-member">
        <div class="staff-member__primary">
          <img src="<?php echo $row["photo_path"] ?>" alt="" class="staff-member__photo">
        </div>
        <div class="staff-member__secondary">
          <h2 class="staff-member__name"><?php echo $row["name"] ?></h2>
          <h2 class="staff-member__department"><?php echo $row["department"] ?></h2>
          <p class="staff-member__description">
            <?php echo $row["description"] ?>
          </p>
        </div>
      </div>
      <hr>
    <?php } ?>

  </div>
</body>
</html>
