<?php
	session_start();
  #echo $_SESSION['username'];
  #echo "<br>";
  #echo $_SESSION['idUser'];
  if (!$_SESSION){
	   echo '<script language = javascript>
	    alert("User No Authenticated")
	    self.location = "../closeConnection"
	    </script>';
  }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard DMAKit</title>

    <!--STYLESHEET-->
    <!--=================================================-->

    <!--Open Sans Font [ OPTIONAL ]-->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>


    <!--Bootstrap Stylesheet [ REQUIRED ]-->
    <link href="../css/bootstrap.min.css" rel="stylesheet">


    <!--Nifty Stylesheet [ REQUIRED ]-->
    <link href="../css/nifty.min.css" rel="stylesheet">


    <!--Nifty Premium Icon [ DEMONSTRATION ]-->
    <link href="../css/demo/nifty-demo-icons.min.css" rel="stylesheet">


    <!--DataTables [ OPTIONAL ]-->
    <link href="../plugins/datatables/media/css/dataTables.bootstrap.css" rel="stylesheet">
    <link href="../plugins/datatables/extensions/Responsive/css/responsive.dataTables.min.css" rel="stylesheet">

    <!--Bootstrap Validator [ OPTIONAL ]-->
    <link href="../plugins/bootstrap-validator/bootstrapValidator.min.css" rel="stylesheet">
    <!--JAVASCRIPT-->
    <!--=================================================-->

    <!--Pace - Page Load Progress Par [OPTIONAL]-->
    <link href="../plugins/pace/pace.min.css" rel="stylesheet">
    <script src="../plugins/pace/pace.min.js"></script>


    <!--jQuery [ REQUIRED ]-->
    <script src="../js/jquery.min.js"></script>


    <!--BootstrapJS [ RECOMMENDED ]-->
    <script src="../js/bootstrap.min.js"></script>


    <!--NiftyJS [ RECOMMENDED ]-->
    <script src="../js/nifty.min.js"></script>

    <!--Dropzone [ OPTIONAL ]-->
    <script src="../plugins/dropzone/dropzone.min.js"></script>
    <link href="../plugins/dropzone/dropzone.min.css" rel="stylesheet">
    <script src="../js/formatDropzone.js"></script>

    <!--=================================================-->

    <!--Font Awesome [ OPTIONAL ]-->
    <link href="../plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!--Ion Icons [ OPTIONAL ]-->
    <link href="../plugins/flag-icon-css/css/flag-icon.min.css" rel="stylesheet">
    <!--Ion Icons [ OPTIONAL ]-->
    <link href="../plugins/ionicons/css/ionicons.min.css" rel="stylesheet">
    <!--Themify Icons [ OPTIONAL ]-->
    <link href="../plugins/themify-icons/themify-icons.min.css" rel="stylesheet">
    <!--Premium Line Icons [ OPTIONAL ]-->
    <link href="../premium/icon-sets/icons/line-icons/premium-line-icons.min.css" rel="stylesheet">
    <link href="../plugins/spinkit/css/spinkit.min.css" rel="stylesheet">
    <script src="../plugins/bootstrap-validator/bootstrapValidator.min.js"></script>
    <script src="https://cdn.plot.ly/plotly-latest.min.js"></script>
    <script src="../js/characteristic/processViewCorrelation.js"></script>
</head>

