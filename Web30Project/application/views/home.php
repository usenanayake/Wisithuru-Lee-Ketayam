<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Creative - Start Bootstrap Theme</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url()?>template/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="<?php echo base_url()?>template/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='<?php echo base_url()?>template/vendor/font-awesome/css/new.css' rel='stylesheet' type='text/css'>
    <link href='<?php echo base_url()?>template/vendor/font-awesome/css/neww.css' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="<?php echo base_url()?>template/vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url()?>template/css/creative.min.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">Live with carvings</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#services">Shop</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#portfolio">Gallery</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
            </li>
          </ul>
        </div>
      </div>
      <a href="<?php echo site_url('Register/RegisterUser') ?>"><button style="margin-right: 5%">Signup</button></a>
      <a href="<?php echo site_url('Users/Login') ?>"><button style="margin-right: 5%">Login</button></a>
    </nav>

    <header class="masthead">
      <div class="header-content">
        <div class="header-content-inner">
          <h1 id="homeHeading" style="background:#fff5e6 ;opacity: 0.5;height: 50%"><font color="#804d00">විශ්මිත ලී කැටයම්</font></h1>
          <h2><font color="purple">Welcome To Carvings!!</font></h2>
          <hr>
          <p style="background-color: yellow;"><font color="light blue">We strive to make each piece have its own character.
The natural beauty of the wood makes that possible.</font></p>
        </div>
      </div>
    </header>

    <section class="bg-primary" id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <h2 class="section-heading text-white">About Us</h2>
            <hr class="light">
            












            <button type="button" id="about" class="btn btn-primary btn-xl js-scroll-trigger"  data-toggle="modal" href="#addrow">Click Here</button>

            <div class="col-lg-12 col-sm-4 col-xs-12" no-padding style="padding-top:20px">
                    
                     
                    <div class="modal fade" id="addrow" role="dialog">
                    <div class="modal-dialog">
                    
                      <!-- Modal content-->
                      <div class="modal-content">


                        <div class="modal-header">
                          <button type="button" class="close pull-left" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title text-center">Janaka Deshappriya</h4>
                        </div>


                        
                         
                         <form method="post" >

                          <div class="modal-body">
                          <div class="row">
                            <div class="form-group">
                              <label for="OwnerAbout" class="col-sm-6 control-label">About</label>
                              <div class="col-sm-8">
                                <textarea class="form-control" id="OwnerAbout" rows="7"></textarea>
                                <!-- <input type="text" class="form-control" id="OwnerAbout" name="ownerAboutID" required readonly> -->
                              </div>
                            </div>

                            <div class="form-group">
                              <label for="OwnerAchivements" class="col-sm-6 control-label">Achivements</label>
                              <div class="col-sm-8">
                                <input type="text" class="form-control" id="OwnerAchivements" name="ownerAchivementsID" required readonly>
                              </div>
                            </div>

                             </div>

                           

                            <div class="modal-footer" >
                                <button type="submit" class="btn btn-primary pull-left" name="OK">OK</button>
                            </div>

                          </div>                                                

                        </form>

                    </div>

                      


                 </div>













          </div>
        </div>
      </div>
    </div>
  </div>
    </section>

    <section id="services">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading">At Your Service</h2>
            <hr class="primary">
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box">
              <i class="fa fa-4x fa-diamond text-primary sr-icons"></i>
              <h3>Sturdy Templates</h3>
              <p class="text-muted">Our templates are updated regularly so they don't break.</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box">
              <i class="fa fa-4x fa-paper-plane text-primary sr-icons"></i>
              <h3>Ready to Ship</h3>
              <p class="text-muted">You can use this theme as is, or you can make changes!</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box">
              <i class="fa fa-4x fa-newspaper-o text-primary sr-icons"></i>
              <h3>Up to Date</h3>
              <p class="text-muted">We update dependencies to keep things fresh.</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box">
              <i class="fa fa-4x fa-heart text-primary sr-icons"></i>
              <h3>Made with Love</h3>
              <p class="text-muted">You have to make your websites with love these days!</p>
            </div>
          </div>
        </div>
      </div>
      <div align="center">
      <a href="<?php echo site_url('product') ?>"><button type="button" class="btn btn-primary">Home</button></a>
    </div>

    </section>

    <section class="p-0" id="portfolio">
      <div class="container-fluid">
        <div class="row no-gutter popup-gallery">
          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="<?php echo base_url()?>img/portfolio/fullsize/1.jpg">
              <img class="img-fluid" src="<?php echo base_url()?>img/portfolio/thumbnails/1.jpg" alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                    Category 1
                  </div>
                  <div class="project-name">
                    Carving
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="<?php echo base_url()?>img/portfolio/fullsize/2.jpg">
              <img class="img-fluid" src="<?php echo base_url()?>img/portfolio/thumbnails/2.jpg" alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                    Category 2
                  </div>
                  <div class="project-name">
                    Masks
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="<?php echo base_url()?>img/portfolio/fullsize/3.jpg">
              <img class="img-fluid" src="<?php echo base_url()?>img/portfolio/thumbnails/3.jpg" alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                    Category 3
                  </div>
                  <div class="project-name">
                    Wood Carving
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="<?php echo base_url()?>img/portfolio/fullsize/4.jpg">
              <img class="img-fluid" src="<?php echo base_url()?>img/portfolio/thumbnails/4.jpg" alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                    Category 4
                  </div>
                  <div class="project-name">
                    Wood Carving
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="<?php echo base_url()?>img/portfolio/fullsize/5.jpg">
              <img class="img-fluid" src="<?php echo base_url()?>img/portfolio/thumbnails/5.jpg" alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                    Ctegory 5
                  </div>
                  <div class="project-name">
                    Mask
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="<?php echo base_url()?>img/portfolio/fullsize/6.jpg">
              <img class="img-fluid" src="<?php echo base_url()?>img/portfolio/thumbnails/6.jpg" alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                    Category 6
                  </div>
                  <div class="project-name">
                    Carving
                  </div>
                </div>
              </div>
            </a>
          </div>
        </div>
      </div>
    </section>

    <section id="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <h2 class="section-heading">Contact Us</h2>
            <hr class="primary">
            <p>Send your order, we </p>

            <h2>Visit Us</h2>

        <div id="googleMap" style="width:100%;height:400px;"></div>

      <script>
    function myMap() {
    var mapProp= {
    center:new google.maps.LatLng(5.9732424,80.4392553),
    zoom:16,
    };
    var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
    }
    </script>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBpZcBPdyjshNZIbGFzzxncnr4DSa667iY&callback=myMap"></script>
    <!--
    To use this code on your website, get a free API key from Google.
    Read more at: https://www.w3schools.com/graphics/google_maps_basic.asp
    -->

          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 ml-auto text-center">
            <i class="fa fa-phone fa-3x sr-contact"></i>
            <p>077-9954161</p>
          </div>
          <div class="col-lg-4 mr-auto text-center">
            <i class="fa fa-envelope-o fa-3x sr-contact"></i>
            <p>
              <a>kodithuwakku3891@gmail.com</a>
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- Bootstrap core JavaScript -->
    <script src="<?php echo base_url()?>template/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url()?>template/vendor/popper/popper.min.js"></script>
    <script src="<?php echo base_url()?>template/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="<?php echo base_url()?>template/vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="<?php echo base_url()?>template/vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="<?php echo base_url()?>template/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="<?php echo base_url()?>template/js/creative.min.js"></script>

  </body>

</html>
