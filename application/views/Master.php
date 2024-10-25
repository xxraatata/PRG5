                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Master</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Laptop</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Available Laptop Data
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Serie</th>
                                            <th>Merk</th>
                                            <th>Stok</th>
                                            <th>Harga</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No.</th>
                                            <th>Serie</th>
                                            <th>Merk</th>
                                            <th>Stok</th>
                                            <th>Harga</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php
                                        $i = 1;
                                        foreach($laptop as $l) : 
                                        ?>
                                        <tr>
                                            <td><?= $i++ ?></td>
                                            <td><?= $l['seri_laptop'] ?></td>
                                            <td><?= $l['merk_laptop'] ?></td>
                                            <td><?= $l['stok'] ?></td>
                                            <td><?= $l['harga'] ?></td>
                                            <td>
                                                <a href="<?= base_url('index.php/MasterController/edit/'.$l['id_laptop']) ?>" class="btn btn-sm btn-warning">
                                                    <i class="mdi mdi-pencil"></i> Edit
                                                </a>
                                                <a href="<?= base_url('index.php/MasterKontroller/delete/'.$l['id_laptop']) ?>" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">
                                                    <i class="mdi mdi-delete"></i> Delete
                                                </a>
                                            </td>
                                        </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>