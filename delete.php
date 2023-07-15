<?php
include "koneksi.php";
$id = $_GET['id'];

if (isset($_GET['confirm']) && $_GET['confirm'] == 'yes') {
    $query = "DELETE FROM mahasiswa WHERE id = $id";
    mysqli_query($kon, $query);
    echo "<script>alert('Data mahasiswa berhasil dihapus');</script>";
    echo "<script>window.location.href = 'index.php';</script>";
}

?>

<script language="JavaScript">
    var confirmed = confirm("Apakah Anda ingin menghapusnya?");
    if (confirmed) {
        window.location.href = 'delete.php?id=<?php echo $id; ?>&confirm=yes';
    } else {
        window.location.href = 'index.php';
    }
</script>
