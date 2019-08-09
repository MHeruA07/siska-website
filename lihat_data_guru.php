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
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Data Guru</a></li>
                        <li class="breadcrumb-item active">Lihat Data Guru</li>
                    </ol>
                </div>
            </div>

            <div class="container-fluid">
              <div class="row">
                   <div class="col-lg-12">
                       <div class="card card-outline-warning">
                           <div class="card-header">
                               <h4 class="m-b-0 text-white">Data Guru</h4>
                           </div>

                           <div class="card-body card-block">
                               <div class="row form-group"></div>
                               <div class="row form-group">
                                   <div class="col-4"></div>
                                   <div class="col-4 centerize-from-col"><img src="images/account-image.png" id="foto-guru" class="rounded-photo"></div>
                                   <div class="col-4"></div>
                               </div>
                               <div class="row form-group">
                                   <div class="col-md-1"></div>
                                   <div class="col-4 col-md-3"><label for="id-guru" class=" form-control-label">Nomor Identitas Penduduk (NIP)</label></div>
                                   <div class="col-1 col-md-1"><h5>:</h5></div>
                                   <div class="col-6 col-md-6"><h5 id="id-guru" class="text-field">5115100902960019</h5></div>
                                   <div class="col-md-1"></div>
                               </div>
                               <div class="row form-group">
                                   <div class="col-md-1"></div>
                                   <div class="col-4 col-md-3"><label for="nama-guru" class=" form-control-label">Nama</label></div>
                                   <div class="col-1 col-md-1"><h5>:</h5></div>
                                   <div class="col-6 col-md-6"><h5 id="nama-guru" class="text-field">Arif Afifi Ramadhan, S.SI</h5></div>
                                   <div class="col-md-1"></div>
                               </div>
                               <div class="row form-group">
                                   <div class="col-md-1"></div>
                                   <div class="col-4 col-md-3"><label for="ttl-guru" class=" form-control-label">Tempat & Tanggal Lahir</label></div>
                                   <div class="col-1 col-md-1"><h5>:</h5></div>
                                   <div class="col-6 col-md-6"><h5 id="ttl-guru" class="text-field">Sidoarjo, 09/02/1996</h5></div>
                                   <div class="col-md-1"></div>
                               </div>
                               <div class="row form-group">
                                   <div class="col-md-1"></div>
                                   <div class="col-4 col-md-3"><label for="gender-guru" class=" form-control-label">Jenis Kelamin</label></div>
                                   <div class="col-1 col-md-1"><h5>:</h5></div>
                                   <div class="col-6 col-md-6"><h5 id="gender-guru" class="text-field">Laki-laki</h5></div>
                                   <div class="col-md-1"></div>
                               </div>
                               <div class="row form-group">
                                   <div class="col-md-1"></div>
                                   <div class="col-4 col-md-3"><label for="alamat-guru" class=" form-control-label">Alamat</label></div>
                                   <div class="col-1 col-md-1"><h5>:</h5></div>
                                   <div class="col-6 col-md-6"><h5 id="alamat-guru" class="text-field">Desa Mulyodadi RT 04 RW 17, Wonoayu, Sidoarjo</h5></div>
                                   <div class="col-md-1"></div>
                               </div>
                               <div class="row form-group">
                                   <div class="col-md-1"></div>
                                   <div class="col-4 col-md-3"><label for="nmr-hp-guru" class=" form-control-label">Nomor HP</label></div>
                                   <div class="col-1 col-md-1"><h5>:</h5></div>
                                   <div class="col-6 col-md-6"><h5 id="nmr-hp-guru" class="text-field">082133423796</h5></div>
                                   <div class="col-md-1"></div>
                               </div>
                               <div class="row form-group">
                                   <div class="col-md-1"></div>
                                   <div class="col-4 col-md-3"><label for="pendidikan-guru" class=" form-control-label">Pendidikan</label></div>
                                   <div class="col-1 col-md-1"><h5>:</h5></div>
                                   <div class="col-6 col-md-6"><h5 id="pendidikan-guru" class="text-field">S1 (Strata 1)</h5></div>
                                   <div class="col-md-1"></div>
                               </div>
                               <div class="row form-group">
                                   <div class="col-md-1"></div>
                                   <div class="col-4 col-md-3"><label for="jabatan-guru" class=" form-control-label">Jabatan</label></div>
                                   <div class="col-1 col-md-1"><h5>:</h5></div>
                                   <div class="col-6 col-md-6"><h5 id="jabatan-guru" class="text-field">Pengajar</h5></div>
                                   <div class="col-md-1"></div>
                               </div>
                               <div class="row form-group">
                                   <div class="col-md-1"></div>
                                   <div class="col-4 col-md-3"><label for="bidang-ajar-guru" class=" form-control-label">Bidang Ajar</label></div>
                                   <div class="col-1 col-md-1"><h5>:</h5></div>
                                   <div class="col-6 col-md-6"><h5 id="bidang-ajar-guru" class="text-field">Pemrograman</h5></div>
                                   <div class="col-md-1"></div>
                               </div>
                               <div class="row form-group">
                                   <div class="col-md-1"></div>
                                   <div class="col-4 col-md-3"><label for="is-wali-kelas" class=" form-control-label">Akses Wali Kelas</label></div>
                                   <div class="col-1 col-md-1"><h5>:</h5></div>
                                   <div class="col-6 col-md-6"><h5 id="is-wali-kelas" class="text-field">Aktif</h5></div>
                                   <div class="col-md-1"></div>
                               </div>
                               <div class="row form-group">
                                   <div class="col-md-1"></div>
                                   <div class="col-4 col-md-3"><label for="status-guru" class=" form-control-label">Status</label></div>
                                   <div class="col-1 col-md-1"><h5>:</h5></div>
                                   <div class="col-6 col-md-6"><h5 id="status-guru" class="text-field">Aktif</h5></div>
                                   <div class="col-md-1"></div>
                               </div>
                           </div>

                           <div class="form-actions">
                             <div class="row">
                               <div class="col-4 centerize-from-col">
                                 <button type="button" class="btn btn-warning"> <i class="fa fa-chevron-left"></i> Sebelumnya</button>
                               </div>
                               <div class="col-4 centerize-from-col">
                                 <button type="button" class="btn btn-danger"> <i class="fa fa-trash"></i> Hapus</button>
                               </div>
                               <div class="col-4 centerize-from-col">
                                 <button type="button" class="btn btn-warning">Selanjutnya <i class="fa fa-chevron-right"></i></button>
                               </div>
                             </div>
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
