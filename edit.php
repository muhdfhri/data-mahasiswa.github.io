<?php
include "koneksi.php";
$id = $_GET['id'];

$query = mysqli_query($kon, "SELECT * FROM mahasiswa WHERE id='$id'");
while ($row = mysqli_fetch_array($query)) {
    $nama_mahasiswa = $row['nama_mahasiswa'];
    $jenis_kelamin = $row['jenis_kelamin'];
    $asal_daerah = $row['asal_daerah'];
    $jurusan = $row['jurusan'];
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Perbaiki Data</title>
    <link href="style.css" rel="stylesheet">
    <style>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f3f3f3;
            margin: 0;
            padding: 20px;
        }

        .form-container {
            max-width: 400px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .form-title {
            color: green;
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .form-label {
            color: black;
            font-size: 14px;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .form-input {
            width: 100%;
            padding: 8px;
            font-size: 14px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            margin-bottom: 10px;
        }

        .form-submit {
            background-color: #657FFF;
            color: white;
            border: none;
            padding: 10px 16px;
            font-size: 14px;
            font-weight: bold;
            border-radius: 4px;
            cursor: pointer;
        }

        .form-submit:hover {
            background-color: #4766CC;
        }

        .form-back-link {
            color: green;
            text-decoration: none;
            font-size: 14px;
            margin-left: 10px;
        }
    </style>
    </style>
</head>
<body>
    <div class="form-container">
        <div class="form-title">Perbaiki Data</div>
        <form method="post" action="update.php?id=<?php echo $id; ?>" enctype="multipart/form-data">
            <div class="form-label"><b>Nama Mahasiswa</b></div>
            <input type="text" name="nama_mahasiswa" value="<?php echo $nama_mahasiswa; ?>" class="form-input">
            <div class="form-label"><b>Jenis Kelamin</b></div>
            <select name="jenis_kelamin" class="form-input">
                <option value="Laki-laki" <?php if ($jenis_kelamin == "Laki-laki") echo "selected"; ?>>Laki-laki</option>
                <option value="Perempuan" <?php if ($jenis_kelamin == "Perempuan") echo "selected"; ?>>Perempuan</option>
            </select>
            <div class="form-label"><b>Asal Daerah</b></div>
            <input type="text" name="asal_daerah" value="<?php echo $asal_daerah; ?>" class="form-input">
            <div class="form-label"><b>Jurusan</b></div>
            <input type="text" name="jurusan" value="<?php echo $jurusan; ?>" class="form-input">
            
            <div>
                <input type="submit" name="submit" value="Update" class="form-submit">
                <a href="index.php" class="form-back-link">Kembali</a>
            </div>
        </form>
    </div>
</body>
</html>

<?php
}
?>
