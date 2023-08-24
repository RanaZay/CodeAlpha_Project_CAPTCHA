<!doctype html>
<html lang="en" data-bs-theme="auto">

<head>
	<script src="assets/js/color-modes.js"></script>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
	<meta name="generator" content="Hugo 0.115.4">


	<link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/sign-in/">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
	<link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
	<link href="StyleSheet.css" rel="stylesheet">
	<link href="Script.js">
	<link rel="shortcut icon" href="form.png" type="image">


	<!-- Custom styles for this template -->
	<link href="assets/sign-in/sign-in.css" rel="stylesheet">
	<link href="captcha.css" rel="stylesheet">
</head>

<body onload="generate()">
	<div class="container ">
		<div class="row">
			<main class="form-signin w-100 m-auto">

				<div class="col"></div>
				<div class="col">
					<center>
						<form action="home.php" method="Post">

							<img class="mb-4" src="images/captcha (2).png" alt="" width="100" height="100">
							<h1 class="h3 mb-3 fw-normal">Sign in</h1>

							<div class="form-floating">
								<input type="text" class="form-control" id="floatingname" placeholder="Name" name="name" required>
								<label for="floatingname">Name</label>
							</div>

							<div class="form-floating">
								<input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" required>
								<label for="floatingInput">Email address</label>
							</div>
							<div class="form-floating">
								<input type="password" class="form-control" id="floatingPassword" placeholder="Password" required>
								<label for="floatingPassword">Password</label>
							</div>
							<div class="form-floating">
								<input type="link" class="form-control" id="floatinglink" placeholder="Linked in URL" name=Linkedin required>
								<label for="floatinglink">Linked in</label>
							</div>


							<div class="form-check text-start my-3">
								<input class="form-check-input" type="checkbox" value="remember-me" id="flexCheckDefault">
								<label class="form-check-label" for="flexCheckDefault">
									Remember me
								</label>
							</div>


							<br>
			</main>
			</center>
			<center>
				<div id="user-input" class="inline">

					<input type="text" id="submit" placeholder="Captcha code" required>
				</div>

				<div class="inline" onclick="generate()">
					<i class="fas fa-sync"></i>
				</div>

				<div id="image" class="p-5 d-inline-block" style="width: 10%;" selectable="False">
					<div class="text-center">
					</div>
				</div>

				<input class="btn btn-primary w-100 py-2" type="submit" id="btn" onclick="printmsg()" />
				</form>

				<p id="key"></p>
			</center>
		</div>
		<div class="col"></div>
	</div>
	</div>

	<script src="assets/dist/js/bootstrap.bundle.min.js"></script>
	<script src="captcha.js"></script>
</body>

</html>