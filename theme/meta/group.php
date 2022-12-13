<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
	include_once(G5_THEME_MOBILE_PATH.'/group.php');
	return;
}

//if(!$is_admin && $group['gr_device'] == 'mobile')
//	alert($group['gr_subject'].' 그룹은 모바일에서만 접근할 수 있습니다.');

$g5['title'] = $group['gr_subject'];
include_once(G5_THEME_PATH.'/head.php');
include_once(G5_LIB_PATH.'/latest.lib.php');
?>


            <div class="container mt-3">
                <div class="row">
                    <div class="col-lg-4">
	                    <?php echo poll('theme/basic'); // 설문조사, 테마의 스킨을 사용하려면 스킨을 theme/basic 과 같이 지정 ?>
                    </div>
                    <div class="col-lg-4">
	                    <?php echo visit('theme/basic'); // 접속자집계, 테마의 스킨을 사용하려면 스킨을 theme/basic 과 같이 지정 ?>
                    </div>
                    <div class="col-lg-4">
                        <?php echo outlogin('theme/basic'); // 외부 로그인, 테마의 스킨을 사용하려면 스킨을 theme/basic 과 같이 지정 ?>
                    </div>
                </div>
            </div>

            <div class="container mt-3">
                <div class="row">
                    <div class="col-lg-6">
                        <?php
                        echo latest('theme/ace-basic', 'free', 5, 25);
                        ?>
                    </div>
                    <div class="col-lg-6">
	                    <?php
	                    echo latest('theme/ace-basic', 'free', 5, 25);
	                    ?>
                    </div>
                </div>
            </div>



            <?php
