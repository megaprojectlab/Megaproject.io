<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$member_skin_url.'/style.css">', 0);
?>

<!-- 폼메일 시작 { -->



<!-- ============================================================== -->
<!-- 메일보내기 START -->
<!-- ============================================================== -->
<form name="fformmail" action="./formmail_send.php" onsubmit="return fformmail_submit(this);" method="post" enctype="multipart/form-data">
    <input type="hidden" name="to" value="<?php echo $email ?>">
    <input type="hidden" name="attach" value="2">
	<?php if ($is_member) { // 회원이면  ?>
        <input type="hidden" name="fnick" value="<?php echo get_text($member['mb_nick']) ?>">
        <input type="hidden" name="fmail" value="<?php echo $member['mb_email'] ?>">
	<?php }  ?>
    <div class="card border m-2">
        <div class="card-body">
            <h4 class="card-title mb-4"><?php echo $name ?>님께 메일보내기</h4>
	        <?php if (!$is_member) {  ?>
                <div class="form-row">
                    <div class="col form-group">
                        <input type="text" name="fnick" id="fnick" class="form-control required" placeholder="이름" required>
                    </div>
                    <div class="col form-group">
                        <input type="text" name="fmail" id="fmail" class="form-control required" placeholder="이메일" required>
                    </div>
                </div>
	        <?php }  ?>
            <div class="form-row">
                <div class="col form-group">
                    <input type="text" name="subject" id="subject" class="form-control required" placeholder="제목" required>
                </div>
            </div>
            <div class="form-group">
                <!--<label class="custom-control custom-radio custom-control-inline">
                    <input class="custom-control-input" checked="" type="radio" name="gender" value="option1">
                    <span class="custom-control-label"> TEXT </span>
                </label>
                <label class="custom-control custom-radio custom-control-inline">
                    <input class="custom-control-input" type="radio" name="gender" value="option2">
                    <span class="custom-control-label"> HTML </span>
                </label>
                <label class="custom-control custom-radio custom-control-inline">
                    <input class="custom-control-input" type="radio" name="gender" value="option2">
                    <span class="custom-control-label"> TEXT + HTML </span>
                </label>-->
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" name="type" id="type_text" class="custom-control-input" value="0" checked>
                    <label class="custom-control-label" for="type_text">TEXT</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" name="type" id="type_html" class="custom-control-input" value="1">
                    <label class="custom-control-label" for="type_html">HTML</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" name="type" id="type_both" class="custom-control-input" value="2">
                    <label class="custom-control-label" for="type_both">TEXT + HTML</label>
                </div>
            </div>
            <div class="form-group">
                <textarea id="content" class="form-control required" rows="3" placeholder="내용" required></textarea>
            </div>
            <div class="form-group form-row mb-2">
                <div class="col-12">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="fas fa-upload mr-2"></i>파일 #1
                            </span>
                        </div>
                        <div class="custom-file">
                            <input type="file" name="file1" id="file1" class="custom-file-input" title="파일첨부 1 :  용량 <?php echo $upload_max_filesize; ?> 이하만 업로드 가능">
                            <label class="custom-file-label" for="file1">파일 업로드 (클릭)</label>
                        </div>
                    </div>
                </div>
            </div><!-- // .form-group -->
            <div class="form-group form-row">
                <div class="col-12">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="fas fa-upload mr-2"></i>파일 #2
                            </span>
                        </div>
                        <div class="custom-file">
                            <input type="file" name="file2" id="file2" class="custom-file-input" title="파일첨부 1 :  용량 <?php echo $upload_max_filesize; ?> 이하만 업로드 가능">
                            <label class="custom-file-label" for="file2">파일 업로드 (클릭)</label>
                        </div>
                    </div>
                </div>
            </div><!-- // .form-group -->
            <div class="form-group">
	            <?php echo captcha_html(); ?>
            </div>
        </div> <!-- card-body.// -->
        <div class="card-footer">
            <div class="row justify-content-center">
                <div class="col-sm-4">
                    <button type="submit" id="btn_submit" class="btn btn-primary btn-block">메일발송</button>
                </div>
                <div class="col-sm-4">
                    <button type="button" onclick="window.close();" class="btn btn-light btn-block">창닫기</button>
                </div>
            </div>
        </div>
    </div>
</form>
<!-- ============================================================== -->
<!-- 메일보내기 END -->
<!-- ============================================================== -->



<script>
with (document.fformmail) {
    if (typeof fname != "undefined")
        fname.focus();
    else if (typeof subject != "undefined")
        subject.focus();
}

function fformmail_submit(f)
{
    <?php echo chk_captcha_js();  ?>

    if (f.file1.value || f.file2.value) {
        // 4.00.11
        if (!confirm("첨부파일의 용량이 큰경우 전송시간이 오래 걸립니다.\n\n메일보내기가 완료되기 전에 창을 닫거나 새로고침 하지 마십시오."))
            return false;
    }

    document.getElementById('btn_submit').disabled = true;

    return true;
}

$(function() {

    // 커스텀 파일업로드의 파일이름 표시용
    $(".custom-file-input").on("change", function() {
        var fileName = $(this).val().split("\\").pop();
        $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
    });

});

</script>
<!-- } 폼메일 끝 -->