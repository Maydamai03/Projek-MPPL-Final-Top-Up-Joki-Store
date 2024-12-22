<!doctype html>
<html lang="en">

<head>
    <style>

        body {
            font-family: 'Poppins', sans-serif;
            background-color: #121212;
            color: white;
            margin: 0;
            padding: 0;
        }

        .container {
            padding: 20px;
        }

        h2 {
            margin-bottom: 20px;
        }

        .media-scroller {
            display: flex;
            gap: 20px;
            overflow-x: auto;
            padding: 20px;
        }

        .media-scroller::-webkit-scrollbar {
            display: none;
        }

        .media-element {
            position: relative;
            flex: 0 0 auto;
            width: 200px;
            height: 300px;
            border-radius: 16px;
            overflow: hidden;
            background-color: #222;
            cursor: pointer;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .media-element img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.3s ease;
        }

        .media-element:hover {
            transform: scale(1.05);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.5);
        }

        .media-element:hover img {
            transform: scale(1.1);
        }

        .media-element article {
            position: absolute;
            bottom: -40px;
            left: 0;
            right: 0;
            background: rgba(0, 0, 0, 0.6);
            padding: 10px;
            color: white;
            text-align: center;
            transition: bottom 0.3s ease;
        }

        .media-element:hover article {
            bottom: 10px;
        }

        .bg-gradient-to-t {
            position: absolute;
            inset: 0;
            background: linear-gradient(to top, rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0));
        }
    </style>


    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Josefin+Sans:wght@700&family=Poppins:wght@600&display=swap" rel="stylesheet">



    <link rel="stylesheet" href="style.css"><!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">


    <link rel="shortcut icon" href="logo2.png">
    <title>Home</title>
</head>

