<?php
	$koneksi = mysqli_connect("localhost","root","","belajar_loginapp");
	if($koneksi)
	{
		echo "We're Connected";
	}
	else
	{
		echo "Connection Failed";
	}
	$query = "SELECT * FROM users";
	$result = mysqli_query($koneksi,$query);
	
	if(!$result)
	{
		die('Query Failed'.mysqli_error($koneksi));
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
				<?php
					while($row=mysqli_fetch_assoc($result))
					{
						echo "<pre>";
						print_r($row);
						echo "</pre>";
					}
				?>
			</div>
		</div>
	</body>
</html>