<html lang="en"><head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Profile | Aplikasi Pengadaan Barang</title>

    <!-- Custom fonts for this template-->
    <link href="http://localhost/IK619/ci_pengadaan_barang-master/assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="http://localhost/IK619/ci_pengadaan_barang-master/assets/css/fonts.min.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="http://localhost/IK619/ci_pengadaan_barang-master/assets/css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Datepicker -->
    <link href="http://localhost/IK619/ci_pengadaan_barang-master/assets/vendor/daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- DataTables -->
    <link href="http://localhost/IK619/ci_pengadaan_barang-master/assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link href="http://localhost/IK619/ci_pengadaan_barang-master/assets/vendor/datatables/buttons/css/buttons.bootstrap4.min.css" rel="stylesheet">
    <link href="http://localhost/IK619/ci_pengadaan_barang-master/assets/vendor/datatables/responsive/css/responsive.bootstrap4.min.css" rel="stylesheet">
    <link href="http://localhost/IK619/ci_pengadaan_barang-master/assets/vendor/gijgo/css/gijgo.min.css" rel="stylesheet">

    <style>
        #accordionSidebar,
        .topbar {
            z-index: 1;
        }
    </style>
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
                    <h1 class="h3 mb-4 text-gray-800">Profile</h1>

                    <div class="card p-2 shadow-sm border-bottom-primary">
    <div class="card-header"><i class="fa fa-fw fa-plus-circle"></i> <strong>Add Produk Penjualan Indomie</strong> <a href="index.php" class="float-right btn btn-dark btn-sm"><i class="fas fa-arrow-circle-left"></i> Kembali</a></div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-2 mb-4 mb-md-0">
                <img src="http://localhost/IK619/ci_pengadaan_barang-master/assets/img/avatar/d5f22535b639d55be7d099a7315e1f7f.png" alt="" class="img-thumbnail rounded mb-2">
                <a href="http://localhost/IK619/ci_pengadaan_barang-master/profile/setting" class="btn btn-sm btn-block btn-primary"><i class="fa fa-edit"></i> Edit Profile</a>
                <a href="http://localhost/IK619/ci_pengadaan_barang-master/profile/ubahpassword" class="btn btn-sm btn-block btn-primary"><i class="fa fa-lock"></i> Ubah Password</a>
            </div>
            <div class="col-md-10">
                <table class="table">
                    <tbody><tr>
                        <th width="200">Username</th>
                        <td>admin</td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td>admin@admin.com</td>
                    </tr>
                    <tr>
                        <th>Nomor Telepon</th>
                        <td>025123456789</td>
                    </tr>
                    <tr>
                        <th>Role</th>
                        <td class="text-capitalize">admin</td>
                    </tr>
                </tbody></table>
            </div>
        </div>
    </div>
