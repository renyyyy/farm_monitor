<?php
include_once("is_login.php");
include_once("inc.php");
$sql="SELECT * FROM `fertilizer`";
$result=mysqli_query($conn,$sql);
?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- BEGIN META --> 
	  <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="description" content="">
      <meta name="author" content="Custom Theme">
	  <!-- END META -->
     
      <!-- BEGIN SHORTCUT ICON -->
	  <link rel="shortcut icon" href="img/favicon.ico">
	  <!-- END SHORTCUT ICON -->
      <title>施肥日历表</title>
	  
	  <!-- BEGIN STYLESHEET --> 
      <link href="css/bootstrap.min.css" rel="stylesheet"><!-- BOOTSTRAP CSS -->
      <link href="css/bootstrap-reset.css" rel="stylesheet"><!-- BOOTSTRAP CSS -->
      <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet"><!-- FONT AWESOME ICON CSS -->
      <link href="assets/advanced-datatable/media/css/demo_page.css" rel="stylesheet"><!-- BOOTSTRAP ADVANCE DATATABLE  CSS -->
      <link href="assets/advanced-datatable/media/css/demo_table.css" rel="stylesheet"><!-- BOOTSTRAP ADVANCE DATATABLE CSS -->
      <link rel="stylesheet" href="assets/data-tables/DT_bootstrap.css"><!-- BOOTSTRAP DATATABLE CSS -->
      <link href="css/style.css" rel="stylesheet"><!-- THEME BASIC CSS -->
      <link href="css/style-responsive.css" rel="stylesheet"><!-- THEME RESPONSIVE CSS -->
      <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
      <![endif]-->
	  <!-- END STYLESHEET --> 
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
        <!-- START USER LOGIN DROPDOWN  -->
            <div class="top-nav ">
               <ul class="nav pull-right top-menu">
                  <li>
                     <input type="text" class="form-control search" placeholder="Search">
                  </li>
                  <li class="dropdown">
                     <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                     <img alt="" src="img/avatar1_small.jpg">
                     <span class="username">杨皮屎</span>
                     <b class="caret"></b>
                     </a>
                     <ul class="dropdown-menu extended logout">
                        <li class="log-arrow-up"></li>
                        <li><a href="#"><i class=" fa fa-suitcase"></i>资料</a></li>
                        <li><a href="#"><i class="fa fa-cog"></i> 设置</a></li>
                        <li><a href="#"><i class="fa fa-bell-o"></i> 通知</a></li>
                        <li><a href="login.html"><i class="fa fa-key"></i> 注销</a></li>
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
                     <a href="javascript:;">
                     <i class="fa fa-cogs"></i>
                     <span>种植记录</span>
                     <span class="label label-primary span-sidebar">5</span>
                     </a>
                     <ul class="sub">
                        <li><a href="grids.html">Grids</a></li>
                        <li><a href="calendar.html">Calendar</a></li>
                        <li><a href="gallery.html">Gallery</a></li>
                        <li><a href="todo_list.html">Todo List</a></li>
                        <li><a href="draggable_portlet.html">Draggable Portlets</a></li>
                     </ul>
                  </li>
                 
                  <li class="sub-menu">
                     <a href="javascript:;" class="active">
                     <i class="fa fa-th"></i>
                     <span>照料情况</span>
                     <span class="label label-inverse span-sidebar">5</span>
                     </a>
                     <ul class="sub">
                        <li class="active"><a href="basic_table.php">田地总览表</a></li>
                        <li><a href="responsive_table.html">Responsive Table</a></li>
                        <li ><a href="pesticide.php">农药日历表</a></li>
                        <li ><a href="fertilizer.php">施肥日历表</a></li>
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
              <a href="login.php">
                <i class="fa fa-user">                
				</i>
                <span>
                  注销                
				  </span>              
				  </a>            
				  </li>
                
               </ul>
            </div>
         </aside>
		 <!-- END SIDEBAR --> 		 
		 <!-- BEGIN MAIN CONTENT --> 
         <section id="main-content">
		    <!-- BEGIN WRAPPER  -->
               <section class="panel">
                  <header class="panel-heading">
                     <span class="label label-primary">DataTables hidden row details example</span>
                     <span class="tools pull-right">
                     <a href="javascript:;" class="fa fa-chevron-down"></a>
                     <a href="javascript:;" class="fa fa-times"></a>
                     </span>
                  </header>
                  <div class="panel-body">
                     <div class="adv-table">
                        <table  class="display table table-bordered" id="hidden-table-info">
                           <thead>
                              <tr>
                                 <th>Rendering engine</th>
                                 <th>Browser</th>
                                 <th class="hidden-phone">Platform(s)</th>
                                 <th class="hidden-phone">Engine version</th>
                                 <th class="hidden-phone">CSS grade</th>
                              </tr>
                           </thead>
                           <tbody>
                              <tr class="gradeX">
                                 <td>Trident</td>
                                 <td>Internet
                                    Explorer 4.0
                                 </td>
                                 <td class="hidden-phone">Win 95+</td>
                                 <td class="center hidden-phone">4</td>
                                 <td class="center hidden-phone">X</td>
                              </tr>
                              <tr class="gradeC">
                                 <td>Trident</td>
                                 <td>Internet
                                    Explorer 5.0
                                 </td>
                                 <td class="hidden-phone">Win 95+</td>
                                 <td class="center hidden-phone">5</td>
                                 <td class="center hidden-phone">C</td>
                              </tr>
                              <tr class="gradeA">
                                 <td>Trident</td>
                                 <td>Internet
                                    Explorer 5.5
                                 </td>
                                 <td class="hidden-phone">Win 95+</td>
                                 <td class="center hidden-phone">5.5</td>
                                 <td class="center hidden-phone">A</td>
                              </tr>
                              <tr class="gradeA">
                                 <td>Trident</td>
                                 <td>Internet
                                    Explorer 6
                                 </td>
                                 <td class="hidden-phone">Win 98+</td>
                                 <td class="center hidden-phone">6</td>
                                 <td class="center hidden-phone">A</td>
                              </tr>
                              <tr class="gradeA">
                                 <td>Trident</td>
                                 <td>Internet Explorer 7</td>
                                 <td class="hidden-phone">Win XP SP2+</td>
                                 <td class="center hidden-phone">7</td>
                                 <td class="center hidden-phone">A</td>
                              </tr>



                           </tbody>
                        </table>
                     </div>
                  </div>
               </section>
			<!-- END WRAPPER  -->
         </section>
		 <!-- END MAIN CONTENT --> 
		 <!-- BEGIN FOOTER --> 
         <footer class="site-footer">
            <div class="text-center">
               2018 &copy; Farm Admin by <a href="" target="_blank">Dream Team</a>.
               <a href="http://localhost/2" class="go-top">
               <i class="fa fa-angle-up"></i>
               </a>
            </div>
         </footer>
		 <!-- END FOOTER --> 
      </section>
	  <!-- END SECTION -->

<!-- BEGIN JS --> 	  
		<script src="js/jquery-1.8.3.min.js" ></script><!-- BASIC JS LIABRARY 1.8.3 -->
		<script src="js/bootstrap.min.js" ></script><!-- BOOTSTRAP JS  -->
		<script src="js/jquery.dcjqaccordion.2.7.js"></script><!-- ACCORDING JS -->
		<script src="js/jquery.scrollTo.min.js" ></script><!-- SCROLLTO JS  -->
		<script src="js/jquery.nicescroll.js" > </script><!-- NICESCROLL JS  -->
		<script src="assets/data-tables/jquery.dataTables.js"></script><!-- DATATABLE JS  -->
		<script src="assets/data-tables/DT_bootstrap.js"></script><!-- DATATABLE JS  -->
		<script src="js/respond.min.js" ></script><!-- RESPOND JS  -->
		<script src="js/common-scripts.js" ></script><!-- BASIC COMMON JS  -->
		<script src="js/editable-table.js" ></script><!-- EDITABLE TABLE JS  -->
      <script >
	     <!-- EDITABLE TABLE FUNCTION  -->
         jQuery(document).ready(function() {
             EditableTable.init();
         });
      </script>
	  <!-- END JS --> 
   </body>
</html>


