<?php
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
$img = "";

if (has_url_str('param_eq', 'board.php', 'bo_table', 'free', $curr_url)) { // free 게시판일 경우 (일치하는 경우)
	$img = '/images/titlebar/titlebar_1.jpg';
} else if (has_url_str('param_ct', 'board.php', 'bo_table', 'test', $curr_url)) { // test 문자열이 포함된 게시판일 경우 (포함할 경우)
	$img = '/images/titlebar/titlebar_2.jpg';
} else if (has_url_str('param_no', '_temp_blank', '', '', $curr_url)) { // _temp_blank 라는 문자열을 포함한 경우 (어떤 문자열이라도 포함할 경우)
	$img = '/images/titlebar/titlebar_3.jpg';
} else { // 그외의 경우
	$img = '/images/titlebar/titlebar_4.jpg';
}

echo G5_THEME_URL.$img;

?>