<?php
include 'config.php';

$nama = $_POST['nama'];
$email = $_POST['email'];
$number = $_POST['number'];
$gender = $_POST['gender'];
$password = md5($_POST['password']);
$confirmpassword = md5($_POST['confirmPassword']);

if (!empty($name) || !empty($email) || !empty($number) || !empty($gender) || !empty($password)) {
    


if (mysqli_connect_error($conn)) {
    die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());

} else {
    $SELECT = "SELECT email From `user.data` Where email = ? Limit 1";
    $INSERT = "INSERT INTO `user.data` (nama, email, nomer_telepon, gender, password) VALUES ( ?, ?, ?, ?, ?)";
    
    $stmt = $conn->prepare($SELECT);
    $stmt->bind_param('s', $email);
    $stmt->execute();
    $stmt->bind_result($email);
    $stmt->store_result();
    $rnum = $stmt->num_rows;
    
        
    if ($rnum==0) {
        $stmt->close();
        
        
       

        //echo "Registrasi Berhasil";

        if($password == $confirmpassword){
            $stmt = $conn->prepare($INSERT);
        $stmt->bind_param('ssiss', $nama, $email, $number, $gender, $password);
        $stmt->execute();
            echo
            "<script> alert('Registration Successful, silahkan login'); </script>";
            
            //header("location:user/index.php");
        }else{
            echo
            "<script> alert('Password Does Not Match'); </script>";
        }
        
    } else {
        echo "<script> alert('Email anda sudah terdaftar sebelumnya'); </script>";
        //header("location:register.html");
    }
    $stmt->close();
    $conn->close();
    

}

} else {
echo "All field are required";
die();
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

    <title> Register| Night Stay</title>
</head>

<body>


    <!-- Navbar Section -->
    <nav id="navbari" class="navbar navbar-expand-lg navbar-dark py-0">
        <div class="container">
            <a class="navbar-brand px-0" style="padding-top: 1%;" href="index copy.html">
                <h1 style="padding-left: 3.5px;"><img src="Assets/5.svg" alt="..." height="36"
                        style="margin-bottom: 7px; padding-right: 2%;">NIGHT STAY</h1>
            </a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index copy.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="rooms.html">Rooms</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="booking.html">Book</a>
                    </li>
                    <li class="nav-item helpsupport">
                        <a class="nav-link" href="faq.html">Help/Support</a>
                    </li>
                    <li class="btnlogin nav-item">
                        <a class="nav-link" href="login.html" style="color: black;"><b>Login</b></a>
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
        <div style="text-align: center;">
            <div class="row">
                <div class="col register">
                    <h2><b>REGISTER</b></h2>
                    <br>
                    <form action="register.php" method="post">
                        <div class="form-row entry">
                            <div class="form-group col-md-6">
                                <label for="inputName">Name</label>
                                <input type="name" class="form-control" id="inputName" name="nama" placeholder="Name"
                                    required>
                            </div>
                            <br>
                            <div class="form-group col-md-6">
                                <label for="inputEmail">Email</label>
                                <input type="email" class="form-control" id="inputEmail" name="email"
                                    placeholder="Email">
                            </div>
                            <br>
                            <div class="form-group col-md-6">
                                <label for="inputNumber">Phone Number</label>
                                <input type="number" class="form-control" id="inputNumber" name="number"
                                    placeholder="Phone Number">
                            </div>
                            <br>
                            <label for="gender">Gender</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gender" id="male" value="m">
                                <label class="form-check-label" for="radio1">
                                    Male
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gender" id="female" value="f">
                                <label class="form-check-label" for="radio2">
                                    Female </label>
                            </div>
                            <br>
                            <div class="form-group col-md-6">
                                <label for="inputPassword">Password</label>
                                <input type="password" class="form-control" id="inputPassword" name="password"
                                    placeholder="Password">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputConfirmPassword">Confirm Password</label>
                                <input type="password" class="form-control" id="inputConfirmPassword"
                                    name="confirmPassword" placeholder="Password">
                            </div>
                        </div>
                        <br>

                        <button type="submit" class="btn btn-primary entry" id="submit" name="submit"
                            style="background-color: #6F5034;">Sign in</button>
                    </form>
                </div>
                <div class="col" style="text-align: left; padding-left: 2%;margin-top: 10%; margin-bottom: 10%;">

                </div>

            </div>
        </div>
    </div>


</body>

</html>