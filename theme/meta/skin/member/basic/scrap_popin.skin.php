<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$member_skin_url.'/style.css">', 0);
?>

<!-- 스크랩 시작 { -->
<div class="card border m-2">
    <div class="card-body">
        <h4 class="card-title mb-4">스크랩하기</h4>
        <form name="f_scrap_popin" action="./scrap_popin_update.php" method="post">
            <input type="hidden" name="bo_table" value="<?php echo $bo_table ?>">
            <input type="hidden" name="wr_id" value="<?php echo $wr_id ?>">
            <div class="form-group">
                <label>스크랩대상</label>
                <input type="text" class="form-control" value="<?php echo get_text(cut_str($write['wr_subject'], 255)) ?>" placeholder="" readonly>
            </div>
            <div class="form-group">
                <label>댓글작성</label>
                <textarea name="wr_content" id="wr_content" class="form-control mb-2" rows="3"></textarea>
                <div class="alert alert-info" role="alert">
                    <i class="fa fa-smile mr-2" aria-hidden="true"></i><strong>스크랩</strong>을 하시면서 격려의 댓글을 남겨보세요!
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-sm-4">
                    <button type="submit" class="btn btn-primary btn-block">스크랩</button>
                </div>
            </div>
        </form>
    </div> <!-- card-body.// -->
    <!--<div class="card-footer">
		<div class="row justify-content-center">
			<div class="col-sm-4">
				<button type="submit" class="btn btn-primary btn-block">스크랩</button>
			</div>
		</div>
	</div>-->
</div>
<!-- } 스크랩 끝 -->