<?php

if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// 테마가 지원하는 디바이스를 설정 : pc, mobile
// 선언하지 않거나 값을 지정하지 않으면 그누보드5의 설정을 따름
// G5_SET_DEVICE 상수 설정 보다 우선 적용됨
/***************************************************
 * ### 주의 ###
 * 반응형이므로 "PC"로 고정시켜 놓고 사용하세요!
 ***************************************************/
define('G5_THEME_DEVICE', 'pc');

$theme_config = array();

$theme_config = array(
	'set_default_skin'          => false,   // 기본환경설정의 최근게시물 등의 기본스킨 변경여부 true, false
	'preview_board_skin'        => 'basic', // 테마 미리보기 때 적용될 기본 게시판 스킨
	'preview_mobile_board_skin' => 'basic', // 테마 미리보기 때 적용될 기본 모바일 게시판 스킨
	'cf_member_skin'            => 'basic', // 회원 스킨
	'cf_mobile_member_skin'     => 'basic', // 모바일 회원 스킨
	'cf_new_skin'               => 'basic', // 최근게시물 스킨
	'cf_mobile_new_skin'        => 'basic', // 모바일 최근게시물 스킨
	'cf_search_skin'            => 'basic', // 검색 스킨
	'cf_mobile_search_skin'     => 'basic', // 모바일 검색 스킨
	'cf_connect_skin'           => 'basic', // 접속자 스킨
	'cf_mobile_connect_skin'    => 'basic', // 모바일 접속자 스킨
	'cf_faq_skin'               => 'basic', // FAQ 스킨
	'cf_mobile_faq_skin'        => 'basic', // 모바일 FAQ 스킨
	'bo_gallery_cols'           => 3,       // 갤러리 이미지 수
	'bo_gallery_width'          => 295,     // 갤러리 이미지 폭
	'bo_gallery_height'         => 200,     // 갤러리 이미지 높이
	'bo_mobile_gallery_width'   => 125,     // 모바일 갤러리 이미지 폭
	'bo_mobile_gallery_height'  => 100,     // 모바일 갤러리 이미지 높이
	'bo_image_width'            => 600,     // 게시판 뷰 이미지 폭
	'qa_skin'                   => 'basic', // 1:1문의 스킨
	'qa_mobile_skin'            => 'basic'  // 1:1문의 모바일 스킨
);


/**
 * ACETHEME 상수
 */

define('ACETHEME_HEADER_PATH', G5_THEME_PATH.'/_header');
define('ACETHEME_TITLEBAR_PATH', G5_THEME_PATH.'/_titlebar');

define('ACETHEME_SKIN_BOARD_URL', G5_THEME_URL.'/skin/board');
define('ACETHEME_SKIN_INC_BOARD_PATH', G5_THEME_PATH.'/skin/_inc_board');
define('ACETHEME_SKIN_INC_LATEST_PATH', G5_THEME_PATH.'/skin/_inc_latest');


//define('ACETHEME_DEMO_HEADER_PATH', G5_THEME_PATH.'/_demo/_header');



/***************************************************
 * ### 1단계) 헤더 설정 ###
 * theme/ace/_header 폴더에 헤더파일들이 있습니다. 그 중에서 사용할 헤더를 선택하세요!
 * - 예) $theme_config['header'] = "header12.php"
 ***************************************************/
$theme_config['header'] = "header12.php";

//### 전체 메뉴 여부 설정
// 1) true : 전체메뉴 보이기
// 2) false : 전체메뉴 감추기
$theme_config['is_fullmenu'] = false;


/***************************************************
 * ### 1-1단계) 헤더 로고 설정 ###
 * 로고의 배경은 투명하게 하는것을 권해드립니다. (그래야만 모든 경우에 어울리기 때문)
 * theme/ace/images/logo 폴더에 로고를 복사해 넣은 후, 그 파일명을 지정하세요! *
 * - 예) $theme_config['logo'] = "my_logo_header.png";
 ***************************************************/
$theme_config['logo'] =  "mega-logo1.png";
$theme_config['logo_width'] = "150"; // 대부분의 경우는 width만 설정하면, height는 자동으로 조절됨!
$theme_config['logo_height'] = "";





/***************************************************
 * ### 2단계) 푸터 설정 ###
 * theme/ace/_footer 폴더에 해더 템플릿 파일이 있습니다. 그 중에서 사용할 헤더를 선택하세요!
 * - 예) $theme_config['footer'] = "footer2.php"
 * 이후, 푸터의 세부내용을 원하는대로 수정해 주세요!
 ***************************************************/
