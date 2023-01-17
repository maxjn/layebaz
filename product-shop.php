<?php
include('inc/header.php');
$link = mysqli_connect("localhost", "root", "", "layebazdb"); // ایجاد اتصال به پایگاه داده
if (mysqli_connect_errno()) //بازگرداندن خطای اتصال پایگاه داده
    exit("مشکلی در ارتباط پایگاه به جود امده :" . mysqli_connect_error());
mysqli_query($link, "set names utf8");
?>
<!--hero section start-->

<section class="position-relative overflow-hidden">
    <div class="container">
        <div class="row text-center">
            <div class="col">
                <h1 class="mb-3">محصولات</h1>
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

    <!--product start-->

    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 order-lg-1">
                    <div class="row text-center">
                        <?php
                        $query = "SELECT * FROM products ORDER BY productid DESC";             // کوئری نمايش تمام محصولات
                        $result = mysqli_query($link, $query);            //  اجراي کوئری
                        while ($row = mysqli_fetch_array($result)) {

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

    <!--product end-->

</div>

<!--body content end-->

<?php
include('inc/footer.php')
?>