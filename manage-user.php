<?php
include('inc/header.php');
//بررسی مدیر بودن کاربر وارد شده
if (!(isset($_SESSION["state_login"]) && $_SESSION["state_login"] === true && $_SESSION["user_type"] ==
    "admin")) {
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

$query = "SELECT * FROM users ORDER BY userid DESC "; // کوئری گرفتن کلاس های ثبت نامی کاربران
$result = mysqli_query($link, $query);
?>
<!--hero section start-->

<section class="position-relative overflow-hidden">
    <div class="container">
        <div class="row text-center">
            <div class="col">
                <h1 class="mb-3">مدیریت کاربران </h1>
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
                                    <th class="h5 mb-0 py-3 font-w-6" scope="col">#</th>
                                    <th class="h5 mb-0 py-3 font-w-6" scope="col">نام کاربری</th>
                                    <th class="h5 mb-0 py-3 font-w-6" scope="col">نام</th>
                                    <th class="h5 mb-0 py-3 font-w-6" scope="col"> ایمیل</th>
                                    <th class="h5 mb-0 py-3 font-w-6" scope="col"> دسترسی</th>
                                    <th class="h5 mb-0 py-3 font-w-6" scope="col"></th>
                                </tr>
                            </thead>
                            <tbody class="border-top-0">
                                <?php //حلقه نمایش کاربران
                                while ($row = mysqli_fetch_array($result)) {
                                    $usertype = 'عمومی';
                                    if ($row['type'] == 1) {
                                        $usertype = 'مدیر';
                                    } elseif ($row['type'] == 2) {
                                        $usertype = 'فروشنده';
                                    }
                                ?>
                                <tr>
                                    <td>
                                        <h6 class="mb-0"><?= $row['userid'] ?></h6>
                                    </td>
                                    <td>
                                        <h6 class="mb-0"><?= $row['username'] ?></h6>
                                    </td>
                                    <td>
                                        <h6 class="mb-0"><?= $row['name'] ?></h6>
                                    </td>
                                    <td>
                                        <h6 class="mb-0"><?= $row['email'] ?></h6>
                                    </td>
                                    <td>
                                        <h6 class="mb-0"><?= $usertype ?></h6>
                                    </td>
                                    <td>
                                        <a href="action-manage-user.php?id=<?= $row['userid'] ?>&type=0"
                                            class="link-title h6">عمومی
                                        </a>
                                        |
                                        <a href="action-manage-user.php?id=<?= $row['userid'] ?>&type=2"
                                            class="link-title h6">فروشنده
                                        </a>
                                        |
                                        <a href="action-manage-user.php?id=<?= $row['userid'] ?>&type=1"
                                            class="link-title h6">مدیر
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

    <!--cart end-->
</div>

<!--body content end-->


<?php
include('inc/footer.php')
?>