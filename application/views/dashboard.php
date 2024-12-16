        <center>
            <h1>CRUD Data Buku</h1>
        </center>

        <a href="<?= base_url('buku/tambah_data') ?>" class="btn btn-primary mb-2">Tambah Data</a>

        <table class="table table-dark">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Judul</th>
                    <th>Nama Pengarang</th>
                    <th>Deskripsi</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($data_buku as $buku) : ?>
                    <tr>
                        <td><?= $buku->id ?></td>
                        <td><?= $buku->judul ?></td>
                        <td><?= $buku->pengarang ?></td>
                        <td><?= $buku->deskripsi ?></td>
                        <td>
                            <a href="<?= base_url('buku/ambil/'). $buku->id?>" class="btn btn-success btn-sm"><li class="fas fa-edit"></li></a>
                            <a class="btn btn-danger btn-sm" onclick="confirmDelete(<?= $buku->id ?>)"><li class="fas fa-trash"></li></a>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>