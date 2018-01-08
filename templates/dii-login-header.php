<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

global $action;

if( $action == 'login' ) {
	$title = 'Please Sign In';
	$sub_heading = '';
} else {
	$title = 'Password Reset';
	$sub_heading = '';
}
?>

<div class="dii-head">
	<div class="dii-logo">
		<img src="<?php echo get_option("wc_pip_company_logo"); ?>">
	</div>
	<div class="title"><?php echo $title; ?></div>
	<div class="sub-heading"><?php echo $sub_heading; ?></div>
</div>