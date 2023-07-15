<?php 
include "koneksi.php"; 
$id = $_GET['id']; 
$nama = $_POST['nama_mahasiswa'];
$jenis = $_POST['jenis_kelamin']; 
$asal = $_POST['asal_daerah']; 
$jurusan = $_POST['jurusan']; 

$query=mysqli_query ($kon, "UPDATE mahasiswa SET nama_mahasiswa='$nama', 
jenis_kelamin='$jenis', asal_daerah = '$asal', jurusan = '$jurusan' WHERE id='$id'")or die (mysqli_error()); 
if($query) { 
?>
<script language="JavaScript"> 
document.location='index.php'</script> 
<?php 
} 
?>
