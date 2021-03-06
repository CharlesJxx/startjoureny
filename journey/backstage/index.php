<?php
    if(!isset($_SESSION)){
        session_start(); 
    }
    if(!$_SESSION['adminLogined']){
    	header("Location:login.php");
    }
	$admin = $_SESSION['admin'];
	
	$m = new MongoClient("127.0.0.1:27017");
	$db = $m->journey;
	$usersInfo = $db->users;
	$travelsInfo = $db->travels;
	$adminInfo = $db->admin;
	$foodsInfo = $db->cfood;
?>

<!DOCTYPE html>
<html lang="en">
<head>
	
	<!-- start: Meta -->
	<meta charset="utf-8">
	<title>startjourney-后台管理中心</title>
	<meta name="description" content="Bootstrap Metro Dashboard">
	<meta name="author" content="Dennis Ji">
	<meta name="keyword" content="Metro, Metro UI, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
	<!-- end: Meta -->
	
	<!-- start: Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- end: Mobile Specific -->
	
	<!-- start: CSS -->
	<link id="bootstrap-style" href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/bootstrap-responsive.min.css" rel="stylesheet">
	<link id="base-style" href="css/style.css" rel="stylesheet">
	<link id="base-style-responsive" href="css/style-responsive.css" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&subset=latin,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>
	<!-- end: CSS -->
	

	<!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<link id="ie-style" href="css/ie.css" rel="stylesheet">
	<![endif]-->
	
	<!--[if IE 9]>
		<link id="ie9style" href="css/ie9.css" rel="stylesheet">
	<![endif]-->
		
	<!-- start: Favicon -->
	<link rel="shortcut icon" href="img/favicon.ico">
	<!-- end: Favicon -->
	
		
		
		
</head>

