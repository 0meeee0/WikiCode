<!doctype html>
<html lang="en">
	<head>
		<title>Register</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/style.css">
		<link rel="icon" href="images/bg.svg">

	</head>
	<body>
		<section class="ftco-section">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-md-6 col-lg-4">
						<div class="login-wrap py-5">
							<div class="img d-flex align-items-center justify-content-center" style="background-image: url(images/bg2.svg);"></div>
							<h3 class="text-center mb-0">CREATE AN ACCOUNT</h3>
							<p class="text-center">We welcome our new users with open arms</p>

							<!-- form -->
							<form action="index.php?action=signup" class="sign-up-form" method="post">
								<div class="form-group ">
									<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-user"></span></div>
									<input type="text" id="username" name="username" class="form-control" placeholder="Username" required>
								</div>
								<div class="form-group">
									<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-envelope"></span></div>
									<input type="email" id="email" name="email" class="form-control" placeholder="Email"  required>
								</div>
								<div class="form-group">
									<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-lock"></span></div>
									<input type="password" id="password" name="password" class="form-control" placeholder="Password" pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).{8,}$" required>
								</div>
								<div class="form-group">
									<button type="submit" class="btn form-control btn-primary rounded submit px-3">Get Started</button>
								</div>
							</form>

							<div class="w-100 text-center mt-4 text">
								<p class="mb-0">Already have an account?</p>
								<a href="index.php?action=ak">Log in</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<script src="css\assets\js\validation_sign_up.js"></script>
		<script src="js/jquery.min.js"></script>
		<script src="js/popper.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/main.js"></script>

	</body>
</html>
