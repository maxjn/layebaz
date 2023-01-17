<?php
include('inc/header.php');
$link = mysqli_connect("localhost", "root", "", "layebazdb"); // ایجاد اتصال به پایگاه داده
if (mysqli_connect_errno()) //بازگرداندن خطای اتصال پایگاه داده
    exit("مشکلی در ارتباط پایگاه به جود امده :" . mysqli_connect_error());
mysqli_query($link, "set names utf8");
?>
<!--hero section start-->
<section class="overflow-hidden position-relative">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-lg-6 order-lg-1 ms-auto mb-8 mb-lg-0">
                <!-- Image -->
                <lottie-player src="https://lottie.host/3ddc0e30-a9f7-48e1-9b8d-a0ead2fa5ee4/JrQpGMHV6n.json"
                    background="transparent.html" speed="1" style="width: auto; height: auto;" loop autoplay>
                </lottie-player>
            </div>
            <div class="col-12 col-lg-5">
                <h1 class="font-w-4 mb-4">مثل آب خوردن<span
                        class="title-bg text-primary position-relative font-w-7 d-inline-block"> دیزاین خودتو</span>
                    <br class="d-md-block d-none"> طراحی کن.
                </h1>
                <!-- Text -->
                <p class="lead text-dark mb-5">اگه وقت و هزینه کافی برا استخدام یه طراح گرافیکو نداری فایلای لایه باز ما
                    اینجان تا مشکلتو حل کنن :)</p>

            </div>
        </div>
        <!-- / .row -->
    </div>
    <!-- / .container -->
    <div class="position-absolute animation-1">
        <lottie-player src="https://lottie.host/0de28702-1a29-48d3-892d-16f278889351/i4201FkTJi.json"
            background="transparent.html" speed="1" style="width: auto; height: auto;" loop autoplay></lottie-player>
    </div>
</section>
<!--hero section end-->


<!--body content start-->

