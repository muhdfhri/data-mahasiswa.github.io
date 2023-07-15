<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Tambahkan Mahasiswa</title>
    <link href="style.css" rel="stylesheet">
    <style>
        body {
            font-family: Poppins, sans-serif;
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

        .form-select {
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
</head>
<body>
    <div class="form-container">
        <div class="form-title">Tambah Mahasiswa</div>
        <form action="insert_koleksi.php" method="POST">
            <div class="form-label">Nama Mahasiswa</div>
            <input type="text" name="nama_mahasiswa" class="form-input">
            <div class="form-label">Jenis Kelamin</div>
            <select name="jenis_kelamin" class="form-select">
                <option value="Laki-laki">Laki-laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>
            <div class="form-label">Asal Daerah</div>
            <input type="text" name="asal_daerah" class="form-input">
            <div class="form-label">Jurusan</div>
            <input type="text" name="jurusan" class="form-input">
            <div>
                <input type="submit" value="Tambah" class="form-submit">
                <a href="index.php" class="form-back-link">Kembali</a>
            </div>
        </form>
    </div>
</body>
</html>
