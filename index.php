<!DOCTYPE html>
<html lang="en" class="dark" id="temaSite">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xhoppii</title>

    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="../img/logo.png" type="image/png">
    <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect" />
    <link href="https://fonts.googleapis.com/css2?family=Spline+Sans:wght@300;400;500;600;700&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />

    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary-light": "#000",
                        "primary-dark": "#fff",
                        "secondary-light": "#000",
                        "secondary-dark": "#fff",

                        "background-light": "#fff",
                        "orientations-light": "#fb5630",
                        "surface-light": "#fc896f",
                        "selected-light": "#fb5630",
                        "contrast-white": "#fb5630",
                        "dark-light-border": "#fb5630",
                        "input-light": "#fb5630",

                        "background-dark": "#003049",
                        "orientations-dark": "#022131",
                        "surface-dark": "#29404d",
                        "selected-dark": "#0b405c",
                        "contrast-dark": "#003049",
                        "light-dark-border": "#003049",
                        "input-dark": "#021d2c",

                        "button-base-dark": "#05220a",
                        "button-base-light": "#ff7171",
                    },
                    fontFamily: {
                        "display": ["Spline Sans", "sans-serif"],
                        "body": ["Spline Sans", "sans-serif"],
                    },
                    borderRadius: {
                        "DEFAULT": "5px",
                        "lg": "0.5rem",
                        "xl": "1rem",
                        "full": "9999px"
                    },
                },
            },
        }
    </script>
</head>

<body>

    <?php

    session_start();
    include_once('./view/commons/header.php');

    if (isset($_SESSION['Login']) && $_SESSION['Login'] != '' && $_SESSION['Login'] != null) { //Se existe login e está logado
        if (!isset($_GET['page'])) {
            include_once('./view/home.php'); //Redirecina para a home
        } else {
            include_once('./view/' . $_GET['page'] . '.php'); //Redirecina para a home
        }
    } else { //Se existe login e não está logado
        if (!isset($_GET)) {
            include_once('./view/login.php'); //Redireciona para o login
        } elseif (isset($_GET['page'])) {
            include_once('./view/' . $_GET['page'] . '.php'); //Redirecina para a home
        } elseif (isset($_GET['processamento'])) {
            include_once('./processamento/processamento.php'); //Redireciona para o cadastro
        }
    }

    include_once('./view/commons/footer.php');
    ?>


</body>

</html>