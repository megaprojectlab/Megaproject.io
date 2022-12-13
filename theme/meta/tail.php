<?php
/***************************************************
 * ACETHEME Ver 1.0.0
 * 이 테마는 유료테마로써, 구매하지 않고 사용하는것은 불법이며 법적인 처벌을 받게 됩니다!
 * 모든 테마사용처는 상시 모니터링 되오니 주의하시기 바랍니다!
 ***************************************************/
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

//echo $_SERVER['HTTP_HOST'];
// 예제 1번, 현재 페이지의 호스트값 불러오기

//echo $_SERVER['REQUEST_URI'];
// 예제 2번, 호스트를 제외한 나머지 주소

//echo $_SERVER['QUERY_STRING'];
// 예제 3번, 현재 페이지의 쿼리 스트링 값


if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/tail.php');
    return;
}
?>

            <!-- ============================================================== -->
            <!-- Back to top -->
            <!-- ============================================================== -->
            <a class="bt-top btn btn-info" href="#top"><i class="fas fa-arrow-up"></i></a>

        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->

<!-- 푸터 시작 { -->



<?php
if(G5_DEVICE_BUTTON_DISPLAY && !G5_IS_MOBILE) {
?>

<?php
} //end if : G5_DEVICE_BUTTON_DISPLAY && !G5_IS_MOBILE

if ($config['cf_analytics']) {
    echo $config['cf_analytics'];
}


/******************************************************************************
### 푸터 불러오기 ###
 * 설정위치 : theme.config.php 파일 > $theme_config['footer'] = "푸터파일명"
-- 예) $theme_config['footer'] = 'footer1.php'
 * 헤더 파일 경로 : _footer/
 *****************************************************************************/

$inc_footer = G5_THEME_PATH.'/_footer/'.$theme_config['footer'];
if (isset($theme_config['footer']) && file_exists($inc_footer)) {
	incWithVar($inc_footer, array(

	));
} else {
	$_ACETHEME->message('푸터 파일이 없습니다. 입력한 파일명 ' . $theme_config['footer'] . '를 확인하세요.', 'warning');
}

?>

<!-- } 푸터 끝 -->

<script>

var chk_filename_with_param = "<?php echo $chk_filename_with_param; ?>";

$(function() {

    // 폰트 리사이즈 쿠키있으면 실행
    font_resize("container", get_cookie("ck_font_resize_rmv_class"), get_cookie("ck_font_resize_add_class"));

    // 커스텀 파일업로드의 파일이름 표시용
    $(".custom-file-input").on("change", function() {
        var fileName = $(this).val().split("\\").pop();
        $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
    });


    /****************************************
    * 게시판 분류(카테고리) 페이지 인식
     **************************************/
    $("._cat_list .list-inline-item .btn").each(function (index, item) {
        var curr_bo_subject_str = $(item).text();
        var curr_bo_subject_str = $.trim(curr_bo_subject_str); //좌우 공백제거

        if (curr_bo_subject_str == '<?php echo $sca; ?>') { //분류(카테고리)가 일치할 경우
            $(item).parents('.list-inline-item:first').siblings().find('.btn').removeClass('btn-<?php echo $theme_config['act_color_cat']; ?>').addClass('btn-outline-secondary'); //형제요소들의 선택상태 제거
            $(item).parents('.list-inline-item:first').find('.btn').addClass('btn-<?php echo $theme_config['act_color_cat']; ?>').removeClass('btn-outline-secondary'); //현재 카테고리 페이지 인식
        }
    });

    // 아무런 카테고리도 선택하지 않을 경우 : 전체 분류(카테고리)를 선택한것으로 표시
    var isThereActive = false;
    $("._cat_list .list-inline-item .btn").each(function (index, item) {
        var hasClass = $(item).hasClass('btn-<?php echo $theme_config['act_color_cat']; ?>');
        if (hasClass) {
            isThereActive = true;
        }
    });

    if (!isThereActive) {
        $("._cat_list .list-inline-item .btn:contains('전체')").addClass('btn-<?php echo $theme_config['act_color_cat']; ?>').removeClass('btn-outline-secondary');
    }


    /****************************************
     * 사이드바 페이지 인식
     **************************************/
    $("._sidebar_submenu .list-group-item").each(function (index, item) {
        var curr_href_str = $(item).attr("href");
        var curr_href_str = $.trim(curr_href_str); //좌우 공백제거
        var curr_href_str = curr_href_str.split(/[/]+/).pop(); // 파일명만 가져오기

        if (curr_href_str && curr_href_str == chk_filename_with_param) { //현재URL이 파일명과 일치할 경우
            $(item).siblings().removeClass('bg-<?php echo $theme_config['act_color_submenu']; ?> text-white');//형제요소들의 선택상태 제거
            $(item).addClass('bg-<?php echo $theme_config['act_color_submenu']; ?> text-white'); //현재 페이지 인식
        }
    });


    /****************************************
     * GNB 페이지 인식
     **************************************/
    // 전체메뉴
    $("._gnb_all a").each(function (index, item) {
        var curr_href_str = $(item).attr("href");
        var curr_href_str = $.trim(curr_href_str); //좌우 공백제거
        var curr_href_str = curr_href_str.split(/[/]+/).pop(); // 파일명만 가져오기

        if (curr_href_str && curr_href_str == chk_filename_with_param) { //현재URL이 파일명과 일치할 경우
            $(item).addClass('text-<?php echo $theme_config['act_color_header']; ?> font-bold'); //2단메뉴
            $(item).parents("ul:first").find("li > h5").addClass('text-<?php echo $theme_config['act_color_header']; ?> font-bold'); //1단메뉴
        }
    });

    // 개별메뉴
    $("._gnb_one a").each(function (index, item) {
        var curr_href_str = $(item).attr("href");
        var curr_href_str = $.trim(curr_href_str); //좌우 공백제거
        var curr_href_str = curr_href_str.split(/[/]+/).pop(); // 파일명만 가져오기

        if (curr_href_str && curr_href_str == chk_filename_with_param) { //현재URL이 파일명과 일치할 경우
            $(item).addClass('text-<?php echo $theme_config['act_color_header']; ?> font-bold'); //2단메뉴
            $(item).parents("li.nav-item:first").find("a.nav-link").addClass('text-<?php echo $theme_config['act_color_header']; ?> font-bold'); //1단메뉴
        }
    });


    /****************************************
     * 검색창 관련
     **************************************/
    // 검색창 포커스
    // $(document).ready(function() {
    //     // $("input#sch_stx").focus();
    //     // $("input#sch_stx").on("change", function() {
    //     $("#gnb-search").on("click", function() {
    //         // $(this).focus();
    //         $("input#sch_stx").focus();
    //     });
    // });

    function fsearchbox_submit(f)
    {
        if (f.stx.value.length < 2) {
            alert("검색어는 두글자 이상 입력하십시오.");
            f.stx.select();
            f.stx.focus();
            return false;
        }

        // 검색에 많은 부하가 걸리는 경우 이 주석을 제거하세요.
        var cnt = 0;
        for (var i=0; i<f.stx.value.length; i++) {
            if (f.stx.value.charAt(i) == ' ')
                cnt++;
        }

        if (cnt > 1) {
            alert("빠른 검색을 위하여 검색어에 공백은 한개만 입력할 수 있습니다.");
            f.stx.select();
            f.stx.focus();
            return false;
        }

        return true;
    }

});


