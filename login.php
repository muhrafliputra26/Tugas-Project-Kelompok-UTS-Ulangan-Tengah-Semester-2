<!-- Project Portofolio
 * Web Developer    : Muhammad Rafli Putra
 * Company      : Warung Bang Rafli Cell
 * Release Date : 1 Maret 2021
 * Website      : https://www.muhrafliputra26.web.id, https://www.muhrafliputra.com
 * E-mail       : muhrafliputra26business@gmail.com
 * Phone        : +62 ( 404 )
 ---->

 <?php
//menyertakan file program koneksi.php pada register
require('koneksi.php');
//inisialisasi session
session_start();

$error = '';
$validate = '';

//mengecek apakah sesssion username tersedia atau tidak jika tersedia maka akan diredirect ke halaman index
if( isset($_SESSION['username']) ) header('Location: index.php');

//mengecek apakah form disubmit atau tidak
if( isset($_POST['submit']) ){
        
        // menghilangkan backshlases
        $username = stripslashes($_POST['username']);
        //cara sederhana mengamankan dari sql injection
        $username = mysqli_real_escape_string($con, $username);
         // menghilangkan backshlases
        $password = stripslashes($_POST['password']);
         //cara sederhana mengamankan dari sql injection
        $password = mysqli_real_escape_string($con, $password);
       
        //cek apakah nilai yang diinputkan pada form ada yang kosong atau tidak
        if(!empty(trim($username)) && !empty(trim($password))){

            //select data berdasarkan username dari database
            $query      = "SELECT * FROM users WHERE username = '$username'";
            $result     = mysqli_query($con, $query);
            $rows       = mysqli_num_rows($result);

            if ($rows != 0) {
                $hash   = mysqli_fetch_assoc($result)['password'];
                if(password_verify($password, $hash)){
                    $_SESSION['username'] = $username;
               
                    header('Location: index.php');
                }
                            
            //jika gagal maka akan menampilkan pesan error
            } else {
                $error =  'Register User Gagal !!';
            }
            
        }else {
            $error =  'Data tidak boleh kosong !!';
        }
    } 

?>
 
 <!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login Akun</title>
    <!-- favicon -->
    <link rel="icon" href="Icon/loginicon.png" type="image/png">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            
                            <div class="col-lg-12">
                                <div class="p-5">
                                    <div class="text-center">
                                    <form class="form-container" action="login.php" method="POST">
                                        <h1 class="h4 text-gray-900 mb-4"> <i class="fas fa-user"></i> Welcome Sign-In</h1>
                                        <?php if($error != ''){ ?>
                                            <div class="alert alert-danger" role="alert"><?= $error; ?></div>
                                        <?php } ?>
                                    </div>
                                    <form class="user">
                                    <div class="form-group">
                                            <div class="input-group input-group-alternative">
                                        <div class="input-group-prepend">
                                          <span class="input-group-text"><i class="fa fa-user"></i></span>
                                        </div>
                                        <input type="text" class="form-control" name="user" placeholder="Ussername">
                                    </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="input-group input-group-alternative">
                                        <div class="input-group-prepend">
                                          <span class="input-group-text"><i class="fa fa-lock"></i></span>
                                        </div>
                                        <input type="password" class="form-control" name="pass" placeholder="Password">
                                        <?php if($validate != '') {?>
                                            <p class="text-danger"><?= $validate; ?></p>
                                        <?php }?>
                                        
                                    </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                                <label class="custom-control-label" for="customCheck">Ingat saya</label>
                                            </div>
                                        </div>
                                        <button class="btn btn-block btn-primary" type="submit" name="submit"><i class="fas fa-sign-in-alt"></i>  Masuk </button>
                                        <hr>
                                        <a href="#" class="btn btn-google btn-user btn-block">
                                            <i class="fab fa-google fa-fw"></i> Login with Google
                                        </a>
                                        <a href="#" class="btn btn-facebook btn-user btn-block">
                                            <i class="fab fa-facebook-f fa-fw"></i> Login with Facebook
                                        </a>
                                    </form>
                                    <hr>
                                    <center><div class="form-footer mt-2">
                                    <p> <b>Lupa Kata Sandi?</b> <a href="forgot-password.php"><br><button type="button" class="btn btn-outline-danger"><i class="fas fa-unlock-alt"></i> Klik Disini</button></a></p></div></center>
                                    <center><div class="form-footer mt-2">
                                    <p> <b>Belum Punya Account?</b> <a href="register.php"><br><button type="button" class="btn btn-outline-success"><i class="fas fa-user-plus"></i> Register</button></a></p></div></center><br>

            <center>Copyright © 2021 All Rights Reserved<br>Design With
                <font color="red">❤ </font>
                <font color="black"><b>By Muhammad Rafli<br><u>4.0.4</u> <u>Not</u> <u>Found</u></b></font>
            </center>
                                </div>
                            </div>
                        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>