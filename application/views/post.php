<div class="row">

	<div class="col s12">
		<table class="table">

			<tr>
				<td>Nama Peminjam</td>
				<td>: <?= $post->nama; ?></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td>: <?= $post->alamat; ?></td>
			</tr>
			<tr>
				<td> Nama Buku</td>
				<td>: <?= $post->nama_buku; ?></td>
			</tr>
			<tr>
				<td>Bukti Peminjaman</td>
				<td>
					<img src="<?= site_url('upload/post/' . $post->file_name); ?>" alt="Post's Image" class="circle" width="100vw" height="100vh">
				</td>
			</tr>
		</table>



		<div class="row">

			<button class="btn btn-primary mr-5"><a href="<?= site_url('welcome/update/' . $post->id); ?>" class="text-white">Update</a></button>

			<button class="btn btn-danger"><a href="<?= site_url('welcome/delete/' . $post->id); ?>" class="text-white">Delete</a></button>

		</div>


	</div>
</div>