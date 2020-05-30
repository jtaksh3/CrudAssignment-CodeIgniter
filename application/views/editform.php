<!DOCTYPE html>
<html>
<head>
	<title>Simple CRUD using CodeIgniter</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>bootstrap/css/bootstrap.min.css">
</head>
<body>
<div class="container">
	<h1 class="page-header text-center">Simple CRUD using CodeIgniter</h1>
	<div class="row">
		<div class="col-sm-4 col-sm-offset-4">
			<h3>Edit Form
				<span class="pull-right"><a href="<?php echo base_url(); ?>" class="btn btn-primary"><span class="glyphicon glyphicon-arrow-left"></span> Back</a></span>
			</h3>
			<hr>
			<?php extract($user); ?>
			<form method="POST" action="<?php echo base_url(); ?>index.php/users/update/<?php echo $id; ?>">
				<div class="form-group">
					<label>Name:</label>
					<input type="text" value = "<?php echo $Name;?>" class="form-control" name="name">
				</div>
				<div class="form-group">
					<label>Email:</label>
					<input type="email" value = "<?php echo $Email;?>" class="form-control" name="email">
				</div>
				<div class="form-group">
					<label>Mobile no:</label>
					<input type="tel" value = "<?php echo $Mobile_no;?>" class="form-control" name="mobile">
				</div>
				<div class="form-group">
					<label>Date of Birth:</label>
					<input type="Date" value = "<?php echo $Date_of_birth;?>" class="form-control" name="dob">
				</div>
				<div class="form-group">
					<label>Pincode</label>
					<input type="tel" value = "<?php echo $Pincode;?>" class="form-control" name="pincode">
				</div>
				<button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-check"></span> Update</button>
			</form>
		</div>
	</div>
</div>
</body>
</html>