<div class="main-content">
        <section class="section">
        <?php foreach($profile as $pr) : ?>
          <div class="section-header">
            <h1>Profile <?php echo $pr->nama_resto?></h1>
          </div>
          <div class="section-body">
            <h2 class="section-title">Hey, <?php echo $pr->owner?> !</h2>
            <p class="section-lead">
              All information about Restaurant on this page.
            </p>
            <div class="row mt-sm-4">
              <div class="col-12 col-md-12 ">
                <div class="card profile-widget">
                  <div class="profile-widget-header">                     
                    <img alt="image" src="<?php echo base_url('assets/')?>img/upload_resto/default.png" class="rounded-circle profile-widget-picture" >
                    <div class="profile-widget-items">
                      <div class="profile-widget-item">
                        <div class="profile-widget-item-label">Posts</div>
                        <div class="profile-widget-item-value">187</div>
                      </div>
                      <div class="profile-widget-item">
                        <div class="profile-widget-item-label">Followers</div>
                        <div class="profile-widget-item-value">6,8K</div>
                      </div>
                      <div class="profile-widget-item">
                        <div class="profile-widget-item-label">Followers</div>
                        <div class="profile-widget-item-value">6,8K</div>
                      </div>
                      <div class="profile-widget-item">
                        <div class="profile-widget-item-label">Followers</div>
                        <div class="profile-widget-item-value">6,8K</div>
                      </div>
                      <div class="profile-widget-item">
                        <div class="profile-widget-item-label">Following</div>
                        <div class="profile-widget-item-value">2,1K</div>
                      </div>
                    </div>
                  </div>
                  <div class="profile-widget-description">
                    <div class="profile-widget-name"><?php echo $pr->owner?><div class="text-muted d-inline font-weight-normal"><div class="slash"></div>Owner Restaurant</div></div>
                    <?php echo $pr->about?>
                  </div>
                  <div class="card-footer text-center">
                    <div class="font-weight-bold mb-2">Follow <?php echo $pr->nama_resto?> on</div>
                    <?php foreach($social_media as $sm) : ?>
                      <a href="<?php echo $sm->link?>" class="btn btn-social-icon" target="blank_page">
                      <img src="<?php echo base_url(). 'assets/img/upload_social_media/'. $sm->logo_social_media ?>" width="40px" height="40"> 
                      </a>
                    <?php endforeach;?>
                  </div>
                </div>
              </div>
            </div>
            <?php endforeach; ?>
          </div>
        </section>
      </div>