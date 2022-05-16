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
    <link rel="shortcut icon" type="image/x-icon" size="32x32" href="image/favicon-32x32.png"/>

    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/styles.css" rel="stylesheet" type="text/css">
    <link href="css/customers.css" rel="stylesheet" type="text/css">
    <script src="https://kit.fontawesome.com/6b4a3d7b29.js" crossorigin="anonymous"></script>

</head>
<body class="loggedin loggedinbg">

<?php include 'navigation.php'; ?>


<!--Container Main start-->
<div class="height-100">

    <div class="p-5">
        <div class="customers p-5">
            <h2 class="mb-3">Kundeoversigt</h2>
            <div class="filter mb-4">
                <div>
                    <h4>Søgemaskine</h4>
                    <p class="text-muted">Søg på</p>
                </div>
                <div class="row d-flex align-items-center justify-content-center">
                    <div class="col-md-2 ">
                        <input type="search" class="form-control dateSearch  text-black"
                               placeholder="Dato">
                    </div>

                    <div class="col-md-2 ">
                        <input type="search" class="form-control nameSearch  text-black"
                               placeholder="Navn ">
                    </div>

                    <div class="col-md-2 ">
                        <input type="search" class="form-control emailSearch text-black"
                               placeholder="Email">
                    </div>

                    <div class="col-md-2 ">
                        <input type="search" class="form-control adresseSearch  text-black"
                               placeholder="adresse">
                    </div>

                    <div class="col-md-2 ">
                        <input type="search" class="form-control numberSearch  text-black"
                               placeholder="Telefon">
                    </div>

                    <div class="col-md-2 ">
                        <input type="search" class="form-control postSearch  text-black"
                               placeholder="Postnr">
                    </div>

                </div>
            </div>

            <table class="table ">
                <thead class="text-center">
                <tr>
                    <th class="td-dato" scope="col">Dato</th>
                    <th class="td-navn" scope="col">Navn</th>
                    <th class="td-telefon" scope="col">Telefon</th>
                    <th class="td-email" scope="col">Email</th>
                    <th class="td-adresse" scope="col">Adresse</th>
                    <th class="td-post" scope="col">Postnr</th>
                    <th class="td-slet" scope="col">Slet</th>
                    <th class="td-slet" scope="col">Edit</th>
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


<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script type="module">

    import Customers from "./js/customers.js";

    const customers = new Customers();
    customers.init();


</script>
</body>
</html>







