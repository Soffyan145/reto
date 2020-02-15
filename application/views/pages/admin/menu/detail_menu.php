<div class="main-content">
    <section class="section">
        <div class="section-header">
            <div class="section-header-back">
                <a href="<?php echo base_url('admin/data_menu') ?>" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
            </div>
            <h1>Detail menu</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="<?php echo base_url('admin/dashboard') ?>">Dashboard</a></div>
                <div class="breadcrumb-item active"><a href="<?php echo base_url('admin/data_menu') ?>">Data menu</a></div>
                <div class="breadcrumb-item">Detail menu</div>
            </div>
        </div>
    </section>
    <?php foreach ($detail as $dt) : ?>

        <div class="card">
            <div class="card-body">

                <div class="row">
                    <div class="col-md-5"><br><br>
                        <img src="<?php echo base_url() . 'assets/backend/img/upload_menu/' . $dt->foto_menu ?>" width="400px" height="400">
                    </div>
                    <div class="col-md-6">
                        <table class="table">
                            <tr>
                                <td>Nama Menu</td>
                                <td><?php echo $dt->nama_menu ?></td>
                            </tr>
                            <tr>
                                <td>Kategori</td>
                                <td><?php echo $dt->nama_kategori ?></td>
                            </tr>
                            <tr>
                                <td>Type</td>
                                <td><?php echo $dt->nama_type ?></td>
                            </tr>
                            <tr>
                                <td>Status</td>
                                <td>
                                    <?php if ($dt->status == "0") {
                                        echo "<span class='badge badge-danger'>Not Available</span>";
                                    } else {
                                        echo "<span class='badge badge-primary'>Available</span>";
                                    }
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <td>Harga Dasar</td>
                                <td><?php echo $dt->harga_dasar ?></td>
                            </tr>
                            <tr>
                                <td>Harga Jual</td>
                                <td><?php echo $dt->harga_jual ?></td>
                            </tr>
                            <tr>
                                <td>Deskripsi</td>
                                <td><?php echo $dt->deskripsi ?></td>
                            </tr>
                            <tr>
                                <td>Discount</td>
                                <td><?php echo $dt->discount ?></td>
                            </tr>
                        </table>
                        <a href="<?php echo base_url('admin/data_menu/') ?>" class="btn btn-danger ml-4">Back</a>
                        <a href="<?php echo base_url('admin/data_menu/update_menu/' . $dt->id_menu) ?>" class="btn btn-primary ml-3">Update</a>
                    </div>
                </div>
            </div>
        </div>

    <?php endforeach; ?>
</div>