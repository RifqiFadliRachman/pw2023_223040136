<?php require('partials/header.php'); ?>
<?php require('partials/nav.php'); ?>

<div class="container mt-3">
  <h1>Halaman Home</h1>

  <h3>Daftar Mahasiswa</h3>

  <a href="tambah.php" class="btn btn-primary">Tambah Data Mahasiswa</a>

  <div class="row">
    <div class="col-md-6">
      <form action="" method="get">
      <div class="input-group my-3">
      <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
      <span class="input-group-text" id="basic-addon2">@example.com</span>
      </div>

      </form>

    </div>

  </div>

  <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Gambar</th>
        <th scope="col">NIM</th>
        <th scope="col">Nama</th>
        <th scope="col">Email</th>
        <th scope="col">Jurusan</th>
        <th scope="col">Aksi</th>
      </tr>
    </thead>
    <tbody>
      <?php $i = 1; ?>
      <?php foreach ($students as $student) : ?>
        <tr>
          <th scope="row"><?= $i++; ?></th>
          <td>
            <img src="img/<?= $student['gambar']; ?>" width="50">
          </td>
          <td><?= $student['nrp']; ?></td>
          <td><?= $student['nama']; ?></td>
          <td><?= $student['email']; ?></td>
          <td><?= $student['jurusan']; ?></td>
          <td>
            <a href="" class="badge text-bg-warning">ubah</a> |
            <a href="" class="badge text-bg-danger">hapus</a>
          </td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</div>

<?php require('partials/footer.php'); ?>