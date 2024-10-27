<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title><?= isset($title) ? $title : "TechNest" ?></title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link href="<?php echo base_url('assets/css/styles.css') ?>" rel="stylesheet" />
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand ps-3" href="<?php echo base_url('index.php/LaptopController/view') ?>">TechNest</a>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link" href="<?php echo base_url('index.php/LaptopController/view') ?>">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                    </div>
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Master</div>
                            <a class="nav-link" href="<?php echo base_url('index.php/MasterController/view') ?>">
                                <div class="sb-nav-link-icon"><i class='bx bx-laptop'></i></div>
                                Laptop
                            </a>
                    </div>
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Transaction</div>
                            <a class="nav-link" href="<?php echo base_url('index.php/TransaksiController/view') ?>">
                                <div class="sb-nav-link-icon"><i class='bx bx-money' ></i></div>
                                Payment 
                            </a>
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <?= $content ?>
                <main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; TechNest Astra Polytechnic</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="<?php echo base_url('assets/js/scripts.js') ?>"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="<?php echo base_url('assets/js/datatables-simple-demo.js') ?>"></script>
        <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
        <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
        <script>
            const baseUrl = "<?php echo base_url();?>"
            const barChart = (chartType) => {
                $.ajax({
                    url: "<?php echo base_url();?>"+'TransaksiController/dashboard',
                    dataType: 'json',
                    method: 'get',
                    success: data => {
                        let charX = []
                        let charY = []
                        data.map(data => {
                            charX.push(data.merk)
                            charY.push(data.quantity)
                        })
                        const charData = {
                            labels: charX,
                            datasets: [
                                {
                                    label: 'Merk',
                                    data: charY,
                                    backgroundColor: ['blue'],
                                    borderColor: ['blue'],
                                    borderWidth: 4
                                }
                            ]
                        }
                        const ctx = document.getElementById(charType).getContext('2d')
                        const config = {
                            type: charType,
                            data: charData
                        }
                        const char = new Chart(ctx, config)
                    }
                })
            }

            barChart('myBarChart')
        </script>
    </body>
</html>