/****************************************
 *  outerHTML() 구현
 **************************************/
$.fn.outerHTML = function(){
    // IE, Chrome & Safari will comply with the non-standard outerHTML, all others (FF) will have a fall-back for cloning
    return (!this.length) ? this : (this[0].outerHTML || (
        function(el){
            var div = document.createElement('div');
            div.appendChild(el.cloneNode(true));
            var contents = div.innerHTML;
            div = null;
            return contents;
        })(this[0]));
}

</script>


<?php
// 이하 섹션 템플릿 라이브러리의 경우만 적용
if (strpos($_SERVER['REQUEST_URI'],'_temp_') !== false) {
?>

    <script>

        /****************************************
         *  섹션 템플릿 라이브러리 > [코드복사] 버튼
         **************************************/

        $(function () {
            $('._btn_copy').tooltip({
                trigger: 'click',
                placement: 'bottom'
            });
        });

        function setTooltip(btn, message) {
            $(btn).tooltip('hide')
                .attr('data-original-title', message)
                .tooltip('show');
        }

        function hideTooltip(btn) {
            setTimeout(function () {
                $(btn).tooltip('hide');
            }, 1000);
        }

        function copyCode(ele) {

            //주의! : 원본은 그냥둬야 함
            var $_ct_section = $(ele).parents('._ct_section');

            //카피본 생성 : Code Copy 버튼을 제거하기 위함
            var $_ct_section_copy = $_ct_section.clone();

            //Code Copy 버튼 제거
            $_ct_section_copy.find('._ct_btn_copy').remove();

            var codeStr = $_ct_section_copy.outerHTML();

            // 필요없는 텍스트 바꿔주기
            codeStr = codeStr.replace(/_ct_section /gi, "");

            // 빈줄 제거
            codeStr = codeStr.replace(/^\s*\n/gm, "");

            // 주의! : textarea는 원본을 통해 접근해야 함
            var $_ta_section = $_ct_section.next('._ta_section');
            $_ta_section.val(codeStr); // textarea에 값 저장

            // textarea의 값을 변수에 저장
            var codeStrFinal = $_ta_section.val();

            // data-type속성에 들어가는 문자열을 보이는 그대로 치환
            codeStrFinal = codeStrFinal.replace(/\"\[/gi, "'[");
            codeStrFinal = codeStrFinal.replace(/\]\"/gi, "]'");
            codeStrFinal = codeStrFinal.replace(/&quot;/gi, '"');

            var clipboard = new ClipboardJS('._btn_copy', {
                text: function (trigger) {
                    return codeStrFinal;
                }
            });

            clipboard.on('success', function (e) {
                setTooltip(e.trigger, '복사완료!');
                hideTooltip(e.trigger);
            });

            clipboard.on('error', function (e) {
                setTooltip(e.trigger, '복사실패!');
                hideTooltip(e.trigger);
            });
        }


        /****************************************
         *  섹션 템플릿 라이브러리 > Shape > [복사] 버튼
         **************************************/
        $(function () {
            $('._btn_copy_shape').tooltip({
                trigger: 'click',
                placement: 'bottom'
            });

            var clipboard_shape = new ClipboardJS('._btn_copy_shape', {

            });

            clipboard_shape.on('success', function (e) {
                setTooltip(e.trigger, '복사완료!');
                hideTooltip(e.trigger);
            });

            clipboard_shape.on('error', function (e) {
                setTooltip(e.trigger, '복사실패!');
                hideTooltip(e.trigger);
            });
        });

    </script>

<?php
}
?>

<?php
include_once(G5_THEME_PATH."/tail.sub.php");
?>