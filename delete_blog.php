<?php
//HAPUS
include "koneksi.php";
$id     = $_GET['id'];
$result = mysqli_query($conn, "DELETE FROM blog WHERE id = '$id'");
if ($result){ ?>
    <script language="javascript">
            alert('Berhasil Dihapus');
        document.location.href="list_blog.php";
    </script>
<?php
}else {
        trigger_error('Perintah SQL Salah: ' . $sql . ' Error: ' . $conn->error, E_USER_ERROR);
}
?>