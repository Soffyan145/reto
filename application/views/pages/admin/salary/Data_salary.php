<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Data salary</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="<?php echo base_url('a/dashboard') ?>">Dashboard</a></div>
                <div class="breadcrumb-item">Data salary</div>
            </div>
        </div>

        <a href="<?php echo base_url('a/salary/choose_employee') ?>" class="btn btn-primary mb-3">Add salary</a>

        <?php echo $this->session->flashdata('pesan') ?>

        <table class="table table-hover  table striped table-borderd">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama salary</th>
                    <th>Position</th>
                    <th>Salary</th>
                    <th>Date</th>
                    <th>total salary</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach ($salaryes as $salary) : ?>
                    <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $salary->nama_employee ?></td>
                        <td><?php echo $salary->nama_position ?></td>
                        <td><?php echo number_format($salary->salary, 0, ',', '.') ?></td>
                        <td><?php echo $salary->date_salary ?></td>
                        <td><?php echo $salary->total_salary ?></td>
                        <td>
                            <a href="<?php echo base_url('admin/data_salary/detail/') . $salary->id ?>" class="btn btn-success"><i class="fas fa-eye"></i></a>
                            <a href="<?php echo base_url('admin/data_salary/update_salary/') . $salary->id ?>" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                            <a href="<?php echo base_url('admin/data_salary/delete_salary/') . $salary->id ?>" class="btn btn-danger" onclick="javascript: return confirm('Are You sure to delete ?')"><i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

    </section>
</div>