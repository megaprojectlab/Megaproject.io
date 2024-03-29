<?php
global $_ACETHEME;
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH.'/thumbnail.lib.php');

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
// 주의! 다른 스킨들과 공유되므로, $theme_path로 부터 접근해야 함
add_stylesheet('<link rel="stylesheet" href="'.ACETHEME_SKIN_BOARD_URL.'/ace-zigzag-img-color-f/style.css">', 0);

// 공용 헤더 가져오기
$is_fluid_bo = true;
include_once(ACETHEME_SKIN_INC_BOARD_PATH.'/header_list.php');

?>

    <div class="card card-body mt-4 p-0 feature16">

		<?php
		for ($i=0; $i<count($list); $i++) {

			$thumb = get_list_thumbnail($board['bo_table'], $list[$i]['wr_id'], $board['bo_gallery_width'], $board['bo_gallery_height'], false, true);

			if($thumb['src']) {
				$img = $thumb['src'];
			} else {
				$img = 'https://via.placeholder.com/500x500.png?text=No Images';
				$thumb['alt'] = '이미지가 없습니다.';
			}

			$img_content = '<img src="'.$img.'" alt="'.$thumb['alt'].'" class="img-responsive">';


			if ($i % 2 == 0) {
        ?>

                <div class="row wrap-feature-16">
                    <div class="col-lg-6 with-bg p-t-80 p-b-80" style="background-image:url('<?php echo $img; ?>');"></div>
                    <div class="col-lg-6 p-t-80 p-b-80 <?php echo $_ACETHEME->get_bg_color_bo(); ?> text-white">
                        <div class="with-text px-5">
				            <?php if ($is_category && $list[$i]['ca_name']) { ?>
                                <a href="<?php echo $list[$i]['ca_name_href']; ?>">
                                    <span class="label label-rounded border"><?php echo $list[$i]['ca_name']; ?></span>
                                </a>
				            <?php } ?>
                            <h2 class="text-white m-t-30 m-b-30">
	                            <?php if ($is_checkbox) { ?>
                                    <input type="checkbox" name="chk_wr_id[]" value="<?php echo $list[$i]['wr_id'] ?>" id="chk_wr_id_<?php echo $i ?>" class="align-middle align-self-center mr-2" style="width: 20px; height: 20px;">
	                            <?php } ?>

	                            <?php
	                            // 공용 게시판 리스트 제목 가져오기
	                            incWithVar(ACETHEME_SKIN_INC_BOARD_PATH.'/title_list.php', array(
		                            'list_obj' => $list[$i],
		                            'is_category' => $is_category,
		                            'wr_id' => $wr_id,
                                    'is_white_link' => true
	                            ));
	                            ?>
                            </h2>
                            <p class="op-7">
                                <a href="<?php echo $list[$i]['href'] ?>" class="white-link">
	                                <?php echo utf8_strcut(strip_tags($list[$i]['wr_content']), 200, '..'); ?>
                                </a>
                            </p>
                            <a class="btn btn-outline-light btn-md btn-arrow" href="<?php echo $list[$i]['href'] ?>">
                                <span>자세히보기 <i class="fas fa-arrow-right"></i></span>
                            </a>
                            <div class="py-4">
	                            <?php
	                            // 공용 정렬옵션 가져오기
	                            incWithVar(ACETHEME_SKIN_INC_BOARD_PATH.'/sort_list.php', array(
		                            'grid'=> 'col-4 col-sm-6 col-md-4 col-lg-3', // 그리드 설정
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

        <?php
			} else {
        ?>

                <div class="row wrap-feature-16">
                    <div class="col-lg-6 p-t-80 p-b-80 <?php echo $_ACETHEME->get_bg_color_bo(); ?> text-white">
                        <div class="with-text px-5">
	                        <?php if ($is_category && $list[$i]['ca_name']) { ?>
                            <a href="<?php echo $list[$i]['ca_name_href']; ?>">
                                <span class="label label-rounded border"><?php echo $list[$i]['ca_name']; ?></span>
                            </a>
	                        <?php } ?>
                            <h2 class="text-white m-t-30 m-b-30">
	                            <?php if ($is_checkbox) { ?>
                                    <input type="checkbox" name="chk_wr_id[]" value="<?php echo $list[$i]['wr_id'] ?>" id="chk_wr_id_<?php echo $i ?>" class="align-middle align-self-center mr-2" style="width: 20px; height: 20px;">
	                            <?php } ?>

	                            <?php
	                            // 공용 게시판 리스트 제목 가져오기
	                            incWithVar(ACETHEME_SKIN_INC_BOARD_PATH.'/title_list.php', array(
		                            'list_obj' => $list[$i],
		                            'is_category' => $is_category,
		                            'wr_id' => $wr_id,
		                            'is_white_link' => true
	                            ));
	                            ?>
                            </h2>
                            <p class="op-7">
                                <a href="<?php echo $list[$i]['href'] ?>" class="white-link">
	                                <?php echo utf8_strcut(strip_tags($list[$i]['wr_content']), 200, '..'); ?>
                                </a>
                            </p>
                            <a class="btn btn-outline-light btn-md btn-arrow" href="<?php echo $list[$i]['href'] ?>">
                                <span>자세히보기 <i class="fas fa-arrow-right"></i></span>
                            </a>
                            <div class="py-4">
	                            <?php
	                            // 공용 정렬옵션 가져오기
	                            incWithVar(ACETHEME_SKIN_INC_BOARD_PATH.'/sort_list.php', array(
		                            'grid'=> 'col-4 col-sm-6 col-md-4 col-lg-3', // 그리드 설정
		                            'list_obj' => $list[$i],
		                            'qstr2' => $qstr2,
		                            'is_good' => $is_good,
		                            'is_nogood' => $is_nogood
	                            ));
	                            ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 with-bg p-t-80 p-b-80" style="background-image:url('<?php echo $img; ?>')"></div>
                </div>

        <?php
			} //end if
		} //end for
		?>

		<?php
		if (count($list) == 0) {
        ?>
            <div class="row wrap-feature-16">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title mb-0 text-center">게시물이 없습니다!</h5>
                        </div>
                    </div>
                </div>
            </div>
        <?php
		}
		?>


    </div><!-- // .card-body -->

<?php
include_once(ACETHEME_SKIN_INC_BOARD_PATH.'/footer_list.php');
?>