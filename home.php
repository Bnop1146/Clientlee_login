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
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/home.css" rel="stylesheet" type="text/css">


</head>
<body class="loggedin">

<?php include 'navigation.php'; ?>

<br> <br>

<!--Container Main start-->
<div class="height-100">

    <div class="homecon container ">
        <div class="row ">
            <div class="col-lg-2"></div>
            <div class="home2 col-sm-12 col-md-6 col-lg-5 ">
                <p class="home2over">Velkommen til dit Dashboard</p>
                <p class="home2tekst">
                    Dit Dashboard hjælper dig med at holde din kundekreds Organiseret, og kontakte dem
                    hvis der skulle opstå problemer. Her i Dashboarded har du mulighed for at se dine nuværende
                    kunder, samt at oprette nye i vores indsætningsformular. Kundeoversigten lader dig søge i alle
                    informationer du har på din kunde, for at gøre det nemt og overskueligt, at planlægge yderlige service.


                </p>

                <a class="home2knap btn" href="profile.php" role="button">Til min Profil</a>

            </div>

            <div class="home1 col-sm-12 col-md-6 col-lg-4">
                <img src="image/Dashboard%20uden%20boks.png" class="home1billede img-fluid" alt="">

            </div>
            <div class="col-lg-1"></div>

        </div>
    </div>




    <div class="container px-4 py" id="custom-cards">
        <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5 justify-content-center">
            <div class="col">
                <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg">
                    <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                        <h2 class="pb-5 mt-5 mb-4 display-6 lh-1 fw-bold">Tryk på pilen for hurtigt at komme til din kundeoversigt</h2>
                        <ul class="d-flex list-unstyled mt-auto">
                            <li class="me-auto">
                                <a href="customers.php"><i class='bx bxs-chevrons-left bx-lg'></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>


            <div class="col">
                <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg">
                    <div class="d-flex flex-column h-100 p-5 pb-3 text-shadow-1">
                        <h2 class="pb-5 mt-5 mb-4 display-6 lh-1 fw-bold">Ønsker du at oprette nye kunder kan du trykke på pilen her</h2>
                        <ul class="d-flex list-unstyled mt-auto">
                            <li class="me-auto">
                                <a href="insert.php"><i class='bx bxs-chevrons-left bx-lg'></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>
<!--Container Main end-->



</body>
</html>