//            echo latest('theme/ace-basic', 'test', 6, 100);
//            echo latest('theme/ace-blog', 'test', 6, 100);
//            echo latest('theme/ace-color-icon-btn', 'test', 6, 100);
//            echo latest('theme/ace-color-icon-btn-f', 'test', 6, 100);
//            echo latest('theme/ace-color-link', 'test', 6, 100);
//            echo latest('theme/ace-color-link-b', 'test', 6, 100);
//            echo latest('theme/ace-color-link-f', 'test', 6, 100);
//            echo latest('theme/ace-color-link-f-b', 'test', 6, 100);
//            echo latest('theme/ace-color-link-f-m', 'test', 6, 100);
//            echo latest('theme/ace-color-link-m', 'test', 6, 100);
//            echo latest('theme/ace-gallery-c1', 'test', 6, 100);
//            echo latest('theme/ace-gallery-c1-p', 'test', 6, 100);
//            echo latest('theme/ace-gallery-c2', 'test', 6, 100);
//            echo latest('theme/ace-gallery-c2-p', 'test', 6, 100);
//            echo latest('theme/ace-gallery-c3', 'test', 6, 100);
//            echo latest('theme/ace-gallery-c3-m', 'test', 6, 100);
//            echo latest('theme/ace-gallery-c3-p', 'test', 6, 100);
//            echo latest('theme/ace-gallery-c3-p-m', 'test', 9, 100);
//            echo latest('theme/ace-icon-cover-up', 'test', 6, 100);
//            echo latest('theme/ace-icon-cover-up-b', 'test', 6, 100);
//            echo latest('theme/ace-icon-cross', 'test', 6, 100);
//            echo latest('theme/ace-icon-cross-b', 'test', 6, 100);
//            echo latest('theme/ace-icon-hover-bg', 'test', 6, 100);
//            echo latest('theme/ace-icon-left', 'test', 6, 100);
//            echo latest('theme/ace-icon-left-arrow-c2', 'test', 6, 100);
//            echo latest('theme/ace-icon-left-m', 'test', 6, 100);
//            echo latest('theme/ace-icon-top-link', 'test', 6, 100);
//            echo latest('theme/ace-icon-top-link-b', 'test', 6, 100);
//            echo latest('theme/ace-icon-top-link-m', 'test', 6, 100);
//            echo latest('theme/ace-slider-1', 'test', 6, 100);
//            echo latest('theme/ace-slider-2', 'test', 6, 100);
//            echo latest('theme/ace-slider-3', 'test', 6, 100);
//            echo latest('theme/ace-slider-4', 'test', 6, 100);
//            echo latest('theme/ace-webzine-banner', 'test', 6, 100);
//            echo latest('theme/ace-webzine-banner-b', 'test', 6, 100);
//            echo latest('theme/ace-webzine-banner-m', 'test', 6, 100);
//            echo latest('theme/ace-webzine-bottom', 'test', 6, 100);
//            echo latest('theme/ace-webzine-bottom-b', 'test', 6, 100);
//            echo latest('theme/ace-webzine-bottom-m', 'test', 6, 100);
//            echo latest('theme/ace-webzine-hori-border-c1', 'test', 6, 100);
//            echo latest('theme/ace-webzine-hori-border-c2', 'test', 6, 100);
//            echo latest('theme/ace-webzine-hori-border-icon-c2', 'test', 6, 100);
//            echo latest('theme/ace-webzine-hori-c1', 'test', 6, 100);
//            echo latest('theme/ace-webzine-hori-c2', 'test', 6, 100);
//            echo latest('theme/ace-webzine-hori-img-c1', 'test', 6, 100);
//            echo latest('theme/ace-webzine-hori-right-btn-c2', 'test', 6, 100);
//            echo latest('theme/ace-webzine-mix', 'test', 6, 100);
//            echo latest('theme/ace-webzine-on-overlay', 'test', 6, 100);
//            echo latest('theme/ace-webzine-overlay', 'test', 6, 100);
//            echo latest('theme/ace-webzine-right-badge', 'test', 6, 100);
//            echo latest('theme/ace-webzine-right-badge-b', 'test', 6, 100);
//            echo latest('theme/ace-webzine-right-badge-m', 'test', 6, 100);
//            echo latest('theme/ace-webzine-top', 'test', 6, 100);
//            echo latest('theme/ace-webzine-top-b', 'test', 6, 100);
//            echo latest('theme/ace-webzine-top-botton', 'test', 6, 100);
//            echo latest('theme/ace-webzine-top-link', 'test', 6, 100);
//            echo latest('theme/ace-webzine-top-link-b', 'test', 6, 100);
//            echo latest('theme/ace-webzine-top-link-m', 'test', 6, 100);
//            echo latest('theme/ace-webzine-top-m', 'test', 6, 100);
//            echo latest('theme/ace-zigzag-btn', 'test', 6, 100);
//            echo latest('theme/ace-zigzag-img-color-f', 'test', 6, 100);
//            echo latest('theme/ace-zigzag-img-f', 'test', 6, 100);
//            echo latest('theme/ace-zigzag-link', 'test', 6, 100);

