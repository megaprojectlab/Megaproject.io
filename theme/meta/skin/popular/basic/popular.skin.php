<?php
if (!defined("_GNUBOARD_")) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$popular_skin_url.'/style.css">', 0);
add_javascript('<script src="'.G5_JS_URL.'/owlcarousel/owl.carousel.min.js"></script>', 10);
add_stylesheet('<link rel="stylesheet" href="'.G5_JS_URL.'/owlcarousel/owl.carousel.min.css">', 10);
?>

<!-- 인기검색어 시작 { -->
<div class="row">
    <div class="col-12">
        <div class="popular_inner d-flex justify-content-between">
            <span class="popular_btns mr-2 ">
                <button type="button" class="btn btn-sm btn-light mr-2 pp-prev">
                    <i class="fa fa-caret-left" aria-hidden="true"></i>
                </button>
<!--                <i class="fa fa-caret-left px-2 pp-prev" aria-hidden="true"></i>-->
            </span>
            <ul class="list-inline d-inline-block ">
                <!--<li class="list-inline-item"><span class="badge badge-pill badge-secondary">인기검색어</span></li>-->
		        <?php
		        if( isset($list) && is_array($list) ){
			        for ($i=0; $i<count($list); $i++) {
				        ?>
                        <li class="list-inline-item mx-2 ">
                            <a href="<?php echo G5_BBS_URL ?>/search.php?sfl=wr_subject&amp;sop=and&amp;stx=<?php echo urlencode($list[$i]['pp_word']) ?>" class="btn btn-link btn-sm" role="button">
						        <?php echo get_text($list[$i]['pp_word']); ?>
                            </a>
                        </li>
				        <?php
			        }   //end for
		        }   //end if
		        ?>
            </ul>
            <!--<span class="d-inline-block popular_btns">
                <button type="button" class="btn btn-sm btn-light mr-2 pp-prev">
                    <i class="fa fa-caret-left" aria-hidden="true"></i>
                </button>
                <button type="button" class="btn btn-sm btn-light ml-2 pp-next">
                    <i class="fa fa-caret-right" aria-hidden="true"></i>
                </button>
                <i class="fa fa-caret-left pp-prev px-1" aria-hidden="true"></i>
                <i class="fa fa-caret-right pp-prev px-1" aria-hidden="true"></i>
            </span>-->
            <span class="popular_btns ml-2 ">
                <button type="button" class="btn btn-sm btn-light ml-2 pp-next">
                    <i class="fa fa-caret-right" aria-hidden="true"></i>
                </button>
<!--                <i class="fa fa-caret-right px-2 pp-next" aria-hidden="true"></i>-->
            </span>
        </div>
    </div>
</div>


<?php if ($list && is_array($list)) { //게시물이 있다면 ?>
<script>
jQuery(function($){
    
    var popular_el = ".popular_inner ul",
        p_width = $(popular_el).width(),
        c_width = 0;

    $(popular_el).children().each(function() {
        c_width += $(this).outerWidth( true );
    });

    if( c_width > p_width ){
        var $popular_btns = $(".popular_inner .popular_btns");
        $popular_btns.show();

        var p_carousel = $(popular_el).addClass("owl-carousel").owlCarousel({
            items:5,
            loop:true,
            nav:false,
            dots:false,
            autoWidth:true,
            mouseDrag:false,
        });

        $popular_btns.on("click", ".pp-next", function(e) {
            e.preventDefault();
            p_carousel.trigger('next.owl.carousel');
        })
        .on("click", ".pp-prev", function(e) {
            e.preventDefault();
            p_carousel.trigger('prev.owl.carousel');
        });
    }

});
</script>
<?php } ?>
<!-- } 인기검색어 끝 -->