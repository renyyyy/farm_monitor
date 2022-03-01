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
      <meta name="author" content="Olive Enterprise">
	  <!-- END META -->
     
      <!-- BEGIN SHORTCUT ICON -->
	  <link rel="shortcut icon" href="img/favicon.ico">
	  <!-- END SHORTCUT ICON -->
      <title>施肥日历表</title>
	  <!-- BEGIN STYLESHEET-->
		<link href="css/bootstrap.min.css" rel="stylesheet"><!-- BOOTSTRAP CSS -->
		<link href="css/bootstrap-reset.css" rel="stylesheet"><!-- BOOTSTRAP CSS -->
		<link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet"><!-- FONT AWESOME ICON STYLESHEET -->
		<link rel="stylesheet" type="text/css" href="assets/bootstrap-datepicker/css/datepicker.css"><!-- DATEPICKER CSS -->
		<link rel="stylesheet" type="text/css" href="assets/bootstrap-colorpicker/css/colorpicker.css"><!-- COLORPICKER CSS -->
		<link rel="stylesheet" type="text/css" href="assets/bootstrap-daterangepicker/daterangepicker.css"><!-- DATERANGEPICKER CSS -->
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
        <!-- START USER LOGIN DROPDOWN  -->
            <div class="top-nav ">
               <ul class="nav pull-right top-menu">
                  <li>
                     <input type="text" class="form-control search" placeholder="搜索">
                  </li>
                  <li class="dropdown">
                     <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                     <img alt="" src="img/avatar1_small.jpg">
                     <span class="username">荷包蛋</span>
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
                       <li><a href="pesticide_chart.php">农药量分析图</a></li>
                        <li><a href="fertilizer_chart.php">施肥量分析图</a></li>
                        <li><a href="water_chart.php">浇水量分析图</a></li>
                        <li><a href="xchart.html">xChart</a></li>
                     </ul>
                  </li>                                          
                  <li>
                     <a href="login.php">
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
            <section class="wrapper site-min-height" >
			   <!-- BEGIN ROW  -->
               <div >
                  <div class="col-lg-12">
                     <section class="panel">
                        <header class="panel-heading">
                           <span class="btn btn-info">添加施肥记录</span>
                           <span class="tools pull-right">
                           <a href="javascript:;" class="fa fa-chevron-down"></a>
                           <a href="javascript:;" class="fa fa-times"></a>
                           </span>
                        </header>
                        <div class="panel-body">
                           <form class="form-horizontal tasi-form" method="post" action="fertilizer_save.php">	  
						   
                            <div class="form-group">
                                 <label class="col-sm-2 control-label col-lg-2" >日期</label>
                                 <div class="col-lg-10">
                                    <div class="row">
                                       <div class="col-lg-2">
                                          <input type="text" id="fertilizer_time" class="form-control" name="fertilizer_time" placeholder="单位‘日’"  >
                                       </div>
                                    </div>
                                 </div>
                              </div>
							 
							  
							  
							  
					          <div class="form-group">							  
                                 <label for="exampleInputFile" class="col-sm-2 control-label col-lg-2">图片上传</label>
								  <div class="col-lg-2" >
                                 <input type="file" id="image1" name="image1" value="+ 浏览上传" class="button bg-blue margin-left" >
								  </div>
								   <div class="text">
                                          <p class="help-block">上传农作物目前生长状态图片</p>
                                       </div>
                               </div>
							 
								
								
							     <div class="form-group">
                                 <label class="col-sm-2 control-label col-lg-2" >肥料种类</label>
                                 <div class="col-lg-10">
                                    <select class="form-control m-bot15"  name="fertilizer_species" >
                                       <option value="0">氮肥</option>
                                       <option value="1">磷肥</option>
                                       <option value="2">钾肥</option>                                     
                                    </select>
                                 </div>
                              </div>
							   
							   
							   
							   <div class="form-group">
                                 <label class="col-sm-2 control-label col-lg-2" >施肥量</label>
                                 <div class="col-lg-10">
                                    <div class="row">
                                       <div class="col-lg-2">
                                          <input type="text" class="form-control"  id="fertilizer_yield" value="" name="fertilizer_yield" placeholder="单位’L‘">
                                       </div>
                                    </div>
                                 </div>
                              </div>
							  
							  <div class="form-group">
                                 <label class="col-sm-2 control-label col-lg-2" >天气</label>
                                 <div class="col-lg-10">
                                    <div class="radio">
                                       <label>
                                       <input type="radio" name="fertilizer_weather" id="fertilizer_weather" value="0" checked>
                                      晴天
                                       </label>
                                    </div>
                                  
                                    <div class="radio">
                                       <label>
                                       <input type="radio" name="fertilizer_weather" id="fertilizer_weather" value="1">
                                      雨天
                                       </label>
                                    </div>
                                    <div class="radio">
                                       <label>
                                       <input type="radio" name="fertilizer_weather" id="fertilizer_weather" value="2">
                                      阴天
                                       </label>
                                    </div>
                                 </div>
                              </div>
							     <div class="form-group">
                                 <label class="col-sm-2 control-label col-lg-2" >温度</label>
                                 <div class="col-lg-10">
                                    <div class="row">
                                       <div class="col-lg-2">  
                                          <input type="text" class="form-control" value="" id="fertilizer_temperature" name="fertilizer_temperature" placeholder="单位’℃‘" >
                                       </div>
                                    </div>
                                 </div>
                              </div>
							  
							     <div class="form-group">
                                 <label class="col-sm-2 control-label col-lg-2" >湿度</label>
                                 <div class="col-lg-10">
                                    <div class="row">
                                       <div class="col-lg-2">
                                          <input type="text" class="form-control" value="" id="fertilizer_humidity" name="fertilizer_humidity" placeholder="单位‘%‘" >
                                       </div>
                                    </div>
                                 </div>
                              </div>	

															   <div class="form-group">
                                 <label class="col-sm-9 control-label col-lg-2" >施肥记录介绍</label>
								 
								   <div class="col-lg-8">
										  <textarea name="fertilizer_introduce" id="fertilizer_introduce"></textarea>
										  <div class="tips"></div>
										</div>
								 
                                
                              </div>	


								
							   <div class="form-group">
                                 <div class="col-lg-offset-2 col-lg-10">
                                    <button type="submit" class="btn btn-danger">提 交</button>
                                 </div>
                              </div>
                           </form>
                        </div>
                     </section>
                  </div>
               </div>
			   <!-- END ROW  -->
            </section>
			<!-- END WRAPPER  -->
         </section>
		 <!-- END MAIN CONTENT -->
         <!-- BEGIN FOOTER -->
		 <footer class="site-footer">
            <div class="text-center">
               2018 &copy; Farm Admin by <a href="" target="_blank">Dream Team</a>.
               <a href="http://www.mycodes.net" class="go-top">
               <i class="fa fa-angle-up"></i>
               </a>
            </div>
         </footer>
		 <!-- END  FOOTER -->
      </section>
	  <!-- END SECTION -->
	  	 	  <!-- 配置文件 -->
    <script type="text/javascript" src="plugin/ueditor/ueditor.config.js"></script>
    <!-- 编辑器源码文件 -->
    <script type="text/javascript" src="plugin/ueditor/ueditor.all.js"></script>
    <!-- 实例化编辑器 -->
    <script type="text/javascript">
        var ue = UE.getEditor('fertilizer_introduce');
    </script>


	  <!-- BEGIN JS -->
		<script src="js/jquery.js" ></script><!-- BASIC JS LIABRARY -->
		<script src="js/bootstrap.min.js" ></script><!-- BOOTSTRAP JS  -->
		<script src="js/jquery.dcjqaccordion.2.7.js"></script><!-- ACCORDING JS -->
		<script src="js/jquery.scrollTo.min.js" ></script><!-- SCROLLTO JS  -->
		<script src="js/jquery.nicescroll.js" > </script><!-- NICESCROLL JS  -->
		<script src="js/jquery-ui-1.9.2.custom.min.js" ></script><!-- JQUERY UI JS  -->
		<script src="js/jquery.dcjqaccordion.2.7.js"></script><!-- ACCORDIN JS  -->
		<script src="js/bootstrap-switch.js" ></script> <!-- BOOTSTRAP SWITCH JS  -->
		<script src="js/jquery.tagsinput.js" ></script> <!-- TAGS INPUT JS  -->
		<script src="js/ga.js"></script><!-- GA JS  -->
		<script src="assets/bootstrap-datepicker/js/bootstrap-datepicker.js"></script><!-- DATEPICKER JS  -->
		<script src="assets/bootstrap-daterangepicker/date.js"></script><!-- DATE JS  -->
		<script src="assets/bootstrap-daterangepicker/daterangepicker.js"></script><!-- DATERANGE PICKER JS  -->
		<script src="assets/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script><!-- COLOR PICKER JS  -->
		<script src="assets/ckeditor/ckeditor.js"></script><!-- CKEDITOR JS  -->
		<script src="assets/bootstrap-inputmask/bootstrap-inputmask.min.js"></script><!-- INPUT MASK JS  -->
		<script src="js/respond.min.js" ></script><!-- RESPOND JS  -->
		<script src="js/common-scripts.js" ></script> <!-- BASIC COMMON JS  -->
		<script src="js/form-component.js" ></script><!-- FORM COMPONENT PAGE JS  -->
		<!-- END JS -->
   </body>
</html>


