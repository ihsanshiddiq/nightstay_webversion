<?php
session_start();
?>






<!DOCTYPE html>
<!--
    contributor : [glico, ceruleaf, kertaskocak, akupipul]
-->


<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS LINK -->
    <link rel="stylesheet" href="../style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Javascript LINK -->
    <script type="text/javascript" src="../javascripts.js"></script>

    <!-- JS LINK -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>

    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <!-- Other -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">

    <title> HOME | Night Stay</title>
</head>

<body>


    <!-- Navbar Section -->
    <nav id="navbar" class="navbar navbar-expand-lg navbar-dark py-0">
    <div class="container">
        <a class="navbar-brand px-0" style="padding-top: 1%;" href="index.php">
            <h1 style="padding-left: 3.5px;"><img src="../Assets/5.svg" alt="..." height="36" style="margin-bottom: 7px; padding-right: 2%;">NIGHT STAY</h1>
        </a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link active currentpage" aria-current="page">Home</a>
                </li>

                <li class="nav-item dropdown mx-0">
                    <a class="nav-link dropdown-toggle mx-0" href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Hotel
                    </a>
                    <ul class="ddbg dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="rooms.php" style="color: black;">Rooms</a></li>
                        <li><a class="dropdown-item" href="facilities.php" style="color: black;">Facilities</a></li>
                        <li><a class="dropdown-item" href="dinebar.php" style="color: black">Dine & Bar</a></li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="booking.php">Book</a>
                </li>
                               
                <li class="nav-item helpsupport">
                    <a class="nav-link" href="faq.php">Help/Support</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-person-circle">
                         <?php echo $_SESSION['nama_user']?>

                        </i>
                    
                    </a>
                    <ul class="ddbg dropdown-menu" aria-labelledby="navbarDropdown" >
                        <li><a class="dropdown-item" href="profile.php" style="color: black;">Profile</a></li>
                        
                        <li><a class="dropdown-item" href="logout.php" style="color: black;">Logout</a></li>
                        
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="aboutus.php">About</a>
                </li>
            </ul>
        </div>
        
    </div>
</nav>


    <!-- Page Content -->
    <div class="parallax">
        <div class="container" style="padding-top: 23%; padding-bottom: 26%; text-align: center;">

            <h1><u class="h1home">Welcome To Nightstay Hotel</u></h1>

        </div>
    </div>

    <div class="transitionbrown">
        <p class="transitiontext"><b>"Life is what happens to us while we are making other plans."<br>-Allen
                Saunders</b></p>
    </div>

    <div class="parallax1">
        <div class="container" style="padding-left: 0%; margin-left: 0%;">
            <img src="../Assets/triangle.png">
        </div>
    </div>

    <div class="transitionbrown">
        <p class="transitiontext"><b>“Do all the good you can, for all the people you can, in all the ways you can, as
                long as you can.”<br>— Hillary Clinton</b></p>
    </div>

    <div class="parallax3">
        <div class="container" style="padding-top: 5%; padding-bottom: 5%; margin-left: 17vh;">
            <p class="ourbest" style="margin-left:22%">Our Best Rooms</p>
            <div class="py-5">
                <div id="carouselExampleCaptions2" class="carousel slide roomview" data-bs-ride="carousel">
                    <div class="carousel-indicators carouselnostretch">
                        <button type="button" data-bs-target="#carouselExampleCaptions2" data-bs-slide-to="0"
                            class="active " aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions2" data-bs-slide-to="1" class=""
                            aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions2" data-bs-slide-to="2" class=""
                            aria-label="Slide 3"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions2" data-bs-slide-to="3" class=""
                            aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active" data-bs-interval="10000">
                            <img src="../Assets/room1.png" class="d-block w-100 roomcarousel" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                            </div>
                        </div>
                        <div class="carousel-item" data-bs-interval="4000">
                            <img src="../Assets/room1(1).png" class="d-block w-100 roomcarousel" alt="...">
                            <div class="carousel-caption d-none d-md-block ">
                            </div>
                        </div>
                        <div class="carousel-item" data-bs-interval="4000">
                            <img src="../Assets/room1(2).png" class="d-block w-100 roomcarousel" alt="...">
                            <div class="carousel-caption d-none d-md-block ">
                            </div>
                        </div>
                        <div class="carousel-item" data-bs-interval="4000">
                            <img src="../Assets/room1 (3).png" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block ">
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="transitionbrown">
        <p class="transitiontext"><b>“Your time is limited, so don’t waste it living someone else’s life. Don’t be
                trapped by dogma – which is living with the results of other people’s thinking.”<br>– Steve Jobs</b></p>
    </div>


    <div class="parallax2">
        <div class="container" style="padding-top: 5%; padding-bottom: 5%; margin-right: 0%; padding-right: 0%;">
            <p class="ourbest">Food & Drinks</p>
            <iframe width="80%" height="600" src="https://www.youtube.com/embed/Up9Wt0QncbI"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>
        </div>
    </div>

    <div class="transitionbrown">
        <p class="transitiontext"><b>“If you want to live a happy life, tie it to a goal, not to people or things.”<br>–
                Albert Einstein</b></p>
    </div>

    <div class="parallax4">
        <div class="container" style="padding-top: 5%; padding-bottom: 5%; margin-right: 0%; padding-right: 0%;">
            <img src="../Assets/vid3.png">
        </div>
    </div>

    <div class="transitionbrown">
        <a href="booking.php">

            <p class="transitiontext"><b>BOOK NOW ><br></b></p>
        </a>
    </div>

</body>

</html>