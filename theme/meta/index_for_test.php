<?php
define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/index.php');
    return;
}

include_once(G5_THEME_PATH.'/head.php');
?>


            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">

                <!-- ============================================================== -->
                <!-- Banner -->
                <!-- ============================================================== -->
	            <?php
	            echo latest('theme/ace-slider-4', 'image', 3, 100);
//	            echo latest('theme/ace-slider-3', 'image', 3, 100);
//	            echo latest('theme/ace-slider-2', 'image', 3, 100);
//	            echo latest('theme/ace-slider-1', 'image', 3, 100);
	            ?>
                <!-- ============================================================== -->
                <!-- End Banner -->
                <!-- ============================================================== -->

            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->


            <!-- ============================================================== -->
            <!-- Container -->
            <!-- ============================================================== -->
            <!--<div class="container mt-3">
                <div class="row">
                    <div class="col-8">
                        <?php
/*                            echo popular('theme/basic',15, 30);
                            //echo popular('theme/basic', 50, 30); // 인기검색어
                        */?>
                    </div>
                </div>
            </div>-->


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
                        echo latest('theme/ace-basic', 'test', 5, 25);
                        ?>
                    </div>
                    <div class="col-lg-6">
	                    <?php
	                    echo latest('theme/ace-basic', 't_basic', 5, 25);
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

//            echo latest('theme/ace-basic', 't_basic', 6, 100);
//            echo latest('theme/ace-blog', 't_blog', 6, 100);
//            echo latest('theme/ace-color-icon-btn', 't_color_icon_btn', 6, 100);
//            echo latest('theme/ace-color-icon-btn-f', 't_color_icon_btn_f', 6, 100);
//            echo latest('theme/ace-color-link', 't_color_link', 6, 100);
//            echo latest('theme/ace-color-link-b', 't_color_link_b', 6, 100);
//            echo latest('theme/ace-color-link-f', 't_color_link_f', 6, 100);
//            echo latest('theme/ace-color-link-f-b', 't_color_link_f_b', 6, 100);
//            echo latest('theme/ace-color-link-f-m', 't_color_link_f_m', 6, 100);
//            echo latest('theme/ace-color-link-m', 't_color_link_m', 6, 100);
//            echo latest('theme/ace-gallery-c1', 't_gallery_c1', 6, 100);
//            echo latest('theme/ace-gallery-c1-p', 't_gallery_c1_p', 6, 100);
//            echo latest('theme/ace-gallery-c2', 't_gallery_c2', 6, 100);
//            echo latest('theme/ace-gallery-c2-p', 't_gallery_c2_p', 6, 100);
//            echo latest('theme/ace-gallery-c3', 't_gallery_c3', 6, 100);
//            echo latest('theme/ace-gallery-c3-m', 't_gallery_c3_m', 6, 100);
//            echo latest('theme/ace-gallery-c3-p', 't_gallery_c3_p', 6, 100);
//            echo latest('theme/ace-gallery-c3-p-m', 't_gallery_c3_p_m', 9, 100);
//            echo latest('theme/ace-icon-cover-up', 't_icon_cover_up', 6, 100);
//            echo latest('theme/ace-icon-cover-up-b', 't_icon_cover_up_b', 6, 100);
//            echo latest('theme/ace-icon-cross', 't_icon_cross', 6, 100);
//            echo latest('theme/ace-icon-cross-b', 't_icon_cross_b', 6, 100);
//            echo latest('theme/ace-icon-hover-bg', 't_icon_hover_bg', 6, 100);
//            echo latest('theme/ace-icon-left', 't_icon_left', 6, 100);
//            echo latest('theme/ace-icon-left-arrow-c2', 't_09', 6, 100);
//            echo latest('theme/ace-icon-left-m', 't_icon_left_m', 6, 100);
//            echo latest('theme/ace-icon-top-link', 't_icon_top_link', 6, 100);
//            echo latest('theme/ace-icon-top-link-b', 't_icon_top_link_b', 6, 100);
//            echo latest('theme/ace-icon-top-link-m', 't_icon_top_link_m', 6, 100);
//            echo latest('theme/ace-slider-1', 't_slider_1', 6, 100);
//            echo latest('theme/ace-slider-2', 't_slider_2', 6, 100);
//            echo latest('theme/ace-slider-3', 't_slider_3', 6, 100);
//            echo latest('theme/ace-slider-4', 't_slider_4', 6, 100);
//            echo latest('theme/ace-webzine-banner', 't_webzine_banner', 6, 100);
//            echo latest('theme/ace-webzine-banner-b', 't_webzine_banner_b', 6, 100);
//            echo latest('theme/ace-webzine-banner-m', 't_webzine_banner_m', 6, 100);
//            echo latest('theme/ace-webzine-bottom', 't_webzine_bottom', 6, 100);
//            echo latest('theme/ace-webzine-bottom-b', 't_webzine_bottom_b', 6, 100);
//            echo latest('theme/ace-webzine-bottom-m', 't_webzine_bottom_m', 6, 100);
//            echo latest('theme/ace-webzine-hori-border-c1', 't_12', 6, 100);
//            echo latest('theme/ace-webzine-hori-border-c2', 't_01', 6, 100);
//            echo latest('theme/ace-webzine-hori-border-icon-c2', 't_02', 6, 100);
//            echo latest('theme/ace-webzine-hori-c1', 't_webzine_hori_c1', 6, 100);
//            echo latest('theme/ace-webzine-hori-c2', 't_webzine_hori_c2', 6, 100);
//            echo latest('theme/ace-webzine-hori-img-c1', 't_03', 6, 100);
//            echo latest('theme/ace-webzine-hori-right-btn-c2', 't_04', 6, 100);
//            echo latest('theme/ace-webzine-mix', 't_webzine_mix', 6, 100);
//            echo latest('theme/ace-webzine-on-overlay', 't_10', 6, 100);
//            echo latest('theme/ace-webzine-overlay', 't_webzine_overlay', 6, 100);
//            echo latest('theme/ace-webzine-right-badge', 't_05', 6, 100);
//            echo latest('theme/ace-webzine-right-badge-b', 't_06', 6, 100);
//            echo latest('theme/ace-webzine-right-badge-m', 't_07', 6, 100);
//            echo latest('theme/ace-webzine-top', 't_webzine_top', 6, 100);
//            echo latest('theme/ace-webzine-top-b', 't_webzine_top_b', 6, 100);
//            echo latest('theme/ace-webzine-top-bottom', 't_11', 6, 100);
//            echo latest('theme/ace-webzine-top-link', 'top_link', 6, 100);
//            echo latest('theme/ace-webzine-top-link-b', 'top_link_b', 6, 100);
//            echo latest('theme/ace-webzine-top-link-m', 'top_link_m', 6, 100);
//            echo latest('theme/ace-webzine-top-m', 't_webzine_top_m', 6, 100);
            echo latest('theme/ace-zigzag-btn', 't_zigzag_btn', 6, 100);
            echo latest('theme/ace-zigzag-img-color-f', 't_08', 6, 100);
            echo latest('theme/ace-zigzag-img-f', 't_zigzag_img_f', 6, 100);
            echo latest('theme/ace-zigzag-link', 't_zigzag_link', 6, 100);

            ?>



            <!-- ============================================================== -->
            <!-- End Container -->
            <!-- ============================================================== -->



<?php
include_once(G5_THEME_PATH.'/tail.php');
?>