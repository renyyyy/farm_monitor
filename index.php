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
     <title>
       农田管家 - 一键管理你的农田
     </title>
     <!-- BEGIN STYLESHEET-->
		<link href="css/bootstrap.min.css" rel="stylesheet"><!-- BOOTSTRAP CSS -->
		<link href="css/bootstrap-reset.css" rel="stylesheet"><!-- BOOTSTRAP CSS -->
		<link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet"><!-- FONT AWESOME ICON CSS -->
		<link href="css/style.css" rel="stylesheet"><!-- THEME BASIC CSS -->
		<link href="css/style-responsive.css" rel="stylesheet"><!-- THEME RESPONSIVE CSS -->
		<link href="assets/morris.js-0.4.3/morris.css" rel="stylesheet"><!-- MORRIS CHART CSS -->
     <!--dashboard calendar-->
     <link href="css/clndr.css" rel="stylesheet"><!-- CALENDER CSS -->
     <!--[if lt IE 9]>
<script src="js/html5shiv.js">
</script>
<script src="js/respond.min.js">
</script>
<![endif]-->
     <!-- END STYLESHEET-->
  </head>
  <body>
    <!-- BEGIN SECTION -->
    <section id="container">
      <!-- BEGIN HEADER -->
      <header class="header white-bg">
        <!-- SIDEBAR TOGGLE BUTTON -->
			<div class="sidebar-toggle-box">
			  <div  data-placement="right" class="fa fa-bars tooltips">
			  </div>
			</div>
        <!-- SIDEBAR TOGGLE BUTTON  END-->
        <a href="index.html" class="logo">
          农田 管家
          <span>
            Farm Admin
          </span>
        </a>
           <!-- START HEADER  NAV -->
        
        <nav class="nav notify-row" id="top_menu">
          
          <ul class="nav top-menu">
            <!-- START NOTIFY TASK BAR -->
            
		  
            <li class="dropdown">
              <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                <i class="fa fa-tasks">
                </i>
                <span class="badge bg-success">
                  6
                </span>
              </a>
              <ul class="dropdown-menu extended tasks-bar">
                <li class="notify-arrow notify-arrow-blue">
                </li>
                <li>
                  <p class="blue">
                    你有6条工作进度！
                  </p>
                </li>
                <li>
                  <a href="#">
                    <div class="task-info">
                      <div class="desc">
                        首页 v1.0
                      </div>
                      <div class="percent">
                        80%
                      </div>
                    </div>
                    <div class="progress progress-striped">
                      <div class="progress-bar progress-bar-success set-40" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" >
                        <span class="sr-only">
                          80% 完成 (success)
                        </span>
                      </div>
                    </div>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <div class="task-info">
                      <div class="desc">
                        日历表进度 
                      </div>
                      <div class="percent">
                        17%
                      </div>
                    </div>
                    <div class="progress progress-striped">
                      <div class="progress-bar progress-bar-info set-87" role="progressbar" aria-valuenow="17" aria-valuemin="0" aria-valuemax="100" >
                        <span class="sr-only">
                          17% 完成 (danger)
                        </span>
                      </div>
                    </div>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <div class="task-info">
                      <div class="desc">
                        数据表进度
                      </div>
                      <div class="percent">
                        73%
                      </div>
                    </div>
                    <div class="progress progress-striped">
                      <div class="progress-bar progress-bar-danger set-33" role="progressbar" aria-valuenow="73" aria-valuemin="0" aria-valuemax="100" >
                        <span class="sr-only">
                          73% Complete (warning)
                        </span>
                      </div>
                    </div>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <div class="task-info">
                      <div class="desc">
                        分析图进度
                      </div>
                      <div class="percent">
                        85%
                      </div>
                    </div>
                    <div class="progress progress-striped active">
                      <div class="progress-bar set-45" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" >
                        <span class="sr-only">
                          85% 完成
                        </span>
                      </div>
                      
                    </div>
                  </a>
                </li>
                <li class="external">
                  <a href="#">
                    查看任务栏
                  </a>
                </li>
              </ul>
            </li>
			
			<!-- END NOTIFY TASK BAR -->
			
			<!-- START NOTIFY INBOX BAR -->
            <li id="header_inbox_bar" class="dropdown">
              <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                <i class="fa fa-envelope-o">
                </i>
                <span class="badge bg-important">
                  3
                </span>
              </a>
              <ul class="dropdown-menu extended inbox">
                <li class="notify-arrow notify-arrow-blue">
                </li>
                <li>
                  <p class="blue">
                    你有3条新消息！
                  </p>
                </li>
                <li>
                  <a href="#">
                    <span class="photo">
                      <img alt="avatar" src="./img/avatar-mini.jpg">
                    </span>
                    <span class="subject">
                      <span class="from">
                        张皮皮
                      </span>
                      <span class="time">
                        刚刚
                      </span>
                    </span>
                    <span class="message">
                      今天你浇水了吗!
                    </span>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <span class="photo">
                      <img alt="avatar" src="./img/avatar-mini2.jpg">
                    </span>
                    <span class="subject">
                      <span class="from">
                        姜硬
                      </span>
                      <span class="time">
                        10 分钟
                      </span>
                    </span>
                    <span class="message">
                      嗨，听说水果玉米新品种很好吃 ?
                    </span>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <span class="photo">
                      <img alt="avatar" src="./img/avatar-mini3.jpg">
                    </span>
                    <span class="subject">
                      <span class="from">
                        韩家里
                      </span>
                      <span class="time">
                        5分钟
                      </span>
                    </span>
                    <span class="message">
                      这块田很阔以！
                    </span>
                  </a>
                </li>
                <li>
                  <a href="#">
                    查看所有消息
                  </a>
                </li>
              </ul>
            </li>
			<!-- END NOTIFY INBOX BAR -->
			
			<!-- START NOTIFY NOTIFICATION BAR -->
			
            <li id="header_notification_bar" class="dropdown">
              <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                <i class="fa fa-bell-o">
                </i>
                <span class="badge bg-warning">
                  7
                </span>
              </a>
              <ul class="dropdown-menu extended notification">
                <li class="notify-arrow notify-arrow-blue">
                </li>
                <li>
                  <p class="blue">
                    你有7条待办消息！
                  </p>
                </li>
                <li>
                  <a href="#">
                    <span class="label label-danger">
                      <i class="fa fa-bolt">
                      </i>
                    </span>
                    玉米收割 #3 区.
                    <span class="small italic">
                      34分钟
                    </span>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <span class="label label-warning">
                      <i class="fa fa-bell">
                      </i>
                    </span>
                    番薯浇水 #10 区.
                    <span class="small italic">
                      1 小时
                    </span>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <span class="label label-danger">
                      <i class="fa fa-bolt">
                      </i>
                    </span>
                    玉米管理人员到位 24%.
                    <span class="small italic">
                      4 小时
                    </span>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <span class="label label-success">
                      <i class="fa fa-plus">
                      </i>
                    </span>
                    新的玉米品种到达仓库.
                    <span class="small italic">
                      刚刚
                    </span>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <span class="label label-info">
                      <i class="fa fa-bullhorn">
                      </i>
                    </span>
                    通知分销商.
                    <span class="small italic">
                      10 分钟
                    </span>
                  </a>
                </li>
                <li>
                  <a href="#">
                    查看所有待办
                  </a>
                </li>
              </ul>
            </li>
            <!-- END NOTIFY NOTIFICATION BAR -->
            
          </ul>
          
          
        </nav>
		<!-- END HEADER NAV -->
        
		 <!-- START USER LOGIN DROPDOWN  -->
		
        <div class="top-nav ">
          <ul class="nav pull-right top-menu">
            <li>
              <input type="text" class="form-control search" placeholder="搜索">
            </li>
            <li class="dropdown">
              <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                <img alt="" src="img/yps1.jpg">
                <span class="username">
                  杨蕊小仙女
                </span>
                <b class="caret">
                </b>
              </a>
              <ul class="dropdown-menu extended logout">
                <li class="log-arrow-up">
                </li>
                <li>
                  <a href="#">
                    <i class=" fa fa-suitcase">
                    </i>
                    资料
                  </a>
                </li>
                <li>
                  <a href="#">
                    <i class="fa fa-cog">
                    </i>
                    设置
                  </a>
                </li>
                <li>
                  <a href="#">
                    <i class="fa fa-bell-o">
                    </i>
                    通知
                  </a>
                </li>
                <li>
                  <a href="login.php">
                    <i class="fa fa-key">
                    </i>
                    注销
                  </a>
                </li>
              </ul>
            </li>
          </ul>
        </div>
		<!-- END USER LOGIN DROPDOWN  -->
      </header>
      <!-- END HEADER -->
      <!-- BEGIN SIDEBAR -->
      <aside>
        <div id="sidebar" class="nav-lapse">
          <ul class="sidebar-menu" id="nav-accordion">
            <li >
              <a href="index.php" class="active">
                <i class="fa fa-dashboard">                </i>
                <span>
                  首页                </span>              </a>            </li>
            <li class="sub-menu">
              <a href="javascript:;">
                <i class="fa fa-cogs">                </i>
                <span>
                  种植记录             </span>
                <span class="label label-primary span-sidebar">
                  5                </span>              </a>
              <ul class="sub">
                <li>
                  <a href="grids.html">
                    Grids                  </a>                </li>
                <li>
                  <a href="calendar.html">
                    Calendar                  </a>                </li>
                <li>
                  <a href="gallery.php">
                    蔬菜日记                </a>                </li>
                <li>
                  <a href="todo_list.html">
                    Todo List                  </a>                </li>
                <li>
                  <a href="draggable_portlet.html">
                    Draggable Portlets                  </a>                </li>
              </ul>
            </li>
            <li class="sub-menu">
              <a href="javascript:;">
                <i class="fa fa-th">                </i>
                <span>
                  照料情况             </span>
                <span class="label label-inverse span-sidebar">
                  5                </span>              </a>
              <ul class="sub">
                <li>
                  <a href="all_list.php">
                    田地总览表                  </a>                </li>
                <li>
                  <a href="responsive_table.html">
                    Responsive Table                  </a>                </li>
                <li>
                  <a href="pesticide.php">
                    农药日历表                 </a>                </li>
                <li>
                  <a href="fertilizer.php">
                    施肥日历表                </a>                </li>
                <li>
                  <a href="water.php">
                    浇水日历表                  </a>                </li>
              </ul>
            </li>
            <li class="sub-menu">
              <a href="javascript:;">
                <i class=" fa fa-bar-chart-o">                </i>
                <span>
                  图表分析               </span>
                <span class="label label-warning span-sidebar">
                  4                </span>              </a>
              <ul class="sub">
                <li>
                  <a href="pesticide_chart.php">
                    农药分析图                  </a>                </li>
                <li>
                  <a href="fertilizer_chart.php">
                    施肥分析图                 </a>                </li>
                <li>
                  <a href="water_chart.php">
                    浇水分析图                 </a>                </li>
                <li>
                  <a href="xchart.html">
                    xChart                  </a>                </li>
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
        <section class="wrapper">
		
		  <!-- 头部BEGIN ROW  -->
          <div class="row state-overview">
		    <!-- 天气窗口BEGIN ROW  -->
		  <div class="panel-heading">
              <section class="panel">
                <div class="weather-bg">
                  <div class="panel-body">
                    <div class="row">
                      <div class="col-xs-6">
                        <i class="fa fa-cloud">
                        </i>
                        今日多云
                      </div>
                      <div class="col-xs-6">
                        <div class="degree">
                          28°
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <footer class="weather-category">
                  <ul>
                    <li class="active">
                      <h5>
                        湿度
                      </h5>
                      45%
                    </li>
                    <li>
                      <h5>
                        风力
                      </h5>
                      5 mph
                    </li>
                  </ul>
                </footer>
                <!-- END  FOOTER -->
              </section>
            </div>
		  <!--天气窗口END-->
		  
            <div class="col-lg-3 ">
              <section class="panel">
                <div class="symbol">
                  <i class="fa fa-tags blue">
                  </i>
                </div>
                <div class="value">
                  <h1 class="count">
                    0
                  </h1>
                  <p>
                    玉米地当前产量
                  </p>
                </div>
              </section>
            </div>
            <div class="col-lg-3 col-sm-6">
              <section class="panel">
                <div class="symbol">
                  <i class="fa fa-tags red">
                  </i>
                </div>
                <div class="value">
                  <h1 class=" count2">
                    0
                  </h1>
                  <p>
                    番薯地当前产量
                  </p>
                </div>
              </section>
            </div>
            <div class="col-lg-3 col-sm-6">
              <section class="panel">
                <div class="symbol">
                  <i class="fa fa-user yellow">
                  </i>
                </div>
                <div class="value">
                  <h1 class=" count3">
                    0
                  </h1>
                  <p>
                    访问人数
                  </p>
                </div>
              </section>
            </div>
            <div class="col-lg-3 col-sm-6">
              <section class="panel">
                <div class="symbol">
                  <i class="fa fa-money purple">
                  </i>
                </div>
                <div class="value">
                  <h1 class=" count4">
                    0
                  </h1>
                  <p>
                    总产量
                  </p>
                </div>
              </section>
            </div>
			
          </div>
		   <!-- 头部END ROW  -->
         
		   <!-- BEGIN ROW  -->
      
		   <!-- END ROW  -->
		   
		
		   <!-- END ROW  -->
		    <!-- 田地BEGIN ROW  -->
          <div class="row">
		  
		  <div class="col-lg-6">
             <div class="panel terques-chart">
                  <div class="panel-body chart-texture">
                    <div class="chart">
                      <div class="heading">
                        <span>
                          玉米地
                        </span>
                        
                      </div>
                      <div>
					  <a href="pesticide.php">
					  <img src="./img/玉米地.jpg" height="300" width="500" />
					  </a>
					  </div>
                    </div>
                  </div>
                  <div class="chart-tittle">
                    <span class="title">
                      点击图片进入玉米地
                    </span>
                  </div>
                </div>
			</div>
			
          	  <div class="col-lg-6">
             <div class="panel green-chart">
                  <div class="panel-body">
                    <div class="chart">
                      <div class="heading">
                        <span>
                          番薯地
                        </span>                      
                      </div> 
                      <div>
					  <a href="water.php">
					  <img src="./img/番薯地.jpg" height="300" width="500" />
					  </a>
                      </div>
                    </div>
                  </div>
                  <div class="chart-tittle">
                    <span class="title">
                     点击图片进入番薯地
                    </span>                 
                  </div>
                </div>
			</div>
			
          </div>
		   <!-- 田地END ROW  -->
        </section>
		<!-- END WRAPPER  -->
      </section>
      <!-- END MAIN CONTENT -->
      <!-- BEGIN FOOTER -->
      <footer class="site-footer">
        <div class="text-center">
          2018 &copy; 农田管家 Farm Admin by 
          <a href="" target="_blank">
            Dream Team
          </a>
          <a href="http://www.baidu.com" class="go-top">
            <i class="fa fa-angle-up">
            </i>
          </a>
        </div>
      </footer>
      <!-- END  FOOTER -->
    </section>
    <!-- END SECTION -->
    <!-- BEGIN JS -->
    <script src="js/jquery-1.8.3.min.js" ></script><!-- BASIC JQUERY 1.8.3 LIB. JS -->
    <script src="js/bootstrap.min.js" ></script><!-- BOOTSTRAP JS -->
    <script src="js/jquery.dcjqaccordion.2.7.js"></script><!-- ACCORDIN JS -->
    <script src="js/jquery.scrollTo.min.js" ></script><!-- SCROLLTO JS -->
    <script src="js/jquery.nicescroll.js" ></script><!-- NICESCROLL JS -->
    <script src="js/respond.min.js" ></script><!-- RESPOND JS -->
    <script src="js/jquery.sparkline.js"></script><!-- SPARKLINE JS -->
    <script src="js/sparkline-chart.js"></script><!-- SPARKLINE CHART JS -->
    <script src="js/common-scripts.js"></script><!-- BASIC COMMON JS -->
    <script src="js/count.js"></script><!-- COUNT JS -->
    <!--Morris-->
    <script src="assets/morris.js-0.4.3/morris.min.js" ></script><!-- MORRIS JS -->
    <script src="assets/morris.js-0.4.3/raphael-min.js" ></script><!-- MORRIS  JS -->
    <script src="js/chart.js" ></script><!-- CHART JS -->
    <!--Calendar-->
    <script src="js/calendar/clndr.js"></script><!-- CALENDER JS -->
    <script src="js/calendar/evnt.calendar.init.js"></script><!-- CALENDER EVENT JS -->
    <script src="js/calendar/moment-2.2.1.js"></script><!-- CALENDER MOMENT JS -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.5.2/underscore-min.js"></script><!-- UNDERSCORE JS -->
    <script src="assets/jquery-knob/js/jquery.knob.js" ></script><!-- JQUERY KNOB JS -->
    <script >
      //knob
      $(".knob").knob();
      
    </script>
    <!-- END JS -->
  </body>
</html>


