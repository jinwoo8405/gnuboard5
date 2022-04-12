<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH.'/thumbnail.lib.php');

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$latest_skin_url.'/style.css">', 0);
$thumb_width = 450;
$thumb_height = 414;
$list_count = (is_array($list) && $list) ? count($list) : 0;
?>

<div class="width-25per dark-bg  fl">
      <div class=" light-color plr-20 m-height ">
        <div class="block-title mt-40">
          <h2> <a href="<?php echo get_pretty_url($bo_table); ?>"><?php echo $bo_subject ?></a></h2>
          <p class="italic"> 채러티비즈니스의 제품입니다. </p>
        </div>
        <div class="block-content">
          <p> FHD Carreview Portable Touch Monitor 시리즈</p>
        </div>
      </div>
    </div>
    <div class="width-75per fl grid">
      <div id="project">

<?php
    for ($i=0; $i<$list_count; $i++) {
    $thumb = get_list_thumbnail($bo_table, $list[$i]['wr_id'], $thumb_width, $thumb_height, false, true);

    if($thumb['src']) {
        $img = $thumb['src'];
    } else {
        $img = G5_IMG_URL.'/no_img.png';
        $thumb['alt'] = '이미지가 없습니다.';
    }
    $img_content = '<img class="img-responsive" src="'.$img.'" alt="'.$thumb['alt'].'" >';
    $wr_href = get_pretty_url($bo_table, $list[$i]['wr_id']);
    ?>
        <div class="items">
          <figure class="effect-goliath"> <a href="<?php echo $wr_href; ?>" class="lt_img"><?php echo run_replace('thumb_image_tag', $img_content, $thumb); ?></a>
            <figcaption>
              <h2><span><?php
           
            echo " ";
            if ($list[$i]['is_notice'])
                echo "<span>".$list[$i]['subject']."</span>";
            else
                echo $list[$i]['subject'];

            echo "";

            ?></span></h2>
              <p> <?php echo cut_str(strip_tags($list[$i]['wr_content']),30,"…")?> </p>
              <a href="<?php echo $wr_href; ?>">View more</a> </figcaption>
          </figure>
        </div>

 <?php }  ?>
    <?php if ($list_count == 0) { //게시물이 없을 때  ?>
    <li class="empty_li">게시물이 없습니다.</li>
    <?php }  ?>
      </div>
    </div>