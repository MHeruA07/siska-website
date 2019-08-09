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
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Siswa</a></li>
                        <li class="breadcrumb-item active">Lihat Jadwal</li>
                    </ol>
                </div>
            </div>

            <div class="container-fluid">
              <div class="row">
                   <div class="col-lg-12">
                       <div class="card card-outline-warning">
                           <div class="card-header">
                               <h4 class="m-b-0 text-white">Data Jadwal Pelajaran</h4>
                           </div>

                           <div class="card-body card-block">
                               <div class="row form-group"></div>
                               <div class="row form-group">
                                   <div class="col-5">
                                     <select name="select" id="kelas-siswa" class="form-control" required>
                                         <option disabled selected>Pilih Kelas</option>
                                         <option value="1 akuntasi 1">1 Akuntasi 1</option>
                                         <option value="1 multimedia 2">1 Multimedia 2</option>
                                         <option value="2 tsm 1">2 Teknik Sepeda Motor 1</option>
                                         <option value="2 tkj 1">2 Teknik Komputer Jaringan 1</option>
                                         <option value="3 perbankan 1">3 Perbankan 1</option>
                                     </select>
                                   </div>
                                   <div class="col-4"></div>
                                   <div class="col-4"></div>
                               </div>
                               <div class="table-responsive">
                                  <table class="table middle-text thick-text">
                                      <thead>
                                          <tr class="main-head">
                                              <th colspan=2>Senin</th>
                                          </tr>
                                      </thead>

                                      <thead>
                                          <tr class="second-head">
                                              <th>Jam</th>
                                              <th>Mata Pelajaran</th>
                                          </tr>
                                      </thead>

                                      <tbody>
                                          <tr>
                                              <td class="right-border">07:00 - 08:30</td>
                                              <td>Keterampilan Komputer & Pengenalan Interaksi (KKPI)</td>
                                          </tr>
                                          <tr>
                                              <td class="right-border">08:30 - 10:00</td>
                                              <td>Olahraga</td>
                                          </tr>
                                          <tr>
                                              <td class="right-border">10:00 - 10:30</td>
                                              <td>Istirahat</td>
                                          </tr>
                                          <tr>
                                              <td class="right-border">10:30 - 12:00</td>
                                              <td>Bahasa Indonesia</td>
                                          </tr>
                                          <tr>
                                              <td class="right-border">12:00 - 13:30</td>
                                              <td>Matematika</td>
                                          </tr>
                                      </tbody>
                                  </table>
                                </div>
                                <div class="table-responsive">
                                   <table class="table middle-text thick-text">
                                       <thead>
                                           <tr class="main-head">
                                               <th colspan=2>Selasa</th>
                                           </tr>
                                       </thead>

                                       <thead>
                                           <tr class="second-head">
                                               <th>Jam</th>
                                               <th>Mata Pelajaran</th>
                                           </tr>
                                       </thead>

                                       <tbody>
                                         <tr>
                                             <td class="right-border">07:00 - 08:30</td>
                                             <td>Keterampilan Komputer & Pengenalan Interaksi (KKPI)</td>
                                         </tr>
                                         <tr>
                                             <td class="right-border">08:30 - 10:00</td>
                                             <td>Olahraga</td>
                                         </tr>
                                         <tr>
                                             <td class="right-border">10:00 - 10:30</td>
                                             <td>Istirahat</td>
                                         </tr>
                                         <tr>
                                             <td class="right-border">10:30 - 12:00</td>
                                             <td>Bahasa Indonesia</td>
                                         </tr>
                                         <tr>
                                             <td class="right-border">12:00 - 13:30</td>
                                             <td>Matematika</td>
                                         </tr>
                                       </tbody>
                                   </table>
                                 </div>
                                 <div class="table-responsive">
                                    <table class="table middle-text thick-text">
                                        <thead>
                                            <tr class="main-head">
                                                <th colspan=2>Rabu</th>
                                            </tr>
                                        </thead>

                                        <thead>
                                            <tr class="second-head">
                                                <th>Jam</th>
                                                <th>Mata Pelajaran</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                          <tr>
                                              <td class="right-border">07:00 - 08:30</td>
                                              <td>Keterampilan Komputer & Pengenalan Interaksi (KKPI)</td>
                                          </tr>
                                          <tr>
                                              <td class="right-border">08:30 - 10:00</td>
                                              <td>Olahraga</td>
                                          </tr>
                                          <tr>
                                              <td class="right-border">10:00 - 10:30</td>
                                              <td>Istirahat</td>
                                          </tr>
                                          <tr>
                                              <td class="right-border">10:30 - 12:00</td>
                                              <td>Bahasa Indonesia</td>
                                          </tr>
                                          <tr>
                                              <td class="right-border">12:00 - 13:30</td>
                                              <td>Matematika</td>
                                          </tr>
                                        </tbody>
                                    </table>
                                  </div>
                                  <div class="table-responsive">
                                     <table class="table middle-text thick-text">
                                         <thead>
                                             <tr class="main-head">
                                                 <th colspan=2>Kamis</th>
                                             </tr>
                                         </thead>

                                         <thead>
                                             <tr class="second-head">
                                                 <th>Jam</th>
                                                 <th>Mata Pelajaran</th>
                                             </tr>
                                         </thead>

                                         <tbody>
                                           <tr>
                                               <td class="right-border">07:00 - 08:30</td>
                                               <td>Keterampilan Komputer & Pengenalan Interaksi (KKPI)</td>
                                           </tr>
                                           <tr>
                                               <td class="right-border">08:30 - 10:00</td>
                                               <td>Olahraga</td>
                                           </tr>
                                           <tr>
                                               <td class="right-border">10:00 - 10:30</td>
                                               <td>Istirahat</td>
                                           </tr>
                                           <tr>
                                               <td class="right-border">10:30 - 12:00</td>
                                               <td>Bahasa Indonesia</td>
                                           </tr>
                                           <tr>
                                               <td class="right-border">12:00 - 13:30</td>
                                               <td>Matematika</td>
                                           </tr>
                                         </tbody>
                                     </table>
                                 </div>
                                 <div class="table-responsive">
                                    <table class="table middle-text thick-text">
                                        <thead>
                                            <tr class="main-head">
                                                <th colspan=2>Jum'at</th>
                                            </tr>
                                        </thead>

                                        <thead>
                                            <tr class="second-head">
                                                <th>Jam</th>
                                                <th>Mata Pelajaran</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                          <tr>
                                              <td class="right-border">07:00 - 08:30</td>
                                              <td>Keterampilan Komputer & Pengenalan Interaksi (KKPI)</td>
                                          </tr>
                                          <tr>
                                              <td class="right-border">08:30 - 10:00</td>
                                              <td>Olahraga</td>
                                          </tr>
                                          <tr>
                                              <td class="right-border">10:00 - 10:30</td>
                                              <td>Istirahat</td>
                                          </tr>
                                          <tr>
                                              <td class="right-border">10:30 - 12:00</td>
                                              <td>Bahasa Indonesia</td>
                                          </tr>
                                          <tr>
                                              <td class="right-border">12:00 - 13:30</td>
                                              <td>Matematika</td>
                                          </tr>
                                        </tbody>
                                    </table>
                                  </div>
                                  <div class="table-responsive">
                                     <table class="table middle-text thick-text">
                                         <thead>
                                             <tr class="main-head">
                                                 <th colspan=2>Sabtu</th>
                                             </tr>
                                         </thead>

                                         <thead>
                                             <tr class="second-head">
                                                 <th>Jam</th>
                                                 <th>Mata Pelajaran</th>
                                             </tr>
                                         </thead>

                                         <tbody>
                                           <tr>
                                               <td class="right-border">07:00 - 08:30</td>
                                               <td>Keterampilan Komputer & Pengenalan Interaksi (KKPI)</td>
                                           </tr>
                                           <tr>
                                               <td class="right-border">08:30 - 10:00</td>
                                               <td>Olahraga</td>
                                           </tr>
                                           <tr>
                                               <td class="right-border">10:00 - 10:30</td>
                                               <td>Istirahat</td>
                                           </tr>
                                           <tr>
                                               <td class="right-border">10:30 - 12:00</td>
                                               <td>Bahasa Indonesia</td>
                                           </tr>
                                           <tr>
                                               <td class="right-border">12:00 - 13:30</td>
                                               <td>Matematika</td>
                                           </tr>
                                         </tbody>
                                     </table>
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
