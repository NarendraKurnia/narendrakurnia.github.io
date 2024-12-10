<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Login</title>
	<link rel="stylesheet" href="">
	<!-- icon -->
	<link rel="icon" href="images/icon3.png">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

	<!-- css custom -->
	<link rel="stylesheet" href="css/index.css">
	<link rel="stylesheet" href="css/responsive.css">
</head>
<body style="
    background-image: url('images/login-bg.png'); 
    background-size: cover; 
    background-position: center; 
    background-repeat: no-repeat; 
    margin: 0; 
    height: 100vh; 
">
	<main>
		<div class="container d-flex justify-content-center align-items-center mb-5">
			<div class="login-box mt-5 col-md-4 mb-5 login-box">
				<div class="login-title">
					<h1>Login Kasir</h1>
				</div>
				<div class="card-login mt-5">
					<div class="card-body login-card-body justify-content-center items-center">
						<p class="login-box-msg">Masukkan Username dan Password</p>
					</div>
					<form class="col-md-10 form">
						<div class="input-group mb-3">
							<input type="text" name="username" class="form-control" placeholder="Username">
							<div class="input-group-append">
								<div class="input-group-text">
									<i class="bi bi-person"></i>
								</div>
							</div>
						</div>
						<div class="input-group mb-3">
							<input type="password" name="password" class="form-control" placeholder="Password">
							<div class="input-group-append">
								<div class="input-group-text">
									<i class="bi bi-key-fill"></i>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-8 mt-3">
								<div class="icheck-primary remember">
									<input type="checkbox" id="remember">
									<label for="remember">
										Remember Me
									</label>
								</div>
							</div>
							<!-- /.col -->
							<div class="col-md-4 mt-3 ">
								<a href="index.php" class="btn btn-primary btn-block mb-3 sign-in">Sign In</a>
							</div>
							<div class="d-flex gap-2 justify-content-center items-center mb-5 fs-5 regis">
								<p class="fw-semibold">Belum punya akun?</p>
            					<a href="registrasi.php" class="daftar">Daftar di sini</a>
        					</div>
						</div>
					</form>
				</div>
			</div>
		</div>

	</main>
	<script>
</script>
</body>
</html>