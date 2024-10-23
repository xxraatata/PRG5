<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Karyawan View</title>
    
    <!-- Link ke SweetAlert2 CSS -->
    
    <!-- Optional, Tambahkan CSS untuk custom styling -->
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.2);
        }
    </style>
</head>
<body>
<!-- SweetAlert2 JS -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<?php if (isset($message) && isset($status)): ?>
    <script type="text/javascript">
        Swal.fire({
            title: '<?php echo $status == "success" ? "Berhasil" : "Gagal"; ?>',
            text: '<?php echo $message; ?>',
            icon: '<?php echo $status; ?>',
            confirmButtonText: 'OK',
            confirmButtonColor: '#3085d6',
            iconColor: '<?php echo $status == "success" ? "#28a745" : "#d33"; ?>'
        });
    </script>
<?php endif; ?>

</body>
</html>
