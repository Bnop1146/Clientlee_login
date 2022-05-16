<?php

// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
    header('Location: index.html');
    exit;
}


require 'init.php';

    $id = $_GET['kundeId'];
    $sql = "SELECT * FROM customers WHERE kundeId = $id";
    $bind = [":kundeId" => $_GET["kundeId"]];
    $result = $db->sql($sql, $bind);
    $result = $result[0];




?>


<!DOCTYPE html>
<html lang="da" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">

    <title>Redigering</title>
    <link rel="shortcut icon" type="image/x-icon" href="image/favicon.ico"/>

    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">

    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/styles.css" rel="stylesheet" type="text/css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
    <link rel="preconnect" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js">
    <link rel="preconnect" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="preconnect" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">


    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://kit.fontawesome.com/6b4a3d7b29.js" crossorigin="anonymous"></script>
    <script src="https://cdn.tiny.cloud/1/h4ru18k2oqic6a1dmyhtku0v5gp4y1lc52kb2r4saf99fguv/tinymce/5/tinymce.min.js"
            referrerpolicy="origin"></script>

</head>

<body class="loggedin loggedinbg">


<?php include 'navigation.php'; ?>

<br> <br>

<!--Container Main start-->
<div class="height-100 ">

    <div class="container containerbg mb-4 p-4 border border-dark rounded-2 text-black ">
        <h3>Redigerings formular</h3>
        <hr class="insert-line mt-3">

        <form class="m-5" method="post" action="modify.php?kundeId=<?= $id ?>" enctype="application/x-www-form-urlencoded">
            <div class="row">

                <div class="col-12 col-md-6 mb-4">
                    <div class="form-group">
                        <label for="kundeNavn">Kunde Navn</label>
                        <input class="form-control" type="text" name="kundeNavn" id="kundeNavn"
                               placeholder="Navn" value="<?php echo $result->kundeNavn; ?>" required>
                    </div>
                </div>

                <div class="col-12 col-md-6 mb-4">
                    <div class="form-group">
                        <label for="kundeTelefon">Kunde Telefon nummer</label>
                        <input class="form-control" type="number" name="kundeTelefon" id="kundeTelefon"
                               placeholder="Nummer" value="<?php echo $result->kundeTelefon; ?>" required>
                    </div>
                </div>


                <div class="col-12 col-md-6 mb-4">
                    <div class="form-group">
                        <label for="kundeEmail">Kundens Email Adresse</label>
                        <input class="form-control" type="email" name="kundeEmail" id="kundeEmail"
                               placeholder="Email Adresse" value="<?php echo $result->kundeEmail; ?>" required>
                    </div>
                </div>


                <div class="col-12 col-md-6 mb-4">
                    <div class="form-group">
                        <label for="kundeAdresse">Kunde Adresse</label>
                        <input class="form-control" type="text" name="kundeAdresse" id="kundeAdresse"
                               placeholder="Kunde Adresse" value="<?php echo $result->kundeAdresse; ?>" required>
                    </div>
                </div>

                <div class="col-12 col-md-6 mb-4">
                    <div class="form-group">
                        <label for="kundePost">Post nummer</label>
                        <input class="form-control" type="number" name="kundePost" id="kundePost"
                               placeholder="Post nr." value="<?php echo $result->kundePost; ?>" required>
                    </div>
                </div>

                <div class="col-12 col-md-6 mb-4">
                    <div class="form-group">
                        <label for="kundeDato">Dato for arbejde</label>
                        <input class="form-control" type="date" name="kundeDato" id="kundeDato"
                               placeholder="Dato." value="<?php echo $result->kundeDato; ?>" required>
                    </div>
                </div>

                <div class="col-12 col-md-8 mb-4 rounded ">
                    <div class="form-group">
                        <label for="kundeKommentar">Skriv en kommentar til kunden</label>
                        <textarea class="form-control" name="kundeKommentar" id="kundeKommentar"
                                  placeholder="Info om kunden"><?php echo $result->kundeKommentar; ?></textarea>
                    </div>
                </div>


            </div>


            <hr class="insert-line mt-3">


            <div class="col-3 ">
                <button class=" kundecta btn text-white" name="editForm" type="submit" id="btnEdit" data-toggle="modal"
                        data-target="#exampleModal">Gem ny Data
                </button>


            </div>


        </form>


    </div>
</div>
<!--Container Main end-->


<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

<script>
    tinymce.init({
        selector: 'textarea',
    });


</script>


</body>


</html>
