<?php
  include("php/action.php");
  $db=new action();
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "db_sru_student";
  
  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);

?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Welcome to Svay Rieng University Login Application Form</title>
  <!-- animation -->
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  <!--  -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="css/index.css?<?php echo time() ?>">
  <link rel="icon" href="Image/sru logo.png?<?php echo time() ?>">
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Kantumruy+Pro:ital,wght@0,100..700;1,100..700&family=Mona+Sans:ital,wght@0,200..900;1,200..900&family=Moul&display=swap');
  </style>

</head>

<body>
  <div class="container-fluid m-0 p-0">
    <img class="mainBg-login" src="Image/Svay Rieng University 1.jpg" alt="">
    <div class="container m-0 p-0" data-aos="zoom-out" data-aos-duration="2000">
      <div class="logo-mainlog">
        <div class="img">
          <img src="Image/sru logo.png" alt=" ">
        </div>
        <p>សាកលវិទ្យាល័យស្វាយរៀង</p>
      </div>
      <form class="form-login frm" action="" method="post" enctype="multipart/form-data">
        <div class="name-pg">ប្រព័ន្ធគ្រប់គ្រងព័ត៌មាននិស្សិត</div>
        <p class="p1">ចុះឈ្មោះចូលប្រើប្រាស់</p>
        <div class="mb-4 email">
          <input type="email" class="form-control" id="txtEmail" name="email" aria-describedby="emailHelp"
            placeholder="បញ្ចូលអ៊ីមែល" autofocus required>
            <span class="fb-email">អ៊ីមែលមិនត្រឹមត្រូវ</span>
        </div>
        <div class="mb-3 pass">
          <input type="text" class="form-control" id="txtPassword" name="password" placeholder="បញ្ចូលពាក្យសម្ងាត់" autofocus>
        <span class="fb-pass">ពាក្យសម្ងាត់មិនត្រឹមត្រូវ</span>
        </div>
        <div class=" form-check">
          <div class="shpass">
            <input type="checkbox" class="form-check-input" id="ShowPw">
            <label class="form-check-label" for="ShowPw">បង្ហាញពាក្យសម្ងាត់</label>
          </div>
          <div class="fg-pass">
            <a href="#">បានភ្លេចពាក្យសម្ងាត់</a>
          </div>
        </div>
        <button type="button" id="btnloginForm" class="btn btnLogin btn-primary">ចូលប្រើប្រាស់</button>
        <p class="p2">បើសិនជាអ្នកមិនមានគណនីសូម <a href="signup.php" target="_parent">ចុះឈ្មោះថ្មី</a></p>
      </form>
    </div>
  </div>

  <!-- script block -->
  <!-- jQuery -->
   <script src="js/jquery.js?<?php echo time() ?>"></script>
  <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
  <script src="js/index.js?<?php echo time() ?>"></script>
  <!-- animation -->
  <script src="https://unpkg.com/aos@next/dist/aos.js?<?php echo time() ?>"></script>
  <script>
    AOS.init();
  </script>
</body>

</html>