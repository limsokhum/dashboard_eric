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


        <div class="sidebar" id="sidebar">
            <div class="sidebar-inner slimscroll">
                <div id="sidebar-menu" class="sidebar-menu">
                    <div class="header-left">
                        <a href="index.html" class="logo">
                            <img src="assets/img/logo1.png" width="40" height="40" alt="">
                            <span class="text-uppercase">Preschool</span>
                        </a>
                    </div>
                    <ul class="sidebar-ul">
                        <li class="menu-title">Menu</li>
                        <li>
                            <a href="index.html"><img src="assets/img/sidebar/icon-1.png"
                                    alt="icon"><span>Dashboard</span></a>
                        </li>
                        <li class="submenu">
                            <a href="#"><img src="assets/img/sidebar/icon-2.png" alt="icon"> <span> Teachers</span>
                                <span class="menu-arrow"></span></a>
                            <ul class="list-unstyled" style="display: none;">
                                <li><a href="all-teachers.html"><span>All Teachers</span></a></li>
                                <li><a href="add-teacher.html"><span>Add Teacher</span></a></li>
                                <li><a href="edit-teacher.html"><span>Edit Teacher</span></a></li>
                                <li><a href="about-teacher.html"><span>About Teacher</span></a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><img src="assets/img/sidebar/icon-3.png" alt="icon"> <span> Students</span>
                                <span class="menu-arrow"></span></a>
                            <ul class="list-unstyled" style="display: none;">
                                <li><a href="all-students.html"><span>All Students</span></a></li>
                                <li><a href="add-student.html"><span>Add Student</span></a></li>
                                <li><a href="edit-student.html"><span>Edit Student</span></a></li>
                                <li><a href="about-student.html"><span>ABout student</span></a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><img src="assets/img/sidebar/icon-4.png" alt="icon"> <span> Parents</span> <span
                                    class="menu-arrow"></span></a>
                            <ul class="list-unstyled" style="display: none;">
                                <li><a href="all-parents.html"><span>All Parents</span></a></li>
                                <li><a href="add-parent.html"><span>Add Parent</span></a></li>
                                <li><a href="edit-parent.html"><span>Edit Parent</span></a></li>
                                <li><a href="about-parent.html"><span>About Parent</span></a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);"><img src="assets/img/sidebar/icon-5.png" alt="icon">
                                <span>Apps</span> <span class="menu-arrow"></span></a>
                            <ul style="display: none;">
                                <li class="submenu">
                                    <a href="javascript:void(0);"><span>Email</span> <span
                                            class="menu-arrow"></span></a>
                                    <ul style="display: none;">
                                        <li><a href="compose.html"><span>Compose Mail</span></a></li>
                                        <li>
                                            <a href="inbox.html"> <span> Inbox</span> </a>
                                        </li>
                                        <li><a href="mail-view.html"><span>Mailview</span></a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="chat.html"> Chat <span
                                            class="badge badge-pill bg-primary float-right">5</span></a>
                                </li>
                                <li class="submenu">
                                    <a href="#"><span> Calls</span> <span class="menu-arrow"></span></a>
                                    <ul class="list-unstyled" style="display: none;">
                                        <li><a href="voice-call.html"><span>Voice Call</span></a></li>
                                        <li><a href="video-call.html"><span>Video Call</span></a></li>
                                        <li><a href="incoming-call.html"><span>Incoming Call</span></a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="contacts.html"><span> Contacts</span></a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="calendar.html"><img src="assets/img/sidebar/icon-6.png" alt="icon">
                                <span>Calendar</span></a>
                        </li>
                        <li>
                            <a href="exam-list.html"><img src="assets/img/sidebar/icon-7.png" alt="icon"> <span>Exam
                                    list</span></a>
                        </li>
                        <li>
                            <a href="holidays.html"><img src="assets/img/sidebar/icon-8.png" alt="icon">
                                <span>Holidays</span></a>
                        </li>
                        <li>
                            <a href="calendar.html"><img src="assets/img/sidebar/icon-9.png" alt="icon"><span>
                                    Events</span></a>
                        </li>
                        <li class="submenu">
                            <a href="#"><img src="assets/img/sidebar/icon-10.png" alt="icon"><span> Accounts </span>
                                <span class="menu-arrow"></span></a>
                            <ul class="list-unstyled" style="display: none;">
                                <li><a href="invoices.html"><span>Invoices</span></a></li>
                                <li><a href="payments.html"><span>Payments</span></a></li>
                                <li><a href="expenses.html"><span>Expenses</span></a></li>
                                <li><a href="provident-fund.html"><span>Provident Fund</span></a></li>
                                <li><a href="taxes.html"><span>Taxes</span></a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><img src="assets/img/sidebar/icon-11.png" alt="icon"><span> Payroll </span>
                                <span class="menu-arrow"></span></a>
                            <ul class="list-unstyled" style="display: none;">
                                <li><a href="salary.html"><span> Employee Salary </span></a></li>
                                <li><a href="salary-view.html"><span> Payslip </span></a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><img src="assets/img/sidebar/icon-12.png" alt="icon"> <span> Blog</span> <span
                                    class="menu-arrow"></span></a>
                            <ul class="list-unstyled" style="display: none;">
                                <li><a href="blog.html"><span>Blog</span></a></li>
                                <li><a href="blog-details.html"><span>Blog View</span></a></li>
                                <li><a href="add-blog.html"><span>Add Blog</span></a></li>
                                <li><a href="edit-blog.html"><span>Edit Blog</span></a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);" class="noti-dot"><img src="assets/img/sidebar/icon-13.png"
                                    alt="icon"> <span>Management </span> <span class="menu-arrow"></span></a>
                            <ul style="display: none;">
                                <li class="submenu">
                                    <a href="#"><span> Employees</span> <span class="menu-arrow"></span></a>
                                    <ul class="list-unstyled" style="display: none;">
                                        <li><a href="all-employees.html"><span>All Employees</span></a></li>
                                        <li><a href="holidays.html"><span>Holidays</span></a></li>
                                        <li><a href="leaves.html"><span>Leave Requests</span> <span
                                                    class="badge badge-pill bg-primary float-right">1</span></a></li>
                                        <li><a href="attendance.html"><span>Attendance</span></a></li>
                                        <li><a href="departments.html"><span>Departments</span></a></li>
                                        <li><a href="designations.html"><span>Designations</span></a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="activities.html"><span>Activities</span></a>
                                </li>
                                <li>
                                    <a href="users.html"><span>Users</span></a>
                                </li>
                                <li class="submenu">
                                    <a href="#"><span> Reports </span> <span class="menu-arrow"></span></a>
                                    <ul class="list-unstyled" style="display: none;">
                                        <li><a href="expense-reports.html"> <span>Expense Report </span></a></li>
                                        <li><a href="invoice-reports.html"> <span>Invoice Report</span> </a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="settings.html"><img src="assets/img/sidebar/icon-14.png" alt="icon">
                                <span>Settings</span></a>
                        </li>
                        <li class="menu-title">UI Elements</li>
                        <li class="submenu">
                            <a href="#"><img src="assets/img/sidebar/icon-15.png" alt="icon"> <span> Components</span>
                                <span class="menu-arrow"></span></a>
                            <ul class="list-unstyled" style="display: none;">
                                <li><a class="active" href="uikit.html"><span>UI Kit</span></a></li>
                                <li><a href="typography.html"><span>Typography</span></a></li>
                                <li><a href="tabs.html"><span>Tabs</span></a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><img src="assets/img/sidebar/icon-26.png" alt="icon"> <span> Elements</span>
                                <span class="menu-arrow"></span></a>
                            <ul class="list-unstyled" style="display: none;">
                                <li><a href="sweetalerts.html">Sweet Alerts</a></li>
                                <li><a href="tooltip.html">Tooltip</a></li>
                                <li><a href="popover.html">Popover</a></li>
                                <li><a href="ribbon.html">Ribbon</a></li>
                                <li><a href="clipboard.html">Clipboard</a></li>
                                <li><a href="drag-drop.html">Drag & Drop</a></li>
                                <li><a href="rangeslider.html">Range Slider</a></li>
                                <li><a href="rating.html">Rating</a></li>
                                <li><a href="toastr.html">Toastr</a></li>
                                <li><a href="text-editor.html">Text Editor</a></li>
                                <li><a href="counter.html">Counter</a></li>
                                <li><a href="scrollbar.html">Scrollbar</a></li>
                                <li><a href="spinner.html">Spinner</a></li>
                                <li><a href="notification.html">Notification</a></li>
                                <li><a href="lightbox.html">Lightbox</a></li>
                                <li><a href="stickynote.html">Sticky Note</a></li>
                                <li><a href="timeline.html">Timeline</a></li>
                                <li><a href="horizontal-timeline.html">Horizontal Timeline</a></li>
                                <li><a href="form-wizard.html">Form Wizard</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><img src="assets/img/sidebar/icon-27.png" alt="icon"> <span> Chart</span> <span
                                    class="menu-arrow"></span></a>
                            <ul class="list-unstyled" style="display: none;">
                                <li><a href="chart-apex.html">Apex Charts</a></li>
                                <li><a href="chart-js.html">Chart Js</a></li>
                                <li><a href="chart-morris.html">Morris Charts</a></li>
                                <li><a href="chart-flot.html">Flot Charts</a></li>
                                <li><a href="chart-peity.html">Peity Charts</a></li>
                                <li><a href="chart-c3.html">C3 Charts</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><img src="assets/img/sidebar/icon-28.png" alt="icon"> <span>Icons</span> <span
                                    class="menu-arrow"></span></a>
                            <ul class="list-unstyled" style="display: none;">
                                <li><a href="icon-fontawesome.html">Fontawesome Icons</a></li>
                                <li><a href="icon-feather.html">Feather Icons</a></li>
                                <li><a href="icon-ionic.html">Ionic Icons</a></li>
                                <li><a href="icon-material.html">Material Icons</a></li>
                                <li><a href="icon-pe7.html">Pe7 Icons</a></li>
                                <li><a href="icon-simpleline.html">Simpleline Icons</a></li>
                                <li><a href="icon-themify.html">Themify Icons</a></li>
                                <li><a href="icon-weather.html">Weather Icons</a></li>
                                <li><a href="icon-typicon.html">Typicon Icons</a></li>
                                <li><a href="icon-flag.html">Flag Icons</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><img src="assets/img/sidebar/icon-17.png" alt="icon"> <span> Forms</span> <span
                                    class="menu-arrow"></span></a>
                            <ul class="list-unstyled" style="display: none;">
                                <li><a href="basic-inputs.html"><span>Basic Input</span></a></li>
                                <li><a href="form-basic-inputs.html"><span>Basic Inputs</span></a></li>
                                <li><a href="form-input-groups.html"><span>Input Groups</span></a></li>
                                <li><a href="form-horizontal.html"><span>Horizontal Form</span></a></li>
                                <li><a href="form-vertical.html"><span>Vertical Form</span></a></li>
                                <li><a href="form-validation.html"> Form Validation </a></li>
                                <li><a href="form-select2.html">Form Select2 </a></li>
                                <li><a href="form-fileupload.html">File Upload </a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><img src="assets/img/sidebar/icon-18.png" alt="icon"> <span> Tables</span> <span
                                    class="menu-arrow"></span></a>
                            <ul class="list-unstyled" style="display: none;">
                                <li><a href="tables-basic.html"><span>Basic Tables</span></a></li>
                                <li><a href="tables-datatables.html"><span>Data Table</span></a></li>
                            </ul>
                        </li>
                        <li class="menu-title"><span>Extras</span></li>
                        <li class="submenu">
                            <a href="#"><img src="assets/img/sidebar/icon-19.png" alt="icon"> <span>Pages</span> <span
                                    class="menu-arrow"></span></a>
                            <ul class="list-unstyled" style="display: none;">
                                <li><a href="login.html"> <span>Login </span></a></li>
                                <li><a href="register.html"><span> Register </span></a></li>
                                <li><a href="forgot-password.html"> <span>Forgot Password</span> </a></li>
                                <li><a href="change-password2.html"> <span>Change Password</span> </a></li>
                                <li><a href="lock-screen.html"> <span>Lock Screen </span></a></li>
                                <li><a href="profile.html"> <span>Profile</span> </a></li>
                                <li><a href="gallery.html"> <span>Gallery </span></a></li>
                                <li><a href="error-404.html"><span>404 Error </span></a></li>
                                <li><a href="error-500.html"><span>500 Error </span></a></li>
                                <li><a href="blank-page.html"><span> Blank Page</span> </a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);"><img src="assets/img/sidebar/icon-20.png" alt="icon">
                                <span>Multi Level</span> <span class="menu-arrow"></span></a>
                            <ul style="display: none;">
                                <li class="submenu">
                                    <a href="javascript:void(0);"><span>Level 1</span> <span
                                            class="menu-arrow"></span></a>
                                    <ul style="display: none;">
                                        <li><a href="javascript:void(0);"><span>Level 2</span></a></li>
                                        <li class="submenu">
                                            <a href="javascript:void(0);"> <span> Level 2</span> <span
                                                    class="menu-arrow"></span></a>
                                            <ul class="list-unstyled" style="display: none;">
                                                <li><a href="javascript:void(0);">Level 3</a></li>
                                                <li><a href="javascript:void(0);">Level 3</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="javascript:void(0);"><span>Level 2</span></a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="javascript:void(0);"><span>Level 1</span></a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>


        <div class="page-wrapper">
            <div class="content container-fluid">
                <div class="page-header">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                            <h5 class="text-uppercase mb-0 mt-0 page-title">UI Kit</h5>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                            <ul class="breadcrumb float-right p-0 mb-0">
                                <li class="breadcrumb-item"><a href="index.html"><i class="fas fa-home"></i> Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">Components</a></li>
                                <li class="breadcrumb-item"><span>UI Kit</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-lg-12 col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Default Button</h4>
                                    </div>
                                    <div class="card-body">
                                        <button type="button" class="btn btn-primary mb-1">Primary</button>
                                        <button type="button" class="btn btn-secondary mb-1">Secondary</button>
                                        <button type="button" class="btn btn-success mb-1">Success</button>
                                        <button type="button" class="btn btn-danger mb-1">Danger</button>
                                        <button type="button" class="btn btn-warning mb-1">Warning</button>
                                        <button type="button" class="btn btn-info mb-1">Info</button>
                                        <button type="button" class="btn btn-light mb-1">Light</button>
                                        <button type="button" class="btn btn-dark mb-1">Dark</button>
                                        <button type="button" class="btn btn-link mb-1">Link</button>
                                        <hr>
                                        <h4 class="card-title">Button Sizes</h4><br>
                                        <p>
                                            <button type="button" class="btn btn-primary btn-lg mb-1">Primary</button>
                                            <button type="button"
                                                class="btn btn-secondary btn-lg mb-1">Secondary</button>
                                            <button type="button" class="btn btn-success btn-lg mb-1">Success</button>
                                            <button type="button" class="btn btn-danger btn-lg mb-1">Danger</button>
                                            <button type="button" class="btn btn-warning btn-lg mb-1">Warning</button>
                                            <button type="button" class="btn btn-info btn-lg mb-1">Info</button>
                                            <button type="button" class="btn btn-light btn-lg mb-1">Light</button>
                                            <button type="button" class="btn btn-dark btn-lg mb-1">Dark</button>
                                        </p>
                                        <p>
                                            <button type="button" class="btn btn-primary mb-1">Primary</button>
                                            <button type="button" class="btn btn-secondary mb-1">Secondary</button>
                                            <button type="button" class="btn btn-success mb-1">Success</button>
                                            <button type="button" class="btn btn-danger mb-1">Danger</button>
                                            <button type="button" class="btn btn-warning mb-1">Warning</button>
                                            <button type="button" class="btn btn-info mb-1">Info</button>
                                            <button type="button" class="btn btn-light mb-1">Light</button>
                                            <button type="button" class="btn btn-dark mb-1">Dark</button>
                                        </p>
                                        <p>
                                            <button type="button" class="btn btn-primary btn-sm mb-1">Primary</button>
                                            <button type="button"
                                                class="btn btn-secondary btn-sm mb-1">Secondary</button>
                                            <button type="button" class="btn btn-success btn-sm mb-1">Success</button>
                                            <button type="button" class="btn btn-danger btn-sm mb-1">Danger</button>
                                            <button type="button" class="btn btn-warning btn-sm mb-1">Warning</button>
                                            <button type="button" class="btn btn-info btn-sm mb-1">Info</button>
                                            <button type="button" class="btn btn-light btn-sm mb-1">Light</button>
                                            <button type="button" class="btn btn-dark btn-sm mb-1">Dark</button>
                                        </p>
                                        <hr>
                                        <h4 class="card-title">Button Groups</h4>
                                        <br>
                                        <div class="btn-toolbar">
                                            <div class="btn-group btn-group-lg">
                                                <button type="button" class="btn btn-primary">Left</button>
                                                <button type="button" class="btn btn-primary">Middle</button>
                                                <button type="button" class="btn btn-primary">Right</button>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="btn-toolbar">
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-primary">Left</button>
                                                <button type="button" class="btn btn-primary">Middle</button>
                                                <button type="button" class="btn btn-primary">Right</button>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="btn-toolbar">
                                            <div class="btn-group btn-group-sm">
                                                <button type="button" class="btn btn-primary">Left</button>
                                                <button type="button" class="btn btn-primary">Middle</button>
                                                <button type="button" class="btn btn-primary">Right</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Alerts</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                            <strong>Warning!</strong> There was a problem with your <a href="#"
                                                class="alert-link">network connection</a>.
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                            <strong>Error!</strong> A <a href="#" class="alert-link">problem</a> has
                                            been occurred while submitting your data.
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                                            <strong>Success!</strong> Your <a href="#" class="alert-link">message</a>
                                            has been sent successfully.
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="alert alert-info alert-dismissible fade show" role="alert">
                                            <strong>Note!</strong> Please read the <a href="#"
                                                class="alert-link">comments</a> carefully.
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                            <strong>Warning!</strong> There was a problem with your <a href="#"
                                                class="alert-link">network connection</a>.
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                            <strong>Error!</strong> A <a href="#" class="alert-link">problem</a> has
                                            been occurred while submitting your data.
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                                            <strong>Success!</strong> Your <a href="#" class="alert-link">message</a>
                                            has been sent successfully.
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="alert alert-info alert-dismissible fade show" role="alert">
                                            <strong>Note!</strong> Please read the <a href="#"
                                                class="alert-link">comments</a> carefully.
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-12">
                                <div class="card-box">
                                    <h4 class="card-title">Dropdowns within Text</h4><br>
                                    <div class="dropdown">
                                        <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                                            aria-expanded="false"> Dropdown </a>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                        </div>
                                    </div>
                                    <hr>
                                    <h4 class="card-title">Dropdowns within Buttons</h4><br>
                                    <div class="btn-group mb-1">
                                        <button type="button" class="btn btn-primary dropdown-toggle"
                                            data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">Action</button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Separated link</a>
                                        </div>
                                    </div>
                                    <div class="btn-group mb-1">
                                        <button type="button" class="btn btn-secondary dropdown-toggle"
                                            data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">Action</button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Separated link</a>
                                        </div>
                                    </div>
                                    <div class="btn-group mb-1">
                                        <button type="button" class="btn btn-info dropdown-toggle"
                                            data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">Action</button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Separated link</a>
                                        </div>
                                    </div>
                                    <div class="btn-group mb-1">
                                        <button type="button" class="btn btn-success dropdown-toggle"
                                            data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">Action</button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Separated link</a>
                                        </div>
                                    </div>
                                    <div class="btn-group mb-1">
                                        <button type="button" class="btn btn-warning dropdown-toggle"
                                            data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">Action</button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Separated link</a>
                                        </div>
                                    </div>
                                    <div class="btn-group mb-1">
                                        <button type="button" class="btn btn-danger dropdown-toggle"
                                            data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">Action</button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Separated link</a>
                                        </div>
                                    </div>
                                    <hr>
                                    <h4 class="card-title">Split button dropdowns</h4><br>
                                    <div class="btn-group mb-1">
                                        <button type="button" class="btn btn-primary">Action</button>
                                        <button type="button"
                                            class="btn btn-primary dropdown-toggle dropdown-toggle-split"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <span class="sr-only">Toggle Dropdown</span>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Separated link</a>
                                        </div>
                                    </div>
                                    <div class="btn-group mb-1">
                                        <button type="button" class="btn btn-secondary">Action</button>
                                        <button type="button"
                                            class="btn btn-secondary dropdown-toggle dropdown-toggle-split"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <span class="sr-only">Toggle Dropdown</span>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Separated link</a>
                                        </div>
                                    </div>
                                    <div class="btn-group mb-1">
                                        <button type="button" class="btn btn-info">Action</button>
                                        <button type="button" class="btn btn-info dropdown-toggle dropdown-toggle-split"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <span class="sr-only">Toggle Dropdown</span>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Separated link</a>
                                        </div>
                                    </div>
                                    <div class="btn-group mb-1">
                                        <button type="button" class="btn btn-success">Action</button>
                                        <button type="button"
                                            class="btn btn-success dropdown-toggle dropdown-toggle-split"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <span class="sr-only">Toggle Dropdown</span>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Separated link</a>
                                        </div>
                                    </div>
                                    <div class="btn-group mb-1">
                                        <button type="button" class="btn btn-warning">Action</button>
                                        <button type="button"
                                            class="btn btn-warning dropdown-toggle dropdown-toggle-split"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <span class="sr-only">Toggle Dropdown</span>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Separated link</a>
                                        </div>
                                    </div>
                                    <div class="btn-group mb-1">
                                        <button type="button" class="btn btn-danger">Action</button>
                                        <button type="button"
                                            class="btn btn-danger dropdown-toggle dropdown-toggle-split"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <span class="sr-only">Toggle Dropdown</span>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Separated link</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-12">
                                <div class="card progress-example">
                                    <div class="card-header">
                                        <h4 class="card-title">Progress Bars</h4>
                                        <h5 class="text-muted">Large Progress Bars</h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-lg-6 col-12">
                                                <div>
                                                    <div class="progress progress-lg">
                                                        <div class="progress-bar" role="progressbar" style="width: 10%"
                                                            aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                                                        </div>
                                                    </div>
                                                    <div class="progress progress-lg">
                                                        <div class="progress-bar bg-success" role="progressbar"
                                                            style="width: 25%" aria-valuenow="25" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                    <div class="progress progress-lg">
                                                        <div class="progress-bar bg-info" role="progressbar"
                                                            style="width: 50%" aria-valuenow="50" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                    <div class="progress progress-lg">
                                                        <div class="progress-bar bg-warning" role="progressbar"
                                                            style="width: 75%" aria-valuenow="75" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                    <div class="progress progress-lg">
                                                        <div class="progress-bar bg-danger" role="progressbar"
                                                            style="width: 100%" aria-valuenow="100" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-12">
                                                <div class="progress progress-lg">
                                                    <div class="progress-bar progress-bar-striped" role="progressbar"
                                                        style="width: 10%" aria-valuenow="10" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                                <div class="progress progress-lg">
                                                    <div class="progress-bar progress-bar-striped bg-success"
                                                        role="progressbar" style="width: 25%" aria-valuenow="25"
                                                        aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                                <div class="progress progress-lg">
                                                    <div class="progress-bar progress-bar-striped bg-info"
                                                        role="progressbar" style="width: 50%" aria-valuenow="50"
                                                        aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                                <div class="progress progress-lg">
                                                    <div class="progress-bar progress-bar-striped bg-warning"
                                                        role="progressbar" style="width: 75%" aria-valuenow="75"
                                                        aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                                <div class="progress progress-lg">
                                                    <div class="progress-bar progress-bar-striped bg-danger"
                                                        role="progressbar" style="width: 100%" aria-valuenow="100"
                                                        aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <h5 class="text-muted">Default Progress Bars</h5><br>
                                        <div class="row">
                                            <div class="col-lg-6 col-12">
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar" style="width: 10%"
                                                        aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                                <div class="progress">
                                                    <div class="progress-bar bg-success" role="progressbar"
                                                        style="width: 25%" aria-valuenow="25" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                                <div class="progress">
                                                    <div class="progress-bar bg-info" role="progressbar"
                                                        style="width: 50%" aria-valuenow="50" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                                <div class="progress">
                                                    <div class="progress-bar bg-warning" role="progressbar"
                                                        style="width: 75%" aria-valuenow="75" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                                <div class="progress">
                                                    <div class="progress-bar bg-danger" role="progressbar"
                                                        style="width: 100%" aria-valuenow="100" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-12">
                                                <div class="progress">
                                                    <div class="progress-bar progress-bar-striped" role="progressbar"
                                                        style="width: 10%" aria-valuenow="10" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                                <div class="progress">
                                                    <div class="progress-bar progress-bar-striped bg-success"
                                                        role="progressbar" style="width: 25%" aria-valuenow="25"
                                                        aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                                <div class="progress">
                                                    <div class="progress-bar progress-bar-striped bg-info"
                                                        role="progressbar" style="width: 50%" aria-valuenow="50"
                                                        aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                                <div class="progress">
                                                    <div class="progress-bar progress-bar-striped bg-warning"
                                                        role="progressbar" style="width: 75%" aria-valuenow="75"
                                                        aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                                <div class="progress">
                                                    <div class="progress-bar progress-bar-striped bg-danger"
                                                        role="progressbar" style="width: 100%" aria-valuenow="100"
                                                        aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <h5 class="text-muted">Medium Progress Bars</h5><br>
                                        <div class="row">
                                            <div class="col-lg-6 col-12">
                                                <div>
                                                    <div class="progress progress-md">
                                                        <div class="progress-bar" role="progressbar" style="width: 10%"
                                                            aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                                                        </div>
                                                    </div>
                                                    <div class="progress progress-md">
                                                        <div class="progress-bar bg-success" role="progressbar"
                                                            style="width: 25%" aria-valuenow="25" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                    <div class="progress progress-md">
                                                        <div class="progress-bar bg-info" role="progressbar"
                                                            style="width: 50%" aria-valuenow="50" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                    <div class="progress progress-md">
                                                        <div class="progress-bar bg-warning" role="progressbar"
                                                            style="width: 75%" aria-valuenow="75" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                    <div class="progress progress-md">
                                                        <div class="progress-bar bg-danger" role="progressbar"
                                                            style="width: 100%" aria-valuenow="100" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-12">
                                                <div class="progress progress-md">
                                                    <div class="progress-bar progress-bar-striped" role="progressbar"
                                                        style="width: 10%" aria-valuenow="10" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                                <div class="progress progress-md">
                                                    <div class="progress-bar progress-bar-striped bg-success"
                                                        role="progressbar" style="width: 25%" aria-valuenow="25"
                                                        aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                                <div class="progress progress-md">
                                                    <div class="progress-bar progress-bar-striped bg-info"
                                                        role="progressbar" style="width: 50%" aria-valuenow="50"
                                                        aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                                <div class="progress progress-md">
                                                    <div class="progress-bar progress-bar-striped bg-warning"
                                                        role="progressbar" style="width: 75%" aria-valuenow="75"
                                                        aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                                <div class="progress progress-md">
                                                    <div class="progress-bar progress-bar-striped bg-danger"
                                                        role="progressbar" style="width: 100%" aria-valuenow="100"
                                                        aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <h5 class="text-muted">Small Progress Bars</h5><br>
                                        <div class="row">
                                            <div class="col-lg-6 col-12">
                                                <div>
                                                    <div class="progress progress-sm">
                                                        <div class="progress-bar" role="progressbar" style="width: 10%"
                                                            aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                                                        </div>
                                                    </div>
                                                    <div class="progress progress-sm">
                                                        <div class="progress-bar bg-success" role="progressbar"
                                                            style="width: 25%" aria-valuenow="25" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                    <div class="progress progress-sm">
                                                        <div class="progress-bar bg-info" role="progressbar"
                                                            style="width: 50%" aria-valuenow="50" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                    <div class="progress progress-sm">
                                                        <div class="progress-bar bg-warning" role="progressbar"
                                                            style="width: 75%" aria-valuenow="75" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                    <div class="progress progress-sm">
                                                        <div class="progress-bar bg-danger" role="progressbar"
                                                            style="width: 100%" aria-valuenow="100" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-12">
                                                <div class="progress progress-sm">
                                                    <div class="progress-bar progress-bar-striped" role="progressbar"
                                                        style="width: 10%" aria-valuenow="10" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                                <div class="progress progress-sm">
                                                    <div class="progress-bar progress-bar-striped bg-success"
                                                        role="progressbar" style="width: 25%" aria-valuenow="25"
                                                        aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                                <div class="progress progress-sm">
                                                    <div class="progress-bar progress-bar-striped bg-info"
                                                        role="progressbar" style="width: 50%" aria-valuenow="50"
                                                        aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                                <div class="progress progress-sm">
                                                    <div class="progress-bar progress-bar-striped bg-warning"
                                                        role="progressbar" style="width: 75%" aria-valuenow="75"
                                                        aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                                <div class="progress progress-sm">
                                                    <div class="progress-bar progress-bar-striped bg-danger"
                                                        role="progressbar" style="width: 100%" aria-valuenow="100"
                                                        aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <h5 class="text-muted">Extra Small Progress Bars</h5><br>
                                        <div class="row">
                                            <div class="col-lg-6 col-12">
                                                <div>
                                                    <div class="progress progress-xs">
                                                        <div class="progress-bar w-75" role="progressbar"
                                                            style="width: 10%" aria-valuenow="75" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                    <div class="progress progress-xs">
                                                        <div class="progress-bar bg-success" role="progressbar"
                                                            style="width: 25%" aria-valuenow="25" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                    <div class="progress progress-xs">
                                                        <div class="progress-bar bg-info" role="progressbar"
                                                            style="width: 50%" aria-valuenow="50" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                    <div class="progress progress-xs">
                                                        <div class="progress-bar bg-warning" role="progressbar"
                                                            style="width: 75%" aria-valuenow="75" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                    <div class="progress progress-xs">
                                                        <div class="progress-bar bg-danger" role="progressbar"
                                                            style="width: 100%" aria-valuenow="100" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-12">
                                                <div class="progress progress-xs">
                                                    <div class="progress-bar progress-bar-striped" role="progressbar"
                                                        style="width: 10%" aria-valuenow="10" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                                <div class="progress progress-xs">
                                                    <div class="progress-bar progress-bar-striped bg-success"
                                                        role="progressbar" style="width: 25%" aria-valuenow="25"
                                                        aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                                <div class="progress progress-xs">
                                                    <div class="progress-bar progress-bar-striped bg-info"
                                                        role="progressbar" style="width: 50%" aria-valuenow="50"
                                                        aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                                <div class="progress progress-xs">
                                                    <div class="progress-bar progress-bar-striped bg-warning"
                                                        role="progressbar" style="width: 75%" aria-valuenow="75"
                                                        aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                                <div class="progress progress-xs">
                                                    <div class="progress-bar progress-bar-striped bg-danger"
                                                        role="progressbar" style="width: 100%" aria-valuenow="100"
                                                        aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-12 d-flex">
                                <div class="card pagination-box flex-fill">
                                    <div class="card-header">
                                        <h4 class="card-title">Pagination</h4>
                                    </div>
                                    <div class="card-body">
                                        <div>
                                            <ul class="pagination">
                                                <li class="page-item disabled">
                                                    <a class="page-link" href="#" tabindex="-1">Previous</a>
                                                </li>
                                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                <li class="page-item active">
                                                    <a class="page-link" href="#">2 <span
                                                            class="sr-only">(current)</span></a>
                                                </li>
                                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                <li class="page-item">
                                                    <a class="page-link" href="#">Next</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div>
                                            <ul class="pagination">
                                                <li class="page-item">
                                                    <a class="page-link" href="#" aria-label="Previous">
                                                        <span aria-hidden="true">&laquo;</span>
                                                        <span class="sr-only">Previous</span>
                                                    </a>
                                                </li>
                                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                <li class="page-item">
                                                    <a class="page-link" href="#" aria-label="Next">
                                                        <span aria-hidden="true">&raquo;</span>
                                                        <span class="sr-only">Next</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div>
                                            <ul class="pagination pagination-lg">
                                                <li class="page-item disabled">
                                                    <a class="page-link" href="#" tabindex="-1">Previous</a>
                                                </li>
                                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                <li class="page-item active">
                                                    <a class="page-link" href="#">2 <span
                                                            class="sr-only">(current)</span></a>
                                                </li>
                                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                <li class="page-item">
                                                    <a class="page-link" href="#">Next</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div>
                                            <ul class="pagination pagination-sm">
                                                <li class="page-item disabled">
                                                    <a class="page-link" href="#" tabindex="-1">Previous</a>
                                                </li>
                                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                <li class="page-item active">
                                                    <a class="page-link" href="#">2 <span
                                                            class="sr-only">(current)</span></a>
                                                </li>
                                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                <li class="page-item">
                                                    <a class="page-link" href="#">Next</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-12 d-flex">
                                <div class="card flex-fill">
                                    <div class="card-header">
                                        <h4 class="card-title">Breadcrumbs</h4>
                                    </div>
                                    <div class="card-body">
                                        <nav aria-label="breadcrumb">
                                            <ol class="breadcrumb">
                                                <li class="breadcrumb-item active" aria-current="page">Home</li>
                                            </ol>
                                        </nav>
                                        <nav aria-label="breadcrumb">
                                            <ol class="breadcrumb">
                                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                                <li class="breadcrumb-item active" aria-current="page">Products</li>
                                            </ol>
                                        </nav>
                                        <nav aria-label="breadcrumb">
                                            <ol class="breadcrumb">
                                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                                <li class="breadcrumb-item"><a href="#">Products</a></li>
                                                <li class="breadcrumb-item active" aria-current="page">Accessories</li>
                                            </ol>
                                        </nav>
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