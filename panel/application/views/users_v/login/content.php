<div class="simple-page-wrap">
		<div class="simple-page-logo animated swing">
			<a href="index.html">
				<span><i class="fa fa-gg"></i></span>
				<span>CMS</span>
			</a>
		</div><!-- logo -->
		<div class="simple-page-form animated flipInY" id="login-form">
	<h4 class="form-title m-b-xl text-center">Bilgilerinizle CMS'e Giriş Yapın</h4>
	<form action="<?php echo base_url("userop/do_login"); ?>" method="post">
		<div class="form-group">
			<input id="sign-in-email" type="email" class="form-control" placeholder="E-Posta" name="user_email">
			<?php if(isset($form_error)){ ?>
				<small class="pull-right input-form-error"> <?php echo form_error("user_email"); ?></small>
			<?php } ?>
		</div>

		<div class="form-group">
			<input id="sign-in-password" type="password" class="form-control" placeholder="Şifre" name="user_password">
			<?php if(isset($form_error)){ ?>
				<small class="pull-right input-form-error"> <?php echo form_error("user_password"); ?></small>
			<?php } ?>
		</div>

		<button type="submit" class="btn btn-primary">GİRİŞ YAP</button>
		<button style="margin-top: 10px;" type="submit" class="btn btn-light"><a href="<?php echo base_url("register"); ?>"><small style="color: black;">Kaydınız Yok mu?</small><br>Kayıt Ol</a></button>
	</form> 
</div><!-- #login-form -->

<div class="simple-page-footer">
	<p><a href="<?php echo base_url("sifremi-unuttum");?>">Şifremi unuttum ?</a></p>

	

</div><!-- .simple-page-footer -->


	</div><!-- .simple-page-wrap -->