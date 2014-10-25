<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home Page</title>
	<link type="text/css" rel="stylesheet" href="css/bootstrap_css/bootstrap.min.css">
</head>
<body>
	<header></header>
	<section>
		<h1>Welcome to the wyoExchange</h1>
		<p>wyoExchange allows you to exchange your text books knowledge amongs your fellow schol students.</p>
	</section>
	<aside>
		<p>Log In If you have an wyoExchange account!</p>
		<form method="post" action="login.php">
			<p><input type="text" placeholder="UW Email"></p>
			<p><input type="password" placeholder="Password"></p>
			<p><input type="checkbox" value="remember">Remember Me <a href="passwordReSet.php">Forgot password? </a><input type="submit" value="Log In"></p>
		</form>
		<p>New at wyoExchange? Register Here!</p>
		<form method="post" action="register.php">
			<p><input type="text" placeholder="First Name"> <input type="text" placeholder="Last Name"</p>
			<p><input type="email" placeholder="UW Email"></p>
			<p><input type="password" placeholder="Password"></p>
			<p><input type="submit" value="Register Now"></p>
		</form>
	</aside>
</body>
</html>