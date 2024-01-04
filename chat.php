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
			<div class="chat-main-row">
				<div class="chat-main-wrapper">
					<div class="col-lg-9 message-view task-view">
						<div class="chat-window">
							<div class="fixed-header">
								<div class="navbar">
									<div class="user-details mr-auto">
										<div class="float-left user-img m-r-10">
											<a href="profile.html" title="Mike Litorus"><img src="assets/img/user.jpg"
													alt="" class="w-40 rounded-circle"><span
													class="status online"></span></a>
										</div>
										<div class="user-info float-left">
											<a href="profile.html" title="Mike Litorus"><span class="font-bold">Mike
													Litorus</span> <i class="typing-text">Typing...</i></a>
											<span class="Last-seen">Last seen today at 7:50 AM</span>
										</div>
									</div>
									<div class="search-box">
										<div class="input-group input-group-sm">
											<input type="text" class="form-control" placeholder="Search" required="">
											<span class="input-group-append">
												<button class="btn" type="button"><i class="fas fa-search"></i></button>
											</span>
										</div>
									</div>
									<ul class="nav custom-menu">
										<li class="nav-item">
											<a href="#chat_sidebar"
												class="nav-link task-chat profile-rightbar float-right"><i
													class="fas fa-user" aria-hidden="true"></i></a>
										</li>
										<li class="nav-item">
											<a class="nav-link" href="voice-call.html"><i class="fas fa-phone"
													aria-hidden="true"></i></a>
										</li>
										<li class="nav-item">
											<a class="nav-link" href="video-call.html"><i class="fas fa-video"
													aria-hidden="true"></i></a>
										</li>
										<li class="nav-item dropdown dropdown-action">
											<a href="" class="nav-link dropdown-toggle" data-toggle="dropdown"
												aria-expanded="false"><i class="fas fa-cog"></i></a>
											<div class="dropdown-menu dropdown-menu-right">
												<a class="dropdown-item" href="javascript:void(0)">Delete
													Conversations</a>
												<a class="dropdown-item" href="javascript:void(0)">Settings</a>
											</div>
										</li>
									</ul>
								</div>
							</div>
							<div class="chat-contents">
								<div class="chat-content-wrap">
									<div class="chat-wrap-inner">
										<div class="chat-box">
											<div class="chats">
												<div class="chat chat-right">
													<div class="chat-body">
														<div class="chat-bubble">
															<div class="chat-content">
																<p>Hello. What can I do for you?</p>
																<span class="chat-time">8:30 am</span>
															</div>
														</div>
													</div>
												</div>
												<div class="chat-line">
													<span class="chat-date">October 8th, 2015</span>
												</div>
												<div class="chat chat-left">
													<div class="chat-avatar">
														<a href="profile.html" class="avatar">
															<img alt="John Doe" src="assets/img/user.jpg"
																class="img-fluid rounded-circle">
														</a>
													</div>
													<div class="chat-body">
														<div class="chat-bubble">
															<div class="chat-content">
																<p>I'm just looking around.</p>
																<p>Will you tell me something about yourself? </p>
																<span class="chat-time">8:35 am</span>
															</div>
														</div>
														<div class="chat-bubble">
															<div class="chat-content">
																<p>Are you there? That time!</p>
																<span class="chat-time">8:40 am</span>
															</div>
														</div>
													</div>
												</div>
												<div class="chat chat-right">
													<div class="chat-body">
														<div class="chat-bubble">
															<div class="chat-content">
																<p>Where?</p>
																<span class="chat-time">8:35 am</span>
															</div>
														</div>
														<div class="chat-bubble">
															<div class="chat-content">
																<p>OK, my name is Limingqiang. I like singing, playing
																	basketballand so on.</p>
																<span class="chat-time">8:42 am</span>
															</div>
														</div>
													</div>
												</div>
												<div class="chat chat-left">
													<div class="chat-avatar">
														<a href="profile.html" class="avatar">
															<img alt="John Doe" src="assets/img/user.jpg"
																class="img-fluid rounded-circle">
														</a>
													</div>
													<div class="chat-body">
														<div class="chat-bubble">
															<div class="chat-content">
																<p>You wait for notice.</p>
																<span class="chat-time">8:30 am</span>
															</div>
														</div>
														<div class="chat-bubble">
															<div class="chat-content">
																<p>Consectetuorem ipsum dolor sit?</p>
																<span class="chat-time">8:50 am</span>
															</div>
														</div>
														<div class="chat-bubble">
															<div class="chat-content">
																<p>OK?</p>
																<span class="chat-time">8:55 am</span>
															</div>
														</div>
														<div class="chat-bubble">
															<div class="chat-content img-content">
																<div class="chat-img-group clearfix">
																	<p>Uploaded 3 Images</p>
																	<a class="chat-img-attach" href="#">
																		<img width="182" height="137" alt=""
																			src="assets/img/placeholder.jpg">
																		<div class="chat-placeholder">
																			<div class="chat-img-name">placeholder.jpg
																			</div>
																			<div class="chat-file-desc">842 KB</div>
																		</div>
																	</a>
																	<a class="chat-img-attach" href="#">
																		<img width="182" height="137" alt=""
																			src="assets/img/placeholder.jpg">
																		<div class="chat-placeholder">
																			<div class="chat-img-name">842 KB</div>
																		</div>
																	</a>
																	<a class="chat-img-attach" href="#">
																		<img width="182" height="137" alt=""
																			src="assets/img/placeholder.jpg">
																		<div class="chat-placeholder">
																			<div class="chat-img-name">placeholder.jpg
																			</div>
																			<div class="chat-file-desc">842 KB</div>
																		</div>
																	</a>
																</div>
																<span class="chat-time">9:00 am</span>
															</div>
														</div>
													</div>
												</div>
												<div class="chat chat-right">
													<div class="chat-body">
														<div class="chat-bubble">
															<div class="chat-content">
																<p>OK!</p>
																<span class="chat-time">9:00 am</span>
															</div>
														</div>
													</div>
												</div>
												<div class="chat chat-left">
													<div class="chat-avatar">
														<a href="profile.html" class="avatar">
															<img alt="John Doe" src="assets/img/user.jpg"
																class="img-fluid rounded-circle">
														</a>
													</div>
													<div class="chat-body">
														<div class="chat-bubble">
															<div class="chat-content">
																<p>Uploaded 3 files</p>
																<ul class="attach-list">
																	<li><i class="fas fa-file"></i> <a
																			href="#">example.avi</a></li>
																	<li><i class="fas fa-file"></i> <a
																			href="#">activity.psd</a></li>
																	<li><i class="fas fa-file"></i> <a
																			href="#">example.psd</a></li>
																</ul>
															</div>
														</div>
														<div class="chat-bubble">
															<div class="chat-content">
																<p>Consectetuorem ipsum dolor sit?</p>
																<span class="chat-time">8:50 am</span>
															</div>
														</div>
														<div class="chat-bubble">
															<div class="chat-content">
																<p>OK?</p>
																<span class="chat-time">8:55 am</span>
															</div>
														</div>
													</div>
												</div>
												<div class="chat chat-right">
													<div class="chat-body">
														<div class="chat-bubble">
															<div class="chat-content img-content">
																<div class="chat-img-group clearfix">
																	<p>Uploaded 6 Images</p>
																	<a class="chat-img-attach" href="#">
																		<img width="182" height="137" alt=""
																			src="assets/img/placeholder.jpg">
																		<div class="chat-placeholder">
																			<div class="chat-img-name">placeholder.jpg
																			</div>
																			<div class="chat-file-desc">842 KB</div>
																		</div>
																	</a>
																	<a class="chat-img-attach" href="#">
																		<img width="182" height="137" alt=""
																			src="assets/img/placeholder.jpg">
																		<div class="chat-placeholder">
																			<div class="chat-img-name">842 KB</div>
																		</div>
																	</a>
																	<a class="chat-img-attach" href="#">
																		<img width="182" height="137" alt=""
																			src="assets/img/placeholder.jpg">
																		<div class="chat-placeholder">
																			<div class="chat-img-name">placeholder.jpg
																			</div>
																			<div class="chat-file-desc">842 KB</div>
																		</div>
																	</a>
																	<a class="chat-img-attach" href="#">
																		<img width="182" height="137" alt=""
																			src="assets/img/placeholder.jpg">
																		<div class="chat-placeholder">
																			<div class="chat-img-name">placeholder.jpg
																			</div>
																			<div class="chat-file-desc">842 KB</div>
																		</div>
																	</a>
																	<a class="chat-img-attach" href="#">
																		<img width="182" height="137" alt=""
																			src="assets/img/placeholder.jpg">
																		<div class="chat-placeholder">
																			<div class="chat-img-name">placeholder.jpg
																			</div>
																			<div class="chat-file-desc">842 KB</div>
																		</div>
																	</a>
																	<a class="chat-img-attach" href="#">
																		<img width="182" height="137" alt=""
																			src="assets/img/placeholder.jpg">
																		<div class="chat-placeholder">
																			<div class="chat-img-name">placeholder.jpg
																			</div>
																			<div class="chat-file-desc">842 KB</div>
																		</div>
																	</a>
																</div>
																<span class="chat-time">9:00 am</span>
															</div>
														</div>
													</div>
												</div>
												<div class="chat chat-left">
													<div class="chat-avatar">
														<a href="profile.html" class="avatar">
															<img alt="John Doe" src="assets/img/user.jpg"
																class="img-fluid rounded-circle">
														</a>
													</div>
													<div class="chat-body">
														<div class="chat-bubble">
															<div class="chat-content">
																<ul class="attach-list">
																	<li class="pdf-file"><i class="fas fa-file-pdf"></i>
																		<a href="#">Document_2016.pdf</a></li>
																</ul>
																<span class="chat-time">9:00 am</span>
															</div>
														</div>
													</div>
												</div>
												<div class="chat chat-right">
													<div class="chat-body">
														<div class="chat-bubble">
															<div class="chat-content">
																<ul class="attach-list">
																	<li class="pdf-file"><i class="fas fa-file-pdf"></i>
																		<a href="#">Document_2016.pdf</a></li>
																</ul>
																<span class="chat-time">9:00 am</span>
															</div>
														</div>
													</div>
												</div>
												<div class="chat chat-left">
													<div class="chat-avatar">
														<a href="profile.html" class="avatar">
															<img alt="John Doe" src="assets/img/user.jpg"
																class="img-fluid rounded-circle">
														</a>
													</div>
													<div class="chat-body">
														<div class="chat-bubble">
															<div class="chat-content">
																<p>Typing ...</p>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="chat-footer">
								<div class="message-bar">
									<div class="message-inner">
										<a class="link attach-icon" href="#" data-toggle="modal"
											data-target="#drag_files"><img src="assets/img/attachment.png" alt=""></a>
										<div class="message-area">
											<div class="input-group">
												<input type="text" class="form-control" value="Type a message...">
												<span class="input-group-append">
													<button class="btn btn-info" type="button"><i
															class="fas fa-paper-plane"></i></button>
												</span>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-3 message-view chat-profile-view chat-sidebar" id="chat_sidebar">
						<div class="chat-window video-window">
							<div class="fixed-header">
								<ul class="nav nav-tabs nav-tabs-bottom">
									<li class="nav-item"><a class="nav-link" href="#calls_tab"
											data-toggle="tab">Calls</a></li>
									<li class="nav-item"><a class="nav-link active" href="#profile_tab"
											data-toggle="tab">Profile</a></li>
								</ul>
							</div>
							<div class="tab-content chat-contents">
								<div class="content-full tab-pane" id="calls_tab">
									<div class="chat-wrap-inner">
										<div class="chat-box">
											<div class="chats">
												<div class="chat chat-left">
													<div class="chat-avatar">
														<a href="profile.html" class="avatar">
															<img alt="John Doe" src="assets/img/user.jpg"
																class="img-fluid rounded-circle">
														</a>
													</div>
													<div class="chat-body">
														<div class="chat-bubble">
															<div class="chat-content">
																<span class="task-chat-user">You</span> <span
																	class="chat-time">8:35 am</span>
																<div class="call-details">
																	<i class="material-icons">phone_missed</i>
																	<div class="call-info">
																		<div class="call-user-details">
																			<span class="call-description">Jeffrey
																				Warden missed the call</span>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="chat chat-left">
													<div class="chat-avatar">
														<a href="profile.html" class="avatar">
															<img alt="John Doe" src="assets/img/user.jpg"
																class="img-fluid rounded-circle">
														</a>
													</div>
													<div class="chat-body">
														<div class="chat-bubble">
															<div class="chat-content">
																<span class="task-chat-user">John Doe</span> <span
																	class="chat-time">8:35 am</span>
																<div class="call-details">
																	<i class="material-icons">call_end</i>
																	<div class="call-info">
																		<div class="call-user-details"><span
																				class="call-description">This call has
																				ended</span></div>
																		<div class="call-timing">Duration: <strong>5 min
																				57 sec</strong></div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="chat-line">
													<span class="chat-date">January 29th, 2015</span>
												</div>
												<div class="chat chat-left">
													<div class="chat-avatar">
														<a href="profile.html" class="avatar">
															<img alt="John Doe" src="assets/img/user.jpg"
																class="img-fluid rounded-circle">
														</a>
													</div>
													<div class="chat-body">
														<div class="chat-bubble">
															<div class="chat-content">
																<span class="task-chat-user">Richard Miles</span> <span
																	class="chat-time">8:35 am</span>
																<div class="call-details">
																	<i class="material-icons">phone_missed</i>
																	<div class="call-info">
																		<div class="call-user-details">
																			<span class="call-description">You missed
																				the call</span>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="chat chat-left">
													<div class="chat-avatar">
														<a href="profile.html" class="avatar">
															<img alt="John Doe" src="assets/img/user.jpg"
																class="img-fluid rounded-circle">
														</a>
													</div>
													<div class="chat-body">
														<div class="chat-bubble">
															<div class="chat-content">
																<span class="task-chat-user">You</span> <span
																	class="chat-time">8:35 am</span>
																<div class="call-details">
																	<i class="material-icons">ring_volume</i>
																	<div class="call-info">
																		<div class="call-user-details">
																			<a href="#"
																				class="call-description call-description--linked"
																				data-qa="call_attachment_link">Calling
																				John Smith ...</a>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="content-full tab-pane show active" id="profile_tab">
									<div class="display-table">
										<div class="table-row">
											<div class="table-body">
												<div class="table-content">
													<div class="chat-profile-img">
														<div class="edit-profile-img">
															<img src="assets/img/user.jpg" alt="">
															<span class="change-img">Change Image</span>
														</div>
														<h3 class="user-name m-t-10 m-b-0">John Doe</h3>
														<small class="text-muted">Maths Teacher</small>
														<a href="edit-profile.html" class="btn btn-primary edit-btn"><i
																class="fas fa-pencil-alt"></i></a>
													</div>
													<div class="chat-profile-info">
														<ul class="user-det-list">
															<li>
																<span>Username:</span>
																<span class="float-right text-muted">johndoe</span>
															</li>
															<li>
																<span>DOB:</span>
																<span class="float-right text-muted">24 July</span>
															</li>
															<li>
																<span>Email:</span>
																<span class="float-right text-muted"><a
																		href="/cdn-cgi/l/email-protection"
																		class="__cf_email__"
																		data-cfemail="660c090e0802090326031e070b160a034805090b">[email&#160;protected]</a></span>
															</li>
															<li>
																<span>Phone:</span>
																<span
																	class="float-right text-muted">973-584-58700</span>
															</li>
														</ul>
													</div>
													<div class="transfer-files">
														<ul class="nav nav-tabs nav-tabs-solid nav-justified m-b-0">
															<li class="nav-item"><a class="nav-link active"
																	href="#all_files" data-toggle="tab">All Files</a>
															</li>
															<li class="nav-item"><a class="nav-link" href="#my_files"
																	data-toggle="tab">My Files</a></li>
														</ul>
														<div class="tab-content">
															<div class="tab-pane show active" id="all_files">
																<ul class="files-list">
																	<li>
																		<div class="files-cont">
																			<div class="file-type">
																				<span class="files-icon"><i
																						class="fas fa-file-pdf"></i></span>
																			</div>
																			<div class="files-info">
																				<span
																					class="file-name text-ellipsis">ABCs
																					school Teachers-Parents Committee
																					Test-Cases.xls</span>
																				<span class="file-author"><a
																						href="#">Loren Gatlin</a></span>
																				<span class="file-date">May 31st at 6:53
																					PM</span>
																			</div>
																			<ul class="files-action">
																				<li class="dropdown dropdown-action">
																					<a href="" class="dropdown-toggle"
																						data-toggle="dropdown"
																						aria-expanded="false"><i
																							class="fas fa-ellipsis-h"></i></a>
																					<div class="dropdown-menu">
																						<a class="dropdown-item"
																							href="javascript:void(0)">Download</a>
																						<a class="dropdown-item"
																							href="#" data-toggle="modal"
																							data-target="#share_files">Share</a>
																					</div>
																				</li>
																			</ul>
																		</div>
																	</li>
																</ul>
															</div>
															<div class="tab-pane" id="my_files">
																<ul class="files-list">
																	<li>
																		<div class="files-cont">
																			<div class="file-type">
																				<span class="files-icon"><i
																						class="fas fa-file-pdf"></i></span>
																			</div>
																			<div class="files-info">
																				<span
																					class="file-name text-ellipsis">ABCs
																					school Teachers-Parents Committee
																					Test-Cases.xls</span>
																				<span class="file-author"><a
																						href="#">John Doe</a></span>
																				<span class="file-date">May 31st at 6:53
																					PM</span>
																			</div>
																			<ul class="files-action">
																				<li class="dropdown dropdown-action">
																					<a href="" class="dropdown-toggle"
																						data-toggle="dropdown"
																						aria-expanded="false"><i
																							class="fas fa-ellipsis-h"></i></a>
																					<div class="dropdown-menu">
																						<a class="dropdown-item"
																							href="javascript:void(0)">Download</a>
																						<a class="dropdown-item"
																							href="#" data-toggle="modal"
																							data-target="#share_files">Share</a>
																					</div>
																				</li>
																			</ul>
																		</div>
																	</li>
																</ul>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div id="drag_files" class="modal" role="dialog">
				<div class="modal-dialog modal-dialog-centered">
					<div class="modal-content">
						<div class="modal-header">
							<h3 class="modal-title">Drag and drop files upload</h3>
							<button type="button" class="close" data-dismiss="modal">&times;</button>
						</div>
						<div class="modal-body p-t-0">
							<form id="js-upload-form">
								<div class="upload-drop-zone" id="drop-zone">
									<i class="fas fa-cloud-upload fa-2x"></i> <span class="upload-text">just drag and
										drop files here</span>
								</div>
								<h4>Uploading</h4>
								<ul class="upload-list">
									<li class="file-list">
										<div class="upload-wrap">
											<div class="file-name">
												<i class="fas fa-photo"></i> photo.png
											</div>
											<div class="file-size">1.07 gb</div>
											<button type="button" class="file-close">
												<i class="fas fa-times"></i>
											</button>
										</div>
										<div class="progress progress-xs progress-striped">
											<div class="progress-bar bg-success" role="progressbar" style="width: 65%">
											</div>
										</div>
										<div class="upload-process">37% done</div>
									</li>
									<li class="file-list">
										<div class="upload-wrap">
											<div class="file-name">
												<i class="fas fa-file"></i> exam.doc
											</div>
											<div class="file-size">5.8 kb</div>
											<button type="button" class="file-close">
												<i class="fas fa-times"></i>
											</button>
										</div>
										<div class="progress progress-xs progress-striped">
											<div class="progress-bar bg-success" role="progressbar" style="width: 65%">
											</div>
										</div>
										<div class="upload-process">37% done</div>
									</li>
									<li class="file-list">
										<div class="upload-wrap">
											<div class="file-name">
												<i class="fas fa-photo"></i> dashboard.png
											</div>
											<div class="file-size">2.1 mb</div>
											<button type="button" class="file-close">
												<i class="fas fa-times"></i>
											</button>
										</div>
										<div class="progress progress-xs progress-striped">
											<div class="progress-bar bg-success" role="progressbar" style="width: 65%">
											</div>
										</div>
										<div class="upload-process">Completed</div>
									</li>
								</ul>
							</form>
							<div class="m-t-30 text-center">
								<button class="btn btn-primary btn-lg">Add to upload</button>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div id="add_group" class="modal">
				<div class="modal-dialog modal-dialog-centered">
					<div class="modal-content">
						<div class="modal-header">
							<h3 class="modal-title">Create a group</h3>
							<button type="button" class="close" data-dismiss="modal">&times;</button>
						</div>
						<div class="modal-body">
							<p>Groups are where your team communicates. They’re best when organized around a topic —
								#leads, for example.</p>
							<form>
								<div class="form-group">
									<input type="text" class="form-control">
									<label>Group Name <span class="text-danger">*</span></label>
								</div>
								<div class="form-group">
									<input type="text" class="form-control">
									<label>Send invites to: <span class="text-muted-light"></span></label>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
			<div id="add_chat_user" class="modal" role="dialog">
				<div class="modal-dialog modal-dialog-centered">
					<div class="modal-content">
						<div class="modal-header">
							<h3 class="modal-title">Create Chat Group</h3>
							<button type="button" class="close" data-dismiss="modal">&times;</button>
						</div>
						<div class="modal-body">
							<div class="input-group m-b-30">
								<input placeholder="Search to start a chat" class="form-control search-input"
									id="btn-input" type="text">
								<span class="input-group-append">
									<button class="btn btn-primary">Search</button>
								</span>
							</div>
							<div>
								<h5>Recent Conversations</h5>
								<ul class="chat-user-list">
									<li>
										<a href="#">
											<div class="media">
												<span class="avatar align-self-center">J</span>
												<div class="media-body align-self-center text-nowrap">
													<div class="user-name">Jeffery Lalor</div>
													<span class="designation">H.O.D</span>
												</div>
												<div class="text-nowrap align-self-center">
													<div class="online-date">1 day ago</div>
												</div>
											</div>
										</a>
									</li>
									<li>
										<a href="#">
											<div class="media ">
												<span class="avatar align-self-center">B</span>
												<div class="media-body align-self-center text-nowrap">
													<div class="user-name">Bernardo Galaviz</div>
													<span class="designation">Science Teacher</span>
												</div>
												<div class="align-self-center text-nowrap">
													<div class="online-date">3 days ago</div>
												</div>
											</div>
										</a>
									</li>
									<li>
										<a href="#">
											<div class="media">
												<span class="avatar align-self-center">
													<img src="assets/img/user.jpg" alt="John Doe">
												</span>
												<div class="media-body text-nowrap align-self-center">
													<div class="user-name">John Doe</div>
													<span class="designation">Maths Teacher</span>
												</div>
												<div class="align-self-center text-nowrap">
													<div class="online-date">7 months ago</div>
												</div>
											</div>
										</a>
									</li>
								</ul>
							</div>
							<div class="m-t-50 text-center">
								<button class="btn btn-primary btn-lg">Create Group</button>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div id="share_files" class="modal" role="dialog">
				<div class="modal-dialog modal-dialog-centered">
					<div class="modal-content">
						<div class="modal-header">
							<h3 class="modal-title">Share File</h3>
							<button type="button" class="close" data-dismiss="modal">&times;</button>
						</div>
						<div class="modal-body">
							<div class="files-share-list">
								<div class="files-cont">
									<div class="file-type">
										<span class="files-icon"><i class="fas fa-file-pdf"></i></span>
									</div>
									<div class="files-info">
										<span class="file-name text-ellipsis">AHA Selfcare Mobile Application
											Test-Cases.xls</span>
										<span class="file-author"><a href="#">Bernardo Galaviz</a></span> <span
											class="file-date">May 31st at 6:53 PM</span>
									</div>
								</div>
							</div>
							<div class="form-group">
								<label>Share With</label>
								<input class="form-control" type="text">
							</div>
							<div class="m-t-50 text-center">
								<button class="btn btn-primary btn-lg">Share</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>

	<script data-cfasync="false"
		src="../../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
	<script src="assets/js/jquery-3.6.0.min.js"></script>

	<script src="assets/js/bootstrap.bundle.min.js"></script>

	<script src="assets/js/jquery.slimscroll.js"></script>

	<script src="assets/js/app.js"></script>
</body>

</html>