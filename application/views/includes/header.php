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
		<div class="col-md-12">
    <nav role="navigation" class="navbar navbar-default">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button data-target="#bs-example-navbar-collapse-1" data-toggle="collapse" class="navbar-toggle" type="button">
            <span class="sr-only">Skupi navigaciju</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a href="#" class="navbar-brand">M:tel**Finance</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div id="bs-example-navbar-collapse-1" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li <?php if($this->uri->segment(2) == 'menu1'){echo 'class="active"';}?>>
		          <a href="<?php echo base_url(); ?>">Menu 1</a>
		        </li>
		      <li <?php if($this->uri->segment(2) == 'menu2'){echo 'class="active"';}?>>
		          <a href="<?php echo base_url(); ?>">Menu 2</a>
		        </li>
		       <li class="dropdown">
		          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Sistem <b class="caret"></b></a>
		          <ul class="dropdown-menu">
		            <li>
		              <a href="<?php echo base_url(); ?>korisnik/odjava">Odjava</a>
		            </li>
		          </ul>
		        </li>
          	</ul>
            </li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
  </div>
