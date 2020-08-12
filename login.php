<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Formulir Pendaftaran</title>
  <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

</head>
<body>

<?php  
include "koneksi.php";
?>
      
    <div class="container">
        <div class="row text-center ">
            <div class="col-md-12">
                <br/><br/>
                <!--h2> TrainIT : Login</h2-->
                 <br/>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1 bg-danger">
                <div class="panel panel-default">
                    <div class="panel-heading p-4">
                        <strong> Form Pendaftaran </strong>  
                    </div>
                    <div class="panel-body">
                        <form role="form" method="post" action="aksi_tambah.php"><br/>
                            <div class="form-group input-group">
                                <span class="input-group-addon"><i class="fa fa-tag"  ></i></span>
                                <input type="text" class="form-control" placeholder="Nama Lengkap" name="nama" />
                            </div>
                            <div class="form-group input-group">
                                <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>


                                <select class="custom-select form-control" name="jenis_kelamin">
                                  <option selected>--Jenis Kelamin--</option>
                                  <option value="1">Laki-Laki</option>
                                  <option value="2">Perempuan</option>
                                </select>



                                <!--input type="text" class="form-control"  placeholder="Jenis Kelamin" name="jk" /-->
                            </div>
                            <div class="form-group input-group">
                                <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
                                <input type="text" class="form-control"  placeholder="Nama Instansi" name="instansi" />
                            </div>
                            <div class="form-group input-group">
                                <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
                                <input type="text" class="form-control"  placeholder="Alamat" name="alamat" />
                            </div>
                            <!--div class="form-group">
                                <label class="checkbox-inline">
                                    <input type="checkbox" /> Remember me
                                </label>
                                <span class="pull-right">
                                    <a href="#" >Forget password ? </a> 
                                </span>
                            </div-->
                            <input type="submit" name="submit" value="Submit">
                            <hr/>
                                  Not register ? <a href="registeration.php" >click here </a> 
                        </form>
                    </div>
                </div>
            </div>           
        </div>
    </div>
<center><a href="index.html">BACK</a></center>
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
   
</body>
</html>
