      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Dashboard</h1>
          </div>
          <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-primary">
                  <a href="<?php echo base_url('a/food') ?>">
                    <img src="<?php echo base_url('assets/backend') ?>/assets/logo/food.png" height="60px" width="60px">
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Total Menu</h4>
                  </div>
                  <div class="card-body">
                    <?php echo $count_menu ?>
                  </div>
                  </a>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-danger">
                  <a href="<?php echo base_url('a/food_not_available') ?>">
                    <img src="<?php echo base_url('assets/backend') ?>/assets/logo/food_not_availeble.png" height="70px" width="70px">
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Menu Not Available</h4>
                  </div>
                  <div class="card-body">
                    <?php echo $count_menu_not_available ?>
                  </div>
                  </a>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-warning">
                  <a href="<?php echo base_url('a/transaction') ?>">
                    <img src="<?php echo base_url('assets/backend') ?>/assets/logo/transaction.svg" height="60px" width="60px">
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Transaction</h4>
                  </div>
                  <div class="card-body">
                    1,201
                  </div>
                  </a>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-success">
                  <img src="<?php echo base_url('assets/backend') ?>/assets/logo/reservation.svg" height="60px" width="60px">
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Reservation</h4>
                  </div>
                  <div class="card-body">
                    47
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-success">
                  <img src="<?php echo base_url('assets/backend') ?>/assets/logo/food.png" height="60px" width="60px">
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Total User</h4>
                  </div>
                  <div class="card-body">
                    <?php echo $count_user ?>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-info">
                  <img src="<?php echo base_url('assets/backend') ?>/assets/logo/food.png" height="60px" width="60px">
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Total Employee</h4>
                  </div>
                  <div class="card-body">
                    <?php echo $count_employee ?>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-secondary">
                  <a href="<?php echo base_url('a/table') ?>">
                    <img src="<?php echo base_url('assets/backend') ?>/assets/logo/food.png" height="60px" width="60px">
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Total Table</h4>
                  </div>
                  <div class="card-body">
                    <?php echo $count_menu ?>
                  </div>
                  </a>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-primary">
                  <a href="<?php echo base_url('a/slider') ?>">
                    <img src="<?php echo base_url('assets/backend') ?>/assets/logo/food.png" height="60px" width="60px">
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Total Slider</h4>
                  </div>
                  <div class="card-body">
                    <?php echo $count_slider ?>
                  </div>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>