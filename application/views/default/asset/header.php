
<link rel="icon" href="https://colorlib.com//polygon/admindek/files/assets/images/favicon.ico" type="image/x-icon">

<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Quicksand:500,700" rel="stylesheet">

<link rel="stylesheet" type="text/css" href="<?php echo   base_url('files/bower_components/bootstrap/css/bootstrap.min.css') ?> ">

<link rel="stylesheet" href="<?= base_url('files/assets/pages/waves/css/waves.min.css') ?> " type="text/css" media="all">

<link rel="stylesheet" type="text/css" href="<?= base_url('files/assets/icon/feather/css/feather.css') ?> ">

<link rel="stylesheet" type="text/css" href="<?= base_url('files/assets/css/font-awesome-n.min.css') ?> ">

<link rel="stylesheet" href="<?= base_url('files/bower_components/chartist/css/chartist.css') ?> " type="text/css" media="all">

<link rel="stylesheet" type="text/css" href="<?= base_url('files/assets/css/style.css') ?> ">
<link rel="stylesheet" type="text/css" href="<?= base_url('files/assets/css/component.css') ?>">

<link rel="stylesheet" type="text/css" href="<?= base_url('files/assets/css/widget.css') ?> ">
<link rel="stylesheet" type="text/css" href="<?= base_url('files/bower_components/datatables.net-bs4/css/dataTables.bootstrap4.min.css') ?>  ">
<link rel="stylesheet" type="text/css" href="<?= base_url('files/assets/css/pages.css') ?>">

<nav class="navbar header-navbar pcoded-header">
<div class="navbar-wrapper">
<div class="navbar-logo">
<a href="index.html">
<img class="img-fluid" src="<?= base_url('files/assets/images/logo.png') ?>" alt="Theme-Logo" />
</a>
<a class="mobile-menu" id="mobile-collapse" href="#!">
<i class="feather icon-menu icon-toggle-right"></i>
</a>
<a class="mobile-options waves-effect waves-light">
<i class="feather icon-more-horizontal"></i>
</a>
</div>
<div class="navbar-container container-fluid">
<ul class="nav-left">
<li class="header-search">

</li>
<li>
<a href="#!" onclick="if (!window.__cfRLUnblockHandlers) return false; javascript:toggleFullScreen()" class="waves-effect waves-light" data-cf-modified-96f4a48c66d6e6f9aed9ecee-="">
<i class="full-screen feather icon-maximize"></i>
</a>
</li>
</ul>
<ul class="nav-right">
<li class="header-notification">
<div class="dropdown-primary dropdown">
<!-- <div class="dropdown-toggle" data-toggle="dropdown">
<i class="feather icon-bell"></i>
<span class="badge bg-c-red">5</span>
</div> -->
<ul class="show-notification notification-view dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
<li>
<h6>Notifications</h6>
<label class="label label-danger">New</label>
</li>
<li>
<div class="media">
<img class="img-radius" src="../files/assets/images/avatar-4.jpg" alt="Generic placeholder image">
<div class="media-body">
<h5 class="notification-user">John Doe</h5>
<p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
<span class="notification-time">30 minutes ago</span>
</div>
</div>
</li>
<li>
<div class="media">
<img class="img-radius" src="<?= base_url('files/assets/images/avatar-3.jpg') ?>" alt="Generic placeholder image">
<div class="media-body">
<h5 class="notification-user">Joseph William</h5>
<p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
<span class="notification-time">30 minutes ago</span>
</div>
</div>
</li>
<li>
<div class="media">
<img class="img-radius" src="../files/assets/images/avatar-4.jpg" alt="Generic placeholder image">
<div class="media-body">
<h5 class="notification-user">Sara Soudein</h5>
<p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
<span class="notification-time">30 minutes ago</span>
</div>
</div>
</li>
</ul>
</div>
</li>
<li class="header-notification">
<!-- <div class="dropdown-primary dropdown">
<div class="displayChatbox dropdown-toggle" data-toggle="dropdown">
<i class="feather icon-message-square"></i>
<span class="badge bg-c-green">3</span>
</div>
</div> -->
</li>

<li class="user-profile header-notification">
<div class="dropdown-primary dropdown">
<div class="dropdown-toggle" data-toggle="dropdown">
 <img src="<?= base_url('files/assets/images/avatar-4.jpg') ?>" class="img-radius" alt="User-Profile-Image"> 
<span>Admin</span>
<i class="feather icon-chevron-down"></i>
</div>
<ul class="show-notification profile-notification dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">

<!-- <li>
<a href="#">
<i class="feather icon-user"></i> Profile
</a>
</li> -->

<li>
<a href="<?= base_url('Auth/reset') ?>">
<i class="feather icon-user"></i> Reset Password
</a>
</li>

<li>
<a href="<?= base_url('admin/logout') ?>">
<i class="feather icon-lock"></i> Lock Screen
</a>
</li>
<li>
<a href="<?= base_url('admin/logout') ?>">
<i class="feather icon-log-out"></i> Logout
</a>
</li>
</ul>
</div>
</li>


</ul>
</div>
</div>
</nav>
