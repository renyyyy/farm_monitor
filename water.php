<?php
include_once("is_login.php");
include_once("inc.php");
$sql="SELECT * FROM `water`";
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
      <title>浇水日历表</title>
	  
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
                     <span class="label label-inverse span-sidebar">5</span>
                     </a>
                     <ul class="sub">
                         <li><a href="all_list.php">田地总览表</a></li>
                        <li><a href="responsive_table.html">Responsive Table</a></li>
                        <li ><a href="pesticide.php">农药日历表</a></li>
                        <li ><a href="fertilizer.php">施肥日历表</a></li>
                        <li class="active"><a href="water.php">浇水日历表</a></li>
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
                     <span class="label label-primary">浇水日历表</span>
                     <span class="tools pull-right">
                     <a href="javascript:;" class="fa fa-chevron-down"></a>
                     <a href="javascript:;" class="fa fa-times"></a>
                     </span>
                  </header>
                  <div class="panel-body">
                     <div class="adv-table editable-table ">
                        <div class="clearfix">
                           <div class="btn-group">
                              <a href="water_add.php" class="btn btn-success green">
                              增加浇水记录 <i class="fa fa-plus"></i>
                              </a>
                           </div>
                           <div class="btn-group pull-right">
                             <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown">工具箱<i class="fa fa-angle-down"></i>
                              </button>
                              <ul class="dropdown-menu pull-right">
                                 <li><a href="#">打印</a></li>
                                 <li><a href="#">保存为PDF格式</a></li>
                                 <li><a href="#">输出到Excel</a></li>
                              </ul>
                           </div>
                        </div>
                        <div class="space15"></div>
                        <table  class="table table-striped table-hover table-bordered" id="editable-sample">
                           <thead>
                              <tr>
                                 <th>日期</th>
                                 <th class="hidden-phone">浇水量</th>
                                 <th class="hidden-phone">天气</th>
                                 <th class="hidden-phone">温度</th>
								  <th class="hidden-phone">湿度</th>
								  <th class="hidden-phone">图片展示</th>
								  <th class="hidden-phone">介绍</th>
                                 <th>操作</th>
                                 
                              </tr>
                           </thead>
             

						  
						  
		                 <?php
	                       if($num=mysqli_num_rows($result))
	                      {
									while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
									{
								?>
									 <tr>
									<td align="center"><?php echo $row['water_id'] ?>日</td>
									<td align="center"><?php echo $row['water_quantity'] ?>L</td>
									<td align="center">  <?php 
									           if($row['water_weather']==0)  echo "晴天";
                                               else if($row['water_weather']==1)  echo "雨天";
									           else echo "阴天";
						                       ?></td>
									<td align="center"><?php echo $row['water_temperature'] ?>℃</td>
									<td align="center"><?php echo $row['water_humidity'] ?>%</td>
									<td><img src="<?php echo $row['water_img']==''?'img/none.jpg':$row['water_img']; ?>" height="50" width="70"></td>
									<td align="center"><?php echo $row['water_introduce'] ?></td>
									<td><a  href="water_edit.php?water_id=<?php echo $row['water_id'] ?>"><span class="label label-success"> 修改</a> </span>
									<a class="label label-danger" href="water_delete.php?water_id=<?php echo $row['water_id'] ?>"> 删除</a> </td>
								

								</tr>
								<?php
									}
								}
								?>               							 
					     </table>
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


