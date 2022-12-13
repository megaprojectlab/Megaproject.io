<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$member_skin_url.'/style.css">', 0);
?>

<!-- 회원가입약관 동의 시작 { -->

            <!-- ============================================================== -->
            <!-- Container -->
            <!-- ============================================================== -->
            <div class="container mt-3 mb-5">
                <div class="row">
                    <div class="col-md-12">

                        <form  name="fregister" id="fregister" action="<?php echo $register_action_url ?>" onsubmit="return fregister_submit(this);" method="POST" autocomplete="off">

                            <h2>회원가입</h2>
                            <div class="alert alert-danger text-center" role="alert">
                                <i class="fa fa-info-circle mr-2"></i>회원가입약관 및 개인정보처리방침안내의 내용에 동의하셔야 회원가입 하실 수 있습니다.
                            </div>
	                        <?php
	                        // 소셜로그인 사용시 소셜로그인 버튼
	                        @include_once(get_social_skin_path().'/social_register.skin.php');
	                        ?>
                            <div class="card border mb-4">
                                <div class="card-header d-flex justify-content-between align-items-center">
                                    <h3>회원가입약관</h3>
                                    <label class="custom-control custom-checkbox">
                                        <input type="checkbox" name="agree" id="agree11" class="custom-control-input" value="1">
                                        <div class="custom-control-label" for="agree11">선택 (필수)</a></div>
                                    </label>
                                </div>
                                <div class="card-body p-0">
                                    <textarea class="form-control" rows="5" readonly><?php echo get_text($config['cf_stipulation']) ?></textarea>
                                </div>
                            </div>
                            <div class="card border mb-4">
                                <div class="card-header d-flex justify-content-between align-items-center">
                                    <h3>개인정보처리방침안내</h3>
                                    <label class="custom-control custom-checkbox">
                                        <input type="checkbox" name="agree2" value="1" id="agree21" class="custom-control-input">
                                        <div class="custom-control-label" for="agree21">선택 (필수)</a></div>
                                    </label>
                                </div>
                                <div class="card-body">
                                    <table class="table table-bordered">
                                        <thead class="thead-light">
                                        <tr class="">
                                            <th>항목</th>
                                            <th class="w-50">목적</th>
                                            <th>보유기간</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>아이디, 이름, 비밀번호</td>
                                            <td>이용자 식별 및 본인여부 확인</td>
                                            <td>회원 탈퇴 시까지</td>
                                        </tr>
                                        <tr>
                                            <td>연락처 (이메일, 휴대전화번호)</td>
                                            <td>고객서비스 이용에 관한 통지 및 CS 대응을 위한 이용자 식별</td>
                                            <td>회원 탈퇴 시까지</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <!--<button type="checkbox" name="chk_all" id="chk_all" class="btn btn-secondary btn-block mb-4">
                                회원가입 약관에 모두 동의합니다
                            </button>-->

                            <div class="btn-group-toggle" data-toggle="buttons">
                                <label class="btn btn-secondary btn-block mb-4">
                                    <input type="checkbox" name="chk_all" id="chk_all"> 회원가입 약관에 모두 동의합니다
                                </label>
                            </div>

                            <div class="row">
                                <div class="col-6">
                                    <a href="<?php echo G5_URL ?>" class="btn btn-light btn-block" role="button">취소</a>
                                </div>
                                <div class="col-6">
                                    <button type="submit" class="btn btn-primary btn-block">회원가입</button>
                                </div>
                            </div>

                        </form>

                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Container -->
            <!-- ============================================================== -->
            <script>
                function fregister_submit(f)
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

                    return true;
                }

                jQuery(function($){
                    // 모두선택
                    $("input[name=chk_all]").click(function() {
                    // $("#chk_all").click(function() {
                        if ($(this).prop('checked')) {
                            $("input[name^=agree]").prop('checked', true);
                        } else {
                            $("input[name^=agree]").prop("checked", false);
                        }
                    });
                });

            </script>
<!-- } 회원가입 약관 동의 끝 -->
