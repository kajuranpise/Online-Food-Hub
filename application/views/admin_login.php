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
<div class="container-fluid" id="banner"><br><br><br><br><br><br><br>
	<div class="col-sm-8" style="background: silver; margin-left: 18%;"><br><br>
		<?= form_open('admin_login/login')?>
	  <center><table class="table">
		<tr>
			<td>Enter Username</td>
			<td><?= form_input(['name'=>'un','placeholder'=>
				'Enter Username','class'=>'form-control','value'=>set_value('un')])?></td>
				<td style="color: red;"><?= form_error('un');?></td>
		</tr>

		<tr>-
			<td>Enter Password</td>
			<td><?= form_password(['name'=>'ps','placeholder'=>'Enter Password','class'=>'form-control'])?></td><br>
		    <td style="color: red;"><?= form_error('ps');?></td> 
		</tr>
		
		<tr>
			<td><?= form_submit(['name'=>'sub','value'=>'Login','class'=>'btn btn-primary'])?></td>
		</tr>
	  </table>
	</center>    </div>
  </div>

  <?php include('footer.php');?>
</body>
</html>
