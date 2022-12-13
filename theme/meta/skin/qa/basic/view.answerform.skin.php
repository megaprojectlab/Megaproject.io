<?php
if (!defined("_GNUBOARD_")) exit; // 개별 페이지 접근 불가
?>


<?php
if($is_admin) { // 관리자이면 답변등록
?>
    <form name="fanswer" method="post" action="./qawrite_update.php" onsubmit="return fwrite_submit(this);" autocomplete="off">
        <input type="hidden" name="qa_id" value="<?php echo $view['qa_id']; ?>">
        <input type="hidden" name="w" value="a">
        <input type="hidden" name="sca" value="<?php echo $sca ?>">
        <input type="hidden" name="stx" value="<?php echo $stx; ?>">
        <input type="hidden" name="page" value="<?php echo $page; ?>">
        <input type="hidden" name="token" value="<?php echo $token ?>">
        <?php
        $option = '';
        $option_hidden = '';
        $option = '';

        if ($is_dhtml_editor) {
            $option_hidden .= '<input type="hidden" name="qa_html" value="1">';
        } else {
    //		        $option .= "\n".'<input type="checkbox" id="qa_html" name="qa_html" onclick="html_auto_br(this);" value="'.$html_value.'" '.$html_checked.'>'."\n".'<label for="qa_html">html</label>';
            $option .= "\n" . '<div class="col-4 col-sm-3 col-md-3 col-lg-2">';
            $option .= "\n" . '<label class="custom-control custom-checkbox">';
            $option .= "\n" . '<input type="checkbox" name="qa_html"  id="qa_html" class="custom-control-input" onclick="html_auto_br(this);" value="'.$html_value.'" '.$html_checked.'>' . "\n" . '<div class="custom-control-label" for="qa_html">HTML</a></div>';
            $option .= "\n" . '</label>';
            $option .= "\n" . '</div>';
        }

        echo $option_hidden;
        ?>

        <div class="card border mb-5">
            <div class="card-body">
                <header class="mb-4">
                    <h4 class="card-title">답변등록</h4>
                </header>

                <?php if ($option) { ?>
                    <div class="form-group form-row">
                        <div class="col-12">
                            <?php echo $option; ?>
                        </div>
                    </div>
                <?php } ?>

                <div class="form-group form-row">
                    <div class="col">
                        <div class="input-group">
                            <input type="text" name="qa_subject" id="qa_subject" class="form-control required" value="" size="50" maxlength="255" placeholder="제목" required>
                            <!--<span class="input-group-append"><button class="btn btn-primary">임시 저장된 글 (15)</button></span>-->
                        </div>
                    </div>
                </div>
                <div class="form-group form-row <?php echo $is_dhtml_editor ? $config['cf_editor'] : ''; ?>">
                    <div class="col">
                        <?php echo $editor_html; // 에디터 사용시는 에디터로, 아니면 textarea 로 노출 ?>
                    </div>
                </div>

            </div> <!-- card-body end .// -->
            <div class="card-footer">
                <div class="row justify-content-center">
                    <div class="col-sm-4">
                        <button type="submit" class="btn btn-primary btn-block">작성완료</button>
                    </div>
                </div>
            </div>

            <script>
                function html_auto_br(obj)
                {
                    if (obj.checked) {
                        result = confirm("자동 줄바꿈을 하시겠습니까?\n\n자동 줄바꿈은 게시물 내용중 줄바뀐 곳을<br>태그로 변환하는 기능입니다.");
                        if (result)
                            obj.value = "2";
                        else
                            obj.value = "1";
                    }
                    else
                        obj.value = "";
                }

                function fwrite_submit(f)
                {
	                <?php echo $editor_js; // 에디터 사용시 자바스크립트에서 내용을 폼필드로 넣어주며 내용이 입력되었는지 검사함   ?>

                    var subject = "";
                    var content = "";
                    $.ajax({
                        url: g5_bbs_url+"/ajax.filter.php",
                        type: "POST",
                        data: {
                            "subject": f.qa_subject.value,
                            "content": f.qa_content.value
                        },
                        dataType: "json",
                        async: false,
                        cache: false,
                        success: function(data, textStatus) {
                            subject = data.subject;
                            content = data.content;
                        }
                    });

                    if (subject) {
                        alert("제목에 금지단어('"+subject+"')가 포함되어있습니다");
                        f.qa_subject.focus();
                        return false;
                    }

                    if (content) {
                        alert("내용에 금지단어('"+content+"')가 포함되어있습니다");
                        if (typeof(ed_qa_content) != "undefined")
                            ed_qa_content.returnFalse();
                        else
                            f.qa_content.focus();
                        return false;
                    }

                    $.ajax({
                        type: "POST",
                        url: g5_bbs_url+"/ajax.write.token.php",
                        data: { 'token_case' : 'qa_write' },
                        cache: false,
                        async: false,
                        dataType: "json",
                        success: function(data) {
                            if (typeof data.token !== "undefined") {
                                token = data.token;
                                if(typeof f.token === "undefined")
                                    $(f).prepend('<input type="hidden" name="token" value="">');
                                $(f).find("input[name=token]").val(token);
                            }
                        }
                    });

                    document.getElementById("btn_submit").disabled = "disabled";

                    return true;
                }

            </script>

        </div><!-- // .card -->
    </form>
<?php
} else { // 관리자아닌 경우 : 준비중 메시지 출력
?>
    <div class="alert alert-primary text-center mb-5 p-5" role="alert">
        고객님의 문의에 대한 답변을 준비 중입니다!
    </div>
<?php
}
?>