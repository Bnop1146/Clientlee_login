<?php
require "init.php";

$id = $_GET['kundeId'];


// sql to delete a record
$result = $db->sql("DELETE FROM customers WHERE kundeId = :id", [":id" => $id], false);


if ($result) {
    header('Location: customers.php');
    exit;
} else {
    echo "Error deleting record";
}

