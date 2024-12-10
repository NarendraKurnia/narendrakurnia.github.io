<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Agita Cakes</title>
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
background-image: url('images/bg-index.png'); 
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
				<h1>Hai (kamu)...</h1>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row col-md-12">
			<div class="col-md-4">
				<a href="transaksi.php" class="card-index-link">
				<div class="card-index card-1 custom-card">
					<i class="bi bi-bag-check-fill icon-custom"></i>
					<div class="card-body">
						<h5 class="card-title-item">Transaksi</h5>
					</div>
				</div>
			</a>
			</div>
			<div class="col-md-4">
				<a href="produk.php" class="card-index-link">
				<div class="card-index card-2 custom-card">
					<i class="bi bi-cart4 icon-custom"></i>
					<div class="card-body">
						<h5 class="card-title-item">Produk</h5>
					</div>
				</div>
			</a>
			</div>
			<div class="col-md-4">
				<a href="diskon.php" class="card-index-link">
				<div class="card-index card-3 custom-card">
					<i class="bi bi-percent icon-custom"></i>
					<div class="card-body">
						<h5 class="card-title-item">Diskon</h5>
					</div>
				</div>
			</a>
			</div>
			<div class="col-md-4 mt-3">
				<div class="card-index card-4 custom-card">
					<a href="voucher.php" class="card-index-link">
					<i class="bi bi-ticket-perforated icon-custom"></i>
					<div class="card-body">
						<h5 class="card-title-item">Voucher</h5>
					</div>
				</div>
			</a>
			</div>
			<div class="col-md-4 mt-3">
				<a href="laporan.php" class="card-index-link">
				<div class="card-index card-5 custom-card">
					<i class="bi bi-book-half icon-custom"></i>
					<div class="card-body">
						<h5 class="card-title-item">Laporan</h5>
					</div>
				</div>
			</a>
			</div>
			<div class="col-md-4 mt-3">
				<a href="member.php" class="card-index-link">
				<div class="card-index card-6 custom-card">
					<i class="bi bi-person-lines-fill icon-custom"></i>
					<div class="card-body">
						<h5 class="card-title-item">Member</h5>
					</div>
				</div>
			</a>
			</div>
		</div>
	</div>
		
	</div>
	</main>
	<script>
    function redirectToPage() {
        window.location.href = "index.php";
    }
</script>
</body>
</html>