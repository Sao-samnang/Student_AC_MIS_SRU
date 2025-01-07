<?php

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome to Svay Rieng University Signup Application Form</title>
    <!-- animation -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css?<?php echo time() ?>" />
    <!--  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous?<?php echo time() ?>">
    <link rel="stylesheet" href="css/signup.css?<?php echo time() ?>">
    <link rel="icon" href="Image/sru logo.png?<?php echo time() ?>">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Kantumruy+Pro:ital,wght@0,100..700;1,100..700&family=Mona+Sans:ital,wght@0,200..900;1,200..900&family=Moul&display=swap');
    </style>

</head>

<body>
    <div class="container-fluid m-0 p-0">
        <img class="mainBg-signup" src="Image/Svay Rieng University 1.jpg" alt="">
        <div class="container m-0 p-0" data-aos="zoom-out" data-aos-duration="2000">
            <div class="name-pg">ប្រព័ន្ធគ្រប់គ្រងព័ត៌មាននិស្សិត</div>
            <p class="p1">សូមបំពេញទម្រង់ចុះឈ្មោះចូលប្រើប្រាស់ថ្មី</p>
            <form class="signfrm" action="" method="post" enctype="multipart/form-data">
                <!-- <label for="lname">បញ្ចូលឈ្មោះរបស់អ្នក</label> -->
                <div class="signInfo">
                    <div class=" div-name mt-1">
                        <input type="id" class="form-control mb-3" id="txtid" name="id" aria-describedby="nameHelp" style="display: none;">
                        <input type="lname" class="form-control mb-3" id="txtlastname" name="lname" aria-describedby="nameHelp"
                            placeholder="ត្រកូល" required autofocus>
                        <input type="name" class="form-control mt" id="txtfirstname" name="fname" aria-describedby="nameHelp"
                            placeholder="គោត្ដនាម/នាម" required autofocus>
                    </div>
                    <div class=" chckmale">
                        <p>ភេទ៖</p>
                        <div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gender" value="female" id="txtfemale"
                                    checked>
                                <label class="form-check-label" for="txtfemale">
                                    ភេទស្រី
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gender" value="male" id="txtmale">
                                <label class="form-check-label" for="txtmale">
                                    ភេទប្រុស
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="datetime-picker mb-3">
                        <label for="date" class="form-label">ថ្ងៃខែឆ្នាំកំណើត៖</label>
                        <input class="date" type="date" value="" name="birthdate" id="txtbirthdate">
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" id="txtemail" name="email" placeholder="អ៊ីមែល" required autofocus>
                    </div>
                    <div class="mb-3">
                        <label for="formFile" class="form-label mb-1">ជ្រើសរើសរូបថតសម្រាប់ប្រូហ្វាល់</label>
                        <input class="form-control" type="file" name="pfimg" id="formFileimg">
                    </div>
                    <div class="mb-3 permissions">
                        <select class="form-select" id="teacherPermission" name="permission" required autofocus>
                            <option selected disabled value="">សូមជ្រើសរើសតួនាទីក្នុងស្ថាប័ន.....</option>
                            <option value="teacher">គ្រូបង្រៀន/សាស្រ្តាចារ្យ</option>
                            <option value="president">ប្រធានមហាវិទ្យាល័យ</option>
                            <option value="staff">បុគ្គលិក</option>
                        </select>
                    </div>
                    <!-- <div class="mb-3">
                        <select class="form-select" id="Faculty" required>
                            <option selected disabled value="">មហាវិទ្យាល័យ.....</option>
                            <option>មហាវិទ្យាល័យកសិកម្ម</option>
                            <option>មហាវិទ្យាល័យសិល្បៈ មនុស្សសាស្ត្រ និងភាសាបរទេស</option>
                            <option>មហាវិទ្យាល័យការគ្រប់គ្រងពាណិជ្ជកម្ម</option>
                            <option>មហាវិទ្យាល័យវិទ្យាសាស្ត្រ និងបច្ចេកវិទ្យា</option>
                            <option>មហាវិទ្យាល័យវិទ្យាសាស្ត្រសង្គម</option>
                        </select>
                    </div> -->
                    <div class="mb-3">
                        <input type="text" class="form-control" id="txtmajor" name="major" placeholder="ឯកទេសបង្រៀន">
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" id="txtphone" name="phone" placeholder="លេខទូរស័ព្ទ">
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" id="txtaddress" name="address" placeholder="អាស័យដ្ឋាន">
                    </div>
                    <div class=" div-namePass mt-1 mb-2">
                        <input type="text" class="form-control mb-3" id="txtpass" name="pass" aria-describedby="passwordHelp"
                            placeholder="ពាក្យសម្ងាត់" required autofocus>
                        <input type="text" class="form-control mt" id="txtconpass" name="conpass" aria-describedby="passwordHelp"
                            placeholder="បញ្ជាក់ពាក្យសម្ងាត់" required autofocus>
                    </div>
                </div>
                <div class="btn-footerinfo">
                    <button type="button" id="btnsignup" class="btn btnsignup btn-primary">ចុះឈ្មោះ</button>
                    <p class="p2">បើសិនជាអ្នកមានគណនីរួចរាល់ហើយសូម <a href="index.php"
                            target="_parent">ចុះឈ្មោះចូលប្រើប្រាស់</a></p>
                </div>
            </form>
        </div>
    </div>

    <!-- script block -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous?<?php echo time() ?>"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous?<?php echo time() ?>"></script>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.7.1.js?<?php echo time() ?>"
        integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="js/signup.js?<?php echo time() ?>"></script>
    <!-- animation -->
    <script src="https://unpkg.com/aos@next/dist/aos.js?<?php echo time() ?>"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>