<!--TIPS-->
<!--You may remove all ID or Class names which contain "demo-", they are only used for demonstration. -->
<body>
    <div id="container" class="effect aside-float aside-bright mainnav-lg">

        <!--NAVBAR-->
        <!--===================================================-->
        <header id="navbar">
            <div id="navbar-container" class="boxed">

                <!--Brand logo & name-->
                <!--================================-->
                <div class="navbar-header">
                    <a href="../" class="navbar-brand">
                        <img src="../img/logo.png" alt="Nifty Logo" class="brand-icon">
                        <div class="brand-title">
                            <span class="brand-text">DMAKit</span>
                        </div>
                    </a>
                </div>
                <!--================================-->
                <!--End brand logo & name-->


                <!--Navbar Dropdown-->
                <!--================================-->
                <div class="navbar-content clearfix">
                    <ul class="nav navbar-top-links pull-left">

                        <!--Navigation toogle button-->
                        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                        <li class="tgl-menu-btn">
                            <a class="mainnav-toggle" href="#">
                                <i class="demo-pli-view-list"></i>
                            </a>
                        </li>
                        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                        <!--End Navigation toogle button-->

                    </ul>
                    <ul class="nav navbar-top-links pull-right">

                        <!--User dropdown-->
                        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                        <li id="dropdown-user" class="dropdown">
                            <a href="#" data-toggle="dropdown" class="dropdown-toggle text-right">
                                <span class="ic-user pull-right">
                                    <!--<img class="img-circle img-user media-object" src="img/profile-photos/1.png" alt="Profile Picture">-->
                                    <i class="demo-pli-male"></i>
                                </span>
                                <div class="username hidden-xs">
                                  <?php
                                    echo $_SESSION['username'];
                                  ?>
                                </div>
                            </a>


                            <div class="dropdown-menu dropdown-menu-md dropdown-menu-right panel-default">
                                <!-- Dropdown footer -->
                                <div class="pad-all text-right">
                                    <a href="../closeConnection" class="btn btn-primary">
                                        <i class="demo-pli-unlock"></i> Log out!
                                    </a>
                                </div>
                            </div>
                        </li>
                        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                        <!--End user dropdown-->


                    </ul>
                </div>
                <!--================================-->
                <!--End Navbar Dropdown-->

            </div>
        </header>
        <!--===================================================-->
        <!--END NAVBAR-->

        <div class="boxed">

            <!--CONTENT CONTAINER-->
            <!--===================================================-->
            <div id="content-container">
                <div id="page-head">

                    <!--Page Title-->
                    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                    <div id="page-title">
                        <h1 class="page-header text-overflow">
                          <?php
                            $job = $_GET['job'];
                            echo "Response for job: $job";
                          ?>
                        </h1>

                    </div>
                    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                    <!--End page title-->
                </div>


                <!--Page content-->
                <!--===================================================-->
              <div id="page-content">
                <div class="row">
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="panel panel-bordered panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">Correlation Matrix</h3>
                        </div>
                        <div class="panel-body">
                          <div id="correlationMatrix"></div>
                        </div>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="panel panel-bordered panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">Description Process</h3>
                        </div>
                        <div class="panel-body">

                          <table class="table table-hover table-vcenter">
                          <tbody>
                            <tr>
                              <td>
                                <span class="text-main text-semibold">Process</span>
                              </td>
                              <td>
                                <span class="text-main text-semibold">Correlation of attributes</span>
                                <br>
                              </td>
                             </tr>

                              <tr>
                                  <td>
                                    <span class="text-main text-semibold">Correlation Matrix</span>
                                  </td>
                                  <td>
                                      <span class="text-main text-semibold">
                                        <?php

                                          $job=$_GET['job'];
																					$idUser = $_SESSION['idUser'];
                                          echo "<a href=\"../../../dataStorage/$idUser/$job/correlationMatrix_$job.csv\">";
                                          echo "dataResponse</a>";

                                        ?>

                                      </span>
                                      <br>
                                  </td>
                              </tr>

                              <tr>
                                <td>
                                  <span class="text-main text-semibold">Definition and interpretation</span>
                                </td>

                                <td>

                                    The correlation matrix of n random variables X1,…,Xn is the n × n matrix whose (i,j) entry is corr ⁡ (Xi,Xj). If the measures of correlation used are product-moment coefficients, the correlation matrix is the same as the covariance matrix of the standarized random variables Xi/σ for i=1,…,n. This applies both to the matrix of population correlations (in which case σ is the population standard deviation), and to the matrix of sample correlations (in which case σ denotes the sample standard deviation). Consequently, each is necessarily a positive-semidefinite matrix. Moreover, the correlation matrix is strictly positive definite if no variable can have all its values exactly generated as a linear function of the values of the others.

                                  <br>
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

            <!--MAIN NAVIGATION-->
            <!--===================================================-->
            <nav id="mainnav-container">
                <div id="mainnav">

                    <!--Menu-->
                    <!--================================-->
                    <div id="mainnav-menu-wrap">
                        <div class="nano">
                            <div class="nano-content">

                                <!--Profile Widget-->
                                <!--================================-->
                                <div id="mainnav-profile" class="mainnav-profile">
                                    <div class="profile-wrap text-center">
                                        <div class="pad-btm">
                                            <img class="img-circle img-md" src="../img/profile-photos/11.png" alt="Profile Picture">
                                        </div>
                                        <a href="#profile-nav" class="box-block" data-toggle="collapse" aria-expanded="false">
                                            <span class="pull-right dropdown-toggle">
                                                <i class="dropdown-caret"></i>
                                            </span>
                                            <p class="mnp-name">
                                              <?php
                                                echo $_SESSION['username'];
                                              ?>
                                            </p>
                                        </a>
                                    </div>
                                    <div id="profile-nav" class="collapse list-group bg-trans">

                                        <a href="../closeConnection" class="list-group-item">
                                            <i class="demo-pli-unlock icon-lg icon-fw"></i> Log out!
                                        </a>
                                    </div>
                                </div>

                                <ul id="mainnav-menu" class="list-group">

                                  <li class="list-header">My Panel</li>

                                  <li>
          						                <a href="../profile/">
          						                    <i class="fa fa fa-user"></i>
          						                    <span class="menu-title">My Profile</span><i class="arrow"></i>
          						                </a>

          						            </li>

                                  <li>
          						                <a href="../dataSet/">
          						                    <i class="fa fa fa-file"></i>
          						                    <span class="menu-title">My Data Sets</span><i class="arrow"></i>
          						                </a>

          						            </li>

                                  <li>
          						                <a href="../jobs">
          						                    <i class="fa fa fa-archive"></i>
          						                    <span class="menu-title">My Jobs</span><i class="arrow"></i>
          						                </a>

          						            </li>

                                  <li>
          						                <a href="../jobsQueue">
          						                    <i class="fa fa fa-archive"></i>
          						                    <span class="menu-title">My Jobs in Queue</span><i class="arrow"></i>
          						                </a>

          						            </li>

																	<li>
          						                <a href="../models">
          						                    <i class="fa fa fa-graduation-cap"></i>
          						                    <span class="menu-title">My models</span><i class="arrow"></i>
          						                </a>

          						            </li>
																	
																	<li class="list-header">Process Options</li>

                                  <li>
          						                <a href="../statistic">
          						                    <i class="fa fa fa-pie-chart"></i>
          						                    <span class="menu-title">Statistic Process</span><i class="arrow"></i>
          						                </a>

          						            </li>

                                  <li>
          						                <a href="../characteristic">
          						                    <i class="fa fa fa-bar-chart"></i>
          						                    <span class="menu-title">Characteristic Analysis</span><i class="arrow"></i>
          						                </a>

          						            </li>

                                  <li>
          						                <a href="../statisticalTest">
          						                    <i class="fa fa fa-line-chart"></i>
          						                    <span class="menu-title">Statistical Test</span><i class="arrow"></i>
          						                </a>

          						            </li>

                                  <li class="list-header">Machine Learning Options</li>

                                  <li>
          						                <a href="../clustering">
          						                    <i class="fa fa fa-search"></i>
          						                    <span class="menu-title">Clustering Process</span><i class="arrow"></i>
          						                </a>

          						            </li>

                                  <li>
          						                <a href="../training">
          						                    <i class="fa fa fa-graduation-cap"></i>
          						                    <span class="menu-title">Supervised Learning: Classification</span><i class="arrow"></i>
          						                </a>

          						            </li>

                                  <li>
          						                <a href="../prediction">
          						                    <i class="fa fa fa-line-chart"></i>
          						                    <span class="menu-title">Supervised Learning: Prediction</span><i class="arrow"></i>
          						                </a>

          						            </li>

																	<li>
																			<a href="../linearModels">
																					<i class="fa fa fa-bar-chart"></i>
																					<span class="menu-title">Supervised Learning: Linear Models</span><i class="arrow"></i>
																			</a>

																	</li>

																	<li class="list-header">Developers and Information</li>

																	<li>
          						                <a href="../aboutUs">
          						                    <i class="fa fa-users"></i>
          						                    <span class="menu-title">About Us</span><i class="arrow"></i>
          						                </a>

          						            </li>
                                  <li>
          						                <a href="../">
          						                    <i class="fa fa fa-home"></i>
          						                    <span class="menu-title">Home</span><i class="arrow"></i>
          						                </a>

          						            </li>


						            </ul>

                    <!--================================-->
                    <!--End menu-->

                </div>
            </nav>
            <!--===================================================-->
            <!--END MAIN NAVIGATION-->

        </div>



        <!-- FOOTER -->
        <!--===================================================-->
        <footer id="footer">

            <!-- Visible when footer positions are fixed -->
            <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
            <div class="show-fixed pad-rgt pull-right">
                You have <a href="#" class="text-main"><span class="badge badge-danger">3</span> pending action.</a>
            </div>






            <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
            <!-- Remove the class "show-fixed" and "hide-fixed" to make the content always appears. -->
            <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

            <p class="pad-lft">&#0169; 2019 Developed by <a href="http://pesb2.cl/dmakitWeb"> DMAKit Group, </a>Centre for Biothecnology and Bioengineering, CeBiB, FCFM, Universidad de Chile</p>



        </footer>
        <!--===================================================-->
        <!-- END FOOTER -->


        <!-- SCROLL PAGE BUTTON -->
        <!--===================================================-->
        <button class="scroll-top btn">
            <i class="pci-chevron chevron-up"></i>
        </button>
        <!--===================================================-->



    </div>
    <!--===================================================-->
    <!-- END OF CONTAINER -->

   <!-- modal section -->
</body>
</html>
