<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Data menu not available</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="<?php echo base_url('admin/dashboard') ?>">Dashboard</a></div>
                <div class="breadcrumb-item">Data menu not available</div>
            </div>
        </div>

        <table class="table table-hover  table striped table-borderd">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Menu</th>
                    <th>Foto</th>
                    <th>Kategori</th>
                    <th>Type</th>
                    <th>Harga</th>
                    <th>Discount <i class="fas fa-percentage"></i></th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach ($menu as $mn) : ?>
                    <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $mn->nama_menu ?></td>
                        <td>
                            <img width="80px" src='<?= base_url() ?>assets/backend/img/upload_menu/<?= $mn->foto_menu; ?>' height='80px'>
                        </td>
                        <td><?php echo $mn->nama_kategori ?></td>
                        <td><?php echo $mn->nama_type ?></td>
                        <td><?php echo number_format($mn->harga_jual, 0, ',', '.') ?></td>
                        <td><?php echo $mn->discount ?></td>
                        <td>
                            <a href="<?php echo base_url('admin/data_menu/update_status/') . $mn->id_menu ?>" class="btn btn-success" onclick="javascript: return confirm('Are you sure item already  ?')"><i class="fas fa-check-circle"></i></a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

    </section>
</div>