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
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1;
            foreach ($mahasiswa as $mhs): ?>
                <tr>
                    <th scope="row"><?= $no; ?></th>
                    <td><?= $mhs['npm']; ?></td>
                    <td><?= $mhs['nama']; ?></td>
                    <td><?= $mhs['alamat']; ?></td>
                    <td><?= $mhs['created_at']; ?></td>
                    <td>
                        <div class="d-flex justify-content-center">
                            <a href="/edit/<?= $mhs['id']; ?>" class="btn btn-warning mr-3">Edit</a>
                            <form action="/delete/<?= $mhs['id']; ?>" method="post">
                                <input type="hidden" name="_method" value="DELETE">
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>

                        </div>
                    </td>
                </tr>
            <?php $no++;
            endforeach; ?>
        </tbody>
    </table>
</div>