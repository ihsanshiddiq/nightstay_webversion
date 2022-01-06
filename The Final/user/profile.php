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


    <title>My Profile</title>

    <style>
        .profile{
        margin-top: 15vh;

        }
        .innerProfile{
        background-color: #6F5034;
        color: white;
        border-radius: 15px;
        padding-bottom: 3vh;
        padding-top: 3vh;

        }
        .innerProfile h3{
            padding-left: 2vh;
            padding-bottom: 3vh;
            border-bottom: solid black 3px;
        }
        .innerProfile p{
            padding-left: 2vh;
        }
    </style>
</head>

<body>


    <!-- Navbar Section -->
    <nav id="navbar" class="navbar navbar-expand-lg navbar-dark py-0">
        <div class="container">
            <a class="navbar-brand px-0" style="padding-top: 1%;" href="index copy.html">
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
                        <a class="nav-link" href="booking.php">Book</a>
                    </li>
                                
                    <li class="nav-item helpsupport">
                        <a class="nav-link" href="faq.php">Help/Support</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle active currentpage" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-person-circle">
                            <?php echo $_SESSION['nama_user']?>

                            </i>
                        
                        </a>
                        <ul class="ddbg dropdown-menu" aria-labelledby="navbarDropdown" >
                            <li><a class="dropdown-item" style="color: black;">Profile</a></li>
                            
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

    <div class="profile">

        <div class="container">
            <h1>Profile</h1>
            <br>
            <h2>Account Information</h2>
            <div class="container">
                <div class="innerProfile">
                    <h3>Personal Data</h3>
                    <br>
                    <p>Nama : <?php echo $_SESSION['nama_user']?></p>
                    <p>Email : <?php echo $_SESSION['email_user']?></p>
                    <p>Gender : <?php echo $_SESSION['gender_user']?></p>
                    <p>Phone Number : <?php echo $_SESSION['number_user']?></p>
                    
                </div>
            </div>
        </div>
        
    </div>

</body>


</html>