<?php

    // PERINTAH UNTUK MENAMPILKAN DATA 
          $dbhost = 'localhost';
          $username = 'root';
          $password = 'Rezhi13251';
          $dbname = 'projectso';

          $connection = mysqli_connect($dbhost, $username, $password, $dbname);

            $query = "SELECT nama,intansi,alamat FROM daftarpeserta"; 
            $result = mysqli_query($connection, $query) or die (mysqli_error());


?>


<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Peserta Terdaftar</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/creative.min.css" rel="stylesheet">

    <!-- Css Ala Rezhi -->
    <link rel="stylesheet" type="text/css" href="css/style.css">


  </head>

  <body id="page-top">

     <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container-fluid">
        <a class="navbar-brand js-scroll-trigger text-primary" href="#page-top">English Course</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger text-primary" href="index.html"><span class="fa fa-home"></span> Beranda</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="login.php">
              <button type="button" class="btn btn-primary btn-sm active" role="button" aria-pressed="true" style="font-size: 8pt;">Daftar!</button>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  
  <section class="bg-light">

    <div class="container-fluid mt-5 mb-5">
      <div class="row">
        <div class="col-lg-12 col-md-4 text-center">
          <h4 class="mt-5 mb-5">Daftar Peserta yang Mendaftar English Course</h14>
        </div>
      </div>
    </div>

    <div class="container-fluid">  
        <div class="row">
          <div class="col-lg-12 col-md-4 mt-5 mb-5">
            
            <table class="table table-hover table-success">
              <thead class="bg-success text-white text-center">
                <tr>
                  <th scope="col">No.</th>
                  <th scope="col">Nama Lengkap</th>
                  <th scope="col">Instansi</th>
                  <th scope="col">Alamat</th>
                </tr>
              </thead>
              <tbody class="text-center text-nowrap">

                <?php
           


                             // NILAI AWAL VARIABLE UNTUK NO URUT 
                      $i = 1;

                        foreach ($result as $row) {
                        

                        

           

              //PERINTAH UNTUK MEMBACA DAN MENGAMBIL DATA DALAM BENTUK ARRAY
             ?>

                <tr>
                  <th scope="row"><?= $i; ?></th>
                  <td><?= $row['nama'] ?></td>
                  <td><?= $row['intansi'] ?></td>
                  <td><?= $row['alamat'] ?></td>
                </tr>
                
                <?php

                    $i++; }

                ?>
              </tbody>
          


            </table>

          </div>
        </div>
    </div>
  </section>


   <!-- Footer -->
  <section id="footer" class="mt-5">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <ul class="list-unstyled list-inline social text-center">
            <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-facebook"></i></a></li>
            <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-twitter"></i></a></li>
            <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-instagram"></i></a></li>
            <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-google-plus"></i></a></li>
            <li class="list-inline-item"><a href="javascript:void();" target="_blank"><i class="fa fa-envelope"></i></a></li>
          </ul>
        </div>
        </hr>
      </div>  
      <div class="row">
        <div class="col-lg-12 mt-sm-2 text-center text-white">
          <p>Web ini Adalah hasil kerja sama antar kelompok dan merupakan Tugas Akhir Sistem Operasi. Web ini masih terdapat banyak kekurangan mulai dari segi tampilan dan performance. Perlu pengembangan Lebih lanjut.</p>
          <p class="h6">&copy 2018 All right Reversed | Team WebServer<a class="text-green ml-2" href="https://www.sunlimetech.com" target="_blank">Powored By : <span class="badge badge-danger">Start Bootsraps</span></a></p>
        </div>
        </hr>
      </div>  
    </div>
  </section>
  <!-- ./Footer -->


  <!--section class="bg-dark">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12 col-md-4 text-white text-center">
          <p class="h6">&copy 2018 All right Reversed | Team WebServer<a class="text-green ml-2" href="https://www.sunlimetech.com" target="_blank">Powored By : <span class="badge badge-danger">Start Bootsraps</span></a></p>
        </div>
      </div>
    </div>
  </section-->


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/creative.min.js"></script>

  </body>

</html>
