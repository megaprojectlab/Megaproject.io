<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH.'/thumbnail.lib.php');

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
// 주의! 다른 스킨들과 공유되므로, $theme_path로 부터 접근해야 함
add_stylesheet('<link rel="stylesheet" href="'.ACETHEME_SKIN_BOARD_URL.'/ace-blog/style.css">', 0);

// 공용 헤더 가져오기
include_once(ACETHEME_SKIN_INC_BOARD_PATH.'/header_list.php');

?>

                <div class="card border card-body mt-4">
                    <div class="row justify-content-center">
                        <?php
                        for ($i=0; $i<count($list); $i++) {
                        ?>

                            <div class="col-md-8">

                                <div class="mini-spacer">

                                    <?php
                                    $thumb = get_list_thumbnail($board['bo_table'], $list[$i]['wr_id'], $board['bo_gallery_width'], $board['bo_gallery_height'], false, true);

                                    if($thumb['src']) {
	                                    $img = $thumb['src'];
                                    } else {
	                                    $img = 'https://via.placeholder.com/500x500.png?text=No Images';
	                                    $thumb['alt'] = '이미지가 없습니다.';
                                    }

                                    $img_content = '<img src="'.$img.'" alt="'.$thumb['alt'].'" class="img-responsive" style="width: 100%;">';
                                    ?>

                                    <a href="<?php echo $list[$i]['href']; ?>">
		                                <?php
		                                echo run_replace('thumb_image_tag', $img_content, $thumb);
		                                ?>
                                    </a>

                                    <h2 class="title">
                                        <?php if ($is_checkbox) { ?>
                                            <input type="checkbox" name="chk_wr_id[]" value="<?php echo $list[$i]['wr_id'] ?>" id="chk_wr_id_<?php echo $i ?>" class="align-middle align-self-center mr-2" style="width: 20px; height: 20px;">
                                        <?php } ?>

                                        <?php
                                        // 공용 게시판 리스트 제목 가져오기
                                        incWithVar(ACETHEME_SKIN_INC_BOARD_PATH.'/title_list.php', array(
                                            'list_obj' => $list[$i],
                                            'is_category' => $is_category,
                                            'wr_id' => $wr_id
                                        ));
                                        ?>
                                    </h2>
                                    <p class="m-t-30 m-b-30">
                                        <?php echo utf8_strcut(strip_tags($list[$i]['wr_content']), 300, '..'); ?>
                                    </p>

	                                <?php
	                                // 공용 정렬옵션 가져오기
	                                incWithVar(ACETHEME_SKIN_INC_BOARD_PATH.'/sort_list.php', array(
		                                'grid'=> 'col-4 col-sm-4 col-md-4 col-lg-2', // 그리드 설정
		                                'list_obj' => $list[$i],
		                                'qstr2' => $qstr2,
		                                'is_good' => $is_good,
		                                'is_nogood' => $is_nogood
	                                ));
	                                ?>
                                </div>

                                <?php
                                if ($i < (count($list) - 1) ) {
                                    echo '<hr class="op-5">';
                                }
                                ?>

                            </div>

                        <?php } ?>

                        <?php
                        if (count($list) == 0) {
                            ?>
                            <div class="col-12 text-center">
                                <!--<div class="card border">
                                    <div class="card-body">
                                        <h5 class="card-title">게시물이 없습니다.</h5>
                                        <p class="card-text"></p>
                                    </div>
                                </div>-->
                                <div class="mini-spacer">
                                    <h5 class="card-title mb-0">게시물이 없습니다!</h5>
                                </div>
                            </div>
                            <?php
                        }
                        ?>

                    </div>
                </div><!-- // .card-body -->

<?php
include_once(ACETHEME_SKIN_INC_BOARD_PATH.'/footer_list.php');
?>