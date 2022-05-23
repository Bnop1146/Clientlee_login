<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
    header('Location: index.html');
    exit;
}
   //$hashed_password = password_hash('kage1234', PASSWORD_DEFAULT);
   //echo $hashed_password;

?>

<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">

    <title>Dashboard</title>
    <link rel="shortcut icon" type="image/x-icon" size="32x32" href="image/favicon-32x32.png" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/home.css" rel="stylesheet" type="text/css">


</head>
<body class="loggedin ">

<?php include 'navigation.php'; ?>

<br> <br>  <br>

<!--Container Main start-->
<div class="height-90 ">



        <div class="homecon container ">
            <div class="row ">

                <div class="home2 col-7 ">
                    <p class="home2over">
                    <span class="home2over">Velkommen til dit </span>
                    <span class="home2over" style="color: #5235D4">Dashboard</span>
                    </p>
                    <p class="home2tekst">
                        Dit Dashboard hjælper dig med at holde din kundekreds Organiseret, og kontakte dem
                        hvis der skulle opstå problemer. Her i dit Dashboard har du mulighed for at se dine nuværende
                        kunder, samt at oprette nye i vores indsætningsformular. Kundeoversigten lader dig søge i alle
                        informationer du har på din kunde, for at gøre det nemt og overskueligt, at planlægge yderlige service.


                    </p>


                    <br> <br>
                    <a href="customers.php" role="button" class="home2knap">Kundeoversigt</a>


                </div>



            </div>
        </div>








</div>
<!--Container Main end-->



</body>
</html>

