<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$qa_skin_url.'/style.css">', 0);
?>

<!-- 게시물 작성/수정 시작 { -->
<div class="container mt-3 mb-5">
    <div class="row">
        <div class="col-md-12">
            <form name="fwrite" id="fwrite" action="<?php echo $action_url ?>" onsubmit="return fwrite_submit(this);" method="post" enctype="multipart/form-data" autocomplete="off">
                <input type="hidden" name="w" value="<?php echo $w ?>">
                <input type="hidden" name="qa_id" value="<?php echo $qa_id ?>">
                <input type="hidden" name="sca" value="<?php echo $sca ?>">
                <input type="hidden" name="stx" value="<?php echo $stx ?>">
                <input type="hidden" name="page" value="<?php echo $page ?>">
                <input type="hidden" name="token" value="<?php echo $token ?>">
	            <?php
	            $option = '';
	            $option_hidden = '';
	            $option = '';

	            if ($is_dhtml_editor) {
		            $option_hidden .= '<input type="hidden" name="qa_html" value="1">';
	            } else {
		            $option .= "\n".'<input type="checkbox" id="qa_html" name="qa_html" onclick="html_auto_br(this);" value="'.$html_value.'" '.$html_checked.'>'."\n".'<label for="qa_html">html</label>';
	            }

	            echo $option_hidden;
	            ?>

                <div class="card border mb-5">
                    <div class="card-body">
                        <header class="mb-4">
                            <h4 class="card-title">1:1 문의</h4>
                        </header>

	                    <?php if ($category_option) { ?>
                        <div class="form-group form-row">
                            <div class="col">
                                <select name="qa_category" id="qa_category" class="form-control" required>
                                    <option value="">분류를 선택하세요</option>
	                                <?php echo $category_option ?>
                                </select>
                            </div>
                            <div class="col">

                            </div>
                        </div>
	                    <?php } ?>

	                    <?php if ($is_email || $is_hp) { ?>
                            <div class="form-group form-row">
	                            <?php if ($is_emaill) { ?>
                                    <div class="col-12 col-sm-6">
                                        <input type="text" name="qa_email" id="qa_email" class="form-control <?php echo $req_email.' '; ?>" value="<?php echo get_text($write['qa_email']); ?>" size="50" maxlength="100" placeholder="이메일" <?php echo $req_email; ?>>
                                    </div>
	                            <?php } ?>
	                            <?php if ($is_hp) { ?>
                                    <div class="col-12 col-sm-6">
                                        <input type="text" name="qa_hp" id="qa_hp" class="form-control <?php echo $req_hp.' '; ?>" value="<?php echo get_text($write['qa_hp']); ?>"  size="30" placeholder="휴대폰" <?php echo $req_hp; ?>>
                                    </div>
	                            <?php } ?>
                            </div>
	                    <?php } ?>

                        <div class="form-group form-row">
                            <div class="col-4 col-sm-3 col-md-3 col-lg-2">
                                <label class="custom-control custom-checkbox">
                                    <input type="checkbox" name="qa_email_recv" id="qa_email_recv" class="custom-control-input" value="1" <?php if($write['qa_email_recv']) echo 'checked="checked"'; ?>>
                                    <div class="custom-control-label" for="answer">답변받기</a></div>
                                </label>
                            </div>
	                        <?php if($qaconfig['qa_use_sms']) { ?>
                                <div class="col-4 col-sm-3 col-md-3 col-lg-2">
                                    <label class="custom-control custom-checkbox">
                                        <input type="checkbox" name="qa_sms_recv" id="qa_sms_recv" class="custom-control-input" value="1" <?php if($write['qa_sms_recv']) echo 'checked="checked"'; ?>>
                                        <div class="custom-control-label" for="qa_sms_recv">답변등록 SMS알림 수신</div>
                                    </label>
                                </div>
	                        <?php } ?>
                        </div>
                        <div class="form-group form-row">
                            <div class="col">
                                <div class="input-group">
                                    <input type="text" name="qa_subject" id="qa_subject" class="form-control required" value="<?php echo get_text($write['qa_subject']); ?>" size="50" maxlength="255" placeholder="제목" required>
                                    <!--<span class="input-group-append"><button class="btn btn-primary">임시 저장된 글 (15)</button></span>-->
                                </div>
                            </div>
                        </div>
                        <div class="form-group form-row">
                            <div class="col <?php echo $is_dhtml_editor ? $config['cf_editor'] : ''; ?>">
	                            <?php echo $editor_html; // 에디터 사용시는 에디터로, 아니면 textarea 로 노출 ?>
                            </div>
                        </div>

                        <div class="form-group form-row">
                            <div class="col-12 col-lg-7">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="fas fa-upload mr-2"></i>파일 #1
                                        </span>
                                    </div>
                                    <div class="custom-file">
                                        <input type="file" name="bf_file[1]" id="bf_file_1" class="custom-file-input" title="파일첨부 1 :  용량 <?php echo $upload_max_filesize; ?> 이하만 업로드 가능">
                                        <label class="custom-file-label" for="bf_file_1">파일 업로드 (클릭)</label>
                                    </div>
                                </div>
                            </div>
	                        <?php if($w == 'u' && $write['qa_file1']) { ?>
                                <div class="col-12 col-lg-5">
                                    <div class="input-group">
                                        <div class="input-group">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">현재 파일</span>
                                                </div>
                                                <input type="text" class="form-control" value="<?php echo $write['qa_source1']; ?>" readonly>
                                                <div class="input-group-apepend">
                                                    <div class="input-group-text">
                                                        <input type="checkbox" name="bf_file_del[1]" id="bf_file_del1" value="1">
                                                        <label class="form-check-label ml-2" for="bf_file_del1">
                                                            파일삭제
                                                        </label>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div><!-- // .col-->
	                        <?php } ?>
                        </div><!-- // .form-group -->

                        <div class="form-group form-row">
                            <div class="col-12 col-lg-7">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="fas fa-upload mr-2"></i>파일 #2
                                        </span>
                                    </div>
                                    <div class="custom-file">
                                        <input type="file" name="bf_file[2]" id="bf_file_2" class="custom-file-input" title="파일첨부 2 :  용량 <?php echo $upload_max_filesize; ?> 이하만 업로드 가능">
                                        <label class="custom-file-label" for="bf_file_2">파일 업로드 (클릭)</label>
                                    </div>
                                </div>
                            </div>
	                        <?php if($w == 'u' && $write['qa_file2']) { ?>
                                <div class="col-12 col-lg-5">
                                    <div class="input-group">
                                        <div class="input-group">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">현재 파일</span>
                                                </div>
                                                <input type="text" class="form-control" value="<?php echo $write['qa_source2']; ?>" readonly>
                                                <div class="input-group-apepend">
                                                    <div class="input-group-text">
                                                        <input type="checkbox" name="bf_file_del[2]" id="bf_file_del2" value="1">
                                                        <label class="form-check-label ml-2" for="bf_file_del1">
                                                            파일삭제
                                                        </label>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div><!-- // .col-->
	                        <?php } ?>
                        </div><!-- // .form-group -->

                    </div> <!-- card-body end .// -->
                    <div class="card-footer">
                        <div class="row justify-content-center">
                            <div class="col-sm-4">
                                <a href="<?php echo $list_href; ?>" class="btn btn-light btn-block" role="button">취소</a>
                            </div>
                            <div class="col-sm-4">
                                <button type="submit" class="btn btn-primary btn-block">작성완료</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
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

	    <?php if ($is_hp) { ?>
        var hp = f.qa_hp.value.replace(/[0-9\-]/g, "");
        if(hp.length > 0) {
            alert("휴대폰번호는 숫자, - 으로만 입력해 주십시오.");
            return false;
        }
	    <?php } ?>

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
<!-- } 게시물 작성/수정 끝 -->