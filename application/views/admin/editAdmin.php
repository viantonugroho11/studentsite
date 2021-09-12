<main>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card mt-5">
                    <div class="card-header">
                        <divi class="fas fa-user-edit"></div> <?= $title ?>
                    </div>
                    <div class="card-body">
                        <form action="<?php echo base_url('admin/edit/' . $dt['id_admin']) ?>" method="post">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" value="<?php echo $dt['email_admin'] ?>" class="form-control" required="" name="email_admin" id="email_admin" placeholder="Masukkan Email">
                                <?php echo form_error('email_admin', '<small class="text-danger">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" required="" name="password" id="password" placeholder="Masukkan Password">
                                <?php echo form_error('password', '<small class="text-danger">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" value="<?php echo $dt['nama_admin'] ?>" class="form-control" required="" name="nama_admin" id="nama_admin" placeholder="Masukkan nama">
                                <?php echo form_error('nama_admin', '<small class="text-danger">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="nip">Jenis Kelamin</label>
                                <select name="jenis_kelamin" id="" required="" class="form-control">
                                    <option value="<?php echo $dt['jenis_kelamin'] ?>"><?php echo $dt['jenis_kelamin'] ?></option>
                                    <option value="L">Laki-Laki</option>
                                    <option value="P">Perempuan</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="telp">Phone</label>
                                <input type="number" required="" value="<?php echo $dt['no_telp'] ?>" placeholder="Masukan Nomor Telepon" name="telp" class="form-control" id="telp">
                            </div>
                            <div class="form-group">
                                <label for="alamat">Address</label>
                                <textarea name="alamat" id="" name="alamat" class="form-control" required cols="10" rows="5"><?php echo $dt['alamat'] ?></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <button type="reset" class="btn btn-danger">Reset</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>