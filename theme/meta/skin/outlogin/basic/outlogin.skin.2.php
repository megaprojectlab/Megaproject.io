<?php
if (!defined("_GNUBOARD_")) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$outlogin_skin_url.'/style.css">', 0);
?>

<!-- 로그인 후 아웃로그인 시작 { -->
<div class="card border">
    <div class="card-body">

        <ul class="list-unstyled mb-3">
            <li class="media mb-0 p-0 border-0">
	            <?php echo get_member_profile_img($member['mb_id']); ?>
                <?php
//                    echo $_ACETHEME->get_member_profile_img_outlogin(get_member_profile_img($member['mb_id']));
                ?>

                <div class="media-body align-self-center ml-3">
                    <h6 class="mt-0 mb-1">
	                    <?php echo $nick ?>님
                    </h6>
                    <p class="text-muted mb-0">
                        <a href="<?php echo G5_BBS_URL ?>/member_confirm.php?url=register_form.php" class="btn btn-sm btn-outline-secondary" role="button">정보수정</a>
	                    <?php if ($is_admin == 'super' || $is_auth) {  ?>
                            <a href="<?php echo correct_goto_url(G5_ADMIN_URL); ?>" title="관리자">
                                <i class="fas fa-cog fa-spin fa-fw ml-2 text-danger"></i>
                            </a>
                        <?php }  ?>
                    </p>
                </div>
            </li>
        </ul>

        <ul class="list-group">
            <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 py-1">
                <span>
                    <a href="<?php echo G5_BBS_URL ?>/point.php" target="_blank" class="win_point">
                        <i class="fas fa-database mr-2 text-secondary"></i>포인트
                    </a>
                </span>
                <span class="badge badge-primary badge-pill"><?php echo $point; ?></span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 py-1">
                <span>
                    <a href="<?php echo G5_BBS_URL ?>/memo.php" target="_blank" class="win_memo">
                        <i class="fas fa-envelope mr-2 text-secondary"></i>쪽지
                    </a>
                </span>
                <span class="badge badge-primary badge-pill"><?php echo $memo_not_read; ?></span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 py-1">
                <span>
                    <a href="<?php echo G5_BBS_URL ?>/scrap.php" target="_blank" class="win_scrap">
                        <i class="fas fa-thumbtack mr-2 text-secondary"></i>스크랩
                    </a>
                </span>
                <span class="badge badge-primary badge-pill"><?php echo $mb_scrap_cnt; ?></span>
            </li>
        </ul>

    </div> <!-- card-body.// -->
    <div class="card-footer text-center">
        <a href="<?php echo G5_BBS_URL ?>/logout.php" class="btn btn-link py-0" role="button"><i class="fas fa-sign-out-alt mr-2 text-danger"></i>로그아웃</a>
    </div><!-- card-footer.// -->
</div>

<script>
// 탈퇴의 경우 아래 코드를 연동하시면 됩니다.
function member_leave()
{
    if (confirm("정말 회원에서 탈퇴 하시겠습니까?"))
        location.href = "<?php echo G5_BBS_URL ?>/member_confirm.php?url=member_leave.php";
}
</script>
<!-- } 로그인 후 아웃로그인 끝 -->
