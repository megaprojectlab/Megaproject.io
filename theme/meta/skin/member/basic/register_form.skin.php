<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$member_skin_url.'/style.css">', 0);
?>

<!-- 회원정보 입력/수정 시작 { -->


<!-- ============================================================== -->
<!-- Container -->
<!-- ============================================================== -->
<script src="<?php echo G5_JS_URL ?>/jquery.register_form.js"></script>
<?php if($config['cf_cert_use'] && ($config['cf_cert_ipin'] || $config['cf_cert_hp'])) { ?>
    <script src="<?php echo G5_JS_URL ?>/certify.js?v=<?php echo G5_JS_VER; ?>"></script>
<?php } ?>

<div class="container mt-3 mb-5">

    <div class="row">
        <div class="col-md-12">
            <!--<h2>회원가입_가입폼</h2>-->

            <form id="fregisterform" name="fregisterform" action="<?php echo $register_action_url ?>" onsubmit="return fregisterform_submit(this);" method="post" enctype="multipart/form-data" autocomplete="off">

                <input type="hidden" name="w" value="<?php echo $w ?>">
                <input type="hidden" name="url" value="<?php echo $urlencode ?>">
                <input type="hidden" name="agree" value="<?php echo $agree ?>">
                <input type="hidden" name="agree2" value="<?php echo $agree2 ?>">
                <input type="hidden" name="cert_type" value="<?php echo $member['mb_certify']; ?>">
                <input type="hidden" name="cert_no" value="">
	            <?php if (isset($member['mb_sex'])) {  ?><input type="hidden" name="mb_sex" value="<?php echo $member['mb_sex'] ?>"><?php }  ?>
	            <?php if (isset($member['mb_nick_date']) && $member['mb_nick_date'] > date("Y-m-d", G5_SERVER_TIME - ($config['cf_nick_modify'] * 86400))) { // 닉네임수정일이 지나지 않았다면  ?>
                    <input type="hidden" name="mb_nick_default" value="<?php echo get_text($member['mb_nick']) ?>">
                    <input type="hidden" name="mb_nick" value="<?php echo get_text($member['mb_nick']) ?>">
	            <?php }  ?>

                <div class="card border border mb-4">
                    <div class="card-header">
                        <h4 class="card-title">사이트 이용정보 입력</h4>
                    </div>
                    <article class="card-body">

                        <div class="form-group form-row">
                            <label class="col-md-3 col-form-label">
                                아이디 <i class="fa fa-info-circle ml-2" data-toggle="tooltip" data-placement="right" data-html="true" title="<div class='text-left'>* 영문자, 숫자, _ 만 입력 가능!<br/>* 최소 3자이상 입력하세요!</div>" aria-hidden="true"></i>
                            </label>
                            <div class="col-md-9">
                                <input type="text" name="mb_id" id="reg_mb_id" class="form-control <?php echo $required ?> <?php echo $readonly ?>" value="<?php echo $member['mb_id'] ?>" minlength="3" maxlength="20" placeholder="아이디" <?php echo $required ?> <?php echo $readonly ?> >
                                <div id="msg_mb_id" class="mt-2"></div>
                            </div>
                        </div>

                        <div class="form-group form-row">
                            <label class="col-md-3 col-form-label">비밀번호</label>
                            <div class="col-md-9">
                                <input type="password" name="mb_password" id="reg_mb_password" class="form-control <?php echo $required ?>" minlength="3" maxlength="20" placeholder="비밀번호" <?php echo $required ?> >
                            </div>
                        </div>

                        <div class="form-group form-row">
                            <label class="col-md-3 col-form-label">비밀번호 확인</label>
                            <div class="col-md-9">
                                <input type="password" name="mb_password_re" id="reg_mb_password_re" class="form-control <?php echo $required ?>" minlength="3" maxlength="20" placeholder="비밀번호 확인" <?php echo $required ?> >
                            </div>
                        </div>

                    </article> <!-- card-body end .// -->

                </div>
                <div class="card border mb-4">
                    <div class="card-header">
                        <h4 class="card-title">개인정보 입력</h4>
                    </div>
                    <article class="card-body">

                        <div class="form-group form-row">
                            <label class="col-md-3 col-form-label">이름</label>
                            <div class="col-md-9">
                                <input type="text" name="mb_name" id="reg_mb_name" class="form-control <?php echo $required ?> <?php echo $readonly ?>" value="<?php echo get_text($member['mb_name']) ?>" size="10" placeholder="이름" <?php echo $required ?> <?php echo $readonly; ?> >
	                            <?php
	                            if($config['cf_cert_use']) {
		                            echo '<div class="mt-2">'.PHP_EOL;
		                            if($config['cf_cert_ipin'])
			                            echo '<button type="button" id="win_ipin_cert" class="btn btn-dark">아이핀 본인확인</button>'.PHP_EOL;
		                            if($config['cf_cert_hp'])
			                            echo '<button type="button" id="win_hp_cert" class="btn btn-dark">휴대폰 본인확인</button>'.PHP_EOL;

		                            echo '<noscript>본인확인을 위해서는 자바스크립트 사용이 가능해야합니다.</noscript>'.PHP_EOL;
		                            echo '</div>'.PHP_EOL;
	                            }
	                            ?>
	                            <?php
	                            if ($config['cf_cert_use'] && $member['mb_certify']) {
		                            if($member['mb_certify'] == 'ipin')
			                            $mb_cert = '아이핀';
		                            else
			                            $mb_cert = '휴대폰';
		                            ?>

                                    <div id="msg_certify" class="mt-2">
                                        <strong><?php echo $mb_cert; ?> 본인확인</strong><?php if ($member['mb_adult']) { ?> 및 <strong>성인인증</strong><?php } ?> 완료
                                    </div>
	                            <?php } ?>
	                            <?php if ($config['cf_cert_use']) { ?>
<!--                                    <i class="fa fa-info-circle ml-2" data-toggle="tooltip" data-placement="right" data-html="true" title="<div class='text-left'>* 아이핀 본인확인 후에는 이름이 자동 입력되고, 휴대폰 본인확인 후에는 이름과 휴대폰번호가 자동 입력되어, 수동으로 입력할수 없게 됩니다.</div>" aria-hidden="true"></i>-->
                                    <div class="alert alert-primary mt-2 mb-0" role="alert">
                                        <i class="fas fa-info-circle mr-2" aria-hidden="true"></i>아이핀 본인확인 후에는 이름이 자동 입력되고, 휴대폰 본인확인 후에는 이름과 휴대폰번호가 자동 입력되어, 수동으로 입력할수 없게 됩니다.
                                    </div>
	                            <?php } ?>
                            </div>
                        </div>

	                    <?php if ($req_nick) {  ?>
                        <div class="form-group form-row">
                            <label class="col-md-3 col-form-label">닉네임 <i class="fa fa-info-circle ml-2" data-toggle="tooltip" data-placement="right" data-html="true" title="<div class='text-left'>* 공백없이 한글,영문,숫자만 입력 가능 (한글2자, 영문4자 이상)<br>* 닉네임을 바꾸시면 앞으로 <?php echo (int)$config['cf_nick_modify'] ?>일 이내에는 변경 할 수 없습니다!</div>" aria-hidden="true"></i></label>
                            <div class="col-md-9">
                                <input type="hidden" name="mb_nick_default" value="<?php echo isset($member['mb_nick'])?get_text($member['mb_nick']):''; ?>">
                                <input type="text" name="mb_nick" id="reg_mb_nick" class="form-control required nospace" value="<?php echo isset($member['mb_nick'])?get_text($member['mb_nick']):''; ?>" size="10" maxlength="20" placeholder="닉네임" required>
                                <div id="msg_mb_nick"></div>
                            </div>
                        </div>
	                    <?php }  ?>

                        <div class="form-group form-row">
                            <label class="col-md-3 col-form-label">이메일</label>
                            <div class="col-md-9">
                                <input type="hidden" name="old_email" value="<?php echo $member['mb_email'] ?>">
                                <input type="text" name="mb_email" id="reg_mb_email" class="form-control email required" value="<?php echo isset($member['mb_email'])?$member['mb_email']:''; ?>" size="70" maxlength="100" placeholder="이메일" required>

                                <?php if ($config['cf_use_email_certify']) {  ?>
                                <div class="alert alert-warning mt-2 mb-0" role="alert">
                                    <i class="fas fa-info-circle mr-2" aria-hidden="true"></i>
	                                <?php if ($w=='') { echo "E-mail 로 발송된 내용을 확인한 후 인증하셔야 회원가입이 완료됩니다!"; }  ?>
	                                <?php if ($w=='u') { echo "E-mail 주소를 변경하시면 다시 인증하셔야 합니다!"; }  ?>
                                </div>
	                            <?php } ?>

                            </div>
                        </div>

	                    <?php if ($config['cf_use_homepage']) {  ?>
                        <div class="form-group form-row">
                            <label class="col-md-3 col-form-label">홈페이지</label>
                            <div class="col-md-9">
                                <input type="text" name="mb_homepage" id="reg_mb_homepage" class="form-control <?php echo $config['cf_req_homepage']?"required":""; ?>" value="<?php echo get_text($member['mb_homepage']) ?>"  size="70" maxlength="255" placeholder="홈페이지" <?php echo $config['cf_req_homepage']?"required":""; ?>>
                            </div>
                        </div>
	                    <?php }  ?>

	                    <?php if ($config['cf_use_tel']) {  ?>
                        <div class="form-group form-row">
                            <label class="col-md-3 col-form-label">전화번호</label>
                            <div class="col-md-9">
                                <input type="text" name="mb_tel" id="reg_mb_tel" class="form-control <?php echo $config['cf_req_tel']?"required":""; ?>" value="<?php echo get_text($member['mb_tel']) ?>"  maxlength="20" placeholder="전화번호" <?php echo $config['cf_req_tel']?"required":""; ?>>
                            </div>
                        </div>
	                    <?php }  ?>

	                    <?php if ($config['cf_use_hp'] || $config['cf_cert_hp']) {  ?>
                        <div class="form-group form-row">
                            <label class="col-md-3 col-form-label">휴대폰번호</label>
                            <div class="col-md-9">
                                <input type="text" name="mb_hp" id="reg_mb_hp" class="form-control <?php echo ($config['cf_req_hp'])?"required":""; ?>" value="<?php echo get_text($member['mb_hp']) ?>" maxlength="20" placeholder="휴대폰번호" <?php echo ($config['cf_req_hp'])?"required":""; ?>>
	                            <?php if ($config['cf_cert_use'] && $config['cf_cert_hp']) { ?>
                                    <input type="hidden" name="old_mb_hp" value="<?php echo get_text($member['mb_hp']) ?>">
	                            <?php } ?>
                            </div>
                        </div>
	                    <?php }  ?>

	                    <?php if ($config['cf_use_addr']) { ?>
                        <div class="form-group form-row mb-2">
                            <label class="col-md-3 col-form-label">주소</label>
                            <div class="col-md-3">
                                <div class="input-group">
<!--                                    <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="button-addon2">-->
                                    <input type="text" name="mb_zip" id="reg_mb_zip" class="form-control <?php echo $config['cf_req_addr']?"required":""; ?>" value="<?php echo $member['mb_zip1'].$member['mb_zip2']; ?>" size="5" maxlength="6"  placeholder="우편번호" <?php echo $config['cf_req_addr']?"required":""; ?>>
                                    <div class="input-group-append">
                                        <button class="btn btn-outline-secondary" type="button" id="reg_mb_zip" onclick="win_zip('fregisterform', 'mb_zip', 'mb_addr1', 'mb_addr2', 'mb_addr3', 'mb_addr_jibeon');">주소검색</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group form-row">
                            <label class="col-md-3 col-form-label"></label>
                            <div class="col-md-9">
                                <input type="text" name="mb_addr1" id="reg_mb_addr1" class="form-control mb-2 <?php echo $config['cf_req_addr']?"required":""; ?>" value="<?php echo get_text($member['mb_addr1']) ?>" size="50"  placeholder="기본주소" <?php echo $config['cf_req_addr']?"required":""; ?>>
                                <input type="text" name="mb_addr2" id="reg_mb_addr2" class="form-control mb-2" value="<?php echo get_text($member['mb_addr2']) ?>" size="50" placeholder="상세주소">
                                <input type="text" name="mb_addr3" id="reg_mb_addr3" class="form-control mb-2" value="<?php echo get_text($member['mb_addr3']) ?>" size="50" readonly="readonly" placeholder="참고항목">
                                <input type="hidden" name="mb_addr_jibeon" value="<?php echo get_text($member['mb_addr_jibeon']); ?>">
                            </div>
                        </div>
	                    <?php }  ?>

                    </article> <!-- card-body end .// -->

                </div>
                <div class="card border mb-4">

                    <div class="card-header">
                        <h4 class="card-title">기타 개인설정</h4>
                    </div>
                    <article class="card-body">

	                    <?php if ($config['cf_use_signature']) {  ?>
                        <div class="form-group form-row">
                            <label class="col-md-3 col-form-label">서명</label>
                            <div class="col-md-9">
                                <textarea name="mb_signature" id="reg_mb_signature" class="form-control <?php echo $config['cf_req_signature']?"required":""; ?>" rows="5" placeholder="서명" <?php echo $config['cf_req_signature']?"required":""; ?>><?php echo $member['mb_signature'] ?></textarea>
                            </div>
                        </div>
	                    <?php }  ?>

	                    <?php if ($config['cf_use_profile']) {  ?>
                        <div class="form-group form-row mb-4">
                            <label class="col-md-3 col-form-label">자기소개</label>
                            <div class="col-md-9">
                                <textarea name="mb_profile" id="reg_mb_profile" class="form-control <?php echo $config['cf_req_profile']?"required":""; ?>" rows="5" placeholder="자기소개" <?php echo $config['cf_req_profile']?"required":""; ?>><?php echo $member['mb_profile'] ?></textarea>
                            </div>
                        </div>
	                    <?php }  ?>

                        <div class="form-group form-row">
                            <label class="col-md-3 col-form-label">
                                회원아이콘 <i class="fa fa-info-circle ml-2" data-toggle="tooltip" data-placement="right" data-html="true" title="<div class='text-left'>* 이미지 크기는 가로 <?php echo $config['cf_member_icon_width'] ?>픽셀, 세로 <?php echo $config['cf_member_icon_height'] ?>픽셀 이하로 해주세요!<br/>
* gif, jpg, png 파일만 가능<br/>* 용량 <?php echo number_format($config['cf_member_icon_size']) ?>바이트 이하만 등록가능</div>" aria-hidden="true"></i>
                            </label>
                            <div class="col-md-3">
                                <div class="custom-file">
                                    <input type="file" name="mb_icon" id="reg_mb_icon" class="custom-file-input">
                                    <label class="custom-file-label" for="reg_mb_icon">파일업로드 (클릭)</label>
                                </div>
                            </div>
                            <div class="col-md-6 d-flex">
	                            <?php if ($w == 'u' && file_exists($mb_icon_path)) {  ?>
                                    <img src="<?php echo $mb_icon_url ?>" alt="회원아이콘" class="d-inline-block align-self-center">
                                    <div class="custom-control custom-checkbox d-inline-block align-self-center ml-2">
                                        <input type="checkbox" name="del_mb_icon" id="del_mb_icon" class="custom-control-input" value="1">
                                        <label class="custom-control-label ml-1" for="del_mb_icon">삭제</label>
                                    </div>
	                            <?php }  ?>
                            </div>
                        </div>

                        <div class="form-group form-row mb-4">
                            <label class="col-md-3 col-form-label">
                                회원이미지 <i class="fa fa-info-circle ml-2" data-toggle="tooltip" data-placement="right" data-html="true" title="<div class='text-left'>* 이미지 크기는 가로 <?php echo $config['cf_member_img_width'] ?>픽셀, 세로 <?php echo $config['cf_member_img_height'] ?>픽셀 이하로 해주세요!<br/>* gif, jpg, png파일만 가능<br/>* 용량 <?php echo number_format($config['cf_member_img_size']) ?>바이트 이하만 등록가능</div>" aria-hidden="true"></i>
                            </label>
                            <div class="col-md-3">
                                <div class="custom-file">
                                    <input type="file" name="mb_img" id="reg_mb_img" class="custom-file-input">
                                    <label class="custom-file-label" for="reg_mb_img">파일업로드 (클릭)</label>
                                </div>
                            </div>
                            <div class="col-md-6 d-flex">
	                            <?php if ($w == 'u' && file_exists($mb_img_path)) {  ?>
                                    <img src="<?php echo $mb_img_url ?>" alt="회원이미지" class="d-inline-block align-self-center">
                                    <div class="custom-control custom-checkbox d-inline-block align-self-center ml-2">
                                        <input type="checkbox" name="del_mb_img" id="del_mb_img" class="custom-control-input" value="1">
                                        <label class="custom-control-label ml-1" for="del_mb_img">삭제</label>
                                    </div>
	                            <?php }  ?>
                            </div>
                        </div>

                        <div class="form-group form-row mb-0">
                            <label class="col-md-3 col-form-label">
                                정보메일 수신여부
                            </label>
                            <div class="col-md-9">
                                <label class="custom-control custom-checkbox py-1">
                                    <input type="checkbox" name="mb_mailling" id="reg_mb_mailling" class="custom-control-input" value="1" <?php echo ($w=='' || $member['mb_mailling'])?'checked':''; ?>>
                                    <div class="custom-control-label" for="reg_mb_mailling">정보 메일을 받겠습니다.</a></div>
                                </label>
                            </div>
                        </div>

	                    <?php if ($config['cf_use_hp']) { ?>
                        <div class="form-group form-row mb-0">
                            <label class="col-md-3 col-form-label">
                                문자수신여부
                            </label>
                            <div class="col-md-9">
                                <label class="custom-control custom-checkbox py-1">
                                    <input type="checkbox" name="mb_sms" id="reg_mb_sms" class="custom-control-input" value="1" <?php echo ($w=='' || $member['mb_sms'])?'checked':''; ?>>
                                    <div class="custom-control-label" for="reg_mb_sms">휴대폰 문자메세지를 받겠습니다.</div>
                                </label>
                            </div>
                        </div>
	                    <?php } ?>

	                    <?php if (isset($member['mb_open_date']) && $member['mb_open_date'] <= date("Y-m-d", G5_SERVER_TIME - ($config['cf_open_modify'] * 86400)) || empty($member['mb_open_date'])) { // 정보공개 수정일이 지났다면 수정가능 ?>
                            <div class="form-group form-row mb-4">
                                <label class="col-md-3 col-form-label">
                                    정보공개여부<i class="fa fa-info-circle ml-2" data-toggle="tooltip" data-placement="right" data-html="true" title="<div class='text-left'>* 정보공개를 바꾸시면 앞으로 <?php echo (int)$config['cf_open_modify'] ?>일 이내에는 변경이 안됩니다.</div>" aria-hidden="true"></i>
                                </label>
                                <div class="col-md-9">
                                    <label class="custom-control custom-checkbox py-1">
                                        <input type="checkbox" name="mb_open" id="reg_mb_open" class="custom-control-input" value="1" <?php echo ($w=='' || $member['mb_open'])?'checked':''; ?>>
                                        <div class="custom-control-label" for="reg_mb_open">다른 사람들이 나의 정보를 볼 수 있도록 합니다.</div>
                                    </label>
                                </div>
                            </div>
	                    <?php } else { ?>
                            <div class="form-group form-row mb-4">
                                <label class="col-md-3 col-form-label">
                                    정보공개여부
                                </label>
                                <div class="col-md-9">
                                    <input type="hidden" name="mb_open" value="<?php echo $member['mb_open'] ?>">
                                    <div class="alert alert-warning mt-2 mb-0" role="alert">
                                        <i class="fas fa-info-circle mr-2" aria-hidden="true"></i>정보공개는 수정후 <?php echo (int)$config['cf_open_modify'] ?>일 이내, <?php echo date("Y년 m월 j일", isset($member['mb_open_date']) ? strtotime("{$member['mb_open_date']} 00:00:00")+$config['cf_open_modify']*86400:G5_SERVER_TIME+$config['cf_open_modify']*86400); ?> 까지는 변경이 안됩니다.<br>
                                        <i class="fas fa-info-circle mr-2" aria-hidden="true"></i>이렇게 하는 이유는 잦은 정보공개 수정으로 인하여 쪽지를 보낸 후 받지 않는 경우를 막기 위해서 입니다.
                                    </div>
                                </div>
                            </div>
	                    <?php }  ?>

	                    <?php
	                    //회원정보 수정인 경우 소셜 계정 출력
	                    if( $w == 'u' && function_exists('social_member_provider_manage') ){
                        ?>
                            <div class="form-group form-row mb-4">
                                <label class="col-md-3 col-form-label">
                                    SNS계정 연결
                                </label>
                                <div class="col-md-9">
                                    <?php
                                    social_member_provider_manage();
                                    ?>
                                </div>
                            </div>
                        <?php
	                    }
	                    ?>

	                    <?php if ($w == "" && $config['cf_use_recommend']) {  ?>
                            <div class="form-group form-row mb-4">
                                <label class="col-md-3 col-form-label">
                                    추천인
                                </label>
                                <div class="col-md-9">
                                    <input type="text" name="mb_recommend" id="reg_mb_recommend" class="form-control" placeholder="추천인아이디">
                                </div>
                            </div>
	                    <?php }  ?>

                        <div class="form-group form-row">
                            <label class="col-md-3 col-form-label">
                                자동등록방지
                            </label>
                            <div class="col-md-9">
	                            <?php echo captcha_html(); ?>
                            </div>
                        </div>


                    </article> <!-- card-body end .// -->

                </div>

                <div class="row">
                    <div class="col-6">
                        <a href="<?php echo G5_URL ?>" class="btn btn-light btn-block" role="submit">취소</a>
                    </div>
                    <div class="col-6">
                        <button type="submit" id="btn_submit" class="btn btn-primary btn-block" accesskey="s"><?php echo $w==''?'회원가입':'정보수정'; ?></button>
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
$(function() {
    $("#reg_zip_find").css("display", "inline-block");

    <?php if($config['cf_cert_use'] && $config['cf_cert_ipin']) { ?>
    // 아이핀인증
    $("#win_ipin_cert").click(function() {
        if(!cert_confirm())
            return false;

        var url = "<?php echo G5_OKNAME_URL; ?>/ipin1.php";
        certify_win_open('kcb-ipin', url);
        return;
    });

    <?php } ?>
    <?php if($config['cf_cert_use'] && $config['cf_cert_hp']) { ?>
    // 휴대폰인증
    $("#win_hp_cert").click(function() {
        if(!cert_confirm())
            return false;

        <?php
        switch($config['cf_cert_hp']) {
            case 'kcb':
                $cert_url = G5_OKNAME_URL.'/hpcert1.php';
                $cert_type = 'kcb-hp';
                break;
            case 'kcp':
                $cert_url = G5_KCPCERT_URL.'/kcpcert_form.php';
                $cert_type = 'kcp-hp';
                break;
            case 'lg':
                $cert_url = G5_LGXPAY_URL.'/AuthOnlyReq.php';
                $cert_type = 'lg-hp';
                break;
            default:
                echo 'alert("기본환경설정에서 휴대폰 본인확인 설정을 해주십시오");';
                echo 'return false;';
                break;
        }
        ?>

        certify_win_open("<?php echo $cert_type; ?>", "<?php echo $cert_url; ?>");
        return;
    });
    <?php } ?>
});

// submit 최종 폼체크
function fregisterform_submit(f)
{
    // 회원아이디 검사
    if (f.w.value == "") {
        var msg = reg_mb_id_check();
        if (msg) {
            alert(msg);
            f.mb_id.select();
            return false;
        }
    }

    if (f.w.value == "") {
        if (f.mb_password.value.length < 3) {
            alert("비밀번호를 3글자 이상 입력하십시오.");
            f.mb_password.focus();
            return false;
        }
    }

    if (f.mb_password.value != f.mb_password_re.value) {
        alert("비밀번호가 같지 않습니다.");
        f.mb_password_re.focus();
        return false;
    }

    if (f.mb_password.value.length > 0) {
        if (f.mb_password_re.value.length < 3) {
            alert("비밀번호를 3글자 이상 입력하십시오.");
            f.mb_password_re.focus();
            return false;
        }
    }

    // 이름 검사
    if (f.w.value=="") {
        if (f.mb_name.value.length < 1) {
            alert("이름을 입력하십시오.");
            f.mb_name.focus();
            return false;
        }

        /*
        var pattern = /([^가-힣\x20])/i;
        if (pattern.test(f.mb_name.value)) {
            alert("이름은 한글로 입력하십시오.");
            f.mb_name.select();
            return false;
        }
        */
    }

    <?php if($w == '' && $config['cf_cert_use'] && $config['cf_cert_req']) { ?>
    // 본인확인 체크
    if(f.cert_no.value=="") {
        alert("회원가입을 위해서는 본인확인을 해주셔야 합니다.");
        return false;
    }
    <?php } ?>

    // 닉네임 검사
    if ((f.w.value == "") || (f.w.value == "u" && f.mb_nick.defaultValue != f.mb_nick.value)) {
        var msg = reg_mb_nick_check();
        if (msg) {
            alert(msg);
            f.reg_mb_nick.select();
            return false;
        }
    }

    // E-mail 검사
    if ((f.w.value == "") || (f.w.value == "u" && f.mb_email.defaultValue != f.mb_email.value)) {
        var msg = reg_mb_email_check();
        if (msg) {
            alert(msg);
            f.reg_mb_email.select();
            return false;
        }
    }

    <?php if (($config['cf_use_hp'] || $config['cf_cert_hp']) && $config['cf_req_hp']) {  ?>
    // 휴대폰번호 체크
    var msg = reg_mb_hp_check();
    if (msg) {
        alert(msg);
        f.reg_mb_hp.select();
        return false;
    }
    <?php } ?>

    if (typeof f.mb_icon != "undefined") {
        if (f.mb_icon.value) {
            if (!f.mb_icon.value.toLowerCase().match(/.(gif|jpe?g|png)$/i)) {
                alert("회원아이콘이 이미지 파일이 아닙니다.");
                f.mb_icon.focus();
                return false;
            }
        }
    }

    if (typeof f.mb_img != "undefined") {
        if (f.mb_img.value) {
            if (!f.mb_img.value.toLowerCase().match(/.(gif|jpe?g|png)$/i)) {
                alert("회원이미지가 이미지 파일이 아닙니다.");
                f.mb_img.focus();
                return false;
            }
        }
    }

    if (typeof(f.mb_recommend) != "undefined" && f.mb_recommend.value) {
        if (f.mb_id.value == f.mb_recommend.value) {
            alert("본인을 추천할 수 없습니다.");
            f.mb_recommend.focus();
            return false;
        }

        var msg = reg_mb_recommend_check();
        if (msg) {
            alert(msg);
            f.mb_recommend.select();
            return false;
        }
    }

    <?php echo chk_captcha_js();  ?>

    document.getElementById("btn_submit").disabled = "disabled";

    return true;
}

jQuery(function($){
	//tooltip
    $(document).on("click", ".tooltip_icon", function(e){
        $(this).next(".tooltip").fadeIn(400).css("display","inline-block");
    }).on("mouseout", ".tooltip_icon", function(e){
        $(this).next(".tooltip").fadeOut();
    });
});


</script>

<!-- } 회원정보 입력/수정 끝 -->