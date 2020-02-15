<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Data type</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="<?php echo base_url('admin/dashboard') ?>">Dashboard</a></div>
                <div class="breadcrumb-item">Data type</div>
            </div>
        </div>

        <a href="<?php echo base_url('admin/data_type/tambah_type') ?>" class="btn btn-primary mb-3">Add Type</a>

        <?php echo $this->session->flashdata('pesan') ?>

        <table class="table table-hover  table striped table-borderd">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Type</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach ($type as $tp) : ?>
                    <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $tp->nama_type ?></td>
                        <td>
                            <a href="<?php echo base_url('admin/data_type/update_type/') . $tp->id_type ?>" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                            <a href="<?php echo base_url('admin/data_type/delete_type/') . $tp->id_type ?>" class="btn btn-danger" onclick="javascript: return confirm('Anda yakin hapus ?')"><i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

    </section>
</div>