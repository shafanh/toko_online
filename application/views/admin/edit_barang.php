<div class="container-fluid">
    <h3><i class="fas fa-edit"></i>Edit Data Barang</h3>

    <?php foreach($barang as $brg) : ?>

        <form method="post" action="<?php echo base_url().'admin/data_barang/update'?>">
            <div class="for-group">
                <label>Nama Barang</label>
                <input type="text" nama="nama_brg" class="form-control" value="<?php echo $brg->nama_brg ?>">
            </div>

            <div class="for-group">
                <label>Keterangan</label>
                <input type="hidden" nama="id_brg" class="form-control" value="<?php echo $brg->id_brg ?>">
                <input type="text" nama="keterangan" class="form-control" value="<?php echo $brg->keterangan ?>">
            </div>

            <div class="for-group">
                <label>Kategori</label>
                <input type="text" nama="kategori" class="form-control" value="<?php echo $brg->kategori ?>">
            </div>

            <div class="for-group">
                <label>Harga</label>
                <input type="text" nama="harga" class="form-control" value="<?php echo $brg->harga ?>">
            </div>

            <div class="for-group">
                <label>Stok</label>
                <input type="text" nama="stok" class="form-control" value="<?php echo $brg->stok ?>">
            </div>

            <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
        </form>
        <?php endforeach ?>
</div>