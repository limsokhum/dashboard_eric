﻿<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Preschool - Bootstrap Admin Template</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

	<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">

	<link href="../../../../css?family=Roboto:300,400,500,700,900" rel="stylesheet">

	<link rel="stylesheet" href="assets/css/bootstrap.min.css">

	<link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">
	<link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">

	<link rel="stylesheet" href="assets/css/style.css">

</head>

<body>

	<div class="main-wrapper">

		<!-- start header -->
		<?php include('include/header.php');?>
		<!-- ent header -->

		<!-- start lift sidebar  -->
		<?php include('include/sidebar.php');?>
		<!-- end left sidebar -->


		<div class="page-wrapper">
			<div class="content container-fluid">
				<div class="page-header">
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-6 col-12">
							<h5 class="text-uppercase mb-0 mt-0 page-title">Tabs</h5>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6 col-12">
							<ul class="breadcrumb float-right p-0 mb-0">
								<li class="breadcrumb-item"><a href="index.html"><i class="fas fa-home"></i> Home</a>
								</li>
								<li class="breadcrumb-item"><a href="#">Components</a></li>
								<li class="breadcrumb-item"><span>Tabs</span></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="card">
							<div class="card-header">
								<h4 class="card-title">Basic tabs</h4>
							</div>
							<div class="card-body">
								<ul class="nav nav-tabs">
									<li class="nav-item"><a class="nav-link active" href="#basictab1"
											data-toggle="tab">Home</a></li>
									<li class="nav-item"><a class="nav-link" href="#basictab2"
											data-toggle="tab">Profile</a></li>
									<li class="nav-item"><a class="nav-link" href="#basictab3"
											data-toggle="tab">Messages</a></li>
								</ul>
								<div class="tab-content">
									<div class="tab-pane show active" id="basictab1">
										Tab content 1
									</div>
									<div class="tab-pane" id="basictab2">
										Tab content 2
									</div>
									<div class="tab-pane" id="basictab3">
										Tab content 3
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="card">
							<div class="card-header">
								<h4 class="card-title">Basic justified tabs</h4>
							</div>
							<div class="card-body">
								<ul class="nav nav-tabs nav-justified">
									<li class="nav-item"><a class="nav-link active" href="#basic-justified-tab1"
											data-toggle="tab">Home</a></li>
									<li class="nav-item"><a class="nav-link" href="#basic-justified-tab2"
											data-toggle="tab">Profile</a></li>
									<li class="nav-item dropdown">
										<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">Dropdown</a>
										<div class="dropdown-menu dropdown-menu-right">
											<a class="dropdown-item" href="#basic-justified-tab3"
												data-toggle="tab">Dropdown 1</a>
											<a class="dropdown-item" href="#basic-justified-tab4"
												data-toggle="tab">Dropdown 2</a>
										</div>
									</li>
								</ul>
								<div class="tab-content">
									<div class="tab-pane show active" id="basic-justified-tab1">
										Tab content 1
									</div>
									<div class="tab-pane" id="basic-justified-tab2">
										Tab content 2
									</div>
									<div class="tab-pane" id="basic-justified-tab3">
										Tab content 3
									</div>
									<div class="tab-pane" id="basic-justified-tab4">
										Tab content 4
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="card">
							<div class="card-header">
								<h4 class="card-title">Top line tabs</h4>
							</div>
							<div class="card-header">
								<ul class="nav nav-tabs nav-tabs-top">
									<li class="nav-item"><a class="nav-link active" href="#top-tab1"
											data-toggle="tab">Home</a></li>
									<li class="nav-item"><a class="nav-link" href="#top-tab2"
											data-toggle="tab">Profile</a></li>
									<li class="nav-item"><a class="nav-link" href="#top-tab3"
											data-toggle="tab">Messages</a></li>
								</ul>
								<div class="tab-content">
									<div class="tab-pane show active" id="top-tab1">
										Tab content 1
									</div>
									<div class="tab-pane" id="top-tab2">
										Tab content 2
									</div>
									<div class="tab-pane" id="top-tab3">
										Tab content 3
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="card">
							<div class="card-header">
								<h4 class="card-title">Top line justified</h4>
							</div>
							<div class="card-body">
								<ul class="nav nav-tabs nav-tabs-top nav-justified">
									<li class="nav-item"><a class="nav-link active" href="#top-justified-tab1"
											data-toggle="tab">Home</a></li>
									<li class="nav-item"><a class="nav-link" href="#top-justified-tab2"
											data-toggle="tab">Profile</a></li>
									<li class="nav-item"><a class="nav-link" href="#top-justified-tab3"
											data-toggle="tab">Messages</a></li>
								</ul>
								<div class="tab-content">
									<div class="tab-pane show active" id="top-justified-tab1">
										Tab content 1
									</div>
									<div class="tab-pane" id="top-justified-tab2">
										Tab content 2
									</div>
									<div class="tab-pane" id="top-justified-tab3">
										Tab content 3
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="card">
							<div class="card-header">
								<h6 class="card-title">Bottom line tabs</h6>
							</div>
							<div class="card-body">
								<ul class="nav nav-tabs nav-tabs-bottom">
									<li class="nav-item"><a class="nav-link active" href="#bottom-tab1"
											data-toggle="tab">Home</a></li>
									<li class="nav-item"><a class="nav-link" href="#bottom-tab2"
											data-toggle="tab">Profile</a></li>
									<li class="nav-item"><a class="nav-link" href="#bottom-tab3"
											data-toggle="tab">Messages</a></li>
								</ul>
								<div class="tab-content">
									<div class="tab-pane show active" id="bottom-tab1">
										Tab content 1
									</div>
									<div class="tab-pane" id="bottom-tab2">
										Tab content 2
									</div>
									<div class="tab-pane" id="bottom-tab3">
										Tab content 3
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="card">
							<div class="card-header">
								<h6 class="card-title">Bottom line justified</h6>
							</div>
							<div class="card-body">
								<ul class="nav nav-tabs nav-tabs-bottom nav-justified">
									<li class="nav-item"><a class="nav-link active" href="#bottom-justified-tab1"
											data-toggle="tab">Home</a></li>
									<li class="nav-item"><a class="nav-link" href="#bottom-justified-tab2"
											data-toggle="tab">Profile</a></li>
									<li class="nav-item"><a class="nav-link" href="#bottom-justified-tab3"
											data-toggle="tab">Messages</a></li>
								</ul>
								<div class="tab-content">
									<div class="tab-pane show active" id="bottom-justified-tab1">
										Tab content 1
									</div>
									<div class="tab-pane" id="bottom-justified-tab2">
										Tab content 2
									</div>
									<div class="tab-pane" id="bottom-justified-tab3">
										Tab content 3
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="card">
							<div class="card-header">
								<h4 class="card-title">Solid tabs</h4>
							</div>
							<div class="card-body">
								<ul class="nav nav-tabs nav-tabs-solid">
									<li class="nav-item"><a class="nav-link active" href="#solid-tab1"
											data-toggle="tab">Home</a></li>
									<li class="nav-item"><a class="nav-link" href="#solid-tab2"
											data-toggle="tab">Profile</a></li>
									<li class="nav-item"><a class="nav-link" href="#solid-tab3"
											data-toggle="tab">Messages</a></li>
								</ul>
								<div class="tab-content">
									<div class="tab-pane show active" id="solid-tab1">
										Tab content 1
									</div>
									<div class="tab-pane" id="solid-tab2">
										Tab content 2
									</div>
									<div class="tab-pane" id="solid-tab3">
										Tab content 3
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="card">
							<div class="card-header">
								<h4 class="card-title">Solid justified</h4>
							</div>
							<div class="card-body">
								<ul class="nav nav-tabs nav-tabs-solid nav-justified">
									<li class="nav-item"><a class="nav-link active" href="#solid-justified-tab1"
											data-toggle="tab">Home</a></li>
									<li class="nav-item"><a class="nav-link" href="#solid-justified-tab2"
											data-toggle="tab">Profile</a></li>
									<li class="nav-item"><a class="nav-link" href="#solid-justified-tab3"
											data-toggle="tab">Messages</a></li>
								</ul>
								<div class="tab-content">
									<div class="tab-pane show active" id="solid-justified-tab1">
										Tab content 1
									</div>
									<div class="tab-pane" id="solid-justified-tab2">
										Tab content 2
									</div>
									<div class="tab-pane" id="solid-justified-tab3">
										Tab content 3
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="card">
							<div class="card-header">
								<h4 class="card-title">Solid Rounded</h4>
							</div>
							<div class="card-body">
								<ul class="nav nav-tabs nav-tabs-solid nav-tabs-rounded">
									<li class="nav-item"><a class="nav-link active" href="#solid-rounded-tab1"
											data-toggle="tab">Home</a></li>
									<li class="nav-item"><a class="nav-link" href="#solid-rounded-tab2"
											data-toggle="tab">Profile</a></li>
									<li class="nav-item"><a class="nav-link" href="#solid-rounded-tab3"
											data-toggle="tab">Messages</a></li>
								</ul>
								<div class="tab-content">
									<div class="tab-pane show active" id="solid-rounded-tab1">
										Tab content 1
									</div>
									<div class="tab-pane" id="solid-rounded-tab2">
										Tab content 2
									</div>
									<div class="tab-pane" id="solid-rounded-tab3">
										Tab content 3
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="card">
							<div class="card-header">
								<h4 class="card-title">Rounded justified</h4>
							</div>
							<div class="card-body">
								<ul class="nav nav-tabs nav-tabs-solid nav-tabs-rounded nav-justified">
									<li class="nav-item"><a class="nav-link active" href="#solid-rounded-justified-tab1"
											data-toggle="tab">Home</a></li>
									<li class="nav-item"><a class="nav-link" href="#solid-rounded-justified-tab2"
											data-toggle="tab">Profile</a></li>
									<li class="nav-item"><a class="nav-link" href="#solid-rounded-justified-tab3"
											data-toggle="tab">Messages</a></li>
								</ul>
								<div class="tab-content">
									<div class="tab-pane show active" id="solid-rounded-justified-tab1">
										Tab content 1
									</div>
									<div class="tab-pane" id="solid-rounded-justified-tab2">
										Tab content 2
									</div>
									<div class="tab-pane" id="solid-rounded-justified-tab3">
										Tab content 3
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="notification-box">
				<div class="msg-sidebar notifications msg-noti">
					<div class="topnav-dropdown-header">
						<span>Messages</span>
					</div>
					<div class="drop-scroll msg-list-scroll">
						<ul class="list-box">
							<li>
								<a href="chat.html">
									<div class="list-item">
										<div class="list-left">
											<span class="avatar">R</span>
										</div>
										<div class="list-body">
											<span class="message-author">Richard Miles </span>
											<span class="message-time">12:28 AM</span>
											<div class="clearfix"></div>
											<span class="message-content">Lorem ipsum dolor sit amet, consectetur
												adipiscing</span>
										</div>
									</div>
								</a>
							</li>
							<li>
								<a href="chat.html">
									<div class="list-item new-message">
										<div class="list-left">
											<span class="avatar">J</span>
										</div>
										<div class="list-body">
											<span class="message-author">Ruth C. Gault</span>
											<span class="message-time">1 Aug</span>
											<div class="clearfix"></div>
											<span class="message-content">Lorem ipsum dolor sit amet, consectetur
												adipiscing</span>
										</div>
									</div>
								</a>
							</li>
							<li>
								<a href="chat.html">
									<div class="list-item">
										<div class="list-left">
											<span class="avatar">T</span>
										</div>
										<div class="list-body">
											<span class="message-author"> Tarah Shropshire </span>
											<span class="message-time">12:28 AM</span>
											<div class="clearfix"></div>
											<span class="message-content">Lorem ipsum dolor sit amet, consectetur
												adipiscing</span>
										</div>
									</div>
								</a>
							</li>
							<li>
								<a href="chat.html">
									<div class="list-item">
										<div class="list-left">
											<span class="avatar">M</span>
										</div>
										<div class="list-body">
											<span class="message-author">Mike Litorus</span>
											<span class="message-time">12:28 AM</span>
											<div class="clearfix"></div>
											<span class="message-content">Lorem ipsum dolor sit amet, consectetur
												adipiscing</span>
										</div>
									</div>
								</a>
							</li>
							<li>
								<a href="chat.html">
									<div class="list-item">
										<div class="list-left">
											<span class="avatar">C</span>
										</div>
										<div class="list-body">
											<span class="message-author"> Catherine Manseau </span>
											<span class="message-time">12:28 AM</span>
											<div class="clearfix"></div>
											<span class="message-content">Lorem ipsum dolor sit amet, consectetur
												adipiscing</span>
										</div>
									</div>
								</a>
							</li>
							<li>
								<a href="chat.html">
									<div class="list-item">
										<div class="list-left">
											<span class="avatar">D</span>
										</div>
										<div class="list-body">
											<span class="message-author"> Domenic Houston </span>
											<span class="message-time">12:28 AM</span>
											<div class="clearfix"></div>
											<span class="message-content">Lorem ipsum dolor sit amet, consectetur
												adipiscing</span>
										</div>
									</div>
								</a>
							</li>
							<li>
								<a href="chat.html">
									<div class="list-item">
										<div class="list-left">
											<span class="avatar">B</span>
										</div>
										<div class="list-body">
											<span class="message-author"> Buster Wigton </span>
											<span class="message-time">12:28 AM</span>
											<div class="clearfix"></div>
											<span class="message-content">Lorem ipsum dolor sit amet, consectetur
												adipiscing</span>
										</div>
									</div>
								</a>
							</li>
							<li>
								<a href="chat.html">
									<div class="list-item">
										<div class="list-left">
											<span class="avatar">R</span>
										</div>
										<div class="list-body">
											<span class="message-author"> Rolland Webber </span>
											<span class="message-time">12:28 AM</span>
											<div class="clearfix"></div>
											<span class="message-content">Lorem ipsum dolor sit amet, consectetur
												adipiscing</span>
										</div>
									</div>
								</a>
							</li>
							<li>
								<a href="chat.html">
									<div class="list-item">
										<div class="list-left">
											<span class="avatar">C</span>
										</div>
										<div class="list-body">
											<span class="message-author"> Claire Mapes </span>
											<span class="message-time">12:28 AM</span>
											<div class="clearfix"></div>
											<span class="message-content">Lorem ipsum dolor sit amet, consectetur
												adipiscing</span>
										</div>
									</div>
								</a>
							</li>
							<li>
								<a href="chat.html">
									<div class="list-item">
										<div class="list-left">
											<span class="avatar">M</span>
										</div>
										<div class="list-body">
											<span class="message-author">Melita Faucher</span>
											<span class="message-time">12:28 AM</span>
											<div class="clearfix"></div>
											<span class="message-content">Lorem ipsum dolor sit amet, consectetur
												adipiscing</span>
										</div>
									</div>
								</a>
							</li>
							<li>
								<a href="chat.html">
									<div class="list-item">
										<div class="list-left">
											<span class="avatar">J</span>
										</div>
										<div class="list-body">
											<span class="message-author">Jeffery Lalor</span>
											<span class="message-time">12:28 AM</span>
											<div class="clearfix"></div>
											<span class="message-content">Lorem ipsum dolor sit amet, consectetur
												adipiscing</span>
										</div>
									</div>
								</a>
							</li>
							<li>
								<a href="chat.html">
									<div class="list-item">
										<div class="list-left">
											<span class="avatar">L</span>
										</div>
										<div class="list-body">
											<span class="message-author">Loren Gatlin</span>
											<span class="message-time">12:28 AM</span>
											<div class="clearfix"></div>
											<span class="message-content">Lorem ipsum dolor sit amet, consectetur
												adipiscing</span>
										</div>
									</div>
								</a>
							</li>
							<li>
								<a href="chat.html">
									<div class="list-item">
										<div class="list-left">
											<span class="avatar">T</span>
										</div>
										<div class="list-body">
											<span class="message-author">Tarah Shropshire</span>
											<span class="message-time">12:28 AM</span>
											<div class="clearfix"></div>
											<span class="message-content">Lorem ipsum dolor sit amet, consectetur
												adipiscing</span>
										</div>
									</div>
								</a>
							</li>
						</ul>
					</div>
					<div class="topnav-dropdown-footer">
						<a href="chat.html">See all messages</a>
					</div>
				</div>
			</div>
		</div>

	</div>

	<script src="assets/js/jquery-3.6.0.min.js"></script>

	<script src="assets/js/bootstrap.bundle.min.js"></script>

	<script src="assets/js/jquery.slimscroll.js"></script>

	<script src="assets/js/app.js"></script>
</body>

</html>