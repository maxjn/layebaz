<?php
include('inc/header.php')
?>
<section class="position-relative overflow-hidden">
    <div class="container">
        <div class="row text-center">
            <div class="col">
                <h1 class="mb-3">پرداخت</h1>
            </div>
        </div>
        <!-- / .row -->
    </div>
    <!-- / .container -->
    <div class="position-absolute animation-1">
        <lottie-player src="https://lottie.host/59ba3e9a-bef6-400b-adbb-0eb8c20c9f65/WPBRmjAinD.json"
            background="transparent.html" speed="1" style="width: auto; height: auto;" loop autoplay>
        </lottie-player>
    </div>
</section>
<!--hero section end-->



<!--body content start-->

<div class="page-content">

    <!--checkout start-->

    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-12">
                    <div class="checkout-form shadow bg-white p-5 rounded-4">
                        <h2 class="mb-4">اطلاعات خرید</h2>
                        <form class="row" action="" method="post">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="font-w-6">کد خریدار</label>
                                    <input type="text" id="fname" class="form-control" placeholder="کد خریدار">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="font-w-6">نام خریدار</label>
                                    <input type="text" id="fname" class="form-control" placeholder="نام خریدار">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="font-w-6">کد محصول</label>
                                    <input type="text" id="lname" class="form-control" placeholder="کد محصول">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="font-w-6">نام محصول </label>
                                    <input type="text" id="lname" class="form-control" placeholder="نام محصول">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="font-w-6">قیمت محصول</label>
                                    <input type="text" id="lname" class="form-control" placeholder="قیمت محصول">
                                </div>
                            </div>
                            <button class="btn btn-primary btn-block mt-5" type="submit">پرداخت</button>

                        </form>
                    </div>
                </div>
                <div class="col-lg-5 col-md-12 mt-6 mt-lg-0">

                    <div class="p-3 p-lg-5 border rounded-4">
                        <h3 class="mb-3">محصول در حال خرید</h3>
                        <ul class="list-unstyled">
                            <li class="mb-3 border-bottom pb-3">
                                <span>نام محصول </span> <span>قیمت</span>
                            </li>

                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!--checkout end-->

</div>

<!--body content end-->
<?php
include('inc/footer.php')
?>