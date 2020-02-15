<div class="main-content">
  <section class="section">
    <div class="section-header">
      <div class="section-header-back">
        <a href="<?php echo base_url('admin/data_slider') ?>" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
      </div>
      <h1>Detail data employee</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="<?php echo base_url('admin/dashboard') ?>">Dashboard</a></div>
        <div class="breadcrumb-item active"><a href="<?php echo base_url('admin/data_slider') ?>">Data slider</a></div>
        <div class="breadcrumb-item">Edit slider</div>
      </div>
    </div>

    <div class="card">
      <div class="card-body">
        <div class="section-body">
          <h2 class="section-title">Form Edit Slider</h2>
          <p class="section-lead">
            National Polithecnic Institute Of Cambodia
          </p>

          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h4>Form Edit Slider</h4>
                </div>
                <div class="card-body">

                  <?php foreach ($slider as $slr) : ?>
                    <form method="post" action="<?php echo site_url('admin/data_slider/update_slider_aksi') ?>" enctype="multipart/form-data">

                      <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Title</label>
                        <div class="col-sm-12 col-md-7">
                          <input type="hidden" class="form-control" name="id_slider" value="<?php echo $slr->id_slider ?>">
                          <input type="text" class="form-control" name="title_slider" value="<?php echo $slr->title_slider ?>" required>
                        </div>
                      </div>

                      <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Deskription Slider</label>
                        <div class="col-sm-12 col-md-7">
                          <textarea name="deskripsi" class="form-control"><?php echo $slr->deskripsi ?></textarea>
                        </div>
                      </div>

                      <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Images</label>
                        <div class="col-sm-12 col-md-7">
                          <img src="" alt="">
                          <img src="<?php echo base_url() . 'assets/backend/img/upload_slider/' . $slr->foto_slider ?>" width="600px" height="300">
                        </div>
                      </div>

                      <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Choose To Update Images</label>
                        <div class="col-sm-12 col-md-7">
                          <input type="file" class="form-control" name="foto_slider">
                        </div>
                      </div>


                      <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                        <div class="col-sm-12 col-md-7">
                          <button type="submit" class="btn btn-primary">Update slider</button>
                          <a href="<?php echo base_url('admin/data_slider/') ?>" class="btn btn-danger ml-2">Back</a>
                        </div>
                      </div>
                    </form>
                  <?php endforeach; ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </section>
</div>