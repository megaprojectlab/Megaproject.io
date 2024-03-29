<?php
global $_ACETHEME;
global $theme_config;
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH.'/thumbnail.lib.php');

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link href="'.G5_THEME_CSS_URL.'/sliders/slider2.min.css" rel="stylesheet"/>', 0);

$list_count = (is_array($list) && $list) ? count($list) : 0;


/***************************************************
 * ### 슬라이더에 사용되는 "이미지" 사이즈 조절 ###
 * - 아래 URL을 참고해서 16:9 비율에 맞게 설정해야 함 (가능하면 기본설정 그대로 사용을 권장)
 * -- https://ko.wikipedia.org/wiki/16:9
 * - 이미지의 height를 줄이고 싶은 경우, width는 그대로 둔채 height만 조절할 것
 ***************************************************/
$thumb_width = 1920;
$thumb_height = 700;


/***************************************************
 * ### 슬라이더에 사용되는 "동영상 배경" 사이즈 조절 ###
 * - 이미지 사이즈에 맞춰서 자동 조절됨
 ***************************************************/

?>


<div class="bg-light">
	<?php if ($list_count > 0) { //게시물이 있을 때  ?>
        <section id="slider-sec" class="slider2">
            <div id="slider2" class="carousel bs-slider slide control-round indicators-line" data-ride="carousel" data-pause="hover" data-interval="7000">
                <!-- Wrapper For Slides -->
                <div class="carousel-inner" role="listbox">

                    <?php
                    for ($i=0; $i<$list_count; $i++) {
                        $thumb = get_list_thumbnail($bo_table, $list[$i]['wr_id'], $thumb_width, $thumb_height, false, true);

                        if($thumb['src']) {
                            $img = $thumb['src'];
                        } else {
                            $img = 'https://via.placeholder.com/'.$thumb_width.'x'.$thumb_height.'.png?text=No Images';
                            $thumb['alt'] = '이미지가 없습니다.';
                        }

                        // 파일 가져오기
                        $list[$i]['file'] = get_file($bo_table, $list[$i]['wr_id']);

                        $file_1 = $list[$i]['file'][0]['file'];
                        $file_2 = $list[$i]['file'][1]['file'];
                        $file_3 = $list[$i]['file'][2]['file'];

                        $file_1_ext = pathinfo($file_1, PATHINFO_EXTENSION); // 확장자만 출력
                        $file_2_ext = pathinfo($file_2, PATHINFO_EXTENSION); // 확장자만 출력
                        $file_3_ext = pathinfo($file_3, PATHINFO_EXTENSION); // 확장자만 출력

                        $file_1_path = $list[$i]['file'][0]['path'].'/'.$list[$i]['file'][0]['file'];
                        $file_2_path = $list[$i]['file'][1]['path'].'/'.$list[$i]['file'][1]['file'];
                        $file_3_path = $list[$i]['file'][2]['path'].'/'.$list[$i]['file'][2]['file'];

                        if ( (!empty($file_2_ext) && $file_2_ext == 'mp4') && !empty($file_3_ext) ) { // 동영상이 있으면서, 미리보기 이미지도 있는 경우

                    ?>

                            <div class="carousel-item <?php echo $i == 0 ? 'active' : '' ?>">
                                <!-- Slide Background --><img src="<?php echo $img; ?>" alt="<?php echo $list[$i]['subject']; ?>" class="slide-image" style="height: <?php echo $thumb_height; ?>px;"/>
                                <!-- Slide Text Layer -->
                                <div class="slide-text slide_style_left">
                                    <div class="col-md-9 col-lg-7">
                                        <label class="label label-warning text-uppercase font-bold font-16 <?php echo $theme_config['slider_cat_color']; ?>" data-animation="animated fadeInDown"><?php echo $list[$i]['ca_name']; ?></label>
                                        <h2 data-animation="animated zoomInRight" class="title <?php echo $theme_config['slider_title_color']; ?>">
                                            <?php /*echo $list[$i]['subject']; */?>
	                                        <?php echo $list[$i]['wr_subject']; ?> <!-- 제목에 br 태그 사용할 경우 -->
                                        </h2>
                                    </div>
                                    <div class="col-md-8 col-lg-7">
                                        <p data-animation="animated fadeInLeft" class="m-b-40 hidden-sm-down <?php echo $theme_config['slider_content_color']; ?>">
                                            <?php
                                            echo $_ACETHEME->get_wr_content($list[$i]['wr_content'], 200);
                                            ?>
                                        </p>
                                    </div>
                                    <div class="col-sm-12 btn-pad">
                                        <a class="btn btn-info-gradiant btn-md btn-arrow" data-animation="animated fadeInLeft" href="<?php echo $list[$i]['href'] ?>">
                                            <span>자세히보기<i class="fas fa-arrow-right ml-2"></i></span>
                                        </a>
                                        <a class="btn btn-danger-gradiant btn-md btn-arrow" data-animation="animated fadeInRight" data-toggle="modal" data-target="#video<?php echo $i; ?>" href="#">
                                            <span>동영상보기<i class="fas fa-arrow-right ml-2"></i></span>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <!-- Slider Modal -->
                            <div class="modal bd-example-modal-lg fade" id="video<?php echo $i; ?>" tabindex="-1" role="dialog" aria-labelledby="modalTitle" aria-hidden="true">
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="modalTitle<?php echo $i; ?>"><?php echo $list[$i]['subject']; ?></h5>
                                            <button type="button" class="close font-20" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true" class="far fa-times-circle fa-2x"></span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <video width="100%" controls>
                                                <source src="<?php echo $file_2_path; ?>" type="video/mp4">이 브라우저는 HTML5 비디오를 지원하지 않습니다!
                                            </video>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Slider Modal -->

                    <?php
                        } else if ( (!empty($file_2_ext) && $file_2_ext == 'mp4') && empty($file_3_ext) ) { // 동영상이 있으나, 미리보기 이미지가 없는 경우
                    ?>

                            <div class="carousel-item <?php echo $i == 0 ? 'active' : '' ?>">
                                <!-- Slide Background -->
                                <!-- 주의! muted 속성이 빠지면 자동재생 안됨 -->
                                <video style="object-fit: initial; width: 100%; height: <?php echo $thumb_height; ?>px;" autoplay loop muted>
                                    <source src="<?php echo $file_2_path; ?>" type="video/mp4">Your browser does not support HTML5 video.
                                </video>
                                <div class="bs-slider-overlay"></div>
                                <!-- Slide Text Layer -->
                                <div class="slide-text slide_style_left">
                                    <div class="col-md-9 col-lg-7">
                                        <label class="label label-warning text-uppercase font-bold font-16 <?php echo $theme_config['slider_cat_color']; ?>" data-animation="animated fadeInDown"><?php echo $list[$i]['ca_name']; ?></label>
                                        <h2 data-animation="animated zoomInRight" class="title <?php echo $theme_config['slider_title_color']; ?>">
                                            <?php /*echo $list[$i]['subject']; */?>
	                                        <?php echo $list[$i]['wr_subject']; ?> <!-- 제목에 br 태그 사용할 경우 -->
                                        </h2>
                                    </div>
                                    <div class="col-md-8 col-lg-7">
                                        <p data-animation="animated fadeInLeft" class="m-b-40 hidden-sm-down <?php echo $theme_config['slider_content_color']; ?>">
                                            <?php
                                            echo $_ACETHEME->get_wr_content($list[$i]['wr_content'], 200);
                                            ?>
                                        </p>
                                    </div>
                                    <div class="col-sm-12 btn-pad">
                                        <a class="btn btn-info-gradiant btn-md btn-arrow" data-animation="animated fadeInLeft" href="<?php echo $list[$i]['href'] ?>">
                                            <span>자세히보기<i class="fas fa-arrow-right ml-2"></i></span>
                                        </a>
                                    </div>
                                </div>
                            </div>

                    <?php
                        } else {  // 이미지만 있는 경우
                    ?>
                            <div class="carousel-item <?php echo $i == 0 ? 'active' : '' ?>">
                                <!-- Slide Background --><img src="<?php echo $img; ?>" alt="<?php echo $list[$i]['subject']; ?>" class="slide-image" style="height: <?php echo $thumb_height; ?>px;"/>
                                <!-- Slide Text Layer -->
                                <div class="slide-text slide_style_left">
                                    <div class="col-md-9 col-lg-7">
                                        <label class="label label-warning text-uppercase font-bold font-16 <?php echo $theme_config['slider_cat_color']; ?>" data-animation="animated fadeInDown"><?php echo $list[$i]['ca_name']; ?></label>
                                        <h2 data-animation="animated zoomInRight" class="title <?php echo $theme_config['slider_title_color']; ?>">
                                            <?php /*echo $list[$i]['subject']; */?>
	                                        <?php echo $list[$i]['wr_subject']; ?> <!-- 제목에 br 태그 사용할 경우 -->
                                        </h2>
                                    </div>
                                    <div class="col-md-8 col-lg-7">
                                        <p data-animation="animated fadeInLeft" class="m-b-40 hidden-sm-down <?php echo $theme_config['slider_content_color']; ?>">
                                            <?php
                                            echo $_ACETHEME->get_wr_content($list[$i]['wr_content'], 200);
                                            ?>
                                        </p>
                                    </div>
                                    <div class="col-sm-12 btn-pad">
                                        <a class="btn btn-info-gradiant btn-md btn-arrow" data-animation="animated fadeInLeft" href="<?php echo $list[$i]['href'] ?>">
                                            <span>자세히보기<i class="fas fa-arrow-right ml-2"></i></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- End of Slide -->
                    <?php
                        } // end : if
                    } // end : for loop
                    ?>

                    <!-- Slider Control -->
                    <div class="slider-control">
                        <!-- Left Control -->
                        <a class="left carousel-control-prev text-white font-14" href="#slider2" role="button" data-slide="prev">
                            <span class="fas fa-arrow-left fa-2x text-white" aria-hidden="true"></span>
                            <b class="sr-only">이전</b>
                        </a>
                        <!-- Right Control -->
                        <a class="right carousel-control-next text-white font-14" href="#slider2" role="button" data-slide="next">
                            <span class="fas fa-arrow-right fa-2x text-white" aria-hidden="true"></span>
                            <b class="sr-only">다음</b>
                        </a>
                    </div>
                    <!-- End of Slider Control -->

                </div>
                <!-- End of Wrapper For Slides -->
            </div>
            <!-- End Slider -->

        </section>
	<?php }  ?>
	<?php if ($list_count == 0) { //게시물이 없을 때  ?>
        <div class="card border mt-0 mb-5">
            <div class="card-body">
                <p class="text-center mb-0 p-5">슬라이더_2에 출력할 내용이 없습니다!</p>
            </div>
        </div>
	<?php }  ?>
</div>

<script>
    $('#slider2').bsTouchSlider();
    $(".carousel .carousel-inner").swipe({
        swipeLeft: function (event, direction, distance, duration, fingerCount) {
            this.parent().carousel('next');
        }
        , swipeRight: function () {
            this.parent().carousel('prev');
        }
        , threshold: 0
    });

</script>