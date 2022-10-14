<?php $settings = get_settings(); ?>

<div class="header-top colored">
    <div class="container">
        <div class="row">
            <div class="col-2 col-md-5">
                <!-- header-top-first start -->
                <!-- ================ -->
                <div class="header-top-first clearfix">
                    <ul class="social-links circle small clearfix hidden-sm-down">

                    <?php if(!empty($settings->facebook)){ ?>
                                    <li class="facebook"><a target="_blank" href="<?php echo $settings->facebook; ?>"><i class="fa fa-facebook"></i></a></li>
                                <?php } ?>
                                <?php if(!empty($settings->twitter)){ ?>
                                    <li class="twitter"><a target="_blank" href="<?php echo $settings->twitter; ?>"><i class="fa fa-twitter"></i></a></li>
                                <?php } ?>
                                <?php if(!empty($settings->instagram)){ ?>
                                    <li class="instagram"><a target="_blank" href="<?php echo $settings->instagram; ?>"><i class="fa fa-instagram"></i></a></li>
                                <?php } ?>
                                <?php if(!empty($settings->linkedin)){ ?>
                                    <li class="linkedin"><a target="_blank" href="<?php echo $settings->linkedin; ?>"><i class="fa fa-linkedin"></i></a></li>
                                <?php } ?>
                                <?php if(!empty($settings->github)){ ?>
                                    <li class="github"><a target="_blank" href="<?php echo $settings->github; ?>"><i class="fa fa-github"></i></a></li>
                                <?php } ?>

                    </ul>
                    <div class="social-links hidden-md-up circle small">
                        <div class="btn-group dropdown">
                            <button id="header-top-drop-1" type="button" class="btn dropdown-toggle dropdown-toggle--no-caret" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-share-alt"></i></button>
                            <ul class="dropdown-menu dropdown-animation" aria-labelledby="header-top-drop-1">
                            <?php if(!empty($settings->facebook)){ ?>
                                    <li class="facebook"><a target="_blank" href="<?php echo $settings->facebook; ?>"><i class="fa fa-facebook"></i></a></li>
                                <?php } ?>
                                <?php if(!empty($settings->twitter)){ ?>
                                    <li class="twitter"><a target="_blank" href="<?php echo $settings->twitter; ?>"><i class="fa fa-twitter"></i></a></li>
                                <?php } ?>
                                <?php if(!empty($settings->instagram)){ ?>
                                    <li class="instagram"><a target="_blank" href="<?php echo $settings->instagram; ?>"><i class="fa fa-instagram"></i></a></li>
                                <?php } ?>
                                <?php if(!empty($settings->linkedin)){ ?>
                                    <li class="linkedin"><a target="_blank" href="<?php echo $settings->linkedin; ?>"><i class="fa fa-linkedin"></i></a></li>
                                <?php } ?>
                                <?php if(!empty($settings->github)){ ?>
                                    <li class="github"><a target="_blank" href="<?php echo $settings->github; ?>"><i class="fa fa-github"></i></a></li>
                                <?php } ?>

                            </ul>
                        </div>
                    </div>
                </div>
                <!-- header-top-first end -->
            </div>
            <div class="col-10 col-md-7">

                <!-- header-top-second start -->
                <!-- ================ -->
                <div id="header-top-second"  class="clearfix text-right">
                    <ul class="list-inline">
                        <li class="list-inline-item"><i class="fa fa-phone pr-1 pl-10"></i><?php echo $settings->phone_1; ?></li>
                        <li class="list-inline-item"><i class="fa fa-envelope-o pr-1 pl-10"></i> <?php echo $settings->email; ?></li>
                    </ul>
                </div>
                <!-- header-top-second end -->

            </div>
        </div>
    </div>
</div>