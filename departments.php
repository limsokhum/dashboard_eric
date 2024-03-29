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
							<h5 class="text-uppercase mb-0 mt-0 page-title">departments</h5>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6 col-12">
							<ul class="breadcrumb float-right p-0 mb-0">
								<li class="breadcrumb-item"><a href="index.html"><i class="fas fa-home"></i> Home</a>
								</li>
								<li class="breadcrumb-item"><a href="#">Management</a></li>
								<li class="breadcrumb-item"><a href="#">Employees</a></li>
								<li class="breadcrumb-item"><span> Departments</span></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-5 col-5">
					</div>
					<div class="col-sm-7 col-7 text-right m-b-30">
						<a href="#" class="btn btn-primary btn-rounded" data-toggle="modal"
							data-target="#add_department"><i class="fas fa-plus"></i> Add New Department</a>
					</div>
				</div>
				<div class="content-page">
					<div class="row">
						<div class="col-md-12 mb-3">
							<div>
								<table class="table custom-table">
									<thead class="thead-light">
										<tr>
											<th>#</th>
											<th>Department Name</th>
											<th class="text-right">Action</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>1</td>
											<td>English</td>
											<td class="text-right">
												<div class="dropdown dropdown-action">
													<a href="#" class="action-icon dropdown-toggle"
														data-toggle="dropdown" aria-expanded="false"><i
															class="fas fa-ellipsis-v"></i></a>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" href="#" data-toggle="modal"
															data-target="#edit_department" title="Edit"><i
																class="fas fa-pencil-alt m-r-5"></i> Edit</a>
														<a class="dropdown-item" href="#" data-toggle="modal"
															data-target="#delete_department" title="Delete"><i
																class="fas fa-trash-alt m-r-5"></i> Delete</a>
													</div>
												</div>
											</td>
										</tr>
										<tr>
											<td>2</td>
											<td>Science</td>
											<td class="text-right">
												<div class="dropdown dropdown-action">
													<a href="#" class="action-icon dropdown-toggle"
														data-toggle="dropdown" aria-expanded="false"><i
															class="fas fa-ellipsis-v"></i></a>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" href="#" data-toggle="modal"
															data-target="#edit_department" title="Edit"><i
																class="fas fa-pencil-alt m-r-5"></i> Edit</a>
														<a class="dropdown-item" href="#" data-toggle="modal"
															data-target="#delete_department" title="Delete"><i
																class="fas fa-trash-alt m-r-5"></i> Delete</a>
													</div>
												</div>
											</td>
										</tr>
										<tr>
											<td>3</td>
											<td>Tamil</td>
											<td class="text-right">
												<div class="dropdown dropdown-action">
													<a href="#" class="action-icon dropdown-toggle"
														data-toggle="dropdown" aria-expanded="false"><i
															class="fas fa-ellipsis-v"></i></a>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" href="#" data-toggle="modal"
															data-target="#edit_department" title="Edit"><i
																class="fas fa-pencil-alt m-r-5"></i> Edit</a>
														<a class="dropdown-item" href="#" data-toggle="modal"
															data-target="#delete_department" title="Delete"><i
																class="fas fa-trash-alt m-r-5"></i> Delete</a>
													</div>
												</div>
											</td>
										</tr>
										<tr>
											<td>4</td>
											<td>Sports</td>
											<td class="text-right">
												<div class="dropdown dropdown-action">
													<a href="#" class="action-icon dropdown-toggle"
														data-toggle="dropdown" aria-expanded="false"><i
															class="fas fa-ellipsis-v"></i></a>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" href="#" data-toggle="modal"
															data-target="#edit_department" title="Edit"><i
																class="fas fa-pencil-alt m-r-5"></i> Edit</a>
														<a class="dropdown-item" href="#" data-toggle="modal"
															data-target="#delete_department" title="Delete"><i
																class="fas fa-trash-alt m-r-5"></i> Delete</a>
													</div>
												</div>
											</td>
										</tr>
										<tr>
											<td>5</td>
											<td>Library</td>
											<td class="text-right">
												<div class="dropdown dropdown-action">
													<a href="#" class="action-icon dropdown-toggle"
														data-toggle="dropdown" aria-expanded="false"><i
															class="fas fa-ellipsis-v"></i></a>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" href="#" data-toggle="modal"
															data-target="#edit_department" title="Edit"><i
																class="fas fa-pencil-alt m-r-5"></i> Edit</a>
														<a class="dropdown-item" href="#" data-toggle="modal"
															data-target="#delete_department" title="Delete"><i
																class="fas fa-trash-alt m-r-5"></i> Delete</a>
													</div>
												</div>
											</td>
										</tr>
										<tr>
											<td>6</td>
											<td>Mathematics</td>
											<td class="text-right">
												<div class="dropdown dropdown-action">
													<a href="#" class="action-icon dropdown-toggle"
														data-toggle="dropdown" aria-expanded="false"><i
															class="fas fa-ellipsis-v"></i></a>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" href="#" data-toggle="modal"
															data-target="#edit_department" title="Edit"><i
																class="fas fa-pencil-alt m-r-5"></i> Edit</a>
														<a class="dropdown-item" href="#" data-toggle="modal"
															data-target="#delete_department" title="Delete"><i
																class="fas fa-trash-alt m-r-5"></i> Delete</a>
													</div>
												</div>
											</td>
										</tr>
									</tbody>
								</table>
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
	<div id="add_department" class="modal" role="dialog">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content modal-md">
				<div class="modal-header">
					<h4 class="modal-title">Add Department</h4>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<div class="modal-body">
					<form>
						<div class="form-group">
							<label>Department Name <span class="text-danger">*</span></label>
							<input type="text" class="form-control">
						</div>
						<div class="m-t-20 text-center">
							<button class="btn btn-primary btn-lg">Create Department</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<div id="edit_department" class="modal" role="dialog">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content modal-md">
				<div class="modal-header">
					<h4 class="modal-title">Edit Department</h4>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<div class="modal-body">
					<form>
						<div class="form-group">
							<label>Department Name <span class="text-danger">*</span></label>
							<input type="text" class="form-control" value="IT Management">
						</div>
						<div class="m-t-20 text-center">
							<button class="btn btn-primary btn-lg mb-3">Save Changes</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<div id="delete_department" class="modal" role="dialog">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content modal-md">
				<div class="modal-header">
					<h4 class="modal-title">Delete Department</h4>
				</div>
				<div class="modal-body">
					<p>Are you sure want to delete this?</p>
					<div class="m-t-20 text-left">
						<a href="#" class="btn btn-white" data-dismiss="modal">Close</a>
						<button type="submit" class="btn btn-danger">Delete</button>
					</div>
				</div>
			</div>
		</div>
	</div>

	<script src="assets/js/jquery-3.6.0.min.js"></script>

	<script src="assets/js/bootstrap.bundle.min.js"></script>

	<script src="assets/js/jquery.slimscroll.js"></script>
	<script src="assets/js/jquery.dataTables.min.js"></script>
	<script src="assets/js/dataTables.bootstrap4.min.js"></script>

	<script src="assets/js/app.js"></script>
</body>

</html>