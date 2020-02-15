<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Data employee</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="<?php echo base_url('admin/dashboard') ?>">Dashboard</a></div>
                <div class="breadcrumb-item">Data employee</div>
            </div>
        </div>

        <a href="<?php echo base_url('admin/data_employee/tambah_employee') ?>" class="btn btn-primary mb-3">Add employee</a>

        <?php echo $this->session->flashdata('pesan') ?>

        <table class="table table-hover  table striped table-borderd">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Employee</th>
                    <th>Position</th>
                    <th>Salary</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach ($employee as $pl) : ?>
                    <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $pl->nama_employee ?></td>
                        <td><?php echo $pl->nama_position ?></td>
                        <td><?php echo number_format($pl->salary, 0, ',', '.') ?></td>
                        <td><?php echo $pl->email ?></td>
                        <td><?php echo $pl->address ?></td>
                        <td>
                            <a href="<?php echo base_url('admin/data_employee/detail_employee/') . $pl->id_employee ?>" class="btn btn-success"><i class="fas fa-eye"></i></a>
                            <a href="<?php echo base_url('admin/data_employee/update_employee/') . $pl->id_employee ?>" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                            <a href="<?php echo base_url('admin/data_employee/delete_employee/') . $pl->id_employee ?>" class="btn btn-danger" onclick="javascript: return confirm('Are You sure to delete ?')"><i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

    </section>
</div>