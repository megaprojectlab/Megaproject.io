<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH.'/thumbnail.lib.php');

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
// 주의! 다른 스킨들과 공유되므로, $theme_path로 부터 접근해야 함
add_stylesheet('<link rel="stylesheet" href="'.ACETHEME_SKIN_BOARD_URL.'/ace-gallery-bottom/style.css">', 0);

// 공용 헤더 가져오기
include_once(ACETHEME_SKIN_INC_BOARD_PATH.'/header_list.php');

?>

                <div class="card card-body mt-4 p-0 blog-home3">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card aos-init aos-animate" data-aos="flip-up" data-aos-duration="1200">
                                <a href="<?php echo $list[0]['href'] ?>">
			                        <?php
			                        if ($list[0]['is_notice']) { // 공지사항  ?>
                                        <img class="card-img-top" src="https://via.placeholder.com/500x500.png?text=Notice">
			                        <?php } else {
				                        $thumb = get_list_thumbnail($board['bo_table'], $list[0]['wr_id'], $board['bo_gallery_width'], $board['bo_gallery_height'], false, true);

				                        if($thumb['src']) {
					                        $img_content = '<img src="'.$thumb['src'].'" alt="'.$thumb['alt'].'" class="card-img-top">';
				                        } else {
					                        $img_content = '<img class="card-img-top" src="https://via.placeholder.com/500x500.png?text=No Images">';
				                        }

				                        echo run_replace('thumb_image_tag', $img_content, $thumb);
			                        }
			                        ?>
                                </a>
                                <div class="date-pos bg-success-gradiant text-white">
                                    <div class="row">
                                        <div class="col-6">
					                        <?php echo $list[0]['name'] ?>
                                        </div>
                                        <div class="col-6">
					                        <?php echo $list[0]['datetime'] ?>
                                        </div>
                                    </div>
                                </div>
                                <h5 class="card-title mt-3">
			                        <?php if ($is_checkbox) { ?>
                                        <input type="checkbox" name="chk_wr_id[]" value="<?php echo $list[0]['wr_id'] ?>" id="chk_wr_id_<?php echo $i ?>" class="align-middle align-self-center mr-2" style="width: 20px; height: 20px;">
			                        <?php } ?>
			                        <?php
			                        // 공용 게시판 리스트 제목 가져오기
			                        incWithVar(ACETHEME_SKIN_INC_BOARD_PATH.'/title_list.php', array(
				                        'list_obj' => $list[0],
				                        'is_category' => $is_category,
				                        'wr_id' => $wr_id
			                        ));
			                        ?>
                                </h5>
                                <p class="card-text">
			                        <?php echo utf8_strcut(strip_tags($list[0]['wr_content']), 450, '..'); ?>
                                </p>

		                        <?php
		                        // 공용 정렬옵션 가져오기
		                        incWithVar(ACETHEME_SKIN_INC_BOARD_PATH.'/sort_list.php', array(
			                        'grid'=> 'col-4 col-sm-6 col-md-6 col-lg-4', // 그리드 설정
			                        'list_obj' => $list[0],
			                        'qstr2' => $qstr2,
			                        'is_good' => $is_good,
			                        'is_nogood' => $is_nogood
		                        ));
		                        ?>

                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="row">
		                        <?php
		                        // 주의! i는 1부터 시작해서 5보다 작을때 까지
		                        for ($i=1; $i<5; $i++) {
                                ?>

                                    <div class="col-md-6">
                                        <div class="card aos-init aos-animate" data-aos="flip-up" data-aos-duration="1200">
                                            <a href="<?php echo $list[$i]['href'] ?>">
						                        <?php
						                        if ($list[$i]['is_notice']) { // 공지사항  ?>
                                                    <img class="card-img-top" src="https://via.placeholder.com/500x500.png?text=Notice">
						                        <?php } else {
							                        $thumb = get_list_thumbnail($board['bo_table'], $list[$i]['wr_id'], $board['bo_gallery_width'], $board['bo_gallery_height'], false, true);

							                        if($thumb['src']) {
								                        $img_content = '<img src="'.$thumb['src'].'" alt="'.$thumb['alt'].'" class="card-img-top">';
							                        } else {
								                        $img_content = '<img class="card-img-top" src="https://via.placeholder.com/500x500.png?text=No Images">';
							                        }

							                        echo run_replace('thumb_image_tag', $img_content, $thumb);
						                        }
						                        ?>
                                            </a>
                                            <div class="date-pos bg-success-gradiant text-white">
                                                <div class="row">
                                                    <div class="col-6">
								                        <?php echo $list[$i]['name'] ?>
                                                    </div>
                                                    <div class="col-6">
								                        <?php echo $list[$i]['datetime'] ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <h5 class="card-title mt-3">
						                        <?php if ($is_checkbox) { ?>
                                                    <input type="checkbox" name="chk_wr_id[]" value="<?php echo $list[$i]['wr_id'] ?>" id="chk_wr_id_<?php echo $i ?>" class="align-middle align-self-center mr-2" style="width: 20px; height: 20px;">
						                        <?php } ?>
						                        <?php
						                        // 공용 게시판 리스트 제목 가져오기
						                        incWithVar(ACETHEME_SKIN_INC_BOARD_PATH.'/title_list.php', array(
							                        'list_obj' => $list[$i],
							                        'is_category' => $is_category
						                        ));
						                        ?>
                                            </h5>
                                            <p class="card-text">
						                        <?php echo utf8_strcut(strip_tags($list[$i]['wr_content']), 68, '..'); ?>
                                            </p>

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

		                        <?php } ?>

		                        <?php
		                        if (count($list) == 0) {
			                        ?>
                                    <div class="col-12 col-sm-6 col-md-4">
                                        <div class="card border">
                                            <div class="card-body">
                                                <h5 class="card-title">게시물이 없습니다.</h5>
                                                <p class="card-text"></p>
                                            </div>
                                        </div>
                                    </div>
			                        <?php
		                        }
		                        ?>

                            </div>
                        </div>
                    </div>
                    <div class="row">
	                    <?php
                        // 주의! i는 5부터 시작
                        for ($i=5; $i<count($list); $i++) {
	                    ?>

                            <div class="col-12 col-sm-6 col-md-4">
                                <div class="card aos-init aos-animate" data-aos="flip-up" data-aos-duration="1200">
                                    <a href="<?php echo $list[$i]['href'] ?>">
		                                <?php
		                                if ($list[$i]['is_notice']) { // 공지사항  ?>
                                            <img class="card-img-top" src="https://via.placeholder.com/500x500.png?text=Notice">
		                                <?php } else {
			                                $thumb = get_list_thumbnail($board['bo_table'], $list[$i]['wr_id'], $board['bo_gallery_width'], $board['bo_gallery_height'], false, true);

			                                if($thumb['src']) {
				                                $img_content = '<img src="'.$thumb['src'].'" alt="'.$thumb['alt'].'" class="card-img-top">';
			                                } else {
				                                $img_content = '<img class="card-img-top" src="https://via.placeholder.com/500x500.png?text=No Images">';
			                                }

			                                echo run_replace('thumb_image_tag', $img_content, $thumb);
		                                }
		                                ?>
                                    </a>
                                    <div class="date-pos bg-success-gradiant text-white">
                                        <div class="row">
                                            <div class="col-6">
	                                            <?php echo $list[$i]['name'] ?>
                                            </div>
                                            <div class="col-6">
	                                            <?php echo $list[$i]['datetime'] ?>
                                            </div>
                                        </div>
                                    </div>
                                    <h5 class="card-title mt-3">
	                                    <?php if ($is_checkbox) { ?>
                                            <input type="checkbox" name="chk_wr_id[]" value="<?php echo $list[$i]['wr_id'] ?>" id="chk_wr_id_<?php echo $i ?>" class="align-middle align-self-center mr-2" style="width: 20px; height: 20px;">
	                                    <?php } ?>
		                                <?php
		                                // 공용 게시판 리스트 제목 가져오기
		                                incWithVar(ACETHEME_SKIN_INC_BOARD_PATH.'/title_list.php', array(
			                                'list_obj' => $list[$i],
			                                'is_category' => $is_category
		                                ));
		                                ?>
                                    </h5>
                                    <p class="card-text">
		                                <?php echo utf8_strcut(strip_tags($list[$i]['wr_content']), 68, '..'); ?>
                                    </p>

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

                        <?php } ?>

                        <?php
                        if (count($list) == 0) {
                        ?>
                            <div class="col-12 col-sm-6 col-md-4">
                                <div class="card border">
                                    <div class="card-body">
                                        <h5 class="card-title">게시물이 없습니다.</h5>
                                        <p class="card-text"></p>
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