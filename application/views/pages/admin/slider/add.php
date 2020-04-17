<div class="main-content">
  <section class="section">
    <div class="section-header">
      <div class="section-header-back">
        <a href="<?php echo base_url('a/slider') ?>" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
      </div>
      <h1>Detail data employee</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="<?php echo base_url('a/dashboard') ?>">Dashboard</a></div>
        <div class="breadcrumb-item active"><a href="<?php echo base_url('a/slider') ?>">Data slider</a></div>
        <div class="breadcrumb-item">Add slider</div>
      </div>
    </div>

    <div class="card">
      <div class="card-body">
        <div class="section-body">
          <h2 class="section-title">Create New Slider</h2>
          <p class="section-lead">
            National Polithecnic Institute Of Cambodia
          </p>

          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h4>Form Add Slider</h4>
                </div>
                <div class="card-body">

                  <form method="post" action="<?php echo site_url('admin/data_slider/add_action') ?>" enctype="multipart/form-data">

                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Title Slider</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" class="form-control" name="title_slider" required>
                      </div>
                    </div>

                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Deskription Slider</label>
                      <div class="col-sm-12 col-md-7">
                        <textarea name="deskripsi" class="form-control"></textarea>
                      </div>
                    </div>

                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Foto Slider</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="file" class="form-control" name="img">
                      </div>
                    </div>


                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                      <div class="col-sm-12 col-md-7">
                        <button type="submit" class="btn btn-primary">Create Slider</button>
                        <a href="<?php echo base_url('admin/data_slider') ?>" class="btn btn-danger ml-2">Back</a>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </section>
</div>