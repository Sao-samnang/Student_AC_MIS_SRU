<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Svay Rieng University</title>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <!--  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/dashboard.css">
    <link rel="icon" href="Image/sru logo.png">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Anton&family=Kantumruy+Pro:ital,wght@0,100..700;1,100..700&family=Mona+Sans:ital,wght@0,200..900;1,200..900&family=Moul&display=swap');
    </style>
</head>
<body>
    <div class="container-fluid m-0 p-0">
        <div class="container menu-side">
            <div class="profile-logo">
                <div class="sru">
                    <label for="checkmenu"><img src="Image/sru logo.png" alt=""></label>
                </div>
                <p class="name">Svay Rieng University</p>
                <div class="toggle-menu">
                    <input type="checkbox" id="checkmenu" value="0">
                </div>
            </div>

            <nav>
                <ul class="p-0 m-0">
                    <li><i class="fa-regular fa-chart-bar"></i><a href="#">Dashboard</a></li>
                    <li><i class="fa-solid fa-user"></i><a href="#">Admin</a></li>
                    <li><i class="fa-solid fa-user-tie"></i><a href="#">Lecture</a></li>
                    <li><i class="fa-solid fa-person"></i><a href="#">Student</a></li>
                    <li><i class="fa-solid fa-people-roof"></i><a href="#">Class</a></li>
                    <li><i class="fa-solid fa-circle-info"></i><a href="#">About</a></li>
                    <li><i class="fa-solid fa-gear"></i><a href="#">Setting</a></li>
                </ul>
            </nav>
            <!-- <div class="btnlogout"><i class="fa-solid fa-right-from-bracket"></i>Logout</div> -->
        </div>
        <div class="info-side">
            <img src="Image/Picture SRU.jpg" alt="">
        </div>
    </div>

    <script src="https://kit.fontawesome.com/d5d9fbff00.js" crossorigin="anonymous"></script>
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.7.1.js"
        integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <script src="js/dashboard.js"></script>
    <!-- <script src="js/index.js"></script> -->
    <!-- animation -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>