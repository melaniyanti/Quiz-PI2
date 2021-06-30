<!doctype html>
<html lang="en">
<head>
	<title>Tambah Data Member</title>
</head>

<body>
	<h1>Tambah Data Member</h1>
	<a href="member.php">Kembali</a>
	<br><br>
	<form action="controller.php" method="post">
		<label>ID Member</label>
		<br>
		<input type="text" name="member_id">
		<br>
		<label>Nama</label>
		<br>
		<input type="text" name="nama"><br>
		<label>Alamat</label>
		<br>
		<input type="text" name="alamat">
		<br>
		<label>Tlp</label>
		<br>
		<input type="text" name="tlp">
		<br><br>
		<button type="submit" name="submit_simpan_member">Submit</button>
		<button type="reset">Reset</button>
	</form>
</body>
</html> 