<?php

if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

/***************************************************
 * 공용변수
 ***************************************************/
$bo_table = $_GET["bo_table"];
$co_id = $_GET["co_id"];
$curr_url = $_SERVER['REQUEST_URI']; // 현재 URL
$base_filename = basename($_SERVER['PHP_SELF']); //현재 페이지 파일명

$chk_filename_with_param = ""; // 파라미터를 포함한 현재 페이지 파일명
if (isset($bo_table) && $base_filename != "index.php") { // 게시판의 경우
	$chk_filename_with_param = isset($bo_table) ? $base_filename . '?bo_table=' . $bo_table : $base_filename;
} else if (isset($co_id) && $base_filename != "index.php") { // 내용의 경우
	$chk_filename_with_param = isset($co_id) ? $base_filename . '?co_id=' . $co_id : $base_filename;
} else { // 일반 파일의 경우
	$chk_filename_with_param = $base_filename;
}


// 데모페이지에서 사용될 Copy Code 버튼
$btn_copycode_str = '
<div class="row mini-spacer _ct_btn_copy">
    <div class="col-12">
        <button class="btn btn-dark btn-arrow _btn_copy" onclick="copyCode(this)">
            <span>코드복사 <i class="fas fa-arrow-right"></i></span>
        </button>
    </div>
</div>
';


if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/head.php');
    return;
}

include_once(G5_THEME_PATH.'/head.sub.php');
include_once(G5_LIB_PATH.'/latest.lib.php');
include_once(G5_LIB_PATH.'/outlogin.lib.php');
include_once(G5_LIB_PATH.'/poll.lib.php');
include_once(G5_LIB_PATH.'/visit.lib.php');
include_once(G5_LIB_PATH.'/connect.lib.php');
include_once(G5_LIB_PATH.'/popular.lib.php');


if (defined('_INDEX_')) {
	include G5_BBS_PATH . '/newwin.inc.php';
}

?>

<!-- 상단 시작 { -->


        <?php
        /******************************************************************************
        ### 헤더 불러오기 ###
        * 설정위치 : theme.config.php 파일 > $theme_config['header'] = "헤더메뉴파일명"
        -- 예) $theme_config['header'] = 'header1.php'
        * 헤더 파일 경로 : _header/
         *****************************************************************************/

        $inc_header = ACETHEME_HEADER_PATH.'/'.$theme_config['header'];
        if (isset($theme_config['header']) && file_exists($inc_header)) {
	        include_once($inc_header);
        } else {
            $_ACETHEME->message('해더 파일이 없습니다. 입력한 파일명 ' . $theme_config['header'] . '를 확인하세요.', 'warning');
        }
        ?>



        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">

            <?php
            /***************************************************
             * 타이틀바 : 메인화면이 아닌 경우만 타이틀바를 적용
             ***************************************************/
            if (defined('_INDEX_') !== true) {
	            include_once(ACETHEME_TITLEBAR_PATH.'/'.$theme_config['titlebar']);
	        }
            ?>


	        <?php
	        /***************************************************
	         * 서브메뉴 : 메인화면이 아닌 경우만 서브메뉴 자동 출력
	         ***************************************************/
	        if (defined('_INDEX_') !== true) {
		        if ( $theme_config['use_submenu'] == "titlebar" ) {
			        include_once(G5_THEME_PATH . "/_submenu/submenu_hr.php");
		        }
	        }
	        ?>


<script>
$(function() {



});
</script>
<!-- } 상단 끝 -->