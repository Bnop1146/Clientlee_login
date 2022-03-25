<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
    header('Location: index.html');
    exit;
}


require 'init.php';


$sql = "SELECT * FROM accounts WHERE id = :id";
$bind = [":id" => $_SESSION['id']];
$result = $db->sql($sql, $bind);
?>

<!DOCTYPE html>
<html lang=>
<head>
    <meta charset="utf-8">

    <title>Profil side</title>
    <link rel="shortcut icon" type="image/x-icon" href="image/favicon.ico" />

    <link href="css/styles.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
</head>
<body class="loggedin">

<?php include 'navigation.php'; ?>

<br>

<!--Container Main start-->
<div class="">
    <div class="content">
        <h2>Profil Side</h2>
        <div>
            <p>Se dine login oplysninger herunder:</p>
            <table>
                <tr>
                    <td>Username:</td>
                    <td><?= $_SESSION['name'] ?></td>
                </tr>
                <tr>
                    <td>Email:</td>
                    <td><?= $result[0]->email ?></td>
                </tr>

                <tr>
                    <td>Virksomhed:</td>
                    <td><?= $result[0]->company ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
<!--Container Main end-->


</body>
</html>