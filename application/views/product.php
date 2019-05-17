<!DOCTYPE html>
<html>
<head><!-- Meta tag use for web make responsive -->
	  <meta http-equiv="X-UA-Compatible" content="IE-edge" />
	  <meta name="viewport" content="width-device-width" />
	  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<title>Product</title>
	<link rel="stylesheet" type="text/css" href="<?=base_url("tool/css/bootstrap.css");?>">
	<link rel="stylesheet" type="text/css" href="<?=base_url("tool/css/style.css");?>">
	
	<script type="text/javascript" src="<?=base_url("tool/js/bootstrap.js")?>"></script>
    <script type="text/javascript" src="<?=base_url("tool/js/jquery-3.4.0.js")?>"></script>
	
</head>
<body>

<?php include("user_header.php");?>
<div class="container-fluid" id="banner"><br><br><br><br><br><br><br><br>
	<div class="col-sm-8" style="background: silver; margin-left: 18%;"><br>
		<h2>Product</h2>
	  <center><table class="table">
		<tr>
			<td style="color: red;"><center><b>Name</b></center></td>
			<td style="color: red;"><center><b>Price</b></center></td>
			<td style="color: red;"><center><b>Book Now</b></center></td>
		</tr>
		<tr>
			<td><center>Pizza</center></td>
			<td><center>100</center></td>
			<td><center><a href="#" class="btn btn-primary">Book Now</a></center></td>
		</tr>
	  </table>
	</center>
    </div>
  </div>

  <?php include('footer.php');?>

</body>
</html>
