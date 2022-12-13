<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$board_skin_url.'/style.css">', 0);
?>


<!-- 게시물 작성/수정 시작 { -->
            <!-- ============================================================== -->
            <!-- Container -->
            <!-- ============================================================== -->
            <div class="container <?php echo $theme_config['margin_content_top']; ?>">
                <div class="row">
                    <div class="col-12">
                        <form name="fwrite" id="fwrite" action="<?php echo $action_url ?>" onsubmit="return fwrite_submit(this);" method="post" enctype="multipart/form-data" autocomplete="off" style="width:<?php echo $width; ?>">
                            <input type="hidden" name="uid" value="<?php echo get_uniqid(); ?>">
                            <input type="hidden" name="w" value="<?php echo $w ?>">
                            <input type="hidden" name="bo_table" value="<?php echo $bo_table ?>">
                            <input type="hidden" name="wr_id" value="<?php echo $wr_id ?>">
                            <input type="hidden" name="sca" value="<?php echo $sca ?>">
                            <input type="hidden" name="sfl" value="<?php echo $sfl ?>">
                            <input type="hidden" name="stx" value="<?php echo $stx ?>">
                            <input type="hidden" name="spt" value="<?php echo $spt ?>">
                            <input type="hidden" name="sst" value="<?php echo $sst ?>">
                            <input type="hidden" name="sod" value="<?php echo $sod ?>">
                            <input type="hidden" name="page" value="<?php echo $page ?>">
	                        <?php
	                        $option = '';
	                        $option_hidden = '';
	                        if ($is_notice || $is_html || $is_secret || $is_mail) {
		                        $option = '';
		                        if ($is_notice) {
			                        $option .= "\n" . '<div class="col-4 col-sm-3 col-md-3 col-lg-2">';
			                            $option .= "\n" . '<label class="custom-control custom-checkbox">';
			                                $option .= "\n" . '<input type="checkbox" class="custom-control-input" id="notice" name="notice" value="1" ' . $notice_checked . '>' . "\n" . '<div class="custom-control-label" for="notice">공지</a></div>';
			                            $option .= "\n" . '</label>';
                                    $option .= "\n" . '</div>';
		                        }

		                        if ($is_html) {
			                        if ($is_dhtml_editor) {
				                        $option_hidden .= '<input type="hidden" value="html1" name="html">';
			                        } else {
				                        $option .= "\n" . '<div class="col-4 col-sm-3 col-md-3 col-lg-2">';
				                            $option .= "\n" . '<label class="custom-control custom-checkbox">';
				                                $option .= "\n" . '<input type="checkbox" class="custom-control-input" id="html" name="html" onclick="html_auto_br(this);" value="' . $html_value . '" ' . $html_checked . '>' . "\n" . '<div class="custom-control-label" for="html">HTML</a></div>';
				                            $option .= "\n" . '</label>';
				                        $option .= "\n" . '</div>';
			                        }
		                        }

		                        if ($is_secret) {
			                        if ($is_admin || $is_secret == 1) {
				                        $option .= "\n" . '<div class="col-4 col-sm-3 col-md-3 col-lg-2">';
				                            $option .= "\n" . '<label class="custom-control custom-checkbox">';
				                                $option .= "\n" . '<input type="checkbox" class="custom-control-input" id="secret" name="secret" value="secret" ' . $secret_checked . '>' . "\n" . '<div class="custom-control-label" for="secret">비밀글</a></div>';
				                            $option .= "\n" . '</label>';
				                        $option .= "\n" . '</div>';
			                        } else {
				                        $option_hidden .= '<input type="hidden" name="secret" value="secret">';
			                        }
		                        }

		                        if ($is_mail) {
			                        $option .= "\n" . '<div class="col-4 col-sm-3 col-md-3 col-lg-2">';
			                            $option .= "\n" . '<label class="custom-control custom-checkbox">';
			                                $option .= "\n" . '<input type="checkbox" class="custom-control-input" id="mail" name="mail" value="mail" ' . $recv_email_checked . '>' . "\n" . '<div class="custom-control-label" for="mail">답변메일받기</a></div>';
			                            $option .= "\n" . '</label>';
			                        $option .= "\n" . '</div>';
		                        }
	                        }

	                        echo $option_hidden;
	                        ?>
                            <div class="card border">
                                <article class="card-body">
                                    <header class="mb-4">
                                        <h4 class="card-title">글쓰기</h4>
                                    </header>

                                    <!-- 첨부파일 -->
                                    <div class="alert alert-primary" role="alert">
                                        <h5>
                                            <i class="fas fa-info-circle mr-2" aria-hidden="true"></i>슬라이더 사용방법<br/>
                                        </h5>
                                        1) <span class="text-primary font-bold">배경이미지</span> or <span class="text-primary font-bold">동영상</span> 둘중에 무조건 하나는 입력해야 함<br/>
                                        2) 동영상을 배경으로 사용하는 것이 아니라, 직접 재생해야 하는 경우 <span class="text-primary font-bold">동영상 미리보기 이미지</span>도 추가<br/>
                                        -- 즉, 동영상 미리보기 이미지 존재유무로 직접 재생 의지를 판단 <br/>
                                        -- 일부 슬라이더 최근게시물만 동영상 직접 재생을 지원 (ace-slider-2 및 ace-slider-3)<br/>
                                        3) 동영상은 <span class="text-primary font-bold">mp4 파일</span>로 변환하여 업로드해야 함<br/>
                                        4) 슬라이더는 본 <span class="text-primary font-bold">슬라이더 게시판</span> + <span class="text-primary font-bold">슬라이더 최근 게시물</span>을 세트로 사용해야 함<br/>
                                        -- 슬라이더 최근게시물 (택 1) : ace-slider-1, ace-slider-2, ace-slider-3, ace-slider-4
                                    </div>

	                                <?php
                                    for ($i = 0; $is_file && $i < $file_count; $i++) {
                                        $attach_file_label = "";
                                        if ($i == 0) {
	                                        $attach_file_label = "배경이미지";
                                        } else if ($i == 1) {
	                                        $attach_file_label = "동영상";
                                        } else if ($i == 2) {
	                                        $attach_file_label = "동영상 미리보기 이미지";
                                        } else {
	                                        $attach_file_label = "파일 #".($i + 1);
                                        }
                                    ?>

                                        <div class="form-group form-row mb-1">
                                            <div class="col-12 col-lg-7">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="fas fa-upload mr-2"></i><?php echo $attach_file_label; ?>
                                                        </span>
                                                    </div>
                                                    <div class="custom-file">
                                                        <input type="file" name="bf_file[]" id="bf_file_<?php echo $i + 1 ?>" class="custom-file-input" title="파일첨부 <?php echo $i + 1 ?> : 용량 <?php echo $upload_max_filesize ?> 이하만 업로드 가능">
                                                        <label class="custom-file-label" for="bf_file_<?php echo $i + 1 ?>">파일 업로드 (클릭)</label>
                                                    </div>
                                                </div>
                                            </div>
			                                <?php if ($w == 'u' && $file[$i]['file']) { ?>
                                                <div class="col-12 col-lg-5">
                                                    <div class="input-group">
                                                        <div class="input-group">
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text">현재 파일</span>
                                                                </div>
                                                                <input type="text" class="form-control" value="<?php echo $file[$i]['source'] . '(' . $file[$i]['size'] . ')'; ?>" readonly>
                                                                <div class="input-group-apepend">
                                                                    <div class="input-group-text">
                                                                        <input type="checkbox" name="bf_file_del[<?php echo $i; ?>]" id="bf_file_del<?php echo $i ?>" value="1">
                                                                        <label class="form-check-label ml-2" for="bf_file_del<?php echo $i ?>">
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
                                            <div class="col-12">
				                                <?php if ($is_file_content) { ?>
                                                    <input type="text" class="form-control mt-1" name="bf_content[]" value="<?php echo ($w == 'u') ? $file[$i]['bf_content'] : ''; ?>" title="파일 설명을 입력해주세요" placeholder="파일 설명을 입력해주세요" size="50">
				                                <?php } ?>
                                            </div><!-- // .col-->
                                        </div><!-- // .form-group -->
	                                <?php } ?>
                                    <!-- // 첨부파일 -->


                                    <hr class="m-5"/>

                                    <?php if ($is_category) { ?>
                                        <div class="form-group form-row">
                                            <div class="col">
                                                <select name="ca_name" id="ca_name" required class="form-control" required >
                                                    <option value="">분류를 선택하세요</option>
                                                    <?php echo $category_option ?>
                                                </select>
                                            </div>
                                            <div class="col">

                                            </div>
                                        </div>
                                    <?php } ?>
                                    <?php if ($is_name || $is_password) { ?>
                                        <div class="form-group form-row">
                                            <!--<label class="col-md-3 col-form-label">이름 / 비밀번호</label>-->
                                            <?php if ($is_name) { ?>
                                                <div class="col">
                                                    <input type="text" class="form-control" id="wr_name" name="wr_name" value="<?php echo $name ?>" placeholder="이름" required>
                                                </div>
                                            <?php } ?>
                                            <?php if ($is_password) { ?>
                                                <div class="col">
                                                    <input type="password" class="form-control <?php echo $password_required ?>" id="wr_password" name="wr_password"  placeholder="비밀번호" <?php echo $password_required ?>>
                                                </div>
                                            <?php } ?>
                                        </div>
                                    <?php } ?>
                                    <?php if ($is_email || $is_homepage) { ?>
                                        <div class="form-group form-row">
                                            <!--<label class="col-md-3 col-form-label">이메일 / 웹사이트</label>-->
                                            <?php if ($is_email) { ?>
                                                <div class="col">
                                                    <input type="text" class="form-control" id="wr_email" name="wr_email" value="<?php echo $email ?>" placeholder="이메일">
                                                </div>
                                            <?php } ?>
                                            <?php if ($is_homepage) { ?>
                                                <div class="col">
                                                    <input type="text" class="form-control" id="wr_homepage" name="wr_homepage" value="<?php echo $homepage ?>" size="50" placeholder="홉페이지">
                                                </div>
                                            <?php } ?>
                                        </div>
                                    <?php } ?>
                                    <?php if ($option) { ?>
                                        <div class="form-group form-row">
                                            <?php echo $option ?>
                                            <!--<div class="col-4 col-sm-3 col-md-3 col-lg-2">
                                                <label class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                    <div class="custom-control-label" for="customCheck1">공지</a></div>
                                                </label>
                                            </div>-->
                                        </div>
                                    <?php } ?>
                                    <div class="form-group form-row">
                                        <!--<label class="col-md-3 col-form-label">제목</label>-->
                                        <div class="col">
                                            <div class="input-group" id="autosave_wrapper">
                                                <input type="text" class="form-control" id="wr_subject" name="wr_subject" value="<?php echo $subject ?>" size="50" maxlength="255" placeholder="제목" required>
                                                <?php
                                                    if ($is_member) { // 임시 저장된 글 기능
                                                ?>
                                                        <script src="<?php echo G5_JS_URL; ?>/autosave.js"></script>
                                                        <?php
                                                        if ($editor_content_js) {
                                                            echo $editor_content_js;
                                                        }
                                                        ?>
                                                    <span class="input-group-append">
                                                        <button class="btn btn-primary" id="btn_autosave" >임시 <span class="hidden-sm"> 저장된 글</span> (<span id="autosave_count"><?php echo $autosave_count; ?></span>)</button>
                                                    </span>
                                                <?php } ?>
                                            </div>
                                            <?php if ($is_member) { ?>
                                                <div id="autosave_pop" class="autosave-wrap">
                                                    <strong>임시 저장된 글 목록</strong>
                                                    <button type="button" class="btn btn-primary btn-block autosave_close">닫기</button>
                                                    <ul></ul>
                                                    <button type="button" class="btn btn-primary btn-block autosave_close">닫기</button>
                                                </div>
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="form-group form-row">
                                        <!--<label class="col-md-3 col-form-label">내용</label>-->
                                        <div class="col wr_content">
                                            <?php if ($write_min || $write_max) { ?>
                                                <!-- 최소/최대 글자 수 사용 시 -->
                                                <div class="alert alert-info alert-sm" id="char_count_desc">이 게시판은 최소 <strong><?php echo $write_min; ?></strong>글자 이상, 최대 <strong><?php echo $write_max; ?></strong>글자 이하까지 글을 쓰실 수 있습니다.</div>
                                            <?php } ?>
                                            <?php echo $editor_html; // 에디터 사용시는 에디터로, 아니면 textarea 로 노출
                                            ?>
                                            <?php if ($write_min || $write_max) { ?>
                                                <!-- 최소/최대 글자 수 사용 시 -->
                                                <div id="char_count_wrap"><span id="char_count"></span>글자</div>
                                            <?php } ?>
                                        </div>
                                    </div>

	                                <?php if ($is_use_captcha) { //자동등록방지  ?>
                                        <div class="form-row">
                                            <div class="col">
			                                    <?php echo $captcha_html ?>
                                            </div>
                                        </div>
	                                <?php } ?>

                                    <div class="form-row mt-5 mb-3 justify-content-center">
                                        <div class="col-6 col-sm-4 col-md-3">
                                            <a href="<?php echo ace_get_pretty_board_url($bo_table) ?>" class="btn btn-secondary btn-block">취소</a>
                                        </div>
                                        <div class="col-6 col-sm-4 col-md-3">
                                            <button type="submit" class="btn btn-primary btn-block" id="btn_submit" accesskey="s">작성완료</button>
                                        </div>
                                    </div>

                                </article> <!-- card-body end .// -->
                                <!--<div class="card-footer text-center">
                                    Have an account? <a href="">Log In</a>
                                </div>-->
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Container -->
            <!-- ============================================================== -->

<script type="text/javascript">
    $(function() {
        //에디터안 이미지 처리
        $('.wr_content iframe').contents().find('.se2_inputarea img').css('max-width', '100%');
        $('.btn_cke_sc').click(function() {
            setTimeout(function() {
                $('.btn_cke_sc_close').addClass('btn btn-danger btn-sm');
            }, 100);
        }).addClass('btn btn-secondary btn-sm');
    });
</script>
<script type="text/javascript">
	<?php if ($write_min || $write_max) { ?>
        // 글자수 제한
        var char_min = parseInt(<?php echo $write_min; ?>); // 최소
        var char_max = parseInt(<?php echo $write_max; ?>); // 최대
        check_byte("wr_content", "char_count");

        $(function() {
            $("#wr_content").on("keyup", function() {
                check_byte("wr_content", "char_count");
            });
        });
	<?php } ?>

    function html_auto_br(obj) {
        if (obj.checked) {
            result = confirm("자동 줄바꿈을 하시겠습니까?\n\n자동 줄바꿈은 게시물 내용중 줄바뀐 곳을<br>태그로 변환하는 기능입니다.");
            if (result)
                obj.value = "html2";
            else
                obj.value = "html1";
        } else
            obj.value = "";
    }

    function fwrite_submit(f) {
		<?php echo $editor_js; // 에디터 사용시 자바스크립트에서 내용을 폼필드로 넣어주며 내용이 입력되었는지 검사함
		?>

        var subject = "";
        var content = "";
        $.ajax({
            url: g5_bbs_url + "/ajax.filter.php",
            type: "POST",
            data: {
                "subject": f.wr_subject.value,
                "content": f.wr_content.value
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
            alert("제목에 금지단어('" + subject + "')가 포함되어있습니다");
            f.wr_subject.focus();
            return false;
        }

        if (content) {
            alert("내용에 금지단어('" + content + "')가 포함되어있습니다");
            if (typeof(ed_wr_content) != "undefined")
                ed_wr_content.returnFalse();
            else
                f.wr_content.focus();
            return false;
        }

        if (document.getElementById("char_count")) {
            if (char_min > 0 || char_max > 0) {
                var cnt = parseInt(check_byte("wr_content", "char_count"));
                if (char_min > 0 && char_min > cnt) {
                    alert("내용은 " + char_min + "글자 이상 쓰셔야 합니다.");
                    return false;
                } else if (char_max > 0 && char_max < cnt) {
                    alert("내용은 " + char_max + "글자 이하로 쓰셔야 합니다.");
                    return false;
                }
            }
        }

		<?php echo $captcha_js; // 캡챠 사용시 자바스크립트에서 입력된 캡챠를 검사함
		?>

        document.getElementById("btn_submit").disabled = "disabled";

        return true;
    }
</script>


<!-- } 게시물 작성/수정 끝 -->