<?php
require 'init.php';


if (!empty($_POST["data"])) {
    $data = $_POST["data"];
    $file = $_FILES;


    $sql = "INSERT INTO accounts (username, password, company, telefon) VALUES
                                    (:username, :password,'' :company, :telefon)";
    $bind = [
        ":username" => $data["username"],
        ":password" => $data["password"],
        ":company" => $data["company"],
        ":telefon" => $data["telefon"],



    ];

    $db->sql($sql, $bind, false);



    exit;

}


?>


<!DOCTYPE html>
<html lang="da">
<head>
    <meta charset="utf-8">

    <title>Sign Up</title>
    <link rel="icon" type="image/png" sizes="32x32" href="image/favicon-32x32.png">

    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">

    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
    <link href="css/styles.css" rel="stylesheet" type="text/css">
    <link href="css/signup.scss" rel="stylesheet" type="text/css">

    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body class="loggedinbg">


<div class="loginsek">


    <div class="text-center">






        <div class="login pt-5 mb-5" style="width: 500px; ">

            <svg id="Clientlee_Logo" class="loglogo" data-name="Clientlee Logo" xmlns="http://www.w3.org/2000/svg" width="211.148" height="44.115" viewBox="0 0 211.148 44.115">
                <g id="Logo_No_Fill" transform="translate(0)">
                    <path id="Path_38" data-name="Path 38" d="M50.3,25.151a25.092,25.092,0,0,1-8.627,18.964l-8.929-8.929a12.575,12.575,0,1,0-15.191,0L8.627,44.115A25.152,25.152,0,1,1,50.3,25.151Z" transform="translate(0)" fill="#0c0623"/>
                </g>
                <g id="Text" transform="translate(62.877 9.683)">
                    <g id="Group_55" data-name="Group 55">
                        <path id="Path_39" data-name="Path 39" d="M272.635,59.8a13.011,13.011,0,0,1-9.582,3.722c-9.381,0-13.028-5.91-13.053-12.374-.025-6.137,4.1-12.651,13.053-12.651a12.8,12.8,0,0,1,9.256,3.823l-4.15,4.1a7.039,7.039,0,0,0-5.08-2.088c-4.6,0-6.413,3.747-6.388,6.866.025,3.094,1.66,6.615,6.388,6.615a8.275,8.275,0,0,0,5.634-2.414Z" transform="translate(-250 -38.5)" fill="#0c0623"/>
                        <path id="Path_40" data-name="Path 40" d="M354.912,40.5V64.419H348.7V40.5Z" transform="translate(-323.876 -39.997)" fill="#0c0623"/>
                        <path id="Path_41" data-name="Path 41" d="M390.046,38.7a3.175,3.175,0,1,1,0,6.313c-1.786,0-3.546-1.056-3.546-3.144A3.258,3.258,0,0,1,390.046,38.7Zm3.144,24.346V46.472h-6.313V63.046Z" transform="translate(-352.169 -38.65)" fill="#0c0623"/>
                        <path id="Path_42" data-name="Path 42" d="M442.134,77.439H430.363c.453,1.509,2.389,2.138,3.747,2.138a7.04,7.04,0,0,0,4.326-1.358l3.068,3.446a11.1,11.1,0,0,1-7.671,2.792c-5.332,0-9.834-2.616-9.834-8.778,0-6.137,4.8-8.878,9.381-8.878C439.367,66.825,443.567,70.774,442.134,77.439ZM436.5,73.415c-.176-2.666-5.684-2.767-6.112,0Z" transform="translate(-380.237 -59.682)" fill="#0c0623"/>
                        <path id="Path_43" data-name="Path 43" d="M519.269,84.151V74.846c0-2.088-1.182-2.792-2.364-2.792-1.509,0-2.892,1.031-2.892,3.244v8.878H507.8V67.325h5.558l.277,1.836a6.928,6.928,0,0,1,5.332-2.264c3.546.025,6.59,1.911,6.59,7.923v9.356h-6.288Z" transform="translate(-442.961 -59.755)" fill="#0c0623"/>
                        <path id="Path_44" data-name="Path 44" d="M596.254,49.5v4.879h3.8v4.8h-3.823v5.533a1.488,1.488,0,0,0,1.66,1.635,3.675,3.675,0,0,0,1.836-.578l1.358,4.628a9.545,9.545,0,0,1-4.854,1.132c-3.345,0-6.338-1.534-6.237-6.816V59.183H587.3v-4.8h2.691v-4.2Z" transform="translate(-502.466 -46.733)" fill="#0c0623"/>
                        <path id="Path_45" data-name="Path 45" d="M656.912,40.5V64.419H650.7V40.5Z" transform="translate(-549.92 -39.997)" fill="#0c0623"/>
                        <path id="Path_46" data-name="Path 46" d="M704.434,77.439H692.663c.453,1.509,2.389,2.138,3.747,2.138a7.04,7.04,0,0,0,4.326-1.358l3.068,3.446a11.1,11.1,0,0,1-7.671,2.792c-5.332,0-9.834-2.616-9.834-8.778,0-6.137,4.8-8.878,9.381-8.878C701.667,66.825,705.867,70.774,704.434,77.439ZM698.8,73.415c-.176-2.666-5.684-2.767-6.112,0Z" transform="translate(-576.567 -59.682)" fill="#0c0623"/>
                        <path id="Path_47" data-name="Path 47" d="M784.434,77.439H772.663c.453,1.509,2.389,2.138,3.747,2.138a7.04,7.04,0,0,0,4.326-1.358l3.068,3.446a11.1,11.1,0,0,1-7.671,2.792c-5.332,0-9.834-2.616-9.834-8.778,0-6.137,4.8-8.878,9.381-8.878C781.692,66.825,785.867,70.774,784.434,77.439Zm-5.609-4.024c-.176-2.666-5.684-2.767-6.112,0Z" transform="translate(-636.446 -59.682)" fill="#0c0623"/>
                    </g>
                </g>
            </svg>



            <h3 class="signupover mt-5">Opret Bruger </h3>

            <form action="signup.php" method="post" enctype="application/x-www-form-urlencoded">


                <label for="username"></label><input type="email" name="data[username]" placeholder="E-mailadresse" id="username" value="" required>

                <label for="password"></label><input type="password" name="data[password]" placeholder="Adgangskode" id="password" required>



                <label for="company"></label><input type="text" name="data[company]" placeholder="Firmanavn *" id="company" required>

                <label for="telefon"></label><input type="number" name="data[telefon]" placeholder="Telefon nummer" id="telefon" required>



                <input type="submit" value="Opret Bruger">

                <a href="index.html"><p class="mt-3">Har du allerede en bruger?</p></a>
            </form>
        </div>

    </div>


</div>


<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
