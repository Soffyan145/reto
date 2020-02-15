<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Data position</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="<?php echo base_url('admin/dashboard') ?>">Dashboard</a></div>
                <div class="breadcrumb-item">Data position</div>
            </div>
        </div>

        <a href="<?php echo base_url('admin/data_position/tambah_position') ?>" class="btn btn-primary mb-3">Add Position</a>

        <?php echo $this->session->flashdata('pesan') ?>

        <table class="table table-hover  table striped table-borderd">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Position</th>
                    <th>Salary</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach ($position as $pt) : ?>
                    <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $pt->nama_position ?></td>
                        <td><?php echo number_format($pt->salary, 0, ',', '.') ?></td>
                        <td>
                            <a href="<?php echo base_url('admin/data_position/update_position/') . $pt->id_position ?>" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                            <a href="<?php echo base_url('admin/data_position/delete_position/') . $pt->id_position ?>" class="btn btn-danger" onclick="javascript: return confirm('Are You Sure To Delete ?')"><i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

    </section>
</div>