<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome to Svay Rieng University Signup Application Form</title>
    <!-- animation -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css?<?php echo time() ?>" />
    <!--  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css?<?php echo time() ?>" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/changepass.css?<?php echo time() ?>">
    <link rel="icon" href="Image/sru logo.png?<?php echo time() ?>">
    <script src="https://unpkg.com/@lottiefiles/lottie-player@2.0.8/dist/lottie-player.js?<?php echo time() ?>"></script>
    <script src="https://unpkg.com/@dotlottie/player-component@2.7.12/dist/dotlottie-player.mjs?<?php echo time() ?>" type="module"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Kantumruy+Pro:ital,wght@0,100..700;1,100..700&family=Mona+Sans:ital,wght@0,200..900;1,200..900&family=Moul&display=swap');
    </style>
</head>

<body>
    <div class="container-fluid m-0 p-0">
    <div class="mss">
            <div class="mss1">
                <!-- <dotlottie-player src="https://lottie.host/31dd2f33-19b8-4735-9c22-15b3c6294a94/2Ksss79WSP.lottie" background="transparent" speed="1" style="width: 90px; height: 90px" autoplay></dotlottie-player> -->
                <!-- <lottie-player src="https://lottie.host/b0c5bfda-ee44-4014-905c-83f5d46ff100/dlQebRk9lL.json" background="none" speed="1" style="width: 90px; height: 90px" autoplay direction="1" mode="normal"></lottie-player> -->
            </div>
            <div class="mss2">

            </div>
        </div>
        <img class="mainBg-signup" src="Image/Svay Rieng University 1.jpg" alt="">
        <!-- <div class="lds-roller"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div> -->
        <div class="container m-0 p-4" data-aos="zoom-out" data-aos-duration="1000">
            <div class="imgani mt-1">
                <div class="aniicon"></div>
                <lottie-player src="https://lottie.host/0898e2b6-23ec-4b34-ae1b-c4dd25f2384e/hZ4ZfJWTTJ.json" background="##FFFFFF" speed="1" style="width: 150px; height: 150px" loop autoplay direction="1" mode="normal"></lottie-player>
            </div>
            <div class="txtdis mt-4">
                <p class="p1 m-0">ផ្លាស់ប្ដូរពាក្យសម្ងាត់របស់អ្នក</p>
                <p class="p2 m-0">បញ្ចូលពាក្យសម្ងាត់ថ្មីខាងក្រោមនេះដើម្បីប្ដូរពាក្យសម្ងាត់របស់អ្នក</p>
            </div>
            <form class="frmnewpass mt-3" action="" method="post" enctype="multipart/form-data">
                <input type="text" class="form-control" name="id" value="3" required style="display: none;">
                <!-- <input type="text" name="email" placeholder="Enter your email" id="txtmail" style="display: none;"> -->
                <div class="mb-4 pass">
                    <input type="text" class="form-control" id="txtnewpass" name="newpass" placeholder="" required>
                    <span>បញ្ចូលពាក្យសម្ងាត់ថ្មី</span>
                </div>
                <div class="mb-3 pass">
                    <input type="text" class="form-control" id="txtconpass" name="conpass" placeholder="" required>
                    <span>បញ្ជាក់ពាក្យសម្ងាត់</span>
                </div>
                <div class="btnbox mb-3">
                    <button type="button" id="btnnewpass" class="btn btnnewpass btn-primary">ផ្លាស់ប្ដូរពាក្យសម្ងាត់</button>
                </div>
            </form>
        </div>
    </div>
    </div>



    <!-- script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js?<?php echo time() ?>"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js?<?php echo time() ?>" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.7.1.js?<?php echo time() ?>"
        integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="js/changepass.js?<?php echo time() ?>"></script>
    <!-- animation -->
    <script src="https://unpkg.com/aos@next/dist/aos.js?<?php echo time() ?>"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>