<body style="background-image: linear-gradient(to right,rgb(66, 5, 60), rgb(36, 30, 35));">

    <!--Notifikasi-->
    <?php
        session_start();
        include 'koneksi/cn.php';
    ?>
    <?php
        if(isset($_GET['pesan']) && $_GET['pesan'] == 'register'){
        ?>
                <div class="alert border border-light alert-dismissible fade show" role="alert" style="width: 80vw;
                    position:sticky; top:15%; left: 10%; z-index:1000;
                    background: rgba(0,210,0,0.8);">
                    <strong class="text-light">Berhasil register !</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
        <?php
        }elseif(isset($_GET['pesan']) && $_GET['pesan'] == 'login'){
        ?>
            <div class="alert border border-light alert-dismissible fade show" role="alert" style="width: 80vw;
                position:sticky; top:15%; left: 10%; z-index:1000;
                background: rgba(0,210,0,0.8);">
                <strong class="text-light">Berhasil login !</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php
        }elseif(isset($_GET['pesan']) && $_GET['pesan'] == 'perlulogin'){
            ?>
                <div class="alert border border-light alert-dismissible fade show" role="alert" style="width: 80vw;
                    position:sticky; top:15%; left: 10%; z-index:1000;
                    background: rgba(210,0,0,0.8);">
                    <strong class="text-light">Untuk mengakses history pemesanan, anda harus login terlebih dahulu!</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php
        }elseif(isset($_GET['pesan']) && $_GET['pesan'] == 'berhasilCS'){
                ?>
                    <div class="alert border border-light alert-dismissible fade show" role="alert" style="width: 80vw;
                        position:sticky; top:15%; left: 10%; z-index:1000;
                        background: rgba(0,210,0,0.8);">
                        <strong class="text-light">Terima kasih atas masukan anda, Customer Service akan segera menghubungi dalam 24 jam !</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                <?php
                }
            
        ?>
        
    ?>

    <div class="editnav">
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top ">
            <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" style="margin-right: 30px;margin-left: 112px; background-color: rgb(108, 11, 99);
 ; border-style: none;" aria-controls="offcanvasExample">
                <svg xmlns="http://www.w3.org/2000/svg" width="27" height="32" fill="white" class="bi bi-list" viewBox="0 0 16 16"  >
                    <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
                </svg>
            </button>

            <a class="navbar-brand" href=""><img src="logo2.png" alt="" style="height: 40px; "></a>
            <a class="navbar-brand" href="" style="color:white ; font-family:Poppins;">D'Mond Store</a>

            <span style="color:white ;margin-left: 50px; font-family:Poppins;font-style: oblique;font-size: 12px;">Website Top Up Anti Buta Map, Tercepat Dan Terpercaya Di Indonesia.</span>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <?php
                    if(isset($_SESSION['status']) && $_SESSION['status'] == "login"){
                    ?>
                        <div class="navbar-nav ml-auto">    
                            <a class="btn " href="logout.php" role="button" style="font-size:16px; border-color: white; font-family: Poppins; color:white;border-radius:10px;margin-right: 112px;">Log Out</a>
                        </div>
                    <?php
                    }
                    else{
                    ?>
                        <div class="navbar-nav ml-auto">    
                            <a class="btn " href="daftar/daftar.php" role="button" style="font-size:16px; border-color: white; font-family: Poppins; color:white;border-radius:10px;">Daftar</a>
                            <a class="btn" href="daftar/loginPage.php" role="button" style=" font-size:16px;margin-left: 10px; background-color: rgb(255, 245, 235) ; border-style:none; color: black; font-family: Poppins;border-radius:10px;margin-right: 112px;">Masuk</a>
                        </div>
                    <?php
                    }
                ?>

            </div>
        </nav>


    </div>

    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel" style="background-image: linear-gradient(to right,rgb(66, 5, 60), rgb(36, 30, 35));   color: white;">
        <div class="offcanvas-header">
            <img src="logo2.png" alt="logo AiStore"
                width="60px">
            <h5 class="offcanvas-title" id="offcanvasExampleLabel" style="font-family: Poppins;font-size: 30px;">D'Mond Store</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <div class="dropdown mt-3">
                
                

                           <a href="home.php" style="text-decoration: none; color: white;font-family: Poppins;font-size: 20px; margin-bottom: 20px;">
                            <svg xmlns="http://www.w3.org/2000/svg" style="margin-bottom: 5px; margin-right:10px;" width="20" height="20" fill="currentColor" class="bi bi-house-door-fill" viewBox="0 0 16 16">
                                <path d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5"/>
                              </svg>Beranda</a> <br><br>
                           <a href="transaksi.php" style="text-decoration: none; color: white;font-family: Poppins;font-size: 20px; margin-bottom: 20px;">
                            <svg xmlns="http://www.w3.org/2000/svg" style="margin-bottom: 4px; margin-right:10px;" width="20" height="20" fill="currentColor" class="bi bi-clock-history" viewBox="0 0 16 16">
                                <path d="M8.515 1.019A7 7 0 0 0 8 1V0a8 8 0 0 1 .589.022zm2.004.45a7.003 7.003 0 0 0-.985-.299l.219-.976c.383.086.76.2 1.126.342zm1.37.71a7.01 7.01 0 0 0-.439-.27l.493-.87a8.025 8.025 0 0 1 .979.654l-.615.789a6.996 6.996 0 0 0-.418-.302zm1.834 1.79a6.99 6.99 0 0 0-.653-.796l.724-.69c.27.285.52.59.747.91l-.818.576zm.744 1.352a7.08 7.08 0 0 0-.214-.468l.893-.45a7.976 7.976 0 0 1 .45 1.088l-.95.313a7.023 7.023 0 0 0-.179-.483m.53 2.507a6.991 6.991 0 0 0-.1-1.025l.985-.17c.067.386.106.778.116 1.17l-1 .025zm-.131 1.538c.033-.17.06-.339.081-.51l.993.123a7.957 7.957 0 0 1-.23 1.155l-.964-.267c.046-.165.086-.332.12-.501zm-.952 2.379c.184-.29.346-.594.486-.908l.914.405c-.16.36-.345.706-.555 1.038l-.845-.535m-.964 1.205c.122-.122.239-.248.35-.378l.758.653a8.073 8.073 0 0 1-.401.432l-.707-.707z"/>
                                <path d="M8 1a7 7 0 1 0 4.95 11.95l.707.707A8.001 8.001 0 1 1 8 0z"/>
                                <path d="M7.5 3a.5.5 0 0 1 .5.5v5.21l3.248 1.856a.5.5 0 0 1-.496.868l-3.5-2A.5.5 0 0 1 7 9V3.5a.5.5 0 0 1 .5-.5"/>
                              </svg>History Pemesanan</a> <br><br>
                           <a href="customerService/contactus.php" style="text-decoration: none; color: white;font-family: Poppins;font-size: 20px; margin-bottom: 20px;">
                            <svg xmlns="http://www.w3.org/2000/svg" style="margin-bottom: 4px; margin-right:10px;" width="20" height="20" fill="currentColor" class="bi bi-headset" viewBox="0 0 16 16">
                                <path d="M8 1a5 5 0 0 0-5 5v1h1a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V6a6 6 0 1 1 12 0v6a2.5 2.5 0 0 1-2.5 2.5H9.366a1 1 0 0 1-.866.5h-1a1 1 0 1 1 0-2h1a1 1 0 0 1 .866.5H11.5A1.5 1.5 0 0 0 13 12h-1a1 1 0 0 1-1-1V8a1 1 0 0 1 1-1h1V6a5 5 0 0 0-5-5"/>
                              </svg>Hubungi Kami</a>

                              <br>
                              <hr>
    
               
            </div>
        </div>
    </div>
    

    



