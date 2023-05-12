<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>

<h6><?php echo validation_errors(); ?></h6>
<h6><?php echo $this->session->flashdata('error'); ?></h6>


<div class="row">

  <form action="<?php echo site_url('welcome/update/' . $post->id); ?>" method="post" enctype="multipart/form-data">
    <div class="form-group">
      <label for="nama">Nama Peminjam</label>
      <input name="nama" id="nama" type="text" class="form-control" value="<?php echo $post->nama; ?>">

    </div>
    <div class="form-group">
      <label for="alamat">Alamat</label>
      <input name="alamat" id="alamat" type="text" class="form-control" value="<?php echo $post->alamat; ?>">

    </div>
    <div class="form-group">
      <label for="nama_buku">Nama Buku</label>
      <input name="nama_buku" id="nama_buku" type="text" class="form-control" value="<?php echo $post->nama_buku; ?>">

    </div>
    <div class="center col s12">
      <img class="responsive-img" id="image" style="max-height:30vh;" src="<?php echo site_url('upload/post/' . $post->file_name); ?>">
    </div>
    <div class="form-group">
      <div class="file-field input-field col s12">
        <div class="btn btn-primary">
          <input name="image" type="file" id="file">
        </div>
        <div class="file-path-wrapper">
          <input class="file-path validate" type="text" onchange="thumbnail();" name="file">
        </div>
      </div>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>



</div>
<script type="text/javascript">
  function thumbnail() {
    var preview = document.querySelector('#image');
    var file = document.querySelector('input[type=file]').files[0];
    var reader = new FileReader();

    reader.onloadend = function() {
      preview.src = reader.result;
    }

    if (file) {
      reader.readAsDataURL(file);
    } else {
      preview.src = "";
    }
  }
</script>