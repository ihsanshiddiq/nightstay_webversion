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

  <title> Help & Support | Night Stay</title>
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
                    <li><a class="dropdown-item" href="facilities.php" style="color: black;">Facilities</a>
                    </li>
                    <li><a class="dropdown-item" href="dinebar.php" style="color: black">Dine & Bar</a></li>
                </ul>
            </li>

                <li class="nav-item">
                    <a class="nav-link" href="booking.php">Book</a>
                </li>
          <li class="nav-item helpsupport">
            <a class="nav-link active currentpage">Help/Support</a>
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
  <section class="parallaxfaq">

    <div class="container containerfaq">
      <div class="contentfaq">

        <h1 class="hfaq"><u>Help & Support</u></h1>
        <h3 class="hfaq">Frequently Asked Questions</h3>
        <p>
          <a class="btn" data-bs-toggle="collapse" href="#q1" role="button" aria-expanded="false"
            aria-controls="collapseExample">
            1. How do I create an account?
          </a>
        </p>
        <div class="collapse faqq" id="q1">
          <div class="card card-body">
            Some placeholder content for the collapse component. This panel is hidden by default but revealed when the
            user
            activates the relevant trigger.
          </div>
        </div>
        <p>
          <a class="btn" data-bs-toggle="collapse" href="#q2" role="button" aria-expanded="false"
            aria-controls="collapseExample">
            2. How do I book a room?
          </a>
        </p>
        <div class="collapse faqq" id="q2">
          <div class="card card-body">
            Some placeholder content for the collapse component. This panel is hidden by default but revealed when the
            user
            activates the relevant trigger.
          </div>
        </div>
        <p>
          <a class="btn" data-bs-toggle="collapse" href="#q3" role="button" aria-expanded="false"
            aria-controls="collapseExample">
            3. I found a bug
          </a>
        </p>
        <div class="collapse faqq" id="q3">
          <div class="card card-body">
            You can use this link below to write your report or problem. <br><br>

            <a href="https://mail.google.com/mail/?view=cm&fs=1&to=nightstay165@gmail.com&su=Bug Report&body="
              target="_blank">
              <button type="button" class="btn" id="mailreport" name="report"
                style="background-color: #6F5034; color: white;">Send us an
                Email Report</button>
            </a>
          </div>
        </div>
      </div>

      <!--////////////////////////////////////////////////////////////////////////////-->

    </div>
  </section>


</body>

</html>