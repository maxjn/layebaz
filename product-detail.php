<?php
include('inc/header.php');
$link = mysqli_connect("localhost", "root", "", "layebazdb"); // ایجاد اتصال به پایگاه داده
if (mysqli_connect_errno()) //بازگرداندن خطای اتصال پایگاه داده
    exit("مشکلی در ارتباط پایگاه به جود امده :" . mysqli_connect_error());
mysqli_query($link, "set names utf8");


$product_id = 0;
if (isset($_GET['id']))
    $product_id = $_GET['id'];

$query = "SELECT * FROM products WHERE productid='$product_id'";

$result = mysqli_query($link, $query);            //  اجراي کوئری گرفتن اطلاعات محصول
if ($row = mysqli_fetch_array($result)) {
    $designer_id = $row['userid'];
    $query_designer = "SELECT * FROM users WHERE userid='$designer_id'";

    $result_designer = mysqli_query($link, $query_designer);            //  اجراي کوئری گرفتن اطلاعات طراح
    $row_designer = mysqli_fetch_array($result_designer);
?>

<!--hero section start-->

<section class="position-relative overflow-hidden">
    <div class="container">
        <div class="row text-center">
            <div class="col">
                <h1 class="mb-3"><?= $row['name'] ?> </h1>

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
                    <img class="img-fluid w-100 rounded-4 mb-5" src="assets/images/product/<?= $row['image'] ?>" alt="">
                    <h2><?= $row['name'] ?></h2>
                    <p class="lead text-dark mb-3"><?= $row['description'] ?></p>


                </div>
                <div class="col-lg-4 col-12">
                    <div class="bg-white shadow p-5 rounded-4">
                        <h4 class="mb-4">اطلاعت محصول</h4>
                        <ul class="cases-meta list-unstyled text-muted">
                            <li class="mb-3 border-bottom border-light pb-3">
                                <span class="text-dark font-w-6"> محصول : </span> <?= $row['name'] ?>
                            </li>
                            <li class="mb-3 border-bottom border-light pb-3">
                                <span class="text-dark font-w-6"> طراح : </span> <?= $row_designer['name'] ?>
                            </li>
                            <li class="mb-3 border-light pb-3">
                                <span class="text-dark font-w-6"> قیمت : </span><?= $row['price'] ?> هزار تومان
                            </li>
                        </ul>


                        <?php
                            if (isset($_SESSION["state_login"]) && $_SESSION["state_login"] === true) {
                                $query_sell = "SELECT * FROM sells WHERE userid='{$_SESSION['userid']}' AND productid='$product_id'";
                                $result_sell = mysqli_query($link, $query_sell);    //  جراي کوئری برای برسی خرید های کاربر
                                //اگر کاربر وارد شده بود و محصول را خریده بود لینک دانلود نمایش داده خواهد شد
                                if ($row_sell = mysqli_fetch_array($result_sell)) {
                            ?>
                        <a class="btn btn-primary" href="<?= $row['link'] ?>">دانلود محصول</a>
                        <?php
                                } else {
                                ?>
                        <a class="btn btn-primary" href="product-checkout.php?id=<?= $row['productid'] ?>">خرید</a>
                        <?php
                                }
                            } else { ?>
                        <a class="btn btn-primary" href="product-checkout.php?id=<?= $row['productid'] ?>">خرید</a>
                        <?php }  ?>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--Product end-->

</div>


<!--body content end-->
<?php
}
include('inc/footer.php')
?>