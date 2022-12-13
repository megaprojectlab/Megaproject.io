<?php
if (!defined("_GNUBOARD_")) exit; // 개별 페이지 접근 불가
?>

<div class="card border mb-5">
    <div class="card-header">
        <h3 class="">
            <span class="badge badge-danger mr-1">답변</span>
	        <?php echo get_text($answer['qa_subject']); ?>
        </h3>
        <div class="">
            <ul class="list-inline d-inline mb-3">
                <li class="list-inline-item">
                    <i class="fa fa-clock mr-1" aria-hidden="true"></i><?php echo $answer['qa_datetime']; ?>
                </li>
            </ul>
            <div class="float-right">
                <ul class="list-inline mb-0">
                    <li class="list-inline-item">
                        <a href="<?php echo $answer_update_href; ?>" class="btn btn-link p-0" role="button" data-toggle="tooltip" data-placement="top" data-html="true" title="수정">
                            <i class="fas fa-edit text-danger" aria-hidden="true"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="<?php echo $answer_delete_href; ?>" class="btn btn-link p-0" role="button" onclick="del(this.href); return false;" class="btn btn-link p-0" data-toggle="tooltip" data-placement="top" data-html="true" title="삭제">
                            <i class="fas fa-trash text-danger" aria-hidden="true"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="card-body">
	    <?php echo get_view_thumbnail(conv_content($answer['qa_content'], $answer['qa_html']), $qaconfig['qa_image_width']); ?>
    </div>
    <div class="card-footer">
        <div class="row justify-content-center">
            <div class="col-sm-4">
                <a href="<?php echo $rewrite_href; ?>" class="btn btn-primary btn-block" role="button">추가질문</a>
            </div>
            <!--<div class="col-sm-4">
				<button type="submit" class="btn btn-light btn-block">창닫기</button>
			</div>-->
        </div>
    </div>
</div>

