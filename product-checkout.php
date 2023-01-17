<?php
include('inc/header.php');
$product_id = 0;
if (isset($_GET['id'])) //گرفتن آیدی از داخل لینک
    $product_id = $_GET['id'];
//بررسی وارد شده بودن کاربر. اگر کاربر وارد نشده بود به لاگین منتقل شود
if (!(isset($_SESSION["state_login"]) && $_SESSION["state_login"] === true) || $product_id == 0) {
    $_SESSION["alert"] = "First";
?>
<script type='text/javascript'>
location.replace('login.php');
</script>
<?php
    exit();
}

$link = mysqli_connect("localhost", "root", "", "layebazdb"); // ایجاد اتصال به پایگاه داده
if (mysqli_connect_errno()) //بازگرداندن خطای اتصال پایگاه داده
    exit("مشکلی در ارتباط پایگاه به جود امده :" . mysqli_connect_error());
mysqli_query($link, "set names utf8");


$query = "SELECT * FROM products WHERE productid='$product_id'";

$result = mysqli_query($link, $query);            //  اجراي کوئری گرفتن اطلاعات محصول
if ($row = mysqli_fetch_array($result)) {

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
                        <form class="row" action="action-checkout.php" method="post">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="font-w-6">کد محصول</label>
                                    <input type="text" name="ProductId" class="form-control" placeholder="کد محصول"
                                        value="<?= $product_id ?>" style="background-color: rgba(169,169,169,0.75)"
                                        readonly>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="font-w-6">نام محصول </label>
                                    <input type="text" name="ProductName" class="form-control" placeholder="نام محصول"
                                        value="<?= $row['name'] ?>" style="background-color: rgba(169,169,169,0.75)"
                                        readonly>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="font-w-6">نام خریدار</label>
                                    <input type="text" name="Name" class="form-control" placeholder="نام خریدار"
                                        value="<?= $_SESSION['name'] ?>"
                                        style="background-color: rgba(169,169,169,0.75)" readonly>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="font-w-6">قیمت محصول</label>
                                    <input type="text" name="Price" class="form-control" placeholder="قیمت محصول"
                                        value="<?= $row['price'] ?> هزار تومان"
                                        style="background-color: rgba(169,169,169,0.75)" readonly>
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
                                <span> <?= $row['name'] ?> </span> <span><?= $row['price'] ?> هزار تومان</span>
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
    include('inc/footer.php');
} else {

?>
<script type='text/javascript'>
location.replace('login.php');
</script>
<?php
    exit();
}
?>