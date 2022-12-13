<?php
global $_ACETHEME;
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
// 주의! 다른 스킨들과 공유되므로, $theme_path로 부터 접근해야 함
add_stylesheet('<link rel="stylesheet" href="'.ACETHEME_SKIN_BOARD_URL.'/ace-basic/style.css">', 0);

// 공용 헤더 가져오기
include_once(ACETHEME_SKIN_INC_BOARD_PATH.'/header_list.php');

?>

	<ul class="card border list-group list-group-flush my-0">
		<?php
		for ($i = 0; $i < count($list); $i++) {
			?>
			<li class="list-group-item pt-2 pb-2 <?php echo $list[$i]['is_notice'] ? 'list-group-item-warning' : ''; ?>">
				<div class="row">
					<div class="col-12">

						<?php if ($is_checkbox) { ?>
							<div class="form-check form-check-inline align-middle align-self-center">
								<input class="form-check-input" type="checkbox" name="chk_wr_id[]" value="<?php echo $list[$i]['wr_id'] ?>" id="chk_wr_id_<?php echo $i ?>">
							</div>
						<?php } ?>

						<?php
						// 공용 게시판 리스트 제목 가져오기
						incWithVar(ACETHEME_SKIN_INC_BOARD_PATH.'/title_list.php', array(
							'list_obj' => $list[$i],
							'is_category' => $is_category,
							'wr_id' => $wr_id,
							'is_basic' => true,
							'is_slider' => true // 슬라이더의 경우만 추가된 부분
						));
						?>

					</div><!-- // .col -->
				</div><!-- // .row -->

				<?php
				// 공용 정렬옵션 가져오기
				incWithVar(ACETHEME_SKIN_INC_BOARD_PATH.'/sort_list.php', array(
					'grid'=> 'col-4 col-sm-4 col-md-2', // 그리드 설정
					'list_obj' => $list[$i],
					'qstr2' => $qstr2,
					'is_good' => $is_good,
					'is_nogood' => $is_nogood
				));
				?>

			</li><!-- // .list-group-item -->
		<?php } ?>
		<?php
		if (count($list) == 0) {
			echo '<li class="list-group-item pt-4 pb-4">
                            <div class="row">
                                <div class="col-12">
                                    <h5 class="mb-0 text-center">게시물이 없습니다</h5>
                                </div>
                            </div>
                        </li>';
		}
		?>
	</ul><!-- // .list-group -->

<?php
include_once(ACETHEME_SKIN_INC_BOARD_PATH.'/footer_list.php');
?>