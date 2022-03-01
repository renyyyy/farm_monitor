<?php
include_once("is_login.php");
include_once("inc.php");
?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- BEGIN META -->
	  <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="description" content="">
      <meta name="author" content="Olive Enterprise">
	  <!-- END META -->     
      <!-- BEGIN SHORTCUT ICON -->
	  <link rel="shortcut icon" href="img/favicon.ico">
	  <!-- END SHORTCUT ICON -->
      <title>蔬菜日记</title>
	  <!-- BEGIN STYLESHEET-->
		<link href="css/bootstrap.min.css" rel="stylesheet"><!-- BOOTSTRAP CSS -->
		<link href="css/bootstrap-reset.css" rel="stylesheet"><!-- BOOTSTRAP CSS -->
		<link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet"><!-- FONT AWESOME ICON STYLESHEET -->
        <link href="assets/fancybox/source/jquery.fancybox.css" rel="stylesheet"><!-- FANCYBOX CSS -->
		<link rel="stylesheet" type="text/css" href="css/gallery.css"><!-- GALLERY CSS -->
		<link href="css/style.css" rel="stylesheet"><!-- THEME BASIC CSS -->
		<link href="css/style-responsive.css" rel="stylesheet"><!-- THEME BASIC RESPONSIVE  CSS -->
      <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
      <![endif]-->
	  <!-- END STYLESHEET-->
   </head>
   <body>
     <!-- BEGIN SECTION -->
      <section id="container" class="">
	     <!-- BEGIN HEADER -->
         <header class="header white-bg">
            <!-- SIDEBAR TOGGLE BUTTON -->
			<div class="sidebar-toggle-box">
			  <div  data-placement="right" class="fa fa-bars tooltips">
			  </div>
			</div>
        <!-- SIDEBAR TOGGLE BUTTON  END-->
            <a href="index.php" class="logo">农田管家<span>Farm admin</span></a>
                 <!-- START HEADER  NAV -->
                <!-- END HEADER NAV -->
           <!-- START USER LOGIN DROPDOWN  -->
            <div class="top-nav ">
               <ul class="nav pull-right top-menu">
                  <li>
                     <input type="text" class="form-control search" placeholder="Search">
                  </li>
                  <li class="dropdown">
                     <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                     <img alt="" src="img/avatar1_small.jpg">
                     <span class="username">Pruthvi</span>
                     <b class="caret"></b>
                     </a>
                     <ul class="dropdown-menu extended logout">
                        <li class="log-arrow-up"></li>
                        <li><a href="#"><i class=" fa fa-suitcase"></i>Profile</a></li>
                        <li><a href="#"><i class="fa fa-cog"></i> Settings</a></li>
                        <li><a href="#"><i class="fa fa-bell-o"></i> Notification</a></li>
                        <li><a href="login.html"><i class="fa fa-key"></i> Log Out</a></li>
                     </ul>
                  </li>
               </ul>
            </div>
			<!-- END USER LOGIN DROPDOWN  -->
         </header>
		 <!-- END HEADER -->
		 <!-- BEGIN SIDEBAR -->
         <aside>
            <div id="sidebar" class="nav-collapse">
               <ul class="sidebar-menu" id="nav-accordion">
                  <li>
                     <a href="index.php">
                     <i class="fa fa-dashboard"></i>
                     <span>首页</span>
                     </a>
                  </li>
                  <li class="sub-menu">
                     <a href="javascript:;" class="active">
                     <i class="fa fa-cogs"></i>
                     <span>种植记录</span>
                     <span class="label label-primary span-sidebar">5</span>
                     </a>
                     <ul class="sub">
                        <li><a href="grids.html">Grids</a></li>
                        <li><a href="calendar.html">Calendar</a></li>
                        <li class="active"><a href="gallery.php">蔬菜日记</a></li>
                        <li><a href="todo_list.html">Todo List</a></li>
                        <li><a href="draggable_portlet.html">Draggable Portlets</a></li>
                     </ul>
                  </li>
                  <li class="sub-menu">
                     <a href="javascript:;">
                     <i class="fa fa-th"></i>
                     <span>照料情况</span>
                     <span class="label label-inverse span-sidebar">5</span>
                     </a>
                     <ul class="sub">
                         <li><a href="all_list.php">田地总览表</a></li>
                        <li><a href="responsive_table.html">Responsive Table</a></li>
                        <li ><a href="pesticide.php">农药日历表</a></li>
                        <li class="active"><a href="fertilizer.php">施肥日历表</a></li>
                        <li ><a href="water.php">浇水日历表</a></li>
                     </ul>
                  </li>
                  <li class="sub-menu">
                     <a href="javascript:;">
                     <i class=" fa fa-bar-chart-o"></i>
                     <span>图表分析</span>
                     <span class="label label-warning span-sidebar">4</span>
                     </a>
                     <ul class="sub">
                        <li><a href="morris.html">Morris Chart</a></li>
                        <li><a href="chartjs.html">Chartjs Chart</a></li>
                        <li><a href="flot_chart.html">Flot Charts</a></li>
                        <li><a href="xchart.html">xChart</a></li>
                     </ul>
                  </li>
                  <li>
                     <a href="login.html">
                     <i class="fa fa-user"></i>
                     <span>注销</span>
                     </a>
                  </li>
                  
               </ul>
            </div>
         </aside>
		 <!-- END SIDEBAR -->
		 <!-- BEGIN MAIN CONTENT -->
         <section id="main-content">
		    <!-- BEGIN WRAPPER  -->
            <section class="wrapper">
               <section class="panel">
                  <header class="panel-heading">
                     <i class="fa fa-hand-o-down"></i>
                     Image Galley
                     <span class="tools pull-right">
                     <a href="javascript:;" class="fa fa-chevron-down"></a>
                     <a href="javascript:;" class="fa fa-times"></a>
                     </span>
                  </header>
                  <div class="panel-body">
                     <ul class="grid cs-style-3">
                        <li>
                           <figure>
                              <img src="img/gallery/13.jpg" alt="img01">
                              <figcaption>
                                 <h3>一块新鲜的玉米田</h3>
                                 <span>记录玉米选种以及玉米田的选址</span>
                                 <a class="fancybox" data-fancybox-group="group" href="img/gallery/13.jpg">阅读</a>
                              </figcaption>
                           </figure>
                        </li>
                        <li>
                           <figure>
                              <img src="img/gallery/14.jpg" alt="img02">
                              <figcaption>
                                 <h3>玉米成长中</h3>
                                 <span>按时浇水施肥与除虫</span>
                                 <a class="fancybox" data-fancybox-group="group" href="img/gallery/14.jpg">阅读</a>
                              </figcaption>
                           </figure>
                        </li>
                        <li>
                           <figure>
                              <img src="img/gallery/15.jpg" alt="img03">
                              <figcaption>
                                 <h3>玉米成熟时</h3>
                                 <span>玉米的再一次选种</span>
                                 <a class="fancybox" data-fancybox-group="group" href="img/gallery/15.jpg">阅读</a>
                              </figcaption>
                           </figure>
                        </li>
                        <li>
                           <figure>
                              <img src="img/gallery/16.jpg" alt="img04">
                              <figcaption>
                                 <h3>玉米采摘</h3>
                                 <span>摘自成熟的玉米</span>
                                 <a class="fancybox" data-fancybox-group="group" href="img/gallery/16.jpg">阅读</a>
                              </figcaption>
                           </figure>
                        </li>
                        <li>
                           <figure>
                              <img src="img/gallery/17.jpg" alt="img05">
                              <figcaption>
                                 <h3>玉米盘</h3>
                                 <span>玉米盘</span>
                                 <a class="fancybox" data-fancybox-group="group" href="img/gallery/17.jpg">阅读</a>
                              </figcaption>
                           </figure>
                        </li>
                        <li>
                           <figure>
                              <img src="img/gallery/18.jpg" alt="img06">
                              <figcaption>
                                 <h3>挑选玉米剥粒</h3>
                                 <span>每一株都细细筛选</span>
                                 <a class="fancybox" data-fancybox-group="group" href="img/gallery/18.jpg">阅读</a>
                              </figcaption>
                           </figure>
                        </li>
                        <li>
                           <figure>
                              <img src="img/gallery/7.jpg" alt="img07">
                              <figcaption>
                                 <h3>玉米剥粒</h3>
                                 <span>玉米剥粒 </span>
                                 <a class="fancybox" data-fancybox-group="group" href="img/gallery/7.jpg">阅读</a>
                              </figcaption>
                           </figure>
                        </li>
                        <li>
                           <figure>
                              <img src="img/gallery/8.jpg" alt="img08">
                              <figcaption>
                                 <h3>玉米与米</h3>
                                 <span>玉米与米</span>
                                 <a class="fancybox" data-fancybox-group="group" href="img/gallery/8.jpg">阅读</a>
                              </figcaption>
                           </figure>
                        </li>
                        <li>
                           <figure>
                              <img src="img/gallery/9.jpg" alt="img09">
                              <figcaption>
                                 <h3>玉米</h3>
                                 <span>玉米 </span>
                                 <a class="fancybox" data-fancybox-group="group" href="img/gallery/9.jpg">阅读</a>
                              </figcaption>
                           </figure>
                        </li>
                        <li>
                           <figure>
                              <img src="img/gallery/10.jpg" alt="img10">
                              <figcaption>
                                 <h3>观赏玉米</h3>
                                 <span>彩色</span>
                                 <a class="fancybox" data-fancybox-group="group" href="img/gallery/10.jpg">阅读</a>
                              </figcaption>
                           </figure>
                        </li>
                        <li>
                           <figure>
                              <img src="img/gallery/11.jpg" alt="img11">
                              <figcaption>
                                 <h3>彩色玉米</h3>
                                 <span>彩色流行玉米</span>
                                 <a class="fancybox" data-fancybox-group="group" href="img/gallery/11.jpg">阅读</a>
                              </figcaption>
                           </figure>
                        </li>
                        <li>
                           <figure>
                              <img src="img/gallery/12.jpg" alt="img12">
                              <figcaption>
                                 <h3>玉米谷</h3>
                                 <span>成熟季节的一道风景线 </span>
                                 <a class="fancybox" data-fancybox-group="group" href="img/gallery/12.jpg">阅读</a>
                              </figcaption>
                           </figure>
                        </li>
						<li>
                           <figure>
                              <img src="img/gallery/19.jpg" alt="img19">
                              <figcaption>
                                 <h3>成熟番薯</h3>
                                 <span>彩色</span>
                                 <a class="fancybox" data-fancybox-group="group" href="img/gallery/19.jpg">阅读</a>
                              </figcaption>
                           </figure>
                        </li>
                        <li>
                           <figure>
                              <img src="img/gallery/22.jpg" alt="img20">
                              <figcaption>
                                 <h3>彩色番薯</h3>
                                 <span>流行紫薯</span>
                                 <a class="fancybox" data-fancybox-group="group" href="img/gallery/22.jpg">阅读</a>
                              </figcaption>
                           </figure>
                        </li>
                        <li>
                           <figure>
                              <img src="img/gallery/21.jpg" alt="img21">
                              <figcaption>
                                 <h3>番薯谷</h3>
                                 <span>成熟季节的一道风景线 </span>
                                 <a class="fancybox" data-fancybox-group="group" href="img/gallery/21.jpg">阅读</a>
                              </figcaption>
                           </figure>
                        </li>
                     </ul>
                  </div>
               </section>
            </section>
			<!-- END WRAPPER  -->
         </section>
		 <!-- END MAIN CONTENT -->
         <!-- BEGIN FOOTER -->
		 <footer class="site-footer">
            <div class="text-center">
               2018 &copy; 农田管家Fram Admin by <a href="" target="_blank">Dream Team</a>.
               <a href="http://www.mycodes.net" class="go-top">
               <i class="fa fa-angle-up"></i>
               </a>
            </div>
         </footer>
		 <!-- END  FOOTER -->
      </section>
	  <!-- END SECTION -->
	  <!-- BEGIN JS -->
		<script src="js/jquery.js" ></script><!-- BASIC JS LIABRARY -->
		<script src="js/bootstrap.min.js" ></script><!-- BOOTSTRAP JS  -->
		<script src="js/jquery.dcjqaccordion.2.7.js"></script><!-- ACCORDING JS -->
		<script src="assets/fancybox/source/jquery.fancybox.js" ></script><!-- FANCYBOX JS -->
		<script src="js/jquery.scrollTo.min.js" ></script><!-- SCROLLTO JS -->
		<script src="js/jquery.nicescroll.js" ></script><!-- NICESCROLL JS -->
		<script src="js/respond.min.js" ></script><!-- RESPOND JS -->
		<script src="js/modernizr.custom.js" ></script><!-- MORDERNIZR JS -->
		<script src="js/toucheffects.js" ></script><!-- TOUCH EFFECTS JS -->
		<script src="js/common-scripts.js" ></script><!-- BASIC COMMON  JS -->
		<script >
         $(function() {
           //    fancybox
             jQuery(".fancybox").fancybox();
         });
         
      </script>
	  <!-- END JS -->
   </body>
</html>


