<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH.'/thumbnail.lib.php');

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
// 주의! 다른 스킨들과 공유되므로, $theme_path로 부터 접근해야 함
add_stylesheet('<link rel="stylesheet" href="'.ACETHEME_SKIN_BOARD_URL.'/ace-webzine-mix/style.css">', 0);

// 공용 헤더 가져오기
include_once(ACETHEME_SKIN_INC_BOARD_PATH.'/header_list.php');

?>


                <div class="card card-body mt-4 p-0 blog-home5">
                    <div class="card-columns">
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


	                        // 링크 가져오기
	                        $link_1 = $list[$i]['wr_link1']; // 예) https://www.youtube.com/watch?v=GBTfgtHvv64
	                        $link_1_parts = parse_url($link_1);
	                        parse_str($link_1_parts['query'], $link_1_query);
	                        $link_1_video_id = $link_1_query['v'];


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

	                        // 첫번째 첨부파일이 이미지인 경우
	                        if ( !empty($file_1_ext) && ($file_1_ext == 'jpg' || $file_1_ext == 'png' || $file_1_ext == 'gif') ) { // 동영상이 있으면서, 미리보기 이미지도 있는 경우

	                    ?>

                                <div class="card border <?php echo $list[$i]['is_notice'] ? 'bg-light-warning' : ''; ?>">
                                    <a href="<?php echo $list[$i]['href'] ?>">
                                        <?php
                                        echo run_replace('thumb_image_tag', $img_content, $thumb);
                                        ?>
                                    </a>
                                    <div class="p-30">
                                        <div class="d-flex no-block font-13">
                                            <span class=""><?php echo $list[$i]['datetime']; ?></span>
                                            <a href="#" class="link ml-auto"><?php echo $list[$i]['name']; ?></a>
                                        </div>
                                        <h5 class="m-t-20">
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
                                        </h5>
                                        <p class="m-t-20 m-b-20">
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

                        <?php
                            // 첫번째 링크가 있는데, 그것이 유튜브 동영상 URL인 경우
	                        } else if (strpos($link_1, 'youtu') !== false) {
                        ?>

                            <div class="card border <?php echo $list[$i]['is_notice'] ? 'bg-light-warning' : ''; ?>">
                                <iframe width="100%" height="233" src="<?php echo $link_1; ?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                <div class="p-30">
                                    <div class="d-flex no-block font-13">
                                        <span class=""><?php echo $list[$i]['datetime']; ?></span>
                                        <a href="#" class="link ml-auto"><?php echo $list[$i]['name']; ?></a>
                                    </div>
                                    <h5 class="m-t-20">
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
                                    <p class="m-t-20 m-b-20">
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

                        <?php
                            // 첫번째 링크가 있을 경우
	                        } else if (!empty($link_1)) {
                        ?>

                            <div class="card border text-white <?php echo $_ACETHEME->get_bg_color_bo(); ?>">
                                <div class="p-30">
                                    <div class="d-flex no-block font-13">
                                        <span class=""><?php echo $list[$i]['datetime']; ?></span>
                                        <a href="#" class="ml-auto white-link"><?php echo $list[$i]['name']; ?></a>
                                    </div>
                                    <h5 class="m-t-30 m-b-20">
	                                    <?php if ($is_checkbox) { ?>
                                            <input type="checkbox" name="chk_wr_id[]" value="<?php echo $list[$i]['wr_id'] ?>" id="chk_wr_id_<?php echo $i ?>" class="align-middle align-self-center mr-2" style="width: 20px; height: 20px;">
	                                    <?php } ?>

	                                    <?php
	                                    // 공용 게시판 리스트 제목 가져오기
	                                    incWithVar(ACETHEME_SKIN_INC_BOARD_PATH.'/title_list.php', array(
		                                    'list_obj' => $list[$i],
		                                    'is_category' => $is_category,
                                            'is_white_link' => true
	                                    ));
	                                    ?>
                                    </h5>
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


                        <?php
                            // 내용만 있는 경우
	                        } else {
                        ?>

                            <!--내용만 있는 경우 : 무배경-->
                            <div class="card border <?php echo $list[$i]['is_notice'] ? 'bg-light-warning' : ''; ?>">
                                <div class="p-30">
                                    <div class="d-flex no-block font-13">
                                        <span class=""><?php echo $list[$i]['datetime']; ?></span>
                                        <a href="#" class="link ml-auto"><?php echo $list[$i]['name']; ?></a>
                                    </div>
                                    <h5 class="m-t-20">
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
                                    <p class="m-t-20 m-b-20">
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


                        <?php
	                        } // end if
                        } // end for
                        ?>

                    </div><!-- // .card-columns -->

                    <?php
                    if (count($list) == 0) {
                    ?>
                        <div class="rows">
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