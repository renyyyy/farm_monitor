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
      <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet"><!-- FONT AWESOME ICON STYLESHEET -->
      <link rel="stylesheet" href="assets/data-tables/DT_bootstrap.css"><!-- DATATABLE CSS -->
      <link href="css/style.css" rel="stylesheet"><!-- THEME BASIC CSS -->
      <link href="css/style-responsive.css" rel="stylesheet"><!-- THEME BASIC RESPONSIVE  CSS -->
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
                     <input type="text" class="form-control search" placeholder="搜索">
                  </li>
                  <li class="dropdown">
                     <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                     <img alt="" src="img/avatar1_small.jpg">
                     <span class="username">小蕊蕊</span>
                     <b class="caret"></b>
                     </a>
                     <ul class="dropdown-menu extended logout">
                        <li class="log-arrow-up"></li>
                        <li><a href="#"><i class=" fa fa-suitcase"></i>资料</a></li>
                        <li><a href="#"><i class="fa fa-cog"></i> 设置</a></li>
                        <li><a href="#"><i class="fa fa-bell-o"></i> 通知</a></li>
                        <li><a href="login.php"><i class="fa fa-key"></i> 注销</a></li>
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
                        <li><a href="gallery.php">蔬菜日记</a></li>
                        <li><a href="todo_list.html">Todo List</a></li>
                        <li><a href="draggable_portlet.html">Draggable Portlets</a></li>
                     </ul>
                  </li>
                 
                  <li class="sub-menu">
                     <a href="javascript:;" class="active">
                     <i class="fa fa-th"></i>
                     <span>照料情况</span>
                     <span class="label label-inverse span-sidebar">3</span>
                     </a>
                     <ul class="sub">
                       <li><a href="all_list.php">田地总览表</a></li>
                        <li><a href="responsive_table.html">Responsive Table</a></li>
                        <li class="active"><a href="pesticide.php">农药日历表</a></li>
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
                        <li><a href="pesticide_chart.php">农药量分析图</a></li>
                       <li><a href="fertilizer_chart.php">施肥量分析图</a></li>
                       <li><a href="water_chart.php">浇水量分析图</a></li>
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
            <section class="wrapper site-min-height">
               <section class="panel">
                  <header class="panel-heading">
                     <span class="label label-primary">施肥日历表</span>
                     <span class="tools pull-right">
                     <a href="javascript:;" class="fa fa-chevron-down"></a>
                     <a href="javascript:;" class="fa fa-times"></a>
                     </span>
                  </header>
                  <div class="panel-body">

	

	    <div class="panel-body">
                     <div class="adv-table editable-table ">
                       
                        <div class="space15"></div>
                        <table  class="table table-striped table-hover table-bordered" >
                           <thead>
                              <tr>
                                 <th>日期</th>
								 <th class="hidden-phone">肥料种类</th>
                                 <th class="hidden-phone">施肥量/克</th>
                                 <th class="hidden-phone">天气</th>
                                 <th class="hidden-phone">温度/℃</th>
								  <th class="hidden-phone">湿度/%</th>
                                 <th>操作</th>
                                 
                              </tr>
                           </thead>
                          
									  <form method="post" class="form-x" action="fertilizer_update.php">  
									 <tr>
									<td align="center"><?php echo $row['fertilizer_id'] ?>日</td>
									 <td>									  
													<select name="fertilizer_species" class="form-control m-bot15">
													  <option  value="0">氮肥</option>
													  <option  value="1">磷肥</option>
													  <option  value="2">钾肥</option>
													</select>  
													<input type="hidden" name="fertilizer_id" value="<?php echo $_GET['fertilizer_id'] ?>">
                                    </td>							
									
									<td><input type="text" class="form-control small" value="<?php echo $row['fertilizer_yield'] ?>" name="fertilizer_yield"  />
									    <input type="hidden" name="fertilizer_id" value="<?php echo $_GET['fertilizer_id'] ?>">
									  </td>
									  
									  <td>
									  
													<select name="fertilizer_weather" class="form-control m-bot15">
														  <option  value="0">晴天</option>
														  <option  value="1">雨天</option>
														  <option  value="2">阴天</option>
													</select>  
													<input type="hidden" name="fertilizer_id" value="<?php echo $_GET['fertilizer_id'] ?>">
												 </select>
									  </td>
									  
									  <td><input type="text" class="form-control small" value="<?php echo $row['fertilizer_temperature'] ?>" name="fertilizer_temperature" data-validate="required:请输入温度" />
									  <input type="hidden" name="id" value="<?php echo $_GET['fertilizer_id'] ?>">
									  </td>
									  <td><input type="text" class="form-control small" value="<?php echo $row['fertilizer_humidity'] ?>" name="fertilizer_humidity" data-validate="required:请输入湿度" />
									  <input type="hidden" name="id" value="<?php echo $_GET['fertilizer_id'] ?>">
									  </td>
									  
									<td><button class="label label-success" type="submit"> 提交</button>
									<a class="label label-danger" href="fertilizer.php"> 取消</a> </td>
									</form>
									
								</tr>
								
					     </table>
                     </div>
	         
	


		  
      </div>
                 </div>
               </section>
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


