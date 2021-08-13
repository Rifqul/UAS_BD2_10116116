<?php
    include "koneksi.php";
    if (isset($_GET['nip'])) {
        $nip    =$_GET['nip'];
    }
    else{
        echo "Oops! No ID Selected";
    }
    
    if (!empty($nip) && $nip != "") {
        $hapus =mysqli_query($conn, "DELETE FROM pegawai WHERE nip='$nip'");
            ?>
                <script language="JavaScript">
                alert('Hapus berhasil ...');
                document.location='./';
                </script>
            <?php        
    }
?>