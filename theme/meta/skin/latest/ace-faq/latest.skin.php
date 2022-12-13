<?php
global $_ACETHEME;
global $is_admin;
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$latest_skin_url.'/style.css">', 0);
$list_count = (is_array($list) && $list) ? count($list) : 0;
?>


<div class="card border">
    <div class="card-body">
		<?php
		// 공용 헤드라인 가져오기
		incWithVar(ACETHEME_SKIN_INC_LATEST_PATH.'/headline_latest.php', array(
			'bo_table' => $bo_table,
			'bo_subject' => $bo_subject
		));
		?>
        <div class="accordion mt-3" id="accordion_<?php echo $bo_table ?>">
			<?php for ($i=0; $i<$list_count; $i++) {  ?>
                <div class="card">
                    <div class="card-header bg-white" id="heading_<?php echo $bo_table ?>_<?php echo $i ?>">
                        <h5 class="mb-0">
	                        <?php
	                        // 공용 최근게시물 제목 가져오기
	                        incWithVar(ACETHEME_SKIN_INC_LATEST_PATH.'/title_latest.php', array(
		                        'list_obj' => $list[$i],
		                        'is_basic' => true,
		                        'is_faq' => true,
		                        'i' => $i,
		                        'bo_table' => $bo_table
	                        ));
	                        ?>
							<?php if ($is_admin) { ?>
                                <a href="<?php echo $list[$i]['href'] ?>"><span class="badge badge-light">글보기</span></a>
							<?php } ?>
                        </h5>
                    </div>
                    <div id="collapse_<?php echo $bo_table ?>_<?php echo $i ?>" class="collapse" data-parent="#accordion_<?php echo $bo_table ?>">
                        <div class="card-body b-b">
	                        <?php
                                echo $list[$i]['wr_content']; // 원문 그대로 출력할 경우
                                //echo $_ACETHEME->get_wr_content($list[$i]['wr_content'], 1000); // 특수문자 제거 및 출력글자수 제한할 경우
	                        ?>
                        </div>
                    </div>
                </div>
				<?php
				if ($i < (count($list) - 1)) {
					?>
                    <hr class="my-0"/>
					<?php
				}
				?>
			<?php }  ?>
			<?php if ($list_count == 0) { //게시물이 없을 때  ?>
                <div class="card">
                    <div class="row">
                        <div class="col-12">
                            <h5 class="text-center">게시물이 없습니다</h5>
                        </div>
                    </div>
                </div>
			<?php }  ?>
        </div>
    </div>
</div>
