<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/head.php');
    return;
}

include_once(G5_THEME_PATH.'/head.sub.php');
include_once(G5_LIB_PATH.'/latest.lib.php');
include_once(G5_LIB_PATH.'/outlogin.lib.php');
include_once(G5_LIB_PATH.'/poll.lib.php');
include_once(G5_LIB_PATH.'/visit.lib.php');
include_once(G5_LIB_PATH.'/connect.lib.php');
include_once(G5_LIB_PATH.'/popular.lib.php');
?>


<!-- Site Wraper -->
<div class="wrapper"> 
  <!-- HEADER -->
  <header id="header" class="header header-2">
    <div id="top-bar" class="top-bar-section top-bar-bg-color">
      <div class="container">
        <div class="row">
          <div class="col-sm-12"> 
            <!-- Top Contact -->
            <div class="top-contact link-hover-black hidden-xs"> <strong class="welcome-text">Welcome to Best in Business Solution since 1999</strong> </div>
            <!-- Top Social Icon -->
            <div class="top-social-icon icons-hover-black">
              <div class="icons-hover-black">
			  
			<ul class="hd_login">        
            <?php if ($is_member) {  ?>
            <li><a href="<?php echo G5_BBS_URL ?>/member_confirm.php?url=<?php echo G5_BBS_URL ?>/register_form.php">정보수정</a></li>
            <li><a href="<?php echo G5_BBS_URL ?>/logout.php">로그아웃</a></li>
            <?php if ($is_admin) {  ?>
            <li class="tnb_admin"><a href="<?php echo correct_goto_url(G5_ADMIN_URL); ?>">관리자</a></li>
            <?php }  ?>
            <?php } else {  ?>
            <li><a href="<?php echo G5_BBS_URL ?>/register.php">회원가입</a></li>
            <li><a href="<?php echo G5_BBS_URL ?>/login.php">로그인</a></li>
            <?php }  ?>

			</ul>
			
			</div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container secondary-header">
      <div class="row">
        <div class="col-sm-3 col-md-4">
          <div class="logo"> <a href="../index.php"><img src="<?php echo G5_THEME_URL; ?>/assets/images/logo.png" alt="Mega business"></a> </div>
          <button id="menu" class="menu visible-xs"></button>
        </div>
        <div class="col-sm-9 col-md-8 hidden-xs">
          <div class="call-us">
            <ul>
              <li class="top-space">
                <div class="icon-fa"><i class="fa fa-clock-o"></i></div>
                <div class="position">
                  <div class="time_block">Office Timing</div>
                  <div class="date-block">월 - 금 9:00 - 18:00</div>
                </div>
              </li>
              <li class="phone-nomber">
                <div class="text-right"> <i class="fa fa-phone"></i><span class="call-box"> Tel</span> </div>
                <a href="tel:0212345678">02-1234-5678</a> </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="primary-header">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <nav class="navigation">
				<ul>

                <?php
				$menu_datas = get_menu_db(0, true);
				$gnb_zindex = 999; // gnb_1dli z-index 값 설정용
                $i = 0;
                foreach( $menu_datas as $row ){
                    if( empty($row) ) continue;
                    $add_class = (isset($row['sub']) && $row['sub']) ? 'gnb_al_li_plus' : '';
                ?>
                <li>
                    <a href="<?php echo $row['me_link']; ?>" target="_<?php echo $row['me_target']; ?>"><?php echo $row['me_name'] ?></a>
                    <?php
                    $k = 0;
                    foreach( (array) $row['sub'] as $row2 ){

                        if( empty($row2) ) continue; 

                        if($k == 0)
                            echo '<span class="bg"><i class="ion-ios-plus-empty visible-xs"></i></span><ul class="sub-nav">'.PHP_EOL;
                    ?>
                        <li><a href="<?php echo $row2['me_link']; ?>" target="_<?php echo $row2['me_target']; ?>"><?php echo $row2['me_name'] ?></a></li>
                    <?php
                    $k++;
                    }   //end foreach $row2

                    if($k > 0)
                        echo '</ul>'.PHP_EOL;
                    ?>
                </li>
                <?php
                $i++;
                }   //end foreach $row

                if ($i == 0) {  ?>
                    <li class="gnb_empty">메뉴 준비 중입니다.<?php if ($is_admin) { ?> <a href="<?php echo G5_ADMIN_URL; ?>/menu_list.php">관리자모드 &gt; 환경설정 &gt; 메뉴설정</a>에서 설정하실 수 있습니다.<?php } ?></li>
                <?php } ?>
            </ul>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!-- END HEADER --> 