<section class = "sesi1" style="">
    <video autoplay muted loop>
        <source src="bghome.mp4" type="video/mp4">
    </video>

    <center>
        <div class="editcarro container">
            <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="https://i.pinimg.com/originals/6d/ef/ae/6defaeed96ba06872cf041b3eac87f52.jpg" style="height: 300px;" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Giveaway Birthday D'Mond Store</h5>
                            <p>Jangan sampai kelewatan skin Yu Zhong gratis pada giveaway kita</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="https://lelogama.go-jek.com/cache/3a/34/3a3424971c9c0493eb8cce8d1db60eb7.jpg" style="height: 300px;" class="d-block w-100" alt="..." >
                        <div class="carousel-caption d-none d-md-block">
                            <h5></h5>
                            <p></p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="https://wallpapercave.com/wp/wp9074412.jpg" style="height: 300px;" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5></h5>
                            <p></p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="https://gamefinity-content.storage.googleapis.com/wp-content/uploads/2024/11/08152517/Event-11.11-MLBB.png" style="height: 300px;" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5></h5>
                            <p></p>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-target="#carouselExampleCaptions" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-target="#carouselExampleCaptions" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </button>
            </div>
        </div>
    </center>

    </section>

    <section class = "sesi2">


    <div class="editmedia container">
        

        
        <h2 style="text-decoration:none; color: rgba(255, 255, 255, 0.975); font-family:POPPINS ;">
            JOKI RANK 
         </h2>
         <br>

        <div class="media-scroller">


        <a href="joki/orderjoki.php" style="text-decoration:none; color: rgba(255, 255, 255, 0.975);">
            <div class="media-element">
                <img src="jokiimage.png" alt="">
    
                    <b class="subtitlemedia" > Mobile Legends Bang Bang</b> <br>
                

                </div>
        </a>

        <a href="" style="text-decoration:none; color: rgba(255, 255, 255, 0.975);">
            <div class="media-element">
                <img src="https://cmsassets.rgpub.io/sanity/images/dsfx7636/news/85791464ef14001205ecc3e756d002223a0c27f7-844x1124.png" alt="">
    
                    <b class="subtitlemedia" > Wild Rift Indonesia</b> <br>
                

                </div>
        </a>

        <a href="" style="text-decoration:none; color: rgba(255, 255, 255, 0.975);">
            <div class="media-element">
                <img src="https://blz-contentstack-images.akamaized.net/v3/assets/bltf408a0557f4e4998/bltd6fa384b60ff3fbd/64cc2fe367e57a3aa2cec653/Jupiter_Coming_Soon-Bnet_Game-Content_UI_(Phoenix)-EN-1920x1080_textless.jpg" alt="">
    
                    <b class="subtitlemedia" > Call of Duty : Mobile</b> <br>
                

                </div>
        </a>

        <a href="" style="text-decoration:none; color: rgba(255, 255, 255, 0.975);">
            <div class="media-element">
                <img src="https://cdn.hobbyconsolas.com/sites/navi.axelspringer.es/public/media/image/2024/06/honor-kings-3550291.jpg?tf=1200x1200" alt="">
    
                    <b class="subtitlemedia" > Honor of Kings</b> <br> <br>
                

                </div>
        </a>

        <a href="" style="text-decoration:none; color: rgba(255, 255, 255, 0.975);">
            <div class="media-element">
                <img src="https://cmsassets.rgpub.io/sanity/images/dsfx7636/news/aefe3c7dbe39ef1da3f4241f4c6b771c535038fc-1920x1080.jpg" alt="">
    
                    <b class="subtitlemedia" > Valorant</b> <br> <br>
                

                </div>
        </a>

        <a href="" style="text-decoration:none; color: rgba(255, 255, 255, 0.975);">
            <div class="media-element">
                <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEi4A4ia0T-JIVzdJqJGM1E5teTg1tboBiOc0gBBJkO41kLyek9u3eyOdeK0T0QwPPOHxJT-buU61y9AeUNqi8t11bJz7JLrX1ZyuCIKx3qDxeGvmddyFDbYhG89XHG8bFvaC3umOnD_0EIRaVFS1bqkOdIBwqErqq1FlJ45gYkK1kZwVEJbnVS6SQth/s512/pubg%20kr%20icon.jpeg alt="">
    
                    <b class="subtitlemedia" > PUBG Mobile</b> <br> <br>
                

                </div>
        </a>

        

    </div>
    </div>
        
    
    <div class="editmedia container">
        

        
        <h2 style="text-decoration:none; color: rgba(255, 255, 255, 0.975); font-family:POPPINS ;">
            TOP UP GAMES 
         </h2>
         <br>

        <div class="media-scroller">


        <a href="diamond/order.php" style="text-decoration:none; color: rgba(255, 255, 255, 0.975);">
            <div class="media-element">
                <img src="topupML.png" alt="gambar logo mlbb">
    
                    <b class="subtitlemedia" > Mobile Legends Bang Bang</b> <br>
                

                </div>
        </a>

        <a href="" style="text-decoration:none; color: rgba(255, 255, 255, 0.975);">
            <div class="media-element">
                <img src="logofreefire.png" alt="gambar logo free fire">
    
                    <b class="subtitlemedia" > Free Fire Indonesia<br></b> <br>
                

                </div>
        </a>

        <a href="" style="text-decoration:none; color: rgba(255, 255, 255, 0.975);">
            <div class="media-element">
                <img src="clashroyalelogo.jpeg" alt="gambar logo clash royale">
    
                    <b class="subtitlemedia" > Clash Royale <br><br></b> <br>
                

                </div>
        </a>

        <a href="" style="text-decoration:none; color: rgba(255, 255, 255, 0.975);">
            <div class="media-element">
                <img src="pubglogo.jpg" alt="gambar logo pubg mobile">
    
                    <b class="subtitlemedia" > PUBG Mobile Indonesia <br></b> <br>
                

                </div>
        </a>

        <a href="" style="text-decoration:none; color: rgba(255, 255, 255, 0.975);">
            <div class="media-element">
                <img src="https://seeklogo.com/images/V/valorant-logo-FAB2CA0E55-seeklogo.com.png" alt="gambar logo valorant">
    
                    <b class="subtitlemedia" > Valorant <br><br></b> <br>
                

                </div>
        </a>
        <a href="" style="text-decoration:none; color: rgba(255, 255, 255, 0.975);">
            <div class="media-element">
                <img src="https://play-lh.googleusercontent.com/caDiIvFl-VDvEPlzbHuypmXMTIwAiA8WesvsUIcFoQqokLaYRSYh-Y0LpR4RFhGgytEg=w240-h480-rw" alt="gambar logo arena of valor">
    
                    <b class="subtitlemedia" > Arena Of Valor <br><br></b> <br>
                

                </div>
        </a>

    </div>
    </div>
    <div class="editmedia container">

        <div class="media-scroller">


        <a href="" style="text-decoration:none; color: rgba(255, 255, 255, 0.975);">
            <div class="media-element">
                <img src="genshinimg.webp" alt="gambar logo genshin impact">
    
                    <b class="subtitlemedia" > Genshin Impact <br><br></b> <br>
                

                </div>
        </a>

        <a href="" style="text-decoration:none; color: rgba(255, 255, 255, 0.975);">
            <div class="media-element">
                <img src="https://e1.pxfuel.com/desktop-wallpaper/912/410/desktop-wallpaper-clash-of-clans-app-icon.jpg" alt="gambar logo wildrift">
    
                    <b class="subtitlemedia" > Clash Of Clans Indonesia</b> <br>
                

                </div>
        </a>

        <a href="" style="text-decoration:none; color: rgba(255, 255, 255, 0.975);">
            <div class="media-element">
                <img src="https://upload.wikimedia.org/wikipedia/id/0/07/CODM_logo.png" alt="gambar logo call of duty">
    
                    <b class="subtitlemedia" > Call Of Duty : Mobile</b> <br>
                

                </div>
        </a>

        <a href="" style="text-decoration:none; color: rgba(255, 255, 255, 0.975);">
            <div class="media-element">
                <img src="https://play-lh.googleusercontent.com/Za8u0ChNK-3mZ3rnLcBirRBTzLYTdqaaAn63Ha9qKZiDp_bF_5u7OGfvWb1dg88WttKw" alt="gambar logo heyday indoensia">
    
                    <b class="subtitlemedia" > Hayday Indonesia <br><br></b> <br>
                

                </div>
        </a>

        <a href="" style="text-decoration:none; color: rgba(255, 255, 255, 0.975);">
            <div class="media-element">
                <img src="wildriftlogo.jpeg" alt="gambar logo wildrift">
    
                    <b class="subtitlemedia" > Wild Rift Indonesia <br></b> <br>
                

                </div>
        </a>
        <a href="" style="text-decoration:none; color: rgba(255, 255, 255, 0.975);">
            <div class="media-element">
                <img src="https://avatars.cloudflare.steamstatic.com/2b6f548819d7d1e7d1e15a43068c48290b0257e4_full.jpg" alt="gambar logo ark survival elvoved">
    
                    <b class="subtitlemedia" > Ark Survival Evolved <br></b> <br>
                

                </div>
        </a>

    </div>
    </div>
    
    </section>


