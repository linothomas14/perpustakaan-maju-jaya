<h4 class="center">List Peminjam Buku</h4>
<div class="row">
    <div class="center col s12">
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#tambahModal" data-whatever="@mdo">Tambah Peminjam</button>
    </div>
</div>

<table class="table">
    <tr>
        <th>id</th>
        <th>Nama Peminjam</th>
        <th>Alamat</th>
        <th>Nama Buku</th>
        <th>Tanggal Peminjaman</th>
        <th>Foto Buku</th>
        <th>Detail</th>
    </tr>
    <?php $id = 1 ?>
    <?php foreach ($home_post as $data) : ?>

        <tr>
            <td><?= $id ?></td>
            <td><?= $data['nama']; ?></td>
            <td><?= $data['alamat']; ?></td>
            <td><?= $data['nama_buku']; ?></td>
            <td><?= $data['tanggal_pinjam']; ?></td>
            <td> <img src="<?= site_url('upload/post/' . $data['file_name']) ?>" class="rounded" style="max-width:100px"></td>
            <td><a href="<?= site_url('welcome/index/' . $data['id']) ?>" class="secondary-content">
                    <i class="material-icons">visibility</i></td>
        </tr>
        <?php $id++ ?>
    <?php endforeach ?>
</table>


<div class="row">
    <div class="center col s12">
        <a onclick="alertHapusSemua()" class="btn btn-danger text-white"> Hapus Semua Peminjam </a>
    </div>
</div>

<div class="modal fade" id="tambahModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Peminjam</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= site_url('welcome/tambah'); ?>" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="nama" class="col-form-label">Nama Lengkap :</label>
                        <input type="text" name="nama" class="form-control" id="nama">
                    </div>
                    <div class="form-group">
                        <label for="alamat" class="col-form-label">Alamat :</label>
                        <textarea class="form-control" name="alamat" id="alamat"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="nama-buku" class="col-form-label">Nama Buku :</label>
                        <input type="text" class="form-control" name="nama_buku" id="nama-buku">
                    </div>
                    <div class="form-group">
                        <label for="gambar" class="col-form-label">Foto Buku:</label>
                        <input type="file" name="gambar" class="form-control" id="gambar">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>

<div class="modal fade" id="detailModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Detail</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= site_url('welcome/tambah'); ?>" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="nama" class="col-form-label">Nama Lengkap :</label>
                        <p>Hahahaha</p>
                    </div>
                    <div class="form-group">
                        <label for="alamat" class="col-form-label">Alamat :</label>
                        <textarea class="form-control" name="alamat" id="alamat"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="nama-buku" class="col-form-label">Nama Buku :</label>
                        <input type="text" class="form-control" name="nama_buku" id="nama-buku">
                    </div>
                    <div class="form-group">
                        <label for="gambar" class="col-form-label">Foto Buku:</label>
                        <input type="file" name="gambar" class="form-control" id="gambar">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>

<script>
    function alertHapusSemua() {

        if (confirm("Apakah anda yakin ?")) {
            window.location.href = "<?= site_url('welcome/deleteAll/') ?>";
        }

    }
</script>