<div class="page-content">

    <!--feature start-->
    <section class="px-lg-7 px-2 pb-0">
        <div class="bg-light py-10 px-3 px-lg-8 rounded-4 position-relative overflow-hidden">
            <div class="container z-index-1">
                <div class="row align-items-end justify-content-between mb-6">
                    <div class="col-12 col-lg-6 col-xl-5">
                        <div>
                            <h2>چرا خرید طرح لایه باز؟</h2>
                        </div>
                    </div>
                </div>
                <div class="row gx-5">
                    <div class="col-lg-4 col-md-6">
                        <div class="bg-white p-6 rounded-4 f-icon-hover">
                            <div class="mb-4 rounded f-icon-shape-sm" data-bg-color="#ffebda">
                                <i class="bi bi-fast-forward fs-1 text-dark"></i>
                            </div>
                            <div>
                                <h5 class="mb-3">اجرای سریع پروژه‌های طراحی فتوشاپ</h5>
                                <p class="mb-4">یکی از مزایای استفاده از psd یا طرح‌های لایه باز این است که پروژه‌های
                                    گرافیکی با
                                    سرعت بالا انجام می‌شود؛ بطوری که شما با صرف کمترین زمان ممکن می‌توانید با به کار
                                    بردن طرح‌های لایه
                                    باز پروژه‌های گرافیکی خود را به اتمام برسانید. </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mt-6 mt-md-0">
                        <div class="bg-white p-6 rounded-4 f-icon-hover">
                            <div class="mb-4 rounded f-icon-shape-sm" data-bg-color="#dbf9f9">
                                <i class="bi bi-filetype-psd fs-1 text-dark"></i>
                            </div>
                            <div>
                                <h5 class="mb-3">قابلیت استفاده چندین باره از طرح PSD</h5>
                                <p class="mb-4">یکی از ویژگی‌های نادر و البته اصلی طرح‌های لایه باز این است که می‌توان
                                    برای چندین
                                    بار بدون هیچ محدودیتی از آن استفاده کرد. </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mt-6 mt-lg-0">
                        <div class="bg-white p-6 rounded-4 f-icon-hover">
                            <div class="mb-4 rounded f-icon-shape-sm" data-bg-color="#faedff">
                                <i class="bi bi-bag-heart fs-1 text-dark"></i>
                            </div>
                            <div>
                                <h5 class="mb-3">چگونه طرح لایه باز تهیه کنیم؟</h5>
                                <p class="mb-4">به فروشگاه ما سر بزنید زیباترین و با کیفیت ترین طرح های لایه باز با تنوع
                                    بسیار بالا
                                    را به شما عرضه میکنیم :)</p>
                                <a class="btn-arrow" href="product-shop.php"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="position-absolute animation-2">
                <lottie-player src="https://lottie.host/07242462-1734-4c98-95e6-25d242832636/EPSY6EuqM7.json"
                    background="transparent.html" speed="1" style="width: auto; height: auto;" loop autoplay>
                </lottie-player>
            </div>
        </div>
    </section>
    <!--feature end-->


    <!--counter start-->
    <section>
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-12 col-xl-5 col-lg-6 mb-8 mb-lg-0 position-relative">
                    <div class="row gx-5 align-items-center text-center z-index-1">
                        <div class="col-lg-6 col-md-6">
                            <div class="counter bg-white rounded-4 p-5 py-7 shadow">
                                <span class="number count text-dark" data-count="200">200</span>
                                <span class="text-dark">+</span>
                                <h6 class="mb-0 text-muted">فایل ها</h6>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 mt-5">
                            <div class="counter bg-white rounded-4 p-5 py-7 shadow">
                                <span class="number count text-dark" data-count="450">450</span>
                                <span class="text-dark">+</span>
                                <h6 class="mb-0 text-muted">فروشنده ها</h6>
                            </div>
                            <div class="counter bg-white rounded-4 p-5 py-7 shadow mt-7">
                                <span class="number count text-dark" data-count="666">666</span>
                                <span class="text-dark">+</span>
                                <h6 class="mb-0 text-muted">مشتریان راضی</h6>
                            </div>
                        </div>
                    </div>
                    <div class="position-absolute animation-1 opacity-1">
                        <lottie-player src="https://lottie.host/aaf17c17-a765-4ec7-b65e-26c3489ee543/yHrgKWUDiE.json"
                            background="transparent.html" speed="1" style="width: auto; height: auto;" loop autoplay>
                        </lottie-player>
                    </div>
                </div>
                <div class="col-12 col-xl-6 col-lg-6">
                    <div>
                        <h2>به دنبال راهی برای کسب درآمد میگردید؟</h2>
                        <p class="lead mb-4">با درخواست ارتقا حساب کاربری خود میتوانید به عنوان فروشنده در سایت ما
                            فعالیت کنید و
                            از مزایای فروش آنلاین محصولات خود بهره مند شوید.
                        </p>
                    </div>
                    <div class="d-flex align-items-start mb-3">
                        <div class="me-3">
                            <i class="bi bi-check2-all fs-2 text-primary"></i>
                        </div>
                        <div>
                            <h6 class="mb-2">دسترسی به مشتریان بالقوه</h6>
                            <p class="mb-0">ما پلتفرمی را فراهم آورده ایم تا به راحتی از مزیت دسترسی به مشتریان بالقوه
                                بهره مند
                                شوید.</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-start">
                        <div class="me-3">
                            <i class="bi bi-check2-all fs-2 text-primary"></i>
                        </div>
                        <div>
                            <h6 class="mb-2">بدون پورسانت</h6>
                            <p class="mb-0">تمام فروش های شما در سال اول متعلق به خودتان خواهد بود.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--counter end-->

    <!-- Last Products -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 order-lg-1">
                    <div class="row text-center">
                        <?php
                        $counter = 0;
                        $query = "SELECT * FROM products ORDER BY productid DESC";             // کوئری نمايش 3 محصول آخر
                        $result = mysqli_query($link, $query);            //  اجراي کوئری
                        while ($row = mysqli_fetch_array($result)) {
                            if ($counter == 3) {
                                break;
                            }
                            $counter++;
                        ?>
                        <!-- product  -->
                        <div class="col-lg-4 col-md-6">
                            <div class="product-item shadow p-4 rounded-4">
                                <div class="product-img">
                                    <img class="img-fluid rounded-4" src="assets/images/product/<?= $row['image'] ?>"
                                        alt="">
                                </div>
                                <div class="product-desc">
                                    <a href="product-detail.php?id=<?= $row['productid'] ?>"
                                        class="product-name mt-4 mb-2 d-block link-title h6">
                                        <?= $row['name'] ?></a>
                                    <span class="product-price text-dark"><?= $row['price'] ?> هزار تومان </span>
                                    <div class="product-link mt-3">
                                        <a class="add-cart" href="product-detail.php?id=<?= $row['productid'] ?>">
                                            <i class="bi bi-bag-check me-2"></i>خرید</a>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- product ###  -->
                        <?php
                        } ?>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- Last Products -->


    <!--testimonial start-->

    <section class="px-lg-7 px-2 pb-0">
        <div class="bg-light-2 py-10 px-3 px-lg-8 rounded-4">
            <div class="container">
                <div class="row justify-content-center text-center mb-6">
                    <div class="col-12 col-lg-8">
                        <div>
                            <h2>نظرات کاربران سایت</h2>
                        </div>
                    </div>
                </div>
                <div class="row mx-lg-n10">
                    <div class="col">
                        <div class="owl-carousel owl-center" data-center="true" data-dots="false" data-nav="true"
                            data-items="3" data-md-items="2" data-sm-items="1" data-margin="30">
                            <div class="item">
                                <div class="card p-3 p-md-5 border-0 bg-white rounded-4">
                                    <div class="card-body p-0">
                                        <p class="font-w-5 lead mb-3">به عنوان کسی که کسب و کار آنلاین خودم رو در
                                            اینستاگرام مدیریت
                                            میکردم باید به مشتری ها رسیدگی میکردم و وقت کافی برا استخدام یه طراح گرافیک
                                            نداشتم. لایه باز
                                            به من کمک کرده به راحتی زیباترین فایل ها را برای پست کردن محصولاتم در
                                            اینستاگرام آماده کنم.
                                        </p>
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div class="d-flex align-items-center">
                                                <div>
                                                    <img alt="Image" src="assets/images/testimonial/01.jpg"
                                                        class="img-fluid rounded-circle">
                                                </div>
                                                <div class="ms-3">
                                                    <span class="font-w-6 text-dark mb-0">طاها فرجی</span>
                                                    <small class="text-muted fst-italic">- کاربر عادی</small>
                                                </div>
                                            </div>
                                            <i class="bi bi-quote fs-1 text-dark"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="card p-3 p-md-5 border-0 bg-white rounded-4">
                                    <div class="card-body p-0">
                                        <p class="font-w-5 lead mb-3">قبل لایه باز هرگز نمیتونستم برای کار هام به این
                                            راحتی مشتری پیدا
                                            کنم. ولی حالا کارهام به راحتی حتی زمانی که خواب هستم هم فروش میرن.ممنونم
                                            برای این پلتفرم فوق
                                            العاده که کار مارو انقدر آسون کرده.</p>
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div class="d-flex align-items-center">
                                                <div>
                                                    <img alt="Image" src="assets/images/testimonial/02.jpg"
                                                        class="img-fluid rounded-circle">
                                                </div>
                                                <div class="ms-3">
                                                    <span class="font-w-6 text-dark mb-0">سارا احمدی</span>
                                                    <small class="text-muted fst-italic">- فروشنده</small>
                                                </div>
                                            </div>
                                            <i class="bi bi-quote fs-1 text-dark"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="card p-3 p-md-5 border-0 bg-white rounded-4">
                                    <div class="card-body p-0">
                                        <p class="font-w-5 lead mb-3">به عنوان کسی که کسب و کار آنلاین خودم رو در
                                            اینستاگرام مدیریت
                                            میکردم باید به مشتری ها رسیدگی میکردم و وقت کافی برا استخدام یه طراح گرافیک
                                            نداشتم. لایه باز
                                            به من کمک کرده به راحتی زیباترین فایل ها را برای پست کردن محصولاتم در
                                            اینستاگرام آماده کنم.
                                        </p>
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div class="d-flex align-items-center">
                                                <div>
                                                    <img alt="Image" src="assets/images/testimonial/03.jpg"
                                                        class="img-fluid rounded-circle">
                                                </div>
                                                <div class="ms-3">
                                                    <span class="font-w-6 text-dark mb-0">مینا طاهری</span>
                                                    <small class="text-muted fst-italic">- کاربر عادی</small>
                                                </div>
                                            </div>
                                            <i class="bi bi-quote fs-1 text-dark"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="card p-3 p-md-5 border-0 bg-white rounded-4">
                                    <div class="card-body p-0">
                                        <p class="font-w-5 lead mb-3">قبل لایه باز هرگز نمیتونستم برای کار هام به این
                                            راحتی مشتری پیدا
                                            کنم. ولی حالا کارهام به راحتی حتی زمانی که خواب هستم هم فروش میرن.ممنونم
                                            برای این پلتفرم فوق
                                            العاده که کار مارو انقدر آسون کرده.</p>
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div class="d-flex align-items-center">
                                                <div>
                                                    <img alt="Image" src="assets/images/testimonial/04.jpg"
                                                        class="img-fluid rounded-circle">
                                                </div>
                                                <div class="ms-3">
                                                    <span class="font-w-6 text-dark mb-0">علی بابایی</span>
                                                    <small class="text-muted fst-italic">- فروشنده</small>
                                                </div>
                                            </div>
                                            <i class="bi bi-quote fs-1 text-dark"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--testimonial end-->


    <!--portfolio start-->

    <section>
        <div class="container">
            <div class="row align-items-end mb-8">
                <div class="col-12 col-md-12 col-lg-5">
                    <div>
                        <h2 class="mb-5 mb-lg-0">دسته بندی محصولات ما.</h2>
                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-6 ms-auto">
                    <div class="portfolio-filter d-sm-flex align-items-center justify-content-lg-end">
                        <button data-filter="" class="is-checked mb-2 mb-sm-0">همه</button>
                        <button data-filter=".cat1" class="mb-2 mb-sm-0">کاور پست</button>
                        <button data-filter=".cat2">کارت ویزیت</button>
                        <button data-filter=".cat3">پوستر</button>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="grid columns-3 row popup-gallery">
                        <div class="grid-sizer"></div>
                        <div class="grid-item col-lg-4 col-md-6 mb-5 cat1">
                            <div class="portfolio-item hover-translate position-relative bg-white shadow p-3 rounded-4">
                                <img class="img-fluid w-100 rounded-4" src="assets/images/product/01.jpg" alt="">
                                <div class="portfolio-title d-flex justify-content-between align-items-center mt-3">
                                    <div>
                                        <small class="mb-2">کاور پست</small>
                                        <h6 class="mb-0">
                                            <a class="btn-link" href="product-shop.php">کاور پست طرح موزیک</a>
                                        </h6>
                                    </div>
                                    <a class="popup-img btn-link" href="assets/images/product/01.jpg">
                                        <i class="bi bi-patch-plus fs-4"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="grid-item col-lg-4 col-md-6 mb-5 cat1">
                            <div class="portfolio-item hover-translate position-relative bg-white shadow p-3 rounded-4">
                                <img class="img-fluid w-100 rounded-4" src="assets/images/product/02.jpg" alt="">
                                <div class="portfolio-title d-flex justify-content-between align-items-center mt-3">
                                    <div>
                                        <small class="mb-2">کاور پست</small>
                                        <h6 class="mb-0">
                                            <a class="btn-link" href="product-shop.php">کاور پست طرح انگلیسی</a>
                                        </h6>
                                    </div>
                                    <a class="popup-img btn-link" href="assets/images/product/02.jpg">
                                        <i class="bi bi-patch-plus fs-4"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="grid-item col-lg-4 col-md-6 mb-5 cat1">
                            <div class="portfolio-item hover-translate position-relative bg-white shadow p-3 rounded-4">
                                <img class="img-fluid w-100 rounded-4" src="assets/images/product/03.jpg" alt="">
                                <div class="portfolio-title d-flex justify-content-between align-items-center mt-3">
                                    <div>
                                        <small class="mb-2">کاور پست</small>
                                        <h6 class="mb-0">
                                            <a class="btn-link" href="product-shop.php">کاور پست طرح سمینار</a>
                                        </h6>
                                    </div>
                                    <a class="popup-img btn-link" href="assets/images/product/03.jpg">
                                        <i class="bi bi-patch-plus fs-4"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="grid-item col-lg-4 col-md-6 mb-5 mb-lg-0 cat3">
                            <div class="portfolio-item hover-translate position-relative bg-white shadow p-3 rounded-4">
                                <img class="img-fluid w-100 rounded-4" src="assets/images/product/04.jpg" alt="">
                                <div class="portfolio-title d-flex justify-content-between align-items-center mt-3">
                                    <div>
                                        <small class="mb-2">پوستر </small>
                                        <h6 class="mb-0">
                                            <a class="btn-link" href="product-shop.php">پوستر لوازم آرایشی</a>
                                        </h6>
                                    </div>
                                    <a class="popup-img btn-link" href="assets/images/product/04.jpg">
                                        <i class="bi bi-patch-plus fs-4"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="grid-item col-lg-4 col-md-6 mb-5 mb-md-0 cat3">
                            <div class="portfolio-item hover-translate position-relative bg-white shadow p-3 rounded-4">
                                <img class="img-fluid w-100 rounded-4" src="assets/images/product/05.jpg" alt="">
                                <div class="portfolio-title d-flex justify-content-between align-items-center mt-3">
                                    <div>
                                        <small class="mb-2">پوستر</small>
                                        <h6 class="mb-0">
                                            <a class="btn-link" href="product-shop.php">پوستر کفش</a>
                                        </h6>
                                    </div>
                                    <a class="popup-img btn-link" href="assets/images/product/05.jpg">
                                        <i class="bi bi-patch-plus fs-4"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="grid-item col-lg-4 col-md-6 cat2">
                            <div class="portfolio-item hover-translate position-relative bg-white shadow p-3 rounded-4">
                                <img class="img-fluid w-100 rounded-4" src="assets/images/product/06.jpg" alt="">
                                <div class="portfolio-title d-flex justify-content-between align-items-center mt-3">
                                    <div>
                                        <small class="mb-2">کارت ویزیت</small>
                                        <h6 class="mb-0">
                                            <a class="btn-link" href="product-shop.php">کارت فروشگاه </a>
                                        </h6>
                                    </div>
                                    <a class="popup-img btn-link" href="assets/images/product/06.jpg">
                                        <i class="bi bi-patch-plus fs-4"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--portfolio end-->

</div>

<!--body content end-->
<?php
include('inc/footer.php')
?>