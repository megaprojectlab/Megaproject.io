<?php
global $_ACETHEME;
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

?>
<!-- ============================================================== -->
<!-- Container -->
<!-- ============================================================== -->
<div class="<?php echo $is_fluid_bo ? "container-fluid" : $theme_config['board_width']; ?> <?php echo $theme_config['margin_content_top']; ?>">
	<!--<h2>게시물 목록 - 기본형</h2>-->
	<div class="row">
		<?php if ( $theme_config['use_sidebar'] == 'left' && (!$theme_config['ignore_sidebar'] || !in_array($chk_filename_with_param, $theme_config['ignore_sidebar'], TRUE)) )  { ?>
            <div class="<?php echo $theme_config['grid_sidebar']; ?>">
				<?php include G5_THEME_PATH."/_sidebar/sidebar.php"; ?>
            </div>
		<?php } ?>
        <div class="<?php echo ($theme_config['use_sidebar'] == 'left' || $theme_config['use_sidebar'] == 'right') && (!$theme_config['ignore_sidebar'] || !in_array($chk_filename_with_param, $theme_config['ignore_sidebar'], TRUE)) ? $theme_config['grid_content'] : "col-12"; ?>">
			<?php
                if ($category_option) {
			?>
                    <ul class="list-inline mb-3 _cat_list">
		                <?php
		                echo $_ACETHEME->category_inline($category_option);
		                ?>
                    </ul><!-- // .list-inline -->
            <?php
                }
            ?>

			<form name="fboardlist" id="fboardlist" action="<?php echo G5_BBS_URL; ?>/board_list_update.php" onsubmit="return fboardlist_submit(this);" method="post">

				<input type="hidden" name="bo_table" value="<?php echo $bo_table ?>">
				<input type="hidden" name="sfl" value="<?php echo $sfl ?>">
				<input type="hidden" name="stx" value="<?php echo $stx ?>">
				<input type="hidden" name="spt" value="<?php echo $spt ?>">
				<input type="hidden" name="sca" value="<?php echo $sca ?>">
				<input type="hidden" name="sst" value="<?php echo $sst ?>">
				<input type="hidden" name="sod" value="<?php echo $sod ?>">
				<input type="hidden" name="page" value="<?php echo $page ?>">
				<input type="hidden" name="sw" value="">

				<div class="card border card-header mb-3 pb-1">
					<div class="row mb-0">
						<div class="col-sm-6 text-left align-self-center">
							<?php if ($is_checkbox) { ?>
                                <div class="form-check form-check-inline align-middle align-self-center">
									<input class="form-check-input" type="checkbox" id="chkall" onclick="if (this.checked) {
                                                    all_checked(true);
                                                } else {
                                                    all_checked(false);
                                                }" autocomplete="off" style="width: 18px; height: 18px;">
								</div>
							<?php } ?>
							<span class="d-inline-block mb-2 text-primary">
                                <span class="badge badge-primary mr-1 py-1 text-truncate align-middle align-self-center">검색현황</span>
                                <span class="mr-1 align-middle align-self-center">전체</span>
                                <span class="mr-1 align-middle align-self-center"><?php echo number_format($total_count) ?>건</span>
                                <span>/</span>
                                <span class="align-middle align-self-center"><?php echo $page ?>페이지</span>
                            </span>
						</div><!-- // .col -->
						<div class="col-sm-6 text-right align-self-center">
							<ul class="list-inline mb-2">
								<?php if ($is_checkbox) { ?>
									<li class="list-inline-item">
										<button type="submit" name="btn_submit" class="btn btn-link p-0" value="선택삭제" onclick="document.pressed=this.value" data-toggle="tooltip" data-placement="top" data-html="true" title="선택삭제">
											<i class="fas fa-trash text-danger" aria-hidden="true"></i>
										</button>
									</li>
									<li class="list-inline-item">
										<button type="submit" name="btn_submit" class="btn btn-link p-0" value="선택복사" onclick="document.pressed=this.value" data-toggle="tooltip" data-placement="top" data-html="true" title="선택복사">
											<i class="fas fa-copy text-danger" aria-hidden="true"></i>
										</button>
									</li>
									<li class="list-inline-item">
										<button type="submit" name="btn_submit" class="btn btn-link p-0" value="선택이동" onclick="document.pressed=this.value" data-toggle="tooltip" data-placement="top" data-html="true" title="선택이동">
											<i class="fas fa-arrows-alt text-danger" aria-hidden="true"></i>
										</button>
									</li>
								<?php } ?>
								<?php if ($admin_href) { ?>
									<li class="list-inline-item">
										<a href="<?php echo $admin_href ?>" class="btn btn-link p-0" data-toggle="tooltip" data-placement="top" data-html="true" title="관리자">
											<i class="fas fa-cog fa-spin fa-fw text-danger" aria-hidden="true"></i>
										</a>
									</li>
								<?php } ?>
								<?php if ($rss_href) { ?>
									<li class="list-inline-item">
										<a href="<?php echo $rss_href ?>" class="btn btn-link p-0" data-toggle="tooltip" data-placement="top" data-html="true" title="RSS">
											<i class="fas fa-rss text-warning" aria-hidden="true"></i>
										</a>
									</li>
								<?php } ?>
								<?php if ($write_href) { ?>
									<li class="list-inline-item">
										<a href="<?php echo $write_href ?>" class="btn btn-link p-0" data-toggle="tooltip" data-placement="top" data-html="true" title="글쓰기">
											<i class="fas fa-pen" aria-hidden="true"></i>
										</a>
									</li>
								<?php } ?>
							</ul>
						</div><!-- // .col -->
					</div><!-- // .row -->
				</div><!-- // .card-header -->