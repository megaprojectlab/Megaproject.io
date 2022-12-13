<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$member_skin_url.'/style.css">', 0);
?>

<!-- 회원가입결과 시작 { -->
<div class="container mt-3 mb-5">
    <div class="row">
        <div class="col-md-12">
            <h2>회원가입_가입완료</h2>
            <div class="card border card-body">

                <div class="text-center">
                    <i class="far fa-smile-beam fa-4x text-primary"></i>
                </div>

                <h2 class="title mb-4 text-primary text-center">
	                <?php echo get_text($mb['mb_name']); ?>님, 회원가입을 진심으로 축하합니다.
                </h2>

                <div class="text-dark">
	                <?php if (is_use_email_certify()) {  ?>
                        <h3>
                            <span class="badge badge-primary">이메일 인증 안내</span>
                        </h3>
                        <p class="mb-1">
                            회원가입시 입력하신 이메일 주소로 인증메일이 발송되었습니다.<br>
                            <strong class="text-danger">발송된 인증메일을 확인하신 후 인증처리를 하셔야만, 사이트를 원활하게 이용하실 수 있습니다!</strong>
                        </p>
                        <div class="alert alert-light border-primary bg-light" role="alert">
                            <!--<i class="fas fa-info-circle mr-2" aria-hidden="true"></i>-->
                            <span class="badge badge-dark text-center mr-2" style="width: 70px;">아이디</span><strong class="text-danger"><?php echo $mb['mb_id'] ?></strong><br/>
                            <span class="badge badge-dark text-center mr-2" style="width: 70px;">이메일주소</span><strong class="text-danger"><?php echo $mb['mb_email'] ?></strong>
                        </div>
	                <?php }  ?>
                    <h3>
                        <span class="badge badge-secondary">비밀번호 암호화 안내</span>
                    </h3>
                    <p class="">
                        회원님의 비밀번호는 암호화되어 저장되므로 안심하셔도 좋습니다.
                    </p>

                    <h3>
                        <span class="badge badge-secondary">아이디/비밀번호 분실시 안내</span>
                    </h3>
                    <p class="">
                        아이디, 비밀번호 분실시, 입력하신 이메일주소를 이용하여 찾을 수 있습니다.
                    </p>

                    <h3>
                        <span class="badge badge-secondary">회원탈퇴 안내</span>
                    </h3>
                    <p class="">
                        회원 탈퇴는 언제든지 가능하며, 이후 회원님의 정보는 안전하게 파기하고 있습니다.
                    </p>
                    <p class="">
                        감사합니다.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- } 회원가입결과 끝 -->
