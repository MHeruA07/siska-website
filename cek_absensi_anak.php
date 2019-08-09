<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <title>SISKA Admin Dashboard</title>
    <!-- Bootstrap Core CSS -->
    <link href="css/lib/bootstrap/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/helper.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>

<body class="fix-header fix-sidebar">
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
			<circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>

    <div id="main-wrapper">
        <div class="header">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.html">
                        <b><img src="images/logo.png" alt="homepage" class="dark-logo" /></b>
                        <span><img src="images/logo-text.png" alt="homepage" class="dark-logo" /></span>
                    </a>
                </div>

                <div class="navbar-collapse">
                    <ul class="navbar-nav mr-auto mt-md-0">
                        <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted  " href="javascript:void(0)"><i class="mdi mdi-menu"></i></a> </li>
                        <li class="nav-item m-l-10"> <a class="nav-link sidebartoggler hidden-sm-down text-muted  " href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
                    </ul>

                    <ul class="navbar-nav my-lg-0">
                        <li class="nav-item hidden-sm-down search-box"> <a class="nav-link hidden-sm-down text-muted  " href="javascript:void(0)"><i class="ti-search"></i></a>
                            <form class="app-search">
                                <input type="text" class="form-control" placeholder="Search here"> <a class="srh-btn"><i class="ti-close"></i></a> </form>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>

        <?php include 'menu.php';?>

        <div class="page-wrapper">
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-warning">Dashboard</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Orang Tua</a></li>
                        <li class="breadcrumb-item active">Lihat Absensi</li>
                    </ol>
                </div>
            </div>

            <div class="container-fluid">
              <div class="row">
                   <div class="col-lg-12">
                       <div class="card card-outline-warning">
                           <div class="card-header">
                               <h4 class="m-b-0 text-white">Data Absensi Anak</h4>
                           </div>

                           <div class="card-body card-block">
                               <div class="row form-group"></div>
                               <div class="row form-group">
                                   <div class="col-4">
                                     <select name="select" id="mata-pelajaran" class="form-control" required>
                                         <option disabled selected>Mata Pelajaran</option>
                                         <option value="mtk">Matematika</option>
                                         <option value="b ind">Bahasa Indonesia</option>
                                         <option value="b ing">Bahasa Inggris</option>
                                         <option value="fisika">Fisika</option>
                                     </select>
                                   </div>
                                   <div class="col-8"></div>
                               </div>
                               <div class="row form-group">
                                   <div class="col-md-1"></div>
                                   <div class="col-4 col-md-3"><label for="nama-guru" class=" form-control-label">Nama</label></div>
                                   <div class="col-1 col-md-1"><h5>:</h5></div>
                                   <div class="col-6 col-md-6"><h5 id="nama-guru" class="text-field">Zainul Ramadhan</h5></div>
                                   <div class="col-md-1"></div>
                               </div>
                               <div class="row form-group">
                                   <div class="col-md-1"></div>
                                   <div class="col-4 col-md-3"><label for="nama-guru" class=" form-control-label">Kelas</label></div>
                                   <div class="col-1 col-md-1"><h5>:</h5></div>
                                   <div class="col-6 col-md-6"><h5 id="nama-guru" class="text-field">2 Akuntansi 3</h5></div>
                                   <div class="col-md-1"></div>
                               </div>
                               <div class="row form-group">
                                   <div class="col-md-1"></div>
                                   <div class="col-4 col-md-3"><label for="nama-guru" class=" form-control-label">18/07/2019</label></div>
                                   <div class="col-1 col-md-1"><h5>:</h5></div>
                                   <div class="col-6 col-md-6"><h5 id="nama-guru" class="text-field">Hadir</h5></div>
                                   <div class="col-md-1"></div>
                               </div>
                               <div class="row form-group">
                                   <div class="col-md-1"></div>
                                   <div class="col-4 col-md-3"><label for="nama-guru" class=" form-control-label">25/07/2019</label></div>
                                   <div class="col-1 col-md-1"><h5>:</h5></div>
                                   <div class="col-6 col-md-6"><h5 id="nama-guru" class="text-field">Ijin</h5></div>
                                   <div class="col-md-1"></div>
                               </div>
                           </div>
                       </div>
                   </div>
             </div>
      </div>
    <footer class="footer"> © 2019 Designed by Hefday</footer>

    <!-- All Jquery -->
    <script src="js/lib/jquery/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="js/lib/bootstrap/js/popper.min.js"></script>
    <script src="js/lib/bootstrap/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="js/jquery.slimscroll.js"></script>
    <!--Menu sidebar -->
    <script src="js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="js/lib/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <!--Custom JavaScript -->
    <script src="js/custom.min.js"></script>

</body>

</html>
