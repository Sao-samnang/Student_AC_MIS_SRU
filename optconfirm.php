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
    <link rel="stylesheet" href="css/confirmopt.css?<?php echo time() ?>">
    <link rel="icon" href="Image/sru logo.png?<?php echo time() ?>">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Kantumruy+Pro:ital,wght@0,100..700;1,100..700&family=Mona+Sans:ital,wght@0,200..900;1,200..900&family=Moul&display=swap');
    </style>
</head>

<body>
    <div class="container-fluid m-0 p-0">
        <img class="mainBg-signup" src="Image/Svay Rieng University 1.jpg" alt="">
        <!-- <div class="lds-roller"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div> -->
        <div class="container m-0 p-0" data-aos="zoom-out" data-aos-duration="1000">
            <div class="name-pg">ប្រព័ន្ធគ្រប់គ្រងព័ត៌មាននិស្សិត</div>

            <div class="imgani mt-2">
                <img src="Image/Animation - 1736276635665 (1).gif" alt="">
            </div>
            <form class="frmotpveri" action="" method="post" enctype="multipart/form-data">
                <p class="p1">បញ្ជាក់កូដOTP</p>
                <p class="p2">សូមបញ្ចូលកូដOTPដែលបានផ្ញើរទៅកាន់ប្រអប់សាររបស់អ្នក</p>
                <input type="text" class="form-control" name="id" value="1" required style="display: none;">
                <div class="mb-3 otppass mt-4">
                    <input type="text" class="form-control" id="opt" maxlength="6" name="codeotp" placeholder="" required>
                    <span>បញ្ចូលOTPកូដ</span>
                </div>
                <div class="btnbox">
                    <button type="button" id="btnotp" class="btn btnotp btn-primary">បញ្ជាក់</button>
                </div>
            </form>
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
    <script src="js/otpconfirm.js?<?php echo time() ?>"></script>
    <!-- animation -->
    <script src="https://unpkg.com/aos@next/dist/aos.js?<?php echo time() ?>"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>