$theme_config['footer'] = "footer3.php";

/***************************************************
 * ### 2-1단계) 푸터 로고 설정 ###
 * 로고의 배경은 투명하게 하는것을 권해드립니다. (그래야만 모든 경우에 어울리기 때문)
 * theme/ace/images/logo 폴더에 로고를 복사해 넣은 후, 그 파일명을 지정하세요! *
 * - 예) $theme_config['logo'] = "my_logo_footer.png";
 ***************************************************/
$theme_config['logo_footer'] =  "mega-logo2.png";
$theme_config['logo_footer_width'] = "130"; // 대부분의 경우는 width만 설정하면, height는 자동으로 조절됨!
$theme_config['logo_footer_height'] = "";





/***************************************************
 * ### 3단계) 타이틀바 종류 설정 (선택) ###
 * 타이틀바는 theme/ace/_titlebar/ 경로에 있는것들 중 하나를 선택하세요!
 ***************************************************/
$theme_config['titlebar'] = "titlebar1.php";


//### 타이틀바 폭 조절
// 1) container : 고정폭
// 2) container-fluid : 전체폭
$theme_config['titlebar_width'] = "container-fluid";


//### 타이틀바와 컨텐츠영역 사이의 간격
// 1) mt-X : rem 단위 (부트스트랩 내장)
// -- 예) mt-5 = margin top 5rem
// 2) m-t-5 : px 단위
// -- 예) m-t-5 = margin top 5px
$theme_config['margin_content_top'] = "mt-5";


/***************************************************
 * ### 3-1단계) 서브타이틀 배경이미지 입력 (선택 : 타이틀바를 titlebar1.php로 선택했을 경우만) ###
 * 서브타이틀 배경이미지는 theme/ace/_titlebar_img/titlebar_img.php 파일을 열어서 입력하세요!
 * -- 게시판 ID별 또는 페이지 URL에 따라 분기할 수 있습니다.
 ***************************************************/

/***************************************************
 * ### 3-2단계) 서브타이틀 내용 입력 (선택 : 타이틀바를 titlebar_empty.php 이외의 것으로 선택했을 경우만) ###
 * 서브타이틀 내용은 theme/ace/_subtitle/subtitle.php 파일을 열어서 입력하세요!
 * -- 게시판 ID별 또는 페이지 URL에 따라 분기할 수 있습니다.
 ***************************************************/

/***************************************************
 * ### 4단계) 사이드바 사용여부 설정 (선택) ###
 * 비워두기 / left / right 중 선택
 * 사이드바의 내용은 theme/ace/_sidebar/sidebar.php 파일에서 입력하세요!
 * -- 게시판 ID별 또는 페이지 URL에 따라 분기할 수 있습니다.
 ***************************************************/
$theme_config['use_sidebar'] = "left"; // 비워두기 / left / right 중 선택
$theme_config['grid_sidebar'] = "col-12 col-lg-3"; // 사이드바 영역 그리드 설정
$theme_config['grid_content'] = "col-12 col-lg-9"; // 컨텐츠 영역 그리드 설정

// ### 사이드바 적용 예외 페이지 선택 ###
// 1) 아무값도 없을 경우 : 전체 페이지에 노출
// 2) 값이 1개 이상 있을 경우 : 해당 페이지들은 제외하고 노출
// -- 예) array("board.php?bo_table=free", "aboutus.php") --> free 게시판 및 aboutus.php 페이지만 빼놓고 사이드바를 적용
// 3) 주의! 게시판 및 내용관리의 경우에는 파라미터를 포함해서 적어줘야 함
// -- 예) board.php?bo_table=free
// -- 예) content.php?co_id=company

$theme_config['ignore_sidebar'] = array(
	"z_test.php", "demo_index.php", "z_aboutus.php", "z_business_1.php", "z_business_2.php", "z_greeting.php", "z_history.php", "z_map.php",
	"board.php?bo_table=gallery", "board.php?bo_table=icon", "board.php?bo_table=color", "board.php?bo_table=zigzag", "board.php?bo_table=webzine",
	"board.php?bo_table=qa", "board.php?bo_table=faq",
	"board.php?bo_table=notice", "board.php?bo_table=free", "board.php?bo_table=pds",
);




