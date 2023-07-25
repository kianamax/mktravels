
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login Page</title>
	<style>
		body {
			font-family: Arial, sans-serif;
			background-color: #f4f4f4;
			margin: 0;
			padding: 0;
		}

		.container {
			max-width: 400px;
			margin: 40px auto;
			background-color: #fff;
			padding: 20px;
			border-radius: 5px;
			box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
		}

		.container h2 {
			text-align: center;
			margin-top: 0;
		}

		.container p {
			margin-bottom: 10px;
		}

		.container label {
			display: block;
			font-weight: bold;
			margin-bottom: 5px;
		}

		.container input[type="text"],
		.container input[type="password"] {
			width: 100%;
			padding: 10px;
			border: 1px solid #ccc;
			border-radius: 4px;
			box-sizing: border-box;
			margin-bottom: 10px;
		}

		.container input[type="submit"] {
			width: 100%;
			background-color: #4CAF50;
			color: #fff;
			border: none;
			padding: 10px;
			border-radius: 4px;
			cursor: pointer;
		}

		.container input[type="submit"]:hover {
			background-color: #45a049;
		}
	</style>
</head>
<body>
	<div class="container">
		<h2>Record Form</h2>
		<form action="insert.php" method="post">
			<p>
				<label for="name">Name</label>
				<input type="text" name="name" id="name">
			</p>
			<p>
				<label for="email">Email</label>
				<input type="text" name="email" id="email">
			</p>
			<p>
				<label for="password">Password</label>
				<input type="password" name="password" id="password">
			</p>
			<input type="submit" value="Submit">
		</form>
	</div>
</body>
</html>