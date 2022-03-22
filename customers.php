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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/styles.css" rel="stylesheet" type="text/css">
    <link href="css/customers.css" rel="stylesheet" type="text/css">
    <script src="https://kit.fontawesome.com/6b4a3d7b29.js" crossorigin="anonymous"></script>

</head>
<body class="loggedin">

<?php include 'navigation.php'; ?>


<!--Container Main start-->
<div class="height-100 bg-light">

    <div class="p-5">
        <div class="customers p-5">
            <div class="filter mb-5"> Søgemaskine
                <br>
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
                    <th class="td-email" scope="col">Email</th>
                    <th scope="col">Adresse</th>
                    <th class="td-post" scope="col">Postnr</th>
                    <th class="td-slet">Slet</th>
                    <th class="td-slet">Edit</th>
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







