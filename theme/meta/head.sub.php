<?php
// 이 파일은 새로운 파일 생성시 반드시 포함되어야 함
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

$g5_debug['php']['begin_time'] = $begin_time = get_microtime();

if (!isset($g5['title'])) {
    $g5['title'] = $config['cf_title'];
    $g5_head_title = $g5['title'];
}
else {
    $g5_head_title = $g5['title']; // 상태바에 표시될 제목
   // $g5_head_title .= " | ".$config['cf_title'];
}

$g5['title'] = strip_tags($g5['title']);
$g5_head_title = strip_tags($g5_head_title);

// 현재 접속자
// 게시판 제목에 ' 포함되면 오류 발생
$g5['lo_location'] = addslashes($g5['title']);
if (!$g5['lo_location'])
    $g5['lo_location'] = addslashes(clean_xss_tags($_SERVER['REQUEST_URI']));
$g5['lo_url'] = addslashes(clean_xss_tags($_SERVER['REQUEST_URI']));
if (strstr($g5['lo_url'], '/'.G5_ADMIN_DIR.'/') || $is_admin == 'super') $g5['lo_url'] = '';

/*
// 만료된 페이지로 사용하시는 경우
header("Cache-Control: no-cache"); // HTTP/1.1
header("Expires: 0"); // rfc2616 - Section 14.21
header("Pragma: no-cache"); // HTTP/1.0
*/
?>
<!doctype html>
<html lang="ko">
<head>
    <meta charset="utf-8">
    <?php
