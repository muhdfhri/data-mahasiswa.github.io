<?php
include "koneksi.php";
$query = mysqli_query($kon, "SELECT * FROM mahasiswa") or die(mysqli_error());
$jumlah = mysqli_num_rows($query);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Daftar Mahasiswa</title>
    <link href="style.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #EBEBEB;
            margin: 0;
            padding: 20px;
        }

        .header {
            background-color: #657FFF;
            color: white;
            padding: 10px;
            font-size: 30px;
            font-weight: bold;
            text-align: center;
            margin-bottom: 20px;
        }

        .add-link {
            display: block;
            text-align: right;
            margin-bottom: 10px;
        }

        .container {
            margin-top: 20px;
        }

        .table-container {
            width: 100%;
            background-color: white;
            padding: 10px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #657FFF;
            color: white;
            font-weight: bold;
        }

        tr:nth-child(even) {
            background-color: #E8D3DF;
        }

        tr:hover {
            background-color: #C4C4C4;
        }

        .delete-link {
            color: red;
            margin-right: 5px;
            text-decoration: none;
        }

        .edit-link {
            color: blue;
            text-decoration: none;
        }

        .add-link {
            color: green;
            text-decoration: none;
            font-weight: bold;
        }

        .add-link:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="header"><strong>UNIVERSITAS POTENSI UTAMA</strong></div>
    <div class="container">
        <a class="add-link" href="add.php">+ Tambah Mahasiswa</a>
        <div class="table-container">
            <table>
                <tr>
                    <th>No</th>
                    <th><b>Nama Mahasiswa</b></th>
                    <th><b>Jenis Kelamin</b></th>
                    <th><b>Asal Daerah</b></th>
                    <th><b>Jurusan</b></th>
                    <th><b>Aksi</b></th>
                </tr>
                <?php
                $j = 0;
                while ($row = mysqli_fetch_array($query)) {
                    $j++;
                    ?>
                    <tr>
                        <td><?php echo $j; ?></td>
                        <td><?php echo $row["nama_mahasiswa"]; ?></td>
                        <td><?php echo $row["jenis_kelamin"]; ?></td>
                        <td><?php echo $row["asal_daerah"]; ?></td>
                        <td><?php echo $row["jurusan"]; ?></td>
                        <td>
                            <a class="delete-link" href="delete.php?id=<?php echo $row['id']; ?>" title="Hapus">Hapus</a>
                            <a class="edit-link" href="edit.php?id=<?php echo $row['id']; ?>" title="Edit">Edit</a>
                        </td>
                    </tr>
                    <?php
                }
                ?>
            </table>
        </div>
    </div>
</body>
</html>
