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

	<link rel="stylesheet" href="assets/plugins/dragula/css/dragula.min.css">

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
							<h5 class="text-uppercase mb-0 mt-0 page-title">Drag & Drop</h5>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6 col-12">
							<ul class="breadcrumb float-right p-0 mb-0">
								<li class="breadcrumb-item"><a href="index.html"><i class="fas fa-home"></i> Home</a>
								</li>
								<li class="breadcrumb-item"><a href="#">Elements</a></li>
								<li class="breadcrumb-item"><span>>Drag & Drop</span></li>
							</ul>
						</div>
					</div>
				</div>

				<div class="row" id="card-drag-area">

					<div class="col-md-4 draggable">
						<div class="card">
							<div class="card-header">
								<h5 class="card-title">Draggable Card 1</h5>
							</div>
							<div class="card-body">
								<p>Jelly beans sugar plum cheesecake cookie oat cake soufflé.Tootsie roll bonbon
									liquorice tiramisu pie
									powder.Donut sweet roll marzipan pastry cookie cake tootsie roll oat cake cookie.
								</p>
							</div>
						</div>
					</div>


					<div class="col-md-4 draggable">
						<div class="card">
							<div class="card-header">
								<h5 class="card-title">Draggable Card 2</h5>
							</div>
							<div class="card-body">
								<p>Jelly beans sugar plum cheesecake cookie oat cake soufflé.Tootsie roll bonbon
									liquorice tiramisu pie
									powder.Donut sweet roll marzipan pastry cookie cake tootsie roll oat cake cookie.
								</p>
							</div>
						</div>
					</div>


					<div class="col-md-4 draggable">
						<div class="card">
							<div class="card-header">
								<h5 class="card-title">Draggable Card 3</h5>
							</div>
							<div class="card-body">
								<p>Jelly beans sugar plum cheesecake cookie oat cake soufflé.Tootsie roll bonbon
									liquorice tiramisu pie
									powder.Donut sweet roll marzipan pastry cookie cake tootsie roll oat cake cookie.
								</p>
							</div>
						</div>
					</div>

				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="card">
							<div class="card-header">
								<h5 class="card-title">Basic List Group Sortable</h5>
							</div>
							<div class="card-body">

								<ul class="list-group" id="basic-list-group">
									<li class="list-group-item draggable">
										<div class="media">
											<div class="media-body">
												<h5 class="mt-0">Darren Elder</h5>
												<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
													eiusmod</p>
											</div>
										</div>
									</li>
									<li class="list-group-item draggable">
										<div class="media">
											<div class="media-body">
												<h5 class="mt-0">Linda Ellis</h5>
												<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
													eiusmod</p>
											</div>
										</div>
									</li>
									<li class="list-group-item draggable">
										<div class="media">
											<div class="media-body">
												<h5 class="mt-0">Toney Ritch</h5>
												<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
													eiusmod</p>
											</div>
										</div>
									</li>
									<li class="list-group-item draggable">
										<div class="media">
											<div class="media-body">
												<h5 class="mt-0">Flora Jag</h5>
												<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
													eiusmod</p>
											</div>
										</div>
									</li>
									<li class="list-group-item draggable">
										<div class="media">
											<div class="media-body">
												<h5 class="mt-0">Linda Marris</h5>
												<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
													eiusmod</p>
											</div>
										</div>
									</li>
								</ul>

							</div>
						</div>
					</div>
				</div>
				<div class="row">

					<div class="col-md-12">
						<div class="card" id="dd-handle">
							<div class="card-header">
								<h5 class="card-title">Drag Handler</h5>
							</div>
							<div class="card-body">
								<div class="row">
									<div class="col-sm-6">
										<h4 class="my-1">List One</h4>
										<ul class="list-group" id="handle-list-1">
											<li class="list-group-item"><span class="handle">+</span> Cras justo odio
											</li>
											<li class="list-group-item"><span class="handle">+</span> Dapibus ac
												facilisis in</li>
											<li class="list-group-item"><span class="handle">+</span> Morbi leo risus
											</li>
											<li class="list-group-item"><span class="handle">+</span> Porta ac
												consectetur ac</li>
											<li class="list-group-item"><span class="handle">+</span> Vestibulum at eros
											</li>
										</ul>
									</div>
									<div class="col-sm-6">
										<h4 class="my-1">List Two</h4>
										<ul class="list-group" id="handle-list-2">
											<li class="list-group-item"><span class="handle">+</span> Cras justo odio
											</li>
											<li class="list-group-item"><span class="handle">+</span> Dapibus ac
												facilisis in</li>
											<li class="list-group-item"><span class="handle">+</span> Morbi leo risus
											</li>
											<li class="list-group-item"><span class="handle">+</span> Porta ac
												consectetur ac</li>
											<li class="list-group-item"><span class="handle">+</span> Vestibulum at eros
											</li>
										</ul>
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

	<script src="assets/plugins/dragula/js/dragula.min.js"></script>
	<script src="assets/plugins/dragula/js/drag-drop.min.js"></script>

	<script src="assets/js/app.js"></script>
</body>

</html>