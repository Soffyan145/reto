<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Data slider</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="<?php echo base_url('admin/dashboard') ?>">Dashboard</a></div>
                <div class="breadcrumb-item">Data Slider</div>
            </div>
        </div>

        <a href="<?php echo base_url('admin/data_slider/tambah_slider') ?>" class="btn btn-primary mb-3">Add Slider</a>

        <?php echo $this->session->flashdata('pesan') ?>

        <table class="table table-hover  table striped table-borderd">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Title Slider</th>
                    <th>Deskription Slider</th>
                    <th>Images</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach ($slider as $slr) : ?>
                    <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $slr->title_slider ?></td>
                        <td><?php echo $slr->deskripsi ?></td>
                        <td>
                            <img width="200px" src='<?= base_url() ?>assets/backend/img/upload_slider/<?= $slr->foto_slider; ?>' height='150px'>
                        </td>
                        <td>
                            <a href="<?php echo base_url('admin/data_slider/update_slider/') . $slr->id_slider ?>" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                            <a href="<?php echo base_url('admin/data_slider/delete_slider/') . $slr->id_slider ?>" class="btn btn-danger" onclick="javascript: return confirm('Are You Sure To delete ?')"><i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

    </section>
</div>