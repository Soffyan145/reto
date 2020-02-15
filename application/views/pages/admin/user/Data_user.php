<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Data user</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="<?php echo base_url('admin/dashboard') ?>">Dashboard</a></div>
                <div class="breadcrumb-item">Data user</div>
            </div>
        </div>

        <table class="table table-hover  table striped table-borderd">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Activated</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach ($users as $user) : ?>
                    <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $user->nama ?></td>
                        <td><?php echo $user->email ?></td>
                        <td><?php if ($user->is_active == "0") {
                                echo "<span class='badge badge-danger'>Not Allready</span>";
                            } else {
                                echo "<span class='badge badge-primary'>Allready</span>";
                            } ?></td>
                        <td>
                            <a href="<?php echo base_url('admin/data_user/detail/') . $user->id ?>" class="btn btn-success"><i class="fas fa-eye"></i></a>
                            <a href="<?php echo base_url('admin/data_user/update/') . $user->id ?>" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                            <a href="<?php echo base_url('admin/data_user/delete/') . $user->id ?>" class="btn btn-danger" onclick="javascript: return confirm('Are you sure to delete ?')"><i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

    </section>
</div>