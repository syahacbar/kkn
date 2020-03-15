<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Sistem Informasi Pengelolaan Data Laporan - Jurusan Teknik Informatika</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <!-- css -->
  <link href="https://fonts.googleapis.com/css?family=Noto+Serif:400,400italic,700|Open+Sans:300,400,600,700" rel="stylesheet">
  <link href="<?php echo site_url('resources/frontend/css/bootstrap.css');?>" rel="stylesheet" />
  <link href="<?php echo site_url('resources/frontend/css/bootstrap-responsive.css');?>" rel="stylesheet" />
  <link href="<?php echo site_url('resources/frontend/css/fancybox/jquery.fancybox.css');?>" rel="stylesheet">
  <link href="<?php echo site_url('resources/frontend/css/jcarousel.css');?>" rel="stylesheet" />
  <link href="<?php echo site_url('resources/frontend/css/flexslider.css');?>" rel="stylesheet" />
  <link href="<?php echo site_url('resources/frontend/css/style.css');?>" rel="stylesheet" />
  <!-- Theme skin -->
  <link href="<?php echo site_url('resources/frontend/skins/default.css');?>" rel="stylesheet" />
  <!-- Fav and touch icons -->
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo site_url('resources/frontend/ico/apple-touch-icon-144-precomposed.png');?>" />
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo site_url('resources/frontend/ico/apple-touch-icon-114-precomposed.png');?>" />
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo site_url('resources/frontend/ico/apple-touch-icon-72-precomposed.png');?>" />
  <link rel="apple-touch-icon-precomposed" href="<?php echo site_url('resources/frontend/ico/apple-touch-icon-57-precomposed.png');?>" />
  <link rel="shortcut icon" href="<?php echo site_url('resources/frontend/ico/favicon.png');?>" />

  <!-- =======================================================
    Theme Name: Flattern
    Theme URL: https://bootstrapmade.com/flattern-multipurpose-bootstrap-template/
    Author: BootstrapMade.com
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>