<section class="footer" style="    background-color: rgb(23, 23, 26);margin-bottom: 0vw; margin-left: 0px; margin-right: 0px; margin-top:100px; padding: 30px; display: flex; ; display: flex; gap: 100px; padding-left: 9vw; width: 100%;">

    <div style="margin-top: 1vw; margin-right: 15vw;">
        <img src="logo2.png" alt="logo AiStore"
                width="120px">
        
    </div>
    <div style="width: 300px;font-size: 0.9rem;margin-right: 10vw;">
        <b style="font-family: Poppins; color: #ffffff;">D'Mond Store</b>
        <br><br>

        <p style="color: white; width: 400px;">
            D'MOND STORE (PT D'MOND STORE INDONESIA) adalah tempat top up games yang aman, murah dan terpercaya. Proses cepat 1-3 Detik. Open 24 jam. Payment terlengkap. Jika ada kendala silahkan klik logo CS pada kanan bawah di website ini        </p>
        

    </div>

    
    
    <div>
        
        <b style="font-family: Poppins; color: #ffffff; font-size: 1.2rem;">Social Media</b><br> <br>
        <div style="gap :5px; ">

            <a href=""><svg xmlns="http://www.w3.org/2000/svg" width="2em" height="3em" fill="white" class="bi bi-facebook" viewBox="0 0 16 16">
                <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
            </svg></a><br><br>

            <a href=""><svg xmlns="http://www.w3.org/2000/svg" width="2em" height="3em" fill="white" class="bi bi-instagram" viewBox="0 0 16 16">
                <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
            </svg></a><br><br>
          <a href=""><svg xmlns="http://www.w3.org/2000/svg" width="2em" height="3em" fill="white" class="bi bi-twitter" viewBox="0 0 16 16">
            <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
        </svg></a>
    </div>
        
    </div>
    
</section>

<div class="editmidmedia" style="background-color: rgb(40, 40, 40); padding: 9px; color: white; font-size: 9px; font-family: Poppins;">


<center>&copy;Projek MPPL D'MOND Team 2024</center>

</div>




    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
    </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>


    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->
</body>

</html>