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
		}
	</style>
</head>

<body>
	<div class="container-fluid gradient-custom6">
		<div class="col custom d-flex justify-content-center align-items-center px-lg-1 py-lg-1 ">
			<div class="col-md-3 gradient-custom6 px-5 py-5 rounded-4">
				<form action="<?=base_url('user/update');?>" method="post">
					<div class="col d-flex justify-content-between">
						<h5 class="nova_square text-white">Form Edit Items</h5>
						<div class="bg-light d-flex justify-content-center align-items-center px-1 py-1 rounded-3">
							<a href="<?= base_url('user/pesanan'); ?>" class="btn-close" aria-label="Close"></a>
						</div>
					</div>
					<input type="hidden" name="id" class="form-control" value="<?= $komponen->id_pesanan ?>">
					<div class="mb-3">
						<label for="komponen" class="form-label text-white">Komponen</label>
						<input type="text" name="komponen" class="form-control" value="<?= $komponen->nama_komponen ?>"
							disabled>
					</div>
					<div class="mb-3">
						<label for="custom_komp" class="form-label text-white">Pilih Komponen</label>
						<select name="custom_komp" id="custom_komp" class="form-select">
							<?php foreach ($komp_all as $k) { ?>
								<option value="<?= $k->nama ?>">
									<?= $k->nama ?>
								</option>
							<?php } ?>
						</select>
					</div>
					<div class="mb-3 d-flex flex-row-reverse pe-3">
						<div class="row">
							<button type="submit" class="btn btn-primary nova_square gradient-custom7 btn-custom">Sumbit</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</body>

</html>
