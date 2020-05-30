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
			<h3>Add Form
				<span class="pull-right"><a href="<?php echo base_url(); ?>" class="btn btn-primary"><span class="glyphicon glyphicon-arrow-left"></span> Back</a></span>
			</h3>
			<hr>
			<form method="POST" action="<?php echo base_url(); ?>index.php/users/insert">
				<div class="form-group">
					<label>Name:</label>
					<input type="text" class="form-control" name="name">
				</div>
				<div class="form-group">
					<label>Email:</label>
					<input type="email" class="form-control" name="email">
				</div>
				<div class="form-group">
					<label>Mobile no:</label>
					<input type="tel" class="form-control" name="mobile">
				</div>
				<div class="form-group">
					<label>Date of Birth:</label>
					<input type="Date" class="form-control" name="dob">
				</div>
				<div class="form-group">
					<label>Pincode</label>
					<input type="tel" class="form-control" name="pincode">
				</div>
				<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Save</button>
			</form>
		</div>
	</div>
</div>
</body>
</html>