</div>
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-light">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright © Aplikasi Pengadaan Barang 2019 • by <a href="https://www.arfan.id">Arfan.id</a></span>
                    </div>
                </div>
            </footer>
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
                    <h5 class="modal-title" id="exampleModalLabel">Yakin ingin logout?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Klik "Logout" dibawah ini jika anda yakin ingin logout.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Batalkan</button>
                    <a class="btn btn-primary" href="http://localhost/IK619/ci_pengadaan_barang-master/logout">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="http://localhost/IK619/ci_pengadaan_barang-master/assets/vendor/jquery/jquery.min.js"></script>
    <script src="http://localhost/IK619/ci_pengadaan_barang-master/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="http://localhost/IK619/ci_pengadaan_barang-master/assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="http://localhost/IK619/ci_pengadaan_barang-master/assets/js/sb-admin-2.min.js"></script>

    <!-- Datepicker -->
    <script src="http://localhost/IK619/ci_pengadaan_barang-master/assets/vendor/daterangepicker/moment.min.js"></script>
    <script src="http://localhost/IK619/ci_pengadaan_barang-master/assets/vendor/daterangepicker/daterangepicker.min.js"></script>

    <!-- Page level plugins -->
    <script src="http://localhost/IK619/ci_pengadaan_barang-master/assets/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="http://localhost/IK619/ci_pengadaan_barang-master/assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>
    <script src="http://localhost/IK619/ci_pengadaan_barang-master/assets/vendor/datatables/buttons/js/dataTables.buttons.min.js"></script>
    <script src="http://localhost/IK619/ci_pengadaan_barang-master/assets/vendor/datatables/buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="http://localhost/IK619/ci_pengadaan_barang-master/assets/vendor/datatables/jszip/jszip.min.js"></script>
    <script src="http://localhost/IK619/ci_pengadaan_barang-master/assets/vendor/datatables/pdfmake/pdfmake.min.js"></script>
    <script src="http://localhost/IK619/ci_pengadaan_barang-master/assets/vendor/datatables/pdfmake/vfs_fonts.js"></script>
    <script src="http://localhost/IK619/ci_pengadaan_barang-master/assets/vendor/datatables/buttons/js/buttons.html5.min.js"></script>
    <script src="http://localhost/IK619/ci_pengadaan_barang-master/assets/vendor/datatables/buttons/js/buttons.print.min.js"></script>
    <script src="http://localhost/IK619/ci_pengadaan_barang-master/assets/vendor/datatables/buttons/js/buttons.colVis.min.js"></script>
    <script src="http://localhost/IK619/ci_pengadaan_barang-master/assets/vendor/datatables/responsive/js/dataTables.responsive.min.js"></script>
    <script src="http://localhost/IK619/ci_pengadaan_barang-master/assets/vendor/datatables/responsive/js/responsive.bootstrap4.min.js"></script>

    <script src="http://localhost/IK619/ci_pengadaan_barang-master/assets/vendor/gijgo/js/gijgo.min.js"></script>

    <script type="text/javascript">
        $(function() {
            $('.date').datepicker({
                uiLibrary: 'bootstrap4',
                format: 'yyyy-mm-dd'
            });

            var start = moment().subtract(29, 'days');
            var end = moment();

            function cb(start, end) {
                $('#tangal').val(start.format('YYYY-MM-DD') + ' - ' + end.format('YYYY-MM-DD'));
            }

            $('#tanggal').daterangepicker({
                startDate: start,
                endDate: end,
                ranges: {
                    'Hari ini': [moment(), moment()],
                    'Kemarin': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                    '7 hari terakhir': [moment().subtract(6, 'days'), moment()],
                    '30 hari terakhir': [moment().subtract(29, 'days'), moment()],
                    'Bulan ini': [moment().startOf('month'), moment().endOf('month')],
                    'Bulan lalu': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')],
                    'Tahun ini': [moment().startOf('year'), moment().endOf('year')],
                    'Tahun lalu': [moment().subtract(1, 'year').startOf('year'), moment().subtract(1, 'year').endOf('year')]
                }
            }, cb);

            cb(start, end);
        });

        $(document).ready(function() {
            var table = $('#dataTable').DataTable({
                buttons: ['copy', 'csv', 'print', 'excel', 'pdf'],
                dom: "<'row px-2 px-md-4 pt-2'<'col-md-3'l><'col-md-5 text-center'B><'col-md-4'f>>" +
                    "<'row'<'col-md-12'tr>>" +
                    "<'row px-2 px-md-4 py-3'<'col-md-5'i><'col-md-7'p>>",
                lengthMenu: [
                    [5, 10, 25, 50, 100, -1],
                    [5, 10, 25, 50, 100, "All"]
                ],
                columnDefs: [{
                    targets: -1,
                    orderable: false,
                    searchable: false
                }]
            });

            table.buttons().container().appendTo('#dataTable_wrapper .col-md-5:eq(0)');
        });
    </script>
    <script type="text/javascript">
        let hal = 'profile';

        let satuan = $('#satuan');
        let stok = $('#stok');
        let total = $('#total_stok');
        let jumlah = hal == 'barangmasuk' ? $('#jumlah_masuk') : $('#jumlah_keluar');

        $(document).on('change', '#barang_id', function() {
            let url = 'http://localhost/IK619/ci_pengadaan_barang-master/barang/getstok/' + this.value;
            $.getJSON(url, function(data) {
                satuan.html(data.nama_satuan);
                stok.val(data.stok);
                total.val(data.stok);
                jumlah.focus();
            });
        });

        $(document).on('keyup', '#jumlah_masuk', function() {
            let totalStok = parseInt(stok.val()) + parseInt(this.value);
            total.val(Number(totalStok));
        });

        $(document).on('keyup', '#jumlah_keluar', function() {
            let totalStok = parseInt(stok.val()) - parseInt(this.value);
            total.val(Number(totalStok));
        });
    </script>

    

</body></html>