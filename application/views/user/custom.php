<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nova Square">
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
			background: -webkit-linear-gradient(135deg, #80080E, #001C30);
			background: linear-gradient(135deg, #80080E, #001C30);
		}

		.gradient-custom8 {
			background: #fccb90;
			background: -webkit-linear-gradient(135deg, #001C30, #2E8A99);
			background: linear-gradient(135deg, #001C30, #2E8A99);
		}

		.gradient-custom9 {
			background: #fccb90;
			background: -webkit-linear-gradient(135deg, #1F6E8C, #001C30);
			background: linear-gradient(135deg, #1F6E8C, #001C30);
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
	</style>
</head>

<body>
	<nav class="navbar navbar-expand-lg bg-white sticky-top" id="navbar-example">
		<div class="container-fluid mx-auto px-5 d-flex">
			<div class="nav-item d-flex align-items-center ">
				<img src="<?php echo base_url('/assets/img/logo.png'); ?>" alt="Logo" width="60" height="60"
					class="d-inline-block align-text-top">
				<a class="fs-5 text-black px-3 my-1 nova_square text-decoration-none" width="60" height="60"
					href="<?= base_url('user'); ?>">APEX ASSEMBLY</a>
			</div>
			<div class="navbar-item" id="navbarSupportedContent">
				<ul class="navbar-nav me-auto mb-2 mb-lg-0">
					<li class="nav-item">
						<a class="nav-link text-black fs-5 px-4 nova_square" href="<?= base_url('user'); ?>">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link text-black fs-5 px-4 nova_square" href="#custom">Custom</a>
					</li>
					<li class="nav-item">
						<a class="nav-link text-black fs-5 px-4 nova_square" href="#report">Report</a>
					</li>
					<li class="nav-item">
						<a class="nav-link text-black fs-5 px-4 nova_square" href="<?= base_url('user/cart'); ?>"><i
								class="material-symbols-outlined">shopping_cart</i></a>
					</li>
					<li class="nav-item ">

						<a class="btn log btn-dark px-4 my-1 text-white nova_square d-flex align-items-center"
							href="<?= base_url('auth/logout'); ?>"><i
								class="material-symbols-outlined me-2">account_circle</i>
							<?= $nama ?>
						</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<section id="home" class="container-fluid gradient-custom5 pb-5">
		<div id="carouselExampleIndicators" class="carousel slide">
			<div class="carousel-indicators">
				<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
					aria-current="true" aria-label="Slide 1"></button>
				<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
					aria-label="Slide 2"></button>
			</div>
			<div class="carousel-inner">
				<div class="carousel-item active">
					<img src="<?php echo base_url('/assets/img/banner_img1.jpg'); ?>" class="d-block w-100">
				</div>
				<div class="carousel-item">
					<img src="<?php echo base_url('/assets/img/banner_img2.jpg'); ?>" class="d-block w-100">
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
		<div class="container-md my-5">
			<div class="col pb-3 nova_square">
				<h4 class="text-center text-white fw-bold ">Pilihan Type Custom</h4>
				<p class="text-center text-white">
					Optimalkan pengalaman pengguna di website kami dengan berbagai pilihan khusus untuk setiap
					kebutuhan. Temukan solusi yang sempurna untuk pekerjaan produktif, hiburan gaming yang tak
					tertandingi, keamanan dan kenyamanan keluarga, kepraktisan untuk pendidikan, hingga performa tinggi
					untuk kebutuhan manufaktur. Dengan desain responsif, konten berkualitas, dan navigasi yang intuitif,
					kami memastikan website kami menjadi destinasi utama bagi semua keperluan digital Anda.
				</p>
			</div>
			<div class="row d-flex justify-content-center">
				<div class="card gradient-custom7 text-white mx-3 nova_square" style="width:10rem; height:10rem">
					<div class="card-body d-flex justify-content-center align-items-center">
						<div class="row">
							<i class="material-symbols-outlined fs-1 text-center">work</i>
							<h5 class="text-center">Work</h5>
						</div>
					</div>
				</div>
				<div class="card gradient-custom7 mx-3 text-white nova_square" style="width:10rem; height:10rem">
					<div class="card-body d-flex justify-content-center align-items-center">
						<div class="row">
							<i class="material-symbols-outlined fs-1 text-center">sports_esports</i>
							<h5 class="text-center">Gaming</h5>
						</div>
					</div>
				</div>
				<div class="card gradient-custom7 mx-3 text-white nova_square" style="width:10rem; height:10rem">
					<div class="card-body d-flex justify-content-center align-items-center">
						<div class="row">
							<i class="material-symbols-outlined fs-1 text-center">group</i>
							<h5 class="text-center">Family/Group</h5>
						</div>
					</div>
				</div>
				<div class="card gradient-custom7 mx-3 text-white nova_square" style="width:10rem; height:10rem">
					<div class="card-body d-flex justify-content-center align-items-center">
						<div class="row">
							<i class="material-symbols-outlined fs-1 text-center">school</i>
							<h5 class="text-center">School</h5>
						</div>
					</div>
				</div>
				<div class="card gradient-custom7 mx-3 text-white nova_square" style="width:10rem; height:10rem">
					<div class="card-body d-flex justify-content-center align-items-center">
						<div class="row">
							<i class="material-symbols-outlined fs-1 text-center">manufacturing</i>
							<h5 class="text-center">Manufacturing</h5>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section id="custom" class="container-fluid gradient-custom6 nova_square">
		<div class="container-fluid py-5 d-flex justify-content-center">
			<div class="col-md-8">
				<h4 class="text-center text-white">Custom</h4>
				<p class="text-center text-white">
					Temukan kemudahan dalam menentukan komponen PC Anda bahkan jika Anda masih pemula, berkat fungsi
					custom PC yang intuitif dan ramah pengguna di situs kami. Dengan panduan langkah demi langkah dan
					rekomendasi yang jelas, Anda dapat dengan mudah memilih prosesor, kartu grafis, RAM, dan penyimpanan
					yang sesuai dengan kebutuhan Anda. Kami hadir untuk memastikan bahwa proses membangun PC impian Anda
					tidak lagi membingungkan, melainkan menjadi pengalaman yang menyenangkan dan bermanfaat.</p>
			</div>
		</div>
		<div class="container-fluid py-5 d-flex justify-content-center">
			<form action="<?= base_url('user/pesan'); ?>" method="post"
				class="row container-sm d-flex justify-content-center">
				<div class="col-xl-8 mb-3">
					<label for="cpu" class="form-label text-white">Brand CPU</label>
					<select name="cpu" id="cpu" class="form-select" onchange="updateSocketOptions()">
						<option value="" default>Pilih brand CPU</option>
						<option value="Intel">Intel</option>
						<option value="AMD">AMD</option>
					</select>
				</div>
				<div class="col-xl-8 mb-3">
					<label for="socket" class="form-label text-white">Jenis Socket CPU</label>
					<select name="socket" id="socket" class="form-select">
						<option value="" default>Pilih jenis socket</option>
					</select>
				</div>
				<div class="col-xl-8 mb-3">
					<label for="cpu_chip" class="form-label text-white">Jenis CPU</label>
					<select name="cpu_chip" id="cpu_chip" class="form-select">
						<option value="" default>Pilih jenis CPU</option>
						<?php foreach ($cpu as $c) { ?>
							<option value="<?= $c->nama ?>">
								<?= $c->nama ?>
							</option>
						<?php } ?>
					</select>
				</div>
				<div class="col-xl-8 mb-3">
					<label for="mobo" class="form-label text-white">Jenis Motherboard</label>
					<select name="mobo" id="mobo" class="form-select">
						<option value="" default>Pilih jenis Motherboard</option>
						<?php foreach ($mobo as $c) { ?>
							<option value="<?= $c->nama ?>">
								<?= $c->nama ?>
							</option>
						<?php } ?>
					</select>
				</div>
				<div class="col-xl-8 mb-3">
					<label for="ram1" class="form-label text-white">Jenis RAM 1</label>
					<select name="ram1" id="ram1" class="form-select">
						<option value="" default>Pilih jenis RAM</option>
						<?php foreach ($ram as $c) { ?>
							<option value="<?= $c->nama ?>">
								<?= $c->nama ?>
							</option>
						<?php } ?>
					</select>
				</div>
				<div class="col-xl-8 mb-3">
					<label for="ram2" class="form-label text-white">Jenis RAM 2</label>
					<select name="ram2" id="ram2" class="form-select">
						<option value="" default>Pilih jenis RAM</option>
						<?php foreach ($ram as $c) { ?>
							<option value="<?= $c->nama ?>">
								<?= $c->nama ?>
							</option>
						<?php } ?>
					</select>
				</div>
				<div class="col-xl-8 mb-3">
					<label for="vga" class="form-label text-white">Jenis VGA</label>
					<select name="vga" id="vga" class="form-select">
						<option value="" default>Pilih jenis VGA</option>
						<?php foreach ($vga as $c) { ?>
							<option value="<?= $c->nama ?>">
								<?= $c->nama ?>
							</option>
						<?php } ?>
					</select>
				</div>
				<div class="col-xl-8 mb-3">
					<label for="psu" class="form-label text-white">Jenis Power Supply</label>
					<select name="psu" id="psu" class="form-select">
						<option value="" default>Pilih jenis Power Supply</option>
						<?php foreach ($psu as $c) { ?>
							<option value="<?= $c->nama ?>">
								<?= $c->nama ?>
							</option>
						<?php } ?>
					</select>
				</div>
				<div class="col-xl-8 mb-3">
					<label for="cooler" class="form-label text-white">Jenis Cooler CPU</label>
					<select name="cooler" id="coler" class="form-select">
						<option value="" default>Pilih jenis Cooler CPU</option>
						<?php foreach ($col_cpu as $c) { ?>
							<option value="<?= $c->nama ?>">
								<?= $c->nama ?>
							</option>
						<?php } ?>
					</select>
				</div>
				<div class="col-xl-8 mb-3">
					<label for="cooler_fan" class="form-label text-white">Jenis Cooler Fan</label>
					<select name="cooler_fan" id="coler_fan" class="form-select">
						<option value="" default>Pilih jenis Cooler Fan</option>
						<?php foreach ($fan as $c) { ?>
							<option value="<?= $c->nama ?>">
								<?= $c->nama ?>
							</option>
						<?php } ?>
					</select>
				</div>
				<div class="col-xl-8 mb-3">
					<label for="case" class="form-label text-white">Jenis Case</label>
					<select name="case" id="case" class="form-select">
						<option value="" default>Pilih jenis Case</option>
						<?php foreach ($case as $c) { ?>
							<option value="<?= $c->nama ?>">
								<?= $c->nama ?>
							</option>
						<?php } ?>
					</select>
				</div>
				<div class="col-xl-8 mb-3 d-flex flex-row-reverse">
					<button type="submit" class="btn btn-primary px-4">Pesan</button>
				</div>
			</form>
		</div>
	</section>
	<section id="report" class="container-fluid gradient-custom6">
		<div class="custom">
			<div class="row">
				<div class="col-md-6 px-5 d-flex justify-content-center align-items-center custom ">
					<img src="<?php echo base_url('/assets/img/report_logo.png'); ?>" alt="">
				</div>
				<div class="col-md-6 px-5 d-flex justify-content-center align-items-center custom ">
					<div class="col px-5">
						<h1 class="text-white">Complaint</h1>
						<form action="<?= base_url('user/report'); ?>" method="post">
							<div class="mb-3">
								<label for="jenis" class="form-label text-white">Jenis keluhan</label>
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
								<label for="detail" class="form-label text-white">Detail Keluhan/Report</label>
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
		function updateSocketOptions() {
			var cpuSelect = document.getElementById("cpu");
			var socketSelect = document.getElementById("socket");
			socketSelect.innerHTML = "<option value='' default>Pilih jenis socket</option>";
			if (cpuSelect.value === "Intel") {
				var intelSockets = ["423", "478", "LGA775", "LGA1156", "LGA1155", "LGA1200", "LGA1700"];
				intelSockets.forEach(function (socket) {
					var option = document.createElement("option");
					option.value = socket;
					option.text = socket;
					socketSelect.add(option);
				});
			} else if (cpuSelect.value === "AMD") {
				var amdSockets = ["462", "754", "939", "AM2", "AM3", "AM4"];
				amdSockets.forEach(function (socket) {
					var option = document.createElement("option");
					option.value = socket;
					option.text = socket;
					socketSelect.add(option);
				});
			}
		}
	</script>
</body>

</html>
