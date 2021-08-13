<html>
<center>
<head>
    <title>Tugas UAS Praktikum Basis Data 2</title>
</head>
<body>
    <h2>CRUD KEPEGAWAIAN</h2>
    <h4>DATA PEGAWAI</h4>
    <p><a href="form-tambah.php">+ Tambah Data</a></p>
    <table border="1" cellpadding="2">
        <thead>
            <tr>            
                <th>No</th>
                <th>NIP</th>
                <th>Nama</th>
                <th>Alamat</th>
				<th>Tanggal Lahir</th>
				<th>Jenis Kelamin</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
                include "koneksi.php";
                $query    =mysqli_query($conn, "SELECT * FROM pegawai ORDER BY nip DESC");
                $no=0;
                while($data    =mysqli_fetch_array($query)){
                $no++
            ?>
            <tr>            
                <td><?php echo $no?></td>
                <td><?php echo $data['nip']?></td>
                <td><?php echo $data['nama']?></td>
                <td><?php echo $data['alamat']?></td>
                <td><?php echo $data['tgl_lahir']?></td>
                <td><?php echo $data['jenis_kelamin']?></td>
                <td><a href="form-ubah.php?nip=<?=$data['nip']?>">Edit</a> | <a href="hapus.php?nip=<?=$data['nip']?>" onclick="return confirm('Apakah ingin Hapus ? == <?php echo $data['nama']?> == from Database?');">Hapus</a></td>
            </tr>
            <?php
                }
            ?>
        </tbody>
    </table>
	
	
</body>
</center>
</html>