<?php
global $_ACETHEME;
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH.'/thumbnail.lib.php');

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$latest_skin_url.'/style.css">', 0);

// magnific-popup 플러그인 관련
add_stylesheet('<link rel="stylesheet" href="'.G5_THEME_URL.'/assets/node_modules/magnific-popup/dist/magnific-popup.css"/>', 0);

$thumb_width = 500;
$thumb_height = 500;
$list_count = (is_array($list) && $list) ? count($list) : 0;

?>


<div class="mini-spacer">
    <div class="container">
        <?php
	    // 공용 헤드라인 가져오기
	    incWithVar(ACETHEME_SKIN_INC_LATEST_PATH.'/headline_latest.php', array(
		    'bo_table' => $bo_table,
		    'bo_subject' => $bo_subject
	    ));
	    ?>
        <div class="card card-body bg-light">
            <div class="row popup-gallery-c1">
                <?php
                for ($i=0; $i<$list_count; $i++) {
                    $thumb = get_list_thumbnail($bo_table, $list[$i]['wr_id'], $thumb_width, $thumb_height, false, true);

                    if($thumb['src']) {
                        $img = $thumb['src'];
                    } else {
                        $img = 'https://via.placeholder.com/'.$thumb_width.'x'.$thumb_height.'.png?text=No Images';
                        $thumb['alt'] = '이미지가 없습니다.';
                    }
                    $img_content = '<img src="'.$img.'" alt="'.$thumb['alt'].'" class="card-img-top">';
                ?>

                    <div class="col-md-12">
                        <div class="card border card-shadow aos-init aos-animate" data-aos="flip-left" data-aos-duration="1200">
                            <!-- 주의! : 팝업창은 href에 이미지 주소를 넣어줘야 함 -->
                            <a href="<?php echo $img; ?>" class="img-ho" title="<?php echo $list[$i]['wr_subject']; ?>">
		                        <?php echo run_replace('thumb_image_tag', $img_content, $thumb); ?>
                            </a>
                            <div class="card-body <?php echo $list[$i]['is_notice'] ? 'bg-light-warning' : ''; ?>">
                                <h5 class="font-bold">
	                                <?php
	                                // 공용 최근게시물 제목 가져오기
	                                incWithVar(ACETHEME_SKIN_INC_LATEST_PATH.'/title_latest.php', array(
		                                'list_obj' => $list[$i]
	                                ));
	                                ?>
                                </h5>
                                <!--<a href="<?php /*echo $list[$i]['href'] */?>">
		                            <?php
/*		                            echo $_ACETHEME->get_wr_content($list[$i]['wr_content']);
		                            */?>
                                </a>-->
                            </div>
                        </div>
                    </div>

                <?php } ?>

                <?php
                if (count($list) == 0) {
                ?>
                    <div class="col-12">
                        <div class="card border mb-0">
                            <div class="card-body">
                                <p class="text-center mb-0 p-5">게시물이 없습니다!</p>
                            </div>
                        </div>
                    </div>
                <?php
                }
                ?>

            </div>
        </div>
    </div>
</div>


<!-- magnific-popup 플러그인 -->
<script src="<?php echo G5_THEME_URL ?>/assets/node_modules/magnific-popup/dist/jquery.magnific-popup.min.js"></script>

<!-- magnific-popup 스크립트 -->
<script>
    $('.popup-gallery-c1').magnificPopup({
        delegate: 'a.img-ho',
        type: 'image',
        tLoading: 'Loading image #%curr%...',
        mainClass: 'mfp-img-mobile',
        gallery: {
            enabled: true,
            navigateByImgClick: true,
            preload: [0, 1] // Will preload 0 - before current, and 1 after the current image
        },
        image: {
            tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
            titleSrc: function(item) {
                return item.el.attr('title');
            }
        }
    });
</script>