<?php
	if (isset($_GET['nip'])) {
		$nip = $_GET['nip'];
	}
	else {
		die ("Error. ID Selected! ");	
	}
	include "koneksi.php";
	$query	=mysqli_query($conn, "SELECT * FROM pegawai WHERE nip='$nip'");
	$data	=mysqli_fetch_array($query);
?>
<html>
<center>
<head>
    <title>Tugas UAS Praktikum Basis Data 2</title>
</head>
<body>
    <h2>CRUD KEPEGAWAIAN</h2>
    <h4>TAMBAH DATA PEGAWAI</h4>
	<p><a href="./">&lt;&lt; Kembali</a></p>
	<form action="ubah.php?nip=<?=nip?>" method="POST">
		<table>
			<tr>			
				<td>Nama Pegawai</td>
				<td><input type="text" name="nama" maxlength="128" size="50" value="<?php echo $data['nama']?>"/></td>
			</tr>
			<tr>			
				<td>Alamat</td>
				<td><textarea type="text" name="alamat" maxlength="200" cols="45"><?php echo $data['alamat']?></textarea></td>
			</tr>
			<tr>			
				<td>Tanggal Lahir</td>
				<td><input type="date" name="tgl_lahir" maxlength="50" value="<?php echo $data['tgl_lahir']?>"/></td>
			</tr>
			<tr>			
				<td>Jenis Kelamin</td>
				<td><input type="text" name="jenis_kelamin" maxlength="255" size="50" value="<?php echo $data['jenis_kelamin']?>"/></td>
			</tr>	
			<tr>			
				<td></td>
				<td><input type="submit" name="Edit" value="Edit" />&nbsp;<input type="reset" value="Reset" /></td>
			</tr>
		</table>
	</form>
</body>
</center>
</html>