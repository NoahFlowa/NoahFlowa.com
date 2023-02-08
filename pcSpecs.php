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
    <title>PC Specs - Noah Osterhout</title>
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
            <!-- Main Content -->
            <?php require("jumbotron.php"); displayJumbotron("PC Gaming Rig", "Custom Built 2023", "In the table below you can find all of the components for my custom gaming pc rig that I built.  Updated as of February 2023!") ?>
            <table class="table table-bordered fs-3 lh-lg">
                <thead class="text-center">
                    <tr>
                        <th colspan="6"><h2><strong>Noah's Custom Built PC 2023</strong></h2></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>CPU</strong></td>
                        <td colspan="5">i7 10700K</td>
                    </tr>
                    <tr>
                        <td><strong>Motherboard</strong></td>
                        <td colspan="5">ASUS ROG Strix Z490-E</td>
                    </tr>
                    <tr>
                        <td><strong>Memory (RAM)</strong></td>
                        <td colspan="5">(2) Corsair Vengeance RGB Pro DDR4 64 GB (2x16GB) @ 3600</td>
                    </tr>
                    <tr>
                        <td><strong>Storage</strong></td>
                        <td>(3) Western Digital 1TB Hard Drive</td>
                        <td>(1) Western Digital 500GB SSD Drive</td>
                        <td>(1) Sabrent Rocket Q 500GB M.2 NVME</td>
                        <td>(1) Sabrent Rocket Q 1TB M.2 NVME</td>
                        <td>Microsoft OneDrive (1TB) and Apple iCloud (200GB)</td>
                    </tr>
                    <tr>
                        <td><strong>Graphics Card</strong></td>
                        <td colspan="5">ASUS TUF Gaming GeForce RTX 3090Ti 24GB</td>
                    </tr>
                    <tr>
                        <td><strong>Power Supply Unit (PSU)</strong></td>
                        <td colspan="5">Corsair RM1000e 1000W ATX12V</td>
                    </tr>
                    <tr>
                        <td><strong>Case</strong></td>
                        <td colspan="5">Corsair Carbide 740 Cube</td>
                    </tr>
                    <tr>
                        <td><strong>Monitors</strong></td>
                        <td colspan="5">(2) Gigabyte M32QC 32" QHD Curved Monitor</td>
                    </tr>
                    <tr>
                        <td><strong>Keyboard</strong></td>
                        <td colspan="5">Corsair K95 Platinum</td>
                    </tr>
                    <tr>
                        <td><strong>Mouse</strong></td>
                        <td colspan="5">Corsair Schmitar MMO Gaming Mouse</td>
                    </tr>
                    <tr>
                        <td><strong>Microphone</strong></td>
                        <td colspan="5">Blue Yeti</td>
                    </tr>
                    <tr>
                        <td><strong>Other Peripherals</strong></td>
                        <td>ASUS 4x4 802.11AC Wireless AC3100 WiFi Adapter (PCIe)</td>
                        <td>Corsair Hydro Series H100i PRO RGB CPU AIO Pump</td>
                        <td>Corsair iCUE Commander Core XT</td>
                        <td>(2) Corsair ML RGB ELITE 140MM Mag Lev Fans</td>
                        <td>(3) Corsair ML RGB ELITE 120MM Mag Lev Fans</td>
                    </tr>
                </tbody>
            </table>
            <!-- Footer -->
            <?php require("footer.php"); ?>
        </div>
        <div class="col-md-1"></div>
    </div>
    <!-- TypeLighterJS by EdernClemente on Github {https://github.com/EdernClemente/TypeLighterJS-Typewriter} -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
<script src ="/js/typelighter.min.js"></script>
</html>