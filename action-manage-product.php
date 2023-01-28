<?php
session_start();
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
$alert = "<script type='text/javascript'>
        <!--
        location.replace('manage-product.php');
        -->
        </script>";

//بررسي پر بودن فیلد ها در صورتی که اکشن حذف نبود
if (!(isset($_GET['action']) && $_GET['action'] == 'DELETE')) {

    if ((isset($_POST['Name']) && !empty(Trim($_POST['Name'])) &&
        isset($_POST['Price']) && !empty(Trim($_POST['Price'])) &&
        isset($_POST['Link']) && !empty(Trim($_POST['Link'])) &&
        isset($_POST['Description']) && !empty(Trim($_POST['Description'])))) {
        // ذخيره اطلاعاتي
        $ProductId = $_POST['ProductId'];
        $Name = $_POST['Name'];
        $Price = $_POST['Price'];
        $Link = $_POST['Link'];
        $Description = $_POST['Description'];
        $Picture = basename($_FILES["Image"]["name"]);
    } else { // خروج و تعین خطای آن به دلیل خالی بودن فیلد
        $_SESSION["alert"] = "Empty";
        echo ($alert);
        exit();
    }
}


$link = mysqli_connect("localhost", "root", "", "layebazdb"); // ایجاد اتصال به پایگاه داده
if (mysqli_connect_errno()) //بازگرداندن خطای اتصال پایگاه داده
    exit("مشکلی در ارتباط پایگاه به جود امده :" . mysqli_connect_error());
mysqli_query($link, "set names utf8");

//ویرایش و حذف تور
if (isset($_GET['action'])) {

    $id = $_GET['id'];

    switch ($_GET['action']) {
            //ویرایش
        case 'EDIT':
            $query = "UPDATE `products` SET `name`='$Name',`description`='$Description',`link`='$Link',`price`='$Price' WHERE productid = '$id'";

            if (mysqli_query($link, $query) === true) { //ویرایش موفق
                $_SESSION["alert"] = "SucEdit";
                echo ($alert);
                exit();
            } else { //ویرایش ناموفق
                $_SESSION["alert"] = "FailEdit";
                echo ($alert);
                exit();
            }

            break;
            //حذف
        case 'DELETE':

            $query = "SELECT image  FROM products
                WHERE productid='$id'"; //کوئری گرفتن تصویر محصول
            $result = mysqli_query($link, $query);
            $row = mysqli_fetch_array($result);
            $Picture = $row['image'];
            //کوئری حذف محصول
            $query = "DELETE  FROM products
             WHERE productid='$id'";

            if (mysqli_query($link, $query) === true) { //حذف موفق
                $_SESSION["alert"] = "SucDelet";
                unlink("assets/images/product/" . $Picture); //حذف تصویر محصول در فایل ها
                echo ($alert);
                exit();
            } else { //حذف ناموفق
                $_SESSION["alert"] = "FailDelet";
                echo ($alert);
                exit();
            }
            break;
    } //switch
    mysqli_close($link);
    exit();
} //if


$target_dir = "assets/images/product/";
$target_file = $target_dir . basename($_FILES["Image"]["name"]);
$imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);

//بررسی تصویر بودن فایل
$check = getimagesize($_FILES["Image"]["tmp_name"]);
if ($check == false) {
    $_SESSION["alert"] = "NotImg";
    echo ($alert);
    exit();
}

//بررسی موجود بودن از قبل
if (file_exists($target_file)) {
    $_SESSION["alert"] = "ImgExists";
    echo ($alert);
    exit();
}

//بررسی پسوند تصویر
if (
    $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType !=
    "jpeg" && $imageFileType != "gif"
) {
    $_SESSION["alert"] = "ImgType";
    echo ($alert);
    exit();
}
//ارسال تصویر به پوشه هاست
if (!(move_uploaded_file($_FILES["Image"]["tmp_name"], $target_file))) {
    $_SESSION["alert"] = "ImgSend";
    echo ($alert);
    exit();
}
//افزودن رکورد جدید
$query = "INSERT INTO `products`( `userid`, `name`, `description`, `link`, `image`, `price`)
 VALUES ('{$_SESSION['userid']}','$Name','$Description','$Link','$Picture','$Price')";

if (mysqli_query($link, $query) === true) {
    $_SESSION["alert"] = "SucInsert";
    echo ($alert);
} else {
    $_SESSION["alert"] = "FailInsert";
    echo ($alert);
}


mysqli_close($link);