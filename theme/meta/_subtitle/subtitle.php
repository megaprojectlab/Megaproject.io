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
$text = "";

if (has_url_str('param_eq', 'board.php', 'bo_table', 'free', $curr_url)) { // free 게시판일 경우 (일치하는 경우)
    $text = '자유게시판은 자유롭게 의견을 나누는 공간입니다';
} else if (has_url_str('param_ct', 'board.php', 'bo_table', 'test', $curr_url)) { // test 문자열이 포함된 게시판일 경우 (포함할 경우)
	$text = '이것은 테스트 게시판으로서 현재 시험중에 있습니다';
} else if (has_url_str('param_no', '_temp_blank', '', '', $curr_url)) { // _temp_blank 라는 문자열을 포함한 경우 (어떤 문자열이라도 포함할 경우)
	$text = '이것은 블랭크 템플릿 페이지 입니다!';
} else { // 그외의 경우
	$text = '그외의 경우 서브타이블을 입력하세요!';
}

echo $text;

?>