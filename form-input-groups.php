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
							<h5 class="text-uppercase mb-0 mt-0 page-title">Input Groups</h5>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6 col-12">
							<ul class="breadcrumb float-right p-0 mb-0">
								<li class="breadcrumb-item"><a href="index.html"><i class="fas fa-home"></i> Home</a>
								</li>
								<li class="breadcrumb-item"><a href="#">Forms</a></li>
								<li class="breadcrumb-item"><span>Input Groups</span></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12">
						<div class="card">
							<div class="card-header">
								<h4 class="card-title">Basic Examples</h4>
							</div>
							<div class="card-body">
								<form action="#">
									<div class="form-group row">
										<label class="col-form-label col-lg-2">Group Left</label>
										<div class="col-md-10">
											<div class="input-group mb-3">
												<div class="input-group-prepend">
													<span class="input-group-text" id="basic-addon1">@</span>
												</div>
												<input type="text" class="form-control" placeholder="Username"
													aria-label="Username" aria-describedby="basic-addon1">
											</div>
										</div>
									</div>
									<div class="form-group row">
										<label class="col-form-label col-lg-2">Group Right</label>
										<div class="col-md-10">
											<div class="input-group mb-3">
												<input type="text" class="form-control"
													placeholder="Recipient's username" aria-label="Recipient's username"
													aria-describedby="basic-addon2">
												<div class="input-group-append">
													<span class="input-group-text" id="basic-addon2">@example.com</span>
												</div>
											</div>
										</div>
									</div>
									<div class="form-group row">
										<label class="col-form-label col-lg-2">URL Example</label>
										<div class="col-md-10">
											<div class="input-group">
												<div class="input-group-prepend">
													<span class="input-group-text">https://</span>
												</div>
												<input type="text" class="form-control">
											</div>
										</div>
									</div>
									<div class="form-group row">
										<label class="col-form-label col-lg-2">Group with Price</label>
										<div class="col-md-10">
											<div class="input-group">
												<div class="input-group-prepend">
													<span class="input-group-text">$</span>
												</div>
												<input type="text" class="form-control">
												<div class="input-group-append">
													<span class="input-group-text">.00</span>
												</div>
											</div>
										</div>
									</div>
									<div class="form-group row">
										<label class="col-form-label col-lg-2">Group with Price (Left)</label>
										<div class="col-md-10">
											<div class="input-group">
												<div class="input-group-prepend">
													<span class="input-group-text">$</span>
												</div>
												<div class="input-group-prepend">
													<span class="input-group-text">0.00</span>
												</div>
												<input type="text" class="form-control">
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
						<div class="card">
							<div class="card-header">
								<h4 class="card-title">Sizing</h4>
							</div>
							<div class="card-body">
								<form action="#">
									<div class="form-group row">
										<label class="col-form-label col-lg-2">Input Group Large</label>
										<div class="col-md-10">
											<div class="input-group input-group-lg">
												<div class="input-group-prepend">
													<span class="input-group-text" id="sizing-addon1">@</span>
												</div>
												<input type="text" class="form-control" placeholder="Username"
													aria-describedby="sizing-addon1">
											</div>
										</div>
									</div>
									<div class="form-group row">
										<label class="col-form-label col-lg-2">Input Group Default</label>
										<div class="col-md-10">
											<div class="input-group">
												<div class="input-group-prepend">
													<span class="input-group-text" id="sizing-addon2">@</span>
												</div>
												<input type="text" class="form-control" placeholder="Username"
													aria-describedby="sizing-addon2">
											</div>
										</div>
									</div>
									<div class="form-group row">
										<label class="col-form-label col-lg-2">Input Group Small</label>
										<div class="col-md-10">
											<div class="input-group input-group-sm">
												<div class="input-group-prepend">
													<span class="input-group-text" id="sizing-addon3">@</span>
												</div>
												<input type="text" class="form-control" placeholder="Username"
													aria-describedby="sizing-addon3">
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
						<div class="card">
							<div class="card-header">
								<h4 class="card-title">Checkbox and Radio Addons</h4>
							</div>
							<div class="card-body">
								<form action="#">
									<div class="form-group row">
										<label class="col-form-label col-lg-2">Checkbox</label>
										<div class="col-md-10">
											<div class="input-group">
												<div class="input-group-prepend">
													<span class="input-group-text">
														<input type="checkbox">
													</span>
												</div>
												<input type="text" class="form-control">
											</div>
										</div>
									</div>
									<div class="form-group row">
										<label class="col-form-label col-lg-2">Radio</label>
										<div class="col-md-10">
											<div class="input-group">
												<div class="input-group-prepend">
													<span class="input-group-text">
														<input type="radio">
													</span>
												</div>
												<input type="text" class="form-control">
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
						<div class="card">
							<div class="card-header">
								<h4 class="card-title">Multiple addons</h4>
							</div>
							<div class="card-body">
								<form action="#">
									<div class="form-group row">
										<label class="col-form-label col-lg-2">Radio and Text addons</label>
										<div class="col-md-10">
											<div class="input-group">
												<div class="input-group-prepend">
													<span class="input-group-text">
														<input type="checkbox">
													</span>
												</div>
												<div class="input-group-prepend">
													<span class="input-group-text">$</span>
												</div>
												<input type="text" class="form-control">
											</div>
										</div>
									</div>
									<div class="form-group row">
										<label class="col-form-label col-lg-2">Two addons</label>
										<div class="col-md-10">
											<div class="input-group">
												<div class="input-group-prepend">
													<span class="input-group-text">$</span>
												</div>
												<div class="input-group-prepend">
													<span class="input-group-text">0.00</span>
												</div>
												<input type="text" class="form-control">
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
						<div class="card">
							<div class="card-header">
								<h4 class="card-title">Buttons with dropdowns</h4>
							</div>
							<div class="card-body">
								<form action="#">
									<div class="form-group row">
										<label class="col-form-label col-lg-2">Radio and Text addons</label>
										<div class="col-md-10">
											<div class="input-group">
												<div class="input-group-prepend">
													<button type="button" class="btn btn-white dropdown-toggle"
														data-toggle="dropdown">Action</button>
													<div class="dropdown-menu">
														<a class="dropdown-item" href="#">Action</a>
														<a class="dropdown-item" href="#">Another action</a>
														<a class="dropdown-item" href="#">Something else here</a>
														<div role="separator" class="dropdown-divider"></div>
														<a class="dropdown-item" href="#">Separated link</a>
													</div>
												</div>
												<input type="text" class="form-control" placeholder="Left dropdown">
											</div>
										</div>
									</div>
									<div class="form-group row">
										<label class="col-form-label col-lg-2">Two addons</label>
										<div class="col-md-10">
											<div class="input-group">
												<input type="text" class="form-control" placeholder="Right dropdown">
												<div class="input-group-append">
													<button type="button" class="btn btn-white dropdown-toggle"
														data-toggle="dropdown">Action</button>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" href="#">Action</a>
														<a class="dropdown-item" href="#">Another action</a>
														<a class="dropdown-item" href="#">Something else here</a>
														<div role="separator" class="dropdown-divider"></div>
														<a class="dropdown-item" href="#">Separated link</a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</form>
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

	<script src="assets/js/jquery-3.6.0.min.js"></script>

	<script src="assets/js/bootstrap.bundle.min.js"></script>

	<script src="assets/js/jquery.slimscroll.js"></script>

	<script src="assets/js/app.js"></script>
</body>

</html>