<?php
include_once "./_common.php";

if ( $is_admin != 'super' ) {
	alert( "최고관리자만 접근 가능합니다!", G5_BBS_URL . "/login.php?url=" . urlencode( G5_THEME_URL . "/_temp_contacts.php" ) );
}

$g5['title'] = "오시는길/연락처";
include_once(G5_THEME_PATH . '/head.php');
?>

<!-- ============================================================== -->
<!-- Container fluid  -->
<!-- ============================================================== -->
<div class="container-fluid">

	<?php include_once(G5_THEME_PATH . '/_inc_temp/header_temp.php'); ?>
    <hr class="m-0">
    <!-- ============================================================== -->
    <!-- Contact 1  -->
    <!-- ============================================================== -->
    <div class="_ct_section contact1">
        <div class="row">
            <div class="col-md-12">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15084.490382777765!2d127.11576424334075!3d37.36325521141283!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x357b5825648315f1%3A0x1edcfd8990062629!2sJeongja-dong%2C%20Bundang-gu%2C%20Seongnam-si%2C%20Gyeonggi-do!5e0!3m2!1sen!2skr!4v1622922535315!5m2!1sen!2skr" width="100%" height="450" frameborder="0" style="border:0"></iframe>
            </div>
            <div class="container">
                <div class="mini-spacer">
                    <div class="row m-0">
                        <div class="col-lg-8">
                            <div class="contact-box p-r-40">
                                <div class="m-b-10">
                                    <span class="label label-info label-rounded">오시는길/연락처 1</span>
                                </div>
                                <h4 class="title">고객문의</h4>
                                <form data-aos="fade-left" data-aos-duration="1200">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <input class="form-control" type="text" placeholder="고객님 성함">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <input class="form-control" type="text" placeholder="이메일 주소">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <textarea class="form-control" rows="3" placeholder="문의내용"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <button type="submit" class="btn btn-danger-gradiant btn-arrow"><span> 전송 <i class="fas fa-arrow-right"></i></span></button>
                                        </div>
                                    </div>
                                </form>
	                            <?php echo $btn_copycode_str; ?>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="detail-box p-40 bg-info" data-aos="fade-right" data-aos-duration="1200">
                                <h2 class="text-white">
                                    (주)코리아컴퍼니<br/>
                                    연락처 안내
                                </h2>
                                <p class="text-white m-t-30 op-8">
                                    02-1234-5678
                                    <br> abc1234@naver.com
                                </p>
                                <p class="text-white op-8">
                                    경기도 성남시<br/>
                                    분당구 정자동 123-456<br/>
                                    2층, 3층, 4층
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <textarea class="d-none _ta_section"></textarea>
    <!-- ============================================================== -->
    <!-- End Contact 1  -->
    <!-- ============================================================== -->
    <hr class="m-0">
    <!-- ============================================================== -->
    <!-- Contact 2  -->
    <!-- ============================================================== -->
    <div class="_ct_section contact2" style="background-image:url(<?php echo G5_THEME_URL ?>/assets/images/web-full/10.jpg); background-size: cover;" id="contact">
        <div class="container">
            <div class="row contact-container">
                <div class="col-lg-12">
                    <div class="card card-shadow" data-aos="fade-up" data-aos-duration="1200">
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="contact-box p-40">
                                    <div class="m-b-10">
                                        <span class="label label-success label-rounded">오시는길/연락처 2</span>
                                    </div>
                                    <h4 class="title">고객문의</h4>
                                    <form>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <input class="form-control" type="text" placeholder="고객님 성함">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <input class="form-control" type="text" placeholder="이메일 주소">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <input class="form-control" type="text" placeholder="연락처">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <input class="form-control" type="text" placeholder="주소">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <input class="form-control" type="text" placeholder="문의내용">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <button type="submit" class="btn btn-danger-gradiant btn-arrow"><span> 전송 <i class="fas fa-arrow-right"></i></span></button>
                                            </div>
                                        </div>
                                    </form>
	                                <?php echo $btn_copycode_str; ?>
                                </div>
                            </div>
                            <div class="col-lg-4 bg-image" style="background-image:url(<?php echo G5_THEME_URL ?>/assets/images/contact/1.jpg)">
                                <div class="detail-box">
                                    <h5 class="text-white  m-b-30">주소</h5>
                                    <p class="text-white op-7">
                                        경기도 성남시<br/>
                                        분당구 정자동 123-456<br/>
                                        2층, 3층, 4층
                                    <h5 class="text-white  m-b-30 m-t-40">연락처</h5>
                                    <p class="text-white op-7">
                                        02-1234-5678<br/>
                                        abc1234@naver.com
                                    <div class="round-social light">
                                        <a href="#" class="m-l-0"><i class="fab fa-facebook-f"></i></a>
                                        <a href="#" class=""><i class="fab fa-twitter"></i></a>
                                        <a href="#" class=""><i class="fab fa-youtube"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <textarea class="d-none _ta_section"></textarea>
    <!-- ============================================================== -->
    <!-- End Contact 2  -->
    <!-- ============================================================== -->
    <hr class="m-0">
    <!-- ============================================================== -->
    <!-- Contact 3  -->
    <!-- ============================================================== -->
    <div class="_ct_section contact3 mini-spacer">
        <div class="row">
            <div class="container">
                <div class="row m-t-20 m-b-0">
                    <div class="col-lg-7">
                        <div class="card-shadow" data-aos="flip-left" data-aos-duration="1200">
                            <img src="<?php echo G5_THEME_URL ?>/assets/images/png/think.png" class="img-responsive">
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="contact-box m-l-30">
                            <div class="m-b-10">
                                <span class="label label-info label-rounded">오시는길/연락처 3</span>
                            </div>
                            <h1 class="title  m-t-10">고객문의</h1>
                            <form class="m-t-30" data-aos="fade-left" data-aos-duration="1200">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <input class="form-control" type="text" placeholder="고객님 성함">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <input class="form-control" type="email" placeholder="이메일 주소">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <input class="form-control" type="text" placeholder="연락처">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <textarea class="form-control" rows="3" placeholder="문의내용"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <button type="submit" class="btn btn-danger-gradiant btn-arrow"><span> 전송 <i class="fas fa-arrow-right"></i></span></button>
                                    </div>
                                </div>
                            </form>
	                        <?php echo $btn_copycode_str; ?>
                        </div>
                    </div>
                    <div class="col-lg-12 py-3">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="media b-0">
                                    <img class="align-self-start mr-3" src="<?php echo G5_THEME_URL ?>/assets/images/contact/icon1.png" alt="">
                                    <div class="media-body">
                                        <h6>주소</h6>
                                        <p class="">
                                            경기도 성남시<br/>
                                            분당구 정자동 123-456
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="media b-0">
                                    <img class="align-self-start mr-3" src="<?php echo G5_THEME_URL ?>/assets/images/contact/icon2.png" alt="">
                                    <div class="media-body">
                                        <h6>전화번호</h6>
                                        <p class="">
                                            02-1234-5678<br/>
                                            02-1234-8790
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="media b-0">
                                    <img class="align-self-start mr-3" src="<?php echo G5_THEME_URL ?>/assets/images/contact/icon3.png" alt="">
                                    <div class="media-body">
                                        <h6>이메일</h6>
                                        <p class="">
                                            abc1234@naver.com<br/>
                                            abc5678@hanmail.com
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <textarea class="d-none _ta_section"></textarea>
    <!-- ============================================================== -->
    <!-- End Contact 3  -->
    <!-- ============================================================== -->
    <hr class="m-0">
    <!-- ============================================================== -->
    <!-- Contact 4  -->
    <!-- ============================================================== -->
    <div class="_ct_section bg-info-gradiant contact4">
        <!-- Row  -->
        <div class="row">
            <div class="container">
                <div class="col-lg-6 contact-box">
                    <div class="" data-aos="fade-right" data-aos-duration="1200">
                        <div class="m-b-10">
                            <span class="label label-success label-rounded">오시는길/연락처 4</span>
                        </div>
                        <h1 class="title text-white m-t-10">고객문의</h1>
                        <form class="m-t-30" data-aos="fade-left" data-aos-duration="1200">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input class="form-control" type="text" placeholder="고객님 성함">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input class="form-control" type="email" placeholder="이메일 주소">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <textarea class="form-control" rows="3" placeholder="문의내용"></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-12 d-flex no-block">
                                    <button type="submit" class="btn bg-white text-inverse btn-arrow"><span> 전송 <i class="fas fa-arrow-right"></i></span></button>
                                    <span class="ml-auto text-white align-self-center"><i class="fa fa-phone m-r-10"></i> 02-1234-5678</span>
                                </div>
                            </div>
                        </form>
	                    <?php echo $btn_copycode_str; ?>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 right-image p-r-0">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15084.490382777765!2d127.11576424334075!3d37.36325521141283!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x357b5825648315f1%3A0x1edcfd8990062629!2sJeongja-dong%2C%20Bundang-gu%2C%20Seongnam-si%2C%20Gyeonggi-do!5e0!3m2!1sen!2skr!4v1622922535315!5m2!1sen!2skr" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen data-aos="fade-left" data-aos-duration="3000"></iframe>
            </div>
        </div>
    </div>
    <textarea class="d-none _ta_section"></textarea>
    <!-- ============================================================== -->
    <!-- End Contact 4  -->
    <!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Container fluid  -->
<!-- ============================================================== -->

<?php
include_once(G5_THEME_PATH.'/tail.php');
?>