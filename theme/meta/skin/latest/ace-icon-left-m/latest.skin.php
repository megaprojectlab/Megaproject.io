<?php
global $_ACETHEME;
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH.'/thumbnail.lib.php');

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$latest_skin_url.'/style.css">', 0);
$thumb_first_width = 630;
$thumb_first_height = 450;
$thumb_width = 630;
$thumb_height = 450;
$list_count = (is_array($list) && $list) ? count($list) : 0;
?>


<div class="mini-spacer feature5">
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
                ?>

                    <!-- Column -->
                    <div class="wrap-feature5-box">
                        <div class="card border">
                            <div class="card-body d-flex">
                                <div class="icon-space">
                                    <?php
                                    echo $_ACETHEME->get_icon('smile', 'text-success-gradiant');
                                    ?>
                                </div>
                                <div class="">
                                    <h6 class="">
                                        <?php
                                        // 공용 최근게시물 제목 가져오기
                                        incWithVar(ACETHEME_SKIN_INC_LATEST_PATH.'/title_latest.php', array(
                                            'list_obj' => $list[$i]
                                        ));
                                        ?>
                                    </h6>
                                    <p class="m-t-15">
                                        <a href="<?php echo $list[$i]['href'] ?>">
                                            <?php
                                            echo $_ACETHEME->get_wr_content($list[$i]['wr_content']);
                                            ?>
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php }  ?>
            </div><!-- // .card-columns -->
	    <?php }  ?>

        <?php if ($list_count == 0) { //게시물이 없을 때  ?>
            <div class="row">
                <div class="col-12">
                    <div class="card border mb-0">
                        <div class="card-body">
                            <p class="text-center mb-0 p-5">게시물이 없습니다!</p>
                        </div>
                    </div>
                </div>
            </div>
        <?php }  ?>

    </div>
</div>