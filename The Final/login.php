<?php 
include 'config.php';
 
$email = $_POST['email'];
$password = md5($_POST['password']);
 
//$login = mysql_query("select * from user.data where email='$email' and password='$password'");
//$login = "SELECT email and password From `user.data` Where email = '$email' and password='$password'";
//$cek = num_row($login);

$user = mysqli_query($conn,"SELECT * From `user.data` Where email='$email' and password='$password'");
$cek = mysqli_num_rows($user);
 
if($cek > 0){
	session_start();
    $row = mysqli_fetch_array($user);
	$_SESSION['nama_user'] = $row['nama'];
	$_SESSION['email_user'] = $row['email'];
	$_SESSION['gender_user'] = $row['gender'];
	$_SESSION['number_user'] = $row['nomer_telepon'];
	$_SESSION['status'] = "login";
	header("location:user/index.php");
}else{
	echo
    "<script> alert('Password Does Not Match'); </script>";
	//header("location:login.html");	
}

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
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Javascript LINK -->
    <script type="text/javascript" src="javascripts.js"></script>

    <!-- JS LINK -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>

    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <title>Login</title>
</head>

<body>


    <!-- Navbar Section -->
    <nav id="navbar" class="navbar navbar-expand-lg navbar-dark py-0">
        <div class="container">
            <a class="navbar-brand px-0" style="padding-top: 1%;" href="index.html">
                <h1 style="padding-left: 3.5px;"><img src="Assets/5.svg" alt="..." height="36"
                        style="margin-bottom: 7px; padding-right: 2%;">NIGHT STAY</h1>
            </a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="rooms.html">Rooms</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="booking.html">Book</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="facilities.html">Facilities</a>
                    </li>
                    <li class="nav-item helpsupport">
                        <a class="nav-link" href="faq.html">Help/Support</a>
                    </li>
                    <li class="btnlogin nav-item currentpage">
                        <a class="nav-link" style="color: black;"><b>Login</b></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="aboutus.html">About</a>
                    </li>
                </ul>
            </div>

        </div>
    </nav>


    <!-- Page Content -->
    <div class="parallax">
        <div class="loginpage container">
            <div class="loginbg">
                <h1 style="margin-top: 1%; margin-bottom: 1%;">Login</h1>
                <form class="loginform" onSubmit="return validasi()" action="login.php" method="post">
                    <div class="form-group">

                        <input type="email" class="form-control entrylogin2" id="exampleInputEmail1"
                            aria-describedby="emailHelp" placeholder="Enter email" name="email">

                    </div>
                    <div class="form-group">

                        <input type="password" class="form-control entrylogin2" id="exampleInputPassword1"
                            placeholder="Password" name="password">
                    </div>
                    <button type="submit" class="btn btn-primary my-3">Submit</button>
                </form>
                <p>Don't have an account yet? <a href="register.html">Create one</a></p>
            </div>
        </div>
    </div>


</body>


<script type="text/javascript">
    function validasi() {
        var email = document.getElementById("exampleInputEmail1").value;
        var password = document.getElementById("exampleInputPassword1").value;
        if (email != "" && password != "") {
            return true;
        } else {
            alert('Email dan Password harus di isi !');
            return false;
        }
    }

</script>

</html>

