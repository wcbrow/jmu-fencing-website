</div>
<div id="footer">
	All content &copy; <?php echo date('Y'); ?> JMU Fencing Club. | <a href="<?php echo SITEURL . '/admin/'; ?>">Admin Area</a>
	<?php if(logged_in()) { echo ' | <a href="' . SITEURL . '/logout.php">Logout</a>'; } ?>
</div>
</body>
</html>