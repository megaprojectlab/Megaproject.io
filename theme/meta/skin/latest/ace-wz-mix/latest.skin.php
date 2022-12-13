<?php
global $_ACETHEME;
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH.'/thumbnail.lib.php');

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$latest_skin_url.'/style.css">', 0);

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
	    <?php if ($list_count > 0) { //게시물이 있을 때  ?>
            <div class="card-columns">
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

                    $arr_bg_mix = array(
                        'bg-info-gradiant',
                        'bg-success-gradiant',
                        'bg-danger-gradiant',

                        "bg-primary",
                        "bg-success",
                        "bg-info",
                        "bg-warning",
                        "bg-danger",
                        "bg-orange",
                        "bg-yellow",
                        "bg-facebook",
                        "bg-twitter",
                        "bg-megna",
                        "bg-theme",
                        "bg-inverse",
                        "bg-purple"
                    );

                    $bg_mix = $arr_bg_mix[array_rand($arr_bg_mix)];


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


                        <div class="card border">
                            <a href="<?php echo $list[$i]['href'] ?>">
                                <?php echo run_replace('thumb_image_tag', $img_content, $thumb); ?>
                            </a>
                            <div class="p-30">
                                <div class="d-flex no-block font-13">
                                    <span class=""><?php echo datetimeConv( $list[$i]['wr_datetime'] ); ?></span>
                                    <a href="#" class="link ml-auto"><?php echo $list[$i]['name']; ?></a>
                                </div>
                                <h5 class="m-t-20">
                                    <?php
                                    // 공용 최근게시물 제목 가져오기
                                    incWithVar(ACETHEME_SKIN_INC_LATEST_PATH.'/title_latest.php', array(
                                        'list_obj' => $list[$i]
                                    ));
                                    ?>
                                </h5>
                                <p class="m-t-20 m-b-20">
                                    <a href="<?php echo $list[$i]['href'] ?>">
                                        <?php
                                        echo $_ACETHEME->get_wr_content($list[$i]['wr_content']);
                                        ?>
                                    </a>
                                </p>
                            </div>
                        </div>

                <?php
                    // 첫번째 링크가 있는데, 그것이 유튜브 동영상 URL인 경우
                    } else if (strpos($link_1, 'youtu') !== false) {
                ?>

                        <div class="card border">
                            <iframe width="100%" height="233" src="<?php echo $link_1; ?>" frameborder="0" allowfullscreen=""></iframe>
                            <div class="p-30">
                                <div class="d-flex no-block font-13">
                                    <span class=""><?php echo datetimeConv( $list[$i]['wr_datetime'] ); ?></span>
                                    <a href="#" class="link ml-auto"><?php echo $list[$i]['name']; ?></a>
                                </div>
                                <h5 class="m-t-20">
                                    <?php
                                    // 공용 최근게시물 제목 가져오기
                                    incWithVar(ACETHEME_SKIN_INC_LATEST_PATH.'/title_latest.php', array(
                                        'list_obj' => $list[$i]
                                    ));
                                    ?>
                                </h5>
                                <p class="m-t-20 m-b-20">
                                    <a href="<?php echo $list[$i]['href'] ?>">
                                        <?php
                                        echo $_ACETHEME->get_wr_content($list[$i]['wr_content']);
                                        ?>
                                    </a>
                                </p>
                            </div>
                        </div>

                <?php
                    // 첫번째 링크가 있을 경우
                    } else if (!empty($link_1)) {
                ?>

                        <div class="card border text-white <?php echo $bg_mix; ?>">
                            <div class="p-30">
                                <div class="d-flex no-block font-13">
                                    <span class=""><?php echo datetimeConv( $list[$i]['wr_datetime'] ); ?></span>
                                    <a href="#" class="ml-auto white-link"><?php echo $list[$i]['name']; ?></a>
                                </div>
                                <h5 class="m-t-30 m-b-20">
                                    <?php
                                    // 공용 최근게시물 제목 가져오기
                                    incWithVar(ACETHEME_SKIN_INC_LATEST_PATH.'/title_latest.php', array(
                                        'list_obj' => $list[$i],
                                        'is_white_link' => true
                                    ));
                                    ?>
                                </h5>
                            </div>
                        </div>

                <?php
                    // 내용만 있는 경우
                    } else {
                ?>

                        <!--내용만 있는 경우 : 무배경-->
                        <div class="card border">
                            <div class="p-30">
                                <div class="d-flex no-block font-13">
                                    <span class=""><?php echo datetimeConv( $list[$i]['wr_datetime'] ); ?></span>
                                    <a href="#" class="link ml-auto"><?php echo $list[$i]['name']; ?></a>
                                </div>
                                <h5 class="m-t-20">
                                    <?php
                                    // 공용 최근게시물 제목 가져오기
                                    incWithVar(ACETHEME_SKIN_INC_LATEST_PATH.'/title_latest.php', array(
                                        'list_obj' => $list[$i]
                                    ));
                                    ?>
                                </h5>
                                <p class="m-t-20 m-b-20">
                                    <a href="<?php echo $list[$i]['href'] ?>">
                                        <?php
                                        echo $_ACETHEME->get_wr_content($list[$i]['wr_content']);
                                        ?>
                                    </a>
                                </p>
                            </div>
                        </div>

                <?php
                    } // end if
                } // end for
                ?>
            </div><!-- // .card-columns -->
	    <?php }  ?>

        <?php
        if (count($list) == 0) {
        ?>

            <div class="card border mb-0">
                <div class="card-body">
                    <p class="text-center mb-0 p-5">게시물이 없습니다!</p>
                </div>
            </div>

        <?php
        }
        ?>


    </div>
</div>