<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Data salary employee</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="<?php echo base_url('a/dashboard') ?>">Dashboard</a></div>
                <div class="breadcrumb-item active"><a href="<?php echo base_url('a/salary') ?>">Choose employee</a></div>
                <div class="breadcrumb-item">Salary</div>
            </div>
        </div>

        <?php echo $this->session->flashdata('pesan') ?>

        <table class="table table-hover  table striped table-borderd">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Employee</th>
                    <th>Position</th>
                    <th>Salary</th>
                    <th>Email</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach ($employees as $pl) : ?>
                    <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $pl->nama_employee ?></td>
                        <td><?php echo $pl->nama_position ?></td>
                        <td><?php echo number_format($pl->salary, 0, ',', '.') ?></td>
                        <td><?php echo $pl->email ?></td>
                        <td>
                            <a href="<?php echo base_url('admin/data_salary/add/') . $pl->id_employee ?>" class="btn btn-success"><i class="fas fa-money-bill-wave"></i></a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

    </section>
</div>