<?include "../inc/head_sub.php";?>
<?include "../inc/gnb.php";?>
<?include "../inc/header.php";?>

<div class="container_wrap">
  <div class="visual_wrap">
    <div class="visual sub_visual">
      <img src="../images/sub/sub_visual.jpg" alt="서브비주얼">
    </div><!-- visual -->
  </div><!-- visual_wrap -->

  <div class="container">
    <div class="cont_title">
      <h2>인테리어</h2>
      <img src="../images/sub/cont_title_dec.jpg" alt="">
    </div>
    <div class="content">
      <img src="/m/images/sub/c5-p2.jpg" alt="">

<div id="slick_area">
	<div class="slider-for">
		<div><img src="../images/sub/o1.jpg" alt=""></div>
		<div><img src="../images/sub/o2.jpg" alt=""></div>
		<div><img src="../images/sub/o3.jpg" alt=""></div>
		<div><img src="../images/sub/o4.jpg" alt=""></div>
		<div><img src="../images/sub/o5.jpg" alt=""></div>
		<div><img src="../images/sub/o6.jpg" alt=""></div>
		<div><img src="../images/sub/o7.jpg" alt=""></div>
	</div>
	<div class="slider-nav">
		<div><img  src="../images/sub/o1.jpg" alt=""></div>
		<div><img  src="../images/sub/o2.jpg" alt=""></div>
		<div><img  src="../images/sub/o3.jpg" alt=""></div>
		<div><img  src="../images/sub/o4.jpg" alt=""></div>
		<div><img  src="../images/sub/o5.jpg" alt=""></div>
		<div><img  src="../images/sub/o6.jpg" alt=""></div>
		<div><img  src="../images/sub/o7.jpg" alt=""></div>
	</div>
</div>

<style>
	.slider-for {
		margin-bottom: 50px;
	}
  .slick-dots {
    text-align: center;
  }
	.slick-prev:before, .slick-next:before {
		font-family: 'slick';
		font-size: 35px;
		line-height: 1;
		opacity: .95;
		color: white;
		-webkit-font-smoothing: antialiased;
		-moz-osx-font-smoothing: grayscale;
	}


</style>

<script>
	$(document).ready(function(){
   $('.slider-for').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    fade: true,
    dots: true,
    asNavFor: '.slider-nav'
  });
  $('.slider-nav').slick({
    slidesToShow: 2,
    slidesToScroll: 1,
    asNavFor: '.slider-for',
    arrows: false,
    centerMode: true,
    focusOnSelect: false
  });
})
</script>
    </div><!-- content -->
  </div><!-- container -->
</div><!-- container_wrap -->
<?include "../inc/footer.php";?>
