
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Medicare</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Bootstrap -->
<link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

	<div class="container">
		<div class="row">
			<div class="col-lg-6">
				<h2>Medicine Buying Form</h2>

				<form action="medibuyingconnect.php" method="post" style="background-color: lightgray;">

				<div class="form-group">
					<label>Patient Name</label><input type="text" name="pname" class="form-control">
			</div>
			<div class="form-group">
					<label>Buyyer Name</label><input type="text" name="bname" class="form-control">
			</div>
			<div class="form-group">
					<label>Address</label><input type="text" name="address" class="form-control">
			</div>
			<div class="form-group">
					<label>Email</label><input type="email" name="email" class="form-control">
			</div>
			<div class="form-group">
					<label>Mobile</label><input type="number" name="mobile" class="form-control">
			</div>
			<div class="form-group">
					<label>Income Certificate No.</label><input type="number" name="incomecert" class="form-control">
			</div>
			<div class="form-group">
					<label>Medicine</label><input type="text" name="medicine" class="form-control">
			</div>
			<div class="form-group">
					<label>Bill</label><input type="number" name="bill" class="form-control" placeholder="In Rupees">
			</div>
			<div class="form-group">
					<label>Problem/Disease</label><input type="text" name="problem" class="form-control">
			</div>
			
			<button class="btn btn-primary" type="submit">Submit</button>
		</form>
		</div>
	</div>
</div>
		
	
	<script src="js/bootstrap.min.js"></script>

</body>
</html>