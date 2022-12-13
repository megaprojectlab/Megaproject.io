<?php
global $theme_config, $_ACETHEME;
if (!defined('_GNUBOARD_')) {
	exit;
}

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link href="'.G5_THEME_CSS_URL.'/headers/headers2.min.css" rel="stylesheet"/>', 0);
?>


<!-- ============================================================== -->
<!-- Top header  -->
<!-- ============================================================== -->
<div class="topbar">
	<!-- ============================================================== -->
	<!-- Header 2  -->
	<!-- ============================================================== -->
    <div class="header2 bg-primary">
	    <?php include_once(G5_THEME_PATH . '/_inc_temp/btn_temp.php'); ?>
        <div class="container ">
            <nav class="navbar navbar-expand-lg h2-nav">
                <a class="navbar-brand" href="<?php echo G5_URL ?>">
                    <img src="<?php echo G5_THEME_URL."/images/logo/".$theme_config['logo'] ?>" alt="로고" width="<?php echo $theme_config['logo_width'] ?>" <?php $theme_config['logo_height'] ? "height=\"".$theme_config['logo_height']."\"" : "" ?>>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#header2" aria-controls="header2" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="header2">
                    <div class="hover-dropdown">
                        <ul class="navbar-nav font-16 _gnb_all">
                            <!-- 전체메뉴 -->
		                    <?php
		                    if ($theme_config['is_fullmenu']) {
			                    ?>
                                <li class="nav-item dropdown mega-dropdown _gnb_all">
                                    <a class="dropdown-toggle nav-link font-bold pr-2" href="#" id="gnb-total" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        전체메뉴
                                        <i class="fas fa-angle-down pl-2"></i>
                                    </a>
                                    <div class="dropdown-menu b-none animated fadeIn" aria-labelledby="gnb-total">
                                        <div class="row">
						                    <?php
						                    $menu_datas = get_menu_db(0, true);
						                    $i = 0;
						                    foreach( $menu_datas as $row ){
							                    ?>
                                                <div class="col-lg-2 col-md-4">
                                                    <ul class="list-style-none mb-3">
                                                        <li class="py-0">
                                                            <h5 class="font-bold text-dark py-0 mb-0">
		                                                        <?php
		                                                        if ($row['sub']) {
			                                                        ?>
                                                                    <!-- 주의 : 전체메뉴에서는 하위메뉴가 있는 경우 부모메뉴 클릭 불가 -->
                                                                    <a><?php echo $row['me_name'] ?></a>
			                                                        <?php
		                                                        } else {
			                                                        ?>
                                                                    <a href="<?php echo ace_short_url_clean($row['me_link']); ?>" target="_<?php echo $row['me_target']; ?>"><?php echo $row['me_name'] ?></a>
			                                                        <?php
		                                                        }
		                                                        ?>
                                                            </h5>
                                                        </li>
									                    <?php
									                    $k = 0;
									                    foreach( (array) $row['sub'] as $row2 ){
										                    ?>
                                                            <li class="py-0">
                                                                <a href="<?php echo ace_short_url_clean($row2['me_link']); ?>" target="_<?php echo $row2['me_target']; ?>" class="py-1"><?php echo $row2['me_name'] ?></a>
                                                            </li>
										                    <?php
										                    $k++;
									                    } //end foreach $row2
									                    ?>
                                                    </ul>
                                                </div>
							                    <?php
							                    $i++;
						                    } //end foreach $row

						                    if ($i == 0) {
							                    ?>
                                                <div class="col-12 text-center">
	                                                <?php if ($is_admin) { ?>
                                                        <a class="font-bold" href="<?php echo G5_ADMIN_URL; ?>/menu_list.php">관리자모드 &gt; 환경설정 &gt; 메뉴설정에서 메뉴를 설정하세요!</a>
	                                                <?php } else { ?>
                                                        <a class="font-bold">메뉴 준비중 입니다!</a>
	                                                <?php } ?>
                                                </div>
							                    <?php
						                    } //end if
						                    ?>
                                        </div>
                                    </div>
                                </li>
			                    <?php
		                    }
		                    ?>
                            <!-- // 전체메뉴 -->


                            <!-- 개별메뉴 -->
		                    <?php
		                    $gnb_zindex = 999; // gnb_1dli z-index 값 설정용
		                    $menu_datas = get_menu_db(0, true);
		                    $i = 0;
		                    foreach( $menu_datas as $row ){
			                    if( empty($row) ) continue;
			                    $add_class = (isset($row['sub']) && $row['sub']) ? '<i class="fas fa-angle-down pl-2"></i>' : '<i class="fas fa-angle-down pl-2"></i>';

			                    $chk_cnt_sub = count((array) $row['sub']);
			                    if ($chk_cnt_sub > 0) {

				                    ?>
                                    <li class="nav-item dropdown _gnb_one">
                                        <a class="dropdown-toggle nav-link font-bold pr-2" href="#" id="gnb-menu-<?php echo $i ?>" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						                    <?php echo $row['me_name'] ?>
						                    <?php echo $add_class ?>
                                        </a>

                                        <ul class="dropdown-menu b-none font-14 animated fadeIn">
						                    <?php
						                    $k = 0;
						                    foreach( (array) $row['sub'] as $row2 ){
							                    if( empty($row2) ) continue;
							                    ?>
                                                <li class="py-0">
                                                    <a href="<?php echo ace_short_url_clean($row2['me_link']); ?>" target="_<?php echo $row2['me_target']; ?>" class="dropdown-item py-1"><?php echo $row2['me_name'] ?></a>
                                                </li>
							                    <?php
							                    $k++;
						                    } //end foreach $row2
						                    ?>
                                        </ul>
                                    </li>
				                    <?php
			                    } else {
				                    ?>
                                    <li class="nav-item">
                                        <a class="nav-link font-bold" href="<?php echo ace_short_url_clean($row['me_link']); ?>"><?php echo $row['me_name'] ?></a>
                                    </li>
				                    <?php
			                    } //end if $chk_cnt_sub
			                    $i++;
		                    } //end foreach $row
		                    ?>

		                    <?php
		                    if ($i == 0) {
			                    ?>
                                <li class="nav-item">
	                                <?php if ($is_admin) { ?>
                                        <a class="nav-link font-bold" href="<?php echo G5_ADMIN_URL; ?>/menu_list.php">관리자모드 &gt; 환경설정 &gt; 메뉴설정에서 메뉴를 설정하세요!</a>
	                                <?php } else { ?>
                                        <a class="nav-link font-bold">메뉴 준비중 입니다!</a>
	                                <?php } ?>
                                </li>
			                    <?php
		                    }
		                    ?>
                            <!-- // 개별메뉴 -->
                        </ul>
                    </div>
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item search dropdown">
                            <a class="nav-link dropdown-toggle" href="javascript:void(0)" id="gnb-search" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search"></i>
                            </a>
                            <div class="dropdown-menu b-none dropdown-menu-right p-3" aria-labelledby="gnb-search">
                                <form name="fsearchbox" method="get" action="<?php echo G5_BBS_URL ?>/search.php" onsubmit="return fsearchbox_submit(this);">
                                    <input type="hidden" name="sfl" value="wr_subject||wr_content">
                                    <input type="hidden" name="sop" value="and">
                                    <input type="text" name="stx" id="sch_stx" class="form-control" maxlength="20"  placeholder="검색어 입력 후 엔터!" />
                                </form>
                            </div>
                        </li>
                    </ul>
                    <!--<ul class="navbar-nav ml-auto">
                        <li class="nav-item active"><a class="nav-link font-bold" href="#"><i class="fas fa-comments"></i> Need help?</a></li>
                        <li class="nav-item active"><a class="nav-link font-bold" href="#">Login</a></li>
                        <li class="nav-item"><a class="btn btn-rounded btn-dark" href="#">Sign up</a></li>
                    </ul>-->
                </div>
            </nav>
            <!-- End Header 1 code -->
        </div>
    </div>
	<!-- ============================================================== -->
	<!-- End Header 2  -->
	<!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Top header  -->
<!-- ============================================================== -->
