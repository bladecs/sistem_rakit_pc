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
			background: -webkit-linear-gradient(135deg, #1F6E8C, #001C30);
			background: linear-gradient(135deg, #1F6E8C, #001C30);
		}

		.gradient-custom8 {
			background: #fccb90;
			background: -webkit-linear-gradient(135deg, #001C30, #2E8A99);
			background: linear-gradient(135deg, #001C30, #2E8A99);
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
				<h5 class="fs-5 text-black px-3 my-1 nova_square" width="60" height="60">APEX ASSEMBLY</h5>
			</div>
			<div class="navbar-item" id="navbarSupportedContent">
				<ul class="navbar-nav me-auto mb-2 mb-lg-0">
					<li class="nav-item">
						<a class="nav-link text-black fs-5 px-4 nova_square" href="#home">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link text-black fs-5 px-4 nova_square" href="#feature">Feature</a>
					</li>
					<li class="nav-item">
						<a class="nav-link text-black fs-5 px-4 nova_square" href="#skill">Skill</a>
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
	<section id="home" class="gradient-custom">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-6 px-5 d-flex justify-content-center align-items-center custom ">
					<div class="col px-5">
						<h1 class="text-white my-2 px-5">Welcome
							<?= $nama ?>
						</h1>
						<p class="text-white px-5 fs-5">
							Selamat datang di Apex Assembly, tempat di mana kebutuhan komputasi Anda dipenuhi dengan
							presisi
							dan kreativitas! Kami adalah spesialis dalam perakitan komputer dan layanan kustom, siap
							membawa
							pengalaman unik dan performa optimal untuk setiap kebutuhan Anda. Dengan tim ahli kami, Anda
							dapat yakin bahwa setiap detail dirancang dengan teliti, menghasilkan solusi komputasi yang
							tidak hanya sesuai dengan kebutuhan teknis Anda, tetapi juga mencerminkan gaya dan
							preferensi
							pribadi Anda. Jelajahi dunia komputasi yang dipersonalisasi hanya di Apex Assembly!</p>
					</div>
				</div>
				<div class="col-md-6 px-5 d-flex justify-content-center align-items-center custom ">
					<img src="<?php echo base_url('/assets/img/landing_page_logo.png'); ?>" alt="">
				</div>
			</div>
		</div>
	</section>
	<section id="feature" class="container-fluid d-flex justify-content-center gradient-custom5">
		<div class="col-md-8 px-5 d-flex justify-content-center align-items-center custom">
			<div class="col py-5">
				<h2 class="text-center text-white">Feature</h2>
				<p class="text-center mb-5 px-md-5 text-white">Temukan pengalaman perakitan PC yang tak tertandingi
					dengan fitur-fitur canggih kami! Nikmati kemudahan Auto Rekomen yang secara otomatis menyarankan
					kombinasi komponen terbaik untuk kebutuhan PCmu. Tak hanya itu, hadirkan sentuhan personal dengan
					fitur Custom, yang memungkinkanmu merancang dan merakit PC impian sesuai preferensimu. Jelajahi
					pilihan spare part terbaik untuk upgrade dan pemeliharaan melalui platform kami. Dengan semua fitur
					ini, website perakitan PC kami memberikan pengalaman berbelanja yang penuh inovasi, memastikan
					setiap pelanggan dapat memiliki PC yang sesuai dengan keinginan dan kebutuhan mereka.</p>
				<div class="row d-flex justify-content-center">
					<div class="card mx-3 py-3 gradient-custom2" style="width : 18rem">
						<img src="<?php echo base_url('/assets/img/card_img1.jpg'); ?>" class="card-img-top">
						<div class="card-body">
							<div class="d-flex">
								<i class="material-symbols-outlined text-white me-2">smart_toy</i>
								<h5 class="card-title text-white">Auto Rekomend</h5>
							</div>
							<p class="card-text text-white">Fitur ini memungkinkan pengguna untuk mendapatkan saran
								otomatis tentang kombinasi komponen terbaik untuk PC mereka.</p>
							<a href="#" class="btn btn-light text-black">Coming Soon</a>
						</div>
					</div>
					<div class="card mx-3 py-3 gradient-custom3" style="width : 18rem">
						<img src="<?php echo base_url('/assets/img/card_img1.jpg'); ?>" class="card-img-top">
						<div class="card-body">
							<div class="d-flex">
								<i class="material-symbols-outlined text-white me-2">instant_mix</i>
								<h5 class="card-title text-white">Custom</h5>
							</div>
							<p class="card-text text-white">Fitur Custom memungkinkan pengguna untuk merancang dan
								merakit PC sesuai dengan keinginan dan preferensi mereka sendiri. </p>
							<a href="<?= base_url('user/custom'); ?>" class="btn btn-light text-black">Go Check >>></a>
						</div>
					</div>
					<div class="card mx-3 py-3 gradient-custom4" style="width : 18rem">
						<img src="<?php echo base_url('/assets/img/card_img1.jpg'); ?>" class="card-img-top">
						<div class="card-body">
							<div class="d-flex">
								<i class="material-symbols-outlined text-white me-2">Settings</i>
								<h5 class="card-title text-white">Spare Part</h5>
							</div>
							<p class="card-text text-white"> Fitur ini memungkinkan pengguna untuk menjelajahi dan
								memilih spare part terbaik untuk upgrade atau perawatan PC mereka.</p>
							<a href="<?= base_url('user/spare_part'); ?>" class="btn btn-light text-black">Go Check
								>>></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section id="skill" class="container-fluid d-flex justify-content-center gradient-custom5">
		<div class="col-md-8 px-5 d-flex justify-content-center align-items-center custom">
			<div class="col py-5">
				<h2 class="text-center text-white">Skill</h2>
				<p class="text-center mb-5 px-md-5 text-white">Dengan keahlian yang teruji dan terjamin dalam jasa
					perakitan PC kami, tim profesional kami telah memiliki pengalaman yang mendalam dalam memilih dan
					menyusun setiap komponen dengan presisi. Kami berkomitmen untuk memberikan solusi perakitan PC yang
					tidak hanya optimal dalam kinerja, tetapi juga memenuhi kebutuhan dan harapan pelanggan. Dengan
					menggunakan pengetahuan teknis terkini, kami menciptakan sistem yang handal, efisien, dan sesuai
					dengan standar tertinggi. Kepercayaan Anda kepada kami adalah jaminan bahwa setiap PC yang kami
					rakit tidak hanya sebuah perangkat, tetapi juga investasi dalam pengalaman komputasi yang tak
					tertandingi.</p>
				<div class="row d-flex justify-content-center">
					<div class="card mx-3 py-3 gradient-custom7" style="width : 18rem">
						<img src="<?php echo base_url('/assets/img/fast_respon.jpg'); ?>" class="card-img-top">
						<div class="card-body">
							<div class="d-flex">
								<i class="material-symbols-outlined text-white me-2">recent_patient</i>
								<h5 class="card-title text-white">Fast Respon</h5>
							</div>
							<p class="card-text text-white">Kami merespon dengan cepat setiap permintaan pelanggan,
								memberikan layanan tanpa hambatan dengan fokus pada kepuasan pelanggan.</p>
						</div>
					</div>
					<div class="card mx-3 py-3 gradient-custom8" style="width : 18rem">
						<img src="<?php echo base_url('/assets/img/teliti_cekatan.jpg'); ?>" class="card-img-top">
						<div class="card-body">
							<div class="d-flex">
								<i class="material-symbols-outlined text-white me-2">frame_inspect</i>
								<h5 class="card-title text-white">Teliti dan Cekatan</h5>
							</div>
							<p class="card-text text-white">Dalam setiap langkah layanan, kami menjaga tingkat
								ketelitian dan kecepatan untuk memastikan kualitas tinggi dan efisiensi yang konsisten.
							</p>
						</div>
					</div>
					<div class="card mx-3 py-3 gradient-custom7" style="width : 18rem">
						<img src="<?php echo base_url('/assets/img/tenaga_ahli.jpg'); ?>" class="card-img-top">
						<div class="card-body">
							<div class="d-flex">
								<i class="material-symbols-outlined text-white me-2">person_check</i>
								<h5 class="card-title text-white">Tenaga Ahli Terampil</h5>
							</div>
							<p class="card-text text-white"> Tim ahli kami, berpengalaman dan terlatih dengan baik dalam
								perakitan PC, menjamin setiap pekerjaan dilakukan dengan profesionalisme tinggi.</p>
						</div>
					</div>
				</div>
			</div>
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
	</script>
</body>

</html>
