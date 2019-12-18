<script src="assets/js/jQuery3.4.1.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/swiper.min.js"></script>
<script src="assets/js/jquery.fancybox.min.js"></script>
<!--<script src="assets/js/jquery.fancybox.min.js"></script>-->
<script>
    $(document).ready(function () {

        var swiper = new Swiper('.theSlider .swiper-container', {
            navigation: {
                nextEl: '.theSlider .swiper-button-next',
                prevEl: '.theSlider .swiper-button-prev',
            },
            pagination: {
                el: '.theSlider .swiper-pagination',
                clickable: true,
            },
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
        });

        var swiper = new Swiper('.newSection .swiper-container', {
            slidesPerView: 4,
            spaceBetween: 0,
            slidesPerGroup: 1,
            loop: true,
            loopFillGroupWithBlank: true,
            navigation: {
                nextEl: '.newSection .swiper-button-next',
                prevEl: '.newSection .swiper-button-prev',
            },
        });


    });
</script>