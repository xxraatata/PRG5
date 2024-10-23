<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Karyawan</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>"> <!-- Sesuaikan dengan lokasi file CSS Anda -->
</head>
<style>
    /* General Body Styling */
body {
    font-family: 'Arial', sans-serif;
    background-color: #f8f9fa;
    margin: 0;
    padding: 0;
}

/* Container Styling */
.container {
    display: flex;
    min-height: 100vh;
}

/* Sidebar Styling */
.sidebar {
    background-color: #4B3F72;
    color: #fff;
    width: 250px;
    padding: 20px;
    box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1);
}

.sidebar h2 {
    font-size: 24px;
    margin-bottom: 20px;
}

.sidebar nav ul {
    list-style-type: none;
    padding: 0;
}

.sidebar nav ul li {
    margin-bottom: 15px;
}

.sidebar nav ul li a {
    text-decoration: none;
    color: #fff;
    font-size: 18px;
    display: block;
    padding: 10px;
    border-radius: 5px;
    transition: background-color 0.3s ease;
}

.sidebar nav ul li a.active,
.sidebar nav ul li a:hover {
    background-color: #6C63FF;
}

/* Main Content Styling */
.main-content {
    flex: 1;
    padding: 20px;
    background-color: #fff;
}

.main-content header h1 {
    font-size: 28px;
    margin-bottom: 20px;
    color: #333;
}

/* Table Styling */
table {
    width: 100%;
    border-collapse: collapse;
    background-color: #fff;
    box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.1);
    margin-bottom: 20px;
}

table, th, td {
    border: 1px solid #ddd;
    padding: 10px;
    text-align: left;
}

th {
    background-color: #6C63FF;
    color: #fff;
}

td {
    color: #333;
}

/* Button Styling */
a {
    text-decoration: none;
    display: inline-block;
    padding: 10px 15px;
    border-radius: 5px;
    background-color: #4B3F72;
    color: white;
    font-size: 16px;
    transition: background-color 0.3s ease;
}

a:hover {
    background-color: #6C63FF;
}

/* Action Button Styling */
.aksi button {
    background-color: #6C63FF;
    border: none;
    padding: 10px 20px;
    color: white;
    font-size: 16px;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.aksi button:hover {
    background-color: #4B3F72;
}


</style>
<body>
    <h1>Detail Karyawan</h1>

    <?php if ($karyawan): ?>
        <table border="1">
            <tr>
                <th>ID</th>
                <td><?= $karyawan['id']; ?></td>
            </tr>
            <tr>
                <th>Nama</th>
                <td><?= $karyawan['nama']; ?></td>
            </tr>
            <tr>
                <th>Alamat</th>
                <td><?= $karyawan['alamat']; ?></td>
            </tr>
            <tr>
                <th>Jabatan</th>
                <td><?= $karyawan['jabatan']; ?></td>
            </tr>
        </table>

        <br>

        <a href="<?= base_url('UpdateKaryawanC/edit/' . $karyawan['id']); ?>">Edit Karyawan</a>
        <a href="<?= base_url('UpdateKaryawanC/index'); ?>">Kembali ke Daftar Karyawan</a>

    <?php else: ?>
        <p>Karyawan tidak ditemukan.</p>
    <?php endif; ?>

</body>
</html>
