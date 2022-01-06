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

    <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"
        integrity="sha256-xH4q8N0pEzrZMaRmd7gQVcTZiFei+HfRTBPJ1OGXC0k=" crossorigin="anonymous"></script>

    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Alex Brush' rel='stylesheet'>


    <!-- Other -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">

    <title> Booking | Night Stay</title>


    <style>
        input[type="date"]::-webkit-datetime-edit,
        input[type="date"]::-webkit-inner-spin-button,
        input[type="date"]::-webkit-clear-button {
            color: #fff;
            position: relative;
        }

        input[type="date"]::-webkit-datetime-edit-year-field {
            position: absolute !important;
            border-left: 1px solid #8c8c8c;
            padding: 2px;
            color: #000;
            left: 56px;
        }

        input[type="date"]::-webkit-datetime-edit-month-field {
            position: absolute !important;
            border-left: 1px solid #8c8c8c;
            padding: 2px;
            color: #000;
            left: 26px;
        }


        input[type="date"]::-webkit-datetime-edit-day-field {
            position: absolute !important;
            color: #000;
            padding: 2px;
            left: 4px;

        }
    </style>


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
                    <a class="nav-link" aria-current="page" href="index.php">Home</a>
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
                    <a class="nav-link active currentpage" href="booking.php">Book</a>
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
    <div class="parallaxdineandbar">
        <div class="container" style="padding-top: 1vh; padding-bottom: 35vh; text-align: center;">
            <div style="text-align: center; padding-left: 2%;margin-top: 10%; margin-bottom: 10%; ">
                <h1>Book a room</h1>
                <div class="row" style="color: white;">
                    <div class="col">
                        <input type="date" value="2019-12-07" name="startDate" id="startDate" />
                    </div>
                    <div class="col">
                        <input type="date" value="2019-12-07" name="endDate" id="endDate" />
                    </div>
                </div>
    
    
                <div class="roomspace">
    
                    <label for="roomspace" style="color: white; font-size: 27px; text-shadow: 2px 2px 4px #000000;;">Room
                        Type</label>
                    <div class="form-check roomtype">
                        <label class="form-check-label" for="radio1"
                            style="color: white; font-size: 25px; text-shadow: 2px 2px 4px #000000;;">
                            Deluxe Room
                        </label>
                        <input class="form-check-input" type="radio" name="tipekamar" id="deluxe" value="deluxe">
                    </div>
                    <div class="form-check roomtype">
                        <label class="form-check-label" for="radio2"
                            style="color: white; font-size: 25px; text-shadow: 2px 2px 4px #000000;;">
                            President Suite </label>
                        <input class="form-check-input" type="radio" name="tipekamar" id="president" value="president">
                    </div>
                    <div class="form-check roomtype">
                        <label class="form-check-label" for="radio3"
                            style="color: white; font-size: 25px; text-shadow: 2px 2px 4px #000000;;">
                            Royal Suite </label>
                        <input class="form-check-input" type="radio" name="tipekamar" id="royal" value="royal">
                    </div>
    
    
                </div>
    
    
                <button onclick="getduration2()" type="button" class="datecheck2 my-3" id="datecheck2" name="Check2"
                    style="background-color: #6F5034; color: white; border-radius: 7px;">Check</button>
    
                <div class="pricing">
                    <p style="font-size: 24px; font-family: Poppins; text-shadow: 2px 2px 4px #000000;;">Deluxe Room - $14.99</p>
                    <p style="font-size: 24px; font-family: Poppins; text-shadow: 2px 2px 4px #000000;;">President Suite - $19.99</p>
                    <p style="font-size: 24px; font-family: Poppins; text-shadow: 2px 2px 4px #000000;;">Royal Suite - $29.99</p>
                    <p style="font-size: 24px; font-family: Poppins; text-shadow: 2px 2px 4px #000000;;">(Above are prices per night)</p>
                </div>
    
    
            </div>
        </div>
    </div>

    <div class="facilities">
        
        <div class="container">
    
            <h4 class="facilitytext my-4 mb-5">Royal Suite</h4>
            <div id="darkbg" class="py-5">
                <div id="carouselExampleCaptions2" class="carousel slide roomview" data-bs-ride="carousel">
                    <div class="carousel-indicators carouselnostretch">
                        <button type="button" data-bs-target="#carouselExampleCaptions2" data-bs-slide-to="0" class="active " aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions2" data-bs-slide-to="1" class="" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions2" data-bs-slide-to="2" class="" aria-label="Slide 3"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions2" data-bs-slide-to="3" class="" aria-label="Slide 3"></button>
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
            </div>

            
            <h4 class="facilitytext my-4 mb-5">President Suite</h4>
            <div id="darkbg" class="py-5">
                <div id="carouselExampleCaptions3" class="carousel slide roomview" data-bs-ride="carousel">
                    <div class="carousel-indicators carouselnostretch">
                        <button type="button" data-bs-target="#carouselExampleCaptions3" data-bs-slide-to="0" class="active " aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions3" data-bs-slide-to="1" class="" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions3" data-bs-slide-to="2" class="" aria-label="Slide 3"></button>
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
            </div>


            <h4 class="facilitytext my-4 mb-5">Deluxe Room</h4>
            <div id="darkbg" class="py-5">
                <div id="carouselExampleCaptions4" class="carousel slide roomview" data-bs-ride="carousel">
                    <div class="carousel-indicators carouselnostretch">
                        <button type="button" data-bs-target="#carouselExampleCaptions4" data-bs-slide-to="0" class="active " aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions4" data-bs-slide-to="1" class="" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions4" data-bs-slide-to="2" class="" aria-label="Slide 3"></button>
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
            </div>
            

        </div>
    
    </div>

</body>

<script type="text/javascript">
    
    function getduration2() {

        var date1 = new Date(document.getElementById("startDate").value);
        var date2 = new Date(document.getElementById("endDate").value);
        var timeDiff = Math.abs(date2.getTime() - date1.getTime());
        var diffDays = Math.ceil(timeDiff / (1000 * 3600 * 24));
        if (date1 > date2) {
            alert('TANGGAL AWAL TIDAK BOLEH LEBIH BESAR DARI TANGGAL AKHIR')
        } else {
            alert(diffDays)
        }


    }

</script>

</html>