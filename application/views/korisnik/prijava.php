<!DOCTYPE html> 
<html lang="en-US">
  <head>
    <title>M:tel**Finance</title>
    <meta charset="utf-8">
    <link href="<?php echo base_url(); ?>assets/css/admin/global.css" rel="stylesheet" type="text/css">
  	<link href="<?php echo base_url(); ?>assets/css/redmond/jquery-ui-1.10.4.custom.css" rel="stylesheet" type="text/css">
</head>
  <body>
   <div class="container-fluid">
		  <div class="row">
      <?php 
      $attributes = array('class' => 'form-signin');
      echo form_open('korisnik/prijava', $attributes);
      echo '<h2 class="form-signin-heading">Prijava</h2>';
     $this->form_builder->text('korisnickoime','Korisničko ime', set_value('korisnickoime'),'form-control','Korisničko ime');
	 $this->form_builder->password('lozinka','Lozinka', set_value('password'),'form-control','Lozinka');
      if(isset($message_error) && $message_error){
          echo '<div class="alert alert-danger">';
            echo '<a class="close" data-dismiss="alert">×</a>';
            echo 'Podaci nisu ispravni, pokušajte ponovno!';
          echo '</div>';             
      }
      echo "<br />";
      echo form_submit('submit', 'Prijava', 'class="btn btn-large btn-primary"');
      echo form_close();
      ?>      
   	 </div>
	</div>
	<!--container-->
		<!--[if !IE]>-->
		<script src="<?php echo base_url(); ?>assets/js/jquery-2.1.0.min.js"></script>
		<!--<![endif]-->
		<!--[if IE]>
		<script src="<?php echo base_url(); ?>assets/js/jquery-1.11.0.min.js"></script>
		<![endif]-->
		<!--[if !IE]>-->
		<script type="text/javascript">
			window.jQuery || document.write("<script src='<?php echo base_url(); ?>assets/js/jquery-2.1.0.min.js'>" + "<" + "/script>");
		</script>
		<!--<![endif]-->
		<!--[if IE]>
		<script type="text/javascript">
		window.jQuery || document.write("<script src='<?php echo base_url(); ?>assets/js/jquery-1.11.0.min.js'>"+"<"+"/script>");
		</script>
		<![endif]-->
		<script src="<?php echo base_url(); ?>assets/js/jquery-ui-1.10.4.custom.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/admin.min.js"></script>
			
  </body>
</html>    
    