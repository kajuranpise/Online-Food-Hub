<!DOCTYPE html>
<html>
<head><!-- Meta tag use for web make responsive -->
	  <meta http-equiv="X-UA-Compatible" content="IE-edge" />
	  <meta name="viewport" content="width-device-width" />
	  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="<?=base_url("tool/css/bootstrap.css");?>">
	<link rel="stylesheet" type="text/css" href="<?=base_url("tool/css/style.css");?>">
	
	<script type="text/javascript" src="<?=base_url("tool/js/bootstrap.js")?>"></script>
    <script type="text/javascript" src="<?=base_url("tool/js/jquery-3.4.0.js")?>"></script>
	
</head>
<body>

<?php include("user_header.php");?>
<div class="container-fluid" id="banner"><br><br><br><br><br><br><br><br>
	<div class="col-sm-8" style="background: silver; margin-left: 18%;"><br><br>
		<?= form_open('home/psc'); ?>
	  <center><table class="table">
		<tr>
			<td><input type="text" name="search" placeholder="Enter your Food Name" class="form-control"></td>
			<td><input type="submit" name="sub" value="Search" class="btn btn-primary"></td>
		</tr>
	  </table>
	</center><br><br>
    </div>
  </div>

  <?php include('footer.php');?>
</body>
</html>
