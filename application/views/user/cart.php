<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
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

		.pointer {
			cursor: pointer;
		}

		.bold {
			font-weight: 700;
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
						<a class="nav-link text-black fs-5 px-4 nova_square" href="<?= base_url('user'); ?>">Home</a>
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
	<div class="container-fluid gradient-custom6 custom">
		<div class="col d-flex justify-content-center text-white px-5 py-5">
			<table class="table table-hover table-dark table-borderless table-striped">
				<thead class="table-light">
					<tr>
						<th>No</th>
						<th>No Pemesanan</th>
						<th>Method</th>
						<th>Status</th>
						<th></th>
					</tr>
				</thead>
				<tbody>
					<?php $no = 0;
					foreach ($cart as $c) { ?>
						<tr>
							<th>
								<?= ++$no ?>
							</th>
							<th>
								<?= $c->no_pesanan ?>
							</th>
							<th>
								<?= $c->method_payment ?>
							</th>
							<th>
								<?= $c->status ?>
							</th>
							<th>
								<?php echo anchor('user/pesanan_cart/' . $c->no_pesanan . '/' . $c->id_cart, '<button class="btn btn-custom gradient-custom5 text-white nova_square">Detail</button>'); ?>
								<button class="btn btn-custom gradient-custom6 text-white nova_square"
									data-bs-toggle="modal" data-bs-target="#deleteModal">Selesai</button>
							</th>
						</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
	</div>
	<div class="modal fade" id="deleteModal" tabindex="-1" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<h5 class="text-black text-center nova_square">Apakah transaksimu telah selesai ?</h5>
				</div>
				<div class="modal-footer">
					<form action="<?= base_url('user/delete_cart'); ?>" method="post">
						<input type="hidden" name="id" id="id" value="<?= $cart[0]->no_pesanan ?>">
						<button type="submit" class="btn btn-primary text-white nova_square">Ya</button>
						<button type="button" class="btn btn-danger text-white nova_square" data-bs-dismiss="modal"
							aria-label="Close">Tidak</button>
					</form>
				</div>
			</div>
		</div>
	</div>
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
