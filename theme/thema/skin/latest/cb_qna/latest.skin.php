<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$latest_skin_url.'/style.css">', 0);
$list_count = (is_array($list) && $list) ? count($list) : 0;
?>



        <div class="col-sm-4 col-md-4 pb-80">
          <div class=" about-wrap">
            <div class="block-title v-line">
              <h3><a href="<?php echo get_pretty_url($bo_table); ?>"><?php echo $bo_subject ?></a></h3>
            </div>
            <div class="padding-20 pt-10">
 <?php for ($i=0; $i<$list_count; $i++) {  ?>
              <div class="post-header">
                <h4><?php  if ($list[$i]['is_notice']) { ?> 
					<span class="qnaIco qnaIco1"><i class="fa fa-bullhorn" aria-hidden="true"></i> 공지사항</span>
				<?php } else {?>
					<?php if ($list[$i]['comment_cnt']) { ?>
					<span class="qnaIco qnaIco2"><i class="fa fa-smile-o" aria-hidden="true"></i> 답변완료</span>
					<?php } else {?>
					<span class="qnaIco qnaIco3"><i class="fa fa-spinner" aria-hidden="true"></i> 접수완료</span>
					<?php } ?>
				<?php } ?>
				<?php
           
            echo "<a href=\"".get_pretty_url($bo_table, $list[$i]['wr_id'])."\"> ";
            if ($list[$i]['is_notice'])
                echo "<strong>".$list[$i]['subject']."</strong>";
            else
                echo $list[$i]['subject'];

            echo "</a>";

            ?></h4>
              </div>

			  <hr class="divider">

 <?php }  ?>
    <?php if ($list_count == 0) { //게시물이 없을 때  ?>
    <li class="empty_li">게시물이 없습니다.</li>
    <?php }  ?>

              <div class="post-more-link pull-left"> <a href="<?php echo get_pretty_url($bo_table); ?>" class="btn-text mt-10"><?php echo $bo_subject ?> 더보기 <i class="fa fa-plus-circle" aria-hidden="true"></i></a> </div>
            </div>
          </div>
        </div>