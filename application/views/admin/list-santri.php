<main>
	<div class="container-fluid">
		<h1 class="mt-4">List Santri</h1>

		<?= $this->session->flashdata('pesan') ?>

		<div class="card mb-4">
			<div class="card-header row">
				<div class="col-6">
					<i class="fas fa-plus mr-1"></i>
					<a href="<?php echo base_url('admin/add-new-data-list-santri') ?>">Tambah Santri</a>
				</div>
				<div class="col-6 text-right pr-3">
					<i class="fas fa-print mr-1"></i>
					<a target="_blank" href="<?php echo base_url('cetak-list-santri') ?>">Cetak</a>
				</div>
			</div>
			<div class="card-body">
				<div class="table-responsive">
					<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
						<thead>
							<tr>
								<th>Foto</th>
								<th>Nama</th>
								<th>NISN</th>
								<th>Kelas</th>
								<th>Gender</th>
								<th>Ayah</th>
								<th>Ibu</th>
								<th>Alamat</th>
								<th>Phone</th>
								<th>Tempat Lahir</th>
								<th>Tanggal Lahir</th>
								<th>Aksi</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($list_santri->result() as $dt) : ?>

								<tr>
									<td><img width="80px" heigth="auto" src="<?php echo base_url() ?>upload/santri/<?php echo $dt->foto ?>"></td>

									<td><?php echo $dt->nama_santri ?></td>

									<td><?php echo $dt->NISN ?></td>

									<td><?php echo $dt->kelas ?></td>

									<td><?php echo $dt->jk ?></td>

									<td><?php echo $dt->wali_santri_ayah ?></td>

									<td><?php echo $dt->walisantri_ibu ?></td>

									<td><?php echo $dt->alamat ?></td>

									<td><?php echo $dt->no_hp ?></td>

									<td><?php echo $dt->tmp_lahir ?></td>

									<td><?php echo $dt->tgl_lahir ?></td>

									<td>
										<a href="<?php echo base_url('list-santri/edit/') . $dt->id_santri ?>" class="btn  btn-info btn-sm"><i class="fa fa-pencil-alt"></i></a>

										<a href="<?php echo base_url('list-santri/delete/') . $dt->id_santri ?>" class="btn  btn-danger btn-sm"><i class="fa fa-trash-alt"></i></a>
									</td>
								</tr>
							<?php endforeach ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</main>