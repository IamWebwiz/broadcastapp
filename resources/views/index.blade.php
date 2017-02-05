
<?php
// project: Broadcast Message Generator
?>

<!DOCTYPE html>
<html>
<head>
	<title>Broadcast Message Generator</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<div class="container">
	<h1>Broadcast Message Generator</h1>
	<br>
	<div class="row">
		<div class="col-md-4">
			<div class="alert alert-info">
				Please fill in the form below appropriately to generate a broadcast message for your enterprise
			</div>
		</div>
		<div class="col-md-8">
			<div class="jumbotron">
				<form method="post" name="business" class="form-horizontal" action="">
				<h4>Fill this form appropriately!</h4>
				<hr>
					<div class="form-group">
					<div class="col-md-4">
					<label for="bizname">
						Business name
					</label>
					</div>
					<div class="col-md-8">
					<input type="text" name="name" placeholder="Enter your business name" class="form-control">
					</div>
					</div>

					<div class="form-group">
						<div class="col-md-4">
						<label for="bizcat">
							Business Category
						</label>
						</div>
						<span class="col-md-8">
						<select name="category" class="form-control">
							<option value="-" class="text-muted">Select category</option>
							<option value="computing">Computing</option>
							<option value="clothings">Fashion</option>
							<option value="hairStyling">Hair styling</option>
							<option value="shoes">Shoes</option>
							<option value="trading">Trading</option>
							<option value="furniture">Furniture</option>
							<option value="carpentry">Carpentry</option>
							<option value="ceramics">Ceramics</option>
							<option value="tiling">Tiling</option>
							<option value="bricklaying">Bricklaying</option>
						</select>
						</span>
					</div>

					<div class="form-group">
						<div class="col-md-4">
							<label for="phone_number">Phone number</label>
						</div>
						<div class="col-md-8">
							<input type="tel" name="phone" id="phone" placeholder="Enter your phone number" class="form-control">
						</div>
					</div>

					<div class="form-group">
						<div class="col-md-4">
							<label for="email">Email address</label>
						</div>
						<div class="col-md-8">
							<input type="email" name="email" placeholder="Enter your email address" class="form-control">
						</div>
					</div>

					<div class="form-group">
						<div class="col-md-4">
							<label for="address">Address</label> <span class="text-danger"> (If available)</span>
						</div>
						<div class="col-md-8">
							<input type="text" name="address" placeholder="Enter your enterprise location if available" class="form-control">

		</div>
					</div>
					<div class="form-group">
						<div class="col-md-4"></div>
						<div class="col-md-8">
							<button type="submit" name="generate" class="btn btn-success btn-md">Generate!</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
</body>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
</html>
