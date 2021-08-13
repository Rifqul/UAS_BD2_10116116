<?php
    include "koneksi.php";
    if (isset($_GET['nip'])) {
        $nip = $_GET['nip'];
    }
    else {
        die ("Error. ID Selected! ");    
    }
    $query    =mysqli_query($conn, "SELECT * FROM kepegawaian WHERE nip='$nip'");
    $data    =mysqli_fetch_array($query);
    $notnis    =$data['nama'];
    
    if ($_POST['Edit'] == "Edit") {
    $nama    =$_POST['nama'];
    $alamat=$_POST['alamat'];
    $tgl_lahir    =$_POST['tgl_lahir'];
    $jenis_kelamin    =$_POST['jenis_kelamin'];
    
   
    $update =mysqli_query($conn, "UPDATE kepegawaian SET nama='$nama', alamat='$alamat', tgl_lahir='$tgl_lahir', jenis_kelamin='$jenis_kelamin' WHERE nip='$nip'");
        ?>
            <script language="JavaScript">
            alert('Ubah Data Berhasil ...');
            document.location='./';
            </script>
        <?php
    
}
?>