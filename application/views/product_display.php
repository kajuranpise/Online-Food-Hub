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
		<?= $un=$this->session->userdata('id');?>
		<?= form_open('admin_login/login')?>
		<h1>Product Display</h1>
		<center><table class="table">

		<tr>
			<td style="color: red;"><center><b>ID</b></center></td>
			<td style="color: red;"><center><b>Name</b></center></td>
			<td style="color: red;"><center><b>Price</b></center></td>
		</tr>
	<?php
	if (isset($d1)) {
		foreach ($d1 as $d2) {
	?>
		<tr>
			<td><center><?= $d2->id; ?></center></td>
			<td><center><?= $d2->name; ?></center></td>
			<td><center><?= $d2->price; ?></center></td>
			
		</tr>
	<?php
		}
	}
	?>
	  </table>
	</center>
	  
     </div>
  </div>

  <?php include('footer.php');?>
</body>
</html>
