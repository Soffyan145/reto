<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Data table</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="<?php echo base_url('admin/dashboard') ?>">Dashboard</a></div>
                <div class="breadcrumb-item">Data table</div>
            </div>
        </div>

        <a href="<?php echo base_url('admin/data_table/tambah_table') ?>" class="btn btn-primary mb-3">Add Table</a>

        <?php echo $this->session->flashdata('pesan') ?>

        <table class="table table-hover  table striped table-borderd">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Table</th>
                    <th>Kapasitas</th>
                    <th>Deskripsi</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach ($table as $tb) : ?>
                    <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $tb->nama_table ?></td>
                        <td><?php echo $tb->kapasitas ?> person</td>
                        <td><?php echo $tb->deskripsi ?></td>
                        <td><?php if ($tb->status == "0") {
                                echo "<span class='badge badge-danger'>Not Allready</span>";
                            } else {
                                echo "<span class='badge badge-success'>Allready</span>";
                            } ?></td>
                        <td>
                            <a href="<?php echo base_url('admin/data_table/update_table/') . $tb->id_table ?>" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                            <a href="<?php echo base_url('admin/data_table/delete_table/') . $tb->id_table ?>" class="btn btn-danger" onclick="javascript: return confirm('Are You sure to delete ?')"><i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

    </section>
</div>