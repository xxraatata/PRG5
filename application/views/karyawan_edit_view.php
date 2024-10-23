<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Karyawan</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>"> <!-- CSS file -->
    <style>
        /* General Body Styling */
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
        }

        /* Container */
        .container {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        /* Heading */
        h1 {
            text-align: center;
            color: #4B3F72;
            font-size: 28px;
            margin-bottom: 20px;
        }

        /* Form Styling */
        form {
            width: 100%;
        }

        table {
            width: 100%;
            margin-bottom: 20px;
            border-collapse: collapse;
        }

        th, td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            font-weight: bold;
            color: #4B3F72;
        }

        td input[type="text"],
        td select {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border-radius: 4px;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }

        /* Buttons Styling */
        button[type="submit"] {
            width: 100%;
            padding: 12px;
            background-color: #4B3F72;
            color: white;
            font-size: 18px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button[type="submit"]:hover {
            background-color: #6C63FF;
        }

        /* Back Link */
        a {
            display: inline-block;
            margin-top: 10px;
            text-decoration: none;
            color: #4B3F72;
            text-align: center;
            width: 100%;
            font-size: 16px;
        }

        a:hover {
            color: #6C63FF;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Edit Karyawan</h1>

        <form action="<?= base_url('UpdateKaryawanC/update/' . $karyawan['id']); ?>" method="post">
            <table>
                <tr>
                    <th>ID</th>
                    <td><input type="text" name="id" value="<?= $karyawan['id']; ?>" readonly></td>
                </tr>
                <tr>
                    <th>Nama</th>
                    <td><input type="text" name="nama" value="<?= $karyawan['nama']; ?>"></td>
                </tr>
                <tr>
                    <th>Alamat</th>
                    <td><input type="text" name="alamat" value="<?= $karyawan['alamat']; ?>"></td>
                </tr>
                <tr>
                    <th>Jabatan</th>
                    <td>
                        <select name="jabatan">
                            <option value="manajer" <?= $karyawan['jabatan'] == 'manajer' ? 'selected' : ''; ?>>Manajer</option>
                            <option value="pegawai" <?= $karyawan['jabatan'] == 'pegawai' ? 'selected' : ''; ?>>Pegawai</option>
                        </select>
                    </td>
                </tr>
            </table>
            <button type="submit">Update Karyawan</button>
        </form>

        <a href="<?= base_url('UpdateKaryawanC/index'); ?>">Kembali ke Daftar Karyawan</a>
    </div>
</body>
</html>
