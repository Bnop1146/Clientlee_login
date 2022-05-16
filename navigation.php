<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <title>Dashboard</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/styles.css" rel="stylesheet" type="text/css">
    <link href="css/navigation.css" rel="stylesheet" type="text/css">


    <script src="https://kit.fontawesome.com/6b4a3d7b29.js" crossorigin="anonymous"></script>

</head>
<body id="body-pd">

<header class="header" id="header">
    <div class="header_toggle">
        <i class='bx bx-menu' id="header-toggle"></i>
    </div>

</header>

<div class="l-navbar" id="nav-bar">
    <nav class="nav">
        <div>
            <a href="home.php" class="nav_logo">
                <i class='fa-solid fa-layer-group nav_logo-icon'></i> <span class="nav_logo-name">Dashboard</span>


            </a>

            <div class="nav_list">
                <a href="home.php" class="nav_link">
                    <i class='bx bxs-home nav_icon'></i>
                    <span class="nav_name">Hjem</span>
                </a>

                <a href="customers.php" class="nav_link">
                    <i class="fa-solid fa-users"></i>
                    <span class="nav_name">Kunder</span>
                </a>

                <a href="insert.php" class="nav_link">
                    <i class="fa-solid fa-user-plus"></i>
                    <span class="nav_name">Opret ny Kunde</span>
                </a>

                <a href="calender.php" class="nav_link">
                    <i class="fa-solid fa-calendar"></i>
                    <span class="nav_name">Kalender</span>
                </a>


                <a href="profile.php" class="nav_link">
                    <i class="fa-solid fa-user"></i>
                    <span class="nav_name">Bruger</span>
                </a>


            </div>
        </div>

        <a href="logout.php" class="nav_link">
            <i class='fa-solid fa-right-from-bracket nav_icon'></i>
            <span class="nav_name">Log ud</span>
        </a>

    </nav>
</div>


<script src="js/home-nav.js"></script>
</body>
</html>

