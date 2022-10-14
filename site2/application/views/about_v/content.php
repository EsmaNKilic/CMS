<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Monoton&family=Rock+Salt&family=Zen+Tokyo+Zoo&display=swap" rel="stylesheet">
<!-- banner start -->
<!-- ================ -->
<div class="banner dark-translucent-bg" style="background-image:url('<?php echo base_url("assets/images");?>/page-about-banner-5.jpg'); background-position: 50% 27%;">
    <!-- breadcrumb start -->
    <!-- ================ -->
<!--    <div class="breadcrumb-container">-->
<!--        <div class="container">-->
<!--            <ol class="breadcrumb">-->
<!--                <li><i class="fa fa-home pr-10"></i><a class="link-dark" href="index.html">Home</a></li>-->
<!--                <li class="active">Page About</li>-->
<!--            </ol>-->
<!--        </div>-->
<!--    </div>-->
    <!-- breadcrumb end -->
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center col-md-offset-2 pv-20">
                <h3 class="title logo-font object-non-visible" style="font-family: 'Zen Tokyo Zoo', cursive; font-size: 35px; " data-animation-effect="fadeIn" data-effect-delay="100"><?php echo $settings->company_name; ?></h3>
                <div class="separator object-non-visible mt-10" data-animation-effect="fadeIn" data-effect-delay="100"></div>
                <p class="text-center object-non-visible" data-animation-effect="fadeIn" data-effect-delay="100">
                    <?php echo character_limiter(strip_tags($settings->about_us), 200); ?>
                </p>
            </div>
        </div>
    </div>
</div>
<!-- banner end -->

<!-- main-container start -->
<!-- ================ -->
<section class="main-container padding-bottom-clear">

    <div class="container">
        <div class="row">

            <!-- main start -->
            <!-- ================ -->
            <div class="main col-md-12">
                <h3 class="title"><strong><?php echo $settings->company_name; ?></strong> hakkında?</h3>
                <div class="separator-2"></div>
                <div class="row">
                    <div class="col-md-12">
                        <p>
                            <?php echo $settings->about_us; ?>
                        </p>
                    </div>
                </div>
            </div>
            <!-- main end -->

        </div>
    </div>

    <!-- section start -->
    <!-- ================ -->
    <div class="section light-gray-bg">
        <div class="container">
            <h3>Neden bizi <strong>seçmelisiniz?</strong></h3>
            <div class="separator-2"></div>
            <div class="row">
                <!-- accordion start -->
                <!-- ================ -->
                <div class="col-md-12">
                
                    <div id="accordion-2" class="collapse-style-2" role="tablist" aria-multiselectable="true">
                        <div class="card">
                            <div class="card-header" role="tab" id="headingOne-2">
                                <h4 class="mb-0">
                                    <a data-toggle="collapse" data-parent="#accordion-2" href="#collapseOne-2" aria-expanded="true" aria-controls="collapseOne-2">
                                        <i class="fa fa-check pr-10"></i>Misyon
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseOne-2" class="collapse show" role="tabpanel" aria-labelledby="headingOne-2">
                                <div class="card-block">
                                    <?php echo strip_tags($settings->mission); ?>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" role="tab" id="headingTwo-2">
                                <h4 class="mb-0">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion-2" href="#collapseTwo-2" aria-expanded="false" aria-controls="collapseTwo-2">
                                        <i class="fa fa-check pr-10"></i>Vizyon
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseTwo-2" class="collapse" role="tabpanel" aria-labelledby="headingTwo-2">
                                <div class="card-block">
                                    <?php echo strip_tags($settings->vision); ?>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
                <!-- accordion end -->
            </div>
            <!-- clients start -->
        </div>
    </div>
    <!-- section end -->

</section>
<!-- main-container end -->

