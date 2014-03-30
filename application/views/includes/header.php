<!DOCTYPE html> 
<html lang="en-US">
<head>
  <title>M:tel**Finance</title>
  <meta charset="utf-8">
  <link href="<?php echo base_url(); ?>assets/css/admin/global.css" rel="stylesheet" type="text/css">
  <link href="<?php echo base_url(); ?>assets/css/redmond/jquery-ui-1.10.4.custom.css" rel="stylesheet" type="text/css">
</head>
<body>
	<div class="container">
	<div class="row">
		<div class="col-md-14">
		<div class="navbar navbar-inverse">
		  <div class="navbar-header">
		    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
		      <span class="icon-bar"></span>
		      <span class="icon-bar"></span>
		      <span class="icon-bar"></span>
		    </button>
		    <a class="navbar-brand" href="#">M:tel**Finance</a>
		  </div>
		  <div class="navbar-collapse collapse navbar-responsive-collapse">
		    <ul class="nav navbar-nav">
		      <li<?php if($this->uri->segment(2) == 'menu1'){echo 'class="active"';}?>><a href="#"><b>Action</b></a></li>
		      <li<?php if($this->uri->segment(2) == 'menu1'){echo 'class="active"';}?>><a href="#"><b>Another action</b></a></li>
		      <li class="dropdown">
		        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>Sistem</b><b class="caret"></b></a>
		        <ul class="dropdown-menu">
		          <li><a href="<?php echo base_url(); ?>korisnik/odjava"><b>Odjava</b></a></li>
		        </ul>
		      </li>
		    </ul>   
		  </div>
		</div>
