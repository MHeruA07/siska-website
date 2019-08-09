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
                        <li class="breadcrumb-item active">Input Data Guru</li>
                    </ol>
                </div>
            </div>

            <div class="container-fluid">
              <div class="row">
                   <div class="col-lg-12">
                       <div class="card card-outline-warning">
                           <div class="card-header">
                               <h4 class="m-b-0 text-white">Masukkan Data Guru</h4>
                           </div>
                           <div class="card-body card-block">
                               <form action="#" method="post" enctype="multipart/form-data" class="form-horizontal">
                                   <div class="row form-group"></div>
                                   <div class="row form-group">
                                       <div class="col col-md-3"><label for="foto-guru" class=" form-control-label">Foto</label></div>
                                       <div class="col col-md-1"><h5>:</h5></div>
                                       <div class="col-12 col-md-8"><input type="file" id="foto-guru" accept="image/*" class="form-control-file"></div>
                                   </div>
                                   <div class="row form-group">
                                       <div class="col col-md-3"><label for="id-guru" class=" form-control-label">Nomor Identitas Penduduk (NIP)</label></div>
                                       <div class="col col-md-1"><h5>:</h5></div>
                                       <div class="col-12 col-md-8"><input type="number" id="id-guru" placeholder="Masukkan NIP Guru" minLength="16" maxlength="16" class="form-control"><small class="form-text text-muted" required>Contoh : 5115100902960019</small></div>
                                   </div>
                                   <div class="row form-group">
                                       <div class="col col-md-3"><label for="nama-guru" class=" form-control-label">Nama</label></div>
                                       <div class="col col-md-1"><h5>:</h5></div>
                                       <div class="col-12 col-md-8"><input type="text" id="nama-guru" placeholder="Masukkan Nama Guru" class="form-control"><small class="form-text text-muted" required>Contoh : Arif Afifi Ramadhan, S.SI</small></div>
                                   </div>
                                   <div class="row form-group">
                                       <div class="col col-md-3"><label for="tmp-lahir-guru" class=" form-control-label">Tempat Lahir</label></div>
                                       <div class="col col-md-1"><h5>:</h5></div>
                                       <div class="col-12 col-md-8"><input type="text" id="tmp-lahir-guru" placeholder="Masukkan Tempat Lahir Guru" class="form-control"><small class="help-block form-text" required>Contoh: Sidoarjo</small></div>
                                   </div>
                                   <div class="row form-group">
                                       <div class="col col-md-3"><label for="tgl-lahir-guru" class=" form-control-label">Tanggal Lahir</label></div>
                                       <div class="col col-md-1"><h5>:</h5></div>
                                       <div class="col-12 col-md-8"><input type="date" id="tgl-lahir-guru" placeholder="Masukkan Tanggal Lahir Guru" class="form-control"><small class="help-block form-text" required>Contoh : 09/02/1996</small></div>
                                   </div>
                                   <div class="row form-group">
                                       <div class="col col-md-3"><label for="gender-guru" class=" form-control-label">Jenis Kelamin</label></div>
                                       <div class="col col-md-1"><h5>:</h5></div>
                                       <div class="col-12 col-md-8">
                                           <div class="form-check-inline form-check">
                                               <label for="gender-guru1" class="form-check-label ">
                                                   <input type="radio" id="gender-guru1" name="inline-radios" value="laki-laki" class="form-check-input" required>Laki-Laki
                                               </label>
                                               <label for="gender-guru2" class="form-check-label ">
                                                   <input type="radio" id="gender-guru2" name="inline-radios" value="perempuan" class="form-check-input">Perempuan
                                               </label>
                                           </div>
                                       </div>
                                   </div>
                                   <div class="row form-group">
                                       <div class="col col-md-3"><label for="alamat-guru" class=" form-control-label">Alamat</label></div>
                                       <div class="col col-md-1"><h5>:</h5></div>
                                       <div class="col-12 col-md-8"><input type="text" id="alamat-guru" placeholder="Masukkan Alamat Guru" class="form-control"><small class="help-block form-text" required>Contoh: Desa Mulyodadi RT 04 RW 17, Wonoayu, Sidoarjo</small></div>
                                   </div>
                                   <div class="row form-group">
                                       <div class="col col-md-3"><label for="nmr-hp-guru" class=" form-control-label">Nomor HP</label></div>
                                       <div class="col col-md-1"><h5>:</h5></div>
                                       <div class="col-12 col-md-8"><input type="tel" id="nmr-hp-guru" pattern="[0-9]{4}-[0-9]{4}-[0-9]{4}" placeholder="Masukkan Nomor HP Guru" class="form-control" required><small class="help-block form-text">Contoh : 082133423796</small></div>
                                   </div>
                                   <div class="row form-group">
                                       <div class="col col-md-3"><label for="pendidikan-guru" class=" form-control-label" >Pendidikan</label></div>
                                       <div class="col col-md-1"><h5>:</h5></div>
                                       <div class="col-12 col-md-8">
                                           <select name="select" id="pendidikan-guru" class="form-control" required>
                                               <option disabled selected>Pilih Pendidikan</option>
                                               <option value="sma">SMA / SMK</option>
                                               <option value="d3">D3 (Diploma 3)</option>
                                               <option value="s1">D4 (Diploma 4) / S1 (Strata 1)</option>
                                               <option value="s2">S2 (Strata 2)</option>
                                               <option value="s3">S3 (Strata 3)</option>
                                           </select>
                                       </div>
                                   </div>
                                   <div class="row form-group">
                                       <div class="col col-md-3"><label for="jabatan-guru" class=" form-control-label" >Jabatan</label></div>
                                       <div class="col col-md-1"><h5>:</h5></div>
                                       <div class="col-12 col-md-8">
                                           <select name="select" id="jabatan-guru" class="form-control" required>
                                               <option disabled selected>Pilih Jabatan</option>
                                               <option value="kepsek">Kepala Sekolah</option>
                                               <option value="waka1">Waka 1</option>
                                               <option value="waka2">Waka 2</option>
                                               <option value="waka3">Waka 3</option>
                                               <option value="bendahara">Bendahara</option>
                                               <option value="pengajar">Pengajar</option>
                                               <option value="pegawai">Pegawai</option>
                                           </select>
                                       </div>
                                   </div>
                                   <div class="row form-group">
                                       <div class="col col-md-3"><label for="bidang-ajar-guru" class=" form-control-label">Bidang Ajar</label></div>
                                       <div class="col col-md-1"><h5>:</h5></div>
                                       <div class="col-12 col-md-8"><input type="text" id="bidang-ajar-guru" placeholder="Masukkan Bidang Ajar Guru" class="form-control" required><small class="help-block form-text">Contoh : Pemrograman</small></div>
                                   </div>
                                   <div class="row form-group">
                                       <div class="col col-md-3"><label class=" form-control-label">Akses Wali Kelas</label></div>
                                       <div class="col col-md-1"><h5>:</h5></div>
                                       <div class="col-12 col-md-8">
                                           <div class="form-check">
                                               <div class="checkbox">
                                                   <label for="is-wali-kelas" class="form-check-label ">
                                                       <input type="checkbox" id="is-wali-kelas" value="wali-kelas" class="form-check-input" required>Aktif
                                                   </label>
                                               </div>
                                           </div>
                                       </div>
                                   </div>
                                   <div class="row form-group">
                                       <div class="col col-md-3"><label class=" form-control-label">Status</label></div>
                                       <div class="col col-md-1"><h5>:</h5></div>
                                       <div class="col col-md-8">
                                           <div class="form-check">
                                               <div class="radio">
                                                   <label for="status1" class="form-check-label ">
                                                       <input type="radio" id="status1" name="radios" value="aktif" class="form-check-input" required>Aktif
                                                   </label>
                                               </div>
                                               <div class="radio">
                                                   <label for="status2" class="form-check-label ">
                                                       <input type="radio" id="status2" name="radios" value="cuti" class="form-check-input">Cuti
                                                   </label>
                                               </div>
                                               <div class="radio">
                                                   <label for="status3" class="form-check-label ">
                                                       <input type="radio" id="status3" name="radios" value="dinas" class="form-check-input">Dinas
                                                   </label>
                                               </div>
                                           </div>
                                       </div>
                                   </div>
                               </form>
                           </div>
                           <div class="form-actions">
                             <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> Simpan</button>
                             <button type="reset" class="btn btn-danger"> <i class="fa fa-close"></i> Batal</button>
                           </div>
                       </div>
                </div>
            </div>
        </div>
        <!-- End of Container Fluid -->
      </div>
      <!-- End of Main -->
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
