<main>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card mt-5">
                    <div class="card-header">
                        <div class="i fa fa-plus"></div> Menambahkan Data Baru Admin 
                    </div>
                    <div class="card-body">
                        <form action="<?php echo base_url('admin/add-new-data-admin') ?>" method="post">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" required="" name="email_admin" value="<?php echo set_value('email_admin') ?>" id="email_admin" placeholder="Masukkan Email">
                                <?php echo form_error('email_admin', '<small class="text-danger">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="password">Kata Sandi</label>
                                <input type="password" class="form-control" required="" name="password" id="password" placeholder="Masukkan Password">
                                <?php echo form_error('password', '<small class="text-danger">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="name">Nama</label>
                                <input type="text" class="form-control" required="" name="nama_admin" value="<?php echo set_value('nama_admin') ?>" id="nama_admin" placeholder="Masukkan nama">
                                <?php echo form_error('nama_admin', '<small class="text-danger">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="nip">Jenis Kelamin</label>
                                <select name="jenis_kelamin" id="" required="" class="form-control">
                                    <option value="">-=Pilih=-</option>
                                    <option value="L">L</option>
                                    <option value="P">P</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="telp">No. Hp</label>
                                <input type="number" required="" placeholder="Masukan Nomor Telepon" value="<?php echo set_value('telp') ?>" name="telp" class="form-control" id="telp">
                            </div>
                            <div class="form-group">
                                <label for="alamat">Alamat</label>
                                <textarea name="alamat" id="" name="alamat" class="form-control" required cols="10" rows="5"></textarea>
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