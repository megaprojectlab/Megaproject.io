<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

//아래는 에러 확인용 : 개발완료 후 삭제해야 함
//error_reporting(E_ALL);
//ini_set("display_errors", 1);

?>

<script>
// 글자수 제한
var char_min = parseInt(<?php echo $comment_min ?>); // 최소
var char_max = parseInt(<?php echo $comment_max ?>); // 최대
</script>


<div class="card border mb-5">
    <div class="card-body">
        <header class="mb-4">
            <h3 class="card-title">
                댓글<small class="text-primary ml-2"><?php echo $view['wr_comment']; ?></small>
                <button type="button" class="btn btn-secondary float-right _btn_comments_collapse" data-toggle="collapse" data-target="._ct_comments">
                    <i class="fas fa-angle-up mr-2"></i>댓글닫기
                </button>
                <script>
                    jQuery(function($) {
                        var inner_html = '';
                        $('._ct_comments').collapse();
                        $('._btn_comments_collapse').on('click', function () {
                            if ( $('._ct_comments').is(':visible') ) {
                                inner_html = '<i class="fas fa-angle-down mr-2"></i>댓글열기';
                            } else {
                                inner_html = '<i class="fas fa-angle-up mr-2"></i>댓글닫기';
                            }
                            $(this).html(inner_html);
                        });
                    });
                </script>
            </h3>
        </header>
        <!--<h3 class="border-bottom pb-2">댓글<small class="text-primary ml-2">35</small></h3>-->


        <!-- 댓글 목록 시작 { -->
        <div class="collapse _ct_comments">
		    <?php
		    $cmt_amt = count($list);
		    for ($i=0; $i<$cmt_amt; $i++) {
			    $comment_id = $list[$i]['wr_id'];
			    $cmt_depth = strlen($list[$i]['wr_comment_reply']) * 50;
			    $comment = $list[$i]['content'];
			    /*
				if (strstr($list[$i]['wr_option'], "secret")) {
					$str = $str;
				}
				*/
			    $comment = preg_replace("/\[\<a\s.*href\=\"(http|https|ftp|mms)\:\/\/([^[:space:]]+)\.(mp3|wma|wmv|asf|asx|mpg|mpeg)\".*\<\/a\>\]/i", "<script>doc_write(obj_movie('$1://$2.$3'));</script>", $comment);
			    $cmt_sv = $cmt_amt - $i + 1; // 댓글 헤더 z-index 재설정 ie8 이하 사이드뷰 겹침 문제 해결
			    $c_reply_href = $comment_common_url.'&amp;c_id='.$comment_id.'&amp;w=c#bo_vc_w';
			    $c_edit_href = $comment_common_url.'&amp;c_id='.$comment_id.'&amp;w=cu#bo_vc_w';
			    $is_comment_reply_edit = ($list[$i]['is_reply'] || $list[$i]['is_edit'] || $list[$i]['is_del']) ? 1 : 0;
			    ?>
                <article class="pt-3 pb-3 border-top" id="c_<?php echo $comment_id ?>" <?php if ($cmt_depth) { ?>style="margin-left:<?php echo $cmt_depth ?>px;border-top-color:#e0e0e0"<?php } ?>>
                    <ul class="list-unstyled">
                        <li class="media border-0 p-0">
	                        <?php
	                        echo $_ACETHEME->get_member_profile_img_comments(get_member_profile_img($list[$i]['mb_id']));
	                        ?>
                            <div class="media-body align-self-center">
                                <h5 class="mt-0 mb-1">
	                                <?php echo $list[$i]['name'] ?>
                                </h5>
                                <ul class="list-inline">
		                            <?php if ($is_ip_view) { ?>
                                        <li class="list-inline-item">
                                            <i class="fas fa-ethernet mr-1"></i><?php echo $list[$i]['ip']; ?>
                                        </li>
		                            <?php } ?>
                                    <li class="list-inline-item">
                                        <i class="fas fa-clock mr-1"></i>
                                        <time datetime="<?php echo date('Y-m-d\TH:i:s+09:00', strtotime($list[$i]['datetime'])) ?>"><?php echo $list[$i]['datetime'] ?></time>
                                    </li>
		                            <?php if (strstr($list[$i]['wr_option'], "secret")) { ?>
                                        <li class="list-inline-item mr-1">
                                            <i class="fa fa-lock text-warning mr-1"></i>
                                        </li>
		                            <?php } ?>
                                </ul>
                            </div>
                        </li>
                    </ul>
                    <div class="mb-2">
                        <p>
						    <?php echo $comment ?>
                        </p>
					    <?php if($is_comment_reply_edit) {
						    if($w == 'cu') {
							    $sql = " select wr_id, wr_content, mb_id from $write_table where wr_id = '$c_id' and wr_is_comment = '1' ";
							    $cmt = sql_fetch($sql);
							    if (!($is_admin || ($member['mb_id'] == $cmt['mb_id'] && $cmt['mb_id'])))
								    $cmt['wr_content'] = '';
							    $c_wr_content = $cmt['wr_content'];
						    }
						    ?>
					    <?php } ?>
                    </div>

                    <span id="edit_<?php echo $comment_id ?>" class="bo_vc_w"></span><!-- 수정 -->
                    <span id="reply_<?php echo $comment_id ?>" class="bo_vc_w"></span><!-- 답변 -->

                    <input type="hidden" value="<?php echo strstr($list[$i]['wr_option'],"secret") ?>" id="secret_comment_<?php echo $comment_id ?>">
                    <textarea id="save_comment_<?php echo $comment_id ?>" style="display:none"><?php echo get_text($list[$i]['content1'], 0) ?></textarea>

                    <div class="text-right">
                        <ul class="list-inline mb-2">
                            <?php if ($list[$i]['is_reply']) { ?>
                                <li class="list-inline-item">
                                    <a class="btn btn-link p-0" href="<?php echo $c_reply_href; ?>" onclick="comment_box('<?php echo $comment_id ?>', 'c'); return false;" role="button" data-toggle="tooltip" data-placement="top" data-html="true" title="답변">
                                        <i class="fas fa-reply mr-2" aria-hidden="true"></i>
                                    </a>
                                </li>
                            <?php } ?>
                            <?php if ($list[$i]['is_edit']) { ?>
                                <li class="list-inline-item">
                                    <a class="btn btn-link p-0" href="<?php echo $c_edit_href; ?>" onclick="comment_box('<?php echo $comment_id ?>', 'cu'); return false;" role="button" data-toggle="tooltip" data-placement="top" data-html="true" title="수정">
                                        <i class="fas fa-edit mr-2" aria-hidden="true"></i>
                                    </a>
                                </li>
                            <?php } ?>
                            <?php if ($list[$i]['is_del']) { ?>
                                <li class="list-inline-item">
                                    <a class="btn btn-link p-0" href="<?php echo $list[$i]['del_link']; ?>" onclick="return comment_delete();" role="button" data-toggle="tooltip" data-placement="top" data-html="true" title="삭제">
                                        <i class="fas fa-trash mr-2" aria-hidden="true"></i>
                                    </a>
                                </li>
                            <?php } ?>
                        </ul>
                    </div>

                </article>
		    <?php } ?>

		    <?php if ($i == 0) { //댓글이 없다면 ?>
                <p class="text-center p-5">등록된 댓글이 없습니다.</p>
		    <?php } ?>

        </div>
        <!-- } 댓글 목록 끝 -->


        <!-- 댓글 쓰기 시작 { -->
	    <?php if ($is_comment_write) {
            if($w == '')
                $w = 'c';
	    ?>
            <div id="bo_vc_w" class="">
                <form name="fviewcomment" id="fviewcomment" action="<?php echo $comment_action_url; ?>" onsubmit="return fviewcomment_submit(this);" method="post" autocomplete="off">
                    <input type="hidden" name="w" value="<?php echo $w ?>" id="w">
                    <input type="hidden" name="bo_table" value="<?php echo $bo_table ?>">
                    <input type="hidden" name="wr_id" value="<?php echo $wr_id ?>">
                    <input type="hidden" name="comment_id" value="<?php echo $c_id ?>" id="comment_id">
                    <input type="hidden" name="sca" value="<?php echo $sca ?>">
                    <input type="hidden" name="sfl" value="<?php echo $sfl ?>">
                    <input type="hidden" name="stx" value="<?php echo $stx ?>">
                    <input type="hidden" name="spt" value="<?php echo $spt ?>">
                    <input type="hidden" name="page" value="<?php echo $page ?>">
                    <input type="hidden" name="is_good" value="">

                    <div class="mb-1 text-right">
                        <?php if ($comment_min || $comment_max) { ?><strong id="char_cnt"><span id="char_count" class="mr-2"></span>글자</strong><?php } ?>
                    </div>
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <span class="input-group-text">댓글</span>
                        </div>
                        <textarea class="form-control" id="wr_content" name="wr_content" title="내용" placeholder=""
                                  <?php if ($comment_min || $comment_max) { ?>onkeyup="check_byte('wr_content', 'char_count');"<?php } ?> rows="5" maxlength="10000" required>
                            <?php echo $c_wr_content; ?>
                        </textarea>
                        <?php if ($comment_min || $comment_max) { ?>
                            <script> check_byte('wr_content', 'char_count'); </script>
                        <?php } ?>
                        <script>
                            $(document).on("keyup change", "textarea#wr_content[maxlength]", function() {
                                var str = $(this).val()
                                var mx = parseInt($(this).attr("maxlength"))
                                if (str.length > mx) {
                                    $(this).val(str.substr(0, mx));
                                    return false;
                                }
                            });
                        </script>
                    </div>
                    <?php
                    if($board['bo_use_sns'] && ($config['cf_facebook_appid'] || $config['cf_twitter_key'])) {
                    ?>
                        <div class="row mb-2">
                            <div class="col">
                                <span id="bo_vc_send_sns"></span>
                            </div>
                        </div>
                    <?php } ?>
	                <?php if ($is_guest) { ?>
                        <div class="row mb-2">
                            <div class="col">
                                <?php echo $captcha_html; ?>
                            </div>
                        </div>
	                <?php } ?>
                    <div class="row mb-2">
                        <div class="col-md-4">
                            <?php if ($is_guest) { ?>
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text" id="">이름</div>
                                    </div>
                                    <input type="text" class="form-control" name="wr_name" id="wr_name" value="<?php echo get_cookie("ck_sns_name"); ?>"
                                           placeholder="예) 홍길동" required>
                                </div>
                            <?php
                            }
                            ?>
                        </div>
                        <div class="col-md-4">
                            <?php if ($is_guest) { ?>
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text" id="btnGroupAddon">비번</div>
                                    </div>
                                    <input type="password" class="form-control" name="wr_password" id="wr_password" size="25" required>
                                </div>
                            <?php
                            }
                            ?>
                        </div>
                        <div class="col-md-4 text-right">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <input type="checkbox" name="wr_secret" id="wr_secret" value="secret" class="mr-2">
                                        <label class="form-check-label mr-1" for="wr_secret">
                                            비밀글
                                        </label>
                                    </div>
                                </div>
                                <button type="submit" class="form-control btn btn-primary" id="btn_submit">댓글등록</button>
                            </div>

                        </div>
                    </div>
                </form>
            </div>

            <script>
                var save_before = '';
                var save_html = document.getElementById('bo_vc_w').innerHTML;

                function good_and_write()
                {
                    var f = document.fviewcomment;
                    if (fviewcomment_submit(f)) {
                        f.is_good.value = 1;
                        f.submit();
                    } else {
                        f.is_good.value = 0;
                    }
                }

                function fviewcomment_submit(f)
                {
                    var pattern = /(^\s*)|(\s*$)/g; // \s 공백 문자

                    f.is_good.value = 0;

                    var subject = "";
                    var content = "";
                    $.ajax({
                        url: g5_bbs_url+"/ajax.filter.php",
                        type: "POST",
                        data: {
                            "subject": "",
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

                    if (content) {
                        alert("내용에 금지단어('"+content+"')가 포함되어있습니다");
                        f.wr_content.focus();
                        return false;
                    }

                    // 양쪽 공백 없애기
                    var pattern = /(^\s*)|(\s*$)/g; // \s 공백 문자
                    document.getElementById('wr_content').value = document.getElementById('wr_content').value.replace(pattern, "");
                    if (char_min > 0 || char_max > 0)
                    {
                        check_byte('wr_content', 'char_count');
                        var cnt = parseInt(document.getElementById('char_count').innerHTML);
                        if (char_min > 0 && char_min > cnt)
                        {
                            alert("댓글은 "+char_min+"글자 이상 쓰셔야 합니다.");
                            return false;
                        } else if (char_max > 0 && char_max < cnt)
                        {
                            alert("댓글은 "+char_max+"글자 이하로 쓰셔야 합니다.");
                            return false;
                        }
                    }
                    else if (!document.getElementById('wr_content').value)
                    {
                        alert("댓글을 입력하여 주십시오.");
                        return false;
                    }

                    if (typeof(f.wr_name) != 'undefined')
                    {
                        f.wr_name.value = f.wr_name.value.replace(pattern, "");
                        if (f.wr_name.value == '')
                        {
                            alert('이름이 입력되지 않았습니다.');
                            f.wr_name.focus();
                            return false;
                        }
                    }

                    if (typeof(f.wr_password) != 'undefined')
                    {
                        f.wr_password.value = f.wr_password.value.replace(pattern, "");
                        if (f.wr_password.value == '')
                        {
                            alert('비밀번호가 입력되지 않았습니다.');
                            f.wr_password.focus();
                            return false;
                        }
                    }

			        <?php if($is_guest) echo chk_captcha_js();  ?>

                    set_comment_token(f);

                    document.getElementById("btn_submit").disabled = "disabled";

                    return true;
                }

                function comment_box(comment_id, work)
                {
                    var el_id,
                        form_el = 'fviewcomment',
                        respond = document.getElementById(form_el);

                    // 댓글 아이디가 넘어오면 답변, 수정
                    if (comment_id)
                    {
                        if (work == 'c')
                            el_id = 'reply_' + comment_id;
                        else
                            el_id = 'edit_' + comment_id;
                    }
                    else
                        el_id = 'bo_vc_w';

                    if (save_before != el_id)
                    {
                        if (save_before)
                        {
                            document.getElementById(save_before).style.display = 'none';
                        }

                        document.getElementById(el_id).style.display = '';
                        document.getElementById(el_id).appendChild(respond);
                        //입력값 초기화
                        document.getElementById('wr_content').value = '';

                        // 댓글 수정
                        if (work == 'cu')
                        {
                            document.getElementById('wr_content').value = document.getElementById('save_comment_' + comment_id).value;
                            if (typeof char_count != 'undefined')
                                check_byte('wr_content', 'char_count');
                            if (document.getElementById('secret_comment_'+comment_id).value)
                                document.getElementById('wr_secret').checked = true;
                            else
                                document.getElementById('wr_secret').checked = false;
                        }

                        document.getElementById('comment_id').value = comment_id;
                        document.getElementById('w').value = work;

                        if(save_before)
                            $("#captcha_reload").trigger("click");

                        save_before = el_id;
                    }
                }

                function comment_delete()
                {
                    return confirm("이 댓글을 삭제하시겠습니까?");
                }

                comment_box('', 'c'); // 댓글 입력폼이 보이도록 처리하기위해서 추가 (root님)

		        <?php if($board['bo_use_sns'] && ($config['cf_facebook_appid'] || $config['cf_twitter_key'])) { ?>

                $(function() {
                    // sns 등록
                    $("#bo_vc_send_sns").load(
                        "<?php echo G5_SNS_URL; ?>/view_comment_write.sns.skin.php?bo_table=<?php echo $bo_table; ?>",
                        function() {
                            save_html = document.getElementById('bo_vc_w').innerHTML;
                        }
                    );
                });
		        <?php } ?>
            </script>

        <?php } ?>
        <!-- } 댓글 쓰기 끝 -->



    </div>
</div>

