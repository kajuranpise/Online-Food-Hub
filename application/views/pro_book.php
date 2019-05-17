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
		<h1>Offline Order Booking</h1>
		<?= validation_errors(); ?>
		<table class="table">
			<tr>
				<td> Product Name</td>
				<td><?= form_input(['name'=>'pname','placeholder'=>'Enter Product Name','value'=>$r1->name,'class'=>'form-control']); ?></td>
				<td>Price</td>
				<td><?= form_input(['name'=>'price','placeholder'=>'Enter Price','value'=>$r1->price,'class'=>'form-control']); ?></td>
			</tr>
			<tr>
				<td>Customer Name</td>
				<td><?= form_input(['name'=>'name','placeholder'=>'Enter Customer Name','class'=>'form-control']); ?></td>
				<td>Address</td>
				<td><?= form_input(['name'=>'address','placeholder'=>'Enter Address','class'=>'form-control']); ?></td>
			</tr>
			<tr>
				<td>City</td>
				<td><?= form_input(['name'=>'city','placeholder'=>'Enter City','class'=>'form-control']); ?></td>
				<td>Pin Code</td>
				<td><?= form_input(['name'=>'pin','placeholder'=>'Enter Pin Code','class'=>'form-control']); ?></td>
			</tr>
			<tr>
				<td>Mobile No</td>
				<td><?= form_input(['name'=>'mno','placeholder'=>'Enter Mobile No','class'=>'form-control']); ?></td>
				<td>E-mail</td>
				<td><?= form_input(['name'=>'email','placeholder'=>'Enter E-mail','class'=>'form-control']); ?></td>
			</tr>
			<tr>
				<td align="center"><?= form_submit(['name'=>'sub','value'=>'Book Now','class'=>'btn btn-primary']); ?></td>
			</tr>
		</table>
		

	  
     </div>
  </div>

  <?php include('footer.php');?>
</body>
</html>
