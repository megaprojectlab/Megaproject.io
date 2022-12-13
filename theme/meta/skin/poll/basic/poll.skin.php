<?php
if (!defined("_GNUBOARD_")) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$poll_skin_url.'/style.css">', 0);
?>

<!-- 설문조사 시작 { -->
<div class="card border">
    <div class="card-body">

        <form name="fpoll" action="<?php echo G5_BBS_URL ?>/poll_update.php" onsubmit="return fpoll_submit(this);" method="post">
            <input type="hidden" name="po_id" value="<?php echo $po_id ?>">
            <input type="hidden" name="skin_dir" value="<?php echo urlencode($skin_dir); ?>">

            <h3 class="card-title mb-4">
                설문조사
                <span class="float-right small">
                    <a href="<?php echo G5_BBS_URL."/poll_result.php?po_id=$po_id&amp;skin_dir=".urlencode($skin_dir); ?>" target="_blank" onclick="poll_result(this.href); return false;" class="btn btn-sm btn-outline-secondary font-medium" role="button">결과보기</a>
                    <?php if ($is_admin == "super") {  ?>
                        <a href="<?php echo G5_ADMIN_URL ?>/poll_form.php?w=u&amp;po_id=<?php echo $po_id ?>" class="" title="설문관리"><i class="fa fa-cog fa-spin fa-fw ml-2 text-danger"></i></a>
                    <?php }  ?>
                </span>
            </h3>

            <h6 class="mb-1 font-weight-bold">
                <span class="badge badge-primary mr-1 text-truncate align-middle align-self-center" style="width: 60px;">설문내용</span>
                <span class="align-middle align-self-center"><?php echo $po['po_subject'] ?></span>
            </h6>

            <h6 class="mb-1">
                <span class="badge badge-secondary mr-1 text-truncate align-middle align-self-center" style="width: 60px;">응답</span>
                <span class="align-middle align-self-center">아래에서 선택해 주세요!</span>
            </h6>


            <div class="mb-4 border border-secondary bg-light px-3 pt-2">
            <!--<div class="mb-4">-->
	            <?php for ($i=1; $i<=9 && $po["po_poll{$i}"]; $i++) {  ?>
                    <label class="custom-control custom-radio mb-1">
                        <!--<input type="radio" name="myfilter_radio" checked="" class="custom-control-input">-->
                        <input type="radio" name="gb_poll" id="gb_poll_<?php echo $i ?>" class="custom-control-input" value="<?php echo $i ?>">
                        <div class="custom-control-label text-dark"><?php echo $po['po_poll'.$i] ?></div>
                    </label>
	            <?php }  ?>

            </div>

            <button type="submit" class="btn btn-primary btn-block">투표하기</button>

        </form>

    </div>
</div>

<script>
function fpoll_submit(f)
{
    <?php
    if ($member['mb_level'] < $po['po_level'])
        echo " alert('권한 {$po['po_level']} 이상의 회원만 투표에 참여하실 수 있습니다.'); return false; ";
     ?>

    var chk = false;
    for (i=0; i<f.gb_poll.length;i ++) {
        if (f.gb_poll[i].checked == true) {
            chk = f.gb_poll[i].value;
            break;
        }
    }

    if (!chk) {
        alert("투표하실 설문항목을 선택하세요");
        return false;
    }

    var new_win = window.open("about:blank", "win_poll", "width=616,height=500,scrollbars=yes,resizable=yes");
    f.target = "win_poll";

    return true;
}

function poll_result(url)
{
    <?php
    if ($member['mb_level'] < $po['po_level'])
        echo " alert('권한 {$po['po_level']} 이상의 회원만 결과를 보실 수 있습니다.'); return false; ";
     ?>

    win_poll(url);
}
</script>
<!-- } 설문조사 끝 -->