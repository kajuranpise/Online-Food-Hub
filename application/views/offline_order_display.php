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
	<div class="col-sm-8" style="background: silver; margin-left: 18%;"><br>
		<?php $un=$this->session->userdata('id');?>
		<?= form_open('admin_login/login')?>
		<h1>Offline Order Display</h1>
		<table class="table">
			<tr>
				
					<td><center><font color="blue"><b>Name</b></font></center></td>
					<td><center><font color="blue"><b>Address</b></font></center></td>
					<td><center><font color="blue"><b>City</b></font></center></td>
					<td><center><font color="blue"><b>Pin Code</b></font></center></td>
					<td><center><font color="blue"><b>Mobile</b></font></center></td>
					<td><center><font color="blue"><b>E-Mail</b></font></center></td>
					<td><center><font color="blue"><b>Product Name</b></font></center></td>
					<td><center><font color="blue"><b>Price</b></font></center></td>

				
			</tr>
			<?php
		    if(isset($r1)) 
		    { 
		        foreach($r1 as $r2) {
		    	
		    	
		    ?>
			
				<tr>
					<td><center><font><?= $r2->name; ?></font></center></td>
					<td><center><font><?= $r2->address; ?></font></center></td>
					<td><center><font><?= $r2->city; ?></font></center></td>
					<td><center><font><?= $r2->pin; ?></font></center></td>
					<td><center><font><?= $r2->mno; ?></font></center></td>
					<td><center><font><?= $r2->email; ?></font></center></td>
					<td><center><font><?= $r2->pname; ?></font></center></td>
					<td><center><font><?= $r2->price; ?></font></center></td>
					
				</tr>
			
		    <?php
		      }
		    } ?>
		</table>
	  
     </div>
  </div>

  <?php include('footer.php');?>
</body>
</html>
