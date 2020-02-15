<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Data category</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="<?php echo base_url('admin/dashboard') ?>">Dashboard</a></div>
                <div class="breadcrumb-item">Data category</div>
            </div>
        </div>

        <a href="<?php echo base_url('admin/data_kategori/tambah_kategori') ?>" class="btn btn-primary mb-3">Add Category</a>

        <?php echo $this->session->flashdata('pesan') ?>

        <table class="table table-hover  table striped table-borderd">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Kategori</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach ($kategori as $kt) : ?>
                    <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $kt->nama_kategori ?></td>
                        <td>
                            <a href="<?php echo base_url('admin/data_kategori/update_kategori/') . $kt->id_kategori ?>" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                            <a href="<?php echo base_url('admin/data_kategori/delete_kategori/') . $kt->id_kategori ?>" class="btn btn-danger" onclick="javascript: return confirm('Anda yakin hapus ?')"><i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

    </section>
</div>