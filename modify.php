<?php

require 'init.php';

$id = $_GET['kundeId'];

$sql = "UPDATE customers SET 
                     kundeDato = :kundeDato,
                     kundeNavn = :kundeNavn,
                     kundeTelefon = :kundeTelefon,
                     kundeEmail = :kundeEmail,
                     kundeAdresse = :kundeAdresse,
                     kundePost = :kundePost,
                     kundeKommentar = :kundeKommentar
        WHERE kundeId = :kundeId";

$bind = [
    ":kundeDato" => $_POST["kundeDato"],
    ":kundeNavn" => $_POST["kundeNavn"],
    ":kundeTelefon" => $_POST["kundeTelefon"],
    ":kundeEmail" => $_POST["kundeEmail"],
    ":kundeAdresse" => $_POST["kundeAdresse"],
    ":kundePost" => $_POST["kundePost"],
    ":kundeKommentar" => $_POST["kundeKommentar"],
    ":kundeId" => $id,

];

$result = $db->sql($sql, $bind, false);

header("Location: customers.php");