/***************************************************
 * ### 5단계) 기타옵션 설정 (선택) ###
 ***************************************************/

//### 자동 서브메뉴 사용여부 선택
// titlebar / sidebar 중 선택
// 1) titlebar : 타이틀바 밑에 출력
// 2) sidebar : 사이드바 상단에 출력
// 3) 비워두기 : 서브메뉴를 사용하지 않음
$theme_config['use_submenu'] = "titlebar";


//### 현재페이지 인식컬러 선택 (Active 컬러)
// 단색 계열 : primary, info, success, danger, warning, dark, secondary
// 그라데이션 계열 : primary-gradiant, info-gradiant, success-gradiant, danger-gradiant, warning-gradiant
$theme_config['act_color_header'] = "primary"; //헤더(메뉴바) : 단색 계열만 가능
$theme_config['act_color_submenu'] = "primary-gradiant"; //서브메뉴
$theme_config['act_color_cat'] = "primary-gradiant"; //게시판 카테고리


//### 게시판 폭 조절
// 1) container : 고정폭
// 2) container-fluid : 전체폭
$theme_config['board_width'] = "container";


//### 슬라이더(케러셀) 최근게시물 텍스트 색상 설정
// text-white / text-dark / text-muted / text-secondary / text-primary / text-info / text-success / text-danger / text-warning 중 선택
$theme_config['slider_cat_color'] = "text-white"; // 카테고리 색상
$theme_config['slider_title_color'] = "text-white"; // 제목 색상
$theme_config['slider_content_color'] = "text-white"; // 내용글 색상




