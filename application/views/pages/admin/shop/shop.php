<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <?php foreach ($menu as $mn) : ?>
                <div class="card" style="width: 18rem;">
                    <img src="<?php echo base_url() . 'assets/backend/img/upload_menu/' . $mn->foto_menu ?>" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $mn->nama_menu ?></h5>
                        <h6 class="card-title"><?php echo $mn->harga_jual ?></h6>
                        <p class="card-text"><?php echo $mn->deskripsi ?></p>
                        <a href="<?= base_url() . 'admin/data_shop/add_cart/', $mn->id_menu ?>">
                            <button class="btn btn-primary">Add To Cart</button>
                        </a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <div class="section-body">
        </div>
    </section>
</div>