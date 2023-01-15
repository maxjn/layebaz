<?php
include('inc/header.php')
?>

<!--hero section start-->

<section class="position-relative overflow-hidden">
    <div class="container">
        <div class="row text-center">
            <div class="col">
                <h1 class="mb-3">نام محصول</h1>

            </div>
        </div>
        <!-- / .row -->
    </div>
    <!-- / .container -->
    <div class="position-absolute animation-1">
        <lottie-player src="https://lottie.host/59ba3e9a-bef6-400b-adbb-0eb8c20c9f65/WPBRmjAinD.json"
            background="transparent.html" speed="1" style="width: auto; height: auto;" loop autoplay></lottie-player>
    </div>
</section>

<!--hero section end-->


<!--body content start-->

<div class="page-content">

    <!--Product start-->

    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-12 pe-lg-10">
                    <img class="img-fluid w-100 rounded-4 mb-5" src="assets/images/product/01.jpg" alt="">
                    <h2>نام محصول</h2>
                    <p class="lead text-dark mb-3">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با
                        استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم
                        است، و برای شرایط فعلی تکنولوژی مورد نیاز، و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می
                    </p>


                </div>
                <div class="col-lg-4 col-12">
                    <div class="bg-white shadow p-5 rounded-4">
                        <h4 class="mb-4">اطلاعت محصول</h4>
                        <ul class="cases-meta list-unstyled text-muted">
                            <li class="mb-3 border-bottom border-light pb-3">
                                <span class="text-dark font-w-6"> محصول : </span> کاور پست
                            </li>
                            <li class="mb-3 border-bottom border-light pb-3">
                                <span class="text-dark font-w-6"> طراح : </span> نام طراح
                            </li>
                            <li class="mb-3 border-light pb-3">
                                <span class="text-dark font-w-6"> قیمت : </span>200000
                            </li>
                        </ul>
                        <a class="btn btn-primary" href="product-checkout.php">خرید</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--Product end-->

</div>

<!--body content end-->
<?php
include('inc/footer.php')
?>