if (!class_exists('Acetheme')) {

	/**
	 * Acetheme CLASS
	 */
	class Acetheme {

		/**
		 * 환경설정값
		 * @var type
		 */
		private $config;

		/**
		 * G5 변수
		 * @var type
		 */
		private $g5;

		/**
		 * member 회원변수
		 * @var type
		 */
		private $member;

		public function __construct() {
			global $config, $g5, $member;
			$this->config = $config;
			$this->g5     = $g5;
			$this->member = $member;
		}


		/**
		 * 게시판 > list > big-head-first 조건 체크
		 * @param type
		 * @return type
		 */
		public function is_big_head_first($page, $i) {
			$cond_big_first = isset($page) && ($page < 2) && ($i == 0);
			return $cond_big_first;
		}


		/**
		 * 게시판 > list > big-head용 그리드 생성
		 * @param type
		 * @return type
		 */
		public function get_big_head_grid($page, $i) {
			$result = "";
			if (isset($page) && ($page < 2) && $i == 0) {
				$result = 'col-12 col-lg-6';
			} elseif (isset($page) && ($page < 2) && ($i == 1 || $i == 2)) {
				$result = 'col-12 col-lg-3';
			} else {
				$result = 'col-12 col-lg-4';
			}

			return $result;
//			echo $result;
		}


		/**
		 * 게시판 > list > big-head용 내용출력 글자수 생성
		 * @param type
		 * @return type
		 */
		public function get_big_head_content_len($page, $i, $has_image=true) {
			$result = "";
			if (isset($page) && ($page < 2) && $i == 0) {
				if ($has_image) {
					$result = 100;
				} else {
					$result = 250;
				}
			} elseif (isset($page) && ($page < 2) && ($i == 1 || $i == 2)) {
				$result = 150;
			} else {
				$result = 70;
			}

			return $result;
//			echo $result;
		}


		/**
		 * 게시판 > list > 정렬옵션 자동인식
		 * @param type
		 * @return type
		 */
		public function get_sort_current() {

			/*******************************************
			 * 현재 Sorting(정렬)자동 인식
			 *******************************************/
			$icon_sort_wr_hit = '';
			$icon_sort_wr_datetime = '';
			$icon_sort_wr_good = '';
			$icon_sort_wr_nogood = '';

			$sst_current = $_GET["sst"];
			$sod_current = $_GET["sod"];

			if ($sst_current && $sod_current) {

				if ($sst_current == 'wr_hit') {
					if ($sod_current == 'asc') {
						$icon_sort_wr_hit = '<i class="fas fa-caret-up text-danger ml-1"></i>';
					} else if ($sod_current == 'desc') {
						$icon_sort_wr_hit = '<i class="fas fa-caret-down text-primary ml-1"></i>';
					}
				} else if ($sst_current == "wr_datetime") {
					if ($sod_current == "asc") {
						$icon_sort_wr_datetime = '<i class="fas fa-caret-up text-danger ml-1"></i>';
					} else if ($sod_current == "desc") {
						$icon_sort_wr_datetime = '<i class="fas fa-caret-down text-primary ml-1"></i>';
					}
				} else if ($sst_current == "wr_good") {
					if ($sod_current == "asc") {
						$icon_sort_wr_good = '<i class="fas fa-caret-up text-danger ml-1"></i>';
					} else if ($sod_current == "desc") {
						$icon_sort_wr_good = '<i class="fas fa-caret-down text-primary ml-1"></i>';
					}
				} else if ($sst_current == "wr_nogood") {
					if ($sod_current == "asc") {
						$icon_sort_wr_nogood = '<i class="fas fa-caret-up text-danger ml-1"></i>';
					} else if ($sod_current == "desc") {
						$icon_sort_wr_nogood = '<i class="fas fa-caret-down text-primary ml-1"></i>';
					}
				}

			}

			return array(
				'icon_sort_wr_hit' => $icon_sort_wr_hit,
				'icon_sort_wr_datetime' => $icon_sort_wr_datetime,
				'icon_sort_wr_good' => $icon_sort_wr_good,
				'icon_sort_wr_nogood' => $icon_sort_wr_nogood
			);

		}


		/**
		 * 게시판 > 랜덤 배경색 가져오기
		 * @return type
		 */
		public function get_bg_color_bo() {
			$arr_bg_color_bo = array(
				'bg-primary-gradiant',
				'bg-info-gradiant',
				'bg-success-gradiant',
				'bg-danger-gradiant',
//				'bg-warning-gradiant',
//				"bg-primary",
//				"bg-success",
//				"bg-info",
//				"bg-warning",
//				"bg-danger",
//				"bg-orange",
//				"bg-yellow",
//				"bg-facebook",
//				"bg-twitter",
//				"bg-megna",
//				"bg-theme",
//				"bg-inverse",
//				"bg-purple"
			);
			return $arr_bg_color_bo[array_rand($arr_bg_color_bo)];
		}


		/**
		 * 최근게시물 > 랜덤 배경색 가져오기
		 * @return type
		 */
		public function get_bg_color_latest() {
			$arr_bg_color_latest = array(
				'bg-primary-gradiant',
				'bg-info-gradiant',
				'bg-success-gradiant',
				'bg-danger-gradiant',
//				'bg-warning-gradiant',
//				"bg-primary",
//				"bg-success",
//				"bg-info",
//				"bg-warning",
//				"bg-danger",
//				"bg-orange",
//				"bg-yellow",
//				"bg-facebook",
//				"bg-twitter",
//				"bg-megna",
//				"bg-theme",
//				"bg-inverse",
//				"bg-purple"
			);
			return $arr_bg_color_latest[array_rand($arr_bg_color_latest)];
		}


		/**
		 * 최근게시물 > 랜덤 아이콘 가져오기
		 * @param type $icon_group
		 * @return type
		 */
		public function get_icon($icon_group='smile', $add_class = '') {

			$arr_icon = array();

			if ($icon_group == 'smile') {
				$arr_icon = array('<i class="far fa-smile"></i>',
					'<i class="far fa-smile-wink"></i>',
					'<i class="far fa-smile-beam"></i>',
					'<i class="far fa-grin"></i>',
					'<i class="far fa-grin-beam"></i>',
					'<i class="far fa-grin-hearts"></i>',
					'<i class="far fa-grin-wink"></i>',
					'<i class="far fa-grin-stars"></i>',
					'<i class="far fa-laugh"></i>',
					'<i class="far fa-laugh-wink"></i>',
					'<i class="far fa-laugh-beam"></i>'
				);
			} elseif ($icon_group == 'animal') {
				$arr_icon = array(
					'<i class="fas fa-cat"></i>',
					'<i class="fas fa-crow"></i>',
					'<i class="fas fa-dog"></i>',
					'<i class="fas fa-dove"></i>',
					'<i class="fas fa-dragon"></i>',
					'<i class="fas fa-fish"></i>',
					'<i class="fas fa-frog"></i>',
					'<i class="fas fa-hippo"></i>'
				);
			}

			$result = $arr_icon[array_rand($arr_icon)];
			if ($add_class) {
				$result = str_replace('class="', 'class="'.$add_class.' ', $result);
			}

			return $result;
		}


		/**
		 * 최근게시물 > 내용출릭시 특수문자 제거
		 * @param type $wr_content
		 * @return type
		 */
		public function get_wr_content($wr_content, $len = 100, $add_class = '') {
			$wr_content = preg_replace("/<(.*?)\>/"," ", $wr_content);
			$wr_content = preg_replace("/&nbsp;/"," ", $wr_content);
			$wr_content = str_replace("//##", " ", $wr_content);
			$wr_content = cut_str(get_text($wr_content), $len, '…');//글자수

			return $wr_content;
		}


		/**
		 * 메세지 출력
		 * @param type $message
		 * @param type $type
		 */
		public function message($message, $type = 'info')
		{
			$str = "<div class='alert alert-{$type} alert-dismissible fade show' role='alert'>" . PHP_EOL
			       . "<h4 class='alert-heading'>Message</h4>" . PHP_EOL
			       . "<button type='button' class='close' data-dismiss='alert' aria-label='Close'>" . PHP_EOL
			       . "<span aria-hidden='true'>&times;</span>" . PHP_EOL
			       . "</button>" . PHP_EOL
			       . "<p>{$message}</p>" . PHP_EOL
			       . "</div>" . PHP_EOL;
			echo $str;
		}


		/**
		 * 페이징(페이지네이션) > 스타일 덮어쓰기
		 * @param type $current_page
		 * @param type $total_page
		 * @param type $args
		 * @return type
		 */
		public function get_paging($current_page, $total_page, $args) {

			$list_page = $this->config['cf_write_pages'];
			//모바일의 경우 : 페이징 5개씩
			if (is_mobile()) {
				$list_page = $this->config['cf_mobile_pages'];
			}
			$paging = get_paging($list_page, $current_page, $total_page, $args);
			$paging = str_replace('<nav class="pg_wrap"><span class="pg">', '<nav aria-label="paging"><ul class="pagination justify-content-center">' . PHP_EOL, $paging);
			$paging = str_replace('</span></nav>', '</ul></nav>' . PHP_EOL, $paging);
			$paging = str_replace('<strong class="pg_current">', '<li class="page-item active"><a class="page-link" href="#currentpage">', $paging);
			$paging = str_replace('</strong>', '<span class="sr-only">현재페이지</span></a>' . PHP_EOL, $paging);
			$paging = str_replace('<span class="sound_only">페이지</span>', '', $paging);
			$paging = str_replace('<span class="sound_only">열린</span>', '', $paging);
			$paging = str_replace('<a href=', '<li class="page-item"><a class="page-link" href=', $paging);
			$paging = str_replace('</a>', '</a></li>' . PHP_EOL, $paging);
			$paging = str_replace('처음', '<i class="fa fa-angle-double-left" aria-hidden="true"></i>', $paging);
			$paging = str_replace('맨끝', '<i class="fa fa-angle-double-right" aria-hidden="true"></i>', $paging);
			$paging = str_replace('다음', '<i class="fa fa-angle-right" aria-hidden="true"></i>', $paging);
			$paging = str_replace('이전', '<i class="fa fa-angle-left" aria-hidden="true"></i>', $paging);
			$paging = str_replace('', '', $paging);
			return $paging;
		}

		/**
		 * 카테고리 dropdowns로 변환
		 * @param type $category
		 * @return type
		 */
		public function category_dropdown($category, $add_class = '') {
			$category = str_replace("<li>", '', $category);
			$category = str_replace("</li>", '', $category);
			$category = str_replace("<a ", '<a class="dropdown-item" ', $category);
			return $category;
		}

		/**
		 * 카테고리 inline-list로 변환
		 * @param type $category
		 * @return type
		 */
		public function category_inline($category, $add_class = '') {

			// 정규식으로 모든 경우 대응해서 삭제
			$category = preg_replace('/\<span class=\"sound_only\"\>(.*)\<\/span\>/', '', $category);
			$category = str_replace("<li>", '<li class="list-inline-item mb-2">', $category);
			$category = str_replace("<a ", '<a class="btn btn-outline-secondary" role="button" ', $category);


			return $category;
		}

		/**
		 * search.skin.php > 카테고리 > 스타일 추가
		 * @param type $category
		 * @return type
		 */
		public function category_inline_search($category, $onetable, $add_class = '') {

			$category = str_replace("<li>", '<li class="list-inline-item mb-2">', $category);
			$category = str_replace("<a ", '<a class="btn btn-outline-secondary" role="button" ', $category);
			$category = str_replace('<span class="cnt_cmt">', '<span class="cnt_cmt badge badge-pill badge-secondary ml-1">', $category);

			return $category;
		}


		/**
		 * view페이지 > 프로필이미지 > 스타일 추가
		 * @param type $member_profile_img
		 * @return type
		 */
		public function get_member_profile_img($member_profile_img, $add_class = '') {
			$result = str_replace('alt=', ' class="align-self-center mr-3" alt=', $member_profile_img);
			return $result;
		}


		/**
		 * view페이지 > 댓글목록 > 프로필이미지 > 스타일 추가
		 * @param type $member_profile_img
		 * @return type
		 */
		public function get_member_profile_img_comments($member_profile_img, $add_class = '') {
			$result = str_replace('alt=', ' class="align-self-center mr-3" alt=', $member_profile_img);
			return $result;
		}


		/**
		 * current_connect.skin.php > 프로필이미지 > 스타일 추가
		 * @param type $member_profile_img
		 * @return type
		 */
		public function get_member_profile_img_current_connect($member_profile_img, $add_class = '') {
			$result = str_replace('alt=', ' class="d-flex mr-3" width="60" alt=', $member_profile_img);
			return $result;
		}


		/**
		 * profile.skin.php > 프로필이미지 > 스타일 추가
		 * @param type $member_profile_img
		 * @return type
		 */
		public function get_member_profile_img_profile($member_profile_img, $add_class = '') {
			$result = str_replace('alt=', ' class="img-responsive rounded-circle mb-2" width="60" alt=', $member_profile_img);
			return $result;
		}


		/**
		 * profile.skin.php > 프로필이미지 > 스타일 추가
		 * @param type $member_profile_img
		 * @return type
		 */
		public function get_member_profile_img_memo($member_profile_img, $add_class = '') {
			$result = str_replace('alt=', ' class="mr-3" width="60" alt=', $member_profile_img);
			return $result;
		}

		/**
		 * outlogin.skin.2.php > 프로필이미지 > 스타일 추가
		 * @param type $member_profile_img
		 * @return type
		 */
		public function get_member_profile_img_outlogin($member_profile_img, $add_class = '') {
			$result = str_replace('alt=', ' class="mr-3 rounded-circle" width="50" alt=', $member_profile_img);
			return $result;
		}

		/**
		 * point.skin.php > 프로필이미지 > 스타일 추가
		 * @param type $member_profile_img
		 * @return type
		 */
		public function get_member_profile_img_point($member_profile_img, $add_class = '') {
			$result = str_replace('alt=', ' class="rounded-circle" width="60" alt=', $member_profile_img);
			return $result;
		}

		/**
		 * poll_result.skin.php > 프로필이미지 > 스타일 추가
		 * @param type $member_profile_img
		 * @return type
		 */
		public function get_member_profile_img_poll_result($member_profile_img, $add_class = '') {
			$result = str_replace('alt=', ' class="rounded-circle mr-2" width="50" alt=', $member_profile_img);
			return $result;
		}


		/**
		 * view페이지 > SNS공유 버튼 > 텍스트 삭제하고 아이콘만 남기기
		 * @param type $view_sns_skin
		 * @return type
		 */
//		public function get_sns_btn_only_icon($view_sns_skin, $add_class = '') {
//
//			$result = str_replace('<span>페이스북 공유</span>', '', $view_sns_skin);
//			$result = str_replace('<span>트위터 공유</span>', '', $view_sns_skin);
//			$result = str_replace('<span>구글+ 공유</span>', '', $view_sns_skin);
//			return $result;
//		}
//
//

		/**
		 * search.skin.php > 검색결과 > 키워드 마킹 스타일 덮어쓰기
		 * @param type $contents
		 * @return type
		 */
		public function get_search_contents($contents, $add_class = '') {
			$contents = str_replace('<b class="sch_word">', '<b class="text-danger font-bold">', $contents);
			return $contents;
		}



		/**
		 * view.skin.php > 업로도한 이미지 출력 > 스타일 추가
		 * @param type $thumbnail
		 * @return type
		 */
		public function get_view_thumbnail($thumbnail, $add_class = '') {
			$thumbnail = str_replace('<img src="', '<img class="img-fluid" src="', $thumbnail); // 반응형으로 무조건 화면에 꽉차게 보이게 할 경우
//			$thumbnail = str_replace('<img src="', '<img src="', $thumbnail); // 원본 크기 그대로 보이게 할 경우
			return $thumbnail;
		}





	}

}

