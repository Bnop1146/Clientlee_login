<?php
require "init.php";

$id = $_GET['kundeId'];


// sql to delete a record
$sql = "DELETE FROM customers WHERE kundeId = $id";

if (mysqli_query($con, $sql)) {
    mysqli_close($con);
    header('Location: customers.php');
    exit;
} else {
    echo "Error deleting record";
}

