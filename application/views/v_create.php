<div class="card">
    <div class="card-header">Tambah Data</div>
        <div class="card-body">
            <!--form validasi -->
            <?php
        if(validation_errors() !=false)
        {
                ?>
                <div class="aleat aleart-danger" role="alert">
                    <?php echo validation_errors(); ?>
                </div>
            <?php } ?>

            <!--form input data -->
            <form method="post" action="<?php echo base_url(); ?>web/save">
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama">
                </div>
        
                <div class="form-group">
                    <label for="jenis_kelamin">Jenis Kelamin</label>
                    <select name="jenis_kelamin" id="jenis_kelamin" class="form-control">
                        <option value="pria">Pria</option>
                        <option value="wanita">Wanita</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <textarea class="form-control" name="alamat" id="alamat"></textarea>
                </div>

                <div class="form-group">
                    <label for="pekerjaan">Pekerjaan</label>
                    <input type="text" class="form-control" id="pekerjaan" name="pekerjaan">
                </div>

                <button type="submit" class="btn btn -primary">Simpan</button>
                <a href="<?php echo base_url('web/bio');?>?>" class="btn-danger">Batal</a>
            </form>
        </div>
    </div>
</main>