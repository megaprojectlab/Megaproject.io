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

// 페이지 파라미터 가져오기
$page = $_GET["page"];
if (!$page) {
	$page = 1;
}

?>


<div class="mini-spacer feature9">
    <div class="container">
        <?php
	    // 공용 헤드라인 가져오기
	    incWithVar(ACETHEME_SKIN_INC_LATEST_PATH.'/headline_latest.php', array(
		    'bo_table' => $bo_table,
		    'bo_subject' => $bo_subject
	    ));
	    ?>
        <div class="row">

	        <?php
	        for ($i=0; $i<$list_count; $i++) {

		        $is_big_head_first = $_ACETHEME->is_big_head_first($page, $i);
		        $big_head_content_len = $_ACETHEME->get_big_head_content_len($page, $i);
		        $big_head_grid = $_ACETHEME->get_big_head_grid($page, $i);

                $thumb = get_list_thumbnail($bo_table, $list[$i]['wr_id'], $thumb_width, $thumb_height, false, true);

                if($thumb['src']) {
                    $img = $thumb['src'];
                } else {
                    $img = 'https://via.placeholder.com/'.$thumb_width.'x'.$thumb_height.'.png?text=No Images';
                    $thumb['alt'] = '이미지가 없습니다.';
                }
                $img_content = '<img src="'.$img.'" alt="'.$thumb['alt'].'" class="card-img-top">';

		        //1번째 및 2번째의 경우 상단 보더 표시하지 않음
		        $class_b_t = "";
		        if($i == 0 || $i == 1){
			        $class_b_t = "";
		        } else{
			        $class_b_t = "b-t";
		        }

                //홀짝 구분하여 우측 보더 표시
		        $class_b_r = "";
                if($i % 2 == 0){
	                $class_b_r = "b-r";
		        } else{
	                $class_b_r = "";
		        }

		        ?>

                <!-- Column -->
                <div class="col-md-6 wrap-feature9-box <?php echo $class_b_t; ?> <?php echo $class_b_r; ?>">
                    <div class="card" data-aos="fade-left" data-aos-duration="1200">
                        <div class="card-body d-flex">
                            <?php
                            if ($i > 0) {
                            ?>
                                <div class="icon-space">
                                    <?php
                                    echo $_ACETHEME->get_icon('smile', 'fa-4x text-success-gradiant');
                                    ?>
                                </div>
	                        <?php
                            }
	                        ?>
                            <div class="align-self-center">
                                <h<?php echo $is_big_head_first ? '2' : '5' ?> class="">
	                                <?php
	                                // 공용 최근게시물 제목 가져오기
	                                incWithVar(ACETHEME_SKIN_INC_LATEST_PATH.'/title_latest.php', array(
		                                'list_obj' => $list[$i]
	                                ));
	                                ?>
                                </h<?php echo $is_big_head_first ? '2' : '5' ?>>
                                <p class="m-t-15 <?php echo $is_big_head_first ? 'font-22' : ''; ?>">
                                    <a href="<?php echo $list[$i]['href'] ?>">
		                                <?php
		                                echo $_ACETHEME->get_wr_content($list[$i]['wr_content'], $big_head_content_len);
		                                ?>
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

	        <?php }  ?>
	        <?php if ($list_count == 0) { //게시물이 없을 때  ?>
                <div class="col-12">
                    <div class="card border mb-0">
                        <div class="card-body">
                            <p class="text-center mb-0 p-5">게시물이 없습니다!</p>
                        </div>
                    </div>
                </div>
	        <?php }  ?>



        </div>
    </div>
</div>