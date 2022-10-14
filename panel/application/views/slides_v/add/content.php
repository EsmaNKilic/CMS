<div class="row">
    <div class="col-md-12">
        <h4 class="m-b-lg">
            Yeni Slayt Ekle
        </h4>
    </div><!-- END column -->
    <div class="col-md-12">
        <div class="widget">
            <div class="widget-body">
                <form action="<?php echo base_url("slides/save"); ?>" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>Başlık</label>
                        <input class="form-control" placeholder="Başlık" name="title">
                        <?php if(isset($form_error)){ ?>
                            <small class="pull-right input-form-error"> <?php echo form_error("title"); ?></small>
                        <?php } ?>
                    </div>
                    <div class="form-group">
                        <label>Açıklama</label>
                        <textarea name="description" class="m-0" data-plugin="summernote" data-options="{height: 250}"></textarea>
                    </div>

                        <div class="form-group image_upload_container">
                            <label>Görsel Seçiniz</label>
                            <input type="file" name="img_url" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>Buton Kullanımı</label><br>
                            <input
                                class="form-control button_usage_btn"
                                type="checkbox"
                                data-switchery
                                name="allowButton"
                                data-color="#f39e33"
                            />
                        </div>

                        <div class="button-information-container">
                            <div class="form-group">
                                <label>Buton Başlık</label>
                                <input class="form-control" placeholder="Buton üstündeki yazı" name="button_caption">
                                <?php if(isset($form_error)){ ?>
                                    <small class="pull-right input-form-error"> <?php echo form_error("button_caption"); ?></small>
                                <?php } ?>
                            </div>
                            <div class="form-group">
                                <label>URL Bilgisi</label>
                                <input class="form-control" placeholder="Butona basıldığında gidilecek olan URL bilgisi" name="button_url">
                                <?php if(isset($form_error)){ ?>
                                    <small class="pull-right input-form-error"> <?php echo form_error("button_url"); ?></small>
                                <?php } ?>
                            </div>
                        </div>
                        
                    <button type="submit" class="btn btn-primary btn-md btn-outline">Kaydet</button>
                    <a href="<?php echo base_url("slides"); ?>" class="btn btn-md btn-danger btn-outline">İptal</a>
                </form>
            </div><!-- .widget-body -->
        </div><!-- .widget -->
    </div><!-- END column -->
</div>