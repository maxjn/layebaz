<?php
include('inc/header.php');
//وضعیت ورود کار بر را بررسی و در صورت وارد نشده بودن  به صفحه ورود هدایت می کند
if (!(isset($_SESSION["state_login"]) && $_SESSION["state_login"] === true)) {
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
?>
<!--hero section start-->

<section class="position-relative overflow-hidden">
    <div class="container">
        <div class="row text-center">
            <div class="col">
                <h1 class="mb-3">محصولات خریداری شده</h1>
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

    <!--cart start-->

    <section>
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="table-responsive border-bottom-0 p-5 shadow rounded">
                        <table class="cart-table table text-center mb-0 table-bordered">
                            <thead>
                                <tr>
                                    <th class="h5 mb-0 py-3 font-w-6" scope="col">محصول</th>
                                    <th class="h5 mb-0 py-3 font-w-6" scope="col">طراح</th>
                                    <th class="h5 mb-0 py-3 font-w-6" scope="col">قیمت</th>
                                    <th class="h5 mb-0 py-3 font-w-6" scope="col">تاریخ خرید</th>
                                    <th class="h5 mb-0 py-3 font-w-6" scope="col"> لینک دانلود</th>
                                </tr>
                            </thead>
                            <tbody class="border-top-0">
                                <?php
                                $query = "SELECT * FROM sells WHERE userid='{$_SESSION['userid']}' "; //کوئری گرفتن تمام خرید های کاربر
                                $result = mysqli_query($link, $query);
                                //حلقه نمایش خرید ها

                                while ($row = mysqli_fetch_array($result)) {
                                    //کوئری گرفتن اطلاعات محصول
                                    $query_product = "SELECT * FROM products WHERE productid='{$row['productid']}' ";
                                    $result_product = mysqli_query($link, $query_product);
                                    $row_product = mysqli_fetch_array($result_product);

                                    //کوئری گرفتن اطلاعات مربی
                                    $query_designer = "SELECT * FROM users WHERE userid='{$row_product['userid']}' ";
                                    $result_designer = mysqli_query($link, $query_designer);
                                    $row_designer = mysqli_fetch_array($result_designer);
                                ?>
                                <tr>
                                    <td>
                                        <div class="d-md-flex align-items-center">
                                            <a href="#">
                                                <img class="img-fluid rounded me-lg-3 mb-2 mb-lg-0"
                                                    src="assets/images/product/<?= $row_product['image'] ?>" alt=""
                                                    width="70" height="50">
                                            </a>
                                            <div class="text-start">
                                                <a href="product-detail.php?id=<?= $row['productid'] ?>"
                                                    class="product-name link-title h6"><?= $row_product['name'] ?>
                                                </a>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <h6 class="mb-0"><?= $row_designer['name'] ?></h6>
                                    </td>
                                    <td>
                                        <h6 class="mb-0"><?= $row_product['price'] ?></h6>
                                    </td>
                                    <td>
                                        <h6 class="mb-0"><?= $row['date'] ?></h6>
                                    </td>

                                    <td class="border-right-0">
                                        <button type="submit" class="btn btn-primary py-2 px-3 fs-3">
                                            <a class="bi bi-download " href="<?= $row_product['link'] ?>"></a>
                                        </button>
                                    </td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!--cart end-->
</div>

<!--body content end-->


<?php
include('inc/footer.php')
?>