<?php
    include "koneksi.php";
    if ($_POST['Submit'] == "Submit") {
    $nama           =$_POST['nama'];
    $alamat         =$_POST['alamat'];
    $tgl_lahir      =$_POST['tgl_lahir'];
    $jenis_kelamin  =$_POST['jenis_kelamin'];
    
    
    $insert =mysqli_query($conn, "INSERT INTO pegawai (nama, alamat, tgl_lahir, jenis_kelamin) VALUES ('$nama', '$alamat', '$tgl_lahir', '$jenis_kelamin')");
        ?>
            <script language="JavaScript">
            alert('tambah Data Berhasil ...');
            document.location='./';
            </script>
        <?php
        
    }
?>