<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
    header('Location: index.html');
    exit;
}
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
    <link href="css/customers.css" rel="stylesheet" type="text/css">


</head>
<body class="loggedin">

<?php include 'navigation.php'; ?>


<!--Container Main start-->
<div class="height-100 bg-light">

    <div class="container p-5">
        <div class="products  ">
            <div class="filter p-5">
                <div class="row d-flex align-items-center justify-content-center">
                    <div class="col-md-12 ">
                        <input type="search" class="form-control trackSearch  text-black"
                               placeholder="Søg på Produkt Navn">
                    </div>
                    <div class="col-md-3 ">
                        <input type="search" class=" form-control releaseSearch text-white bg-dark"
                               placeholder="Search Release ">
                    </div>
                </div>
            </div>

            <div class="items ">
                <!-- Her vises musikken -->
            </div>
        </div>
    </div>


</div>
<!--Container Main end-->


</body>
</html>