//    if (G5_IS_MOBILE) {
//        echo '<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=0,maximum-scale=10,user-scalable=yes">'.PHP_EOL;
//        echo '<meta name="HandheldFriendly" content="true">'.PHP_EOL;
//        echo '<meta name="format-detection" content="telephone=no">'.PHP_EOL;
//    } else {
//	    echo '<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=0,maximum-scale=10,user-scalable=yes">'.PHP_EOL;
//        echo '<meta http-equiv="imagetoolbar" content="no">'.PHP_EOL;
//        echo '<meta http-equiv="X-UA-Compatible" content="IE=edge">'.PHP_EOL;
//    }
    echo '<meta http-equiv="X-UA-Compatible" content="IE=edge">'.PHP_EOL;
    echo '<meta name="viewport" content="width=device-width,initial-scale=1">'.PHP_EOL;

    if($config['cf_add_meta'])
        echo $config['cf_add_meta'].PHP_EOL;

    ?>

    <title><?php echo $g5_head_title; ?></title>

    <link rel="stylesheet" href="<?php echo run_replace('head_css_url', G5_THEME_CSS_URL.'/'.(G5_IS_MOBILE ? 'mobile' : 'default').'.css?ver='.G5_CSS_VER, G5_THEME_URL); ?>">

    <!--[if lte IE 8]>
    <script src="<?php echo G5_JS_URL ?>/html5.js"></script>
    <![endif]-->

    <!-- ######################## 추가한 JS : START ######################## -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- ######################## 추가한 JS : END ######################## -->

    <script>
    // 자바스크립트에서 사용하는 전역변수 선언
    var g5_url       = "<?php echo G5_URL ?>";
    var g5_bbs_url   = "<?php echo G5_BBS_URL ?>";
    var g5_is_member = "<?php echo isset($is_member)?$is_member:''; ?>";
    var g5_is_admin  = "<?php echo isset($is_admin)?$is_admin:''; ?>";
    var g5_is_mobile = "<?php echo G5_IS_MOBILE ?>";
    var g5_bo_table  = "<?php echo isset($bo_table)?$bo_table:''; ?>";
    var g5_sca       = "<?php echo isset($sca)?$sca:''; ?>";
    var g5_editor    = "<?php echo ($config['cf_editor'] && $board['bo_use_dhtml_editor'])?$config['cf_editor']:''; ?>";
    var g5_cookie_domain = "<?php echo G5_COOKIE_DOMAIN ?>";
    </script>

    <?php
    add_javascript('<script src="'.G5_JS_URL.'/jquery-1.12.4.min.js"></script>', 0);
    add_javascript('<script src="'.G5_JS_URL.'/jquery-migrate-1.4.1.min.js"></script>', 0);
    add_javascript('<script src="'.G5_JS_URL.'/jquery.menu.js?ver='.G5_JS_VER.'"></script>', 0);
    add_javascript('<script src="'.G5_JS_URL.'/common.js?ver='.G5_JS_VER.'"></script>', 0);
    add_javascript('<script src="'.G5_JS_URL.'/wrest.js?ver='.G5_JS_VER.'"></script>', 0);
    add_javascript('<script src="'.G5_JS_URL.'/placeholders.min.js"></script>', 0);
    // 주의! Font Awesome은 아래에서 최신버전을 사용하고 있음
    //add_stylesheet('<link rel="stylesheet" href="'.G5_JS_URL.'/font-awesome/css/font-awesome.min.css">', 0);

    if(G5_IS_MOBILE) {
        add_javascript('<script src="'.G5_JS_URL.'/modernizr.custom.70111.js"></script>', 1); // overflow scroll 감지
    }

    if(!defined('G5_IS_ADMIN'))
        echo $config['cf_add_script'];


    /*************************************************
     * 추가한 script : START
     * ***********************************************/
    add_javascript('<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>', 0); // 부트스트랩 코어

    add_javascript('<script src="'.G5_THEME_URL.'/assets/node_modules/aos/dist/aos.js" type="text/javascript"></script>', 0); // 애니메이션 관련
    add_javascript('<script src="'.G5_THEME_URL.'/js/custom.min.js" type="text/javascript"></script>', 0); // 부트스트랩 커스텀 관련

    add_javascript('<script src="'.G5_THEME_URL.'/js/jquery.touchSwipe.min.js" type="text/javascript"></script>', 0); // 이하 터치 슬라이더 관련
    add_javascript('<script src="'.G5_THEME_URL.'/assets/node_modules/bootstrap-touch-slider/bootstrap-touch-slider-min.js" type="text/javascript"></script>', 0);
    add_javascript('<script src="'.G5_THEME_URL.'/assets/node_modules/owl.carousel/dist/owl.carousel.min.js" type="text/javascript"></script>', 0);

    add_javascript('<script src="'.G5_THEME_URL.'/assets/node_modules/clipboard/dist/clipboard.min.js" type="text/javascript"></script>', 0); // 클립보드 관련

    add_javascript('<script src="'.G5_THEME_URL.'/js/type.js" type="text/javascript"></script>', 0); // 타이핑 관련

    add_javascript('<script src="'.G5_THEME_URL.'/js/testimonial/testimonial.js" type="text/javascript"></script>', 0); // testimonial 관련

    add_javascript('<script src="'.G5_THEME_URL.'/js/jquery.waypoints.min.js" type="text/javascript"></script>', 0); // counter 관련
    add_javascript('<script src="'.G5_THEME_URL.'/js/jquery.counterup.min.js" type="text/javascript"></script>', 0);


    // 이하 데모페이지의 경우만 적용
    if (strpos($_SERVER['REQUEST_URI'],'_temp_') !== false) {
	    add_javascript('<script src="'.G5_THEME_URL.'/assets/node_modules/perfect-scrollbar/dist/js/perfect-scrollbar.jquery.min.js" type="text/javascript"></script>', 0);
	    add_javascript('<script src="'.G5_THEME_URL.'/assets/node_modules/prismjs/prism.js" type="text/javascript"></script>', 0);
    }

    /*************************************************
     * 추가한 script : END
     * ***********************************************/


    /*************************************************
     * 추가한 css : START
     * ***********************************************/
    add_stylesheet('<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.min.css"/>', 0); // 폰트 어썸
    add_stylesheet('<link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>', 0); // 부트스트랩 코어

    // 이하 feature 관련
    add_stylesheet('<link href="'.G5_THEME_URL.'/css/features/features1-10.min.css" rel="stylesheet"/>', 0);
    add_stylesheet('<link href="'.G5_THEME_URL.'/css/features/features11-20.min.css" rel="stylesheet"/>', 0);
    add_stylesheet('<link href="'.G5_THEME_URL.'/css/features/features21-30.min.css" rel="stylesheet"/>', 0);
    add_stylesheet('<link href="'.G5_THEME_URL.'/css/features/features31-40.min.css" rel="stylesheet"/>', 0);
    add_stylesheet('<link href="'.G5_THEME_URL.'/css/features/features41-50.min.css" rel="stylesheet"/>', 0);

    // 이하 banner (static-slider) 관련
    add_stylesheet('<link href="'.G5_THEME_URL.'/css/sliders/static-slider1-10.min.css" rel="stylesheet"/>', 0);

    // 이하 form-banner 관련
    add_stylesheet('<link href="'.G5_THEME_URL.'/css/form-banner/form-banner1-10.min.css" rel="stylesheet"/>', 0);

    // 이하 c2a 관련
    add_stylesheet('<link href="'.G5_THEME_URL.'/css/c2a/c2a.min.css" rel="stylesheet"/>', 0);

    // 이하 Contacts 관련
    add_stylesheet('<link href="'.G5_THEME_URL.'/css/contact/contact.min.css" rel="stylesheet"/>', 0);

    // 이하 Pricing 관련
    add_stylesheet('<link href="'.G5_THEME_URL.'/css/pricing/pricing.min.css" rel="stylesheet"/>', 0);

    // 이하 Team 관련
    add_stylesheet('<link href="'.G5_THEME_URL.'/css/team/team.min.css" rel="stylesheet"/>', 0);

    // 이하 Testimonial 관련
    add_stylesheet('<link href="'.G5_THEME_URL.'/css/testimonial/testimonial1-10.min.css" rel="stylesheet"/>', 0);

    // 이하 blog 관련
    add_stylesheet('<link href="'.G5_THEME_URL.'/css/blog/blog-homepage.min.css" rel="stylesheet"/>', 0);

    // 이하 Client 관련
    add_stylesheet('<link href="'.G5_THEME_URL.'/css/client/client.min.css" rel="stylesheet"/>', 0);

    // 이하 Card-Slider 관련
    add_stylesheet('<link href="'.G5_THEME_URL.'/css/card-slider/card-slider.min.css" rel="stylesheet"/>', 0);

    // 이하 Shape 관련
    add_stylesheet('<link href="'.G5_THEME_URL.'/css/shape/shape.min.css" rel="stylesheet"/>', 0);

    add_stylesheet('<link href="'.G5_THEME_URL.'/assets/node_modules/aos/dist/aos.css" rel="stylesheet"/>', 0); // 애니메이션 관련
    add_stylesheet('<link href="'.G5_THEME_URL.'/assets/node_modules/bootstrap-touch-slider/bootstrap-touch-slider.css" rel="stylesheet"/>', 0); // 이하 페이지 슬라이더 관련
    add_stylesheet('<link href="'.G5_THEME_URL.'/assets/node_modules/owl.carousel/dist/assets/owl.theme.green.css" rel="stylesheet"/>', 0);
    add_stylesheet('<link href="'.G5_THEME_URL.'/css/style.min.css" rel="stylesheet"/>', 0); // 이하 공통

    // 이하 데모페이지의 경우만 적용
    if (strpos($_SERVER['REQUEST_URI'],'_temp_') !== false) {
	    add_stylesheet('<link rel="stylesheet" href="'.G5_THEME_URL.'/assets/node_modules/prismjs/themes/prism.css">', 1);
	    add_stylesheet('<link rel="stylesheet" href="'.G5_THEME_URL.'/assets/node_modules/perfect-scrollbar/dist/css/perfect-scrollbar.min.css">', 1);
    }

    // 커스텀 스타일 (yourstyle.css 파일에 본인만의 CSS를 설정하세요)
    add_stylesheet('<link href="'.G5_THEME_URL.'/css/yourstyle.css" rel="stylesheet"/>', 0);
    add_stylesheet('<link href="https://yammi.link/css/croe.2.0.0.css" rel="stylesheet"/>', 0);

    /*************************************************
     * 추가한 css : END
     * ***********************************************/
    ?>


</head>
<body>

    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="loader">
            <div class="loader__figure"></div>
            <p class="loader__label"><?php echo $g5_head_title; ?></p>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">