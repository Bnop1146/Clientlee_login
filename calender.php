<?php

// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
    header('Location: index.html');
    exit;
}
//$hashed_password = password_hash('test', PASSWORD_DEFAULT);
//echo $hashed_password;

?>

<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">

    <title>Dashboard</title>
    <link rel="shortcut icon" type="image/x-icon" href="image/favicon.ico" />

    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/home.css" rel="stylesheet" type="text/css">


</head>
<body class="loggedin">

<?php include 'navigation.php'; ?>

<br> <br>

<!--Container Main start-->
<div class="height-100 p-5">

    <h2 class="mb-3">Google Kalender</h2>

    <iframe src="https://calendar.google.com/calendar/embed?src=bnop1146%40gmail.com&ctz=Europe%2FCopenhagen" style="border: 0" width="100%" height="700" frameborder="0" scrolling="no"></iframe>







</div>
<!--Container Main end-->



</body>
</html>

