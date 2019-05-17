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

		<table class="table">
		<tr>
					<td><center><font color="blue"><b>Name</b></font></center></td>
					<td><center><font color="blue"><b>Price</b></font></center></td>
					<td><center><font color="blue"><b>Book Now</b></font></center></td>
				</tr>
		<br>
		<?php
		if(isset($res)) 
		{
			foreach($res as $r1){
		?>
			
				<tr>
					<td><center><font><?= $r1->name; ?></font></center></td>
					<td><center><font><?= $r1->price; ?></font></center></td>
					<td><center><font><?= anchor('home/b_now/'.$r1->id,'Book Now',['class'=>'btn btn-primary']); ?></font></center></td>
				</tr>
			
		<?php
		     }
		}
		
		?></table>



	
	</center><br><br>
    </div>
  </div>

  <?php include('footer.php');?>
</body>
</html>
