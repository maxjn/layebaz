<?php
include('inc/header.php');
//بررسی مدیر یا فروشنده بودن کاربر وارد شده
if (!(isset($_SESSION["state_login"]) && $_SESSION["state_login"] === true &&
    ($_SESSION["user_type"] == "admin" || $_SESSION["user_type"] == "seller"))) {
?>
<script type="text/javascript">
//انتقال به صفحه اصلی

location.replace("index.php");
</script>
<?php
} // if پایان

$link = mysqli_connect("localhost", "root", "", "layebazdb"); // ایجاد اتصال به پایگاه داده
if (mysqli_connect_errno()) //بازگرداندن خطای اتصال پایگاه داده
    exit("مشکلی در ارتباط پایگاه به جود امده :" . mysqli_connect_error());
mysqli_query($link, "set names utf8");

$url = $product_id = $name = $description = $product_link = $image = $price = "";
// اکشن دکمه ویرایش
$btn_caption = "افزودن";
if (isset($_GET['action']) && $_GET['action'] == 'EDIT') {
    $id = $_GET['id'];
    if ($_SESSION["user_type"] == "admin") {
        $query = "SELECT * FROM products WHERE productid='$id'"; // کوئری نمايش محصول
    } else {

        $query = "SELECT * FROM products WHERE productid='$id' AND userid='{$_SESSION['userid']}'"; // کوئری نمايش محصول
    } //کوئری گرفتن اطلاعات محصول
    $result = mysqli_query($link, $query);
    if ($row = mysqli_fetch_array($result)) {
        $product_id = $row['productid'];
        $name = $row['name'];
        $description = $row['description'];
        $image = $row['image'];
        $price = $row['price'];
        $product_link = $row['link'];
        $url = "?id=$product_id&action=EDIT";
        $btn_caption = "ويرايش";
    }
}

?>
<!--hero section start-->

<section class="position-relative overflow-hidden">
    <div class="container">
        <div class="row text-center">
            <div class="col">
                <h1 class="mb-3">مدیریت محصولات </h1>
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

    <!--Product Form start-->

    <section>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-12">
                    <div class="border border-light rounded-4 p-5">
                        <h2 class="mb-5 text-center">محصول </h2>
                        <form id="manage_product" method="post"
                            action="action-manage-product.php<?= (!empty($url)) ? $url : ''; ?>"
                            enctype="multipart/form-data">
                            <div class="messages"></div>
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <input id="form_name" type="text" name="ProductId" class="form-control"
                                            placeholder="کد محصول" value="<?= $product_id ?>"
                                            style="background-color: rgba(169,169,169,0.75)" readonly="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input id="form_name" type="text" name="Name" class="form-control"
                                            placeholder="نام محصول" value="<?= $name ?>" required>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <input id="form_name" type="number" name="Price" class="form-control"
                                            placeholder="قیمت محصول" value="<?= $price ?>" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input id="form_name" type="text" name="Link" class="form-control"
                                            placeholder=" لینک دانلود" value="<?= $product_link ?>">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input id="form_email" type="file" name="Image" class="form-control"
                                            placeholder="تصویر" value="assets/images/product/<?= $image  ?>">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <textarea id="form_name" type="number" name="Description" cols="41"
                                            class="form-erea" placeholder=" توضیحات محصول "
                                            required><?= $description ?></textarea>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="class-img">
                                            <img src="assets/images/product/<?= $image ?>" alt=" " width="400"
                                                height="300">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row text-center">
                                <div class="col">
                                    <button class="btn btn-primary" type="submit"><?= $btn_caption ?></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--Product Form end-->

    <!--Table start-->

    <section>
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="table-responsive border-bottom-0 p-5 shadow rounded">
                        <table class="cart-table table text-center mb-0 table-bordered">
                            <thead>
                                <tr>
                                    <th class="h5 mb-0 py-3 font-w-6" scope="col">#</th>
                                    <th class="h5 mb-0 py-3 font-w-6" scope="col">محصول</th>
                                    <th class="h5 mb-0 py-3 font-w-6" scope="col">قیمت</th>
                                    <?php
                                    if ($_SESSION["user_type"] == "admin") {
                                    ?>
                                    <th class="h5 mb-0 py-3 font-w-6" scope="col">کد طراح</th>
                                    <th class="h5 mb-0 py-3 font-w-6" scope="col">نام طراح</th>
                                    <?php } ?>

                                    <th class="h5 mb-0 py-3 font-w-6" scope="col">تعداد فروش</th>
                                    <th class="h5 mb-0 py-3 font-w-6" scope="col"></th>
                                </tr>
                            </thead>
                            <tbody class="border-top-0">
                                <?php
                                if ($_SESSION["user_type"] == "admin") {
                                    $query = "SELECT * FROM products ORDER BY productid DESC"; // کوئری نمايش محصول ها
                                } else {

                                    $query = "SELECT * FROM products WHERE userid='{$_SESSION['userid']}' ORDER BY productid DESC "; // کوئری نمايش محصول ها
                                }
                                $result = mysqli_query($link, $query); //اجرا کوئری

                                while ($row = mysqli_fetch_array($result)) {
                                ?>
                                <tr>
                                    <td>
                                        <h6 class="mb-0"><?= $row['productid'] ?></h6>
                                    </td>
                                    <td>
                                        <div class="d-md-flex align-items-center">
                                            <a href="#">
                                                <img class="img-fluid rounded me-lg-3 mb-2 mb-lg-0"
                                                    src="assets/images/product/<?= $row['image'] ?>" alt="image"
                                                    width="70" height="50">
                                            </a>
                                            <div class="text-start">
                                                <a href="product-single.html" class="product-name link-title h6">
                                                    <?= $row['name'] ?>
                                                </a>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <h6 class="mb-0"><?= $row['price'] ?></h6>
                                    </td>
                                    <?php
                                        if ($_SESSION["user_type"] == "admin") {
                                            $query_user = "SELECT * FROM users WHERE userid='{$row['userid']}'"; // کوئری گرفتن اطلاعات طراح
                                            $result_user = mysqli_query($link, $query_user);
                                            $row_user = mysqli_fetch_array($result_user);
                                        ?>
                                    <td>
                                        <h6 class="mb-0"><?= $row['userid'] ?></h6>
                                    </td>
                                    <td>
                                        <h6 class="mb-0"> <?= $row_user['name'] ?></h6>
                                    </td>
                                    <?php } ?>
                                    <?php
                                        $query_sell = "SELECT COUNT(*) FROM sells WHERE productid='{$row['productid']}'"; // کوئری برگرداندن تعداد فرش ها
                                        $result_sell = mysqli_query($link, $query_sell);
                                        $row_sell = mysqli_fetch_array($result_sell);
                                        ?>
                                    <td>
                                        <h6 class="mb-0"> <?= $row_sell['COUNT(*)'] ?></h6>
                                    </td>
                                    <td>
                                        <a href="action-manage-product.php?id=<?= $row['productid'] ?>&action=DELETE"
                                            class="link-title h6">حذف
                                        </a>
                                        |
                                        <a href="manage-product.php?id=<?= $row['productid'] ?>&action=EDIT"
                                            class="link-title h6">ویرایش
                                        </a>
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

    <!--Table end-->
</div>

<!--body content end-->


<?php
include('inc/footer.php')
?>