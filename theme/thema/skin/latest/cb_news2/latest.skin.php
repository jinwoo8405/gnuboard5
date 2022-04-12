<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH.'/thumbnail.lib.php');

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$latest_skin_url.'/style.css">', 0);
$thumb_width = 500;
$thumb_height = 319;
$list_count = (is_array($list) && $list) ? count($list) : 0;
?>



		<div class="col-sm-6">

<?php
    for ($i=1; $i<$list_count; $i++) {
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


          <div class="about-block clearfix">
            <div class="post-img fl pr-30 pr-xs-0 half-width mb-20"> <a href="<?php echo $wr_href; ?>" class="lt_img"><?php echo run_replace('thumb_image_tag', $img_content, $thumb); ?></a> </div>
            <div class="text-box fl half-width">
              <div class="box-title"> <span class="postby"><a href="#"><?php echo $list[$i]['datetime'] ?></a></span>
                <h3><a href="<?php echo $wr_href; ?>"><?php echo cut_str($list[$i]['subject'], 14, "..") ?></a></h3>
              </div>
              <div class="text-content">
                <p> <?php echo cut_str($list[$i]['wr_content'], 70, "..") ?> </p>
              </div>
            </div>
          </div>
          <hr class="divider" />

 <?php }  ?>
    <?php if ($list_count == 0) { //게시물이 없을 때  ?>
    <li class="empty_li">게시물이 없습니다.</li>
    <?php }  ?>


          </div>

        </div>
      </div>
