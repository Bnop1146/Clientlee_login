<?php

require 'init.php';

$id = $_POST['id'];
$kundeDato = $_POST['kundeDato'];
$kundeNavn = $_POST['kundeNavn'];
$kundeTelefon = $_POST['kundeTelefon'];
$kundeEmail = $_POST['kundeEmail'];
$kundeAdresse = $_POST['kundeAdresse'];
$kundePost = $_POST['kundePost'];

$sql = "UPDATE customers SET 
                     `kundeDato`= '$kundeDato',
                     `kundeNavn`= '$kundeNavn',
                     `kundeTelefon`= '$kundeTelefon',
                     `kundeEmail`= '$kundeEmail',
                     `kundeAdresse`= '$kundeAdresse',
                     `kundePost`= '$kundePost' 
        WHERE kundeId = $id ";


$result = $con->query($sql);
$con->close();

header("Location: customers.php");



