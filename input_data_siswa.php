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
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Wali Kelas</a></li>
                        <li class="breadcrumb-item active">Tambah Siswa</li>
                    </ol>
                </div>
            </div>

            <div class="container-fluid">
              <div class="row">
                   <div class="col-lg-12">
                       <div class="card card-outline-warning">
                           <div class="card-header">
                               <h4 class="m-b-0 text-white">Masukkan Data Siswa</h4>
                           </div>
                           <div class="card-body card-block">
                               <form action="#" method="post" enctype="multipart/form-data" class="form-horizontal">
                                   <div class="row form-group"></div>
                                   <div class="row form-group">
                                       <div class="col col-md-3"><label for="foto-siswa" class=" form-control-label">Foto</label></div>
                                       <div class="col col-md-1"><h5>:</h5></div>
                                       <div class="col-12 col-md-8"><input type="file" id="foto-siswa" accept="image/*" class="form-control-file"></div>
                                   </div>
                                   <div class="row form-group">
                                       <div class="col col-md-3"><label for="id-siswa" class=" form-control-label">Nomor Identitas Siswa (NIS)</label></div>
                                       <div class="col col-md-1"><h5>:</h5></div>
                                       <div class="col-12 col-md-8"><input type="number" id="id-siswa" placeholder="Masukkan NIS Siswa" minLength="6" maxlength="6" class="form-control"><small class="form-text text-muted" required>Contoh : 000019</small></div>
                                   </div>
                                   <div class="row form-group">
                                       <div class="col col-md-3"><label for="nama-siswa" class=" form-control-label">Nama</label></div>
                                       <div class="col col-md-1"><h5>:</h5></div>
                                       <div class="col-12 col-md-8"><input type="text" id="nama-siswa" placeholder="Masukkan Nama Siswa" class="form-control"><small class="form-text text-muted" required>Contoh : Zainul Ramadhan</small></div>
                                   </div>
                                   <div class="row form-group">
                                       <div class="col col-md-3"><label for="tmp-lahir-siswa" class=" form-control-label">Tempat Lahir</label></div>
                                       <div class="col col-md-1"><h5>:</h5></div>
                                       <div class="col-12 col-md-8"><input type="text" id="tmp-lahir-siswa" placeholder="Masukkan Tempat Lahir Siswa" class="form-control"><small class="help-block form-text" required>Contoh: Sidoarjo</small></div>
                                   </div>
                                   <div class="row form-group">
                                       <div class="col col-md-3"><label for="tgl-lahir-siswa" class=" form-control-label">Tanggal Lahir</label></div>
                                       <div class="col col-md-1"><h5>:</h5></div>
                                       <div class="col-12 col-md-8"><input type="date" id="tgl-lahir-siswa" placeholder="Masukkan Tanggal Lahir Siswa" class="form-control"><small class="help-block form-text" required>Contoh : 05/05/1998</small></div>
                                   </div>
                                   <div class="row form-group">
                                       <div class="col col-md-3"><label for="gender-siswa" class=" form-control-label">Jenis Kelamin</label></div>
                                       <div class="col col-md-1"><h5>:</h5></div>
                                       <div class="col-12 col-md-8">
                                           <div class="form-check-inline form-check">
                                               <label for="gender-siswa1" class="form-check-label ">
                                                   <input type="radio" id="gender-siswa1" name="inline-radios" value="laki-laki" class="form-check-input" required>Laki-Laki
                                               </label>
                                               <label for="gender-siswa2" class="form-check-label ">
                                                   <input type="radio" id="gender-siswa2" name="inline-radios" value="perempuan" class="form-check-input">Perempuan
                                               </label>
                                           </div>
                                       </div>
                                   </div>
                                   <div class="row form-group">
                                       <div class="col col-md-3"><label for="alamat-siswa" class=" form-control-label">Alamat</label></div>
                                       <div class="col col-md-1"><h5>:</h5></div>
                                       <div class="col-12 col-md-8"><input type="text" id="alamat-siswa" placeholder="Masukkan Alamat Siswa" class="form-control"><small class="help-block form-text" required>Contoh: Desa Mulyodadi RT 10 RW 17, Wonoayu, Sidoarjo</small></div>
                                   </div>
                                   <div class="row form-group">
                                       <div class="col col-md-3"><label for="agama-siswa" class=" form-control-label">Agama</label></div>
                                       <div class="col col-md-1"><h5>:</h5></div>
                                       <div class="col-12 col-md-8"><input type="text" id="agama-siswa" placeholder="Masukkan Agama Siswa" class="form-control"><small class="help-block form-text" required>Contoh: Islam</small></div>
                                   </div>
                                   <div class="row form-group">
                                       <div class="col col-md-3"><label for="nmr-hp-siswa" class=" form-control-label">Nomor HP</label></div>
                                       <div class="col col-md-1"><h5>:</h5></div>
                                       <div class="col-12 col-md-8"><input type="tel" id="nmr-hp-siswa" pattern="[0-9]{4}-[0-9]{4}-[0-9]{4}" placeholder="Masukkan Nomor HP Siswa" class="form-control" required><small class="help-block form-text">Contoh : 082133423796</small></div>
                                   </div>
                                   <div class="row form-group">
                                       <div class="col col-md-3"><label for="email-siswa" class=" form-control-label">E-mail</label></div>
                                       <div class="col col-md-1"><h5>:</h5></div>
                                       <div class="col-12 col-md-8"><input type="email" id="email-siswa" placeholder="Masukkan Alamat E-mail Siswa" class="form-control" required><small class="help-block form-text">Contoh : zainul.ramadhan@gmail.com</small></div>
                                   </div>
                                   <div class="row form-group">
                                       <div class="col col-md-3"><label for="kelas-siswa" class=" form-control-label" >Kelas</label></div>
                                       <div class="col col-md-1"><h5>:</h5></div>
                                       <div class="col-12 col-md-8">
                                           <select name="select" id="kelas-siswa" class="form-control" required>
                                               <option disabled selected>Pilih Kelas</option>
                                               <option value="1 ak 1">1 Akuntansi 1</option>
                                               <option value="1 ak 2">1 Akuntansi 2</option>
                                               <option value="3 mm 1">3 Multimedia 1</option>
                                               <option value="3 mm 2">3 Multimedia 2</option>
                                               <option value="2 tkj 1">2 Teknik Komputer Jaringan 1</option>
                                               <option value="2 tsm 1">2 Teknik Sepeda Motor 1</option>
                                               <option value="2 tsm 2">2 Teknik Sepeda Motor 2</option>
                                           </select>
                                       </div>
                                   </div>
                                   <div class="row form-group">
                                       <div class="col col-md-3"><label for="tahun-masuk-siswa" class=" form-control-label">Tahun Masuk</label></div>
                                       <div class="col col-md-1"><h5>:</h5></div>
                                       <div class="col-12 col-md-8"><input type="number" id="tahun-masuk-siswa" placeholder="Masukkan Tahun Masuk Siswa" class="form-control" required><small class="help-block form-text">Contoh : 2014</small></div>
                                   </div>
                                   <div class="row form-group">
                                       <div class="col col-md-3"><label class=" form-control-label">Status</label></div>
                                       <div class="col col-md-1"><h5>:</h5></div>
                                       <div class="col col-md-8">
                                           <div class="form-check">
                                               <div class="radio">
                                                   <label for="status-siswa1" class="form-check-label ">
                                                       <input type="radio" id="status-siswa1" name="radios" value="aktif" class="form-check-input" required>Aktif
                                                   </label>
                                               </div>
                                               <div class="radio">
                                                   <label for="status-siswa2" class="form-check-label ">
                                                       <input type="radio" id="status-siswa2" name="radios" value="lulus" class="form-check-input">Lulus
                                                   </label>
                                               </div>
                                           </div>
                                       </div>
                                   </div>
                               <!-- </form> -->
                           </div>
                           <div class="card-header">
                               <h4 class="m-b-0 text-white">Masukkan Data Orang Tua / Wali</h4>
                           </div>
                           <div class="row form-group"></div>
                           <h5><b>Ayah Kandung :</b></h5>
                           <div class="card-body card-block">
                               <!-- <form action="#" method="post" enctype="multipart/form-data" class="form-horizontal"> -->
                                   <div class="row form-group"></div>
                                   <div class="row form-group">
                                       <div class="col col-md-3"><label for="id-ayah" class=" form-control-label">Nomor Identitas Kependudukan (NIK)</label></div>
                                       <div class="col col-md-1"><h5>:</h5></div>
                                       <div class="col-12 col-md-8"><input type="number" id="id-ayah" placeholder="Masukkan NIK Ayah" minLength="16" maxlength="16" class="form-control"><small class="form-text text-muted" required>Contoh : 5115100502600019</small></div>
                                   </div>
                                   <div class="row form-group">
                                       <div class="col col-md-3"><label for="nama-ayah" class=" form-control-label">Nama</label></div>
                                       <div class="col col-md-1"><h5>:</h5></div>
                                       <div class="col-12 col-md-8"><input type="text" id="nama-ayah" placeholder="Masukkan Nama Ayah" class="form-control"><small class="form-text text-muted" required>Contoh : Zainul Ibnu Ramadhan</small></div>
                                   </div>
                                   <div class="row form-group">
                                       <div class="col col-md-3"><label for="tmp-lahir-ayah" class=" form-control-label">Tempat Lahir</label></div>
                                       <div class="col col-md-1"><h5>:</h5></div>
                                       <div class="col-12 col-md-8"><input type="text" id="tmp-lahir-ayah" placeholder="Masukkan Tempat Lahir Ayah" class="form-control"><small class="help-block form-text" required>Contoh: Sidoarjo</small></div>
                                   </div>
                                   <div class="row form-group">
                                       <div class="col col-md-3"><label for="tgl-lahir-ayah" class=" form-control-label">Tanggal Lahir</label></div>
                                       <div class="col col-md-1"><h5>:</h5></div>
                                       <div class="col-12 col-md-8"><input type="date" id="tgl-lahir-ayah" placeholder="Masukkan Tanggal Lahir Ayah" class="form-control"><small class="help-block form-text" required>Contoh : 05/02/1960</small></div>
                                   </div>
                                   <div class="row form-group">
                                       <div class="col col-md-3"><label for="alamat-ayah" class=" form-control-label">Alamat</label></div>
                                       <div class="col col-md-1"><h5>:</h5></div>
                                       <div class="col-12 col-md-8"><input type="text" id="alamat-ayah" placeholder="Masukkan Alamat Ayah" class="form-control"><small class="help-block form-text" required>Contoh: Desa Mulyodadi RT 10 RW 17, Wonoayu, Sidoarjo</small></div>
                                   </div>
                                   <div class="row form-group">
                                       <div class="col col-md-3"><label for="agama-ayah" class=" form-control-label">Agama</label></div>
                                       <div class="col col-md-1"><h5>:</h5></div>
                                       <div class="col-12 col-md-8"><input type="text" id="agama-ayah" placeholder="Masukkan Agama Ayah" class="form-control"><small class="help-block form-text" required>Contoh: Islam</small></div>
                                   </div>
                                   <div class="row form-group">
                                       <div class="col col-md-3"><label for="pendidikan-ayah" class=" form-control-label" >Pendidikan</label></div>
                                       <div class="col col-md-1"><h5>:</h5></div>
                                       <div class="col-12 col-md-8">
                                           <select name="select" id="pendidikan-ayah" class="form-control" required>
                                               <option disabled selected>Pilih Pendidikan</option>
                                               <option value="sma">SD / MI</option>
                                               <option value="sma">SMP / MTs</option>
                                               <option value="sma">SMA / SMK</option>
                                               <option value="d3">D3 (Diploma 3)</option>
                                               <option value="s1">D4 (Diploma 4) / S1 (Strata 1)</option>
                                               <option value="s2">S2 (Strata 2)</option>
                                               <option value="s3">S3 (Strata 3)</option>
                                           </select>
                                       </div>
                                   </div>
                                   <div class="row form-group">
                                       <div class="col col-md-3"><label for="pekerjaan-ayah" class=" form-control-label">Pekerjaan</label></div>
                                       <div class="col col-md-1"><h5>:</h5></div>
                                       <div class="col-12 col-md-8"><input type="text" id="pekerjaan-ayah" placeholder="Masukkan Pekerjaan Ayah" class="form-control" required><small class="help-block form-text">Contoh : Pedagang</small></div>
                                   </div>
                                   <div class="row form-group">
                                       <div class="col col-md-3"><label for="nmr-hp-ayah" class=" form-control-label">Nomor HP</label></div>
                                       <div class="col col-md-1"><h5>:</h5></div>
                                       <div class="col-12 col-md-8"><input type="tel" id="nmr-hp-ayah" pattern="[0-9]{4}-[0-9]{4}-[0-9]{4}" placeholder="Masukkan Nomor HP Ayah" class="form-control" required><small class="help-block form-text">Contoh : 082133423796</small></div>
                                   </div>
                                   <div class="row form-group">
                                       <div class="col col-md-3"><label for="email-ayah" class=" form-control-label">E-mail</label></div>
                                       <div class="col col-md-1"><h5>:</h5></div>
                                       <div class="col-12 col-md-8"><input type="email" id="email-ayah" placeholder="Masukkan Alamat E-mail Ayah" class="form-control" required><small class="help-block form-text">Contoh : zainul.ibnur@gmail.com</small></div>
                                   </div>
                                   <div class="row form-group">
                                       <div class="col col-md-3"><label class=" form-control-label">Status</label></div>
                                       <div class="col col-md-1"><h5>:</h5></div>
                                       <div class="col col-md-8">
                                           <div class="form-check">
                                               <div class="radio">
                                                   <label for="status-ayah1" class="form-check-label ">
                                                       <input type="radio" id="status-ayah1" name="radios" value="hidup" class="form-check-input" required>Hidup
                                                   </label>
                                               </div>
                                               <div class="radio">
                                                   <label for="status-ayah2" class="form-check-label ">
                                                       <input type="radio" id="status-ayah2" name="radios" value="meninggal" class="form-check-input">Meninggal
                                                   </label>
                                               </div>
                                           </div>
                                       </div>
                                   </div>
                               </div>

                               <div class="row form-group"></div>
                               <h5><b>Ibu Kandung :</b></h5>
                               <div class="card-body card-block">
                               <!-- <form action="#" method="post" enctype="multipart/form-data" class="form-horizontal"> -->
                                   <div class="row form-group"></div>
                                   <div class="row form-group">
                                       <div class="col col-md-3"><label for="id-ibu" class=" form-control-label">Nomor Identitas Kependudukan (NIK)</label></div>
                                       <div class="col col-md-1"><h5>:</h5></div>
                                       <div class="col-12 col-md-8"><input type="number" id="id-ibu" placeholder="Masukkan NIK Ibu" minLength="16" maxlength="16" class="form-control"><small class="form-text text-muted" required>Contoh : 5115100502600019</small></div>
                                   </div>
                                   <div class="row form-group">
                                       <div class="col col-md-3"><label for="nama-ibu" class=" form-control-label">Nama</label></div>
                                       <div class="col col-md-1"><h5>:</h5></div>
                                       <div class="col-12 col-md-8"><input type="text" id="nama-ibu" placeholder="Masukkan Nama Ibu" class="form-control"><small class="form-text text-muted" required>Contoh : Ratih Ramadhani</small></div>
                                   </div>
                                   <div class="row form-group">
                                       <div class="col col-md-3"><label for="tmp-lahir-ibu" class=" form-control-label">Tempat Lahir</label></div>
                                       <div class="col col-md-1"><h5>:</h5></div>
                                       <div class="col-12 col-md-8"><input type="text" id="tmp-lahir-ibu" placeholder="Masukkan Tempat Lahir Ibu" class="form-control"><small class="help-block form-text" required>Contoh: Sidoarjo</small></div>
                                   </div>
                                   <div class="row form-group">
                                       <div class="col col-md-3"><label for="tgl-lahir-ibu" class=" form-control-label">Tanggal Lahir</label></div>
                                       <div class="col col-md-1"><h5>:</h5></div>
                                       <div class="col-12 col-md-8"><input type="date" id="tgl-lahir-ibu" placeholder="Masukkan Tanggal Lahir Ibu" class="form-control"><small class="help-block form-text" required>Contoh : 12/07/1964</small></div>
                                   </div>
                                   <div class="row form-group">
                                       <div class="col col-md-3"><label for="alamat-ibu" class=" form-control-label">Alamat</label></div>
                                       <div class="col col-md-1"><h5>:</h5></div>
                                       <div class="col-12 col-md-8"><input type="text" id="alamat-ibu" placeholder="Masukkan Alamat Ibu" class="form-control"><small class="help-block form-text" required>Contoh: Desa Mulyodadi RT 10 RW 17, Wonoayu, Sidoarjo</small></div>
                                   </div>
                                   <div class="row form-group">
                                       <div class="col col-md-3"><label for="agama-ibu" class=" form-control-label">Agama</label></div>
                                       <div class="col col-md-1"><h5>:</h5></div>
                                       <div class="col-12 col-md-8"><input type="text" id="agama-ibu" placeholder="Masukkan Agama Ibu" class="form-control"><small class="help-block form-text" required>Contoh: Islam</small></div>
                                   </div>
                                   <div class="row form-group">
                                       <div class="col col-md-3"><label for="pendidikan-ibu" class=" form-control-label" >Pendidikan</label></div>
                                       <div class="col col-md-1"><h5>:</h5></div>
                                       <div class="col-12 col-md-8">
                                           <select name="select" id="pendidikan-ibu" class="form-control" required>
                                               <option disabled selected>Pilih Pendidikan</option>
                                               <option value="sma">SD / MI</option>
                                               <option value="sma">SMP / MTs</option>
                                               <option value="sma">SMA / SMK</option>
                                               <option value="d3">D3 (Diploma 3)</option>
                                               <option value="s1">D4 (Diploma 4) / S1 (Strata 1)</option>
                                               <option value="s2">S2 (Strata 2)</option>
                                               <option value="s3">S3 (Strata 3)</option>
                                           </select>
                                       </div>
                                   </div>
                                   <div class="row form-group">
                                       <div class="col col-md-3"><label for="pekerjaan-ibu" class=" form-control-label">Pekerjaan</label></div>
                                       <div class="col col-md-1"><h5>:</h5></div>
                                       <div class="col-12 col-md-8"><input type="text" id="pekerjaan-ibu" placeholder="Masukkan Pekerjaan Ibu" class="form-control" required><small class="help-block form-text">Contoh : Ibu Rumah Tangga</small></div>
                                   </div>
                                   <div class="row form-group">
                                       <div class="col col-md-3"><label for="nmr-hp-ibu" class=" form-control-label">Nomor HP</label></div>
                                       <div class="col col-md-1"><h5>:</h5></div>
                                       <div class="col-12 col-md-8"><input type="tel" id="nmr-hp-ibu" pattern="[0-9]{4}-[0-9]{4}-[0-9]{4}" placeholder="Masukkan Nomor HP Ibu" class="form-control" required><small class="help-block form-text">Contoh : 082133423796</small></div>
                                   </div>
                                   <div class="row form-group">
                                       <div class="col col-md-3"><label for="email-ibu" class=" form-control-label">E-mail</label></div>
                                       <div class="col col-md-1"><h5>:</h5></div>
                                       <div class="col-12 col-md-8"><input type="email" id="email-ibu" placeholder="Masukkan Alamat E-mail Ibu" class="form-control" required><small class="help-block form-text">Contoh : ratih.ramadhani@gmail.com</small></div>
                                   </div>
                                   <div class="row form-group">
                                       <div class="col col-md-3"><label class=" form-control-label">Status</label></div>
                                       <div class="col col-md-1"><h5>:</h5></div>
                                       <div class="col col-md-8">
                                           <div class="form-check">
                                               <div class="radio">
                                                   <label for="status-ibu1" class="form-check-label ">
                                                       <input type="radio" id="status-ibu1" name="radios" value="hidup" class="form-check-input" required>Hidup
                                                   </label>
                                               </div>
                                               <div class="radio">
                                                   <label for="status-ibu2" class="form-check-label ">
                                                       <input type="radio" id="status-ibu2" name="radios" value="meninggal" class="form-check-input">Meninggal
                                                   </label>
                                               </div>
                                           </div>
                                       </div>
                                   </div>
                               </div>

                               <div class="row form-group"></div>
                               <h5><b>* Wali (Hanya Diisi Jika Kedua Orang Tua Telah Meninggal) :</b></h5>
                               <div class="card-body card-block">
                               <!-- <form action="#" method="post" enctype="multipart/form-data" class="form-horizontal"> -->
                                   <div class="row form-group"></div>
                                   <div class="row form-group">
                                       <div class="col col-md-3"><label for="id-wali" class=" form-control-label">Nomor Identitas Kependudukan (NIK)</label></div>
                                       <div class="col col-md-1"><h5>:</h5></div>
                                       <div class="col-12 col-md-8"><input type="number" id="id-wali" placeholder="Masukkan NIK Wali" minLength="16" maxlength="16" class="form-control"><small class="form-text text-muted">Contoh : 5115100502600019</small></div>
                                   </div>
                                   <div class="row form-group">
                                       <div class="col col-md-3"><label for="nama-wali" class=" form-control-label">Nama</label></div>
                                       <div class="col col-md-1"><h5>:</h5></div>
                                       <div class="col-12 col-md-8"><input type="text" id="nama-wali" placeholder="Masukkan Nama Wali" class="form-control"><small class="form-text text-muted">Contoh : Abdul Aziz</small></div>
                                   </div>
                                   <div class="row form-group">
                                       <div class="col col-md-3"><label for="tmp-lahir-wali" class=" form-control-label">Tempat Lahir</label></div>
                                       <div class="col col-md-1"><h5>:</h5></div>
                                       <div class="col-12 col-md-8"><input type="text" id="tmp-lahir-wali" placeholder="Masukkan Tempat Lahir Wali" class="form-control"><small class="help-block form-text">Contoh: Sidoarjo</small></div>
                                   </div>
                                   <div class="row form-group">
                                       <div class="col col-md-3"><label for="tgl-lahir-wali" class=" form-control-label">Tanggal Lahir</label></div>
                                       <div class="col col-md-1"><h5>:</h5></div>
                                       <div class="col-12 col-md-8"><input type="date" id="tgl-lahir-wali" placeholder="Masukkan Tanggal Lahir Wali" class="form-control"><small class="help-block form-text">Contoh : 17/08/1990</small></div>
                                   </div>
                                   <div class="row form-group">
                                       <div class="col col-md-3"><label for="alamat-wali" class=" form-control-label">Alamat</label></div>
                                       <div class="col col-md-1"><h5>:</h5></div>
                                       <div class="col-12 col-md-8"><input type="text" id="alamat-wali" placeholder="Masukkan Alamat Wali" class="form-control"><small class="help-block form-text">Contoh: Desa Mulyodadi RT 10 RW 17, Wonoayu, Sidoarjo</small></div>
                                   </div>
                                   <div class="row form-group">
                                       <div class="col col-md-3"><label for="agama-wali" class=" form-control-label">Agama</label></div>
                                       <div class="col col-md-1"><h5>:</h5></div>
                                       <div class="col-12 col-md-8"><input type="text" id="agama-ibu" placeholder="Masukkan Agama wali" class="form-control"><small class="help-block form-text">Contoh: Islam</small></div>
                                   </div>
                                   <div class="row form-group">
                                       <div class="col col-md-3"><label for="pendidikan-wali" class=" form-control-label" >Pendidikan</label></div>
                                       <div class="col col-md-1"><h5>:</h5></div>
                                       <div class="col-12 col-md-8">
                                           <select name="select" id="pendidikan-wali" class="form-control">
                                               <option disabled selected>Pilih Pendidikan</option>
                                               <option value="sma">SD / MI</option>
                                               <option value="sma">SMP / MTs</option>
                                               <option value="sma">SMA / SMK</option>
                                               <option value="d3">D3 (Diploma 3)</option>
                                               <option value="s1">D4 (Diploma 4) / S1 (Strata 1)</option>
                                               <option value="s2">S2 (Strata 2)</option>
                                               <option value="s3">S3 (Strata 3)</option>
                                           </select>
                                       </div>
                                   </div>
                                   <div class="row form-group">
                                       <div class="col col-md-3"><label for="pekerjaan-wali" class=" form-control-label">Pekerjaan</label></div>
                                       <div class="col col-md-1"><h5>:</h5></div>
                                       <div class="col-12 col-md-8"><input type="text" id="pekerjaan-wali" placeholder="Masukkan Pekerjaan Wali" class="form-control"><small class="help-block form-text">Contoh : Karyawan Swasta</small></div>
                                   </div>
                                   <div class="row form-group">
                                       <div class="col col-md-3"><label for="nmr-hp-wali" class=" form-control-label">Nomor HP</label></div>
                                       <div class="col col-md-1"><h5>:</h5></div>
                                       <div class="col-12 col-md-8"><input type="tel" id="nmr-hp-wali" pattern="[0-9]{4}-[0-9]{4}-[0-9]{4}" placeholder="Masukkan Nomor HP Wali" class="form-control"><small class="help-block form-text">Contoh : 082133423796</small></div>
                                   </div>
                                   <div class="row form-group">
                                       <div class="col col-md-3"><label for="email-wali" class=" form-control-label">E-mail</label></div>
                                       <div class="col col-md-1"><h5>:</h5></div>
                                       <div class="col-12 col-md-8"><input type="email" id="email-wali" placeholder="Masukkan Alamat E-mail Wali" class="form-control"><small class="help-block form-text">Contoh : abdul.aziz@gmail.com</small></div>
                                   </div>
                               </div>
                           </form>
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
