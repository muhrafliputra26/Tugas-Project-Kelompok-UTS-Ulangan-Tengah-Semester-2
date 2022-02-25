<!-- Project Portofolio
 * Developer    : Muhammad Rafli Putra
 * Company      : Warung Bang Rafli Cell
 * Release Date : 1 Maret 2021
 * Website      : https://www.muhrafliputra26.web.id, https://www.muhrafliputra.com
 * E-mail       : muhrafliputra26business@gmail.com
 * Phone        : +62 ( 404 )
 -->

<?php
  // memanggil file koneksi.php untuk membuat koneksi
include 'koneksi.php';

  // mengecek apakah di url ada nilai GET id
  if (isset($_GET['id'])) {
    // ambil nilai id dari url dan disimpan dalam variabel $id
    $id = ($_GET["id"]);

    // menampilkan data dari database yang mempunyai id=$id
    $query = "SELECT * FROM produk WHERE id='$id'";
    $result = mysqli_query($koneksi, $query);
    // jika data gagal diambil maka akan tampil error berikut
    if(!$result){
      die ("Query Error: ".mysqli_errno($koneksi).
         " - ".mysqli_error($koneksi));
    }
    // mengambil data dari database
    $data = mysqli_fetch_assoc($result);
      // apabila data tidak ada pada database maka akan dijalankan perintah ini
       if (!count($data)) {
          echo "<script>alert('Data tidak ditemukan pada database');window.location='index.php';</script>";
       }
  } else {
    // apabila tidak ada data GET id pada akan di redirect ke index.php
    echo "<script>alert('Masukkan data id.');window.location='index.php';</script>";
  }         
  ?>
<!DOCTYPE html>
<html lang="en"><head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Latihan Edit Produk</title>
    <!-- favicon -->
    <link rel="icon" href="Icon/keranjang.jpg" type="image/png">

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
                <div id="collapseUtilities" class="collapse show" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="datalisthargaproduk.php"><i class="fas fa-angle-double-right"></i> Data List Harga Produk</a><br>
                        <a class="collapse-item" href="supplier.php"><i class="fas fa-fw fa-users"></i> Supplier</a><br>
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
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><b>Muhammad Rafli</b></span>
                                <img class="img-profile rounded-circle" src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
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

			<div class="card-header"><i class="fa fa-fw fa-plus-circle"></i> <strong>Edit Produk Mie Goreng</strong> <a href="datalisthargaproduk.php" class="float-right btn btn-dark btn-sm"><i class="fas fa-arrow-circle-left"></i> Kembali</a></div>

			<div class="card-body">
  <body>
      <center>
        <h1>Edit Produk <?php echo $data['nama_produk']; ?></h1>
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
                    </center><br>
      <form method="POST" action="proses_edit.php" enctype="multipart/form-data" >
      <section class="base">
        <!-- menampung nilai id produk yang akan di edit -->
        <input name="id" value="<?php echo $data['id']; ?>"  hidden />
        <div>
        <label><span class="text-danger">*</span> <b>Nama Produk</b></label><br>
          <input type="text" class="form-control" id="nama_produk" name="nama_produk" value="<?php echo $data['nama_produk']; ?>" autofocus="" required="" />
        </div>
        <div><br>
        <label><span class="text-danger">*</span> <b>Deskripsi</b></label><br>
         <input type="text" class="form-control" id="deskripsi" name="deskripsi" value="<?php echo $data['deskripsi']; ?>" />
        </div>
        <div><br>
        <label><span class="text-danger">*</span> <b>Harga Beli</b></label><br>
         <input type="text" class="form-control" id="harga_beli" name="harga_beli" required=""value="<?php echo $data['harga_beli']; ?>" />
        </div>
        <div><br>
        <label><span class="text-danger">*</span> <b>Harga Jual</b></label><br>
         <input type="text" class="form-control" id="harga_jual" name="harga_jual" required="" value="<?php echo $data['harga_jual']; ?>"/>
        </div>
        <div><br>
        <label><span class="text-danger">*</span> <b>Stok Barang</b></label><br>
         <input type="text" class="form-control" id="stok_barang" name="stok_barang" required="" value="<?php echo $data['stok_barang']; ?>"/>
        </div>
        <div>
        <label><span class="text-danger">*</span> <b>Gambar Produk</b></label><br>
          <img src="gambar/<?php echo $data['gambar_produk']; ?>" style="width: 120px;float: left;margin-bottom: 5px;">
          <input type="file" name="gambar_produk" /><br>
          <i style="float: left;font-size: 11px;color: red">Abaikan jika tidak merubah gambar produk</i>
        </div>
        <div><br><br>
        <button type="submit" class="btn btn-primary"><i class="fa fa-fw fa-save"></i> Simpan Produk</button></div></section></form></div>
        
        <!-- Footer -->
    <br>
            <center>Copyright &#169; 2021 All Rights Reserved<br>Design With
                <font color='red'>&#10084; </font>
                <font color='black'><b>By Muhammad Rafli<br><u>4.0.4</u> <u>Not</u> <u>Found</u></b></a></font>
            </center><br>
            <!-- End of Footer -->
		</div>
        </div>
        </section>
      </form>
  </body>
</html>