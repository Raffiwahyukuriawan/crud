<center>
    <h1>Hello World edit</h1>
</center>

<form action="<?= base_url('buku/update') ?>" method="post">
    <input type="hidden" name="id" value="<?= $buku->id; ?>">

    <div class="mb-3">
        <label for="jdl_buku">Judul buku</label>
        <input type="text" name="judul_buku" id="jdl_buku" value="<?= $buku->judul ?>" class="form-control">
    </div>
    <div class="mb-3">
        <label for="prg_buku">Pengarang buku</label>
        <input type="text" name="pengarang_buku" id="prg_buku" value="<?= $buku->pengarang ?>"class="form-control">
    </div>
    <div class="mb-3">
        <label for="desc_buku">Deskripsi</label>
        <textarea name="deskripsi" id="desc_buku" value="" class="form-control"><?= $buku->deskripsi ?></textarea>
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-success">Simpan Buku</button>
    </div>
</form>