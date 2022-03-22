<?php

// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
    header('Location: index.html');
    exit;
}


require 'init.php';


if (!empty($_POST["data"])) {
    $data = $_POST["data"];
    $file = $_FILES;


    $sql = "INSERT INTO customers (kundeDato, kundeNavn, kundeTelefon, kundeEmail, kundeAdresse, kundePost, kundeKommentar) VALUES 
                                        (:kundeDato, :kundeNavn, :kundeTelefon, :kundeEmail, :kundeAdresse, :kundePost, :kundeKommentar)";
    $bind = [
        ":kundeDato" => $data["kundeDato"],
        ":kundeNavn" => $data["kundeNavn"],
        ":kundeTelefon" => $data["kundeTelefon"],
        ":kundeEmail" => $data["kundeEmail"],
        ":kundeAdresse" => $data["kundeAdresse"],
        ":kundePost" => $data["kundePost"],
        ":kundeKommentar" => $data["kundeKommentar"],

    ];

    $db->sql($sql, $bind, false);

    header("Location: insert.php?status=1");
    exit;

}


?>


<!DOCTYPE html>
<html lang="da" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">

    <title>Indsæt ny kunde</title>

    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">

    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/styles.css" rel="stylesheet" type="text/css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">


    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://kit.fontawesome.com/6b4a3d7b29.js" crossorigin="anonymous"></script>
    <script src="https://cdn.tiny.cloud/1/h4ru18k2oqic6a1dmyhtku0v5gp4y1lc52kb2r4saf99fguv/tinymce/5/tinymce.min.js"
            referrerpolicy="origin"></script>

</head>

<body class="loggedin">



<?php include 'navigation.php'; ?>

<br> <br>

<!--Container Main start-->
<div class="height-100 ">

    <div class="container mb-4 p-4 border border-dark rounded-2 text-black ">
        <h3>Oprettelses formular</h3>
        <hr class="insert-line mt-3">

        <form class="m-5" method="post" action="insert.php" enctype="multipart/form-data">
            <div class="row">
                <div class="col-12 col-md-6 mb-4">
                    <div class="form-group">
                        <label for="kundeNavn">Kunde Navn</label>
                        <input class="form-control" type="text" name="data[kundeNavn]" id="kundeNavn"
                               placeholder="Navn" value="" required>
                    </div>
                </div>

                <div class="col-12 col-md-6 mb-4">
                    <div class="form-group">
                        <label for="kundeTelefon">Kunde Telefon nummer</label>
                        <input class="form-control" type="number" name="data[kundeTelefon]" id="kundeTelefon"
                               placeholder="Nummer" value="" required>
                    </div>
                </div>


                <div class="col-12 col-md-6 mb-4">
                    <div class="form-group">
                        <label for="kundeEmail">Kundens Email Adresse</label>
                        <input class="form-control" type="email" name="data[kundeEmail]" id="kundeEmail"
                               placeholder="Email Adresse" value="" required>
                    </div>
                </div>


                <div class="col-12 col-md-6 mb-4">
                    <div class="form-group">
                        <label for="kundeAdresse">Kunde Adresse</label>
                        <input class="form-control" type="text" name="data[kundeAdresse]" id="kundeAdresse"
                               placeholder="Kunde Adresse" value="" required>
                    </div>
                </div>

                <div class="col-12 col-md-6 mb-4">
                    <div class="form-group">
                        <label for="kundePost">Post nummer</label>
                        <input class="form-control" type="number" name="data[kundePost]" id="kundePost"
                               placeholder="Post nr." value="" required>
                    </div>
                </div>

                <div class="col-12 col-md-6 mb-4">
                    <div class="form-group">
                        <label for="kundeDato">Dato for arbejde</label>
                        <input class="form-control" type="date" name="data[kundeDato]" id="kundeDato"
                               placeholder="Dato." value="" required>
                    </div>
                </div>


                <div class="col-12 col-md-8 mb-4 rounded ">
                    <div class="form-group"
                    <label for="kundeKommentar">Skriv en kommentar til kunden</label>
                    <textarea class="form-control" name="data[kundeKommentar]" id="kundeKommentar"
                              placeholder="Info om kunden"></textarea>
                </div>


            </div>


            <hr class="insert-line mt-3">


            <div class="col-3 ">
                <button class=" kundecta btn text-white" type="button" id="btnSubmit" data-toggle="modal"
                        data-target="#exampleModal">Opret kunde
                </button>
            </div>





            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                 aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Indsætning fuldført</h5>
                            <button type="button" class="btn-close btn-danger" data-bs-dismiss="modal" aria-label="Close"></button>

                        </div>
                        <div class="modal-body">
                            Din kunde indsætning er fuldendt, tryk på Gå til Kundeoversigt for at gå til alle kunder
                            eller tryk på indsæt ny, for at indtaste flere kunder.
                        </div>
                        <div class="modal-footer">
                            <a class="btn btn-success text-white" type="submit"  href="customers.php" role="button">Gå til Kundeoversigt</a>
                            <a class="btn btn-primary text-white" type="button"  href="insert.php" role="button">Indsæt ny</a>
                        </div>
                    </div>
                </div>
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

    const url = new URL(window.location.href);
    const status = url.searchParams.get("status");

    const modal = document.querySelector('.modal');
    const bsModal = new bootstrap.Modal(modal);

    modal.addEventListener('hide.bs.modal', () => {
        window.history.replaceState(null, null, window.location.pathname);
    })

    if (status === "1") {
        bsModal.show();
    }

</script>


</body>


</html>


