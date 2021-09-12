<main>
	<div class="container-fluid">
		<h1 class="mt-4">List Admin</h1>
		<div class="card mb-4">

			<?= $this->session->flashdata('pesan') ?>

			<div class="card-header row">
				<div class="col-6">
					<i class="fas fa-plus mr-1"></i>
					<a href="<?php echo base_url('admin/add-new-data-admin') ?>">Menambahkan Admin Baru</a>
				</div>
			</div>
			<div class="card-body">
				<div class="table-responsive">
					<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
						<thead>
							<tr>
								<th>Nama</th>
								<th>Email</th>
								<th>Gender</th>
								<th>Alamat</th>
								<th>No. Hp</th>
								<th>Aksi</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($dt_admin->result() as $dt) : ?>

								<tr>
									<td><?php echo $dt->nama_admin ?></td>
									<td><?php echo $dt->email_admin ?></td>
									<td><?php echo $dt->jenis_kelamin ?></td>
									<td><?php echo $dt->alamat ?></td>
									<td><?php echo $dt->no_telp ?></td>
									<td>
										<a href="<?php echo base_url('admin/edit/' . $dt->id_admin) ?>" class="btn  btn-info btn-sm"><i class="fa fa-pencil-alt"></i></a>
										<a href="<?php echo base_url('admin/delete/' . $dt->id_admin) ?>" class="btn  btn-danger btn-sm"><i class="fa fa-trash-alt"></i></a>
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