//            echo latest('theme/ace-basic', 'free', 6, 100);
//            echo latest('theme/ace-blog', 'free', 6, 100);
//            echo latest('theme/ace-color-icon-btn', 'free', 6, 100);
//            echo latest('theme/ace-color-icon-btn-f', 'free', 6, 100);
//            echo latest('theme/ace-color-link', 'free', 6, 100);
//            echo latest('theme/ace-color-link-b', 'free', 6, 100);
//            echo latest('theme/ace-color-link-f', 'free', 6, 100);
//            echo latest('theme/ace-color-link-f-b', 'free', 6, 100);
//            echo latest('theme/ace-color-link-f-m', 'free', 6, 100);
//            echo latest('theme/ace-color-link-m', 'free', 6, 100);
//            echo latest('theme/ace-gallery-c1', 'free', 6, 100);
//            echo latest('theme/ace-gallery-c1-p', 'free', 6, 100);
//            echo latest('theme/ace-gallery-c2', 'free', 6, 100);
//            echo latest('theme/ace-gallery-c2-p', 'free', 6, 100);
//            echo latest('theme/ace-gallery-c3', 'free', 6, 100);
//            echo latest('theme/ace-gallery-c3-m', 'free', 6, 100);
//            echo latest('theme/ace-gallery-c3-p', 'free', 6, 100);
//            echo latest('theme/ace-gallery-c3-p-m', 'free', 9, 100);
//            echo latest('theme/ace-icon-cover-up', 'free', 6, 100);
//            echo latest('theme/ace-icon-cover-up-b', 'free', 6, 100);
//            echo latest('theme/ace-icon-cross', 'free', 6, 100);
//            echo latest('theme/ace-icon-cross-b', 'free', 6, 100);
//            echo latest('theme/ace-icon-hover-bg', 'free', 6, 100);
//            echo latest('theme/ace-icon-left', 'free', 6, 100);
//            echo latest('theme/ace-icon-left-arrow-c2', 'free', 6, 100);
//            echo latest('theme/ace-icon-left-m', 'free', 6, 100);
//            echo latest('theme/ace-icon-top-link', 'free', 6, 100);
//            echo latest('theme/ace-icon-top-link-b', 'free', 6, 100);
//            echo latest('theme/ace-icon-top-link-m', 'free', 6, 100);
//            echo latest('theme/ace-slider-1', 'free', 6, 100);
//            echo latest('theme/ace-slider-2', 'free', 6, 100);
//            echo latest('theme/ace-slider-3', 'free', 6, 100);
//            echo latest('theme/ace-slider-4', 'free', 6, 100);
//            echo latest('theme/ace-webzine-banner', 'free', 6, 100);
//            echo latest('theme/ace-webzine-banner-b', 'free', 6, 100);
//            echo latest('theme/ace-webzine-banner-m', 'free', 6, 100);
//            echo latest('theme/ace-webzine-bottom', 'free', 6, 100);
//            echo latest('theme/ace-webzine-bottom-b', 'free', 6, 100);
//            echo latest('theme/ace-webzine-bottom-m', 'free', 6, 100);
//            echo latest('theme/ace-webzine-hori-border-c1', 'free', 6, 100);
//            echo latest('theme/ace-webzine-hori-border-c2', 'free', 6, 100);
//            echo latest('theme/ace-webzine-hori-border-icon-c2', 'free', 6, 100);
//            echo latest('theme/ace-webzine-hori-c1', 'free', 6, 100);
//            echo latest('theme/ace-webzine-hori-c2', 'free', 6, 100);
//            echo latest('theme/ace-webzine-hori-img-c1', 'free', 6, 100);
//            echo latest('theme/ace-webzine-hori-right-btn-c2', 'free', 6, 100);
//            echo latest('theme/ace-webzine-mix', 'free', 6, 100);
//            echo latest('theme/ace-webzine-on-overlay', 'free', 6, 100);
//            echo latest('theme/ace-webzine-overlay', 'free', 6, 100);
//            echo latest('theme/ace-webzine-right-badge', 'free', 6, 100);
//            echo latest('theme/ace-webzine-right-badge-b', 'free', 6, 100);
//            echo latest('theme/ace-webzine-right-badge-m', 'free', 6, 100);
//            echo latest('theme/ace-webzine-top', 'free', 6, 100);
//            echo latest('theme/ace-webzine-top-b', 'free', 6, 100);
//            echo latest('theme/ace-webzine-top-bottom', 'free', 6, 100);
//            echo latest('theme/ace-webzine-top-link', 'top_link', 6, 100);
//            echo latest('theme/ace-webzine-top-link-b', 'top_link_b', 6, 100);
//            echo latest('theme/ace-webzine-top-link-m', 'top_link_m', 6, 100);
//            echo latest('theme/ace-webzine-top-m', 'free', 6, 100);
            echo latest('theme/ace-zigzag-btn', 'free', 6, 100);
            echo latest('theme/ace-zigzag-img-color-f', 'free', 6, 100);
            echo latest('theme/ace-zigzag-img-f', 'free', 6, 100);
            echo latest('theme/ace-zigzag-link', 'free', 6, 100);

            ?>



            <!-- ============================================================== -->
            <!-- End Container -->
            <!-- ============================================================== -->



<?php
include_once(G5_THEME_PATH.'/tail.php');
?>