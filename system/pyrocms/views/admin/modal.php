<!DOCTYPE html>
<html>
<head>
	<title><?php echo lang('cp_admin_title').' - '.$template['title'];?></title>
	<?php echo $template['partials']['metadata']; ?>
	<style type="text/css">
	body {
		background: none;
	}
	</style>
</head>

<body>
	<?php $this->load->view('admin/partials/notices') ?>
	<?php echo $template['body']; ?>
</body>
</html>
