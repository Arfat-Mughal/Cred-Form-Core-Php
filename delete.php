<?php
include_once("DbConfig.php");

$id = $_GET['id'];
// sql to delete a record
$sql = "DELETE FROM customers WHERE id=".$id;

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();

header('location: Users.php');

?>