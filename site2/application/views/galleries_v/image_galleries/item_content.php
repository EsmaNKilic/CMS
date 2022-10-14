<section class="main-container">
    <div class="container">
        <div class="row">

            <!-- main start -->
            <!-- ================ -->
            <div class="main col-md-12">
                <h1 class="page-title"><?php echo $gallery->title; ?></h1>
                <div class="separator-2"></div>

                <div class="row grid-space-20">

                    <?php if(!empty($images)) { ?>

                        <?php foreach ($images as $image) { ?>

                            <div class="col-3 mb-20">
                                <div class="overlay-container">
                                    <img src="<?php echo get_picture("galleries_v/images/$gallery->folder_name",$image->url, "252x156"); ?>" alt="">
                                    <a href="<?php echo get_picture("galleries_v/images/$gallery->folder_name",$image->url, "851x606"); ?>" class="overlay-link small popup-img" title="<?php echo $gallery->title; ?>">
                                        <i class="fa fa-plus"></i>
                                    </a>
                                </div>
                            </div>

                        <?php } ?>

                    <?php } else { ?>

                        <div class="col-md-12">
                            <div class="alert alert-warning text-center">
                                Üzgünüz burada herhangi bir veri bulunamadı :(
                            </div>
                        </div>

                    <?php } ?>

                    <div class="col-md-12">
                        <a href="<?php echo base_url("fotograf-galerisi"); ?>" class="btn btn-default">
                            <i class="fa fa-arrow-left"></i> Geri Dön
                        </a>

                    </div>

                </div>

            </div>
        </div>
    </div>
</section>


