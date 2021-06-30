<?php
include 'model.php';
$model = new Model();
$index = 1;
?>
<!doctype html>
<html lang="en">
<head>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

<title>Data Member</title>
</head>

<body>
<div class="container">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php">Quiz Pemrograman Internet 2</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" 
        aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="mobil.php">Mobil</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="rental.php">Rental</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="member.php">Member</a>
          </li>
        </ul>
      </div>
    </div>
</nav>

<h1>Data Member</h1>
<a href="create_member.php">Tambah Data</a>
<br>
<a href="print_member.php" target="_blank">Cetak Data</a>
<br><br>
<table border="1">
  <thead>
    <tr>
      <th>ID Member</th>
      <th>Nama</th>
      <th>Alamat</th>
      <th>Tlp</th>
      <th>Aksi</th>
    </tr>
  </thead>
<tbody>

<?php
$result = $model->tampil_data_member();
if ( !empty($result) ) {
  foreach ($result as $data): ?>
    <tr>
      <td><?=$data->member_id ?></td>
      <td><?=$data->nama ?></td>
      <td><?=$data->alamat ?></td>
      <td><?=$data->tlp ?></td>
      <td>
        <a name="edit" id="edit" href="edit_member.php?id=<?=$data->member_id ?>">Edit</a>
        <a name="hapus" id="hapus" href="controller.php?id=<?=$data->member_id ?>">Delete</a>
      </td>
    </tr>
  <?php endforeach;
} else{ ?>
<tr>
<td colspan="9">Belum ada data pada tabel member.</td>
</tr>
<?php } ?>
</tbody>
</table>
</div>
</body>
</html> 