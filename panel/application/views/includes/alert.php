<?php
$alert = $this->session->flashdata("alert");
if($alert){
	if($alert["type"] === "success"){ ?>
		<script>
			iziToast.success({
			title: '<?php echo $alert["title"]; ?>',
			message: '<?php echo $alert["text"]; ?>',
			position : "topCenter"
		})
		</script>
	<?php } else{ ?>
		<script>
			iziToast.error({
			title: '<?php echo $alert["title"]; ?>',
			message: '<?php echo $alert["text"]; ?>',
			position : "topCenter"
		})
		</script>
	<?php } 
} ?>
<!-- normalde yok bu -->
<?php unset($_SESSION["alert"]); ?>