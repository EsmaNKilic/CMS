<div role="tabpanel" class="tab-pane fade" id="tab-5">
    <div class="row">

            <div class="form-group col-md-4">
                <label>E-posta Adresiniz</label><i class="zmdi zmdi-email zmdi-hc-2x" style="position: relative; left: 250px;"></i>
                <input class="form-control" placeholder="Şirketinize ait e-posta adresi"
                   name="email"
                   value="<?php echo isset($form_error) ? set_value("email") : ""; ?>">
            <?php if (isset($form_error)) { ?>
                <small
                    class="pull-right input-form-error"> <?php echo form_error("email"); ?></small>
            <?php } ?></div>
        
            <div class="form-group col-md-4">
                <label>GitHub</label><i class="zmdi zmdi-github-box zmdi-hc-2x" style="position: relative; left: 320px;"></i>
                <input class="form-control" placeholder="GitHub Adresiniz"
                name="github">
            </div>
       
    </div>

    <div class="row">

        <div class="form-group col-md-4">
            <label>Facebook</label><i class="zmdi zmdi-facebook-box zmdi-hc-2x" style="position: relative; left: 300px;"></i>
            <input class="form-control" placeholder="Facebook Adresiniz"
            name="facebook">
        </div>

        <div class="form-group col-md-4">
            <label>Twitter</label><i class="zmdi zmdi-twitter-box zmdi-hc-2x" style="position: relative; left: 320px;"></i>
            <input class="form-control" placeholder="Twitter Adresiniz"
                   name="twitter">
        </div>

    </div>

    <div class="row">

        <div class="form-group col-md-4">
            <label>Instagram</label><i class="zmdi zmdi-instagram zmdi-hc-2x" style="position: relative; left: 300px;"></i>
            <input class="form-control" placeholder="Instagram Adresiniz"
                   name="instagram">
        </div>

        <div class="form-group col-md-4">
            <label>Linkedin</label><i class="zmdi zmdi-linkedin-box zmdi-hc-2x" style="position: relative; left: 310px;"></i>
            <input class="form-control" placeholder="Linkedin Adresiniz"
                   name="linkedin">
        </div>

    </div>



</div><!-- .tab-pane  -->