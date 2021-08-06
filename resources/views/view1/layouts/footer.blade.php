<!--*******************************************star  footer-->

<footer id="footer">
    <p>امیر حسین مشایخی</p>
</footer>
<!--*******************************************end  footer-->
<!--***************************************************start script-->


<?php

$path_shop_single = '';
if (isset($id)) {
    $path_shop_single = 'home/shop_single/' . $id;

}
?>



@if (Request::path() == '/')
    <!--********* start home slider -->
    <script src="/mighat_asset/sliderHome/js/jssor.slider-28.1.0.min.js" type="text/javascript"></script>
    <script src="/mighat_asset/sliderHome/js/index.js" type="text/javascript"></script>
    <!--********* end home slider -->
    <!--********* start carousel -->

    <script src="/mighat_asset/js/flickity.pkgd.min.js"></script>
    <!--********* end carousel -->


@elseif(Request::path() =='home/employment')
    <!--********* start carousel -->
    <script src="/mighat_asset/js/flickity.pkgd.min.js"></script>
    <!--********* end carousel -->

@elseif(Request::path() =='home/shop'
||Request::path() =='home/shop_product'
||Request::path() =='home/shop_product_majale'
)
    <script src="/mighat_asset/js/flickity.pkgd.min.js"></script>
@elseif(Request::path() ==$path_shop_single)
    <!--***************************** start gallery slider khadamt refahi-->
    <script src="/mighat_asset/sliderGallery/js/jssor.slider-28.1.0.min.js" type="text/javascript"></script>
    <script src="/mighat_asset/sliderGallery/js/index.js" type="text/javascript"></script>
    <script type="text/javascript">jssor_1_slider_init()
    </script>

    <!--***************************** end gallery slider khadamt refahi-->
@endif




<!--<script src="/mighat_asset/js/bootstrap.min.js"></script>-->

<script src="/mighat_asset/js/index.js"></script>

<!--**************start pre animation loder js-->


<script src="/mighat_asset/js/jquery.min.js"></script>
<script src="/mighat_asset/js/index.js"></script>

<script>
    //paste this code under head tag or in a seperate js file.
    // Wait for window load
    $(window).load(function () {
        // Animate loader off screen
        $(".se-pre-con").fadeOut("slow");
        ;
    });
</script>

<!--**************end pre animation loder js-->

<!--***************************************************end script-->
</div>
</div>
<script src="{{ url('js/app.js') }}"></script>

</body>
</html>
