<h4 class="center">List Peminjam Buku</h4>
<div class="row">
    <div class="center col s12">
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Tambah Peminjam</button>
    </div>
</div>
<ul class="collection">
    <?php foreach ($home_post as $data) : ?>
        <li class="collection-item avatar">
            <img src="<?= site_url('upload/post/' . $data['filename']) ?>" class="circle">
            <p class="title"><?= $data['name']; ?> </p>
            <small><?= $data['description']; ?> </small>
            <a href="<?= site_url('welcome/index/' . $data['id']) ?>" class="secondary-content">
                <i class="material-icons">visibility</i>
            </a>
        </li>
    <?php endforeach ?>
</ul>

<div class="row">
    <div class="center col s12">
        <a href="<?= site_url('welcome/deleteAll/') ?>" class="btn btn-danger"> Hapus Semua Peminjam </a>
    </div>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Peminjam</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="nama" class="col-form-label">Nama Lengkap :</label>
                        <input type="text" class="form-control" id="nama">
                    </div>
                    <div class="form-group">
                        <label for="alamat" class="col-form-label">Alamat :</label>
                        <textarea class="form-control" id="alamat"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="nama-buku" class="col-form-label">Nama Buku :</label>
                        <input type="text" class="form-control" id="nama-buku">
                    </div>
                    <div class="form-group">
                        <label for="gambar" class="col-form-label">Foto peminjam:</label>
                        <input type="file" class="form-control" id="gambar">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Send message</button>
            </div>
        </div>
    </div>
</div>