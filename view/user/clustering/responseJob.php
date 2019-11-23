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

    <!--Demo [ DEMONSTRATION ]-->
    <link href="../css/demo/nifty-demo.min.css" rel="stylesheet">

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


    <!--=================================================-->

    <!--Demo script [ DEMONSTRATION ]-->
    <script src="../js/demo/nifty-demo.min.js"></script>

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
    <link href="../plugins/bootstrap-validator/bootstrapValidator.min.css" rel="stylesheet">

    <link href="../plugins/datatables/media/css/dataTables.bootstrap.css" rel="stylesheet">
	  <link href="../plugins/datatables/extensions/Responsive/css/responsive.dataTables.min.css" rel="stylesheet">

    <!--Dropzone [ OPTIONAL ]-->
    <script src="../plugins/dropzone/dropzone.min.js"></script>
    <link href="../plugins/dropzone/dropzone.min.css" rel="stylesheet">
    <script src="../js/formatDropzone.js"></script>
    <script src="../plugins/bootstrap-validator/bootstrapValidator.min.js"></script>

    <script src="https://cdn.plot.ly/plotly-latest.min.js"></script>

    <!--DataTables [ OPTIONAL ]-->
    <script src="../plugins/datatables/media/js/jquery.dataTables.js"></script>
	  <script src="../plugins/datatables/media/js/dataTables.bootstrap.js"></script>
	  <script src="../plugins/datatables/extensions/Responsive/js/dataTables.responsive.min.js"></script>

    <!-- script para la carga de datos -->
    <script src="../js/clustering/histogramClustering.js"></script>
    <script src="../js/clustering/loadDataResponse.js">

    </script>
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
                        <h1 class="page-header text-overflow">Clustering Process: Result</h1>

                    </div>
                    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                    <!--End page title-->
                </div>


                <!--Page content-->
                <!--===================================================-->
              <div id="page-content">
                <div class="row">
                  <div class="col-sm-12 col-md-6 col-lg-6">

                    <div class="panel panel-bordered panel-primary">

                      <div class="panel-heading">
                        <h3 class="panel-title">
                          Silhouette Coefficient Histogram
                        </h3>
                      </div>
                      <div class="panel-body">
                        <div id="histogramSiluetas"></div>
                      </div>
                    </div>
                  </div>

                  <div class="col-sm-12 col-md-6 col-lg-6">

                    <div class="panel panel-bordered panel-primary">

                      <div class="panel-heading">
                        <h3 class="panel-title">
                          Calinski-Harabasz Index Histogram
                        </h3>
                      </div>
                      <div class="panel-body">
                        <div id="histogramCalinski"></div>
                      </div>
                    </div>
                  </div>

                  <div class="col-sm-12 col-md-6 col-lg-6">

                    <div class="panel panel-bordered panel-primary">

                      <div class="panel-heading">
                        <h3 class="panel-title">
                          Silhouette Coefficient: Explanation
                        </h3>
                      </div>
                      <div class="panel-body">
                        Silhouette refers to a method of interpretation and validation of consistency within clusters of data. The technique provides a succinct graphical representation of how well each object lies within its cluster.
                        The silhouette value is a measure of how similar an object is to its own cluster (cohesion) compared to other clusters (separation). The silhouette ranges from −1 to +1, where a high value indicates that the object is well matched to its own cluster and poorly matched to neighboring clusters. If most objects have a high value, then the clustering configuration is appropriate. If many points have a low or negative value, then the clustering configuration may have too many or too few clusters.
                      </div>
                    </div>
                  </div>

                  <div class="col-sm-12 col-md-6 col-lg-6">

                    <div class="panel panel-bordered panel-primary">

                      <div class="panel-heading">
                        <h3 class="panel-title">
                          Calinski-Harabasz Index: Explanation
                        </h3>
                      </div>
                      <div class="panel-body">
                        Another method that is based on the concept of dense and well-separated clusters is the Calinski-Harabasz index. To build it, we need first to define the inter cluster dispersion. If we have k clusters with their relative centroids and the global centroid.
                        Calinski-Harabasz define two metrics: the intercluster dispersion (BCD) and intracluster dispersion (WCD). Finally, Calinski-Harabasz index is define as the ration between inter cluster values and intra cluster values. The greater the value of this index, the more considerable the separation generated.
                        It is frequently used when the real labels of the data are unknown, so, together with the silhouettes coefficient, it is a strong indicator of the generated group.
                      </div>
                    </div>
                  </div>

                  <div class="col-sm-12 col-md-12 col-lg-12">

                    <div class="panel panel-bordered panel-primary">

                      <div class="panel-heading">
                        <h3 class="panel-title">
                          Summary DBScan Algorithm
                        </h3>
                      </div>
                      <div class="panel-body">
                        <table id="summaryDBScan" class="table table-striped table-bordered" cellspacing="0" width="100%">
                            <thead>
                              <tr>
                                  <th class="min-tablet">Algorithm</th>
                                  <th class="min-tablet">Params</th>
                                  <th class="min-tablet">Groups</th>
                                  <th class="min-tablet">Calinski-Harabaz index</th>
                                  <th class="min-tablet">Silhouette Coefficient score</th>
                                  <th class="min-tablet">Detail</th>
                              </tr>
                            </thead>
                        </table>
                      </div>
                    </div>
                  </div>

                  <div class="col-sm-12 col-md-12 col-lg-12">

                    <div class="panel panel-bordered panel-primary">

                      <div class="panel-heading">
                        <h3 class="panel-title">
                          Summary Mean Shift Algorithm
                        </h3>
                      </div>
                      <div class="panel-body">

                        <table id="summaryMean" class="table table-striped table-bordered" cellspacing="0" width="100%">
                            <thead>
                              <tr>
                                  <th class="min-tablet">Algorithm</th>
                                  <th class="min-tablet">Params</th>
                                  <th class="min-tablet">Groups</th>
                                  <th class="min-tablet">Calinski-Harabaz index</th>
                                  <th class="min-tablet">Silhouette Coefficient score</th>
                                  <th class="min-tablet">Detail</th>
                              </tr>
                            </thead>
                        </table>
                      </div>
                    </div>
                  </div>

                  <div class="col-sm-12 col-md-12 col-lg-12">

                    <div class="panel panel-bordered panel-primary">

                      <div class="panel-heading">
                        <h3 class="panel-title">
                          Summary Affinity Propagation Algorithm
                        </h3>
                      </div>
                      <div class="panel-body">

                        <table id="summaryAffinity" class="table table-striped table-bordered" cellspacing="0" width="100%">
                            <thead>
                              <tr>
                                  <th class="min-tablet">Algorithm</th>
                                  <th class="min-tablet">Params</th>
                                  <th class="min-tablet">Groups</th>
                                  <th class="min-tablet">Calinski-Harabaz index</th>
                                  <th class="min-tablet">Silhouette Coefficient score</th>
                                  <th class="min-tablet">Detail</th>
                              </tr>
                            </thead>
                        </table>

                      </div>
                    </div>
                  </div>

                  <div class="col-sm-12 col-md-12 col-lg-12">

                    <div class="panel panel-bordered panel-primary">

                      <div class="panel-heading">
                        <h3 class="panel-title">
                          Summary K-Means Algorithm
                        </h3>
                      </div>
                      <div class="panel-body">

                        <table id="summaryKMeans" class="table table-striped table-bordered" cellspacing="0" width="100%">
                            <thead>
                              <tr>
                                  <th class="min-tablet">Algorithm</th>
                                  <th class="min-tablet">Params</th>
                                  <th class="min-tablet">Groups</th>
                                  <th class="min-tablet">Calinski-Harabaz index</th>
                                  <th class="min-tablet">Silhouette Coefficient score</th>
                                  <th class="min-tablet">Detail</th>
                              </tr>
                            </thead>
                        </table>
                      </div>
                    </div>
                  </div>

                  <div class="col-sm-12 col-md-12 col-lg-12">

                    <div class="panel panel-bordered panel-primary">

                      <div class="panel-heading">
                        <h3 class="panel-title">
                          Summary Birch Algorithm
                        </h3>
                      </div>
                      <div class="panel-body">
                        <table id="summaryBirch" class="table table-striped table-bordered" cellspacing="0" width="100%">
                            <thead>
                              <tr>
                                  <th class="min-tablet">Algorithm</th>
                                  <th class="min-tablet">Params</th>
                                  <th class="min-tablet">Groups</th>
                                  <th class="min-tablet">Calinski-Harabaz index</th>
                                  <th class="min-tablet">Silhouette Coefficient score</th>
                                  <th class="min-tablet">Detail</th>
                              </tr>
                            </thead>
                        </table>
                      </div>
                    </div>
                  </div>

                  <div class="col-sm-12 col-md-12 col-lg-12">

                    <div class="panel panel-bordered panel-primary">

                      <div class="panel-heading">
                        <h3 class="panel-title">
                          Summary Agglomerative Algorithm
                        </h3>
                      </div>
                      <div class="panel-body">
                        <table id="summaryAgglomerative" class="table table-striped table-bordered" cellspacing="0" width="100%">
                            <thead>
                              <tr>
                                  <th class="min-tablet">Algorithm</th>
                                  <th class="min-tablet">Params</th>
                                  <th class="min-tablet">Groups</th>
                                  <th class="min-tablet">Calinski-Harabaz index</th>
                                  <th class="min-tablet">Silhouette Coefficient score</th>
                                  <th class="min-tablet">Detail</th>
                              </tr>
                            </thead>
                        </table>
                      </div>
                    </div>
                  </div>
                  <!--

                  <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="panel">

                      <div class="panel-title">
                        Summary Process
                      </div>
                      <div class="panel-body">
                        <table id="summary" class="table table-striped table-bordered" cellspacing="0" width="100%">
                            <thead>
                              <tr>
                                      <th class="min-tablet">Algorithm</th>
                                      <th class="min-tablet">Params</th>
                                      <th class="min-tablet">Groups</th>
                                      <th class="min-tablet">Calinski-Harabaz index</th>
                                      <th class="min-tablet">Silhouette Coefficient score</th>
                                      <th class="min-tablet">Detail</th>
                                    </tr>
                            </thead>
                        </table>
                      </div>
                    </div>
                  </div>
-->
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
                                            <i class="demo-pli-unlock icon-lg icon-fw"></i> Log out
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
          						                    <span class="menu-title">home</span><i class="arrow"></i>
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
