<?php
require "init.php";

$data = json_decode(file_get_contents('php://input'), true);



/*
 * password: Skal udfyldes og være KickPHP
 * nameSearch: Valgfri
 */


/*
 * header("HTTP/1.1 400 Bad Request"); Sending malformed data results in a 400 Bad Request response
 * header("HTTP/1.1 401 Unauthorized"); Trying to access to the API without authentication results in a 401 Unauthorized response
 * header("HTTP/1.1 404 Not Found"); Not Found
 * header("HTTP/1.1 405 Method Not Allowed"); Trying to use a method on a route for which it is not implemented results in a 405 Method Not Allowed
 * header("HTTP/1.1 422 Unprocessable Entity"); Sending invalid data results in a 422 unprocessable Entity response

 * header("HTTP/1.1 200 OK "); Getting a resource or a collection resources results in a 200 OK response.
 * header("HTTP/1.1 201 Created"); Creating a resource results in a 201 Created response
 * header("HTTP/1.1 204 No Content"); Updating or deleting a resource results in a 204 No Content response
*/


header('Content-Type: application/json; charset=utf-8');

if (isset($data["password"]) && $data["password"] == "Bnop1146") {
    $sql = "SELECT * FROM customers WHERE 1=1";
    $bind = [];

    if (!empty($data["dateSearch"])) {
        $sql .= " AND kundeDato LIKE CONCAT('%', :kundeDato, '%')  ";
        $bind[":kundeDato"] = $data["dateSearch"];

    }

    if (!empty($data["nameSearch"])) {
        $sql .= " AND kundeNavn LIKE CONCAT('%', :kundeNavn, '%')  ";
        $bind[":kundeNavn"] = $data["nameSearch"];

    }

    if (!empty($data["numberSearch"])) {
        $sql .= " AND kundeTelefon LIKE CONCAT('%', :kundeTelefon, '%')  ";
        $bind[":kundeTelefon"] = $data["numberSearch"];

    }

    if (!empty($data["emailSearch"])) {
        $sql .= " AND kundeEmail LIKE CONCAT('%', :kundeEmail, '%')  ";
        $bind[":kundeEmail"] = $data["emailSearch"];

    }
    if (!empty($data["adresseSearch"])) {
        $sql .= " AND kundeAdresse LIKE CONCAT('%', :kundeAdresse, '%')  ";
        $bind[":kundeAdresse"] = $data["adresseSearch"];

    }
    if (!empty($data["postSearch"])) {
        $sql .= " AND kundePost LIKE CONCAT('%', :kundePost, '%')  ";
        $bind[":kundePost"] = $data["postSearch"];

    }




    $sql .= " ORDER BY kundeDato ASC";


    $customers = $db->sql($sql, $bind);

    if(!empty($customers)){
        foreach ($customers as $key => $customer){
            $customer->kundeDato = date("d-m-y", strtotime($customer->kundeDato));
        }
    }

    header("HTTP/1.1 200 OK");

    echo json_encode($customers);

} else {
    header("HTTP/1.1 401 Unauthorized");
    $error["errorMessage"] = "Your Password is Incorrect";

    echo json_encode($error);
}



