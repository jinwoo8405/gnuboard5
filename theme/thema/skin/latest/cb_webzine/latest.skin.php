<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH.'/thumbnail.lib.php');

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$latest_skin_url.'/style.css">', 0);
$thumb_width = 70;
$thumb_height = 70;
$list_count = (is_array($list) && $list) ? count($list) : 0;
?>



        <div class="col-sm-6 col-md-6 pb-80">
          <div class=" about-wrap">
            <div class="block-title v-line">
              <h3><a href="<?php echo get_pretty_url($bo_table); ?>"><?php echo $bo_subject ?></a></h3>
            </div>



            <div class="padding-20 pt-10">


<?php
    for ($i=0; $i<$list_count; $i++) {
    $thumb = get_list_thumbnail($bo_table, $list[$i]['wr_id'], $thumb_width, $thumb_height, false, true);

    if($thumb['src']) {
        $img = $thumb['src'];
    } else {
        $img = G5_IMG_URL.'/no_img.png';
        $thumb['alt'] = '이미지가 없습니다.';
    }
    $img_content = '<img src="'.$img.'" alt="'.$thumb['alt'].'" >';
    $wr_href = get_pretty_url($bo_table, $list[$i]['wr_id']);
    ?>


              <div class="entry-thumbnail media-left">  <a href="<?php echo $wr_href; ?>" class="lt_img"><?php echo run_replace('thumb_image_tag', $img_content, $thumb); ?></a> </div>
              <!-- /.entry-thumbnail -->
              <div class="post-content media-body">
                <p class="entry-title"> <?php
           
            echo "<a href=\"".get_pretty_url($bo_table, $list[$i]['wr_id'])."\"> ";
            if ($list[$i]['is_notice'])
                echo "<strong>".$list[$i]['subject']."</strong>";
            else
                echo $list[$i]['subject'];

            echo "</a>";

            ?> </p>
                <div class="post-meta">
                  <?php echo $list[$i]['datetime'] ?>
                </div>
                <!-- /.post-meta --> 
              </div>
              <!-- /.post-content --> 

              <div class="post-meta mb-30"> </div>
			  <hr>

 <?php }  ?>
    <?php if ($list_count == 0) { //게시물이 없을 때  ?>
    <li class="empty_li">게시물이 없습니다.</li>
    <?php }  ?>

              <div class="post-more-link pull-left"> <a href="<?php echo get_pretty_url($bo_table); ?>" class="btn-text mt-10"><?php echo $bo_subject ?> 더보기 <i class="fa fa-plus-circle" aria-hidden="true"></i></a> </div>
            </div>
          </div>
        </div>