<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH.'/thumbnail.lib.php');

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
// 주의! 다른 스킨들과 공유되므로, $theme_path로 부터 접근해야 함
add_stylesheet('<link rel="stylesheet" href="'.ACETHEME_SKIN_BOARD_URL.'/ace-icon-hover-bg/style.css">', 0);

// 공용 헤더 가져오기
include_once(ACETHEME_SKIN_INC_BOARD_PATH.'/header_list.php');

?>


                <div class="card card-body mt-4 p-0">
                    <div class="row wrap-feature-24">
	                    <?php
                        for ($i=0; $i<count($list); $i++) {
	                    ?>

                            <div class="col-lg-4 col-md-6">
                                <div class="card">
                                    <div class="service-24">
                                        <span class="display-4">
                                            <?php
                                            echo $_ACETHEME->get_icon('smile', '');
                                            ?>
                                        </span>
                                        <h4 class="ser-title mt-3">
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
                                        </h4>
                                        <div class="m-t-30">
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
                            </div>

                        <?php } ?>

                        <?php
                        if (count($list) == 0) {
                        ?>
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title mb-0 text-center">게시물이 없습니다!</h5>
                                    </div>
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