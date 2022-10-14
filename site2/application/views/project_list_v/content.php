<!-- ================ -->
<section class="main-container">

    <div class="container">
        <div class="row">

            <!-- main start -->
            <!-- ================ -->
            <div class="main col-12">

                <!-- page-title start -->
                <!-- ================ -->
                <h1 class="page-title">Proje Listesi</h1>
                <div class="separator-2"></div>
                <!-- page-title end -->
                <p class="lead">Bakabileceğiniz projelerimiz</p>

                <?php $index = 0; ?>
                <?php foreach($projects as $project) { ?>

                    <div class="image-box style-4 light-gray-bg">
                        <div class="row grid-space-0">

                            <?php if(($index % 2) == 0) { ?>

                                <div class="col-lg-6">
                                    <div class="overlay-container">
                                        <img src="<?php echo base_url("panel/uploads/project_v/$project->img_url");?>" alt="<?php echo $project->title; ?>">
                                        <div class="overlay-to-top">
                                            <p class="small margin-clear"><em><?php echo $project->title; ?></em></p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="body">
                                        <div class="pv-30 hidden-lg-down"></div>
                                        <h3><?php echo $project->title; ?></h3>
                                        <div class="separator-2"></div>
                                        <p class="margin-clear"><?php echo character_limiter(strip_tags($project->description), 400); ?></p>
                                        <br>
<!--                                    <a href="#" class="btn btn-default btn-sm btn-hvr hvr-shutter-out-horizontal margin-clear">Read More<i class="fa fa-arrow-right pl-10"></i></a>-->
                                    </div>
                                </div>

                            <?php } else { ?>

                                <div class="col-lg-6">
                                    <div class="body">
                                        <div class="pv-30 hidden-lg-down"></div>
                                        <h3><?php echo $project->title; ?></h3>
                                        <div class="separator-2"></div>
                                        <p class="margin-clear"><?php echo character_limiter(strip_tags($project->description), 400); ?></p>
                                        <br>
                                    
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="overlay-container">
                                        <img src="<?php echo base_url("panel/uploads/project_v/$project->img_url");?>" alt="<?php echo $project->title; ?>">
                                        <div class="overlay-to-top">
                                            <p class="small margin-clear"><em><?php echo $project->title; ?></em></p>
                                        </div>
                                    </div>
                                </div>

                            <?php } ?>


                            <?php $index++; ?>


                        </div>
                    </div>

                <?php } ?>

            </div>
            <!-- main end -->

        </div>
    </div>
</section>
<!-- main-container end -->
