<div class="main-content">
    <section class="section">
        <div class="section-header">
            <div class="section-header-back">
                <a href="<?php echo base_url('admin/data_employee') ?>" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
            </div>
            <h1>Detail data employee</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="<?php echo base_url('admin/dashboard') ?>">Dashboard</a></div>
                <div class="breadcrumb-item active"><a href="<?php echo base_url('admin/data_employee') ?>">Data employee</a></div>
                <div class="breadcrumb-item">Detail employee</div>
            </div>
        </div>
    </section>
    <?php foreach ($detail as $dt) : ?>

        <div class="card">
            <div class="card-body">

                <div class="row">
                    <div class="col-md-4"><br>
                        <img src="<?php echo base_url() . 'assets/backend/img/upload_employee/' . $dt->foto_employee ?>" width="340px" height="400">
                    </div>
                    <div class="col-md-6">
                        <table class="table">
                            <tr>
                                <td>Nama Employee</td>
                                <td><?php echo $dt->nama_employee ?></td>
                            </tr>
                            <tr>
                                <td>Position</td>
                                <td><?php echo $dt->nama_position ?></td>
                            </tr>
                            <tr>
                                <td>Salary</td>
                                <td><?php echo number_format($dt->salary, 0, ',', '.') ?></td>
                            </tr>
                            <tr>
                                <td>Phone</td>
                                <td><?php echo $dt->phone ?></td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td><?php echo $dt->email ?></td>
                            </tr>
                            <tr>
                                <td>Address</td>
                                <td><?php echo $dt->address ?></td>
                            </tr>
                        </table>
                        <a href="<?php echo base_url('admin/data_employee/') ?>" class="btn btn-danger ml-4">Back</a>
                        <a href="<?php echo base_url('admin/data_employee/update_employee/' . $dt->id_employee) ?>" class="btn btn-primary ml-3">Update</a>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>