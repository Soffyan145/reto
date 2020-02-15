      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <div class="section-header-back">
              <a href="<?php echo base_url('admin/setting')?>" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
            </div>
            <h1>Social Media Settings</h1>
          </div>

          <div class="section-body">
            <h2 class="section-title">Restaurant</h2>
            <p class="section-lead">
              National Polithecnic Institute Of Cambodia
            </p>

            <div id="output-status"></div>
            <div class="row">
              <div class="col-md-12">
                <form id="setting-form">
                  <div class="card" id="settings-card">
                    <div class="card-header">
                      <h4>General Settings</h4>
                    </div>
                    <div class="card-body">
                      <p class="text-muted">General settings such as, site title, site description, address and so on.</p>
                      <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nama Menu</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" class="form-control" name="nama_menu" required>
                      </div>
                      
                    </div>
                      <div class="form-group row align-items-center">
                        <label for="site-description" class="form-control col-sm-3 text-md-right">Site Description</label>
                        <div class="col-sm-6 col-md-9">
                          <textarea class="form-control" name="site_description" id="site-description"></textarea>
                        </div>
                      </div>
                      <div class="form-group row align-items-center">
                        <label class="form-control-label col-sm-3 text-md-right">Site Logo</label>
                        <div class="col-sm-6 col-md-9">
                          <div class="custom-file">
                            <input type="file" name="site_logo" class="custom-file-input" id="site-logo">
                            <label class="custom-file-label">Choose File</label>
                          </div>
                          <div class="form-text text-muted">The image must have a maximum size of 1MB</div>
                        </div>
                      </div>
                      <div class="form-group row align-items-center">
                        <label class="form-control-label col-sm-3 text-md-right">Favicon</label>
                        <div class="col-sm-6 col-md-9">
                          <div class="custom-file">
                            <input type="file" name="site_favicon" class="custom-file-input" id="site-favicon">
                            <label class="custom-file-label">Choose File</label>
                          </div>
                          <div class="form-text text-muted">The image must have a maximum size of 1MB</div>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="form-control-label col-sm-3 mt-3 text-md-right">Google Analytics Code</label>
                        <div class="col-sm-6 col-md-9">
                          <textarea class="form-control codeeditor" name="google_analytics_code"></textarea>
                        </div>
                      </div>
                    </div>
                    <div class="card-footer bg-whitesmoke text-md-right">
                      <button class="btn btn-primary" id="save-btn">Save Changes</button>
                      <button class="btn btn-secondary" type="button">Reset</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
  		    </div>
      	</section>
      </div>
      <footer class="main-footer">
        <div class="footer-left">
          Copyright &copy; 2018 <div class="bullet"></div> Design By <a href="https://nauval.in/">Muhamad Nauval Azhar</a>
        </div>
        <div class="footer-right">
          
        </div>
      </footer>
    </div>
  </div>

  <!-- General JS Scripts -->
  <script src="assets/modules/jquery.min.js"></script>
  <script src="assets/modules/popper.js"></script>
  <script src="assets/modules/tooltip.js"></script>
  <script src="assets/modules/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/modules/nicescroll/jquery.nicescroll.min.js"></script>
  <script src="assets/modules/moment.min.js"></script>
  <script src="assets/js/stisla.js"></script>
  
  <!-- JS Libraies -->
  <script src="assets/modules/codemirror/lib/codemirror.js"></script>
  <script src="assets/modules/codemirror/mode/javascript/javascript.js"></script>

  <!-- Page Specific JS File -->
  <script src="assets/js/page/features-setting-detail.js"></script>
  
  <!-- Template JS File -->
  <script src="assets/js/scripts.js"></script>
  <script src="assets/js/custom.js"></script>
</body>
</html>