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
    <link href='https://fonts.googleapis.com/css?family=Alex Brush' rel='stylesheet'>

    <!-- Other -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">

    <title> Dine & Bar | Night Stay</title>
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
    <div class="parallaxdineandbar">
        <div class="container" style="padding-top: 22vh; padding-bottom: 40vh; text-align: center;">
            <div style="text-align: center; padding-left: 2%;margin-top: 10%; margin-bottom: 10%; ">
                <h1>Dine</h1>
                <br>
                <p>Fine & Relaxed Dining
                </p>
                <br>
            </div>
        </div>
    </div>

    <section class="dineandbar py-5">
        <div class="container">
            <div class="row my-5">
                <div class="col abtdescl">
                    <p class="dineandbardesc1 py-4"><i>Aliqua id fugiat nostrud irure ex duis</i></p>
                    <p> Aliqua id fugiat nostrud irure ex duis quis id quis ad et. Sunt qui esse pariatur duis deserunt
                        mollit dolore cillum minim tempor enim. Elit aute
                        irure tempor cupidatat incididunt sint deserunt ut voluptate aute id deserunt nisi. Aliqua id
                        fugiat nostrud irure ex duis quis id quis ad et. Sunt qui esse pariatur duis deserunt mollit
                        dolore cillum minim tempor enim. Elit aute
                        irure tempor cupidatat incididunt sint deserunt ut voluptate aute id deserunt nisi. </p>
                </div>
                <div class="col photo">
                    <img src="../Assets/dine1.png" style="height:500px; width: 600px; margin-left: 100px;">
                </div>
            </div>
            <div class="row my-5">
                <div class="col photo">
                    <img src="../Assets/dine2.jpg" style="height: 95vh; width: 70vh;">
                </div>
                <div class="col abtdescr">
                    <img src="../Assets/dine3.jpg" style="height: 45vh; width: 70vh;">
                    <img src="../Assets/dine4.jpg" style="height: 45vh; width: 70vh; margin-top: 38px;">
                </div>
            </div>
            <div class="row my-5">
                <div class="col abtdescl">
                    <img src="../Assets/food1.jpg" style="height: min-content; width: min-content;">
                </div>
                <div class="col photo">
                    <p class="dineandbardesc2 py-4"><i>Aliqua id fugiat nostrud irure ex duis</i></p>
                    <p class="dineandbardesc2text"> Aliqua id fugiat nostrud irure ex duis quis id quis ad et. Sunt qui
                        esse pariatur duis deserunt mollit dolore cillum minim tempor enim. Elit aute
                        irure tempor cupidatat incididunt sint deserunt ut voluptate aute id deserunt nisi. Aliqua id
                        fugiat nostrud irure ex duis quis id quis ad et. Sunt qui esse pariatur duis deserunt mollit
                        dolore cillum minim tempor enim. Elit aute
                        irure tempor cupidatat incididunt sint deserunt ut voluptate aute id deserunt nisi. </p>
                </div>
            </div>
            <div class="row my-5">
                <div class="col photo">
                    <img src="../Assets/food2.jpg" style="height: 90vh; width: 70vh;">
                    <img src="../Assets/food4.jpeg" style="height: 70vh; width: 70vh; margin-top: 10vh;">
                    <img src="../Assets/food6.jpg" style="height: 60vh; width: 70vh; margin-top: 10vh;">
                </div>
                <div class="col abtdescr">
                    <img src="../Assets/food3.jpg" style="height: 90vh; width: 70vh;">
                    <img src="../Assets/food5.jpg" style="height: 70vh; width: 70vh;margin-top: 10vh;">
                    <img src="../Assets/food7.jpg" style="height: 60vh; width: 70vh; margin-top: 10vh;">
                </div>
            </div>
        </div>
    </section>

    <div class="parallaxdineandbar2">
        <div class="container" style="padding-top: 7%; padding-bottom: 4.80%; text-align: center;">
            <div style="text-align: center; padding-left: 2%;margin-top: 10%; margin-bottom: 10%; ">
                <h1 class="cantik">Bar</h1>
            </div>
        </div>
    </div>

    <section class="dineandbar py-5">
        <div class="container">
            <div class="row my-5">
                <div class="col abtdescl">
                    <p class="dineandbardesc1 py-4"><i>Aliqua id fugiat nostrud irure ex duis</i></p>
                    <p> Aliqua id fugiat nostrud irure ex duis quis id quis ad et. Sunt qui esse pariatur duis deserunt
                        mollit dolore cillum minim tempor enim. Elit aute
                        irure tempor cupidatat incididunt sint deserunt ut voluptate aute id deserunt nisi. Aliqua id
                        fugiat nostrud irure ex duis quis id quis ad et. Sunt qui esse pariatur duis deserunt mollit
                        dolore cillum minim tempor enim. Elit aute
                        irure tempor cupidatat incididunt sint deserunt ut voluptate aute id deserunt nisi. </p>
                </div>
                <div class="col photo">
                    <img src="../Assets/bar1.jpg" style="height:460px; width: 600px; margin-left: 100px;">
                </div>
            </div>
            <div class="row my-5">
                <div class="col photo">
                    <img src="../Assets/bar2.jpg" style="height: 95vh; width: 70vh;">
                </div>
                <div class="col abtdescr">
                    <img src="../Assets/bar3.jpg" style="height: 95vh; width: 70vh;">
                </div>
            </div>
            <div class="row my-5">
                <div class="col photo">
                    <img src="../Assets/bar4.jpg" style="height: 50vh; width: 70vh;">
                </div>
                <div class="col abtdescr">
                    <img src="../Assets/bar5.jpg" style="height: 50vh; width: 70vh;">
                </div>
            </div>
        </div>
    </section>

</body>

</html>