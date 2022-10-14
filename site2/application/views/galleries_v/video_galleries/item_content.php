<section class="main-container">
    <div class="container">
        <div class="row">

            <!-- main start -->
            <!-- ================ -->
            <div class="main col-md-12">
                <h1 class="page-title"><?php echo $gallery->title; ?></h1>
                <div class="separator-2"></div>

                <div class="row grid-space-20">

                    <?php if(!empty($videos)) { ?>

                        <?php foreach ($videos as $video) { ?>

                            <div class="col-3 mb-20">
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe class="embed-responsive-item" src="//www.youtube.com/embed/<?php echo $video->url; ?>"></iframe>
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
                        <a href="<?php echo base_url("video-galerisi"); ?>" class="btn btn-default">
                            <i class="fa fa-arrow-left"></i> Geri Dön
                        </a>

                    </div>

                </div>

            </div>
        </div>
    </div>
</section>


