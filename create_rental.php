<!doctype html>
<html lang="en">
<head>
	<title>Tambah Data Rental</title>
</head>

<body>
	<h1>Tambah Data Rental</h1>
	<a href="rental.php">Kembali</a>
	<br><br>
	<form action="controller.php" method="post">
		<label>ID Rental</label>
		<br>
		<input type="text" name="rental_id">
		<br>
		<label>ID Mobil</label>
		<br>
		<input type="text" name="mobil_id"><br>
		<label>ID Member</label>
		<br>
		<input type="text" name="member_Id">
		<br>
		<label>Lama Rental</label>
		<br>
		<input type="text" name="lamarental">
		<br><br>
		<button type="submit" name="submit_simpan_rental">Submit</button>
		<button type="reset">Reset</button>
	</form>
</body>
</html> 