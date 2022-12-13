<?php
global $theme_config, $_ACETHEME;
if (!defined('_GNUBOARD_')) {
	exit;
}

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link href="'.G5_THEME_CSS_URL.'/footers/footer6.min.css" rel="stylesheet"/>', 0);
?>


<footer class="footer6 bg-inverse mini-spacer">
	<div class="container ">
		<div class="row">
			<!-- coluumn -->
			<div class="col-lg-4">
				<div class="d-flex no-block m-b-10 text-white">
					<div class="m-r-20"><i class="fas fa-phone"></i></div>
					<div class="info">
						<span class="db m-t-5">02-1234-5678</span>
					</div>
				</div>
			</div>
			<!-- coluumn -->
			<!-- coluumn -->
			<div class="col-lg-4">
				<div class="d-flex no-block m-b-10">
					<div class="m-r-20 text-white"><i class="fas fa-envelope"></i></div>
					<div class="info">
						<a href="mailto:abc1234@naver.com" class="db white-link m-t-5">info@meta-camp.us</a>
					</div>
				</div>
			</div>
			<!-- coluumn -->
			<!-- coluumn -->
			<div class="col-lg-4 ml-auto">
				<div class="ml-auto round-social dark">
					<a href="#" class=""><i class="fab fa-facebook-f"></i></a>
					<a href="#" class=""><i class="fab fa-twitter"></i></a>
					<a href="#" class=""><i class="fab fa-telegram"></i></a>
					
					<a href="#" class=""><i class="fab fa-instagram"></i></a>
				</div>
			</div>
			<div class="col-md-12 b-t m-t-40">
				<div class="p-t-20 text-white">Copyright @2022. <b>메타캠퍼스. </b>All Rights Reserved by Meta Campus Foundation.</div>
			</div>
		</div>
	</div>
</footer>