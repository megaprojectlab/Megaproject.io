<?php
include_once "./_common.php";

//############################
//에러 표시 하기 위함
//############################
error_reporting( E_ALL );
ini_set( "display_errors", 1 );


//############################
//변수
//############################
$str_domain = "http://localhost/gnuboard5.4.3"; # 주의! 도메인부터 수정해줘야
$str_url_bbs = "{$str_domain}/bbs/board.php?bo_table=";


//############################
//공통 컬럼 배열
//############################
$arr_menu_default = array("me_use" => 1, "me_mobile_use" => 1);


//############################
// 개별 컬럼 추가하되, 공통 컬럼 배열과 Merge
//############################
$arr_menu_append        = array();

$arr_menu_append['100'] = array_merge(array( "me_code" => "10", "me_name" => "회사소개", "me_link" => "#", "me_target" => "self", "me_order" => 10), $arr_menu_default);
$arr_menu_append['101'] = array_merge(array( "me_code" => "1010", "me_name" => "회사소개", "me_link" => "{$str_domain}/z_aboutus.php", "me_target" => "self", "me_order" => 1010), $arr_menu_default);
$arr_menu_append['102'] = array_merge(array( "me_code" => "1020", "me_name" => "인사말", "me_link" => "{$str_domain}/z_greeting.php", "me_target" => "self", "me_order" => 1020), $arr_menu_default);
$arr_menu_append['103'] = array_merge(array( "me_code" => "1030", "me_name" => "연혁", "me_link" => "{$str_domain}/z_history.php", "me_target" => "self", "me_order" => 1030), $arr_menu_default);
$arr_menu_append['104'] = array_merge(array( "me_code" => "1040", "me_name" => "오시는길", "me_link" => "{$str_domain}/z_map.php", "me_target" => "self", "me_order" => 1040), $arr_menu_default);

$arr_menu_append['200'] = array_merge(array( "me_code" => "20", "me_name" => "사업영역", "me_link" => "#", "me_target" => "self", "me_order" => 20), $arr_menu_default);
$arr_menu_append['201'] = array_merge(array( "me_code" => "2010", "me_name" => "사업영역_1", "me_link" => "{$str_domain}/z_business_1.php", "me_target" => "self", "me_order" => 2010), $arr_menu_default);
$arr_menu_append['202'] = array_merge(array( "me_code" => "2020", "me_name" => "사업영역_2", "me_link" => "{$str_domain}/z_business_2.php", "me_target" => "self", "me_order" => 2020), $arr_menu_default);

$arr_menu_append['300'] = array_merge(array( "me_code" => "30", "me_name" => "포토갤러리", "me_link" => "#", "me_target" => "self", "me_order" => 30), $arr_menu_default);
$arr_menu_append['301'] = array_merge(array( "me_code" => "3010", "me_name" => "갤러리형", "me_link" => "{$str_url_bbs}gallery", "me_target" => "self", "me_order" => 3010), $arr_menu_default);
$arr_menu_append['302'] = array_merge(array( "me_code" => "3020", "me_name" => "아이콘형", "me_link" => "{$str_url_bbs}icon", "me_target" => "self", "me_order" => 3020), $arr_menu_default);
$arr_menu_append['303'] = array_merge(array( "me_code" => "3030", "me_name" => "컬러형", "me_link" => "{$str_url_bbs}color", "me_target" => "self", "me_order" => 3030), $arr_menu_default);
$arr_menu_append['304'] = array_merge(array( "me_code" => "3040", "me_name" => "지그재그형", "me_link" => "{$str_url_bbs}zigzag", "me_target" => "self", "me_order" => 3040), $arr_menu_default);
$arr_menu_append['305'] = array_merge(array( "me_code" => "3020", "me_name" => "웹진형", "me_link" => "{$str_url_bbs}webzine", "me_target" => "self", "me_order" => 3050), $arr_menu_default);

$arr_menu_append['400'] = array_merge(array( "me_code" => "40", "me_name" => "온라인문의", "me_link" => "#", "me_target" => "self", "me_order" => 40), $arr_menu_default);
$arr_menu_append['401'] = array_merge(array( "me_code" => "4010", "me_name" => "질문답변", "me_link" => "{$str_url_bbs}qa", "me_target" => "self", "me_order" => 4010), $arr_menu_default);
$arr_menu_append['402'] = array_merge(array( "me_code" => "4020", "me_name" => "자주묻는질문", "me_link" => "{$str_url_bbs}faq", "me_target" => "self", "me_order" => 4020), $arr_menu_default);

$arr_menu_append['500'] = array_merge(array( "me_code" => "50", "me_name" => "고객센터", "me_link" => "#", "me_target" => "self", "me_order" => 50), $arr_menu_default);
$arr_menu_append['501'] = array_merge(array( "me_code" => "5010", "me_name" => "공지사항", "me_link" => $str_url_bbs . "notice", "me_target" => "self", "me_order" => 5010), $arr_menu_default);
$arr_menu_append['502'] = array_merge(array( "me_code" => "5020", "me_name" => "자유게시판", "me_link" => $str_url_bbs . "free", "me_target" => "self", "me_order" => 5020), $arr_menu_default);
$arr_menu_append['503'] = array_merge(array( "me_code" => "5030", "me_name" => "자료실", "me_link" => $str_url_bbs . "pds", "me_target" => "self", "me_order" => 5030), $arr_menu_default);


//############################
//기존 메뉴 모두 삭제
//############################
$sql = "delete from g5_menu";
sql_query($sql);


//############################
//메뉴 입력
//############################
foreach ($arr_menu_append as $i => $values) {

	$str_insert_values = "";
	foreach ($values as $key => $value) {
		if ($key == "me_code") {
			$str_insert_values .= "'{$value}'";
		} else {
			$str_insert_values .= ", '{$value}'";
		}
	}

	$sql = "insert into g5_menu(me_code, me_name, me_link, me_target, me_order, me_use, me_mobile_use) values($str_insert_values)";
	echo $sql;
	echo "<br/>";
	sql_query($sql);
}


?>