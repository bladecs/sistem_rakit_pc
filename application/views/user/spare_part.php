<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nova Square|Poppins">
	<style>
		.gradient-custom {
			background: #fccb90;
			background: -webkit-linear-gradient(to right, #0F0F0F, #1A3A59);
			background: linear-gradient(to right, #0F0F0F, #1A3A59);
		}

		.gradient-custom2 {
			background: #fccb90;
			background: -webkit-linear-gradient(to right, #0F0F0F, #461959);
			background: linear-gradient(to right, #0F0F0F, #461959);
		}

		.gradient-custom3 {
			background: #fccb90;
			background: -webkit-linear-gradient(to right, #461959, #7A316F);
			background: linear-gradient(to right, #461959, #7A316F);
		}

		.gradient-custom4 {
			background: #fccb90;
			background: -webkit-linear-gradient(to right, #7A316F, #0F0F0F);
			background: linear-gradient(to right, #7A316F, #0F0F0F);
		}

		.gradient-custom5 {
			background: #fccb90;
			background: -webkit-linear-gradient(to right, #001C30, #0F0F0F, #001C30);
			background: linear-gradient(to right, #001C30, #0F0F0F, #001C30);
		}

		.gradient-custom6 {
			background: #fccb90;
			background: -webkit-linear-gradient(135deg, #0F0F0F, #001C30, #0F0F0F);
			background: linear-gradient(135deg, #0F0F0F, #001C30, #0F0F0F);
		}

		.gradient-custom7 {
			background: #fccb90;
			background: -webkit-linear-gradient(135deg, #1F6E8C, #001C30);
			background: linear-gradient(135deg, #1F6E8C, #001C30);
		}

		.gradient-custom8 {
			background: #fccb90;
			background: -webkit-linear-gradient(135deg, #001C30, #2E8A99);
			background: linear-gradient(135deg, #001C30, #2E8A99);
		}

		.gradient-custom9 {
			background: #fccb90;
			background: -webkit-linear-gradient(135deg, #001C30, #80080E, #001C30);
			background: linear-gradient(135deg, #001C30, #80080E, #001C30);
		}

		.card {
			border: none;
			outline: solid 1px white;
		}

		.log {
			border: none;
			outline: solid 1px black;
		}

		.custom {
			height: 100vh;
		}

		.nova_square {
			font-family: 'Nova Square', sans-serif;
			font-weight: 600;
		}

		.nova_square_bold {
			font-family: 'Nova Square', sans-serif;
			font-weight: 700;
		}

		.poppins {
			font-family: 'Poppins', sans-serif;
			font-weight: 600;
		}
	</style>
</head>

<body>
	<nav class="navbar navbar-expand-lg gradient-custom6 sticky-top" id="navbar-example">
		<div class="container-fluid mx-auto px-5 d-flex">
			<div class="nav-item d-flex align-items-center ">
				<img src="<?php echo base_url('/assets/img/logo.png'); ?>" alt="Logo" width="60" height="60"
					class="d-inline-block align-text-top">
				<h5 class="fs-5 text-white px-3 my-1 nova_square" width="60" height="60">APEX ASSEMBLY</h5>
			</div>
			<div class="navbar-item" id="navbarSupportedContent">
				<ul class="navbar-nav me-auto mb-2 mb-lg-0">
					<li class="nav-item">
						<a class="nav-link text-white fs-5 px-4 nova_square" href="<?= base_url('user'); ?>">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link text-white fs-5 px-4 nova_square" href="#report">Report</a>
					</li>
					<li class="nav-item">
						<a class="nav-link text-white fs-5 px-4 nova_square" href="<?= base_url('user/cart'); ?>"><i
								class="material-symbols-outlined">shopping_cart</i></a>
					</li>
					<li class="nav-item ">
						<a class="btn log btn-light px-4 my-1 text-black nova_square d-flex align-items-center"
							href="<?= base_url('auth/logout'); ?>"><i
								class="material-symbols-outlined me-2">account_circle</i>
							<?= $nama ?>
						</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<section class="container-fluid bg-light">
		<div id="carouselExampleIndicators" class="carousel slide">
			<div class="carousel-indicators">
				<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
					aria-current="true" aria-label="Slide 1"></button>
				<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
					aria-label="Slide 2"></button>
				<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
					aria-label="Slide 3"></button>
			</div>
			<div class="carousel-inner">
				<div class="carousel-item">
					<img src="<?php echo base_url('/assets/img/sp_1.jpg'); ?>" class="d-block w-100">
				</div>
				<div class="carousel-item active">
					<img src="<?php echo base_url('/assets/img/sp_2.jpg'); ?>" class="d-block w-100">
				</div>
				<div class="carousel-item">
					<img src="<?php echo base_url('/assets/img/sp_3.jpg'); ?>" class="d-block w-100">
				</div>
			</div>
			<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
				data-bs-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Previous</span>
			</button>
			<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
				data-bs-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Next</span>
			</button>
		</div>
		<div class="container-fluid px-4 py-4 bg-light">
			<h1 class="text-center text-black nova_square_bold">APEX STORE</h1>
			<div class="row">
				<div class="col">
					<div class="col bg-white rounded-4 px-4 py-4">
						<h5>Filter</h5>
						<hr>
						<div class="text-black ">
							<h5>Price</h5>
							<hr>
							<div class="col">
								<h6 class="nova_square">Low Price</h6>
								<input type="checkbox" name="low" id="low">
								<label for="low" class="form-label">Rp 0 - Rp 1.000.000</label>
							</div>
							<div class="col">
								<h6 class="nova_square">Mid Price</h6>
								<input type="checkbox" name="mid" id="mid">
								<label for="mid" class="form-label">Rp 1.000.000 - Rp 5.000.000</label>
							</div>
							<div class="col">
								<h6 class="nova_square">High Price</h6>
								<input type="checkbox" name="high" id="high">
								<label for="high" class="form-label">Rp 5.000.000 - Rp 15.000.000</label>
							</div>
							<hr>
							<h5>Type</h5>
							<hr>
							<div class="row ">
								<div class="col-6">
									<input type="checkbox" name="type" id="type">
									<label for="type">CPU</label>
								</div>
								<div class="col-6">
									<input type="checkbox" name="type" id="type">
									<label for="type">VGA</label>
								</div>
								<div class="col-6">
									<input type="checkbox" name="type" id="type">
									<label for="type">MOBO</label>
								</div>
								<div class="col-6">
									<input type="checkbox" name="type" id="type">
									<label for="type">PSU</label>
								</div>
								<div class="col-6">
									<input type="checkbox" name="type" id="type">
									<label for="type">RAM</label>
								</div>
								<div class="col-6">
									<input type="checkbox" name="type" id="type">
									<label for="type">CPU Cooler</label>
								</div>
								<div class="col-6">
									<input type="checkbox" name="type" id="type">
									<label for="type">Cooler Fan</label>
								</div>
							</div>
							<hr>
						</div>
					</div>
				</div>
				<div class="col-lg-10">
					<div class="row d-flex justify-content-center mb-3">
						<div class="col-lg-6">
							<form class="d-flex" role="search">
								<input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
								<button class="btn bg-light text-black" type="submit">Search</button>
							</form>
						</div>
						<div class="col-lg-1 mx-0">
							<div class="dropdown">
								<button class="btn w-100 btn-light dropdown-toggle" type="button"
									data-bs-toggle="dropdown" aria-expanded="false">
									Price
								</button>
								<ul class="dropdown-menu">
									<li><a class="dropdown-item" href="#">High to Low</a></li>
									<li><a class="dropdown-item" href="#">Low to High</a></li>
								</ul>
							</div>
						</div>
						<div class="col-lg-1 mx-0">
							<div class="dropdown">
								<button class="btn btn-light dropdown-toggle w-100" type="button"
									data-bs-toggle="dropdown" aria-expanded="false">
									Type
								</button>
								<ul class="dropdown-menu">
									<li><a class="dropdown-item" href="#">MotherBoard</a></li>
									<li><a class="dropdown-item" href="#">RAM</a></li>
									<li><a class="dropdown-item" href="#">CPU</a></li>
									<li><a class="dropdown-item" href="#">VGA</a></li>
									<li><a class="dropdown-item" href="#">PSU</a></li>
									<li><a class="dropdown-item" href="#">Cooler Fan</a></li>
									<li><a class="dropdown-item" href="#">CPU Cooler</a></li>
								</ul>
							</div>
						</div>
						<div class="col-lg-1 mx-0">
							<div class="dropdown">
								<button class="btn btn-light dropdown-toggle w-100" type="button"
									data-bs-toggle="dropdown" aria-expanded="false">
									Software
								</button>
								<ul class="dropdown-menu">
									<li><a class="dropdown-item" href="#">Windows</a></li>
									<li><a class="dropdown-item" href="#">Office 365</a></li>
									<li><a class="dropdown-item" href="#">Adobe</a></li>
									<li><a class="dropdown-item" href="#">CAD</a></li>
								</ul>
							</div>
						</div>
						<div class="col-lg-1 mx-0">
							<div class="dropdown">
								<button class="btn w-100 btn-light dropdown-toggle" type="button"
									data-bs-toggle="dropdown" aria-expanded="false">
									Accesoris
								</button>
								<ul class="dropdown-menu">
									<li><a class="dropdown-item" href="#">Mouse</a></li>
									<li><a class="dropdown-item" href="#">Keyboard</a></li>
									<li><a class="dropdown-item" href="#">Monitor</a></li>
									<li><a class="dropdown-item" href="#">Case</a></li>
									<li><a class="dropdown-item" href="#">Mousepad</a></li>
									<li><a class="dropdown-item" href="#">Stand Monitor</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="row">
						<?php foreach ($komponen as $k) { ?>
							<div class="card mx-2 my-2 gradient-custom6" style="width:15rem">
								<img src="<?php echo base_url('/assets/img/sp_logo2.jpg'); ?>" alt=""
									class="card-img-top mt-2">
								<div class="card-body">
									<div class="d-flex">
										<h5 class="card-title text-white">
											<?= $k->nama ?>
										</h5>
									</div>
									<div class="text-white">Type :
										<?= $k->jenis ?>
									</div>
									<div class="text-white">Harga :</div>
									<p class="card-text text-white">
										<?= "Rp " . number_format($k->harga, 0, ',', '.'); ?>
									</p>
									<a href="#" class="btn btn-light text-black">Buy Now</a>
								</div>
							</div>
						<?php } ?>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section id="report" class="container-fluid bg-light">
		<div class="custom">
			<div class="row">
				<div class="col-md-6 px-5 d-flex justify-content-center align-items-center custom ">
					<img src="<?php echo base_url('/assets/img/report_logo.png'); ?>" alt="">
				</div>
				<div class="col-md-6 px-5 d-flex justify-content-center align-items-center custom ">
					<div class="col px-5">
						<h1 class="text-black">Complaint</h1>
						<form action="<?= base_url('user/report'); ?>" method="post">
							<div class="mb-3">
								<label for="jenis" class="form-label text-black">Jenis keluhan</label>
								<select name="jenis" id="jenis" class="form-select">
									<option value="" default>Pilih Jenis Keluhan</option>
									<option value="tambah fitur">Tambah Fitur</option>
									<option value="slow speed">Speed Rendah</option>
									<option value="server down">Server Down</option>
									<option value="attacked by malware">Diserang Malware</option>
									<option value="bug">Bug/Error</option>
								</select>
							</div>
							<div class="mb-3">
								<label for="detail" class="form-label text-black">Detail Keluhan/Report</label>
								<textarea class="form-control" name="detail" id="detail" cols="30" rows="7"
									placeholder="Input detail keluhan"></textarea>
							</div>
							<div class="">
								<button type="submit" class="btn gradient-custom8 text-white px-4">Submit</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
	<script>
		const scrollSpy = new bootstrap.ScrollSpy(document.body, {
			target: '#navbar-example'
		});
	</script>
</body>

</html>
