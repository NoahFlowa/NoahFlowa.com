<!doctype html>
<html lang="en">

<head>
    <!-- 
      Hey!  You found my source code!  Lucky you!  See my handywork and
      different things I use to create my websites!  I use the PHP include
      so thats why the formatting is a little wonk on here but check out:
      my GitHub or GitLab accounts for the formatted Source Code!
    -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Noah Osterhout</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- Font Awesome 6 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Google Fonts API | Open Sans -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">

    <!-- Favicons -->
    <link rel="apple-touch-icon" sizes="180x180" href="/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicons/favicon-16x16.png">
    <link rel="manifest" href="/favicons/site.webmanifest">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="/css/main.css">
    <!-- Custom JavaScript -->
    <script src="/js/main.js"></script>
</head>

<body class="container-fluid">
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10">
            <!-- Navbar Import -->
            <?php require("navbar.php"); ?>
            <!-- Jumbotron Import -->
            <?php require("jumbotron.php"); ?>
        </div>
        <div class="col-md-1"></div>
    </div>
    <!-- TypeLighterJS by EdernClemente on Github {https://github.com/EdernClemente/TypeLighterJS-Typewriter} -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
<script src ="/js/typelighter.min.js"></script>
</html>