<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Lupa Kata Sandi Akun</title>
    <!-- favicon -->
    <link rel="icon" href="Icon/gembokpassword.png" type="image/png">

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
                <div class="card">
            <div class="card-body">
                <h4><i class="fas fa-unlock-alt"></i> <u>Forgot</u> <u>Your</u> <u>Password?</u></h4>
<center>Kami Mengerti, Hal-Hal Yang Terjadi Kepada Anda. Cukup Masukkan Alamat Email Anda Di Bawah Ini Dan Kami Akan Mengirimkan Tautan Untuk Mengatur Ulang Kata Sandi Anda!</center>
<br>
<center>
                                    <!--?php
                                        date_default_timezone_set("Asia/Bangkok");
                                        ?-->
            
                                    <script type="text/javascript">
                                        function date_time(id) {
                                            date = new Date;
                                            year = date.getFullYear();
                                            month = date.getMonth();
                                            months = new Array('January', 'February', 'March', 'April', 'May', 'June', 'Jully', 'August', 'September', 'October', 'November', 'December');
                                            d = date.getDate();
                                            day = date.getDay();
                                            days = new Array('Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday');
                                            h = date.getHours();
                                            if (h < 10) {
                                                h = "0" + h;
                                            }
                                            m = date.getMinutes();
                                            if (m < 10) {
                                                m = "0" + m;
                                            }
                                            s = date.getSeconds();
                                            if (s < 10) {
                                                s = "0" + s;
                                            }
                                            result = '' + days[day] + ' ' + d + ' ' + months[month] + ' ' + year + ' ' + h + ':' + m + ':' + s;
                                            document.getElementById(id).innerHTML = result;
                                            setTimeout('date_time("' + id + '");', '1000');
                                            return true;
                                        }
                                    </script>
            
                                    <span id="date_time">Saturday 30 January 2021 11:33:50</span>
                                    <script type="text/javascript">
                                        window.onload = date_time('date_time');
                                    </script>
                                </center>
                <hr>
                <form class="user">
                                        <div class="form-group">
                                            <input type="email" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter Email Address...">
                                        </div>
                                        <a href="login.php" class="btn btn-primary btn-user btn-block">
                                            Reset Password
                                        </a>
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="register.php">Create an Account!</a>
                                    </div>
                                    <div class="text-center">
                                        <a class="small" href="login.php">Already have an account? Login!</a></div>
            </div>

            <center>Copyright © 2021 All Rights Reserved<br>Design With
                <font color="red">❤ </font>
                <font color="black"><b>By Muhammad Rafli<br><u>4.0.4</u> <u>Not Found</u></b></font>
            </center><br>
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