<?php
$resto = $this->db->get('resto')->row_array();
?>
<!--HHOME SLIDER AREA-->
<div class="slider-area">
    <div class="pogoSlider">
        <div class="pogoSlider-slide" data-transition="fade" data-duration="1500" style="background:url(<?php echo base_url('assets/frontend/img/slider/slide_1.jpg') ?>) no-repeat scroll 0 0 / cover;">
            <h2 class="pogoSlider-slide-element" data-in="slideDown" data-out="flipX" data-duration="700">Welcome to</h2>
            <h1 class="pogoSlider-slide-element" data-in="expand" data-out="flipX" data-duration="1500"><span>Dawat</span> Cafe & Restaurant</h1>
            <h3 class="pogoSlider-slide-element" data-in="slideUp" data-out="flipX" data-duration="700"><a href="#reservation-form-modal" data-toggle="modal">Reservation Now</a></h3>
        </div>
        <div class="pogoSlider-slide" data-transition="fade" style="background:url(<?php echo base_url('assets/frontend/img/slider/slide_2.jpg') ?>) no-repeat scroll 0 0 / cover;">
            <h2 class="pogoSlider-slide-element" data-in="slideDown" data-out="flipX" data-duration="700">Our menus</h2>
            <h1 class="pogoSlider-slide-element" data-in="expand" data-out="flipX" data-duration="1500">See What's <span>new</span> today</h1>
            <h3 class="pogoSlider-slide-element" data-in="slideUp" data-out="flipX" data-duration="700"><a href="#menu">Todays Menu</a></h3>
        </div>
        <div class="pogoSlider-slide" data-transition="fade" style="background:url(<?php echo base_url('assets/frontend/img/slider/slide_3.jpg') ?>) no-repeat scroll 0 0 / cover;">
            <h2 class="pogoSlider-slide-element" data-in="slideDown" data-out="flipX" data-duration="700">Get ready</h2>
            <h1 class="pogoSlider-slide-element" data-in="expand" data-out="flipX" data-duration="1500">to <span>Join</span> with us</h1>
            <h3 class="pogoSlider-slide-element" data-in="slideUp" data-out="flipX" data-duration="700"><a href="#reservation-form-modal" data-toggle="modal">Book A Table</a></h3>
            </a>
        </div>
    </div>
    <!--HOME SLIDER AREA END-->

    </header>
    <!--END TOP AREA-->

    <!--ABOUT AREA-->
    <section class="about-area section-padding" id="about">
        <div class="container wow fadeIn">
            <div class="row">
                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                    <div class="area-title text-center">
                        <h2>Our Story</h2>
                    </div>
                </div>
                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                    <div class="about-content">
                        <p><?php echo $resto['about']; ?></p>
                    </div>
                </div>
                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                    <div class="about-author-sign text-center">
                        <img src="<?= base_url('assets/frontend/img/about/about_sign.png') ?>" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--ABOUT AREA END-->

    <!--SPEACIAL PROMOTIONS AREA-->
    <section class="promotions-area section-padding" id="promotion">
        <div class="promotion-area-bg" data-stellar-background-ratio="0.6"></div>
        <div class="container wow fadeIn">
            <div class="row">
                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                    <div class="area-title text-center">
                        <h2>Special Package</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="menu-discount-offer col-md-12 col-lg-12 col-sm-12 col-xs-12">
                    <div class="single-promotions">
                        <div class="promotions-img">
                            <img src="<?= base_url('assets/frontend/img/promotions/promo_slide_1.jpg') ?>" alt="">
                        </div>
                        <div class="promotions-details">
                            <h3>40% off for 9'' - 12'' pizza - Wed, Thu, Friday only</h3>
                            <p>Pizza 12 inch + 1 Side Dish + 1,5L Coke Bottle Only From 209,000</p>
                            <a href="#" class="read-more">Order now</a>
                        </div>
                    </div>
                    <div class="single-promotions">
                        <div class="promotions-img">
                            <img src="<?= base_url('assets/frontend/img/promotions/promo_slide_2.jpg') ?>" alt="">
                        </div>
                        <div class="promotions-details">
                            <h3>40% off for 9'' - 12'' pizza - Wed, Thu, Friday only</h3>
                            <p>Pizza 12 inch + 1 Side Dish + 1,5L Coke Bottle Only From 209,000</p>
                            <a href="#" class="read-more">Order now</a>
                        </div>
                    </div>
                    <div class="single-promotions">
                        <div class="promotions-img">
                            <img src="<?= base_url('assets/frontend/img/promotions/promo_slide_3.jpg') ?>" alt="">
                        </div>
                        <div class="promotions-details">
                            <h3>40% off for 9'' - 12'' pizza - Wed, Thu, Friday only</h3>
                            <p>Pizza 12 inch + 1 Side Dish + 1,5L Coke Bottle Only From 209,000</p>
                            <a href="#" class="read-more">Order now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--SPEACIAL PROMOTIONS AREA END-->

    <!--MENUS AREA-->
    <section class="menus-area section-padding" id="menu">
        <div class="container wow fadeIn">
            <div class="row">
                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                    <div class="area-title text-center">
                        <h2>Today’s menu</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                    <div class="food-menu-list-menu">
                        <ul>
                            <li class="filter active" data-filter="all">All</li>
                            <?php foreach ($kategori as $kt) : ?>
                                <li class="filter" data-filter=".snacks"><?php echo $kt->nama_kategori  ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row food-menu-list">
                <?php foreach ($menu as $mn) : ?>
                    <div class="mix col-md-6 col-lg-6 col-sm-12 col-xs-12 single-menu breakfast coffee snacks">
                        <div class="single-menu-details">
                            <div class="food-menu-img"><img src="<?php echo base_url() . 'assets/backend/img/upload_menu/' . $mn->foto_menu ?>" style="background-size:cover"></div>
                            <div class="food-menu-details">
                                <h3><?php echo $mn->nama_menu ?><span class="menu-price"><?php echo $mn->harga_jual ?></span></h3>
                                <p><?php echo $mn->nama_kategori ?></p>
                                <h4><?php echo $mn->deskripsi ?></h4>
                                <br>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <!--MENUS AREA END-->

    <!--RESERVATION BUTTON AREA-->
    <section class="reservation-button-area section-padding" id="reservation-button">
        <div class="reservation-button-area-bg" data-stellar-background-ratio="0.6"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                    <div class="resarvation-from-button text-center wow fadeIn">
                        <h2>Book A table Now !</h2>
                        <a href="#reservation-form-modal" class="reservation-button" data-toggle="modal">Book Now</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                    <!-- RESERVATION FORM MODAL -->
                    <div class="modal fade" id="reservation-form-modal" tabindex="-1" role="dialog">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title">Table Booking Reservation Form</h4>
                                </div>
                                <div class="modal-body">
                                    <div class="reservation-form">
                                        <form action="#" class="table-booking-form" id="reservation">
                                            <div class="row">
                                                <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
                                                    <label for="name"><i class="fa fa-user-o"></i></label>
                                                    <input type="text" name="name" id="name" placeholder="Name...">
                                                </div>
                                                <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
                                                    <label for="email"><i class="fa fa-at"></i></label>
                                                    <input type="email" name="email" id="email" placeholder="Email...">
                                                </div>
                                                <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
                                                    <label for="mobile"><i class="fa fa-phone"></i></label>
                                                    <input type="text" name="mobile" id="mobile" placeholder="Mobile...">
                                                </div>
                                                <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
                                                    <label for="date"><i class="fa fa-calendar"></i></label>
                                                    <input type="text" name="date" id="date" data-select="datepicker" placeholder="Date...">
                                                </div>
                                                <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
                                                    <label for="time"><i class="fa fa-clock-o"></i></label>
                                                    <input type="text" id="time" placeholder="Time...">
                                                </div>
                                                <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
                                                    <label for="person"><i class="fa fa-user"></i></label>
                                                    <select name="person" id="person">
                                                        <option value="2">2 Person</option>
                                                        <option value="3">3 Person</option>
                                                        <option value="4">4 Person</option>
                                                        <option value="5">5 Person</option>
                                                        <option value="6">6 Person</option>
                                                        <option value="7">7 Person</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-6 col-lg-6 col-sm-6 col-sm-offset-3  col-md-offset-3  col-lg-offset-3 col-xs-12">
                                                    <button type="submit">book a table</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- RESERVATION FORM MODAL -->
                </div>
            </div>
        </div>
    </section>
    <!--RESERVATION BUTTON AREA END-->

    <!--TEAM AREA-->
    <section class="team-area section-padding" id="team">
        <div class="container wow fadeIn">
            <div class="row">
                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                    <div class="area-title text-center">
                        <h2>Our chefs</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 team-slider">
                    <div class="single-team-member text-center">
                        <div class="team-member-img ">
                            <img src="<?= base_url('assets/frontend/img/team/team-1.jpg') ?>" alt="">
                            <div class="member-social-bookmark">
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-behance"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="member-details">
                            <h3>Mark Angelila</h3>
                            <p>Cras senunc massa quisque tempor dolor sit amet </p>
                        </div>
                    </div>
                    <div class="single-team-member text-center">
                        <div class="team-member-img ">
                            <img src="<?= base_url('assets/frontend/img/team/team-2.jpg') ?>" alt="">
                            <div class="member-social-bookmark">
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-behance"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="member-details">
                            <h3>Angel Meskat</h3>
                            <p>Cras senunc massa quisque tempor dolor sit amet </p>
                        </div>
                    </div>
                    <div class="single-team-member text-center">
                        <div class="team-member-img ">
                            <img src="<?= base_url('assets/frontend/img/team/team-3.jpg') ?>" alt="">
                            <div class="member-social-bookmark">
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-behance"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="member-details">
                            <h3>Jon Doe</h3>
                            <p>Cras senunc massa quisque tempor dolor sit amet </p>
                        </div>
                    </div>
                    <div class="single-team-member text-center">
                        <div class="team-member-img ">
                            <img src="<?= base_url('assets/frontend/img/team/team-4.jpg') ?>" alt="">
                            <div class="member-social-bookmark">
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-behance"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="member-details">
                            <h3>Angel Di Maria</h3>
                            <p>Cras senunc massa quisque tempor dolor sit amet </p>
                        </div>
                    </div>
                    <div class="single-team-member text-center">
                        <div class="team-member-img ">
                            <img src="<?= base_url('assets/frontend/img/team/team-5.jpg') ?>" alt="">
                            <div class="member-social-bookmark">
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-behance"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="member-details">
                            <h3>Park Ji Sung</h3>
                            <p>Cras senunc massa quisque tempor dolor sit amet </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--TEAM AREA END-->

    <!--BLOG AREA-->
    <section class="blog-area section-padding" id="blog">
        <div class="blog-area-bg" data-stellar-background-ratio="0.6"></div>
        <div class="container wow fadeIn">
            <div class="row">
                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                    <div class="area-title text-center">
                        <h2>Latest News</h2>
                    </div>
                </div>
            </div>
            <div class="row post-slider">
                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                    <div class="single-post text-center">
                        <div class="blog-post-img ">
                            <img src="<?= base_url('assets/frontend/img/blog/blog-3.jpg') ?>" alt="">
                        </div>
                        <div class="post-details">
                            <h3><a href="single-blog.html">Recieved first day first reservation</a></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias itaque eaque deserunt atque laborum ex ad facilis praesentium placeat tenetur.</p>
                            <p class="post-meta"><a href="#">24 February, 2017</a> - <a href="#">5 Comments</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                    <div class="single-post text-center">
                        <div class="blog-post-img ">
                            <img src="<?= base_url('assets/frontend/img/blog/blog-1.jpg') ?>" alt="">
                        </div>
                        <div class="post-details">
                            <h3><a href="single-blog.html">Home to get your home delevery ?</a></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias itaque eaque deserunt atque laborum ex ad facilis praesentium placeat tenetur.</p>
                            <p class="post-meta"><a href="#">24 February, 2017</a> - <a href="#">5 Comments</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                    <div class="single-post text-center">
                        <div class="blog-post-img ">
                            <img src="<?= base_url('assets/frontend/img/blog/blog-2.jpg') ?>" alt="">
                        </div>
                        <div class="post-details">
                            <h3><a href="single-blog.html">Restaurant welcome day meetup</a></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias itaque eaque deserunt atque laborum ex ad facilis praesentium placeat tenetur.</p>
                            <p class="post-meta"><a href="#">24 February, 2017</a> - <a href="#">5 Comments</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--BLOG AREA END-->

    <!--INSTAGRAM GALLERY FEED-->
    <section class="gallery-area section-padding" id="gallery">
        <div class="container wow fadeIn">
            <div class="row">
                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                    <div class="area-title text-center">
                        <h2>Gallery</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                    <div class="instagram-feed-content text-center">
                        <div class="instagram" id="instagram"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--INSTAGRAM GALLERY FEED END-->

    <!--FOOER AREA-->