<main role="main" class="container">
    <div class="card">
        <div class="card-header"><h4><?php echo $judul?></h4></div>
        <div class="card-body" <a href="?php echo base_url('web/create');?>" class="btn btn-success">Tambah Data</a></div>
        <table class="table table-bordered">
        <tr>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Alamat</th>
            <th>Pekerjaan</th>
        </tr>
        <?php foreach ($bio as $b ) : ?>
        <tr>
            <td><?php echo $b->nama?></td>
            <td><?php echo $b->jk?></td>
            <td><?php echo $b->alamat?></td>
            <td><?php echo $b->pekerjaan?></td>
            <td>
            <a href="<?php echo base_url(); ?>web/edit/" class="btn btn-warning">Ubah</a>
            <a href="<?php echo base_url(); ?>web/delete/" class="btn btn-warning">Hapus</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>


        
    </div>
</main>
<h1?><?php echo $judul ?></h1>
<table border="1" width="100%">
    <tr>
        <th>Nama</th>
        <th>Jenis Kelamin</th>
        <th>Alamat</th>
        <th>Pekerjaan</th>
    </tr>
    <?php foreach ($bio as $b ) : ?>
        <tr>
            <td><?php echo $b->nama?></td>
            <td><?php echo $b->jk?></td>
            <td><?php echo $b->alamat?></td>
            <td><?php echo $b->pekerjaan?></td>
        </tr>
    <?php endforeach; ?>
</table>