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
    

    
    <title> Rooms | Night Stay</title>
</head>

<body>

    <!-- Navbar Section -->

    <nav id="navbar" class="navbar navbar-expand-lg navbar-dark py-0">
        <div class="container">
            <a class="navbar-brand px-0" style="padding-top: 1%;" href="index.php">
                <h1 style="padding-left: 3.5px;"><img src="../Assets/5.svg" alt="..." height="36"
                        style="margin-bottom: 7px; padding-right: 2%;">NIGHT STAY</h1>
            </a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>

                    <li class="nav-item dropdown mx-0">
                        <a class="nav-link dropdown-toggle mx-0 active currentpage" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Hotel
                        </a>
                        <ul class="ddbg dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="rooms.php" style="color: black;">Rooms</a></li>
                            <li><a class="dropdown-item" href="facilities.php" style="color: black;">Facilities</a>
                            </li>
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
    <section class="cover">

        <div id="carouselExampleCaptions" class="carousel slide roomcarousel" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0"
                    class="active carouselnostretch2" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                    class="carouselnostretch2" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                    class="carouselnostretch2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="../Assets/vojtech-bruzek-Yrxr3bsPdS0-unsplash.jpg" class="d-block w-100 carouselimg"
                        alt="...">
                    <div class="carousel-caption d-none d-md-block carouselnostretch">
                        <h5>Room Type</h5>

                    </div>
                </div>
                <div class="carousel-item">
                    <img src="../Assets/mark-champs-Id2IIl1jOB0-unsplash.jpg" class="d-block w-100 carouselimg" alt="...">
                    <div class="carousel-caption d-none d-md-block carouselnostretch">
                        <h5>Room Type Again</h5>

                    </div>
                </div>
                <div class="carousel-item">
                    <img src="../Assets/roberto-nickson-emqnSQwQQDo-unsplash.jpg" class="d-block w-100 carouselimg"
                        alt="...">
                    <div class="carousel-caption d-none d-md-block carouselnostretch">
                        <h5>Another Room Type</h5>

                    </div>
                </div>
            </div>

        </div>
        <div class="transitionwhite">
            <p><i>Kick your stress away, stay for a while</i></p>
        </div>

        <div class="facilities">

            <div class="container">

                <h4 class="facilitytext my-4 mb-5">Royal Suite</h4>
                <div id="darkbg" class="py-5">
                    <div id="carouselExampleCaptions2" class="carousel slide roomview" data-bs-ride="carousel">
                        <div class="carousel-indicators carouselnostretch">
                            <button type="button" data-bs-target="#carouselExampleCaptions2" data-bs-slide-to="0"
                                class="active " aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions2" data-bs-slide-to="1"
                                class="" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions2" data-bs-slide-to="2"
                                class="" aria-label="Slide 3"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions2" data-bs-slide-to="3"
                                class="" aria-label="Slide 3"></button>
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
                <div class="roomdesc container">
                    <p>Overview</p>
                    <br>
                    <p>Super King-Size Bed</p>
                    <br>
                    <p>Private Balcony</p>
                    <br>
                    <p>Smart TV</p>
                    <br>
                    <p>High Velocity Wifi</p>
                    <br>
                    <p>Spa Bathroom</p>
                    <br>
                    <p>Living Room</p>
                    <br>
                    <button><a href="login.html">BOOK NOW</a></button>
                </div>


                <h4 class="facilitytext my-4 mb-5">President Suite</h4>
                <div id="darkbg" class="py-5">
                    <div id="carouselExampleCaptions3" class="carousel slide roomview" data-bs-ride="carousel">
                        <div class="carousel-indicators carouselnostretch">
                            <button type="button" data-bs-target="#carouselExampleCaptions3" data-bs-slide-to="0"
                                class="active " aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions3" data-bs-slide-to="1"
                                class="" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions3" data-bs-slide-to="2"
                                class="" aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active" data-bs-interval="10000">
                                <img src="../Assets/Room2.png" class="d-block w-100 roomcarousel" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                </div>
                            </div>
                            <div class="carousel-item" data-bs-interval="4000">
                                <img src="../Assets/Room2(1).png" class="d-block w-100 roomcarousel" alt="...">
                                <div class="carousel-caption d-none d-md-block ">
                                </div>
                            </div>
                            <div class="carousel-item" data-bs-interval="4000">
                                <img src="../Assets/Room2(2).png" class="d-block w-100 roomcarousel" alt="...">
                                <div class="carousel-caption d-none d-md-block ">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="roomdesc container">
                    <p>Overview</p>
                    <br>
                    <p>King Size Bed</p>
                    <br>
                    <p>Private Balcony</p>
                    <br>
                    <p>Smart TV</p>
                    <br>
                    <p>Wifi</p>
                    <br>
                    <p>Spa Bathroom</p>
                    <br>
                    <p>Sofa</p>
                    <br>
                    <button><a href="login.html">BOOK NOW</a></button>
                </div>


                <h4 class="facilitytext my-4 mb-5">Deluxe Room</h4>
                <div id="darkbg" class="py-5">
                    <div id="carouselExampleCaptions4" class="carousel slide roomview" data-bs-ride="carousel">
                        <div class="carousel-indicators carouselnostretch">
                            <button type="button" data-bs-target="#carouselExampleCaptions4" data-bs-slide-to="0"
                                class="active " aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions4" data-bs-slide-to="1"
                                class="" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions4" data-bs-slide-to="2"
                                class="" aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active" data-bs-interval="10000">
                                <img src="../Assets/Room3.png" class="d-block w-100 roomcarousel" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                </div>
                            </div>
                            <div class="carousel-item" data-bs-interval="4000">
                                <img src="../Assets/Room3(1).png" class="d-block w-100 roomcarousel" alt="...">
                                <div class="carousel-caption d-none d-md-block ">
                                </div>
                            </div>
                            <div class="carousel-item" data-bs-interval="4000">
                                <img src="../Assets/Room3(2).png" class="d-block w-100 roomcarousel" alt="...">
                                <div class="carousel-caption d-none d-md-block ">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="roomdesc container">
                    <p>Overview</p>
                    <br>
                    <p>Queen Size Bed</p>
                    <br>
                    <p>Private Balcony</p>
                    <br>
                    <p>Smart TV</p>
                    <br>
                    <p>Wifi</p>
                    <br>
                    <p>Spa Bathroom</p>
                    <br>
                    <button><a href="login.html">BOOK NOW</a></button>
                </div>


            </div>

        </div>
    </section>

</body>

</html>