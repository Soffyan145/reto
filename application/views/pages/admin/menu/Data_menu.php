<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Data menu</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="<?php echo base_url('a/dashboard') ?>">Dashboard</a></div>
                <div class="breadcrumb-item">Data menu</div>
            </div>
        </div>

        <a href="<?php echo base_url('admin/data_menu/tambah_menu') ?>" class="btn btn-primary mb-3">Add Menu</a>

        <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash') ?>"></div>
        <?php if ($this->session->flashdata('flash')) : ?>
        <?php endif; ?>

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
                    <th>Status</th>
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
                        <td><?php if ($mn->status == "0") {
                                echo "<span class='badge badge-danger'>Not Allready</span>";
                            } else {
                                echo "<span class='badge badge-primary'>Allready</span>";
                            } ?></td>
                        <td>
                            <a href="<?php echo base_url('admin/data_menu/detail_menu/') . $mn->id_menu ?>" class="btn btn-success"><i class="fas fa-eye"></i></a>
                            <a href="<?php echo base_url('admin/data_menu/update_menu/') . $mn->id_menu ?>" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                            <a href="<?php echo base_url('admin/data_menu/delete_menu/') . $mn->id_menu ?>" class="btn btn-danger" onclick="javascript: return confirm('Anda yakin hapus ?')"><i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

    </section>
</div>