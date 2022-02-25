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
if( isset($_SESSION['user']) ) header('Location: index.php');
//mengecek apakah data username yang diinpukan user kosong atau tidak
if( isset($_POST['submit']) ){
        
        // menghilangkan backshlases
        $username = stripslashes($_POST['username']);
        //cara sederhana mengamankan dari sql injection
        $username = mysqli_real_escape_string($con, $username);
        $name     = stripslashes($_POST['name']);
        $name     = mysqli_real_escape_string($con, $name);
        $email    = stripslashes($_POST['email']);
        $email    = mysqli_real_escape_string($con, $email);
        $password = stripslashes($_POST['password']);
        $password = mysqli_real_escape_string($con, $password);
        $repass   = stripslashes($_POST['repassword']);
        $repass   = mysqli_real_escape_string($con, $repass);
        //cek apakah nilai yang diinputkan pada form ada yang kosong atau tidak
        if(!empty(trim($name)) && !empty(trim($username)) && !empty(trim($email)) && !empty(trim($password)) && !empty(trim($repass))){
            //mengecek apakah password yang diinputkan sama dengan re-password yang diinputkan kembali
            if($password == $repass){
                //memanggil method cek_nama untuk mengecek apakah user sudah terdaftar atau belum
                if( cek_nama($name,$con) == 0 ){
                    //hashing password sebelum disimpan didatabase
                    $pass  = password_hash($password, PASSWORD_DEFAULT);
                    //insert data ke database
                    $query = "INSERT INTO user (username,name,email, password ) VALUES ('$username','$nama','$email','$pass')";
                    $result   = mysqli_query($con, $query);
                    //jika insert data berhasil maka akan diredirect ke halaman index.php serta menyimpan data username ke session
                    if ($result) {
                        $_SESSION['username'] = $username;
                       
                        header('Location: index.php');
                    
                    //jika gagal maka akan menampilkan pesan error
                    } else {
                        $error =  'Register User Gagal !!';
                    }
                }else{
                        $error =  'Username sudah terdaftar !!';
                }
            }else{
                $validate = 'Password tidak sama !!';
            }
            
        }else {
            $error =  'Data tidak boleh kosong !!';
        }
    } 

    //fungsi untuk mengecek username apakah sudah terdaftar atau belum
    function cek_nama($username,$con){
        $nama = mysqli_real_escape_string($con, $username);
        $query = "SELECT * FROM users WHERE username = '$nama'";
        if( $result = mysqli_query($con, $query) ) return mysqli_num_rows($result);
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

    <title>Register Akun</title>
    <!-- favicon -->
    <link rel="icon" href="Icon/registericon.png" type="image/png">

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

        <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body">
                <h4 class="header-title"><i class="fas fa-user-plus"></i> Daftar Sign-Up</h4>
                    <?php if($error != ''){ ?>
                        <div class="alert alert-danger" role="alert"><?= $error; ?></div>
                    <?php } ?>
                <hr>
                <form method="POST">
                    <input type="hidden" id="csrf_token" name="csrf_token" value="0868dc5e311e6c2ccb04a1760007e8b2243a40928490293b8022d25252daa244">                    <div class="form-group">
                        <label>Nama Lengkap</label>
                        <div class="input-group input-group-alternative">
                                        <div class="input-group-prepend">
                                          <span class="input-group-text"><i class="fa fa-user"></i></span>
                                        </div>
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Masukkan Nama Lengkap">
                                    </div>
                    </div>
                    <div class="form-group">
                        <label>Alamat Email</label>
                        <div class="input-group input-group-alternative">
                                        <div class="input-group-prepend">
                                          <span class="input-group-text"><i class="far fa-envelope"></i></span>
                                        </div>
                                        <input type="email" class="form-control" id="InputEmail" name="email" aria-describeby="emailHelp" placeholder="Masukkan Email Anda Contoh rafliputrabusiness@gmail.com">
                                    </div>
                    </div>
                    <div class="form-group">
                    <label>Username</label>
                        <div class="input-group input-group-alternative">
                                        <div class="input-group-prepend">
                                          <span class="input-group-text"><i class="fa fa-user"></i></span>
                                        </div>
                                        <input type="text" class="form-control" id="username" name="username" placeholder="Masukkan Username Anda">
                                    </div>
                    </div>
                    <div class="form-group">
                    <label>Password</label>
                        <div class="input-group input-group-alternative">
                                        <div class="input-group-prepend">
                                          <span class="input-group-text"><i class="fa fa-lock"></i></span>
                                        </div>
                                        <input type="password" class="form-control" id="InputPassword" name="password" placeholder="Password">
                                        <?php if($validate != '') {?>
                                            <p class="text-danger"><?= $validate; ?></p>
                                        <?php }?>
                                    </div>
                    </div>
                    <div class="form-group">
                    <label>Konfirmasi Password</label>
                        <div class="input-group input-group-alternative">
                                        <div class="input-group-prepend">
                                          <span class="input-group-text"><i class="fa fa-lock"></i></span>
                                        </div>
                                        <input type="password" class="form-control" id="InputRePassword" name="repassword" placeholder="Konfirmasi-Password">
                                        <?php if($validate != '') {?>
                                            <p class="text-danger"><?= $validate; ?></p>
                                        <?php }?>
                                    </div>
                    </div>
                    <div class="form-group text-right">
                        <button type="submit" name="reset" class="btn btn-danger waves-effect waves-light"><i class="fas fa-sync-alt"></i> Reset</button>
                        <button type="submit" name="submit" class="btn btn-primary waves-effect waves-light"><i class="fas fa-chevron-circle-right"></i> Submit</button>
                        
                        <hr>
                                <a href="#" class="btn btn-google btn-user btn-block">
                                    <i class="fab fa-google fa-fw"></i> Register with Google
                                </a>
                                <a href="#" class="btn btn-facebook btn-user btn-block">
                                    <i class="fab fa-facebook-f fa-fw"></i> Register with Facebook
                                </a>
                            
                            <hr>
                            <div class="text-center">
                                <a class="small" href="forgot-password.php">Forgot Password?</a>
                            </div>
                            <div class="text-center">
                                <a class="small" href="login.php">Already have an account? Login!</a>
                                <br><br>
            <center>Copyright © 2021 All Rights Reserved<br>Design With
                <font color="red">❤ </font>
                <font color="black"><b>By Muhammad Rafli<br><u>4.0.4</u> <u>Not</u> <u>Found</u></b></font>
            </center>
                    </div>
                
            </div></form>
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