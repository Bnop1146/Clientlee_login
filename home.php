

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
    <link href="css/home.css" rel="stylesheet" type="text/css">


</head>
<body class="loggedin">

<?php include 'navigation.php'; ?>


<!--Container Main start-->
<div class="height-100">

    <div class="homecon container">
        <div class="row">
            <div class="col-lg-2"></div>
            <div class="home2 col-sm-12 col-md-6 col-lg-5">
                <p class="home2over">Overskrift</p>
                <p class="home2tekst">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                </p>

                <a class="home2knap btn" href="#" role="button">Profil</a>

            </div>

            <div class="home1 col-sm-12 col-md-6 col-lg-4">
                <img src="image/Dashboard uden boks.png" class="home1billede img-fluid">

            </div>
            <div class="col-lg-1"></div>

        </div>
    </div>




    <div class="container px-4 py" id="custom-cards">
        <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5 justify-content-center">
            <div class="col">
                <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg" style="background-image: url('unsplash-photo-1.jpg');">
                    <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                        <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Short title, long jacket</h2>
                        <ul class="d-flex list-unstyled mt-auto">
                            <li class="me-auto">
                                <img src="https://github.com/twbs.png" alt="Bootstrap" width="32" height="32" class="rounded-circle border border-white">
                            </li>
                            <li class="d-flex align-items-center me-3">
                                <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#geo-fill"/></svg>
                                <small>Earth</small>
                            </li>
                            <li class="d-flex align-items-center">
                                <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#calendar3"/></svg>
                                <small>3d</small>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>


            <div class="col">
                <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg" style="background-image: url('unsplash-photo-3.jpg');">
                    <div class="d-flex flex-column h-100 p-5 pb-3 text-shadow-1">
                        <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Another longer title belongs here</h2>
                        <ul class="d-flex list-unstyled mt-auto">
                            <li class="me-auto">
                                <img src="https://github.com/twbs.png" alt="Bootstrap" width="32" height="32" class="rounded-circle border border-white">
                            </li>
                            <li class="d-flex align-items-center me-3">
                                <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#geo-fill"/></svg>
                                <small>California</small>
                            </li>
                            <li class="d-flex align-items-center">
                                <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#calendar3"/></svg>
                                <small>5d</small>
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

