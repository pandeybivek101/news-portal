<!DOCTYPE html>
<html>
<head>
	<title><?= $title  ?></title>
</head>
<body>
	<nav>
		<?php echo anchor('index.php/welcome/index', 'Dashboard') ?>
		<?php echo anchor('index.php/page/view/about', 'About') ?>
		<?php echo anchor('index.php/page/view/service', 'Service') ?>
		<?php echo anchor('index.php/page/view/contact', 'Contact') ?>
		<?php if($this->session->userdata('username')): ?>
		<?php echo anchor('index.php/users/logout', 'Logout') ?>
		<?php echo anchor('index.php/users/profile', 'Profile') ?>
		<?php echo anchor('index.php/users/changepassword', 'Change Password') ?>
		<p><?= $this->session->userdata('username') ?></p>
		<?php else: ?>
			<?php echo anchor('index.php/users/login', 'Login') ?>
		<?php endif ?>
	</nav>

