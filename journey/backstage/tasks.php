<?php
	require("conn.php");
	$feedbackInfo = $mongo->find("feedback");
	$travelsInfo =$mongo->find("travels");
	$usersInfo = $mongo->find("users");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	
	<!-- start: Meta -->
	<meta charset="utf-8">
	<title>startjourney-网站动态</title>
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
				<li><a href="#">任务中心</a></li>
			</ul>

			<div class="row-fluid">
				
				<!-- <div class="span7">
					<h1>任务</h1>
					
					<div class="priority high"><span>高优先级</span></div>
					
					<div class="task high">
						<div class="desc">
							<div class="title">jokerhan</div>
							<div>用户申请认证。</div>
						</div>
						<div class="time">
							<div class="date">Aug21,2016</div>
							<div> 2 day</div>
						</div>
					</div>
		
					<div class="task high last">
						<div class="desc">
							<div class="title">Sky</div>
							<div>用户申请认证。</div>
						</div>
						<div class="time">
							<div class="date">Aug20,2016</div>
							<div> 3 day</div>
						</div>
					</div>
					
					<div class="priority medium"><span>中优先级</span></div>
					
					<div class="task medium">
						<div class="desc">
							<div class="title">Jxx SDFGSADF </div>
							<div>新游记待审核通过。</div>
						</div>
						<div class="time">
							<div class="date">Aug22,2016</div>
							<div> 1 day</div>
						</div>
					</div>
					<div class="task medium last">
						<div class="desc">
							<div class="title">Root</div>
							<div>新游记待审核通过。</div>
						</div>
						<div class="time">
							<div class="date">Aug20,2016</div>
							<div> 3 day</div>
						</div>
					</div>
					
					<div class="priority low"><span>低优先级</span></div>
					
					<div class="task low">
						<div class="desc">
							<div class="title">Sky</div>
							<div>网站新用户注册。</div>
						</div>
						<div class="time">
							<div class="date">Aug152016</div>
							<div> 8 day</div>
						</div>
					</div>
					<div class="task low">
						<div class="desc">
							<div class="title">Joker</div>
							<div>网站新用户注册。</div>
						</div>
						<div class="time">
							<div class="date">Aug142016</div>
							<div> 9 day</div>
						</div>
					</div>
					<div class="task low">
						<div class="desc">
							<div class="title">Jxx</div>
							<div>网站新用户注册。</div>
						</div>
						<div class="time">
							<div class="date">Aug132016</div>
							<div> 10 day</div>
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
					
				</div> -->
				
				<div class="span5 noMarginLeft">
					
					<div class="dark">
					
					<h1>时间轴</h1>
					
					<div class="timeline">
						<?php
							foreach($travelsInfo as $key =>$value){
								echo "
									<div class=\"timeslot\">
										
										<div class=\"task\">
												<span>
													<span class=\"type\">".$value['belongTo']."</span>
														<span class=\"details\">
															上传了新游记。
														</span>
													<span>
													时间
														<span class=\"remaining\">
															".$value['date']."
														</span>	
													</span> 
												</span>
											<div class=\"arrow\"></div>
										</div>	

										<div class=\"icon\">
											<i class=\"icon-map-marker\"></i>
										</div>
										<div class=\"time\">
										".$value['date']."
										</div>	
											
									</div>";
							}
						?>

						<div class="clearfix"></div>
						
						<?php 
							foreach($usersInfo as $key =>$value){
								echo "
									<div class=\"timeslot alt\">
										<div class=\"task\">
											<span>
												<span class=\"type\">".$value['username']."</span>
													<span class=\"details\">
														注册了网站。
													</span>
												<span>
												时间
													<span class=\"remaining\">
													".$value['signTime']."
													</span>	
												</span>
											</span>
												<div class=\"arrow\"></div>
										</div>

										<div class=\"icon\">
											<i class=\"icon-phone\"></i>
										</div>
										<div class=\"time\">
										".$value['signTime']."
										</div>	
									</div>";
							}
						?>
					
						<?php
							foreach($feedbackInfo as $key =>$value){
								echo "
									<div class=\"timeslot\">
										<div class=\"task\">
											<span>
												<span class=\"type\">".$value['email']."</span>
												<span class=\"details\">
													发送了反馈
												</span>
												<span>
													时间
													<span class=\"remaining\">
														".$value['date']."
													</span>	
												</span> 
											</span>
											<div class=\"arrow\"></div>
										</div>

										<div class=\"icon\">
											<i class=\"icon-envelope\"></i>
										</div>
										<div class=\"time\">
										".$value['date']."
										</div>		
									</div>";
						}
						?>			
					
						<!-- <div class="timeslot alt">
					    	
							<div class="task">
					    		<span>
									<span class="type">Root</span>
									<span class="details">
										网站管理员管理。
									</span>
									<span>
										时间
										<span class="remaining">
											3h 38m 15s
										</span>	
									</span> 
								</span>
								<div class="arrow"></div>
							</div>
							<div class="icon">
								<i class="icon-calendar"></i>
							</div>
							<div class="time">
								3:43 PM
							</div>	
								
					    </div>
					
						<div class="timeslot">
					    	
							<div class="task">
					    		<span>
									<span class="type">Jxx</span>
									<span class="details">
										普通用户申请认证。
									</span>
									<span>
										时间
										<span class="remaining">
											3h 38m 15s
										</span>	
									</span> 
								</span>
								<div class="arrow"></div>
							</div>							
							<div class="icon">
								<i class="icon-map-marker"></i>
							</div>
							<div class="time">
								3:43 PM
							</div>	
								
					    </div>
					
						<div class="clearfix"></div>
						
						<div class="timeslot alt">
					    	
							<div class="task">
					    		<span>
									<span class="type">TWZ</span>
									<span class="details">
										游客访问网站。
									</span>
									<span>
										时间
										<span class="remaining">
											3h 38m 15s
										</span>	
									</span>
								</span>
								<div class="arrow"></div>
							</div>
							<div class="icon">
								<i class="icon-phone"></i>
							</div>
							<div class="time">
								3:43 PM
							</div>	
								
					    </div>
					
						<div class="timeslot">
					    	
							<div class="task">
					    		<span>
									<span class="type">Joker</span>
									<span class="details">
										普通用户成为认证用户。
									</span>
									<span>
										时间
										<span class="remaining">
											3h 38m 15s
										</span>	
									</span> 
								</span>
								<div class="arrow"></div>
							</div>
							<div class="icon">
								<i class="icon-envelope"></i>
							</div>
							<div class="time">
								3:43 PM
							</div>	
								
					    </div>
					
						<div class="timeslot alt">
					    	
							<div class="task">
					    		<span>
									<span class="type">TWZ</span>
									<span class="details">
										普通用户注册。
									</span>
									<span>
										时间
										<span class="remaining">
											3h 38m 15s
										</span>	
									</span> 
								</span>
								<div class="arrow"></div>
							</div>
							<div class="icon">
								<i class="icon-calendar"></i>
							</div>
							<div class="time">
								3:43 PM
							</div>	
								
					    </div>
					
						<div class="timeslot">
					    	
							<div class="task">
					    		<span>
									<span class="type">Sky</span>
									<span class="details">
										管理员管理网站后台。
									</span>
									<span>
										时间
										<span class="remaining">
											3h 38m 15s
										</span>	
									</span> 
								</span>
								<div class="arrow"></div>
							</div>
							<div class="icon">
								<i class="icon-envelope"></i>
							</div>
							<div class="time">
								3:43 PM
							</div>	
								
					    </div> -->
					    
					</div>
				</div>
				
				</div>	
						
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