$_ACETHEME = new Acetheme();


/*******************************************
 * 그누보드 5.3 호환을 위한 설정
 *******************************************/
if (isset($config['cf_bbs_rewrite']) && $config['cf_bbs_rewrite']  && function_exists('short_url_clean')) {
	$short_url = true;
} else {
	$short_url = false;
}
define('THEME_SHORT_URL', $short_url);


if (!function_exists('ace_get_pretty_url')) {
	/**
	 * 내용관리 짧은주소
	 */
	function ace_get_pretty_url($folder, $no = '', $query_string = '', $action = '')
	{
		//그누 5.4 이상
		if (defined('THEME_SHORT_URL') && THEME_SHORT_URL == true) {
			return get_pretty_url($folder, $no, $query_string, $action);
		} elseif ($folder == 'content') {
			//그누 5.3
			return G5_BBS_URL . "/content.php?co_id={$no}";
		} else {
			return false;
		}
	}
}
if (!function_exists('ace_get_pretty_board_url')) {

	/**
	 * 게시판  이동용
	 */
	function ace_get_pretty_board_url($bo_table, $no = '', $query_string = '', $action = '')
	{
		//그누 5.4 이상
		if (defined('THEME_SHORT_URL') && THEME_SHORT_URL == true) {
			return get_pretty_url($bo_table, $no, $query_string, $action);
		} else {
			return G5_BBS_URL . "/board.php?bo_table={$bo_table}";
		}
	}
}
if (!function_exists('ace_short_url_clean')) {

	/**
	 * 그누보드 5.4 짧은 URL 지원
	 */
	function ace_short_url_clean($url)
	{
		if (defined('THEME_SHORT_URL') && THEME_SHORT_URL) {
			return short_url_clean($url);
		} else {
			return $url;
		}
	}
}



