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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
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
            <?php require("jumbotron.php"); displayJumbotron("Hi, my name is Noah!", "Welcome to my Website", "Primarily, I develop web-based applications, but I also take pleasure in crafting mobile and desktop applications. My focus is on constructing well-structured, maintainable codebases while ensuring the user interfaces are visually appealing, intuitive, and provide a seamless user experience.") ?>
            <!-- Experience -->
            <?php require("experience.php"); ?>
            <!-- Skills -->
            <?php require("skills.php"); ?>
            <!-- Footer -->
            <?php require("footer.php"); ?>
        </div>
        <div class="col-md-1"></div>
    </div>
    <!-- TypeLighterJS by EdernClemente on Github {https://github.com/EdernClemente/TypeLighterJS-Typewriter} -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>
<script src ="/js/typelighter.min.js"></script>
</html>