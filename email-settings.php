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

	<link rel="stylesheet" href="assets/css/select2.min.css">

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
							<h5 class="text-uppercase mb-0 mt-0 page-title">Email Settings</h5>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6 col-12">
							<ul class="breadcrumb float-right p-0 mb-0">
								<li class="breadcrumb-item"><a href="index.html"><i class="fas fa-home"></i> Home</a>
								</li>
								<li class="breadcrumb-item"><a href="#">Settings</a></li>
								<li class="breadcrumb-item"><span> Email Settings</span></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="card">
					<div class="card-body">
						<div class="content-page">
							<div class="row">
								<div class="col-md-12 offset-md-0 mb-4">
									<form>
										<div class="form-check-inline">
											<label class="form-check-label" for="phpmail">
												<input type="radio" class="form-check-input" id="phpmail"
													name="mailoption" value="option1" checked="">PHP Mail
											</label>
										</div>
										<div class="form-check-inline">
											<label class="form-check-label" for="smtpmail">
												<input type="radio" class="form-check-input" id="smtpmail"
													name="mailoption" value="option2">SMTP
											</label>
										</div>
									</form>
								</div>
							</div>
							<h4 class="card-title">PHP Email Settings</h4>
							<div class="row mt-3">
								<div class="col-sm-6">
									<div class="form-group">
										<label>Email From Address</label>
										<input type="email" class="form-control">
									</div>
								</div>
								<div class="col-sm-6">
									<div class="form-group">
										<label>Email From Name</label>
										<input type="text" class="form-control">
									</div>
								</div>
							</div>
							<h4 class="card-title">SMTP Email Settings</h4>
							<div class="row mt-3">
								<div class="col-sm-6">
									<div class="form-group">
										<label>SMTP HOft</label>
										<input type="text" class="form-control">
									</div>
								</div>
								<div class="col-sm-6">
									<div class="form-group">
										<label>SMTP USER</label>
										<input type="text" class="form-control">
									</div>
								</div>
								<div class="col-sm-6">
									<div class="form-group">
										<label>SMTP PASSWORD</label>
										<input type="password" class="form-control">
									</div>
								</div>
								<div class="col-sm-6">
									<div class="form-group">
										<label>SMTP PORT</label>
										<input type="text" class="form-control">
									</div>
								</div>
								<div class="col-sm-6">
									<div class="form-group">
										<label>SMTP Security</label>
										<select class="form-control select">
											<option>None</option>
											<option>SSL</option>
											<option>TLS</option>
										</select>
									</div>
								</div>
								<div class="col-sm-6">
									<div class="form-group">
										<label>SMTP Authentication Domain</label>
										<input type="text" class="form-control">
									</div>
								</div>
							</div>
							<div class="col-sm-12 m-t-20 text-center">
								<button type="button" class="btn btn-primary btn-lg mb-3">Save &amp; update</button>
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

	<script src="assets/js/jquery-3.6.0.min.js"></script>

	<script src="assets/js/bootstrap.bundle.min.js"></script>

	<script src="assets/js/jquery.slimscroll.js"></script>
	<script src="assets/js/select2.min.js"></script>

	<script src="assets/js/app.js"></script>
</body>

</html>