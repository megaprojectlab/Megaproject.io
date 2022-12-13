<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH.'/thumbnail.lib.php');

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
// 주의! 다른 스킨들과 공유되므로, $theme_path로 부터 접근해야 함
add_stylesheet('<link rel="stylesheet" href="'.ACETHEME_SKIN_BOARD_URL.'/ace-gallery-c2-p/style.css">', 0);

// magnific-popup 플러그인 관련
add_stylesheet('<link rel="stylesheet" href="'.G5_THEME_URL.'/assets/node_modules/magnific-popup/dist/magnific-popup.css"/>', 0);

// 공용 헤더 가져오기
include_once(ACETHEME_SKIN_INC_BOARD_PATH.'/header_list.php');

?>

                <div class="card border card-body mt-4 bg-light">

                    <div class="row popup-gallery">
                        <?php
                        for ($i=0; $i<count($list); $i++) {

	                        $thumb = get_list_thumbnail($board['bo_table'], $list[$i]['wr_id'], $board['bo_gallery_width'], $board['bo_gallery_height'], false, true);

	                        if($thumb['src']) {
		                        $img = $thumb['src'];
	                        } else {
		                        $img = 'https://via.placeholder.com/500x500.png?text=No Images';
		                        $thumb['alt'] = '이미지가 없습니다.';
	                        }

	                        $img_content = '<img src="'.$img.'" alt="'.$thumb['alt'].'" class="card-img-top">';

                        ?>

                            <div class="col-md-6">
                                <div class="card border card-shadow aos-init aos-animate" data-aos="flip-left" data-aos-duration="1200">
                                    <a href="<?php echo $img; ?>" class="img-ho" title="<?php echo $list[$i]['wr_subject']; ?>">
		                                <?php
		                                echo run_replace('thumb_image_tag', $img_content, $thumb);
		                                ?>
                                    </a>
                                    <div class="card-body <?php echo $list[$i]['is_notice'] ? 'bg-light-warning' : ''; ?>">
                                        <h5 class="font-bold">

	                                        <?php if ($is_checkbox) { ?>
                                                <input type="checkbox" name="chk_wr_id[]" value="<?php echo $list[$i]['wr_id'] ?>" id="chk_wr_id_<?php echo $i ?>" class="align-middle align-self-center mr-2" style="width: 20px; height: 20px;">
	                                        <?php } ?>

	                                        <?php
	                                        // 공용 게시판 리스트 제목 가져오기
	                                        incWithVar(ACETHEME_SKIN_INC_BOARD_PATH.'/title_list.php', array(
		                                        'list_obj' => $list[$i],
		                                        'is_category' => $is_category,
		                                        'wr_id' => $wr_id,
		                                        'is_gallery' => true
	                                        ));
	                                        ?>
                                        </h5>
                                        <!--<p class="m-b-0 font-14">
                                            <?php /*echo utf8_strcut(strip_tags($list[$i]['wr_content']), 68, '..'); */?>
                                        </p>-->

	                                    <?php
	                                    // 공용 정렬옵션 가져오기
	                                    incWithVar(ACETHEME_SKIN_INC_BOARD_PATH.'/sort_list.php', array(
		                                    'grid'=> 'col-4 col-sm-6 col-md-6 col-lg-4', // 그리드 설정
		                                    'list_obj' => $list[$i],
		                                    'qstr2' => $qstr2,
		                                    'is_good' => $is_good,
		                                    'is_nogood' => $is_nogood
	                                    ));
	                                    ?>

                                    </div>
                                </div>
                            </div>


                        <?php } ?>

                        <?php
                        if (count($list) == 0) {
                        ?>
                            <div class="col-12">
                                <h5 class="text-center mb-0">게시물이 없습니다!</h5>
                            </div>
                        <?php
                        }
                        ?>

                    </div>
                </div><!-- // .card-body -->

<!-- magnific-popup 플러그인 -->
<script src="<?php echo G5_THEME_URL ?>/assets/node_modules/magnific-popup/dist/jquery.magnific-popup.min.js"></script>

<!-- magnific-popup 스크립트 -->
<script>
    $('.popup-gallery').magnificPopup({
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

<?php
include_once(ACETHEME_SKIN_INC_BOARD_PATH.'/footer_list.php');
?>