<!-- 상단 시작 { -->
<div id="hd">
    <h1 id="hd_h1"><?php echo $g5['title'] ?></h1>
    <div id="skip_to_container"><a href="#container">본문 바로가기</a></div>

    <?php
    if(defined('_INDEX_')) { // index에서만 실행
        include G5_BBS_PATH.'/newwin.inc.php'; // 팝업레이어
    }
    ?>

    
    <nav id="gnb">
        <h2>메인메뉴</h2>
        <div class="gnb_wrap">
            

        </div>
    </nav>
    <script>
    
    $(function(){
        $(".gnb_menu_btn").click(function(){
            $("#gnb_all, #gnb_all_bg").show();
        });
        $(".gnb_close_btn, #gnb_all_bg").click(function(){
            $("#gnb_all, #gnb_all_bg").hide();
        });
    });

    </script>
</div>
<!-- } 상단 끝 -->

<!-- 콘텐츠 시작 { -->


   
<?php if(defined('_INDEX_')) { ?>


<?php } else { ?>


  <!-- Intro Section -->
  <section class="inner-intro bg-img light-color overlay-before parallax-background">
    <div class="container">
      <div class="row title">
        <h1 data-title="<?php echo $group['gr_subject']; ?><?php echo $group['subject']; ?>"><span><?php echo $group['gr_subject']; ?><?php echo $group['subject']; ?></span></h1>
      </div>
    </div>
  </section>
  <!-- Intro Section -->




<!-- Service Section -->
  <div id="services-section" class="pt-40 pt-xs-60">
    <div class="container">
      <div class="row">
        <div class="col-md-3 col-sm-4 col-sx-12">


              <div class="img-block grid hidden-xs">
                <figure class="effect-sadie"> <img class="img-responsive" src="<?php echo G5_THEME_URL; ?>/assets/images/1.jpg" alt="Photo">
                  <figcaption>
                    <h2> <span> <?php echo $group['gr_subject']; ?><?php echo $group['subject']; ?></span></h2>
                    </figcaption>
                </figure>
              </div>


          <div class="single-sidebar-widget">
            <div class="special-links">
			<?if($group){?>
              <ul>
                <?
                if($gr_id<>"") {
                    $sql = " select bo_table, bo_subject from $g5[board_table] where gr_id = '$gr_id' order by bo_table ";
                    $result = sql_query($sql);
                    $array_new = sql_fetch(" select * from ".$g5['group_table']." where gr_subject = '".$group['gr_subject']."'");
                $i=1;
                while($row=sql_fetch_array($result)){
                ?>
                <li class="<?if($row['bo_table']==$bo_table){echo 'active';}?>"><a href="<? echo G5_BBS_URL ?>/board.php?bo_table=<?=$row['bo_table']?>"><span><?=$row['bo_subject']?></span></a>
                <?
                if($i % 1 == 0){
                    echo "</li>";
                    }
                    $i++;
                    }
                }
                ?>
              </ul>
			<?}?>
            </div>
          </div>
        </div>
        <div class="col-md-9 col-sm-8">

    <section>
		<div class="row">
			<div class="col-xs-12">
				<div class="lgx-heading-area">
					<ul class="breadcrumb">
						<li><a href="../index.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
						<li><?php echo $group['gr_subject']; ?><?php echo $group['subject']; ?></a></li>
						<li class="active"><?php echo $group2['subject']; ?><?php echo $board['bo_subject'] ?><?php echo $g5['title'] = $co['co_subject']; ?></li>
					</ul>
					<div class="lgx-heading lgx-heading-white">
						<h2 class="heading"><?php echo $group2['subject']; ?><?php echo $board['bo_subject'] ?><?php echo $g5['title'] = $co['co_subject']; ?></h2>
					</div>
				</div>
			</div>
		</div><!--//.ROW-->
    </section>
<hr>






<?php } ?>