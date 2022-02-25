<!-- Project Portofolio
 * Developer    : Muhammad Rafli Putra
 * Company      : Warung Bang Rafli Cell
 * Release Date : 1 Maret 2021
 * Website      : https://www.muhrafliputra26.web.id, https://www.muhrafliputra.com
 * E-mail       : muhrafliputra26business@gmail.com
 * Phone        : +62 ( 404 )
 -->

 <?php
  include('koneksi.php'); //agar index terhubung dengan database, maka koneksi sebagai penghubung harus di include
  
?>
<!DOCTYPE html>
<html lang="en"><head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Data List Harga Produk</title>
    <!-- favicon -->
    <link rel="icon" href="Icon/listharga.png" type="image/png">

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Halaman Admin</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.php">
                <i class="fas fa-home"></i>
                    <span>Bagan Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>
            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="nav-icon fas fa-folder-open"></i>
                    <span>Halaman Admin</span>
                </a>
                <div id="collapseUtilities" class="collapse show" aria-labelledby="headingUtilities" data-parent="#accordionSidebar" style="">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="datalisthargaproduk.php"><i class="fas fa-angle-double-right"></i> Data List Harga Produk</a><br>
                        <a class="collapse-item" href="barangmasuk.php"><i class="fas fa-fw fa-download"></i> Barang Masuk</a><br>
                        <a class="collapse-item" href="barangkeluar.php"><i class="fas fa-fw fa-upload"></i> Barang Keluar</a><br>
                        <a class="collapse-item" href="laporan.php"><i class="fas fa-fw fa-print"></i> Cetak Laporan</a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Addons
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Pengaturan Admin</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="user.php"><i class="fas fa-users"></i> User Management</a><br>
                        <a class="collapse-item" href="login.php"><i class="fas fa-user"></i> Login</a><br>
                        <a class="collapse-item" href="register.php"><i class="fa fa-user-plus"></i> Register</a><br>
                        <a class="collapse-item" href="forgot-password.php"><i class="fas fa-unlock-alt"></i> Forgot Password</a>
                        <div class="collapse-divider"></div>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

            <!-- Sidebar Message -->

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Muhammad Rafli</span>
                                <img class="img-profile rounded-circle" src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="profile.php">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="setting.php">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="ubahpassword.php">
                                    <i class="fas fa-lock fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Ubah Password
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="login.php" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <!-- DataTales Example -->
                    <div class="card">
              <div class="card-body">
    <style type="text/css">
      * {
        font-family: "Trebuchet MS";
      }
      h1 {
        color: #6F04FF;
      }
    table {
      border: solid 1px #DDEEEE;
      border-collapse: collapse;
      border-spacing: 0;
      width: 70%;
      margin: 10px auto 10px auto;
    }
    table thead th {
        background-color: #DDEEEE;
        border: solid 1px #DDEEEE;
        color: #000000;
        padding: 10px;
        text-align: left;
        text-shadow: 1px 1px 1px #fff;
        text-decoration: none;
    }
    table tbody td {
        border: solid 1px #DDEEEE;
        color: #333;
        padding: 10px;
        text-shadow: 1px 1px 1px #fff;
    }
    a {
          background-color: #4169E1;
          color: #fff;
          padding: 10px;
          text-decoration: none;
          font-size: 12px;
    }
    </style>
  <div class="card-body">
  <a href="tambah_produk.php" class="btn btn-primary btn-icon-split"><span class="text"><i class="fa fa-fw fa-plus-circle"></i> Tambah Produk Penjualan</span></a><br><br>
  <center><h2>Data List Harga Produk Indomie</h2></center>
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

                        <span id="date_time">Friday 25 June 2021 16:23:00</span>
                        <script type="text/javascript">
                            window.onload = date_time('date_time');
                        </script>
                    </center>
    <table>
      <thead>
        <tr>
          <th>No</th>
          <th>Nama Produk</th>
          <th>Dekripsi</th>
          <th>Harga Beli</th>
          <th>Harga Jual</th>
          <th>Stok Barang</th>
          <th>Gambar Produk</th>
          <th>Pengaturan</th>
        </tr>
    </thead>
    <tbody>
      <?php
      // jalankan query untuk menampilkan semua data diurutkan berdasarkan nim
      $query = "SELECT * FROM produk ORDER BY id ASC";
      $result = mysqli_query($koneksi, $query);
      //mengecek apakah ada error ketika menjalankan query
      if(!$result){
        die ("Query Error: ".mysqli_errno($koneksi).
           " - ".mysqli_error($koneksi));
      }

      //buat perulangan untuk element tabel dari data mahasiswa
      $no = 1; //variabel untuk membuat nomor urut
      // hasil query akan disimpan dalam variabel $data dalam bentuk array
      // kemudian dicetak dengan perulangan while
      while($row = mysqli_fetch_assoc($result))
      {
      ?>
       <tr>
          <td><?php echo $no; ?></td>
          <td><?php echo $row['nama_produk']; ?></td>
          <td><?php echo substr($row['deskripsi'], 0, 20); ?></td>
          <td>Rp <?php echo number_format($row['harga_beli'],0,',','.'); ?></td>
          <td>Rp <?php echo $row['harga_jual']; ?></td>
          <td><?php echo number_format($row['stok_barang'],0,',','.'); ?></td>
          <td style="text-align: center;"><img src="gambar/<?php echo $row['gambar_produk']; ?>" style="width: 120px;"></td>
          <td>
          <button type="button" class="btn btn-primary btn-lg"><a href="edit_produk.php?id=<?php echo $row['id']; ?>"><i class="fa fa-edit"></i> Ubah Produk</a></button><br><br><button type="button" class="btn btn-primary btn-lg btn-block"><a href="proses_hapus.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Anda yakin akan menghapus data ini?')"><i class="fa fa-trash"></i> Hapus Produk</a></button>
          </td>
      </tr>
         
      <?php
        $no++; //untuk nomor urut terus bertambah 1
      }
      ?>
    </tbody>
    </table>
    <!-- Footer -->
    <br>
            <center>Copyright &#169; 2021 All Rights Reserved<br>Design With
                <font color='red'>&#10084; </font>
                <font color='black'><b>By Muhammad Rafli<br><u>4.0.4</u> <u>Not</u> <u>Found</u></b></a></font>
            </center><br>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
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

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>
</body>
</html>