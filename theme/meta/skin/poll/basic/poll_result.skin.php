<?php
global $_ACETHEME;
if (!defined("_GNUBOARD_")) exit; // 개별 페이지 접근 불가

$get_max_cnt = 0;

if ((int) $total_po_cnt > 0){
    foreach( $list as $k => $v ) {
        $get_max_cnt = max( array( $get_max_cnt, $v['cnt'] ) );     // 가장 높은 투표수를 뽑습니다.
    }
}

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$poll_skin_url.'/style.css">', 0);
?>

<!-- 설문조사 결과 시작 { -->
<div class="m-2">
    <h3>
        <span><?php echo $g5['title'] ?></span>
        <span class="float-right small">
            전체 <strong class="text-danger"><?php echo $nf_total_po_cnt ?></strong>표
        </span>
    </h3>
    <!-- 설문조사 결과 그래프 시작 { -->
    <div class="card border mb-1" style="border-width: 3px;">
        <div class="card-header bg-light text-center">
            <h4 class="mb-0">
                <!--<span class="badge badge-secondary mr-1">결과</span>-->
                <?php echo $po_subject ?>
            </h4>
        </div>
        <div class="card-body">
            <ul class="list-unstyled mb-0">
	        <?php
	        for ($i=1; $i<=count($list); $i++) {
                // 가장 높은 투표수와 같으면 li 태그에 poll_1st 클래스가 붙습니다.
                $poll_1st_class = ($get_max_cnt && ((int) $list[$i]['cnt'] === (int) $get_max_cnt)) ? 'poll_1st' : '';
	        ?>
                <li class="py-2">
                    <h6 class="mb-1 <?php echo $poll_1st_class; ?>">
                        <span class="badge badge-pill badge-dark mr-1"><?php echo $i ?></span><?php echo $list[$i]['content'] ?>
                        <span class="float-right">
                            <span class="badge badge-pill badge-secondary"><?php echo $list[$i]['cnt'] ?>표</span>
                        </span>
                    </h6>
                    <div class="progress" style="height: 20px;">
                        <div class="progress-bar" role="progressbar" style="width: <?php echo number_format($list[$i]['rate'], 1) ?>%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
	                        <?php echo number_format($list[$i]['rate'], 1) ?>%
                        </div>
                    </div>
                </li>
	        <?php }  ?>
            </ul>
        </div>
    </div>
    <!-- } 설문조사 결과 그래프 끝 -->

    <!-- 설문조사 기타의견 시작 { -->
	<?php if ($is_etc) {  ?>
        <ul class="list-unstyled mb-3">
            <?php for ($i=0; $i<count($list2); $i++) {  ?>
                <li class="media mb-0 px-0 py-2 border-top-0 border-left-0 border-right-0">
                    <?php echo $_ACETHEME->get_member_profile_img_poll_result(get_member_profile_img($member['mb_id'])); ?>
                    <div class="media-body align-self-center">
                        <h6 class="mt-0 mb-1">
                            <span>
                                <span><?php echo $list2[$i]['name'] ?></span>
                                <span class="ml-1"><i class="fas fa-clock mr-1" aria-hidden="true"></i><?php echo $list2[$i]['datetime'] ?></span>
                            </span>
                            <span class="float-right">
                                <!--<a href="<?php /*echo $list[$i]['del_href']; */?>" onclick="del(this.href); return false;">
                                    <i class="fa fa-trash mr-2"></i>삭제
                                </a>-->
                                <?php if ($list2[$i]['del']) { echo $list2[$i]['del']."<i class=\"fas fa-trash\" aria-hidden=\"true\"></i></a>"; }  ?>
                            </span>
                        </h6>
                        <p class="text-muted mb-0">
                            <?php echo $list2[$i]['idea'] ?>
                        </p>
                    </div>
                </li>
            <?php }  ?>
        </ul>

        <?php if ($member['mb_level'] >= $po['po_level']) {  ?>
            <form name="fpollresult" action="./poll_etc_update.php" onsubmit="return fpollresult_submit(this);" method="post" autocomplete="off" id="poll_other_q">
                <input type="hidden" name="po_id" value="<?php echo $po_id ?>">
                <input type="hidden" name="w" value="">
                <input type="hidden" name="skin_dir" value="<?php echo urlencode($skin_dir); ?>">
	            <?php if ($is_member) {  ?>
                    <input type="hidden" name="pc_name" value="<?php echo get_text(cut_str($member['mb_nick'],255)) ?>">
                <?php }  ?>
                <div class="card border mb-2">
                    <div class="card-header">
                        <h4 class="">
	                        <?php echo $po_etc ?><span class="badge badge-pill badge-secondary text-warning ml-1">기타의견</span>
                        </h4>
                    </div>
                    <div class="card-body p-0">
                        <!--<textarea class="form-control border-0" id="exampleFormControlTextarea1" rows="3" placeholder="기타의견이 있다면 입력해 주세요!"></textarea>-->
                        <input type="text" name="pc_idea" id="pc_idea"  class="form-control border-0 w-100 required" style="height: 100px;" size="47" maxlength="100" placeholder="의견을 입력해주세요" required>
                    </div>
                </div>
	            <?php if ($is_guest) {  ?>
                    <div class="mb-2">
                        <input type="text" name="pc_name" id="pc_name" class="form-control required" size="20" placeholder="이름" required>
                    </div>
	            <?php }  ?>

                <div class="row">
                    <div class="col-12 col-sm-8">
                        <?php echo captcha_html(); ?>
                    </div>
                    <div class="col-12 col-sm-4 text-right">
                        <button type="submit" class="btn btn-primary">의견남기기</button>
                    </div>
                </div>

            </form>
        <?php }  ?>
	<?php }  ?>
    <!-- } 설문조사 기타의견 끝 -->


    <!-- 설문조사 다른 결과 보기 시작 { -->
    <div class="card border mt-5 mb-5">
        <div class="card-header">
            <h4 class="">
                다른 투표 결과 보기
            </h4>
        </div>
        <div class="list-group list-group-flush">
	        <?php for ($i = 0; $i < count($list3); $i++) { ?>
                <a href="./poll_result.php?po_id=<?php echo $list3[$i]['po_id'] ?>&amp;skin_dir=<?php echo urlencode($skin_dir); ?>" class="list-group-item list-group-item-action">
                    <div class="d-flex w-100 justify-content-between">
                        <h6 class="mb-1"><?php echo $list3[$i]['subject'] ?></h6>
                        <small><?php echo $list3[$i]['date'] ?></small>
                    </div>
                </a>
	        <?php } ?>
        </div>
    </div>
    <!-- } 설문조사 다른 결과 보기 끝 -->

    <div class="card mb-1">
        <div class="card-body text-center">
            <div class="row justify-content-center">
                <div class="col-sm-4">
                    <button type="button" onclick="window.close();" class="btn btn-block btn-outline-secondary">창닫기</button>
                </div>
            </div>
        </div>
    </div>

</div>


<script>
$(function() {
    $(".poll_delete").click(function() {
        if(!confirm("해당 기타의견을 삭제하시겠습니까?"))
            return false;
    });
});

function fpollresult_submit(f)
{
    <?php if ($is_guest) { echo chk_captcha_js(); }  ?>

    return true;
}
</script>
<!-- } 설문조사 결과 끝 -->