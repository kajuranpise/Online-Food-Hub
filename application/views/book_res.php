<!DOCTYPE html>
<html>
<head><!-- Meta tag use for web make responsive -->
	  <meta http-equiv="X-UA-Compatible" content="IE-edge" />
	  <meta name="viewport" content="width-device-width" />
	  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<title>Admin Home</title>
	<link rel="stylesheet" type="text/css" href="<?=base_url("tool/css/bootstrap.css");?>">
	<link rel="stylesheet" type="text/css" href="<?=base_url("tool/css/style.css");?>">
	
	<script type="text/javascript" src="<?=base_url("tool/js/bootstrap.js")?>"></script>
    <script type="text/javascript" src="<?=base_url("tool/js/jquery-3.4.0.js")?>"></script>
	
</head>
<body>

<?php include("admin_header.php");?>
<div class="container-fluid" id="banner"><br><br><br><br>
	<div class="col-sm-8" style="background: silver; margin-left: 18%;">
		<?php  $un=$this->session->userdata('id');?>
		<?= form_open('admin_home/p_book2/')?>
		<h1><?= $msg; ?></h1>
		
		
		

	  
     </div>
  </div>

  <?php include('footer.php');?>
</body>
</html>
