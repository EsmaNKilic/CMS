<?php $settings = get_settings(); ?>
<section class="section clearfix">
    <div class="container">
        <div class="row justify-content-lg-center">
            <div class="col-lg-8 text-center">
                <h2 class="mt-4">Bizi Neden <strong>Seçmelisiniz?</strong></h2>
                <div class="separator"></div>
                <p>
                    <?php echo $settings->homepage_references_description; ?>
                </p>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="clients-container">
                    <div class="clients">
                        <?php foreach($references as $reference) { ?>
                            <div class="client-image object-non-visible" data-animation-effect="fadeIn" data-effect-delay="100">
                                <a href="#">
                                    <img
                                            src="<?php echo get_picture("references_v", $reference->img_url, "80x80"); ?>"
                                            alt="<?php echo $reference->title; ?>"
                                    >
                                </a>
                            </div>
                        <?php } ?>
                    </div>
                </div>
                <div class="separator"></div>
            </div>
        </div>
    </div>
</section>