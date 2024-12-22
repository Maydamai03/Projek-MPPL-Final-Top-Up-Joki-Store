<!doctype html>
<html lang="en">

<head>


    <style>
        body {
            background-image: url("landingbg.png");
            background-repeat: no-repeat;
            background-size: cover;
            position: relative;
            /* Penting untuk posisi relative */
        }

        body::before {
            content: "";
            /* Wajib untuk pseudo-element */
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.7);
            /* Warna hitam dengan opacity 50% */
            z-index: -1;
            /* Pastikan berada di belakang konten utama */
        }
    </style>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Josefin+Sans:wght@700&family=Poppins:wght@600&display=swap"
        rel="stylesheet">



    <link rel="stylesheet" href="../style.css"><!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">


    <link rel="shortcut icon" href="../logo2.png">
    <title>Register Page</title>
</head>

<body>


    <!--PHP No-->
    <?php
        if(isset($_GET['pesan']) && $_GET['pesan'] == 'empty'){
        ?>
    <div class="alert border border-light alert-dismissible fade show" role="alert" style="
                    width: 80vw;
                    position:sticky; top:15%; left: 10%; z-index:1000;
                    background: rgba(255,0,0,0.8);">
        <strong class="text-light">Tidak boleh kosong, tolong Lengkapi data anda !</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <?php
        }
        elseif(isset($_GET['pesan']) && $_GET['pesan'] == 'sudahada'){
        ?>
    <div class="alert border border-light alert-dismissible fade show" role="alert" style="width: 80vw;
                    position:sticky; top:15%; left: 10%; z-index:1000;
                    background: rgba(255,0,0,0.8);">
        <strong class="text-light">Username telah terdaftar !</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <?php
        }
    ?>

    <div class="container" style="display: flex; gap: 20px;">

        <div class="login container">
            <div style="display: flex;margin-bottom: 20px;">

                <a href="../home.php">

                    <img src="../logo2.png" alt="logo D'Mond Store" width="60px">
                </a>
                <h5 class="offcanvas-title" id="offcanvasExampleLabel"
                    style="margin-left: 20px; margin-top: 8px; font-family: Poppins;font-size: 30px;">D'Mond Store</h5>
            </div>
            <br>
            <h3 style="font-family: sans-serif;">Daftar</h3><br>
            <h6 style="font-family: sans-serif;">Silahkan isi form dibawah.</h6>
            <br>
            <form action="daftar2.php" method="post">
                <div class="mb-3">
                    <input
                        style="border-radius: 50px;width: 500px;height: 57px;margin-bottom: 30px; background-color: rgb(121, 121, 154);;border-style: none;"
                        placeholder="Nama Lengkap" type="text" class="form-control" id="nama" name="user">
                    <input
                        style="border-radius: 50px;width: 500px;height: 57px;margin-bottom: 30px; background-color: rgb(121, 121, 154);;border-style: none;"
                        placeholder="Email" type="email" class="form-control" id="exampleInputEmail1" name="email">
                    <input
                        style="border-radius: 50px;width: 500px;height: 57px;background-color: rgb(121, 121, 154);border-style: none;"
                        placeholder="Password" type="password" class="form-control" id="inputPassword" name="pw">
                </div>

                <input style="margin-bottom: 30px;margin-left: 10px;margin-right: 6px;font-family: sans-serif;"
                    type="checkbox" onclick="myFunction()">Tampilkan Password
                <script>
                    function myFunction() {
                        var x = document.getElementById("inputPassword");
                        if (x.type === "password") {
                            x.type = "text";
                        } else {
                            x.type = "password";
                        }
                    }
                </script>
                <br>
                <button
                    style="border-radius: 50px;width: 500px;height: 57px;margin-bottom: 30px;background-color: rgb(238, 107, 245);color: white; border-style: none;"
                    class="btn " type="submit " name="submitform">Daftar</button>
                <br>
            </form>
            <span style="margin-left: 170px; margin-bottom: 30px;font-family: sans-serif;">Sudah Punya Akun?</span><br>

            <a href="loginPage.php"> <button
                    style="margin-top: 30px; border-radius: 50px;width: 500px;height: 57px;margin-bottom: 30px; background-color: rgb(255, 255, 255) ;color: rgb(0, 0, 0); border-style: none;"
                    class="btn ">Masuk Sekarang</button></a>

            <br>

            <span style="font-family: sans-serif;">
                &copy;2024 D'Mond Store. Semua Hak Cipta

            </span>
        </div>


        <div style="margin-top: 200px;padding-left: 0px;">
            <img src="https://ouch-cdn2.icons8.com/5glaSIA9HoWaFcj0vGBTGXfinZbqxcGu7Ex7B3nJsj8/rs:fit:368:427/czM6Ly9pY29uczgu/b3VjaC1wcm9kLmFz/c2V0cy9wbmcvNzgy/LzczNTdiOGM4LTUz/OGYtNDA5NC05NzU5/LTM4YjI5ZWQzODhk/ZS5wbmc.png"
                alt="">

        </div>

    </div>







    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>


    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->
</body>

</html>