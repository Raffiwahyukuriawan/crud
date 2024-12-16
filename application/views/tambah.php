<center>
    <h1>Hello World</h1>
</center>

<form action="<?= base_url('buku/simpan_data') ?>" method="post">
    <div class="mb-3">
        <label for="jdl_buku">Judul buku</label>
        <input type="text" name="judul_buku" id="jdl_buku" class="form-control">
    </div>
    <div class="mb-3">
        <label for="prg_buku">Pengarang buku</label>
        <input type="text" name="pengarang_buku" id="prg_buku" class="form-control">
    </div>
    <div class="mb-3">
        <label for="desc_buku">Deskripsi</label>
        <textarea name="deskripsi_buku" id="desc_buku" class="form-control"></textarea>
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-success">Simpan Buku</button>
    </div>
</form>