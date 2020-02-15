<div class="main-content">
    <section class="section">
        <div class="section-header">
            <div class="section-header-back">
                <a href="<?php echo base_url('admin/setting') ?>" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
            </div>
            <h1>Data social media</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="<?php echo base_url('admin/dashboard') ?>">Dashboard</a></div>
                <div class="breadcrumb-item active"><a href="<?php echo base_url('admin/setting') ?>">Setting</a></div>
                <div class="breadcrumb-item">Data social media</div>
            </div>
        </div>

        <a href="<?php echo base_url('admin/data_social_media/tambah_social_media') ?>" class="btn btn-primary mb-3">Add Social Media</a>

        <?php echo $this->session->flashdata('pesan') ?>

        <table class="table table-hover  table striped table-borderd">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Social Media</th>
                    <th>Account</th>
                    <th>Link</th>
                    <th>Logo</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach ($social as $sm) : ?>
                    <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $sm->nama_social_media ?></td>
                        <td><?php echo $sm->account ?></td>
                        <td><?php echo $sm->link ?></td>
                        <td>
                            <img width="70px" height='70px' src='<?= base_url() ?>assets/backend/img/upload_social_media/<?= $sm->logo_social_media; ?>'>
                        </td>
                        <td>
                            <a href="<?php echo base_url('admin/data_social_media/update/') . $sm->id_social_media ?>" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                            <a href="<?php echo base_url('admin/data_social_media/delete/') . $sm->id_social_media ?>" class="btn btn-danger" onclick="javascript: return confirm('Anda yakin hapus ?')"><i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

    </section>
</div>