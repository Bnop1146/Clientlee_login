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

    <div class="p-5">
        <div class="customers p-5">
            <div class="filter mb-5"> Søgemaskine
                <div class="row d-flex align-items-center justify-content-center">
                    <div class="col-md-2 ">
                        <input type="search" class="form-control dateSearch  text-black"
                               placeholder="Søg på Dato">
                    </div>

                    <div class="col-md-2 ">
                        <input type="search" class="form-control nameSearch  text-black"
                               placeholder="Søg på Navn ">
                    </div>

                    <div class="col-md-2 ">
                        <input type="search" class="form-control emailSearch text-black"
                               placeholder="Søg på Email">
                    </div>

                    <div class="col-md-2 ">
                        <input type="search" class="form-control adresseSearch  text-black"
                               placeholder="Søg på adresse">
                    </div>

                    <div class="col-md-2 ">
                        <input type="search" class="form-control numberSearch  text-black"
                               placeholder="Søg på Telefon">
                    </div>

                    <div class="col-md-2 ">
                        <input type="search" class="form-control postSearch  text-black"
                               placeholder="Søg på Postnr">
                    </div>

                </div>
            </div>

            <table class="table ">
                <thead class="text-center">
                <tr>
                    <th class="td-dato" scope="col">Dato</th>
                    <th scope="col">Navn</th>
                    <th class="td-telefon" scope="col">Telefon</th>
                    <th scope="col">Email</th>
                    <th scope="col">Adresse</th>
                    <th class="td-post" scope="col">Postnr</th>
                </tr>
                </thead>
            </table>

            <div class="items ">
                <!-- Her vises Kunderne -->
            </div>
        </div>
    </div>

</div>
<!--Container Main end-->


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
        crossorigin="anonymous"></script>
<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script type="module">

    import Customers from "./js/customers.js";

    const customers = new Customers();
    customers.init();


</script>
</body>
</html>







