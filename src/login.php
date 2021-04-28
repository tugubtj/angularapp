<!doctype html>
<html lang="en">
<head>
	
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
<style type="text/css">
	.top-pad {
  padding-top: 50px;
  padding-left: 80px;
}

#bg {
  position: fixed; 
  top: 0; 
  left: 0; 
  min-width: 100%;
  min-height: 100%;
}
.white{
	color: white;
}
</style>
</head>

<body> 
<div class="top-pad">
<div class="card container" style="width: 40%; padding-top: 50px; background-color: #4e957fe3 ">
		
	<img src="logo.png" style="width: 150px; margin-left: 35%;"></>
		<h4 class="card-title text-center mb-4 mt-1 white">
			Log into an existing account
		</h4>

<div class="form" style="width: 80%; align-self: center;">
	<form class="form-control" style="background-color: #47897d; " action="index.html" method="POST" >
	<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-8 white">
					<label for="user">Email: </label>
					<input class="form-control" type="email" name="username" required>
				</div>
			</div>
			<div class="row justify-content-center white">
				<div class="col-lg-8">
					<label>Password:</label>
					<input class="form-control" type="password" name="password" required>
					<br>
				</div>
			</div>
			
				<div class="d-flex justify-content-center">
					<button type="submit" name="submit" class="btn btn-primary ">Login</button>
				</div>	
	</div>
	</form>
	<br>
</div>
		<div class="card-footer white">
			<p> Note: In order to login, you must have to be registered </p>
			<a href="../views/register.html">Click here to register</a>
		</div>		
</div>
</div>
</body>
</html>