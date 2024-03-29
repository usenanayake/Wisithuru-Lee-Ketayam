<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>SB Admin - Start Bootstrap Template</title>
  <!-- Bootstrap core CSS-->
  <link href="<?php echo base_url()?>tmp/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="<?php echo base_url()?>tmp/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="<?php echo base_url()?>tmp/css/sb-admin.css" rel="stylesheet">
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <?php include "includes/sidebar.php" ?>
  <div class="content-wrapper">










    <section class="content-header col-xs-12">
        <h1>
            Owner Informations
        </h1>
    </section>
    
    <section class="content">

      
        <div class="row">
            <!-- left column -->
            <div class="col-xs-12 col-lg-12">
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Update Owner Informations</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->

                    
                    <form role="form" >
                        <div class="box-body">

                        <div class="col-xs-12 col-lg-12 col-sm-12">

                          

                            <div class="col-sm-4 col-xs-12">
                                 <div class="form-group">
                                 
                                        <label for="ownerName" >Owner Name</label>

                                        <input type="text" class="form-control" name="ownerName" placeholder="Owner Name ">

                                  

                                    </div>
                            </div>

                            <div class="col-sm-4 col-xs-12">
                                 <div class="form-group">
                                        <label for="ownerAbout" >About</label>
                                        <textarea class="form-control" id="ownerAbout" rows="7"></textarea>

                                       <!--  <input type="text" class="form-control" name="ownerAbout" placeholder="About"> -->

                                    </div>

                            </div>

                            <div class="col-sm-4 col-xs-12">
                              <div class="form-group">
                                <label for="ownerAchivements" >Achivements</label>
                                  <textarea class="form-control" id="ownerAchivements" rows="7"></textarea>

                                       <!--  <input type="text" class="form-control" name ="OwnerAchivements" placeholder="Achivements"> -->
                            </div>

                        </div>

                         <div class="col-xs-12 col-lg-12 col-sm-12">
                            <div class="col-sm-4 col-xs-3">
                              <button type="button" id="about" class="btn btn-primary btn-xl js-scroll-trigger"  data-toggle="modal">Submit</button>
                            </div>
                          </div>

                        </div>
                    </form>


                </div>
            </div>

        </div>

    </section>















    
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © Your Website 2017</small>
        </div>
      </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="login.html">Logout</a>
          </div>
        </div>
      </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url()?>tmp/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url()?>tmp/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url()?>tmp/vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url()?>tmp/js/sb-admin.min.js"></script>
  </div>
</body>

</html>
