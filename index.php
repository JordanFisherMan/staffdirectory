<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="/staffdirectory/src/stylesheets/index.css">
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
$sql = "CREATE DATABASE staff";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}

$database = "staff";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// sql to create table
$sql = "CREATE TABLE staff (
name varchar(100) PRIMARY KEY,
photo_path VARCHAR(100),
department VARCHAR(100),
description TEXT(1000)
)";

if ($conn->query($sql) === TRUE) {
    echo "Table staff created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

?>
  <div class="container">
    <h1 class="page-title">Staff Directory</h1>
    <div class="staff-search">
      <input type="text" name="" value="" placeholder="Keywords...">
      <select class="" name="">
        <option value="department">Department</option>
      </select>
    </div>
    <div class="staff-member">
      <div class="staff-member__primary">
        <img src="" alt="" class="staff-member__photo">
      </div>
      <div class="staff-member__secondary">
        <h2 class="staff-member__name">member name</h2>
        <h2 class="staff-member__department">department</h2>
        <p class="staff-member__description">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </p>
      </div>
    </div>
    <hr>
    <div class="staff-member">
      <div class="staff-member__primary">
        <img src="" alt="" class="staff-member__photo">
      </div>
      <div class="staff-member__secondary">
        <h2 class="staff-member__name">member name</h2>
        <h2 class="staff-member__department">department</h2>
        <p class="staff-member__description">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </p>
      </div>
    </div>
    <hr>
  </div>
</body>
</html>
