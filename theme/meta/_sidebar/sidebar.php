<?php
global $_ACETHEME;
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

$curr_url = $_SERVER['REQUEST_URI']; // 현재 URL

/******************************************* *
 * 1) URL에, 해당 파일명 + 파라미터 이름/값이 정확히 일치할 경우 : param_eq 모드 사용
 *   예) has_url_str('param_eq', 'board.php', 'bo_table', 'free', $curr_url)
 *     -- 해석 : board.php 파일에서 bo_table 파라미터의 값이 free와 일치하는 경우
 *     -- 아래의 경우만 매칭됨
 *       -- http://example.com/board.php?bo_table=free
 *
 * 2) URL에, 해당 파일명 + 파라미터 이름/값을 포함할 경우 : param_ct 모드 사용
 *   예) has_url_str('param_ct', 'board.php', 'bo_table', 'test', $curr_url)
 *     -- 해석 : board.php 파일에서 bo_table 파라미터의 값에 test를 포함한 경우
 *     -- 아래의 모든 경우에 매칭됨
 *       -- http://example.com/board.php?bo_table=test_bbs
 *       -- http://example.com/board.php?bo_table=test_exam
 *       -- http://example.com/board.php?bo_table=page_test
 *
 * 3) URL에, 어떤 문자열이라도 포함할 경우 : param_no 모드 사용
 *   예) has_url_str('param_no', 'aboutus', '', '', $curr_url)
 *     -- 해석 : aboutus 문자열이 포함된 경우
 *     -- 아래의 모든 경우에 매칭됨
 *       -- http://example.com/aboutus.php
 *       -- http://example.com/aboutus_second.php
 *       -- http://example.com/etc_aboutus.php
 *******************************************/


// 서브메뉴 자동 출력
if ($theme_config['use_submenu'] == "sidebar") {
	include G5_THEME_PATH . "/_submenu/submenu_vt.php";
}


If (has_url_str('param_eq', 'board.php', 'bo_table', 'free', $curr_url)) { // free 게시판일 경우 (일치하는 경우)
?>

    <h3 class="mb-2">사이드바 메뉴</h3>
    <div class="list-group font-bold sidebar_submenu _sidebar_submenu mb-4">
        <a href="<?php echo G5_URL ?>/bbs/board.php?bo_table=free" class="list-group-item list-group-item-action">자유게시판</a>
        <a href="#" class="list-group-item list-group-item-action">메뉴_2</a>
        <a href="#" class="list-group-item list-group-item-action">메뉴_3</a>
        <a href="#" class="list-group-item list-group-item-action">메뉴_4</a>
    </div>

    <div class="mb-2">
        <?php echo outlogin('theme/basic'); // 외부로그인 ?>
    </div>
    <div class="mb-2">
        <?php echo poll('theme/basic'); // 설문조사 ?>
    </div>
    <div class="mb-2">
        <?php echo visit('theme/basic'); // 방문자현황 ?>
    </div>

<?php
} else if (has_url_str('param_ct', 'board.php', 'bo_table', 'test', $curr_url)) { // test 문자열이 포함된 게시판일 경우 (포함할 경우)
?>

    <div class="mb-2">
		<?php echo outlogin('theme/basic'); ?>
    </div>

<?php
} else if (has_url_str('param_no', '_temp_blank', '', '', $curr_url)) { // _temp_blank 라는 문자열을 포함한 경우 (어떤 문자열이라도 포함할 경우)
?>

    <h3 class="mb-2">사이드바 메뉴</h3>
    <div class="list-group font-bold sidebar_submenu _sidebar_submenu mb-4">
        <a href="<?php echo G5_URL ?>/bbs/board.php?bo_table=free" class="list-group-item list-group-item-action">자유게시판</a>
        <a href="#" class="list-group-item list-group-item-action">메뉴_2</a>
        <a href="#" class="list-group-item list-group-item-action">메뉴_3</a>
        <a href="#" class="list-group-item list-group-item-action">메뉴_4</a>
    </div>


<?php
} else { // 그외의 경우
?>

    <h3 class="mb-2">사이드바 메뉴</h3>
    <div class="list-group font-bold sidebar_submenu _sidebar_submenu mb-4">
        <a href="<?php echo G5_URL ?>/bbs/board.php?bo_table=free" class="list-group-item list-group-item-action">자유게시판</a>
        <a href="#" class="list-group-item list-group-item-action">메뉴_2</a>
        <a href="#" class="list-group-item list-group-item-action">메뉴_3</a>
        <a href="#" class="list-group-item list-group-item-action">메뉴_4</a>
    </div>

<?php
}
?>



