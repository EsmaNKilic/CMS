<?php $settings = get_settings(); ?>
<section class="pv-40">
    <div class="container">
        <div class="row">
            <!-- main start -->
            <!-- ================ -->
            <div class="main col-12">
                <h3 class="title"><strong class="text-default"><?php echo $settings->company_name; ?></strong></h3>
                <div class="separator-2"></div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="row">
                            <div class="col-md-12">
                                <h6 class="title"><strong class="text-default">Misyon</strong></h6>
                                <p>
                                    <?php echo character_limiter(strip_tags($settings->mission), 500); ?>
                                </p>
                            </div>
                            <div class="col-md-12">
                                <h6 class="title"><strong class="text-default">Vizyon</strong></h6>
                                <p>
                                    <?php echo character_limiter(strip_tags($settings->vision), 500); ?>
                                </p>
                            </div>

                        </div>

                    </div>

                    <div class="col-lg-6">
                        <div class="owl-carousel content-slider-with-controls">
                            <div class="overlay-container overlay-visible">
                                <img src="<?php echo base_url("assets/images");?>/construction-1.jpg" alt="">
                                <div class="overlay-bottom hidden-sm-down">
                                    <div class="text">
                                        <h3 class="title">We Create You Enjoy</h3>
                                    </div>
                                </div>
                                <a href="<?php echo base_url("assets/images");?>/construction-1.jpg" class="owl-carousel--popup-img overlay-link" title="image title"><i class="icon-plus-1"></i></a>
                            </div>
                            <div class="overlay-container overlay-visible">
                                <img src="<?php echo base_url("assets/images");?>/construction-2.jpg" alt="">
                                <div class="overlay-bottom hidden-sm-down">
                                    <div class="text">
                                        <h3 class="title">You Can Trust Us</h3>
                                    </div>
                                </div>
                                <a href="<?php echo base_url("assets/images");?>/construction-2.jpg" class="owl-carousel--popup-img overlay-link" title="image title"><i class="icon-plus-1"></i></a>
                            </div>
                            <div class="overlay-container overlay-visible">
                                <img src="<?php echo base_url("assets/images");?>/construction-3.jpg" alt="">
                                <div class="overlay-bottom hidden-sm-down">
                                    <div class="text">
                                        <h3 class="title">We Love What We Do</h3>
                                    </div>
                                </div>
                                <a href="<?php echo base_url("assets/images");?>/construction-3.jpg" class="owl-carousel--popup-img overlay-link" title="image title"><i class="icon-plus-1"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- main end -->

        </div>
    </div>
</section>