<body>
  <div id="wrapper">
    <!-- toggle top area -->
    <div class="hidden-top">
      <div class="hidden-top-inner container">
        <div class="row">
          <div class="span12">
            <ul>
              <li><strong>We are available for any custom works this month</strong></li>
              <li>Main office: Springville center X264, Park Ave S.01</li>
              <li>Call us <i class="icon-phone"></i> (123) 456-7890 - (123) 555-7891</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- end toggle top area -->
    <!-- start header -->
    <header>
      <div class="container ">
        <!-- hidden top area toggle link -->
        <div id="header-hidden-link">
          <a href="#" class="toggle-link" title="Click me you'll get a surprise" data-target=".hidden-top"><i></i>Open</a>
        </div>
        <!-- end toggle link -->
        <div class="row nomargin">
          <div class="span12">
          <?php if($this->session->userdata('status') != "login"){ ?>
            <div class="headnav">
              <ul>
                <li><a href="#mySignup" data-toggle="modal"><i class="icon-user"></i> Sign up</a></li>
                <li><a href="#mySignin" data-toggle="modal">Sign in</a></li>
              </ul>
            </div>
          <?php } else { ?>
            <div class="headnav">
              <ul>
                <li><i class="icon-user"></i> <?php echo $this->session->userdata('nim');?></li>
                <li><a href="<?php echo site_url('home/signout');?>"><i class="icon-signout"></i> Sign Out</a></li>
              </ul>
            </div>
          <?php } ?>
            <!-- Reset Modal -->
            <div id="myReset" class="modal styled hide fade" tabindex="-1" role="dialog" aria-labelledby="myResetModalLabel" aria-hidden="true">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 id="myResetModalLabel">Reset your <strong>password</strong></h4>
              </div>
              <div class="modal-body">
                <form class="form-horizontal">
                  <div class="control-group">
                    <label class="control-label" for="inputResetEmail">Email</label>
                    <div class="controls">
                      <input type="text" id="inputResetEmail" placeholder="Email">
                    </div>
                  </div>
                  <div class="control-group">
                    <div class="controls">
                      <button type="submit" class="btn">Reset password</button>
                    </div>
                    <p class="aligncenter margintop20">
                      We will send instructions on how to reset your password to your inbox
                    </p>
                  </div>
                </form>
              </div>
            </div>
            <!-- end reset modal -->
          </div>
        </div>
        <div class="row">
          <div class="span4">
            <div class="logo">
              <a href="<?php echo site_url('home');?>"><img src="<?php echo site_url('resources/frontend/img/logo.png');?>" alt="" class="logo" /></a>
              <h1>Teknik Informatika</h1>
            </div>
          </div>
          <div class="span8">
            <div class="navbar navbar-static-top">
              <div class="navigation">
                <nav>
                  <ul class="nav topnav">
                    <li>
                      <a href="<?php echo site_url('aksesmahasiswa');?>">Home </a>
                    </li>
                    <li class="dropdown">
                      <a href="<?php echo site_url('aksesmahasiswa/laporan');?>">Laporan </a>
                    </li>
                  </ul>
                </nav>
              </div>
              <!-- end navigation -->
            </div>
          </div>
        </div>
      </div>
    </header>
    <!-- end header -->

                    <?php                    
                    if(isset($_view) && $_view)
                        $this->load->view($_view);
                    ?>      
    
    <footer>
      <div class="container">
        <div class="row">
          <div class="span3">
            <div class="widget">
              <h5 class="widgetheading">Browse pages</h5>
              <ul class="link-list">
                <li><a href="#">About our company</a></li>
                <li><a href="#">Our services</a></li>
                <li><a href="#">Meet our team</a></li>
                <li><a href="#">Explore our portfolio</a></li>
                <li><a href="#">Get in touch with us</a></li>
              </ul>
            </div>
          </div>
          <div class="span3">
            <div class="widget">
              <h5 class="widgetheading">Important stuff</h5>
              <ul class="link-list">
                <li><a href="#">Press release</a></li>
                <li><a href="#">Terms and conditions</a></li>
                <li><a href="#">Privacy policy</a></li>
                <li><a href="#">Career center</a></li>
                <li><a href="#">Flattern forum</a></li>
              </ul>
            </div>
          </div>
          <div class="span3">
            <div class="widget">
              <h5 class="widgetheading">Flickr photostream</h5>
              <div class="flickr_badge">
                <script type="text/javascript" src="http://www.flickr.com/badge_code_v2.gne?count=8&amp;display=random&amp;size=s&amp;layout=x&amp;source=user&amp;user=34178660@N03"></script>
              </div>
              <div class="clear">
              </div>
            </div>
          </div>
          <div class="span3">
            <div class="widget">
              <h5 class="widgetheading">Get in touch with us</h5>
              <address>
								<strong>Flattern studio, Pte Ltd</strong><br>
								 Springville center X264, Park Ave S.01<br>
								 Semarang 16425 Indonesia
					 		</address>
              <p>
                <i class="icon-phone"></i> (123) 456-7890 - (123) 555-7891 <br>
                <i class="icon-envelope-alt"></i> email@domainname.com
              </p>
            </div>
          </div>
        </div>
      </div>
      <div id="sub-footer">
        <div class="container">
          <div class="row">
            <div class="span6">
              <div class="copyright">
                <p>
                  <span>&copy; Flattern - All right reserved.</span>
                </p>
                <div class="credits">
                  <!--
                    All the links in the footer should remain intact.
                    You can delete the links only if you purchased the pro version.
                    Licensing information: https://bootstrapmade.com/license/
                    Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Flattern
                  -->
                  Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                </div>
              </div>
            </div>
            <div class="span6">
              <ul class="social-network">
                <li><a href="#" data-placement="bottom" title="Facebook"><i class="icon-facebook icon-square"></i></a></li>
                <li><a href="#" data-placement="bottom" title="Twitter"><i class="icon-twitter icon-square"></i></a></li>
                <li><a href="#" data-placement="bottom" title="Linkedin"><i class="icon-linkedin icon-square"></i></a></li>
                <li><a href="#" data-placement="bottom" title="Pinterest"><i class="icon-pinterest icon-square"></i></a></li>
                <li><a href="#" data-placement="bottom" title="Google plus"><i class="icon-google-plus icon-square"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </footer>
  </div>
  <a href="#" class="scrollup"><i class="icon-chevron-up icon-square icon-32 active"></i></a>
  <!-- javascript
    ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="<?php echo site_url('resources/frontend/js/jquery.js'); ?>"></script>
  <script src="<?php echo site_url('resources/frontend/js/jquery.easing.1.3.js'); ?>"></script>
  <script src="<?php echo site_url('resources/frontend/js/bootstrap.js'); ?>"></script>
  <script src="<?php echo site_url('resources/frontend/js/jcarousel/jquery.jcarousel.min.js'); ?>"></script>
  <script src="<?php echo site_url('resources/frontend/js/jquery.fancybox.pack.js'); ?>"></script>
  <script src="<?php echo site_url('resources/frontend/js/jquery.fancybox-media.js'); ?>"></script>
  <script src="<?php echo site_url('resources/frontend/js/google-code-prettify/prettify.js'); ?>"></script>
  <script src="<?php echo site_url('resources/frontend/js/portfolio/jquery.quicksand.js'); ?>"></script>
  <script src="<?php echo site_url('resources/frontend/js/portfolio/setting.js'); ?>"></script>
  <script src="<?php echo site_url('resources/frontend/js/jquery.flexslider.js'); ?>"></script>
  <script src="<?php echo site_url('resources/frontend/js/jquery.nivo.slider.js'); ?>"></script>
  <script src="<?php echo site_url('resources/frontend/js/modernizr.custom.js'); ?>"></script>
  <script src="<?php echo site_url('resources/frontend/js/jquery.ba-cond.min.js'); ?>"></script>
  <script src="<?php echo site_url('resources/frontend/js/jquery.slitslider.js'); ?>"></script>
  <script src="<?php echo site_url('resources/frontend/js/animate.js'); ?>"></script>

  <!-- Template Custom JavaScript File -->
  <script src="<?php echo site_url('resources/frontend/js/custom.js'); ?>"></script>

</body>
</html>