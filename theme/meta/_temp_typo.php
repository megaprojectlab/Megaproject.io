<?php
include_once "./_common.php";

if ( $is_admin != 'super' ) {
	alert( "최고관리자만 접근 가능합니다!", G5_BBS_URL . "/login.php?url=" . urlencode( G5_THEME_URL . "/_temp_c2a.php" ) );
}

$param_color = $_GET['color'];

$g5['title'] = "텍스트 ".$param_color;
include_once(G5_THEME_PATH . '/head.php');
?>

<!-- ============================================================== -->
<!-- Container fluid  -->
<!-- ============================================================== -->
<div class="container-fluid">

	<?php include_once(G5_THEME_PATH . '/_inc_temp/header_temp.php'); ?>
    <hr class="m-0">


    <!-- ============================================================== -->
    <!-- 텍스트 1  -->
    <!-- ============================================================== -->
    <div class="_ct_section spacer">
        <div class="container">
            <div class="row justify-content-center mb-4">
                <div class="col-md-7 text-center">
                    <span class="label label-success label-rounded">텍스트 1</span>
                    <h2 class="title">에이스테마로 멋진 웹사이트 만들기</h2>
                    <h6 class="subtitle">에이스테마는 다양한 게시판 스킨과 최근게시물 스킨을 제공하기 때문에 보다 풍성하고 멋진 웹사이트를 만들 수 있게 해줍니다. 또한, 섹션 템플릿 라이브러리를 제공하여 웹페이지를 쉽고 빠른 시간안에 완성할 수 있습니다. </h6>
			        <?php echo $btn_copycode_str; ?>
                </div>
            </div>
            <h3>
                <span class="label label-eng label-<?php echo $param_color ?> text-white font-black mr-1">STEP 1</span>
                에이스테마는 섹션 템플릿 라이브러리를 지원합니다
            </h3>
            <div class="mb-4">
                에이스테마는 <span class="text-<?php echo $param_color ?> font-extrabold">다양한 게시판 스킨</span>과 <span class="text-<?php echo $param_color ?> font-extrabold">최근게시물 스킨</span>을 제공하기 때문에 보다 풍성하고 멋진 웹사이트를 만들 수 있게 해줍니다.
                또한, <span class="text-<?php echo $param_color ?> font-extrabold">섹션 템플릿 라이브러리</span>를 제공하여 웹페이지를 쉽고 빠른 시간안에 완성할 수 있습니다. <span class="text-<?php echo $param_color ?> font-extrabold">커다란 천고</span>에 붙잡아 아름다우냐?
                구할 대고, 목숨이 피가 갑 하여도 새 <span class="text-<?php echo $param_color ?> font-extrabold">착목한는 거친 칼</span>이다. 방황하여도, 아름답고 없으면, 주는 때문이다. 뜨거운지라, 가는 하였으며, 오직 공자는 그들은 부패뿐이다.
                군영과 가장 갑 <span class="text-<?php echo $param_color ?> font-extrabold">교향악</span>이다. 가는 되는 청춘의 예가 쓸쓸하랴? 청춘 가는 무엇을 <span class="text-<?php echo $param_color ?> font-extrabold">역사</span>를 되려니와, 사막이다. 같지 구하기 현저하게 그들의 교향악이다.

            </div>
            <h3>
                <span class="label label-eng label-<?php echo $param_color ?> text-white font-black mr-1">STEP 2</span>
                웹사이트 구축의 신세계를 경험하세요
            </h3>
            <div class="mb-4">
                뜨고, 소금이라 가는 위하여, 이상을 운다. <span class="text-<?php echo $param_color ?> font-extrabold">가진 설산에서 공자는 방지하는 바로 것</span>이다. 두손을 뼈 그것은 낙원을 안고, 커다란 운다. 찬미를 그들의 몸이 싶이 인간은 있음으로써 옷을 인간이 사막이다.
                <span class="text-<?php echo $param_color ?> font-extrabold">주는 가는 사람은 있을 그리하였는가?</span> 우리의 맺어, 실로 이상 우리 곧 영원히 운다. 든 인생을 사랑의 생생하며, 뿐이다. <span class="text-<?php echo $param_color ?> font-extrabold">열매를 고행을 되려니와, 청춘의 있음으로써 열락의 이상의 있는가?</span>
                풀밭에 바로 두손을 칼이다. 하여도 평화스러운 피가 석가는 것이다.
            </div>
            <h3>
                <span class="label label-eng label-<?php echo $param_color ?> text-white font-black mr-1">STEP 3</span>
                어떠한 스타일의 홈페이지도 쉽고 빠르게 구축할 수 있습니다
            </h3>
            <div class="mb-4">
                미묘한 열락의 어디 가지에 <span class="text-<?php echo $param_color ?> font-extrabold">영락</span>과 <span class="text-<?php echo $param_color ?> font-extrabold">일월</span>과 우리 주는 군영과 위하여서. 속잎나고, 천고에 되려니와,
                우리 싹이 가슴이 말이다. <span class="text-<?php echo $param_color ?> font-extrabold">보내는 동력</span>은 가지에 과실이 뜨거운지라, 투명하되 그들의 이것이다. <span class="text-<?php echo $param_color ?> font-extrabold">낙원을 바로 쓸쓸한 곧 거친 사막</span>이다.
                피에 새가 곳으로 우리는 설산에서 끓는다. <span class="text-<?php echo $param_color ?> font-extrabold">장식하는 그들</span>은 오아이스도 천자만홍이 날카로우나 인간은 부패뿐이다. 없으면 얼마나 청춘을 보라. 영원히 피부가 굳세게 같은 그들의 길을 뿐이다.
                <span class="text-<?php echo $param_color ?> font-extrabold">굳세게 그들의 많이 열락의 것</span>이다. 뜨거운지라, 예가 끓는 그들에게 쓸쓸하랴? 봄날의 만천하의 것은 날카로우나 못하다 그들은 천지는 장식하는 봄바람이다.
            </div>
        </div>
    </div>
    <textarea class="d-none _ta_section"></textarea>
    <!-- ============================================================== -->
    <!-- // 텍스트 1  -->
    <!-- ============================================================== -->
    <hr class="m-0">
    <!-- ============================================================== -->
    <!-- 텍스트 2  -->
    <!-- ============================================================== -->
    <div class="_ct_section spacer">
        <div class="container">
            <div class="row justify-content-center mb-4">
                <div class="col-md-7 text-center">
                    <span class="label label-primary label-rounded">텍스트 2</span>
                    <h2 class="title">에이스테마로 멋진 웹사이트 만들기</h2>
                    <h6 class="subtitle">에이스테마는 다양한 게시판 스킨과 최근게시물 스킨을 제공하기 때문에 보다 풍성하고 멋진 웹사이트를 만들 수 있게 해줍니다. 또한, 섹션 템플릿 라이브러리를 제공하여 웹페이지를 쉽고 빠른 시간안에 완성할 수 있습니다. </h6>
			        <?php echo $btn_copycode_str; ?>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-6">
                    <h3>
                        <span class="label label-eng label-<?php echo $param_color ?> text-white font-black mr-1">STEP 1</span>
                        섹션 템플릿 라이브러리
                    </h3>
                    <div class="mb-4">
                        에이스테마는 <span class="text-<?php echo $param_color ?> font-extrabold">다양한 게시판 스킨</span>과 <span class="text-<?php echo $param_color ?> font-extrabold">최근게시물 스킨</span>을 제공하기 때문에 보다 풍성하고 멋진 웹사이트를 만들 수 있게 해줍니다.
                        또한, <span class="text-<?php echo $param_color ?> font-extrabold">섹션 템플릿 라이브러리</span>를 제공하여 웹페이지를 쉽고 빠른 시간안에 완성할 수 있습니다. <span class="text-<?php echo $param_color ?> font-extrabold">커다란 천고</span>에 붙잡아 아름다우냐?
                        구할 대고, 목숨이 피가 갑 하여도 새 <span class="text-<?php echo $param_color ?> font-extrabold">착목한는 거친 칼</span>이다. 방황하여도, 아름답고 없으면, 주는 때문이다. 뜨거운지라, 가는 하였으며, 오직 공자는 그들은 부패뿐이다.
                        군영과 가장 갑 <span class="text-<?php echo $param_color ?> font-extrabold">교향악</span>이다. 가는 되는 청춘의 예가 쓸쓸하랴? 청춘 가는 무엇을 <span class="text-<?php echo $param_color ?> font-extrabold">역사</span>를 되려니와, 사막이다. 같지 구하기 현저하
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <h3>
                        <span class="label label-eng label-<?php echo $param_color ?> text-white font-black mr-1">STEP 2</span>
                        다양한 게시판 스킨
                    </h3>
                    <div class="mb-4">
                        뜨고, 소금이라 가는 위하여, 이상을 운다. <span class="text-<?php echo $param_color ?> font-extrabold">가진 설산에서 공자는 방지하는 바로 것</span>이다. 두손을 뼈 그것은 낙원을 안고, 커다란 운다. 찬미를 그들의 몸이 싶이 인간은 있음으로써 옷을 인간이 사막이다.
                        <span class="text-<?php echo $param_color ?> font-extrabold">주는 가는 사람은 있을 그리하였는가?</span> 우리의 맺어, 실로 이상 우리 곧 영원히 운다. 든 인생을 사랑의 생생하며, 뿐이다. <span class="text-<?php echo $param_color ?> font-extrabold">열매를 고행을 되려니와, 청춘의 있음으로써 열락의 이상의 있는가?</span>
                        풀밭에 바로 두손을 칼이다. 하여도 평화스러운 피가 석가는 것이다.
                    </div>
                </div>
            </div>
        </div>
    </div>
    <textarea class="d-none _ta_section"></textarea>
    <!-- ============================================================== -->
    <!-- // 텍스트 2  -->
    <!-- ============================================================== -->
    <hr class="m-0">
    <!-- ============================================================== -->
    <!-- 텍스트 3  -->
    <!-- ============================================================== -->
    <div class="_ct_section spacer">
        <div class="container">
            <div class="row justify-content-center mb-4">
                <div class="col-md-7 text-center">
                    <span class="label label-danger label-rounded">텍스트 3</span>
                    <h2 class="title">에이스테마로 멋진 웹사이트 만들기</h2>
                    <h6 class="subtitle">에이스테마는 다양한 게시판 스킨과 최근게시물 스킨을 제공하기 때문에 보다 풍성하고 멋진 웹사이트를 만들 수 있게 해줍니다. 또한, 섹션 템플릿 라이브러리를 제공하여 웹페이지를 쉽고 빠른 시간안에 완성할 수 있습니다. </h6>
			        <?php echo $btn_copycode_str; ?>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-4">
                    <h3>
                        <span class="label label-eng label-<?php echo $param_color ?> text-white font-black mr-1">STEP 1</span>
                        섹션 템플릿 라이브러리
                    </h3>
                    <div class="mb-4">
                        에이스테마는 <span class="text-<?php echo $param_color ?> font-extrabold">다양한 게시판 스킨</span>과 <span class="text-<?php echo $param_color ?> font-extrabold">최근게시물 스킨</span>을 제공하기 때문에 보다 풍성하고 멋진 웹사이트를 만들 수 있게 해줍니다.
                        또한, <span class="text-<?php echo $param_color ?> font-extrabold">섹션 템플릿 라이브러리</span>를 제공하여 웹페이지를 쉽고 빠른 시간안에 완성할 수 있습니다. <span class="text-<?php echo $param_color ?> font-extrabold">커다란 천고</span>에 붙잡아 아름다우냐?
                        구할 대고, 목숨이 피가 갑 하여도 새 <span class="text-<?php echo $param_color ?> font-extrabold">착목한는 거친 칼</span>이다. 방황하여도, 아름답고 없으면, 주는 때문이다. 뜨거운지라, 가는 하였으며, 오직 공자는 그들은 부패뿐이다.
                        군영과 가장 갑 <span class="text-<?php echo $param_color ?> font-extrabold">교향악</span>이다. 가는 되는 청춘의 예가 쓸쓸하랴? 청춘 가는 무엇을 <span class="text-<?php echo $param_color ?> font-extrabold">역사</span>를 되려니와, 사막이다. 같지 구하기 현저하
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <h3>
                        <span class="label label-eng label-<?php echo $param_color ?> text-white font-black mr-1">STEP 2</span>
                        다양한 게시판 스킨
                    </h3>
                    <div class="mb-4">
                        뜨고, 소금이라 가는 위하여, 이상을 운다. <span class="text-<?php echo $param_color ?> font-extrabold">가진 설산에서 공자는 방지하는 바로 것</span>이다. 두손을 뼈 그것은 낙원을 안고, 커다란 운다. 찬미를 그들의 몸이 싶이 인간은 있음으로써 옷을 인간이 사막이다.
                        <span class="text-<?php echo $param_color ?> font-extrabold">주는 가는 사람은 있을 그리하였는가?</span> 우리의 맺어, 실로 이상 우리 곧 영원히 운다. 든 인생을 사랑의 생생하며, 뿐이다. <span class="text-<?php echo $param_color ?> font-extrabold">열매를 고행을 되려니와, 청춘의 있음으로써 열락의 이상의 있는가?</span>
                        풀밭에 바로 두손을 칼이다. 하여도 평화스러운 피가 석가는 것이다.
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <h3>
                        <span class="label label-eng label-<?php echo $param_color ?> text-white font-black mr-1">STEP 3</span>
                        다양한 최근글 스킨
                    </h3>
                    <div class="mb-4">
                        미묘한 열락의 어디 가지에 <span class="text-<?php echo $param_color ?> font-extrabold">영락</span>과 <span class="text-<?php echo $param_color ?> font-extrabold">일월</span>과 우리 주는 군영과 위하여서. 속잎나고, 천고에 되려니와,
                        우리 싹이 가슴이 말이다. <span class="text-<?php echo $param_color ?> font-extrabold">보내는 동력</span>은 가지에 과실이 뜨거운지라, 투명하되 그들의 이것이다. <span class="text-<?php echo $param_color ?> font-extrabold">낙원을 바로 쓸쓸한 곧 거친 사막</span>이다.
                        피에 새가 곳으로 우리는 설산에서 끓는다. <span class="text-<?php echo $param_color ?> font-extrabold">장식하는 그들</span>은 오아이스도 천자만홍이 날카로우나 인간은 부패뿐이다. 없으면 얼마나 청춘을 보라. 영원히 피부가 굳세게 같은 그들의 길을 뿐이다.
                        <span class="text-<?php echo $param_color ?> font-extrabold">굳세게 그들의 많이 열락의 것</span>이다. 뜨거운지라, 예가 끓는 그들에게 쓸쓸하랴? 봄날의 만천하의 것은 날카로우나 못하다 그들은 천지는 장식하는 봄바람이다.
                    </div>
                </div>
            </div>
        </div>
    </div>
    <textarea class="d-none _ta_section"></textarea>
    <!-- ============================================================== -->
    <!-- // 텍스트 3  -->
    <!-- ============================================================== -->
    <hr class="m-0">
    <!-- ============================================================== -->
    <!-- 텍스트 4  -->
    <!-- ============================================================== -->
    <div class="_ct_section spacer">
        <div class="container">
            <div class="row justify-content-center mb-4">
                <div class="col-md-7 text-center">
                    <span class="label label-success label-rounded">텍스트 4</span>
                    <h2 class="title">에이스테마로 멋진 웹사이트 만들기</h2>
                    <h6 class="subtitle">에이스테마는 다양한 게시판 스킨과 최근게시물 스킨을 제공하기 때문에 보다 풍성하고 멋진 웹사이트를 만들 수 있게 해줍니다. 또한, 섹션 템플릿 라이브러리를 제공하여 웹페이지를 쉽고 빠른 시간안에 완성할 수 있습니다. </h6>
			        <?php echo $btn_copycode_str; ?>
                </div>
            </div>
            <h3>
                <span class="label label-eng label-rounded label-<?php echo $param_color ?> text-white font-black mr-1">STEP 1</span>
                에이스테마는 섹션 템플릿 라이브러리를 지원합니다
            </h3>
            <div class="mb-4">
                에이스테마는 <span class="bg-<?php echo $param_color ?> text-white font-extrabold px-1">다양한 게시판 스킨</span>과 <span class="bg-<?php echo $param_color ?> text-white font-extrabold px-1">최근게시물 스킨</span>을 제공하기 때문에 보다 풍성하고 멋진 웹사이트를 만들 수 있게 해줍니다.
                또한, <span class="bg-<?php echo $param_color ?> text-white font-extrabold px-1">섹션 템플릿 라이브러리</span>를 제공하여 웹페이지를 쉽고 빠른 시간안에 완성할 수 있습니다. <span class="bg-<?php echo $param_color ?> text-white font-extrabold px-1">커다란 천고</span>에 붙잡아 아름다우냐?
                구할 대고, 목숨이 피가 갑 하여도 새 <span class="bg-<?php echo $param_color ?> text-white font-extrabold px-1">착목한는 거친 칼</span>이다. 방황하여도, 아름답고 없으면, 주는 때문이다. 뜨거운지라, 가는 하였으며, 오직 공자는 그들은 부패뿐이다.
                군영과 가장 갑 <span class="bg-<?php echo $param_color ?> text-white font-extrabold px-1">교향악</span>이다. 가는 되는 청춘의 예가 쓸쓸하랴? 청춘 가는 무엇을 <span class="bg-<?php echo $param_color ?> text-white font-extrabold px-1">역사</span>를 되려니와, 사막이다. 같지 구하기 현저하게 그들의 교향악이다.

            </div>
            <h3>
                <span class="label label-eng label-rounded label-<?php echo $param_color ?> text-white font-black mr-1">STEP 2</span>
                웹사이트 구축의 신세계를 경험하세요
            </h3>
            <div class="mb-4">
                뜨고, 소금이라 가는 위하여, 이상을 운다. <span class="bg-<?php echo $param_color ?> text-white font-extrabold px-1">가진 설산에서 공자는 방지하는 바로 것</span>이다. 두손을 뼈 그것은 낙원을 안고, 커다란 운다. 찬미를 그들의 몸이 싶이 인간은 있음으로써 옷을 인간이 사막이다.
                <span class="bg-<?php echo $param_color ?> text-white font-extrabold px-1">주는 가는 사람은 있을 그리하였는가?</span> 우리의 맺어, 실로 이상 우리 곧 영원히 운다. 든 인생을 사랑의 생생하며, 뿐이다. <span class="bg-<?php echo $param_color ?> text-white font-extrabold px-1">열매를 고행을 되려니와, 청춘의 있음으로써 열락의 이상의 있는가?</span>
                풀밭에 바로 두손을 칼이다. 하여도 평화스러운 피가 석가는 것이다.
            </div>
            <h3>
                <span class="label label-eng label-rounded label-<?php echo $param_color ?> text-white font-black mr-1">STEP 3</span>
                어떠한 스타일의 홈페이지도 쉽고 빠르게 구축할 수 있습니다
            </h3>
            <div class="mb-4">
                미묘한 열락의 어디 가지에 <span class="bg-<?php echo $param_color ?> text-white font-extrabold px-1">영락</span>과 <span class="bg-<?php echo $param_color ?> text-white font-extrabold px-1">일월</span>과 우리 주는 군영과 위하여서. 속잎나고, 천고에 되려니와,
                우리 싹이 가슴이 말이다. <span class="bg-<?php echo $param_color ?> text-white font-extrabold px-1">보내는 동력</span>은 가지에 과실이 뜨거운지라, 투명하되 그들의 이것이다. <span class="bg-<?php echo $param_color ?> text-white font-extrabold px-1">낙원을 바로 쓸쓸한 곧 거친 사막</span>이다.
                피에 새가 곳으로 우리는 설산에서 끓는다. <span class="bg-<?php echo $param_color ?> text-white font-extrabold px-1">장식하는 그들</span>은 오아이스도 천자만홍이 날카로우나 인간은 부패뿐이다. 없으면 얼마나 청춘을 보라. 영원히 피부가 굳세게 같은 그들의 길을 뿐이다.
                <span class="bg-<?php echo $param_color ?> text-white font-extrabold px-1">굳세게 그들의 많이 열락의 것</span>이다. 뜨거운지라, 예가 끓는 그들에게 쓸쓸하랴? 봄날의 만천하의 것은 날카로우나 못하다 그들은 천지는 장식하는 봄바람이다.
            </div>
        </div>
    </div>
    <textarea class="d-none _ta_section"></textarea>
    <!-- ============================================================== -->
    <!-- // 텍스트 4  -->
    <!-- ============================================================== -->
    <hr class="m-0">
    <!-- ============================================================== -->
    <!-- 텍스트 5  -->
    <!-- ============================================================== -->
    <div class="_ct_section spacer">
        <div class="container">
            <div class="row justify-content-center mb-4">
                <div class="col-md-7 text-center">
                    <span class="label label-primary label-rounded">텍스트 5</span>
                    <h2 class="title">에이스테마로 멋진 웹사이트 만들기</h2>
                    <h6 class="subtitle">에이스테마는 다양한 게시판 스킨과 최근게시물 스킨을 제공하기 때문에 보다 풍성하고 멋진 웹사이트를 만들 수 있게 해줍니다. 또한, 섹션 템플릿 라이브러리를 제공하여 웹페이지를 쉽고 빠른 시간안에 완성할 수 있습니다. </h6>
			        <?php echo $btn_copycode_str; ?>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-6">
                    <h3>
                        <span class="label label-eng label-rounded label-<?php echo $param_color ?> text-white font-black mr-1">STEP 1</span>
                        섹션 템플릿 라이브러리
                    </h3>
                    <div class="mb-4">
                        에이스테마는 <span class="bg-<?php echo $param_color ?> text-white font-extrabold px-1">다양한 게시판 스킨</span>과 <span class="bg-<?php echo $param_color ?> text-white font-extrabold px-1">최근게시물 스킨</span>을 제공하기 때문에 보다 풍성하고 멋진 웹사이트를 만들 수 있게 해줍니다.
                        또한, <span class="bg-<?php echo $param_color ?> text-white font-extrabold px-1">섹션 템플릿 라이브러리</span>를 제공하여 웹페이지를 쉽고 빠른 시간안에 완성할 수 있습니다. <span class="bg-<?php echo $param_color ?> text-white font-extrabold px-1">커다란 천고</span>에 붙잡아 아름다우냐?
                        구할 대고, 목숨이 피가 갑 하여도 새 <span class="bg-<?php echo $param_color ?> text-white font-extrabold px-1">착목한는 거친 칼</span>이다. 방황하여도, 아름답고 없으면, 주는 때문이다. 뜨거운지라, 가는 하였으며, 오직 공자는 그들은 부패뿐이다.
                        군영과 가장 갑 <span class="bg-<?php echo $param_color ?> text-white font-extrabold px-1">교향악</span>이다. 가는 되는 청춘의 예가 쓸쓸하랴? 청춘 가는 무엇을 <span class="bg-<?php echo $param_color ?> text-white font-extrabold px-1">역사</span>를 되려니와, 사막이다. 같지 구하기 현저하
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <h3>
                        <span class="label label-eng label-rounded label-<?php echo $param_color ?> text-white font-black mr-1">STEP 2</span>
                        다양한 게시판 스킨
                    </h3>
                    <div class="mb-4">
                        뜨고, 소금이라 가는 위하여, 이상을 운다. <span class="bg-<?php echo $param_color ?> text-white font-extrabold px-1">가진 설산에서 공자는 방지하는 바로 것</span>이다. 두손을 뼈 그것은 낙원을 안고, 커다란 운다. 찬미를 그들의 몸이 싶이 인간은 있음으로써 옷을 인간이 사막이다.
                        <span class="bg-<?php echo $param_color ?> text-white font-extrabold px-1">주는 가는 사람은 있을 그리하였는가?</span> 우리의 맺어, 실로 이상 우리 곧 영원히 운다. 든 인생을 사랑의 생생하며, 뿐이다. <span class="bg-<?php echo $param_color ?> text-white font-extrabold px-1">열매를 고행을 되려니와, 청춘의 있음으로써 열락의 이상의 있는가?</span>
                        풀밭에 바로 두손을 칼이다. 하여도 평화스러운 피가 석가는 것이다.
                    </div>
                </div>
            </div>
        </div>
    </div>
    <textarea class="d-none _ta_section"></textarea>
    <!-- ============================================================== -->
    <!-- // 텍스트 5  -->
    <!-- ============================================================== -->
    <hr class="m-0">
    <!-- ============================================================== -->
    <!-- 텍스트 6  -->
    <!-- ============================================================== -->
    <div class="_ct_section spacer">
        <div class="container">
            <div class="row justify-content-center mb-4">
                <div class="col-md-7 text-center">
                    <span class="label label-danger label-rounded">텍스트 6</span>
                    <h2 class="title">에이스테마로 멋진 웹사이트 만들기</h2>
                    <h6 class="subtitle">에이스테마는 다양한 게시판 스킨과 최근게시물 스킨을 제공하기 때문에 보다 풍성하고 멋진 웹사이트를 만들 수 있게 해줍니다. 또한, 섹션 템플릿 라이브러리를 제공하여 웹페이지를 쉽고 빠른 시간안에 완성할 수 있습니다. </h6>
			        <?php echo $btn_copycode_str; ?>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-4">
                    <h3>
                        <span class="label label-eng label-rounded label-<?php echo $param_color ?> text-white font-black mr-1">STEP 1</span>
                        섹션 템플릿 라이브러리
                    </h3>
                    <div class="mb-4">
                        에이스테마는 <span class="bg-<?php echo $param_color ?> text-white font-extrabold px-1">다양한 게시판 스킨</span>과 <span class="bg-<?php echo $param_color ?> text-white font-extrabold px-1">최근게시물 스킨</span>을 제공하기 때문에 보다 풍성하고 멋진 웹사이트를 만들 수 있게 해줍니다.
                        또한, <span class="bg-<?php echo $param_color ?> text-white font-extrabold px-1">섹션 템플릿 라이브러리</span>를 제공하여 웹페이지를 쉽고 빠른 시간안에 완성할 수 있습니다. <span class="bg-<?php echo $param_color ?> text-white font-extrabold px-1">커다란 천고</span>에 붙잡아 아름다우냐?
                        구할 대고, 목숨이 피가 갑 하여도 새 <span class="bg-<?php echo $param_color ?> text-white font-extrabold px-1">착목한는 거친 칼</span>이다. 방황하여도, 아름답고 없으면, 주는 때문이다. 뜨거운지라, 가는 하였으며, 오직 공자는 그들은 부패뿐이다.
                        군영과 가장 갑 <span class="bg-<?php echo $param_color ?> text-white font-extrabold px-1">교향악</span>이다. 가는 되는 청춘의 예가 쓸쓸하랴? 청춘 가는 무엇을 <span class="bg-<?php echo $param_color ?> text-white font-extrabold px-1">역사</span>를 되려니와, 사막이다. 같지 구하기 현저하
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <h3>
                        <span class="label label-eng label-rounded label-<?php echo $param_color ?> text-white font-black mr-1">STEP 2</span>
                        다양한 게시판 스킨
                    </h3>
                    <div class="mb-4">
                        뜨고, 소금이라 가는 위하여, 이상을 운다. <span class="bg-<?php echo $param_color ?> text-white font-extrabold px-1">가진 설산에서 공자는 방지하는 바로 것</span>이다. 두손을 뼈 그것은 낙원을 안고, 커다란 운다. 찬미를 그들의 몸이 싶이 인간은 있음으로써 옷을 인간이 사막이다.
                        <span class="bg-<?php echo $param_color ?> text-white font-extrabold px-1">주는 가는 사람은 있을 그리하였는가?</span> 우리의 맺어, 실로 이상 우리 곧 영원히 운다. 든 인생을 사랑의 생생하며, 뿐이다. <span class="bg-<?php echo $param_color ?> text-white font-extrabold px-1">열매를 고행을 되려니와, 청춘의 있음으로써 열락의 이상의 있는가?</span>
                        풀밭에 바로 두손을 칼이다. 하여도 평화스러운 피가 석가는 것이다.
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <h3>
                        <span class="label label-eng label-rounded label-<?php echo $param_color ?> text-white font-black mr-1">STEP 3</span>
                        다양한 최근글 스킨
                    </h3>
                    <div class="mb-4">
                        미묘한 열락의 어디 가지에 <span class="bg-<?php echo $param_color ?> text-white font-extrabold px-1">영락</span>과 <span class="bg-<?php echo $param_color ?> text-white font-extrabold px-1">일월</span>과 우리 주는 군영과 위하여서. 속잎나고, 천고에 되려니와,
                        우리 싹이 가슴이 말이다. <span class="bg-<?php echo $param_color ?> text-white font-extrabold px-1">보내는 동력</span>은 가지에 과실이 뜨거운지라, 투명하되 그들의 이것이다. <span class="bg-<?php echo $param_color ?> text-white font-extrabold px-1">낙원을 바로 쓸쓸한 곧 거친 사막</span>이다.
                        피에 새가 곳으로 우리는 설산에서 끓는다. <span class="bg-<?php echo $param_color ?> text-white font-extrabold px-1">장식하는 그들</span>은 오아이스도 천자만홍이 날카로우나 인간은 부패뿐이다. 없으면 얼마나 청춘을 보라. 영원히 피부가 굳세게 같은 그들의 길을 뿐이다.
                        <span class="bg-<?php echo $param_color ?> text-white font-extrabold px-1">굳세게 그들의 많이 열락의 것</span>이다. 뜨거운지라, 예가 끓는 그들에게 쓸쓸하랴? 봄날의 만천하의 것은 날카로우나 못하다 그들은 천지는 장식하는 봄바람이다.
                    </div>
                </div>
            </div>
        </div>
    </div>
    <textarea class="d-none _ta_section"></textarea>
    <!-- ============================================================== -->
    <!-- // 텍스트 6  -->
    <!-- ============================================================== -->
    <hr class="m-0">
    <!-- ============================================================== -->
    <!-- 텍스트 7  -->
    <!-- ============================================================== -->
    <div class="_ct_section spacer">
        <div class="container">
            <div class="row justify-content-center mb-4">
                <div class="col-md-7 text-center">
                    <span class="label label-success label-rounded">텍스트 7</span>
                    <h2 class="title">에이스테마로 멋진 웹사이트 만들기</h2>
                    <h6 class="subtitle">에이스테마는 다양한 게시판 스킨과 최근게시물 스킨을 제공하기 때문에 보다 풍성하고 멋진 웹사이트를 만들 수 있게 해줍니다. 또한, 섹션 템플릿 라이브러리를 제공하여 웹페이지를 쉽고 빠른 시간안에 완성할 수 있습니다. </h6>
			        <?php echo $btn_copycode_str; ?>
                </div>
            </div>
            <h3>
                <span class="label label-eng label-dark text-white font-black mr-1">STEP 1</span>
                <span class="text-<?php echo $param_color ?>-gradiant">에이스테마는 섹션 템플릿 라이브러리를 지원합니다</span>
            </h3>
            <div class="mb-4">
                에이스테마는 <span class="font-extrabold">다양한 게시판 스킨</span>과 <span class="font-extrabold">최근게시물 스킨</span>을 제공하기 때문에 보다 풍성하고 멋진 웹사이트를 만들 수 있게 해줍니다.
                또한, <span class="font-extrabold">섹션 템플릿 라이브러리</span>를 제공하여 웹페이지를 쉽고 빠른 시간안에 완성할 수 있습니다. <span class="font-extrabold">커다란 천고</span>에 붙잡아 아름다우냐?
                구할 대고, 목숨이 피가 갑 하여도 새 <span class="font-extrabold">착목한는 거친 칼</span>이다. 방황하여도, 아름답고 없으면, 주는 때문이다. 뜨거운지라, 가는 하였으며, 오직 공자는 그들은 부패뿐이다.
                군영과 가장 갑 <span class="font-extrabold">교향악</span>이다. 가는 되는 청춘의 예가 쓸쓸하랴? 청춘 가는 무엇을 <span class="font-extrabold">역사</span>를 되려니와, 사막이다. 같지 구하기 현저하게 그들의 교향악이다.

            </div>
            <h3>
                <span class="label label-eng label-dark text-white font-black mr-1">STEP 2</span>
                <span class="text-<?php echo $param_color ?>-gradiant">웹사이트 구축의 신세계를 경험하세요</span>
            </h3>
            <div class="mb-4">
                뜨고, 소금이라 가는 위하여, 이상을 운다. <span class="font-extrabold">가진 설산에서 공자는 방지하는 바로 것</span>이다. 두손을 뼈 그것은 낙원을 안고, 커다란 운다. 찬미를 그들의 몸이 싶이 인간은 있음으로써 옷을 인간이 사막이다.
                <span class="font-extrabold">주는 가는 사람은 있을 그리하였는가?</span> 우리의 맺어, 실로 이상 우리 곧 영원히 운다. 든 인생을 사랑의 생생하며, 뿐이다. <span class="font-extrabold">열매를 고행을 되려니와, 청춘의 있음으로써 열락의 이상의 있는가?</span>
                풀밭에 바로 두손을 칼이다. 하여도 평화스러운 피가 석가는 것이다.
            </div>
            <h3>
                <span class="label label-eng label-dark text-white font-black mr-1">STEP 3</span>
                <span class="text-<?php echo $param_color ?>-gradiant">어떠한 스타일의 홈페이지도 쉽고 빠르게 구축할 수 있습니다</span>
            </h3>
            <div class="mb-4">
                미묘한 열락의 어디 가지에 <span class="font-extrabold">영락</span>과 <span class="font-extrabold">일월</span>과 우리 주는 군영과 위하여서. 속잎나고, 천고에 되려니와,
                우리 싹이 가슴이 말이다. <span class="font-extrabold">보내는 동력</span>은 가지에 과실이 뜨거운지라, 투명하되 그들의 이것이다. <span class="font-extrabold">낙원을 바로 쓸쓸한 곧 거친 사막</span>이다.
                피에 새가 곳으로 우리는 설산에서 끓는다. <span class="font-extrabold">장식하는 그들</span>은 오아이스도 천자만홍이 날카로우나 인간은 부패뿐이다. 없으면 얼마나 청춘을 보라. 영원히 피부가 굳세게 같은 그들의 길을 뿐이다.
                <span class="font-extrabold">굳세게 그들의 많이 열락의 것</span>이다. 뜨거운지라, 예가 끓는 그들에게 쓸쓸하랴? 봄날의 만천하의 것은 날카로우나 못하다 그들은 천지는 장식하는 봄바람이다.
            </div>
        </div>
    </div>
    <textarea class="d-none _ta_section"></textarea>
    <!-- ============================================================== -->
    <!-- // 텍스트 7  -->
    <!-- ============================================================== -->
    <hr class="m-0">
    <!-- ============================================================== -->
    <!-- 텍스트 8  -->
    <!-- ============================================================== -->
    <div class="_ct_section spacer">
        <div class="container">
            <div class="row justify-content-center mb-4">
                <div class="col-md-7 text-center">
                    <span class="label label-primary label-rounded">텍스트 8</span>
                    <h2 class="title">에이스테마로 멋진 웹사이트 만들기</h2>
                    <h6 class="subtitle">에이스테마는 다양한 게시판 스킨과 최근게시물 스킨을 제공하기 때문에 보다 풍성하고 멋진 웹사이트를 만들 수 있게 해줍니다. 또한, 섹션 템플릿 라이브러리를 제공하여 웹페이지를 쉽고 빠른 시간안에 완성할 수 있습니다. </h6>
			        <?php echo $btn_copycode_str; ?>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-6">
                    <h3>
                        <span class="label label-eng label-dark text-white font-black mr-1">STEP 1</span>
                        <span class="text-<?php echo $param_color ?>-gradiant">섹션 템플릿 라이브러리</span>
                    </h3>
                    <div class="mb-4">
                        에이스테마는 <span class="font-extrabold">다양한 게시판 스킨</span>과 <span class="font-extrabold">최근게시물 스킨</span>을 제공하기 때문에 보다 풍성하고 멋진 웹사이트를 만들 수 있게 해줍니다.
                        또한, <span class="font-extrabold">섹션 템플릿 라이브러리</span>를 제공하여 웹페이지를 쉽고 빠른 시간안에 완성할 수 있습니다. <span class="font-extrabold">커다란 천고</span>에 붙잡아 아름다우냐?
                        구할 대고, 목숨이 피가 갑 하여도 새 <span class="font-extrabold">착목한는 거친 칼</span>이다. 방황하여도, 아름답고 없으면, 주는 때문이다. 뜨거운지라, 가는 하였으며, 오직 공자는 그들은 부패뿐이다.
                        군영과 가장 갑 <span class="font-extrabold">교향악</span>이다. 가는 되는 청춘의 예가 쓸쓸하랴? 청춘 가는 무엇을 <span class="font-extrabold">역사</span>를 되려니와, 사막이다. 같지 구하기 현저하
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <h3>
                        <span class="label label-eng label-dark text-white font-black mr-1">STEP 2</span>
                        <span class="text-<?php echo $param_color ?>-gradiant">다양한 게시판 스킨</span>
                    </h3>
                    <div class="mb-4">
                        뜨고, 소금이라 가는 위하여, 이상을 운다. <span class="font-extrabold">가진 설산에서 공자는 방지하는 바로 것</span>이다. 두손을 뼈 그것은 낙원을 안고, 커다란 운다. 찬미를 그들의 몸이 싶이 인간은 있음으로써 옷을 인간이 사막이다.
                        <span class="font-extrabold">주는 가는 사람은 있을 그리하였는가?</span> 우리의 맺어, 실로 이상 우리 곧 영원히 운다. 든 인생을 사랑의 생생하며, 뿐이다. <span class="font-extrabold">열매를 고행을 되려니와, 청춘의 있음으로써 열락의 이상의 있는가?</span>
                        풀밭에 바로 두손을 칼이다. 하여도 평화스러운 피가 석가는 것이다.
                    </div>
                </div>
            </div>
        </div>
    </div>
    <textarea class="d-none _ta_section"></textarea>
    <!-- ============================================================== -->
    <!-- // 텍스트 8  -->
    <!-- ============================================================== -->
    <hr class="m-0">
    <!-- ============================================================== -->
    <!-- 텍스트 9  -->
    <!-- ============================================================== -->
    <div class="_ct_section spacer">
        <div class="container">
            <div class="row justify-content-center mb-4">
                <div class="col-md-7 text-center">
                    <span class="label label-danger label-rounded">텍스트 9</span>
                    <h2 class="title">에이스테마로 멋진 웹사이트 만들기</h2>
                    <h6 class="subtitle">에이스테마는 다양한 게시판 스킨과 최근게시물 스킨을 제공하기 때문에 보다 풍성하고 멋진 웹사이트를 만들 수 있게 해줍니다. 또한, 섹션 템플릿 라이브러리를 제공하여 웹페이지를 쉽고 빠른 시간안에 완성할 수 있습니다. </h6>
			        <?php echo $btn_copycode_str; ?>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-4">
                    <h3>
                        <span class="label label-eng label-dark text-white font-black mr-1">STEP 1</span>
                        <span class="text-<?php echo $param_color ?>-gradiant">섹션 템플릿 라이브러리</span>
                    </h3>
                    <div class="mb-4">
                        에이스테마는 <span class="font-extrabold">다양한 게시판 스킨</span>과 <span class="font-extrabold">최근게시물 스킨</span>을 제공하기 때문에 보다 풍성하고 멋진 웹사이트를 만들 수 있게 해줍니다.
                        또한, <span class="font-extrabold">섹션 템플릿 라이브러리</span>를 제공하여 웹페이지를 쉽고 빠른 시간안에 완성할 수 있습니다. <span class="font-extrabold">커다란 천고</span>에 붙잡아 아름다우냐?
                        구할 대고, 목숨이 피가 갑 하여도 새 <span class="font-extrabold">착목한는 거친 칼</span>이다. 방황하여도, 아름답고 없으면, 주는 때문이다. 뜨거운지라, 가는 하였으며, 오직 공자는 그들은 부패뿐이다.
                        군영과 가장 갑 <span class="font-extrabold">교향악</span>이다. 가는 되는 청춘의 예가 쓸쓸하랴? 청춘 가는 무엇을 <span class="font-extrabold">역사</span>를 되려니와, 사막이다. 같지 구하기 현저하
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <h3>
                        <span class="label label-eng label-dark text-white font-black mr-1">STEP 2</span>
                        <span class="text-<?php echo $param_color ?>-gradiant">다양한 게시판 스킨</span>
                    </h3>
                    <div class="mb-4">
                        뜨고, 소금이라 가는 위하여, 이상을 운다. <span class="font-extrabold">가진 설산에서 공자는 방지하는 바로 것</span>이다. 두손을 뼈 그것은 낙원을 안고, 커다란 운다. 찬미를 그들의 몸이 싶이 인간은 있음으로써 옷을 인간이 사막이다.
                        <span class="font-extrabold">주는 가는 사람은 있을 그리하였는가?</span> 우리의 맺어, 실로 이상 우리 곧 영원히 운다. 든 인생을 사랑의 생생하며, 뿐이다. <span class="font-extrabold">열매를 고행을 되려니와, 청춘의 있음으로써 열락의 이상의 있는가?</span>
                        풀밭에 바로 두손을 칼이다. 하여도 평화스러운 피가 석가는 것이다.
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <h3>
                        <span class="label label-eng label-dark text-white font-black mr-1">STEP 3</span>
                        <span class="text-<?php echo $param_color ?>-gradiant">다양한 최근글 스킨</span>
                    </h3>
                    <div class="mb-4">
                        미묘한 열락의 어디 가지에 <span class="font-extrabold">영락</span>과 <span class="font-extrabold">일월</span>과 우리 주는 군영과 위하여서. 속잎나고, 천고에 되려니와,
                        우리 싹이 가슴이 말이다. <span class="font-extrabold">보내는 동력</span>은 가지에 과실이 뜨거운지라, 투명하되 그들의 이것이다. <span class="font-extrabold">낙원을 바로 쓸쓸한 곧 거친 사막</span>이다.
                        피에 새가 곳으로 우리는 설산에서 끓는다. <span class="font-extrabold">장식하는 그들</span>은 오아이스도 천자만홍이 날카로우나 인간은 부패뿐이다. 없으면 얼마나 청춘을 보라. 영원히 피부가 굳세게 같은 그들의 길을 뿐이다.
                        <span class="font-extrabold">굳세게 그들의 많이 열락의 것</span>이다. 뜨거운지라, 예가 끓는 그들에게 쓸쓸하랴? 봄날의 만천하의 것은 날카로우나 못하다 그들은 천지는 장식하는 봄바람이다.
                    </div>
                </div>
            </div>
        </div>
    </div>
    <textarea class="d-none _ta_section"></textarea>
    <!-- ============================================================== -->
    <!-- // 텍스트 9  -->
    <!-- ============================================================== -->
    <hr class="m-0">
    <!-- ============================================================== -->
    <!-- 텍스트 10  -->
    <!-- ============================================================== -->
    <div class="_ct_section spacer">
        <div class="container">
            <div class="row justify-content-center mb-4">
                <div class="col-md-7 text-center">
                    <span class="label label-success label-rounded">텍스트 10</span>
                    <h2 class="title">에이스테마로 멋진 웹사이트 만들기</h2>
                    <h6 class="subtitle">에이스테마는 다양한 게시판 스킨과 최근게시물 스킨을 제공하기 때문에 보다 풍성하고 멋진 웹사이트를 만들 수 있게 해줍니다. 또한, 섹션 템플릿 라이브러리를 제공하여 웹페이지를 쉽고 빠른 시간안에 완성할 수 있습니다. </h6>
			        <?php echo $btn_copycode_str; ?>
                </div>
            </div>
            <h3>
                <span class="label label-eng label-<?php echo $param_color ?> text-white font-black mr-1">STEP 1</span>
                <span class="u-<?php echo $param_color ?>">에이스테마는 섹션 템플릿 라이브러리를 지원합니다</span>
            </h3>
            <div class="mb-4">
                에이스테마는 <span class="font-extrabold">다양한 게시판 스킨</span>과 <span class="font-extrabold">최근게시물 스킨</span>을 제공하기 때문에 보다 풍성하고 멋진 웹사이트를 만들 수 있게 해줍니다.
                또한, <span class="font-extrabold">섹션 템플릿 라이브러리</span>를 제공하여 웹페이지를 쉽고 빠른 시간안에 완성할 수 있습니다. <span class="font-extrabold">커다란 천고</span>에 붙잡아 아름다우냐?
                구할 대고, 목숨이 피가 갑 하여도 새 <span class="font-extrabold">착목한는 거친 칼</span>이다. 방황하여도, 아름답고 없으면, 주는 때문이다. 뜨거운지라, 가는 하였으며, 오직 공자는 그들은 부패뿐이다.
                군영과 가장 갑 <span class="font-extrabold">교향악</span>이다. 가는 되는 청춘의 예가 쓸쓸하랴? 청춘 가는 무엇을 <span class="font-extrabold">역사</span>를 되려니와, 사막이다. 같지 구하기 현저하게 그들의 교향악이다.

            </div>
            <h3>
                <span class="label label-eng label-<?php echo $param_color ?> text-white font-black mr-1">STEP 2</span>
                <span class="u-<?php echo $param_color ?>">웹사이트 구축의 신세계를 경험하세요</span>
            </h3>
            <div class="mb-4">
                뜨고, 소금이라 가는 위하여, 이상을 운다. <span class="font-extrabold">가진 설산에서 공자는 방지하는 바로 것</span>이다. 두손을 뼈 그것은 낙원을 안고, 커다란 운다. 찬미를 그들의 몸이 싶이 인간은 있음으로써 옷을 인간이 사막이다.
                <span class="font-extrabold">주는 가는 사람은 있을 그리하였는가?</span> 우리의 맺어, 실로 이상 우리 곧 영원히 운다. 든 인생을 사랑의 생생하며, 뿐이다. <span class="font-extrabold">열매를 고행을 되려니와, 청춘의 있음으로써 열락의 이상의 있는가?</span>
                풀밭에 바로 두손을 칼이다. 하여도 평화스러운 피가 석가는 것이다.
            </div>
            <h3>
                <span class="label label-eng label-<?php echo $param_color ?> text-white font-black mr-1">STEP 3</span>
                <span class="u-<?php echo $param_color ?>">어떠한 스타일의 홈페이지도 쉽고 빠르게 구축할 수 있습니다</span>
            </h3>
            <div class="mb-4">
                미묘한 열락의 어디 가지에 <span class="font-extrabold">영락</span>과 <span class="font-extrabold">일월</span>과 우리 주는 군영과 위하여서. 속잎나고, 천고에 되려니와,
                우리 싹이 가슴이 말이다. <span class="font-extrabold">보내는 동력</span>은 가지에 과실이 뜨거운지라, 투명하되 그들의 이것이다. <span class="font-extrabold">낙원을 바로 쓸쓸한 곧 거친 사막</span>이다.
                피에 새가 곳으로 우리는 설산에서 끓는다. <span class="font-extrabold">장식하는 그들</span>은 오아이스도 천자만홍이 날카로우나 인간은 부패뿐이다. 없으면 얼마나 청춘을 보라. 영원히 피부가 굳세게 같은 그들의 길을 뿐이다.
                <span class="font-extrabold">굳세게 그들의 많이 열락의 것</span>이다. 뜨거운지라, 예가 끓는 그들에게 쓸쓸하랴? 봄날의 만천하의 것은 날카로우나 못하다 그들은 천지는 장식하는 봄바람이다.
            </div>
        </div>
    </div>
    <textarea class="d-none _ta_section"></textarea>
    <!-- ============================================================== -->
    <!-- // 텍스트 10  -->
    <!-- ============================================================== -->
    <hr class="m-0">
    <!-- ============================================================== -->
    <!-- 텍스트 11  -->
    <!-- ============================================================== -->
    <div class="_ct_section spacer">
        <div class="container">
            <div class="row justify-content-center mb-4">
                <div class="col-md-7 text-center">
                    <span class="label label-primary label-rounded">텍스트 11</span>
                    <h2 class="title">에이스테마로 멋진 웹사이트 만들기</h2>
                    <h6 class="subtitle">에이스테마는 다양한 게시판 스킨과 최근게시물 스킨을 제공하기 때문에 보다 풍성하고 멋진 웹사이트를 만들 수 있게 해줍니다. 또한, 섹션 템플릿 라이브러리를 제공하여 웹페이지를 쉽고 빠른 시간안에 완성할 수 있습니다. </h6>
			        <?php echo $btn_copycode_str; ?>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-6">
                    <h3>
                        <span class="label label-eng label-<?php echo $param_color ?> text-white font-black mr-1">STEP 1</span>
                        <span class="u-<?php echo $param_color ?>">섹션 템플릿 라이브러리</span>
                    </h3>
                    <div class="mb-4">
                        에이스테마는 <span class="font-extrabold">다양한 게시판 스킨</span>과 <span class="font-extrabold">최근게시물 스킨</span>을 제공하기 때문에 보다 풍성하고 멋진 웹사이트를 만들 수 있게 해줍니다.
                        또한, <span class="font-extrabold">섹션 템플릿 라이브러리</span>를 제공하여 웹페이지를 쉽고 빠른 시간안에 완성할 수 있습니다. <span class="font-extrabold">커다란 천고</span>에 붙잡아 아름다우냐?
                        구할 대고, 목숨이 피가 갑 하여도 새 <span class="font-extrabold">착목한는 거친 칼</span>이다. 방황하여도, 아름답고 없으면, 주는 때문이다. 뜨거운지라, 가는 하였으며, 오직 공자는 그들은 부패뿐이다.
                        군영과 가장 갑 <span class="font-extrabold">교향악</span>이다. 가는 되는 청춘의 예가 쓸쓸하랴? 청춘 가는 무엇을 <span class="font-extrabold">역사</span>를 되려니와, 사막이다. 같지 구하기 현저하
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <h3>
                        <span class="label label-eng label-<?php echo $param_color ?> text-white font-black mr-1">STEP 2</span>
                        <span class="u-<?php echo $param_color ?>">다양한 게시판 스킨</span>
                    </h3>
                    <div class="mb-4">
                        뜨고, 소금이라 가는 위하여, 이상을 운다. <span class="font-extrabold">가진 설산에서 공자는 방지하는 바로 것</span>이다. 두손을 뼈 그것은 낙원을 안고, 커다란 운다. 찬미를 그들의 몸이 싶이 인간은 있음으로써 옷을 인간이 사막이다.
                        <span class="font-extrabold">주는 가는 사람은 있을 그리하였는가?</span> 우리의 맺어, 실로 이상 우리 곧 영원히 운다. 든 인생을 사랑의 생생하며, 뿐이다. <span class="font-extrabold">열매를 고행을 되려니와, 청춘의 있음으로써 열락의 이상의 있는가?</span>
                        풀밭에 바로 두손을 칼이다. 하여도 평화스러운 피가 석가는 것이다.
                    </div>
                </div>
            </div>
        </div>
    </div>
    <textarea class="d-none _ta_section"></textarea>
    <!-- ============================================================== -->
    <!-- // 텍스트 11  -->
    <!-- ============================================================== -->
    <hr class="m-0">
    <!-- ============================================================== -->
    <!-- 텍스트 12  -->
    <!-- ============================================================== -->
    <div class="_ct_section spacer">
        <div class="container">
            <div class="row justify-content-center mb-4">
                <div class="col-md-7 text-center">
                    <span class="label label-danger label-rounded">텍스트 12</span>
                    <h2 class="title">에이스테마로 멋진 웹사이트 만들기</h2>
                    <h6 class="subtitle">에이스테마는 다양한 게시판 스킨과 최근게시물 스킨을 제공하기 때문에 보다 풍성하고 멋진 웹사이트를 만들 수 있게 해줍니다. 또한, 섹션 템플릿 라이브러리를 제공하여 웹페이지를 쉽고 빠른 시간안에 완성할 수 있습니다. </h6>
			        <?php echo $btn_copycode_str; ?>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-4">
                    <h3>
                        <span class="label label-eng label-<?php echo $param_color ?> text-white font-black mr-1">STEP 1</span>
                        <span class="u-<?php echo $param_color ?>">섹션 템플릿 라이브러리</span>
                    </h3>
                    <div class="mb-4">
                        에이스테마는 <span class="font-extrabold">다양한 게시판 스킨</span>과 <span class="font-extrabold">최근게시물 스킨</span>을 제공하기 때문에 보다 풍성하고 멋진 웹사이트를 만들 수 있게 해줍니다.
                        또한, <span class="font-extrabold">섹션 템플릿 라이브러리</span>를 제공하여 웹페이지를 쉽고 빠른 시간안에 완성할 수 있습니다. <span class="font-extrabold">커다란 천고</span>에 붙잡아 아름다우냐?
                        구할 대고, 목숨이 피가 갑 하여도 새 <span class="font-extrabold">착목한는 거친 칼</span>이다. 방황하여도, 아름답고 없으면, 주는 때문이다. 뜨거운지라, 가는 하였으며, 오직 공자는 그들은 부패뿐이다.
                        군영과 가장 갑 <span class="font-extrabold">교향악</span>이다. 가는 되는 청춘의 예가 쓸쓸하랴? 청춘 가는 무엇을 <span class="font-extrabold">역사</span>를 되려니와, 사막이다. 같지 구하기 현저하
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <h3>
                        <span class="label label-eng label-<?php echo $param_color ?> text-white font-black mr-1">STEP 2</span>
                        <span class="u-<?php echo $param_color ?>">다양한 게시판 스킨</span>
                    </h3>
                    <div class="mb-4">
                        뜨고, 소금이라 가는 위하여, 이상을 운다. <span class="font-extrabold">가진 설산에서 공자는 방지하는 바로 것</span>이다. 두손을 뼈 그것은 낙원을 안고, 커다란 운다. 찬미를 그들의 몸이 싶이 인간은 있음으로써 옷을 인간이 사막이다.
                        <span class="font-extrabold">주는 가는 사람은 있을 그리하였는가?</span> 우리의 맺어, 실로 이상 우리 곧 영원히 운다. 든 인생을 사랑의 생생하며, 뿐이다. <span class="font-extrabold">열매를 고행을 되려니와, 청춘의 있음으로써 열락의 이상의 있는가?</span>
                        풀밭에 바로 두손을 칼이다. 하여도 평화스러운 피가 석가는 것이다.
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <h3>
                        <span class="label label-eng label-<?php echo $param_color ?> text-white font-black mr-1">STEP 3</span>
                        <span class="u-<?php echo $param_color ?>">다양한 최근글 스킨</span>
                    </h3>
                    <div class="mb-4">
                        미묘한 열락의 어디 가지에 <span class="font-extrabold">영락</span>과 <span class="font-extrabold">일월</span>과 우리 주는 군영과 위하여서. 속잎나고, 천고에 되려니와,
                        우리 싹이 가슴이 말이다. <span class="font-extrabold">보내는 동력</span>은 가지에 과실이 뜨거운지라, 투명하되 그들의 이것이다. <span class="font-extrabold">낙원을 바로 쓸쓸한 곧 거친 사막</span>이다.
                        피에 새가 곳으로 우리는 설산에서 끓는다. <span class="font-extrabold">장식하는 그들</span>은 오아이스도 천자만홍이 날카로우나 인간은 부패뿐이다. 없으면 얼마나 청춘을 보라. 영원히 피부가 굳세게 같은 그들의 길을 뿐이다.
                        <span class="font-extrabold">굳세게 그들의 많이 열락의 것</span>이다. 뜨거운지라, 예가 끓는 그들에게 쓸쓸하랴? 봄날의 만천하의 것은 날카로우나 못하다 그들은 천지는 장식하는 봄바람이다.
                    </div>
                </div>
            </div>
        </div>
    </div>
    <textarea class="d-none _ta_section"></textarea>
    <!-- ============================================================== -->
    <!-- // 텍스트 12  -->
    <!-- ============================================================== -->
    <hr class="m-0">
    <!-- ============================================================== -->
    <!-- 텍스트 13  -->
    <!-- ============================================================== -->
    <div class="_ct_section spacer">
        <div class="container">
            <div class="row justify-content-center mb-4">
                <div class="col-md-7 text-center">
                    <span class="label label-success label-rounded">텍스트 13</span>
                    <h2 class="title">에이스테마로 멋진 웹사이트 만들기</h2>
                    <h6 class="subtitle">에이스테마는 다양한 게시판 스킨과 최근게시물 스킨을 제공하기 때문에 보다 풍성하고 멋진 웹사이트를 만들 수 있게 해줍니다. 또한, 섹션 템플릿 라이브러리를 제공하여 웹페이지를 쉽고 빠른 시간안에 완성할 수 있습니다. </h6>
			        <?php echo $btn_copycode_str; ?>
                </div>
            </div>
            <h3><i class="fas fa-square text-<?php echo $param_color ?> mr-2"></i>에이스테마는 섹션 템플릿 라이브러리를 지원합니다</h3>
            <div class="mb-4">
                에이스테마는 <span class="text-<?php echo $param_color ?> font-extrabold">다양한 게시판 스킨</span>과 <span class="text-<?php echo $param_color ?> font-extrabold">최근게시물 스킨</span>을 제공하기 때문에 보다 풍성하고 멋진 웹사이트를 만들 수 있게 해줍니다.
                또한, <span class="text-<?php echo $param_color ?> font-extrabold">섹션 템플릿 라이브러리</span>를 제공하여 웹페이지를 쉽고 빠른 시간안에 완성할 수 있습니다. <span class="text-<?php echo $param_color ?> font-extrabold">커다란 천고</span>에 붙잡아 아름다우냐?
                구할 대고, 목숨이 피가 갑 하여도 새 <span class="text-<?php echo $param_color ?> font-extrabold">착목한는 거친 칼</span>이다. 방황하여도, 아름답고 없으면, 주는 때문이다. 뜨거운지라, 가는 하였으며, 오직 공자는 그들은 부패뿐이다.
                군영과 가장 갑 <span class="text-<?php echo $param_color ?> font-extrabold">교향악</span>이다. 가는 되는 청춘의 예가 쓸쓸하랴? 청춘 가는 무엇을 <span class="text-<?php echo $param_color ?> font-extrabold">역사</span>를 되려니와, 사막이다. 같지 구하기 현저하게 그들의 교향악이다.
            </div>
            <h4 class="text-indent-1"><i class="far fa-square text-<?php echo $param_color ?> mr-2"></i>하위 항목 들여쓰기 1레벨</h4>
            <div class="mb-4 text-indent-1">
                에이스테마는 <span class="text-<?php echo $param_color ?> font-extrabold">다양한 게시판 스킨</span>과 <span class="text-<?php echo $param_color ?> font-extrabold">최근게시물 스킨</span>을 제공하기 때문에 보다 풍성하고 멋진 웹사이트를 만들 수 있게 해줍니다.
                또한, <span class="text-<?php echo $param_color ?> font-extrabold">섹션 템플릿 라이브러리</span>를 제공하여 웹페이지를 쉽고 빠른 시간안에 완성할 수 있습니다. <span class="text-<?php echo $param_color ?> font-extrabold">커다란 천고</span>에 붙잡아 아름다우냐?
                구할 대고, 목숨이 피가 갑 하여도 새 <span class="text-<?php echo $param_color ?> font-extrabold">착목한는 거친 칼</span>이다. 방황하여도, 아름답고 없으면, 주는 때문이다. 뜨거운지라, 가는 하였으며, 오직 공자는 그들은 부패뿐이다.
                군영과 가장 갑 <span class="text-<?php echo $param_color ?> font-extrabold">교향악</span>이다. 가는 되는 청춘의 예가 쓸쓸하랴? 청춘 가는 무엇을 <span class="text-<?php echo $param_color ?> font-extrabold">역사</span>를 되려니와, 사막이다. 같지 구하기 현저하게 그들의 교향악이다.
            </div>
            <h5 class="text-indent-2"><i class="fas fa-circle text-<?php echo $param_color ?> mr-2"></i>하위 항목 들여쓰기 2레벨</h5>
            <div class="mb-4 text-indent-2">
                에이스테마는 <span class="text-<?php echo $param_color ?> font-extrabold">다양한 게시판 스킨</span>과 <span class="text-<?php echo $param_color ?> font-extrabold">최근게시물 스킨</span>을 제공하기 때문에 보다 풍성하고 멋진 웹사이트를 만들 수 있게 해줍니다.
                또한, <span class="text-<?php echo $param_color ?> font-extrabold">섹션 템플릿 라이브러리</span>를 제공하여 웹페이지를 쉽고 빠른 시간안에 완성할 수 있습니다. <span class="text-<?php echo $param_color ?> font-extrabold">커다란 천고</span>에 붙잡아 아름다우냐?
                구할 대고, 목숨이 피가 갑 하여도 새 <span class="text-<?php echo $param_color ?> font-extrabold">착목한는 거친 칼</span>이다. 방황하여도, 아름답고 없으면, 주는 때문이다. 뜨거운지라, 가는 하였으며, 오직 공자는 그들은 부패뿐이다.
                군영과 가장 갑 <span class="text-<?php echo $param_color ?> font-extrabold">교향악</span>이다. 가는 되는 청춘의 예가 쓸쓸하랴? 청춘 가는 무엇을 <span class="text-<?php echo $param_color ?> font-extrabold">역사</span>를 되려니와, 사막이다. 같지 구하기 현저하게 그들의 교향악이다.
            </div>
            <h6 class="text-indent-3"><i class="far fa-circle text-<?php echo $param_color ?> mr-2"></i>하위 항목 들여쓰기 3레벨</h6>
            <div class="mb-4 text-indent-3">
                에이스테마는 <span class="text-<?php echo $param_color ?> font-extrabold">다양한 게시판 스킨</span>과 <span class="text-<?php echo $param_color ?> font-extrabold">최근게시물 스킨</span>을 제공하기 때문에 보다 풍성하고 멋진 웹사이트를 만들 수 있게 해줍니다.
                또한, <span class="text-<?php echo $param_color ?> font-extrabold">섹션 템플릿 라이브러리</span>를 제공하여 웹페이지를 쉽고 빠른 시간안에 완성할 수 있습니다. <span class="text-<?php echo $param_color ?> font-extrabold">커다란 천고</span>에 붙잡아 아름다우냐?
                구할 대고, 목숨이 피가 갑 하여도 새 <span class="text-<?php echo $param_color ?> font-extrabold">착목한는 거친 칼</span>이다. 방황하여도, 아름답고 없으면, 주는 때문이다. 뜨거운지라, 가는 하였으며, 오직 공자는 그들은 부패뿐이다.
                군영과 가장 갑 <span class="text-<?php echo $param_color ?> font-extrabold">교향악</span>이다. 가는 되는 청춘의 예가 쓸쓸하랴? 청춘 가는 무엇을 <span class="text-<?php echo $param_color ?> font-extrabold">역사</span>를 되려니와, 사막이다. 같지 구하기 현저하게 그들의 교향악이다.
            </div>
        </div>
    </div>
    <textarea class="d-none _ta_section"></textarea>
    <!-- ============================================================== -->
    <!-- // 텍스트 13  -->
    <!-- ============================================================== -->
    <hr class="m-0">
    <!-- ============================================================== -->
    <!-- 텍스트 14  -->
    <!-- ============================================================== -->
    <div class="_ct_section spacer">
        <div class="container">
            <div class="row justify-content-center mb-4">
                <div class="col-md-7 text-center">
                    <span class="label label-primary label-rounded">텍스트 14</span>
                    <h2 class="title">에이스테마로 멋진 웹사이트 만들기</h2>
                    <h6 class="subtitle">에이스테마는 다양한 게시판 스킨과 최근게시물 스킨을 제공하기 때문에 보다 풍성하고 멋진 웹사이트를 만들 수 있게 해줍니다. 또한, 섹션 템플릿 라이브러리를 제공하여 웹페이지를 쉽고 빠른 시간안에 완성할 수 있습니다. </h6>
			        <?php echo $btn_copycode_str; ?>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-2 text-center">
                    <div class="mb-4">
                        <i class="fas fa-bicycle fa-5x text-<?php echo $param_color ?>"></i>
                    </div>
                </div>
                <div class="col-12 col-md-10">
                    <h3>
                        <span class="label label-<?php echo $param_color ?> text-white font-black mr-1">싸이클</span>
                        섹션 템플릿 라이브러리
                    </h3>
                    <div class="mb-4">
                        에이스테마는 <span class="text-<?php echo $param_color ?> font-extrabold">다양한 게시판 스킨</span>과 <span class="text-<?php echo $param_color ?> font-extrabold">최근게시물 스킨</span>을 제공하기 때문에 보다 풍성하고 멋진 웹사이트를 만들 수 있게 해줍니다.
                        또한, <span class="text-<?php echo $param_color ?> font-extrabold">섹션 템플릿 라이브러리</span>를 제공하여 웹페이지를 쉽고 빠른 시간안에 완성할 수 있습니다. <span class="text-<?php echo $param_color ?> font-extrabold">커다란 천고</span>에 붙잡아 아름다우냐?
                        구할 대고, 목숨이 피가 갑 하여도 새 <span class="text-<?php echo $param_color ?> font-extrabold">착목한는 거친 칼</span>이다. 방황하여도, 아름답고 없으면, 주는 때문이다. 뜨거운지라, 가는 하였으며, 오직 공자는 그들은 부패뿐이다.
                        군영과 가장 갑 <span class="text-<?php echo $param_color ?> font-extrabold">교향악</span>이다. 가는 되는 청춘의 예가 쓸쓸하랴? 청춘 가는 무엇을 <span class="text-<?php echo $param_color ?> font-extrabold">역사</span>를 되려니와, 사막이다. 같지 구하기 현저하게 그들의 교향악이다.
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-2 text-center">
                    <div class="mb-4">
                        <i class="fas fa-skiing-nordic fa-5x text-<?php echo $param_color ?>"></i>
                    </div>
                </div>
                <div class="col-12 col-md-10">
                    <h3>
                        <span class="label label-<?php echo $param_color ?> text-white font-black mr-1">스키</span>
                        다양한 게시판 스킨
                    </h3>
                    <div class="mb-4">
                        미묘한 열락의 어디 가지에 <span class="text-<?php echo $param_color ?> font-extrabold">영락</span>과 <span class="text-<?php echo $param_color ?> font-extrabold">일월</span>과 우리 주는 군영과 위하여서. 속잎나고, 천고에 되려니와,
                        우리 싹이 가슴이 말이다. <span class="text-<?php echo $param_color ?> font-extrabold">보내는 동력</span>은 가지에 과실이 뜨거운지라, 투명하되 그들의 이것이다. <span class="text-<?php echo $param_color ?> font-extrabold">낙원을 바로 쓸쓸한 곧 거친 사막</span>이다.
                        피에 새가 곳으로 우리는 설산에서 끓는다. <span class="text-<?php echo $param_color ?> font-extrabold">장식하는 그들</span>은 오아이스도 천자만홍이 날카로우나 인간은 부패뿐이다. 없으면 얼마나 청춘을 보라. 영원히 피부가 굳세게 같은 그들의 길을 뿐이다.
                        <span class="text-<?php echo $param_color ?> font-extrabold">굳세게 그들의 많이 열락의 것</span>이다. 뜨거운지라, 예가 끓는 그들에게 쓸쓸하랴? 봄날의 만천하의 것은 날카로우나 못하다 그들은 천지는 장식하는 봄바람이다.
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-2 text-center">
                    <div class="mb-4">
                        <i class="fas fa-swimmer fa-5x text-<?php echo $param_color ?>"></i>
                    </div>
                </div>
                <div class="col-12 col-md-10">
                    <h3>
                        <span class="label label-<?php echo $param_color ?> text-white font-black mr-1">수영</span>
                        다양한 최근글 스킨
                    </h3>
                    <div class="mb-4">
                        에이스테마는 <span class="text-<?php echo $param_color ?> font-extrabold">다양한 게시판 스킨</span>과 <span class="text-<?php echo $param_color ?> font-extrabold">최근게시물 스킨</span>을 제공하기 때문에 보다 풍성하고 멋진 웹사이트를 만들 수 있게 해줍니다.
                        또한, <span class="text-<?php echo $param_color ?> font-extrabold">섹션 템플릿 라이브러리</span>를 제공하여 웹페이지를 쉽고 빠른 시간안에 완성할 수 있습니다. <span class="text-<?php echo $param_color ?> font-extrabold">커다란 천고</span>에 붙잡아 아름다우냐?
                        구할 대고, 목숨이 피가 갑 하여도 새 <span class="text-<?php echo $param_color ?> font-extrabold">착목한는 거친 칼</span>이다. 방황하여도, 아름답고 없으면, 주는 때문이다. 뜨거운지라, 가는 하였으며, 오직 공자는 그들은 부패뿐이다.
                        군영과 가장 갑 <span class="text-<?php echo $param_color ?> font-extrabold">교향악</span>이다. 가는 되는 청춘의 예가 쓸쓸하랴? 청춘 가는 무엇을 <span class="text-<?php echo $param_color ?> font-extrabold">역사</span>를 되려니와, 사막이다. 같지 구하기 현저하게 그들의 교향악이다.
                    </div>
                </div>
            </div>
        </div>
    </div>
    <textarea class="d-none _ta_section"></textarea>
    <!-- ============================================================== -->
    <!-- // 텍스트 14  -->
    <!-- ============================================================== -->
    <hr class="m-0">
    <!-- ============================================================== -->
    <!-- 텍스트 15  -->
    <!-- ============================================================== -->
    <div class="_ct_section spacer">
        <div class="container">
            <div class="row justify-content-center mb-4">
                <div class="col-md-7 text-center">
                    <span class="label label-success label-rounded">텍스트 15</span>
                    <h2 class="title">에이스테마로 멋진 웹사이트 만들기</h2>
                    <h6 class="subtitle">에이스테마는 다양한 게시판 스킨과 최근게시물 스킨을 제공하기 때문에 보다 풍성하고 멋진 웹사이트를 만들 수 있게 해줍니다. 또한, 섹션 템플릿 라이브러리를 제공하여 웹페이지를 쉽고 빠른 시간안에 완성할 수 있습니다. </h6>
					<?php echo $btn_copycode_str; ?>
                </div>
            </div>
            <h3>
                에이스테마는 섹션 템플릿 라이브러리를 지원합니다
            </h3>
            <div class="mb-4 parabar-l parabar-l-<?php echo $param_color ?>">
                에이스테마는 <span class="text-<?php echo $param_color ?> font-extrabold">다양한 게시판 스킨</span>과 <span class="text-<?php echo $param_color ?> font-extrabold">최근게시물 스킨</span>을 제공하기 때문에 보다 풍성하고 멋진 웹사이트를 만들 수 있게 해줍니다.
                또한, <span class="text-<?php echo $param_color ?> font-extrabold">섹션 템플릿 라이브러리</span>를 제공하여 웹페이지를 쉽고 빠른 시간안에 완성할 수 있습니다. <span class="text-<?php echo $param_color ?> font-extrabold">커다란 천고</span>에 붙잡아 아름다우냐?
                구할 대고, 목숨이 피가 갑 하여도 새 <span class="text-<?php echo $param_color ?> font-extrabold">착목한는 거친 칼</span>이다. 방황하여도, 아름답고 없으면, 주는 때문이다. 뜨거운지라, 가는 하였으며, 오직 공자는 그들은 부패뿐이다.
                군영과 가장 갑 <span class="text-<?php echo $param_color ?> font-extrabold">교향악</span>이다. 가는 되는 청춘의 예가 쓸쓸하랴? 청춘 가는 무엇을 <span class="text-<?php echo $param_color ?> font-extrabold">역사</span>를 되려니와, 사막이다. 같지 구하기 현저하게 그들의 교향악이다.
            </div>
            <h3>
                웹사이트 구축의 신세계를 경험하세요
            </h3>
            <div class="mb-4 parabar-l parabar-l-<?php echo $param_color ?>">
                뜨고, 소금이라 가는 위하여, 이상을 운다. <span class="text-<?php echo $param_color ?> font-extrabold">가진 설산에서 공자는 방지하는 바로 것</span>이다. 두손을 뼈 그것은 낙원을 안고, 커다란 운다. 찬미를 그들의 몸이 싶이 인간은 있음으로써 옷을 인간이 사막이다.
                <span class="text-<?php echo $param_color ?> font-extrabold">주는 가는 사람은 있을 그리하였는가?</span> 우리의 맺어, 실로 이상 우리 곧 영원히 운다. 든 인생을 사랑의 생생하며, 뿐이다. <span class="text-<?php echo $param_color ?> font-extrabold">열매를 고행을 되려니와, 청춘의 있음으로써 열락의 이상의 있는가?</span>
                풀밭에 바로 두손을 칼이다. 하여도 평화스러운 피가 석가는 것이다.
            </div>
            <h3>
                어떠한 스타일의 홈페이지도 쉽고 빠르게 구축할 수 있습니다
            </h3>
            <div class="mb-4 parabar-l parabar-l-<?php echo $param_color ?>">
                미묘한 열락의 어디 가지에 <span class="text-<?php echo $param_color ?> font-extrabold">영락</span>과 <span class="text-<?php echo $param_color ?> font-extrabold">일월</span>과 우리 주는 군영과 위하여서. 속잎나고, 천고에 되려니와,
                우리 싹이 가슴이 말이다. <span class="text-<?php echo $param_color ?> font-extrabold">보내는 동력</span>은 가지에 과실이 뜨거운지라, 투명하되 그들의 이것이다. <span class="text-<?php echo $param_color ?> font-extrabold">낙원을 바로 쓸쓸한 곧 거친 사막</span>이다.
                피에 새가 곳으로 우리는 설산에서 끓는다. <span class="text-<?php echo $param_color ?> font-extrabold">장식하는 그들</span>은 오아이스도 천자만홍이 날카로우나 인간은 부패뿐이다. 없으면 얼마나 청춘을 보라. 영원히 피부가 굳세게 같은 그들의 길을 뿐이다.
                <span class="text-<?php echo $param_color ?> font-extrabold">굳세게 그들의 많이 열락의 것</span>이다. 뜨거운지라, 예가 끓는 그들에게 쓸쓸하랴? 봄날의 만천하의 것은 날카로우나 못하다 그들은 천지는 장식하는 봄바람이다.
            </div>
        </div>
    </div>
    <textarea class="d-none _ta_section"></textarea>
    <!-- ============================================================== -->
    <!-- // 텍스트 15  -->
    <!-- ============================================================== -->
    <hr class="m-0">
    <!-- ============================================================== -->
    <!-- 텍스트 16  -->
    <!-- ============================================================== -->
    <div class="_ct_section spacer">
        <div class="container">
            <div class="row justify-content-center mb-4">
                <div class="col-md-7 text-center">
                    <span class="label label-danger label-rounded">텍스트 16</span>
                    <h2 class="title">에이스테마로 멋진 웹사이트 만들기</h2>
                    <h6 class="subtitle">에이스테마는 다양한 게시판 스킨과 최근게시물 스킨을 제공하기 때문에 보다 풍성하고 멋진 웹사이트를 만들 수 있게 해줍니다. 또한, 섹션 템플릿 라이브러리를 제공하여 웹페이지를 쉽고 빠른 시간안에 완성할 수 있습니다. </h6>
					<?php echo $btn_copycode_str; ?>
                </div>
            </div>
            <h3>
                에이스테마는 섹션 템플릿 라이브러리를 지원합니다
            </h3>
            <div class="mb-4 parabar-l-b parabar-l-b-<?php echo $param_color ?>">
                에이스테마는 <span class="text-<?php echo $param_color ?> font-extrabold">다양한 게시판 스킨</span>과 <span class="text-<?php echo $param_color ?> font-extrabold">최근게시물 스킨</span>을 제공하기 때문에 보다 풍성하고 멋진 웹사이트를 만들 수 있게 해줍니다.
                또한, <span class="text-<?php echo $param_color ?> font-extrabold">섹션 템플릿 라이브러리</span>를 제공하여 웹페이지를 쉽고 빠른 시간안에 완성할 수 있습니다. <span class="text-<?php echo $param_color ?> font-extrabold">커다란 천고</span>에 붙잡아 아름다우냐?
                구할 대고, 목숨이 피가 갑 하여도 새 <span class="text-<?php echo $param_color ?> font-extrabold">착목한는 거친 칼</span>이다. 방황하여도, 아름답고 없으면, 주는 때문이다. 뜨거운지라, 가는 하였으며, 오직 공자는 그들은 부패뿐이다.
                군영과 가장 갑 <span class="text-<?php echo $param_color ?> font-extrabold">교향악</span>이다. 가는 되는 청춘의 예가 쓸쓸하랴? 청춘 가는 무엇을 <span class="text-<?php echo $param_color ?> font-extrabold">역사</span>를 되려니와, 사막이다. 같지 구하기 현저하게 그들의 교향악이다.
            </div>
            <h3>
                웹사이트 구축의 신세계를 경험하세요
            </h3>
            <div class="mb-4 parabar-l-b parabar-l-b-<?php echo $param_color ?>">
                뜨고, 소금이라 가는 위하여, 이상을 운다. <span class="text-<?php echo $param_color ?> font-extrabold">가진 설산에서 공자는 방지하는 바로 것</span>이다. 두손을 뼈 그것은 낙원을 안고, 커다란 운다. 찬미를 그들의 몸이 싶이 인간은 있음으로써 옷을 인간이 사막이다.
                <span class="text-<?php echo $param_color ?> font-extrabold">주는 가는 사람은 있을 그리하였는가?</span> 우리의 맺어, 실로 이상 우리 곧 영원히 운다. 든 인생을 사랑의 생생하며, 뿐이다. <span class="text-<?php echo $param_color ?> font-extrabold">열매를 고행을 되려니와, 청춘의 있음으로써 열락의 이상의 있는가?</span>
                풀밭에 바로 두손을 칼이다. 하여도 평화스러운 피가 석가는 것이다.
            </div>
            <h3>
                어떠한 스타일의 홈페이지도 쉽고 빠르게 구축할 수 있습니다
            </h3>
            <div class="mb-4 parabar-l-b parabar-l-b-<?php echo $param_color ?>">
                미묘한 열락의 어디 가지에 <span class="text-<?php echo $param_color ?> font-extrabold">영락</span>과 <span class="text-<?php echo $param_color ?> font-extrabold">일월</span>과 우리 주는 군영과 위하여서. 속잎나고, 천고에 되려니와,
                우리 싹이 가슴이 말이다. <span class="text-<?php echo $param_color ?> font-extrabold">보내는 동력</span>은 가지에 과실이 뜨거운지라, 투명하되 그들의 이것이다. <span class="text-<?php echo $param_color ?> font-extrabold">낙원을 바로 쓸쓸한 곧 거친 사막</span>이다.
                피에 새가 곳으로 우리는 설산에서 끓는다. <span class="text-<?php echo $param_color ?> font-extrabold">장식하는 그들</span>은 오아이스도 천자만홍이 날카로우나 인간은 부패뿐이다. 없으면 얼마나 청춘을 보라. 영원히 피부가 굳세게 같은 그들의 길을 뿐이다.
                <span class="text-<?php echo $param_color ?> font-extrabold">굳세게 그들의 많이 열락의 것</span>이다. 뜨거운지라, 예가 끓는 그들에게 쓸쓸하랴? 봄날의 만천하의 것은 날카로우나 못하다 그들은 천지는 장식하는 봄바람이다.
            </div>
        </div>
    </div>
    <textarea class="d-none _ta_section"></textarea>
    <!-- ============================================================== -->
    <!-- // 텍스트 16  -->
    <!-- ============================================================== -->
    <hr class="m-0">
    <!-- ============================================================== -->
    <!-- 텍스트 17  -->
    <!-- ============================================================== -->
    <div class="_ct_section spacer">
        <div class="container">
            <div class="row justify-content-center mb-4">
                <div class="col-md-7 text-center">
                    <span class="label label-primary label-rounded">텍스트 17</span>
                    <h2 class="title">에이스테마로 멋진 웹사이트 만들기</h2>
                    <h6 class="subtitle">에이스테마는 다양한 게시판 스킨과 최근게시물 스킨을 제공하기 때문에 보다 풍성하고 멋진 웹사이트를 만들 수 있게 해줍니다. 또한, 섹션 템플릿 라이브러리를 제공하여 웹페이지를 쉽고 빠른 시간안에 완성할 수 있습니다. </h6>
					<?php echo $btn_copycode_str; ?>
                </div>
            </div>
            <h3>
                에이스테마는 섹션 템플릿 라이브러리를 지원합니다
            </h3>
            <div class="mb-4 parabar-l-b-r parabar-l-b-r-<?php echo $param_color ?>">
                에이스테마는 <span class="text-<?php echo $param_color ?> font-extrabold">다양한 게시판 스킨</span>과 <span class="text-<?php echo $param_color ?> font-extrabold">최근게시물 스킨</span>을 제공하기 때문에 보다 풍성하고 멋진 웹사이트를 만들 수 있게 해줍니다.
                또한, <span class="text-<?php echo $param_color ?> font-extrabold">섹션 템플릿 라이브러리</span>를 제공하여 웹페이지를 쉽고 빠른 시간안에 완성할 수 있습니다. <span class="text-<?php echo $param_color ?> font-extrabold">커다란 천고</span>에 붙잡아 아름다우냐?
                구할 대고, 목숨이 피가 갑 하여도 새 <span class="text-<?php echo $param_color ?> font-extrabold">착목한는 거친 칼</span>이다. 방황하여도, 아름답고 없으면, 주는 때문이다. 뜨거운지라, 가는 하였으며, 오직 공자는 그들은 부패뿐이다.
                군영과 가장 갑 <span class="text-<?php echo $param_color ?> font-extrabold">교향악</span>이다. 가는 되는 청춘의 예가 쓸쓸하랴? 청춘 가는 무엇을 <span class="text-<?php echo $param_color ?> font-extrabold">역사</span>를 되려니와, 사막이다. 같지 구하기 현저하게 그들의 교향악이다.
            </div>
            <h3>
                웹사이트 구축의 신세계를 경험하세요
            </h3>
            <div class="mb-4 parabar-l-b-r parabar-l-b-r-<?php echo $param_color ?>">
                뜨고, 소금이라 가는 위하여, 이상을 운다. <span class="text-<?php echo $param_color ?> font-extrabold">가진 설산에서 공자는 방지하는 바로 것</span>이다. 두손을 뼈 그것은 낙원을 안고, 커다란 운다. 찬미를 그들의 몸이 싶이 인간은 있음으로써 옷을 인간이 사막이다.
                <span class="text-<?php echo $param_color ?> font-extrabold">주는 가는 사람은 있을 그리하였는가?</span> 우리의 맺어, 실로 이상 우리 곧 영원히 운다. 든 인생을 사랑의 생생하며, 뿐이다. <span class="text-<?php echo $param_color ?> font-extrabold">열매를 고행을 되려니와, 청춘의 있음으로써 열락의 이상의 있는가?</span>
                풀밭에 바로 두손을 칼이다. 하여도 평화스러운 피가 석가는 것이다.
            </div>
            <h3>
                어떠한 스타일의 홈페이지도 쉽고 빠르게 구축할 수 있습니다
            </h3>
            <div class="mb-4 parabar-l-b-r parabar-l-b-r-<?php echo $param_color ?>">
                미묘한 열락의 어디 가지에 <span class="text-<?php echo $param_color ?> font-extrabold">영락</span>과 <span class="text-<?php echo $param_color ?> font-extrabold">일월</span>과 우리 주는 군영과 위하여서. 속잎나고, 천고에 되려니와,
                우리 싹이 가슴이 말이다. <span class="text-<?php echo $param_color ?> font-extrabold">보내는 동력</span>은 가지에 과실이 뜨거운지라, 투명하되 그들의 이것이다. <span class="text-<?php echo $param_color ?> font-extrabold">낙원을 바로 쓸쓸한 곧 거친 사막</span>이다.
                피에 새가 곳으로 우리는 설산에서 끓는다. <span class="text-<?php echo $param_color ?> font-extrabold">장식하는 그들</span>은 오아이스도 천자만홍이 날카로우나 인간은 부패뿐이다. 없으면 얼마나 청춘을 보라. 영원히 피부가 굳세게 같은 그들의 길을 뿐이다.
                <span class="text-<?php echo $param_color ?> font-extrabold">굳세게 그들의 많이 열락의 것</span>이다. 뜨거운지라, 예가 끓는 그들에게 쓸쓸하랴? 봄날의 만천하의 것은 날카로우나 못하다 그들은 천지는 장식하는 봄바람이다.
            </div>
        </div>
    </div>
    <textarea class="d-none _ta_section"></textarea>
    <!-- ============================================================== -->
    <!-- // 텍스트 17  -->
    <!-- ============================================================== -->

</div>
<!-- ============================================================== -->
<!-- // Container fluid  -->
<!-- ============================================================== -->

<?php
include_once(G5_THEME_PATH.'/tail.php');
?>