/*******************************************
 * 인클루드 대상 파일을 파라미터와 함께 불러오기 위한 함수
 *******************************************/
function incWithVar($fileName, $variables) {
	extract($variables);
	include($fileName);
}

function incOnceWithVar($fileName, $variables) {
	extract($variables);
	include_once($fileName);
}


/*******************************************
 * 기타 함수
 *******************************************/
function datetimeConv($old_date) {
	$old_date_timestamp = strtotime($old_date);
	//$new_date = date('Y-m-d H:i:s', $old_date_timestamp);
	$new_date = date('Y-m-d', $old_date_timestamp);
	return $new_date;
}

// 현재 URL이 특정문자와 일치하거나 또는 특정 문자를 포함하고 있는지 확인하는 함수
function has_url_str($mode, $str_file, $str_param_name, $str_param_val, $curr_url) {

	$result = false;

	if ($mode == 'param_eq') {

		$parts = parse_url($curr_url);
		parse_str($parts['query'], $query);
//	    echo $query['email'];

		$result = isset($curr_url) && strpos($curr_url, $str_file) !== false && $query[$str_param_name] == $str_param_val;

	} else if ($mode == 'param_ct') {
//		$result = isset($curr_url) && strpos($curr_url, $str_file) !== false && strpos($curr_url, $str_param_name.'='.$str_param_val) !== false;
		$result = isset($curr_url) && strpos($curr_url, $str_file) !== false && strpos($curr_url, $str_param_name) !== false && strpos($curr_url, $str_param_val) !== false;;
	} else if ($mode == 'param_no') {
		$result = isset($curr_url) && strpos($curr_url, $str_file) !== false;
	}

	return $result;
}

// 랜덤 문자열 생성기
function genRndStr($length = 10) {
	$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
	$charactersLength = strlen($characters);
	$randomString = '';
	for ($i = 0; $i < $length; $i++) {
		$randomString .= $characters[rand(0, $charactersLength - 1)];
	}
	return $randomString;
}

function startsWith($haystack, $needle) {
	// search backwards starting from haystack length characters from the end
	return $needle === "" || strrpos($haystack, $needle, -strlen($haystack)) !== false;
}

function endsWith($haystack, $needle) {
	// search forward starting from end minus needle length characters
	return $needle === "" || (($temp = strlen($haystack) - strlen($needle)) >= 0 && strpos($haystack, $needle, $temp) !== false);
}




?>