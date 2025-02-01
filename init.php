<?php
$servername = "localhost";
$username = "root";
$password = "";
$conn = new mysqli($servername, $username, $password); // Connection Creatiion
if ($conn->connect_error) { // Connection Check
die("Connection Failed: " . $conn->connect_error);
}
$sql = "CREATE DATABASE IF NOT EXISTS assignment8"; // Create DB
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
}else {
    echo "Error creating Database " . $conn->error;
} 

$conn->select_db("assignment8");
$sql = "CREATE TABLE IF NOT EXISTS Items (
ID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
NAME VARCHAR(40) NOT NULL,
TYPE VARCHAR(40) NOT NULL,
MAKE VARCHAR(40) NOT NULL,
MODEL VARCHAR(40) NOT NULL,
BRAND VARCHAR(40) NOT NULL)";
if ($conn->query($sql) === TRUE){
    echo "Table created successfully";
} else {
    echo "Error creating table" . $conn->error;
}



// No way this is the most effective method, but it worked... eventually.




$conn->select_db("assignment8");
$sql = "INSERT INTO Items (ID, NAME, TYPE, MAKE, MODEL, BRAND)
VALUES ('100', 'Service One', 'Service', '=', '=', 'Programming Consultation') ";
if ($conn->query($sql) === TRUE){
    echo "Rows Added successfully";
} else {
    echo "Error creating rows" . $conn->error;
}
$sql = "INSERT INTO Items (ID, NAME, TYPE, MAKE, MODEL, BRAND)
VALUES ('101', 'Service Two', 'Service', '=', '=', 'Programming Consultation') ";
if ($conn->query($sql) === TRUE){
    echo "Rows Added successfully";
} else {
    echo "Error creating rows" . $conn->error;
}
$sql = "INSERT INTO Items (ID, NAME, TYPE, MAKE, MODEL, BRAND)
VALUES ('102', 'ProgCalc', 'Product', 'Casio', '2020', '=') ";
if ($conn->query($sql) === TRUE){
    echo "Rows Added successfully";
} else {
    echo "Error creating rows" . $conn->error;
}
$sql = "INSERT INTO Items (ID, NAME, TYPE, MAKE, MODEL, BRAND)
VALUES ('103', 'ProgBook', 'Book', '=', '=', 'OReilly') ";
if ($conn->query($sql) === TRUE){
    echo "Rows Added successfully";
} else {
    echo "Error creating rows" . $conn->error;
}
$sql = "INSERT INTO Items (ID, NAME, TYPE, MAKE, MODEL, BRAND)
VALUES ('104', 'Red', 'Car', 'F1', 'Ferrari', 'Ferrari') ";
if ($conn->query($sql) === TRUE){
    echo "Rows Added successfully";
} else {
    echo "Error creating rows" . $conn->error;
}
$sql = "INSERT INTO Items (ID, NAME, TYPE, MAKE, MODEL, BRAND)
VALUES ('105', 'Computer', 'Computer', 'HP', 'E100', 'HP') ";
if ($conn->query($sql) === TRUE){
    echo "Rows Added successfully";
} else {
    echo "Error creating rows" . $conn->error;
}
$sql = "INSERT INTO Items (ID, NAME, TYPE, MAKE, MODEL, BRAND)
VALUES ('106', 'Service Three', 'Service', '=', '=', 'Programming Consultation') ";
if ($conn->query($sql) === TRUE){
    echo "Rows Added successfully";
} else {
    echo "Error creating rows" . $conn->error;
}
$sql = "INSERT INTO Items (ID, NAME, TYPE, MAKE, MODEL, BRAND)
VALUES ('107', 'Service Four', 'Service', '=', '=', 'Programming Consultation') ";
if ($conn->query($sql) === TRUE){
    echo "Rows Added successfully";
} else {
    echo "Error creating rows" . $conn->error;
}
$sql = "INSERT INTO Items (ID, NAME, TYPE, MAKE, MODEL, BRAND)
VALUES ('108', 'Hockey', 'Practice', '=', '=', 'Training') ";
if ($conn->query($sql) === TRUE){
    echo "Rows Added successfully";
} else {
    echo "Error creating rows" . $conn->error;
}
$sql = "INSERT INTO Items (ID, NAME, TYPE, MAKE, MODEL, BRAND)
VALUES ('109', 'Basketball', 'Practice', '=', '=', 'Training') ";
if ($conn->query($sql) === TRUE){
    echo "Rows Added successfully";
} else {
    echo "Error creating rows" . $conn->error;
}
$sql = "INSERT INTO Items (ID, NAME, TYPE, MAKE, MODEL, BRAND)
VALUES ('110', 'Golf', 'Practice', '=', '=', 'Training') ";
if ($conn->query($sql) === TRUE){
    echo "Rows Added successfully";
} else {
    echo "Error creating rows" . $conn->error;
}




$conn->close();
?>