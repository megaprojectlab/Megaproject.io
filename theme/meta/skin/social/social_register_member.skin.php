<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if( ! $config['cf_social_login_use']) {     //소셜 로그인을 사용하지 않으면
    return;
}

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.G5_JS_URL.'/remodal/remodal.css">', 11);
add_stylesheet('<link rel="stylesheet" href="'.G5_JS_URL.'/remodal/remodal-default-theme.css">', 12);
add_stylesheet('<link rel="stylesheet" href="'.get_social_skin_url().'/style.css?ver='.G5_CSS_VER.'">', 13);
add_javascript('<script src="'.G5_JS_URL.'/remodal/remodal.js"></script>', 10);

$email_msg = $is_exists_email ? '등록할 이메일이 중복되었습니다.다른 이메일을 입력해 주세요.' : '';
?>

<!-- 회원정보 입력/수정 시작 { -->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <!--<h2>소셜 회원가입 - 네이버</h2>-->

            <!--<div class="alert alert-danger text-center" role="alert">
                <i class="fa fa-info-circle mr-2"></i>회원가입약관 및 개인정보처리방침안내의 내용에 동의하셔야 회원가입 하실 수 있습니다.
            </div>-->

            <!-- 새로가입 -->
            <form id="fregisterform" name="fregisterform" action="<?php echo $register_action_url; ?>" onsubmit="return fregisterform_submit(this);" method="post" enctype="multipart/form-data" autocomplete="off">
                <input type="hidden" name="w" value="<?php echo $w; ?>">
                <input type="hidden" name="url" value="<?php echo $urlencode; ?>">
                <input type="hidden" name="mb_name" value="<?php echo $user_name ? $user_name : $user_nick ?>" >
                <input type="hidden" name="provider" value="<?php echo $provider_name;?>" >
                <input type="hidden" name="action" value="register">

                <input type="hidden" name="mb_id" value="<?php echo $user_id; ?>" id="reg_mb_id">
                <input type="hidden" name="mb_nick_default" value="<?php echo isset($user_nick)?get_text($user_nick):''; ?>">
                <input type="hidden" name="mb_nick" value="<?php echo isset($user_nick)?get_text($user_nick):''; ?>" id="reg_mb_nick">

                <div class="card border mb-4">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-6 text-left">
                                <label class="custom-control custom-checkbox">
                                    <input type="checkbox" name="agree" id="agree11" class="custom-control-input" value="1" >
                                    <div class="custom-control-label text-dark font-weight-bold" for="agree11">회원가입약관</div>
                                </label>
                            </div>
                            <div class="col-6 text-right">
                                <button type="button" class="btn btn-secondary btn-sm" data-toggle="collapse" data-target="#agree11-content"  aria-expanded="false">
                                    자세히보기
                                </button>
                            </div>
                        </div>
                    </div>
                    <div id="agree11-content" class="card-body collapse">
	                    <?php echo conv_content($config['cf_stipulation'], 0); ?>
                    </div>
                </div>

                <div class="card border mb-4">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-6 text-left">
                                <label class="custom-control custom-checkbox">
                                    <input type="checkbox" name="agree2" id="agree21" class="custom-control-input" value="1">
                                    <div class="custom-control-label text-dark font-weight-bold" for="agree21">개인정보처리방침안내</div>
                                </label>
                            </div>
                            <div class="col-6 text-right">
                                <button type="button" class="btn btn-secondary btn-sm" data-toggle="collapse" data-target="#agree2-content"  aria-expanded="false">
                                    자세히보기
                                </button>
                            </div>
                        </div>
                    </div>
                    <div id="agree2-content" class="card-body collapse">
	                    <?php echo conv_content($config['cf_privacy'], 0); ?>
                    </div>
                </div>


                <!--<button type="button" name="" id="" class="btn btn-dark btn-block mb-4">
                    전체 약관에 모두 동의합니다
                </button>-->
                <div class="row justify-content-center mb-3">
                    <div class="col-sm-4">
                        <div class="btn-group-toggle" data-toggle="buttons">
                            <label class="btn btn-dark btn-block mb-4">
                                <input type="checkbox" name="chk_all" id="chk_all" value="1"> 전체약관에 동의합니다
                            </label>
                        </div>
                    </div>
                </div>

                <div class="card border mb-4">
                    <div class="card-header text-dark font-weight-bold">
                        개인정보입력
                    </div>
                    <div class="card-body">
                        <div class="form-group form-row">
                            <label class="col-2 col-form-label font-weight-bold">
                                이메일
                            </label>
                            <div class="col-10">
                                <input type="text" name="mb_email" id="reg_mb_email" class="form-control email required" value="<?php echo isset($user_email)?$user_email:''; ?>" size="70" maxlength="100" placeholder="이메일을 입력해주세요" required>
                                <div class="email_msg"><?php echo $email_msg; ?></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row justify-content-center mb-5">
                    <div class="col-sm-4">
                        <button type="submit" id="btn_submit" class="btn btn-primary btn-block" accesskey="s">회원가입</button>
                    </div>
                    <div class="col-sm-4">
                        <a href="<?php echo G5_URL ?>" class="btn btn-light btn-block" role="button" >취소</a>
                    </div>
                </div>
            </form>
            <!-- // 새로가입 -->

            <!-- 기존 계정 연결 -->
            <div class="card border border-success mb-3 text-center">
                <div class="card-header text-dark font-weight-bold">혹시 기존 회원이신가요?</div>
                <div class="card-body">
                    <button type="submit" class="btn btn-success" data-toggle="modal" data-target="#myModal">기존 계정에 연결하기</button>
                </div>
            </div>

            <!-- 모달창 : 기존 계정 연결 -->
           <div class="modal" id="myModal">
                <div class="modal-dialog">
                    <div class="modal-content">

                        <form method="post" action="<?php echo $login_action_url ?>" onsubmit="return social_obj.flogin_submit(this);">
                            <input type="hidden" id="url" name="url" value="<?php echo $login_url ?>">
                            <input type="hidden" id="provider" name="provider" value="<?php echo $provider_name ?>">
                            <input type="hidden" id="action" name="action" value="social_account_linking">

                            <div class="modal-header">
                                <h4 class="modal-title">Modal Heading</h4>
                                <button type="button" class="close" data-dismiss="modal"><i class="far fa-times-circle"></i></button>
                            </div>

                            <div class="modal-body">
                                <div class="alert alert-success" role="alert">
                                    <i class="fas fa-info-circle mr-1" aria-hidden="true"></i>
                                    <span class="font-weight-bold">기존 아이디에 SNS 아이디를 연결합니다!</span><br>
                                    이후, SNS 아이디로 로그인시, 기존 아이디로 연결됩니다.
                                </div>
                                <form>
                                    <div class="form-group mb-1">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                                            </div>
                                            <input type="text" name="mb_id" id="login_id" class="form-control required" size="20" maxLength="20" required>
                                        </div> <!-- // .input-group -->
                                    </div> <!-- // .form-group -->
                                    <div class="form-group mb-3">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                                            </div>
                                            <input type="password" name="mb_password" id="login_pw" class="form-control required" size="20" maxLength="20" required>
                                        </div> <!-- // .input-group -->
                                    </div> <!-- // .form-group -->
                                    <div class="form-group mb-3">
                                        <button type="submit" class="btn btn-primary btn-block">연결하기</button>
                                    </div> <!-- // .form-group -->
                                </form>
                            </div><!-- // .modal-body -->

                            <!--<div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            </div>-->

                        </form>

                    </div><!-- // .modal-content -->
                </div><!-- // .modal-dialog -->
            </div><!-- // .modal -->
            <!-- // 모달창 : 기존 계정 연결 -->
            <!-- // 기존 계정 연결 -->

            <script>

                // submit 최종 폼체크
                function fregisterform_submit(f)
                {

                    if (!f.agree.checked) {
                        alert("회원가입약관의 내용에 동의하셔야 회원가입 하실 수 있습니다.");
                        f.agree.focus();
                        return false;
                    }

                    if (!f.agree2.checked) {
                        alert("개인정보처리방침안내의 내용에 동의하셔야 회원가입 하실 수 있습니다.");
                        f.agree2.focus();
                        return false;
                    }

                    // E-mail 검사
                    if ((f.w.value == "") || (f.w.value == "u" && f.mb_email.defaultValue != f.mb_email.value)) {
                        var msg = reg_mb_email_check();
                        if (msg) {
                            alert(msg);
                            jQuery(".email_msg").html(msg);
                            f.reg_mb_email.select();
                            return false;
                        }
                    }

                    document.getElementById("btn_submit").disabled = "disabled";

                    return true;
                }

                function flogin_submit(f)
                {
                    var mb_id = $.trim($(f).find("input[name=mb_id]").val()),
                        mb_password = $.trim($(f).find("input[name=mb_password]").val());

                    if(!mb_id || !mb_password){
                        return false;
                    }

                    return true;
                }

                jQuery(function($){
                    if( jQuery(".toggle .toggle-title").hasClass('active') ){
                        jQuery(".toggle .toggle-title.active").closest('.toggle').find('.toggle-inner').show();
                    }
                    jQuery(".toggle .toggle-title .right_i").click(function(){

                        var $parent = $(this).parent();

                        if( $parent.hasClass('active') ){
                            $parent.removeClass("active").closest('.toggle').find('.toggle-inner').slideUp(200);
                        } else {
                            $parent.addClass("active").closest('.toggle').find('.toggle-inner').slideDown(200);
                        }
                    });
                    // 모두선택
                    $("input[name=chk_all]").click(function() {
                        if ($(this).prop('checked')) {
                            $("input[name^=agree]").prop('checked', true);
                        } else {
                            $("input[name^=agree]").prop("checked", false);
                        }
                    });
                });
            </script>

        </div>
    </div>
</div>
<!-- } 회원정보 입력/수정 끝 -->