<body>
		<!-- start: Header -->
	<?php
		include("header.php");
	?>
	<!-- start: Header -->
	
		<div class="container-fluid-full">
		<div class="row-fluid">
				
			<!-- start: Main Menu -->
			<div id="sidebar-left" class="span2">
				<div class="nav-collapse sidebar-nav">
					<ul class="nav nav-tabs nav-stacked main-menu">
						<li><a href="index.php"><i class="icon-bar-chart"></i><span class="hidden-tablet"> 概览</span></a></li>	
						<li><a href="messages.php"><i class="icon-envelope"></i><span class="hidden-tablet"> 消息中心</span></a></li>
						<li><a href="tasks.php"><i class="icon-tasks"></i><span class="hidden-tablet"> 任务中心</span></a></li>
						<li><a href="form.php"><i class="icon-edit"></i><span class="hidden-tablet"> 表单中心</span></a></li>
						<li><a href="chart.php"><i class="icon-list-alt"></i><span class="hidden-tablet"> 表格中心</span></a></li>
						<li><a href="gallery.php"><i class="icon-picture"></i><span class="hidden-tablet"> 图片中心</span></a></li>
						<li><a href="table.php"><i class="icon-align-justify"></i><span class="hidden-tablet"> 用户组</span></a></li>
					</ul>
				</div>
			</div>
			<!-- end: Main Menu -->
			
			<noscript>
				<div class="alert alert-block span10">
					<h4 class="alert-heading">Warning!</h4>
					<p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
				</div>
			</noscript>
			
			<!-- start: Content -->
			<div id="content" class="span10">
			
			
			<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="index.html">后台管理</a> 
					<i class="icon-angle-right"></i>
				</li>
				<li><a href="#">概览</a></li>
			</ul>

			<div class="row-fluid">
				<!-- purple -->
				<div class="span3 statbox purple" onTablet="span6" onDesktop="span3">
					<div class="boxchart">5,6,7,2,0,4,2,4,8,2,3,3,2</div>
					<div class="number"><?php echo $usersInfo->count();?><i class="icon-arrow-up"></i></div>
					<div class="title">用户数量</div>
					<div id="e1" class="modal hide fade in" style="display: none;color:#000; ">
						<div class="modal-header">
							<a class="close" data-dismiss="modal">×</a>
							<h3>用户数量</h3>
						</div>
						<div class="modal-body">
							<h4>数据统计结果</h4>
							
							<p>截至目前网站用户数量为<?php echo $usersInfo->count();?>人。</p>		        
						</div>
						<div class="modal-footer">
							<a href="#" class="btn btn-success">确定</a>
							<a href="#" class="btn" data-dismiss="modal">关闭</a>
						</div>
					</div>
					<div class="footer">
						<a data-toggle="modal" href="#e1"> 查看详细报告</a>
					</div>	
				</div>
				<!-- purple end -->

				<!-- green -->
				<div class="span3 statbox green" onTablet="span6" onDesktop="span3">
					<div class="boxchart">5,6,7,2,0,4,2,4,8,2,3,3,2</div>
					<div class="number"><?php echo $adminInfo->count();?><i class="icon-arrow-up"></i></div>
					<div class="title">管理员数量</div>
					<div id="e2" class="modal hide fade in" style="display: none;color:#000; ">
						<div class="modal-header">
							<a class="close" data-dismiss="modal">×</a>
							<h3>管理员数量</h3>
						</div>
						<div class="modal-body">
							<h4>数据统计结果</h4>
							
							<p>截至目前网站管理员数量为<?php echo $adminInfo->count();?>人。</p>		        
						</div>
						<div class="modal-footer">
							<a href="#" class="btn btn-success">确定</a>
							<a href="#" class="btn" data-dismiss="modal">关闭</a>
						</div>
					</div>
					<div class="footer">
						<a data-toggle="modal" href="#e2"> 查看详细报告</a>
					</div>	
				</div>
				<!-- green end -->

				<!-- blue -->
				<div class="span3 statbox blue noMargin" onTablet="span6" onDesktop="span3">
					<div class="boxchart">5,6,7,2,0,4,2,4,8,2,3,3,2</div>
					<div class="number"><?php echo $travelsInfo->count();?><i class="icon-arrow-up"></i></div>
					<div class="title">用户上传的游记数量</div>
					<div id="e3" class="modal hide fade in" style="display: none;color:#000; ">
						<div class="modal-header">
							<a class="close" data-dismiss="modal">×</a>
							<h3>用户上传的游记数量</h3>
						</div>
						<div class="modal-body">
							<h4>数据统计结果</h4>
							
							<p>截至目前网站用户上传的游记数量为<?php echo $travelsInfo->count();?>篇。</p>		        
						</div>
						<div class="modal-footer">
							<a href="#" class="btn btn-success">确定</a>
							<a href="#" class="btn" data-dismiss="modal">关闭</a>
						</div>
					</div>
					<div class="footer">
						<a data-toggle="modal" href="#e3"> 查看详细报告</a>
					</div>	
				</div>
				<!-- blue end -->

				<!-- yellow -->
				<div class="span3 statbox yellow" onTablet="span6" onDesktop="span3">
					<div class="boxchart">5,6,7,2,0,4,2,4,8,2,3,3,2</div>
					<div class="number"><?php echo $foodsInfo->count();?><i class="icon-arrow-up"></i></div>
					<div class="title">记录的美食数量</div>
					<div id="e4" class="modal hide fade in" style="display: none;color:#000; ">
						<div class="modal-header">
							<a class="close" data-dismiss="modal">×</a>
							<h3>记录的美食数量</h3>
						</div>
						<div class="modal-body">
							<h4>数据统计结果</h4>
							
							<p>截至目前网站记录的美食数量为<?php echo $foodsInfo->count();?>个。</p>		        
						</div>
						<div class="modal-footer">
							<a href="#" class="btn btn-success">确定</a>
							<a href="#" class="btn" data-dismiss="modal">关闭</a>
						</div>
					</div>
					<div class="footer">
						<a data-toggle="modal" href="#e4"> 查看详细报告</a>
					</div>	
				</div>
				<!-- yellow end -->	
			</div>		
		
	</div><!--/.fluid-container-->
	
			<!-- end: Content -->
		</div><!--/#content.span10-->
		</div><!--/fluid-row-->
		
	<div class="modal hide fade" id="myModal">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">×</button>
			<h3>Settings</h3>
		</div>
		<div class="modal-body">
			<p>Here settings can be configured...</p>
		</div>
		<div class="modal-footer">
			<a href="#" class="btn" data-dismiss="modal">Close</a>
			<a href="#" class="btn btn-primary">Save changes</a>
		</div>
	</div>
	
	<div class="common-modal modal fade" id="common-Modal1" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-content">
			<ul class="list-inline item-details">
				<li><a href="http://themifycloud.com">Admin templates</a></li>
				<li><a href="http://themescloud.org">Bootstrap themes</a></li>
			</ul>
		</div>
	</div>
	
	<div class="clearfix"></div>
	
	<?php
		include("footer.php");
	?>
	
	<!-- start: JavaScript-->

		<script src="js/jquery-1.9.1.min.js"></script>
	<script src="js/jquery-migrate-1.0.0.min.js"></script>
	
		<script src="js/jquery-ui-1.10.0.custom.min.js"></script>
	
		<script src="js/jquery.ui.touch-punch.js"></script>
	
		<script src="js/modernizr.js"></script>
	
		<script src="js/bootstrap.min.js"></script>
	
		<script src="js/jquery.cookie.js"></script>
	
		<script src='js/fullcalendar.min.js'></script>
	
		<script src='js/jquery.dataTables.min.js'></script>

		<script src="js/excanvas.js"></script>
	<script src="js/jquery.flot.js"></script>
	<script src="js/jquery.flot.pie.js"></script>
	<script src="js/jquery.flot.stack.js"></script>
	<script src="js/jquery.flot.resize.min.js"></script>
	
		<script src="js/jquery.chosen.min.js"></script>
	
		<script src="js/jquery.uniform.min.js"></script>
		
		<script src="js/jquery.cleditor.min.js"></script>
	
		<script src="js/jquery.noty.js"></script>
	
		<script src="js/jquery.elfinder.min.js"></script>
	
		<script src="js/jquery.raty.min.js"></script>
	
		<script src="js/jquery.iphone.toggle.js"></script>
	
		<script src="js/jquery.uploadify-3.1.min.js"></script>
	
		<script src="js/jquery.gritter.min.js"></script>
	
		<script src="js/jquery.imagesloaded.js"></script>
	
		<script src="js/jquery.masonry.min.js"></script>
	
		<script src="js/jquery.knob.modified.js"></script>
	
		<script src="js/jquery.sparkline.min.js"></script>
	
		<script src="js/counter.js"></script>
	
		<script src="js/retina.js"></script>

		<script src="js/custom.js"></script>
	<!-- end: JavaScript-->
	
</body>
</html>
