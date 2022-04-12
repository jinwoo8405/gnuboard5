<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
?>

<?php if ($is_admin == 'super') {  ?><!-- <div style='float:left; text-align:center;'>RUN TIME : <?php echo get_microtime()-$begin_time; ?><br></div> --><?php }  ?>

<!-- ie6,7에서 사이드뷰가 게시판 목록에서 아래 사이드뷰에 가려지는 현상 수정 -->
<!--[if lte IE 7]>
<script>
$(function() {
    var $sv_use = $(".sv_use");
    var count = $sv_use.length;

    $sv_use.each(function() {
        $(this).css("z-index", count);
        $(this).css("position", "relative");
        count = count - 1;
    });
});
</script>
<![endif]-->

<?php run_event('tail_sub'); ?>


<script src="<?php echo G5_THEME_URL; ?>/assets/js/jquery-1.12.4.min.js" type="text/javascript"></script> 

<!-- Easing Effect Js --> 
<script src="<?php echo G5_THEME_URL; ?>/assets/js/plugin/jquery.easing.js" type="text/javascript"></script> 
<!-- bootstrap Js --> 
<script src="<?php echo G5_THEME_URL; ?>/assets/js/bootstrap.min.js" type="text/javascript"></script> 
<!-- carousel Js --> 
<script src="<?php echo G5_THEME_URL; ?>/assets/js/plugin/owl.carousel.js" type="text/javascript"></script> 
<!--Light box js-->
<script src="<?php echo G5_THEME_URL; ?>/assets/js/plugin/jquery.mousewheel-3.0.6.pack.js" type="text/javascript"></script>
<script src="<?php echo G5_THEME_URL; ?>/assets/js/plugin/jquery.fancybox.pack.js" type="text/javascript"></script>

<!-- revolution Js --> 
<script type="text/javascript" src="<?php echo G5_THEME_URL; ?>/assets/js/jquery.themepunch.tools.min.js"></script> 
<script type="text/javascript" src="<?php echo G5_THEME_URL; ?>/assets/js/jquery.themepunch.revolution.min.js"></script> 
<script type="text/javascript" src="<?php echo G5_THEME_URL; ?>/assets/extensions/revolution.extension.slideanims.min.js"></script> 
<script type="text/javascript" src="<?php echo G5_THEME_URL; ?>/assets/extensions/revolution.extension.layeranimation.min.js"></script> 
<script type="text/javascript" src="<?php echo G5_THEME_URL; ?>/assets/extensions/revolution.extension.navigation.min.js"></script> 
<script type="text/javascript" src="<?php echo G5_THEME_URL; ?>/assets/extensions/revolution.extension.parallax.min.js"></script> 
<script type="text/javascript" src="<?php echo G5_THEME_URL; ?>/assets/js/jquery.revolution.js"></script> 

<!-- masonry Js --> 
<script src="<?php echo G5_THEME_URL; ?>/assets/js/plugin/isotope.pkgd.min.js" type="text/javascript"></script> 
<!-- Map api Js --> 
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false&.js"></script> 
<!-- custom Js --> 
<script src="<?php echo G5_THEME_URL; ?>/assets/js/custom.js" type="text/javascript"></script>


</body>
</html>
<?php echo html_end(); // HTML 마지막 처리 함수 : 반드시 넣어주시기 바랍니다.