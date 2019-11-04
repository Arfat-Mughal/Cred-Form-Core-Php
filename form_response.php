<?php
    $id = $_GET['id'];
    $sql = "SELECT * FROM customers where id='$id'";
    $response = $conn->query($sql);
    $records = mysqli_fetch_array($response);
?>