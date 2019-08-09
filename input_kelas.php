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
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Input Data Kelas</a></li>
                        <!-- <li class="breadcrumb-item active">Input Kelas</li> -->
                    </ol>
                </div>
            </div>

            <div class="container-fluid">
                 <div class="row">
                     <div class="col-lg-12">
                        <div class="card card-outline-warning">
                            <div class="card-header">
                                <h4 class="m-b-0 text-white">Masukkan Data Jurusan</h4>
                            </div>
                            <div class="card-body">
                                <form action="#">
                                    <div class="form-body">
                                        <div class="row p-t-20">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="control-label">Jurusan</label>
                                                    <input type="text" id="jurusan" class="form-control" placeholder="Masukkan Jurusan" required>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="control-label">Jumlah Sub Kelas</label>
                                                    <input type="text" id="jml_sub_kelas" class="form-control" placeholder="Masukkan Jumlah Sub Kelas" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-actions">
                                            <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> Simpan</button>
                                        </div>
                                      </div>
                                </form>
								</br>
								<div class="card-title">
                    <h4>Data Jurusan</h4>
								</div>

								 <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Jurusan</th>
                                <th>Jumlah Sub Kelas</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Multimedia</td>
                                <td>4</td>
                                <td>
          												<button type="button" class="btn btn-danger btn-flat btn-addon m-b-10 m-l-5"><i class="fa fa-trash"></i></button>
          											</td>
                            </tr>
                        </tbody>
                  </table>
                </div>
            </div>
          </div>
      </div>
    </div>

    <div class="row">
       <div class="col-lg-12">
          <div class="card card-outline-warning">
              <div class="card-header">
                  <h4 class="m-b-0 text-white">Masukkan Data Kelas</h4>
              </div>
              <div class="card-body">
                  <form action="php/insert_kelas.php">
                      <div class="form-body">
                          <div class="row p-t-20">
                              <div class="col-md-12">
                                  <div class="form-group">
                                      <label class="control-label">Pilih Jurusan</label>
                                      <select class="form-control" required>
                                        <option>Multimedia</option>
                                        <option>Akutansi</option>
                                        <option>Perbankan</option>
                                        <option>Teknik Sepeda Motor</option>
                                        <option>Teknik Komputer Jaringan</option>
                                      </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                  <div class="form-group">
                                    <label class="control-label">Pilih Kelas </label>
                                    <select class="form-control" required>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                     </select>
                                  </div>
                                </div>
                                <div class="col-md-12">
                                  <div class="form-group">
                                    <label class="control-label">Pilih Sub Kelas </label>
                                    <select class="form-control" required>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                     </select>
                                  </div>
                                </div>
                                <div class="col-md-12">
                                  <div class="form-group">
                                    <label class="control-label">Pilih Wali Kelas </label>
                                    <select class="form-control" required>
                                        <option>Bapak 1</option>
                                        <option>Bapak 2</option>
                                        <option>Ibu 1</option>
                                        <option>Ibu 2</option>
                                     </select>
                                  </div>
                                </div>

                          </div>
                          <div class="form-actions">
                              <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> Simpan</button>
                          </div>
                      </form>
              </br>
              <div class="card-title">
                  <h4>Data Kelas</h4>
              </div>
               <div class="table-responsive">
                  <table class="table">
                      <thead>
                          <tr>
                              <th>No</th>
                              <th>Jurusan</th>
                              <th>Kelas</th>
                              <th>Sub Kelas</th>
                              <th>Wali Kelas</th>
                              <th>Edit</th>
                          </tr>
                      </thead>

                      <tbody>
                          <tr>
                              <th scope="row">1</th>
                              <td>Multimedia</td>
                              <td>1</td>
                              <td>3</td>
                              <td>Bapak 2</td>
                              <td>
                                <button type="button" class="btn btn-danger btn-flat btn-addon m-b-10 m-l-5"><i class="fa fa-trash"></i></button>
                              </td>
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
    <!-- End Of Container Fluid -->

    <footer class="footer"> © 2019 Designed by Hefday</footer>
    </div>
    </div>
    <!-- End of Main -->

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
