<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$content_skin_url.'/style.css">', 0);

?>

<!-- ============================================================== -->
<!-- Container -->
<!-- ============================================================== -->
<div class="container <?php echo $theme_config['margin_content_top']; ?>">
    <div class="row">
	    <?php if ( $theme_config['use_sidebar'] == 'left' && (!$theme_config['ignore_sidebar'] || !in_array($chk_filename_with_param, $theme_config['ignore_sidebar'], TRUE)) )  { ?>
            <div class="<?php echo $theme_config['grid_sidebar']; ?>">
			    <?php include G5_THEME_PATH."/_sidebar/sidebar.php"; ?>
            </div>
	    <?php } ?>
        <div class="<?php echo ($theme_config['use_sidebar'] == 'left' || $theme_config['use_sidebar'] == 'right') && (!$theme_config['ignore_sidebar'] || !in_array($chk_filename_with_param, $theme_config['ignore_sidebar'], TRUE)) ? $theme_config['grid_content'] : "col-12"; ?>">
            <div class="card border">
                <div class="card-body">
                    <header class="mb-4">
                        <h2 class="card-title"><?php echo $g5['title']; ?></h2>
                    </header>
                    <div>
	                    <?php echo $str; ?>
                    </div>
                </div>
            </div>
        </div>
	    <?php if ( $theme_config['use_sidebar'] == 'right' && (!$theme_config['ignore_sidebar'] || !in_array($chk_filename_with_param, $theme_config['ignore_sidebar'], TRUE) ))  { ?>
            <div class="<?php echo $theme_config['grid_sidebar']; ?>">
			    <?php include G5_THEME_PATH."/_sidebar/sidebar.php"; ?>
            </div><!-- // .col -->
	    <?php } ?>
    </div>
</div>


<!-- ============================================================== -->
<!-- End Container -->
<!-- ============================================================== -->
