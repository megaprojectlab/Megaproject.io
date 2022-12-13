<?php
include_once "./_common.php";

if ( $is_admin != 'super' ) {
	alert( "최고관리자만 접근 가능합니다!", G5_BBS_URL . "/login.php?url=" . urlencode( G5_THEME_URL . "/_temp_team.php" ) );
}

$g5['title'] = "직원소개";
include_once(G5_THEME_PATH . '/head.php');
?>

<!-- ============================================================== -->
<!-- Container fluid  -->
<!-- ============================================================== -->
<div class="container-fluid">

	<?php include_once(G5_THEME_PATH . '/_inc_temp/header_temp.php'); ?>
    <hr class="m-0">
	<!-- ============================================================== -->
	<!-- Team 1  -->
	<!-- ============================================================== -->
	<div class="_ct_section spacer bg-light team1">
		<div class="container">
			<div class="row justify-content-center m-b-30">
				<div class="col-md-7 text-center">
					<span class="label label-info label-rounded">직원소개 1</span>
					<h2 class="title">에이스테마로 멋진 웹사이트 만들기</h2>
					<h6 class="subtitle">에이스테마는 다양한 게시판 스킨과 최근게시물 스킨을 제공하기 때문에 보다 풍성하고 멋진 웹사이트를 만들 수 있게 해줍니다. 또한, 섹션 템플릿 라이브러리를 제공하여 웹페이지를 쉽고 빠른 시간안에 완성할 수 있습니다. </h6>
					<?php echo $btn_copycode_str; ?>
				</div>
			</div>
			<div class="row m-t-30">
				<!-- column  -->
				<div class="col-lg-6">
					<div class="card card-shadow">
						<!-- Row -->
						<div class="row no-gutters ">
							<div class="col-md-5 pro-pic" style="background:url(<?php echo G5_THEME_URL ?>/assets/images/face-square/1.jpg) center center">
								<div class="card-img-overlay">
									<ul class="list-inline">
										<li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
										<li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
										<li class="list-inline-item"><a href="#"><i class="fab fa-instagram"></i></a></li>
										<li class="list-inline-item"><a href="#"><i class="fab fa-behance"></i></a></li>
									</ul>
								</div>
							</div>
							<div class="col-md-7 bg-white">
								<div class="p-30">
									<h5 class="title m-t-0 ">홍길동</h5>
									<p>웹사이트 제작 더 이상 고민하지 마세요. 에이스테마를 이용하면 단 기간에 개발이 가능합니다. 이제 에이스테마를 이용하여 쉽고 빠르게 웹사이트를 구축하세요.</p>
								</div>
							</div>
						</div>
						<!-- Row -->
					</div>
				</div>
				<!-- column  -->
				<div class="col-lg-6">
					<div class="card card-shadow">
						<!-- Row -->
						<div class="row no-gutters card-shadow">
							<div class="col-md-5 pro-pic" style="background:url(<?php echo G5_THEME_URL ?>/assets/images/face-square/2.jpg) center center">
								<div class="card-img-overlay">
									<ul class="list-inline">
										<li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
										<li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
										<li class="list-inline-item"><a href="#"><i class="fa fa-instagram"></i></a></li>
										<li class="list-inline-item"><a href="#"><i class="fa fa-behance"></i></a></li>
									</ul>
								</div>
							</div>
							<div class="col-md-7 bg-white">
								<div class="p-30">
									<h5 class="title m-t-0 ">홍길동</h5>
									<p>웹사이트 제작 더 이상 고민하지 마세요. 에이스테마를 이용하면 단 기간에 개발이 가능합니다. 이제 에이스테마를 이용하여 쉽고 빠르게 웹사이트를 구축하세요.</p>
								</div>
							</div>
						</div>
						<!-- Row -->
					</div>
				</div>
				<!-- column  -->
			</div>
			<div class="row">
				<!-- column  -->
				<div class="col-lg-6">
					<div class="card card-shadow">
						<!-- Row -->
						<div class="row no-gutters card-shadow">
							<div class="col-md-5 pro-pic" style="background:url(<?php echo G5_THEME_URL ?>/assets/images/face-square/3.jpg) center center">
								<div class="card-img-overlay">
									<ul class="list-inline">
										<li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
										<li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
										<li class="list-inline-item"><a href="#"><i class="fa fa-instagram"></i></a></li>
										<li class="list-inline-item"><a href="#"><i class="fa fa-behance"></i></a></li>
									</ul>
								</div>
							</div>
							<div class="col-md-7 bg-white">
								<div class="p-30">
									<h5 class="title m-t-0 ">홍길동</h5>
									<p>웹사이트 제작 더 이상 고민하지 마세요. 에이스테마를 이용하면 단 기간에 개발이 가능합니다. 이제 에이스테마를 이용하여 쉽고 빠르게 웹사이트를 구축하세요.</p>
								</div>
							</div>
						</div>
						<!-- Row -->
					</div>
				</div>
				<!-- column  -->
				<div class="col-lg-6">
					<div class="card card-shadow">
						<!-- Row -->
						<div class="row no-gutters card-shadow">
							<div class="col-md-5 pro-pic" style="background:url(<?php echo G5_THEME_URL ?>/assets/images/face-square/4.jpg) center center">
								<div class="card-img-overlay">
									<ul class="list-inline">
										<li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
										<li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
										<li class="list-inline-item"><a href="#"><i class="fa fa-instagram"></i></a></li>
										<li class="list-inline-item"><a href="#"><i class="fa fa-behance"></i></a></li>
									</ul>
								</div>
							</div>
							<div class="col-md-7 bg-white">
								<div class="p-30">
									<h5 class="title m-t-0 ">홍길동</h5>
									<p>웹사이트 제작 더 이상 고민하지 마세요. 에이스테마를 이용하면 단 기간에 개발이 가능합니다. 이제 에이스테마를 이용하여 쉽고 빠르게 웹사이트를 구축하세요.</p>
								</div>
							</div>
						</div>
						<!-- Row -->
					</div>
				</div>
				<!-- column  -->
			</div>
		</div>
	</div>
	<textarea class="d-none _ta_section"></textarea>
	<!-- ============================================================== -->
	<!-- End Team 1  -->
	<!-- ============================================================== -->
	<hr class="m-0">
	<!-- ============================================================== -->
	<!-- Team 2  -->
	<!-- ============================================================== -->
	<div class="_ct_section spacer team2">
		<div class="container">
			<div class="row justify-content-center m-b-30">
				<div class="col-md-7 text-center">
					<span class="label label-success label-rounded">직원소개 2</span>
					<h2 class="title">에이스테마로 멋진 웹사이트 만들기</h2>
					<h6 class="subtitle">에이스테마는 다양한 게시판 스킨과 최근게시물 스킨을 제공하기 때문에 보다 풍성하고 멋진 웹사이트를 만들 수 있게 해줍니다. 또한, 섹션 템플릿 라이브러리를 제공하여 웹페이지를 쉽고 빠른 시간안에 완성할 수 있습니다. </h6>
					<?php echo $btn_copycode_str; ?>
				</div>
			</div>
			<div class="row m-t-30">
				<!-- column  -->
				<div class="col-lg-3 m-b-30">
					<!-- Row -->
					<div class="row no-gutters">
						<div class="col-md-12 pro-pic" style="background:url(<?php echo G5_THEME_URL ?>/assets/images/face-square/5.jpg) center center">
							<div class="card-img-overlay">
								<ul class="list-inline">
									<li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li class="list-inline-item"><a href="#"><i class="fa fa-instagram"></i></a></li>
									<li class="list-inline-item"><a href="#"><i class="fa fa-behance"></i></a></li>
								</ul>
							</div>
						</div>
						<div class="col-md-12">
							<div class="p-t-10">
								<h5 class="title mb-0">홍길동</h5>
								<h6 class="subtitle font-13 text-success font-bold">사용자경험/UX 전문가</h6>
								<p>웹사이트 제작 더 이상 고민하지 마세요. 에이스테마를 이용하면 단 기간에 개발이 가능합니다. 이제 에이스테마를 이용하여 쉽고 빠르게 웹사이트를 구축하세요.</p>
							</div>
						</div>
					</div>
					<!-- Row -->
				</div>
				<!-- column  -->
				<!-- column  -->
				<div class="col-lg-3 m-b-30">
					<!-- Row -->
					<div class="row no-gutters">
						<div class="col-md-12 pro-pic" style="background:url(<?php echo G5_THEME_URL ?>/assets/images/face-square/20.jpg) center center">
							<div class="card-img-overlay">
								<ul class="list-inline">
									<li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li class="list-inline-item"><a href="#"><i class="fa fa-instagram"></i></a></li>
									<li class="list-inline-item"><a href="#"><i class="fa fa-behance"></i></a></li>
								</ul>
							</div>
						</div>
						<div class="col-md-12">
							<div class="p-t-10">
								<h5 class="title mb-0">홍길동</h5>
								<h6 class="subtitle font-13 text-success font-bold">사용자경험/UX 전문가</h6>
								<p>웹사이트 제작 더 이상 고민하지 마세요. 에이스테마를 이용하면 단 기간에 개발이 가능합니다. 이제 에이스테마를 이용하여 쉽고 빠르게 웹사이트를 구축하세요.</p>
							</div>
						</div>
					</div>
					<!-- Row -->
				</div>
				<!-- column  -->
				<!-- column  -->
				<div class="col-lg-3 m-b-30">
					<!-- Row -->
					<div class="row no-gutters">
						<div class="col-md-12 pro-pic" style="background:url(<?php echo G5_THEME_URL ?>/assets/images/face-square/7.jpg) center center">
							<div class="card-img-overlay">
								<ul class="list-inline">
									<li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li class="list-inline-item"><a href="#"><i class="fa fa-instagram"></i></a></li>
									<li class="list-inline-item"><a href="#"><i class="fa fa-behance"></i></a></li>
								</ul>
							</div>
						</div>
						<div class="col-md-12">
							<div class="p-t-10">
								<h5 class="title mb-0">홍길동</h5>
								<h6 class="subtitle font-13 text-success font-bold">사용자경험/UX 전문가</h6>
								<p>웹사이트 제작 더 이상 고민하지 마세요. 에이스테마를 이용하면 단 기간에 개발이 가능합니다. 이제 에이스테마를 이용하여 쉽고 빠르게 웹사이트를 구축하세요.</p>
							</div>
						</div>
					</div>
					<!-- Row -->
				</div>
				<!-- column  -->
				<!-- column  -->
				<div class="col-lg-3 m-b-30">
					<!-- Row -->
					<div class="row no-gutters">
						<div class="col-md-12 pro-pic" style="background:url(<?php echo G5_THEME_URL ?>/assets/images/face-square/8.jpg) center center">
							<div class="card-img-overlay">
								<ul class="list-inline">
									<li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li class="list-inline-item"><a href="#"><i class="fa fa-instagram"></i></a></li>
									<li class="list-inline-item"><a href="#"><i class="fa fa-behance"></i></a></li>
								</ul>
							</div>
						</div>
						<div class="col-md-12">
							<div class="p-t-10">
								<h5 class="title mb-0">홍길동</h5>
								<h6 class="subtitle font-13 text-success font-bold">사용자경험/UX 전문가</h6>
								<p>웹사이트 제작 더 이상 고민하지 마세요. 에이스테마를 이용하면 단 기간에 개발이 가능합니다. 이제 에이스테마를 이용하여 쉽고 빠르게 웹사이트를 구축하세요.</p>
							</div>
						</div>
					</div>
					<!-- Row -->
				</div>
				<!-- column  -->
			</div>
		</div>
	</div>
	<textarea class="d-none _ta_section"></textarea>
	<!-- ============================================================== -->
	<!-- End Team 2  -->
	<!-- ============================================================== -->
	<hr class="m-0">
	<!-- ============================================================== -->
	<!-- Team 3  -->
	<!-- ============================================================== -->
	<div class="_ct_section spacer team3 bg-light">
		<div class="container">
			<div class="row justify-content-center m-b-30">
				<div class="col-md-7 text-center">
					<span class="label label-success label-rounded">직원소개 3</span>
					<h2 class="title">에이스테마로 멋진 웹사이트 만들기</h2>
					<h6 class="subtitle">에이스테마는 다양한 게시판 스킨과 최근게시물 스킨을 제공하기 때문에 보다 풍성하고 멋진 웹사이트를 만들 수 있게 해줍니다. 또한, 섹션 템플릿 라이브러리를 제공하여 웹페이지를 쉽고 빠른 시간안에 완성할 수 있습니다. </h6>
					<?php echo $btn_copycode_str; ?>
				</div>
			</div>
			<div class="row m-t-30">
				<!-- column  -->
				<div class="col-lg-4 m-b-30">
					<!-- Row -->
					<div class="row">
						<div class="col-md-12">
							<img src="<?php echo G5_THEME_URL ?>/assets/images/face-square/9.jpg" alt="" class="img-responsive" />
						</div>
						<div class="col-md-12">
							<div class="p-t-10">
								<h5 class="title mb-0">홍길동</h5>
								<h6 class="subtitle font-13 text-success font-bold">사용자경험/UX 전문가</h6>
								<p>웹사이트 제작 더 이상 고민하지 마세요. 에이스테마를 이용하면 단 기간에 개발이 가능합니다. 이제 에이스테마를 이용하여 쉽고 빠르게 웹사이트를 구축하세요.</p>
								<ul class="list-inline">
									<li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li class="list-inline-item"><a href="#"><i class="fa fa-instagram"></i></a></li>
									<li class="list-inline-item"><a href="#"><i class="fa fa-behance"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
					<!-- Row -->
				</div>
				<!-- column  -->
				<!-- column  -->
				<div class="col-lg-4 m-b-30">
					<!-- Row -->
					<div class="row">
						<div class="col-md-12 pro-pic">
							<img src="<?php echo G5_THEME_URL ?>/assets/images/face-square/10.jpg" alt="" class="img-responsive" />
						</div>
						<div class="col-md-12">
							<div class="p-t-10">
								<h5 class="title mb-0">홍길동</h5>
								<h6 class="subtitle font-13 text-success font-bold">사용자경험/UX 전문가</h6>
								<p>웹사이트 제작 더 이상 고민하지 마세요. 에이스테마를 이용하면 단 기간에 개발이 가능합니다. 이제 에이스테마를 이용하여 쉽고 빠르게 웹사이트를 구축하세요.</p>
								<ul class="list-inline">
									<li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li class="list-inline-item"><a href="#"><i class="fa fa-instagram"></i></a></li>
									<li class="list-inline-item"><a href="#"><i class="fa fa-behance"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
					<!-- Row -->
				</div>
				<!-- column  -->
				<!-- column  -->
				<div class="col-lg-4 m-b-30">
					<!-- Row -->
					<div class="row">
						<div class="col-md-12 pro-pic">
							<img src="<?php echo G5_THEME_URL ?>/assets/images/face-square/11.jpg" alt="" class="img-responsive" />
						</div>
						<div class="col-md-12">
							<div class="p-t-10">
								<h5 class="title mb-0">홍길동</h5>
								<h6 class="subtitle font-13 text-success font-bold">사용자경험/UX 전문가</h6>
								<p>웹사이트 제작 더 이상 고민하지 마세요. 에이스테마를 이용하면 단 기간에 개발이 가능합니다. 이제 에이스테마를 이용하여 쉽고 빠르게 웹사이트를 구축하세요.</p>
								<ul class="list-inline">
									<li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li class="list-inline-item"><a href="#"><i class="fa fa-instagram"></i></a></li>
									<li class="list-inline-item"><a href="#"><i class="fa fa-behance"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
					<!-- Row -->
				</div>
				<!-- column  -->
			</div>
		</div>
	</div>
	<textarea class="d-none _ta_section"></textarea>
	<!-- ============================================================== -->
	<!-- End Team 3  -->
	<!-- ============================================================== -->
	<hr class="m-0">
	<!-- ============================================================== -->
	<!-- Team 4  -->
	<!-- ============================================================== -->
	<div class="_ct_section spacer team4">
		<div class="container">
			<div class="row justify-content-center m-b-30">
				<div class="col-md-7 text-center">
					<span class="label label-success label-rounded">직원소개 4</span>
					<h2 class="title">에이스테마로 멋진 웹사이트 만들기</h2>
					<h6 class="subtitle">에이스테마는 다양한 게시판 스킨과 최근게시물 스킨을 제공하기 때문에 보다 풍성하고 멋진 웹사이트를 만들 수 있게 해줍니다. 또한, 섹션 템플릿 라이브러리를 제공하여 웹페이지를 쉽고 빠른 시간안에 완성할 수 있습니다. </h6>
					<?php echo $btn_copycode_str; ?>
				</div>
			</div>
			<div class="row m-t-30">
				<!-- column  -->
				<div class="col-lg-3 m-b-30">
					<!-- Row -->
					<div class="row">
						<div class="col-md-12 pro-pic">
							<img src="<?php echo G5_THEME_URL ?>/assets/images/face-square/13.jpg" alt="" class="img-responsive" />
						</div>
						<div class="col-md-12">
							<div class="p-t-10">
								<h5 class="title mb-0">홍길동</h5>
								<h6 class="subtitle font-13 text-success font-bold">사용자경험/UX 전문가</h6>
								<p>웹사이트 제작 더 이상 고민하지 마세요. 에이스테마를 이용하면 단 기간에 개발이 가능합니다. 이제 에이스테마를 이용하여 쉽고 빠르게 웹사이트를 구축하세요.</p>
								<ul class="list-inline">
									<li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li class="list-inline-item"><a href="#"><i class="fa fa-instagram"></i></a></li>
									<li class="list-inline-item"><a href="#"><i class="fa fa-behance"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
					<!-- Row -->
				</div>
				<!-- column  -->
				<!-- column  -->
				<div class="col-lg-3 m-b-30">
					<!-- Row -->
					<div class="row">
						<div class="col-md-12 pro-pic">
							<img src="<?php echo G5_THEME_URL ?>/assets/images/face-square/14.jpg" alt="" class="img-responsive" />
						</div>
						<div class="col-md-12">
							<div class="p-t-10">
								<h5 class="title mb-0">홍길동</h5>
								<h6 class="subtitle font-13 text-success font-bold">사용자경험/UX 전문가</h6>
								<p>웹사이트 제작 더 이상 고민하지 마세요. 에이스테마를 이용하면 단 기간에 개발이 가능합니다. 이제 에이스테마를 이용하여 쉽고 빠르게 웹사이트를 구축하세요.</p>
								<ul class="list-inline">
									<li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li class="list-inline-item"><a href="#"><i class="fa fa-instagram"></i></a></li>
									<li class="list-inline-item"><a href="#"><i class="fa fa-behance"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
					<!-- Row -->
				</div>
				<!-- column  -->
				<!-- column  -->
				<div class="col-lg-3 m-b-30">
					<!-- Row -->
					<div class="row">
						<div class="col-md-12 pro-pic">
							<img src="<?php echo G5_THEME_URL ?>/assets/images/face-square/15.jpg" alt="" class="img-responsive" />
						</div>
						<div class="col-md-12">
							<div class="p-t-10">
								<h5 class="title mb-0">홍길동</h5>
								<h6 class="subtitle font-13 text-success font-bold">사용자경험/UX 전문가</h6>
								<p>웹사이트 제작 더 이상 고민하지 마세요. 에이스테마를 이용하면 단 기간에 개발이 가능합니다. 이제 에이스테마를 이용하여 쉽고 빠르게 웹사이트를 구축하세요.</p>
								<ul class="list-inline">
									<li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li class="list-inline-item"><a href="#"><i class="fa fa-instagram"></i></a></li>
									<li class="list-inline-item"><a href="#"><i class="fa fa-behance"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
					<!-- Row -->
				</div>
				<!-- column  -->
				<!-- column  -->
				<div class="col-lg-3 m-b-30">
					<!-- Row -->
					<div class="row">
						<div class="col-md-12 pro-pic">
							<img src="<?php echo G5_THEME_URL ?>/assets/images/face-square/16.jpg" alt="" class="img-responsive" />
						</div>
						<div class="col-md-12">
							<div class="p-t-10">
								<h5 class="title mb-0">홍길동</h5>
								<h6 class="subtitle font-13 text-success font-bold">사용자경험/UX 전문가</h6>
								<p>웹사이트 제작 더 이상 고민하지 마세요. 에이스테마를 이용하면 단 기간에 개발이 가능합니다. 이제 에이스테마를 이용하여 쉽고 빠르게 웹사이트를 구축하세요.</p>
								<ul class="list-inline">
									<li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li class="list-inline-item"><a href="#"><i class="fa fa-instagram"></i></a></li>
									<li class="list-inline-item"><a href="#"><i class="fa fa-behance"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
					<!-- Row -->
				</div>
			</div>
		</div>
	</div>
	<textarea class="d-none _ta_section"></textarea>
	<!-- ============================================================== -->
	<!-- End Team 4  -->
	<!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Container fluid  -->
<!-- ============================================================== -->

<?php
include_once(G5_THEME_PATH.'/tail.php');
?>