<?php include "db.php";	?>
<?php include "functions.php"; ?>

<?php
	if(isset($_POST['submit']))
	{
		deleteUser();
	}
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Login</title>
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	</head>
	<body>
		<div class="container">
			<div class="col-md-6">
				<form action="login_delete.php" method="post">
					<div class="form-group">
						<label for="username">Username</label>
						<input type="text" name="username" class="form-control">
					</div>
					<div class="form-group">
						<label for="password">Password</label>
						<input type="password" name="password" class="form-control">
					</div>
					<div class="form-group">
						<select name="id" class="form-control">
							<?php
								showAllUserId();
							?>
						</select>
					</div>
					<input type="submit" name="submit" value="Submit" class="btn btn-primary" />
				</form>
			</div>
		</div>
	</body>
</html>