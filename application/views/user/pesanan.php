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

		.btn-custom {
			border: none;
			outline: solid 1px white;
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
						<a class="nav-link text-black fs-5 px-4 nova_square"
							href="<?= base_url('custom'); ?>">Custom</a>
					</li>
					<li class="nav-item">
						<a class="nav-link text-black fs-5 px-4 nova_square" href="#report">Report</a>
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
	<div class="container-fluid gradient-custom5 custom">
		<div class="col d-flex justify-content-center text-white px-5 py-5 ">
			<div class="col-md-9 me-3">
				<div class="col gradient-custom6 px-5 py-5 rounded-4">
					<h5>List Komponen</h5>
					<table class="table table-dark table-hover table-striped">
						<thead class="table-light">
							<tr>
								<th scope="col" class="px-3">No</th>
								<th scope="col">Nama Komponen</th>
								<th scope="col">Harga</th>
								<th scope='col'></th>
							</tr>
						</thead>
						<tbody>
							<?php
							$no = 0;
							foreach ($pesanan as $p) {
								?>
								<tr>
									<td>
										<?= ++$no; ?>
									</td>
									<td>
										<?= $p->nama_komponen; ?>
									</td>
									<td>
										<?= "Rp " . number_format($p->harga, 0, ',', '.'); ?>
									</td>
									<td class="col-2">
										<?php echo anchor('user/edit/' . $p->id_pesanan, '<button class="btn btn-custom gradient-custom6 text-white px-3">Edit</button>'); ?>
										<button class="btn btn-custom gradient-custom6 text-white" data-bs-toggle="modal"
											data-bs-target="#deleteModal">Hapus</button>
									</td>
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
							<h5 class="text-black text-center nova_square">Apakah kamu yakin menghapus items ini ?</h5>
						</div>
						<div class="modal-footer">
							<form action="<?= base_url('user/delete'); ?>" method="post">
								<input type="hidden" name="id" id="id" value="<?= $pesanan[0]->id_pesanan ?>">
								<button type="submit" class="btn btn-primary text-white nova_square">Ya</button>
								<button type="button" class="btn btn-danger text-white nova_square"
									data-bs-dismiss="modal" aria-label="Close">Tidak</button>
							</form>
						</div>
					</div>
				</div>
			</div>
			<div class="col">
				<div class="col gradient-custom6 px-5 py-5 rounded-4">
					<table class="table table-dark table-hover table-striped">
						<thead class="table-light">
							<tr>
								<th></th>
								<th>List Harga</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($pesanan as $p) { ?>
								<tr>
									<td></td>
									<td>
										<?= "Rp " . number_format($p->harga, 0, ',', '.'); ?>
									</td>
								</tr>
							<?php } ?>
						</tbody>
						<tfoot class="table-group-divider">
							<tr>
								<td class="col-md-5">Total Harga:</td>
								<td>
									<?php
									$total_harga = 0;
									foreach ($pesanan as $p) {
										$total_harga += $p->harga;
									}
									echo "Rp " . number_format($total_harga, 0, ',', '.');
									?>
								</td>
							</tr>
						</tfoot>
					</table>
					<div class="row">
						<button class="btn btn-custom gradient-custom6 text-white mb-3" data-bs-toggle="modal"
							data-bs-target="#verifyModal">Pesan</button>
						<button class="btn btn-custom gradient-custom8 text-white" data-bs-toggle="modal"
							data-bs-target="#saveModal">Save</button>
					</div>
				</div>
			</div>
			<div class="modal fade" id="verifyModal" tabindex="-1" aria-hidden="true">
				<div class="modal-dialog modal-dialog-centered">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
						</div>
						<div class="modal-body">
							<form action="<?= base_url('user/confirm'); ?>" method="post">
								<label for="method" class="form-label text-black">Pilih Metode Pembayaran</label>
								<select name="method" id="method" class="form-select my-3" required>
									<option value="">Metode Pembayaran</option>
									<option value="gopay">Gopay</option>
									<option value="ovo">Ovo</option>
									<option value="dana">Dana</option>
									<option value="debit">Debit</option>
								</select>
								<input type="hidden" name="id" id="id" value="<?= $pesanan[0]->no_pesan ?>">
								<div class="modal-footer">
									<button type="submit" class="btn btn-primary text-white nova_square">Ya</button>
									<button type="button" class="btn btn-danger text-white nova_square"
										data-bs-dismiss="modal" aria-label="Close">Tidak</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
			<div class="modal fade" id="saveModal" tabindex="-1" aria-hidden="true">
				<div class="modal-dialog modal-dialog-centered">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
						</div>
						<div class="modal-body">
						<h5 class="text-center text-black nova_square">Apa kamu ingin menyimpan konfigurasi komponen ini ?</h5>
							<form action="<?= base_url('user/save'); ?>" method="post">
								<input type="hidden" name="id" id="id" value="<?= $pesanan[0]->no_pesan ?>">
								<div class="modal-footer">
									<button type="submit" class="btn btn-primary text-white nova_square">Ya</button>
									<button type="button" class="btn btn-danger text-white nova_square"
										data-bs-dismiss="modal" aria-label="Close">Tidak</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
