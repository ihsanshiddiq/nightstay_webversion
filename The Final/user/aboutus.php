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

    <title> About Us | Night Stay</title>

    <style>
        .photo {
  width: 50vh;
  box-shadow: 30px 30px #6F5034;
  margin-left: 10vh;
}
.photol {
  width: 50vh;
  margin-left: 15vh;
  box-shadow: 30px 30px #6F5034;
}

.abtdescl {
  text-align: right; 
}

.abtdescr {
  text-align: left;
}

.abt {
  margin-top: 5%;
  margin-bottom: 5%;
}

.abtdescl p {
  font-size: 24px;
}
.abtdescl h5 {
  font-size: 40px;
}

.abtdescr p {
  font-size: 24px;
}
.abtdescr h5 {
  font-size: 40px;
}

    </style>
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
                        <a class="nav-link  active currentpage" href="#">About</a>
                    </li>
                </ul>
            </div>

        </div>
    </nav>


    <!-- Page Content -->
    <div class="parallaxaboutus">
        <div class="container" style="padding-top: 7%; padding-bottom: 4.80%; text-align: center;">
            <div class="row">
                <div class="col px-0">
                    <img src="../Assets/logo white (title).svg" style="width: 100%; height: 100%;">
                </div>
                <div class="col"
                    style="text-align: left; padding-left: 2%;margin-top: 10%; margin-bottom: 10%; border-left: 3px white solid;">
                    <h1><u>Nightstay V4</u></h1>
                    <br>
                    <p>Nightstay was created to help ease the process of booking for our rooms.
                        Nightstay V4 is the website version of the previous nightstay client application.
                        Made by four lazy people, within 7 days of clutching.
                    </p>

                    <br>

                    <p>
                        Credits: Glico | Ceruleaf | kertaskocak | akupipul <br> <br>
                    </p>
                    <h3><i>~ Anywhere, Anytime. ~</i></h3>

                </div>

            </div>
        </div>
    </div>

    <section class="aboutus py-5">
        <div class="container">
            <p class="aboutquote py-4"><u>Credits</u></p>
            <div class="row abt">
                <div class="col abtdescl">
                    <h5>Ihsan Shiddiq</h5>
                    <p>Database <<br>
                            Javascript <<br>
                                Logic <<br>
                                    PHP < <br>
                                        HTML < </p>
                </div>
                <div class="col">
                    <img src="../Assets/fotoihsan.jpg" class="photo">
                </div>
            </div>
            <div class="row abt">
                <div class="col">
                    <img src="../Assets/fotozaky.jpeg" class="photol">
                </div>
                <div class="col abtdescr">
                    <h5>Alif Zaky</h5>
                    <p>> HTML <br>
                        > Javascript <br>
                        > CSS <br>


                    </p>
                </div>
            </div>
            <div class="row abt">
                <div class="col abtdescl">
                    <h5>Damar Adji</h5>
                    <p>Figma Design <<br>
                            HTML <<br>
                                CSS <<br>
                    </p>
                </div>
                <div class="col">
                    <img src="../Assets/fotodamar.jpeg" class="photo">
                </div>
            </div>
            <div class="row abt">
                <div class="col">
                    <img src="../Assets/fotopipeh.jpg" class="photol">
                </div>
                <div class="col abtdescr">
                    <h5>Afifah Khairiyyah</h5>
                    <p>> Figma Design<br>
                        > Assets<br>
                        > UI<br>
                    </p>
                </div>
            </div>
        </div>
    </section>

</body>

</html>