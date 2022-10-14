<section class="main-container">
    <div class="container">
        <div class="row">

            <!-- main start -->
            <!-- ================ -->
            <div class="main col-md-12">

                <!-- page-title start -->
                <!-- ================ -->
                <h1 class="page-title">Resim Galerileri</h1>
                <div class="separator-2"></div>
                <div class="row">

                    <?php foreach($galleries as $gallery) { ?>

                        <div class="col-sm-4">
                            <div class="image-box shadow text-center mb-20">
                                <div class="overlay-container overlay-visible">

                                    <img
                                            src="<?php echo get_picture("galleries_v/images/$gallery->folder_name",get_gallery_cover_image($gallery->folder_name), "350x216"); ?>"
                                            alt="<?php echo $gallery->title; ?>">
                                    <a href="<?php echo base_url("fotograf-galerisi/$gallery->url"); ?>" class="overlay-link"><i class="fa fa-link"></i></a>
                                    <div class="overlay-bottom hidden-xs">
                                        <div class="text">
                                            <p class="lead margin-clear">
                                                <?php echo $gallery->title; ?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    <?php } ?>

                </div>
            </div>
        </div>
    </div>
</section>