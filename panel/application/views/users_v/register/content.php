<div style="margin-top: -50px;" class="simple-page-wrap">
		<div class="simple-page-logo animated swing">
			<a href="index.html">
				<span><i class="fa fa-gg"></i></span>
				<span>CMS</span>
			</a>
		</div><!-- logo -->
		<div class="simple-page-form animated flipInY" id="login-form">
	<h4 class="form-title m-b-xl text-center">CMS'e Kaydolun</h4>
	<form action="<?php echo base_url("userop/register_save"); ?>" method="post">

	<div class="form-group">
			<input id="sign-in-name" class="form-control" placeholder="Kullanıcı Adı" name="user_name">
			<?php if(isset($form_error)){ ?>
				<small class="pull-right input-form-error"> <?php echo form_error("user_name"); ?></small>
			<?php } ?>
		</div>
		<div class="form-group">
			<input id="sign-in-name2" class="form-control" placeholder="Adı Soyadı" name="full_name">
			<?php if(isset($form_error)){ ?>
				<small class="pull-right input-form-error"> <?php echo form_error("full_name"); ?></small>
			<?php } ?>
		</div>

		<div class="form-group">
			<input id="sign-in-email" type="email" class="form-control" placeholder="E-Posta" name="email">
			<?php if(isset($form_error)){ ?>
				<small class="pull-right input-form-error"> <?php echo form_error("email"); ?></small>
			<?php } ?>
		</div>

		<div class="form-group">
			<input id="sign-in-password" type="password" class="form-control" placeholder="Şifre" name="password">
			<?php if(isset($form_error)){ ?>
				<small class="pull-right input-form-error"> <?php echo form_error("password"); ?></small>
			<?php } ?>
		</div>

		<div class="form-group">
			<input id="sign-in-password2" type="password" class="form-control" placeholder="Şifre Tekrar" name="re_password">
			<?php if(isset($form_error)){ ?>
				<small class="pull-right input-form-error"> <?php echo form_error("re_password"); ?></small>
			<?php } ?>
		</div>

		<button type="submit" class="btn btn-primary">Kaydol</button>
		<a style="margin-top: 10px;" href="<?php echo base_url("login"); ?>" class="btn btn-md btn-danger">İptal</a>
	</form> 
</div><!-- #login-form -->