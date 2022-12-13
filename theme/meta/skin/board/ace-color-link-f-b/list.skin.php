<?php
global $_ACETHEME;
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH.'/thumbnail.lib.php');

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
// 주의! 다른 스킨들과 공유되므로, $theme_path로 부터 접근해야 함
add_stylesheet('<link rel="stylesheet" href="'.ACETHEME_SKIN_BOARD_URL.'/ace-color-link-f-b/style.css">', 0);

// 공용 헤더 가져오기
$is_fluid_bo = true;
include_once(ACETHEME_SKIN_INC_BOARD_PATH.'/header_list.php');

?>


                <div class="card card-body mt-4 p-0">
                    <div class="row">
	                    <?php
                        for ($i=0; $i<count($list); $i++) {

	                        $is_big_head_first = $_ACETHEME->is_big_head_first($page, $i);
	                        $big_head_content_len = $_ACETHEME->get_big_head_content_len($page, $i, false);
	                        $big_head_grid = $_ACETHEME->get_big_head_grid($page, $i);

	                    ?>

                            <div class="<?php echo $big_head_grid; ?> wrap-feature6-box">
                                <div class="card <?php echo $_ACETHEME->get_bg_color_bo(); ?> text-white" data-aos="fade-right" data-aos-duration="1200">
                                    <div class="card-body">
                                        <h<?php echo $is_big_head_first ? '2' : '4' ?> class="text-white">

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

                                        </h<?php echo $is_big_head_first ? '2' : '4' ?>>
                                        <p class="m-t-20 <?php echo $is_big_head_first ? 'font-22' : ''; ?>">
                                            <a href="<?php echo $list[$i]['href'] ?>" class="">
	                                            <?php echo utf8_strcut(strip_tags($list[$i]['wr_content']), $big_head_content_len, '..'); ?>
                                            </a>
                                        </p>
                                        <a href="<?php echo $list[$i]['href'] ?>" class="linking">자세히보기 <i class="fas fa-arrow-right"></i></a>
                                        <div class="m-t-20">
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
                            <div class="col-12 wrap-feature6-box">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title text-center mb-0">게시물이 없습니다!</h5>
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