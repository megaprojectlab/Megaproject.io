<?php
global $_ACETHEME;
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
?>


<h3 class="mb-2 justify-content-between">
	<div class="row">
		<div class="col-6 text-light">
            <a href="<?php echo get_pretty_url($bo_table); ?>" class="font-bold"><?php echo $bo_subject ?></a>
		</div>
		<div class="col-6 text-right">
			<a href="<?php echo get_pretty_url($bo_table); ?>" class="font-16 font-bold">바로가기<i class="fas fa-caret-right text-danger ml-2" aria-hidden="true"></i></a>
		</div>
	</div>
</h3>