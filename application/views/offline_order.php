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
<div class="container-fluid" id="banner"><br><br><br><br><br><br>
	<div class="col-sm-8" style="background: silver; margin-left: 18%;"><br><br>
		<?php  $un=$this->session->userdata('id');?>
		<?= form_open('admin_home/p_search')?>
		<h1>Offline Order</h1>
		<table class="table">
			<tr>
				<td>Enter Product Name</td>
				<td><?= form_input(['name'=>'search','placeholder'=>'Enter Product Name','class'=>'form-control']); ?></td>
				<td><?= form_submit(['name'=>'sub','value'=>'Search','class'=>'btn btn-primary']); ?></td>
			</tr>
		</table>
		<table class="table">
		<tr>
					<td><center><font color="blue"><b>Name</b></font></center></td>
					<td><center><font color="blue"><b>Price</b></font></center></td>
					<td><center><font color="blue"><b>Book Now</b></font></center></td>
				</tr>
		<br>
		<?php
		if (isset($d2)) 
		{
		?>
			
				<tr>
					<td><center><font><?= $d2->name; ?></font></center></td>
					<td><center><font><?= $d2->price; ?></font></center></td>
					<td><center><font><?= anchor('admin_home/pbook/'.$d2->id,'Book Now',['class'=>'btn btn-primary']); ?></font></center></td>
				</tr>
			
		<?php
		}
		else{
			echo "Producy Not Found";
		}
		?></table>

	  
     </div>
  </div>

  <?php include('footer.php');?>
</body>
</html>
