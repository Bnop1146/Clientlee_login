<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
    header('Location: index.html');
    exit;
}


require "classes/classDB.php";

const CONFIG_LIVE = "0"; // 0: Test enviroment || 1: Live enviroment

if(CONFIG_LIVE == 0){
    $DATABASE_HOST = 'localhost';
    $DATABASE_USER = 'root';
    $DATABASE_PASS = '';
    $DATABASE_NAME = 'phplogin';
}else{
    $DATABASE_HOST ="mysql109.unoeuro.com";
    $DATABASE_NAME = "bnopone_dk_db";
    $DATABASE_USER = "bnopone_dk";
    $DATABASE_PASS = "k26RgmedhF4H";
}

$db = new db($DATABASE_HOST, $DATABASE_NAME, $DATABASE_USER, $DATABASE_PASS);

// Try and connect using the info above.
$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if ( mysqli_connect_errno() ) {
    // If there is an error with the connection, stop the script and display the error.
    exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}


// We don't have the password or email info stored in sessions so instead we can get the results from the database.
$stmt = $con->prepare('SELECT password, email FROM accounts WHERE id = ?');
// In this case we can use the account ID to get the account info.
$stmt->bind_param('i', $_SESSION['id']);
$stmt->execute();
$stmt->bind_result($password, $email);
$stmt->fetch();
$stmt->close();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Profil side</title>
    <link href="css/styles.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
</head>
<body class="loggedin">

<?php include 'navigation.php'; ?>


<!--Container Main start-->
<div class="height-100 bg-light">
    <div class="content">
        <h2>Profile Page</h2>
        <div>
            <p>Your account details are below:</p>
            <table>
                <tr>
                    <td>Username:</td>
                    <td><?=$_SESSION['name']?></td>
                </tr>
                <tr>
                    <td>Email:</td>
                    <td><?=$email?></td>
                </tr>

                <tr>
                    <td>Virksomhed</td>
                    <td>Bengtsons Multiservice</td>
                </tr>
            </table>
        </div>
    </div>
</div>
<!--Container Main end-->




</body>
</html>