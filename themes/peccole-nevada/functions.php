<?php
add_action('init', 'rem_admin_bar');
function rem_admin_bar() {
	if (!current_user_can('administrator') && !is_admin()) show_admin_bar(false);
}
?>
