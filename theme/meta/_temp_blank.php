<?php
global $_ACETHEME;
include_once "./_common.php";

//if ( $is_admin != 'super' ) {
//	alert( "최고관리자만 접근 가능합니다!", G5_BBS_URL . "/login.php?url=" . urlencode( G5_THEME_URL . "/_temp_blank.php" ) );
//}


$g5['title'] = "페이지 제목을 입력해주세요!";
include_once(G5_THEME_PATH . '/head.php');
?>

<div class="container-fluid px-1 <?php echo $theme_config['margin_content_top']; ?>">
    <div class="row">
	    <?php if ( $theme_config['use_sidebar'] == 'left' && (!$theme_config['ignore_sidebar'] || !in_array($chk_filename_with_param, $theme_config['ignore_sidebar'], TRUE)) )  { ?>
            <div class="<?php echo $theme_config['grid_sidebar']; ?>">
                <?php include G5_THEME_PATH."/_sidebar/sidebar.php" ?>
            </div><!-- //.col -->
        <?php } ?>

        <div class="<?php echo ($theme_config['use_sidebar'] == 'left' || $theme_config['use_sidebar'] == 'right') && (!$theme_config['ignore_sidebar'] || !in_array($chk_filename_with_param, $theme_config['ignore_sidebar'], TRUE)) ? $theme_config['grid_content'] : "col-12"; ?>">
            <!--<h3 class="pb-2 mb-2 b-b">
                페이지 헤더를 입력해 주세요! (필요없으면 주석처리)
            </h3>-->
            <!-- ============= 섹션 템플릿 붙여넣는 곳 ============= -->



            <!-- ============= // 섹션 템플릿 붙여넣는 곳 ============= -->
        </div><!-- //.col -->

	    <?php if ( $theme_config['use_sidebar'] == 'right' && (!$theme_config['ignore_sidebar'] || !in_array($chk_filename_with_param, $theme_config['ignore_sidebar'], TRUE)) )  { ?>
            <div class="<?php echo $theme_config['grid_sidebar']; ?>">
                <?php include G5_THEME_PATH."/_sidebar/sidebar.php" ?>
            </div><!-- //.col -->
        <?php } ?>
    </div><!-- //.row -->
</div><!-- //.container -->

<?php
include_once(G5_THEME_PATH.'/tail.php');
?>