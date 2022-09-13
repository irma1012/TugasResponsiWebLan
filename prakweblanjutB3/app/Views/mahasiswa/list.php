<div class="container">
    <a href="/create" type="button" class="btn btn-success mb-4">Tambah</a>
    <table class="table table-striped table-bordered text-center">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">NPM</th>
                <th scope="col">Nama</th>
                <th scope="col">Alamat</th>
                <th scope="col">Created At</th>
                <th scope="col">Update At</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1;
            foreach ($mahasiswa as $mhs) : ?>
                <tr>
                    <th scope="row"><?= $no; ?></th>
                    <td><?= $mhs['npm']; ?></td>
                    <td><?= $mhs['nama']; ?></td>
                    <td><?= $mhs['alamat']; ?></td>
                    <td><?= $mhs['created_at']; ?></td>
                    <td><?= $mhs['update_at']; ?></td>
                </tr>
            <?php $no++;
            endforeach; ?>
        </tbody>
    </table>
</div>