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
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/styles.css" rel="stylesheet" type="text/css">
    <link href="css/home.css" rel="stylesheet" type="text/css">


</head>
<body class="loggedin">

<?php include 'navigation.php'; ?>


<!--Container Main start-->
<div class="height-100 bg-light">
    <h2>Home Page</h2>
    <p>Welcome back, <?= $_SESSION['name'] ?>!</p>
</div>
<!--Container Main end-->



</body>
</html>

