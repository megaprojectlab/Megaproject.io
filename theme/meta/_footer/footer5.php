<?php
global $theme_config, $_ACETHEME;
if (!defined('_GNUBOARD_')) {
	exit;
}

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link href="'.G5_THEME_CSS_URL.'/footers/footer5.min.css" rel="stylesheet"/>', 0);
?>


<div class="footer5 mini-spacer">
	<div class="container ">
		<div class="row">
			<div class="col-lg-2 col-md-6 m-b-30">
				<ul class="general-listing">
					<li><a href="#">Nice big link</a></li>
					<li><a href="#">We’re Hiring</a></li>
					<li><a href="#">Press Center</a></li>
					<li><a href="#">Terms of Service</a></li>
					<li><a href="#">Privacy Policy</a></li>
				</ul>
			</div>
			<div class="col-lg-2 col-md-6 m-b-30">
				<ul class="general-listing">
					<li><a href="#">We’re Hiring</a></li>
					<li><a href="#">Press Center</a></li>
					<li><a href="#">Terms of Service</a></li>
					<li><a href="#">Privacy Policy</a></li>
					<li><a href="#">Accessibility</a></li>
				</ul>
			</div>
			<div class="col-lg-3 col-md-6 m-b-30">
				<div class="d-flex no-block">
					<div class="m-r-20 align-self-top"><i class="fas fa-map-marker-alt fa-2x"></i></div>
					<div class="info">
						<p>
                            경기도 성남시<br/>
                            분당구 정자동 123-456<br/>
                            2층, 3층, 4층
                        </p>
					</div>
				</div>
				<div class="d-flex no-block m-b-10">
					<div class="m-r-20 align-self-top"><i class="fas fa-phone fa-2x"></i></div>
					<div class="info">
						<span class="font-medium text-dark db m-t-5">02-1234-5678</span>
					</div>
				</div>
				<div class="d-flex no-block m-b-30">
					<div class="m-r-20 align-self-top"><i class="fas fa-envelope fa-2x"></i></div>
					<div class="info">
						<a href="#" class="font-medium text-dark db m-t-5">abc1234@naver.com</a>
					</div>
				</div>
			</div>
			<div class="col-lg-5 col-md-6 m-b-30">
				<h6 class="font-bold m-b-10">Subscribe to Our Newsletter</h6>
				<form>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="이메일 주소 입력">
                        <div class="input-group-append">
                            <button class="btn btn-danger" type="button" id="button-addon2">구독신청</button>
                        </div>
                    </div>
				</form>
				<div class="social-links">
					<a href="#"><i class="fab fa-facebook-f"></i></a>
					<a href="#"><i class="fab fa-twitter"></i></a>
					<a href="#"><i class="fab fa-google-plus"></i></a>
					<a href="#"><i class="fab fa-linkedin"></i></a>
					<a href="#"><i class="fas fa-rss"></i></a>
				</div>
				<img src="<?php echo G5_THEME_URL ?>/assets/images/footer/img5.jpg" alt="카드이미지" />
			</div>
		</div>

	</div>
</div>