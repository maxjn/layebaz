<?php
include('inc/header.php')
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
                                    <th class="h5 mb-0 py-3 font-w-6" scope="col">نام کاربری</th>
                                    <th class="h5 mb-0 py-3 font-w-6" scope="col">نام</th>
                                    <th class="h5 mb-0 py-3 font-w-6" scope="col"> ایمیل</th>
                                    <th class="h5 mb-0 py-3 font-w-6" scope="col"> دسترسی</th>
                                    <th class="h5 mb-0 py-3 font-w-6" scope="col"></th>
                                </tr>
                            </thead>
                            <tbody class="border-top-0">
                                <tr>
                                    <td>
                                        <h6 class="mb-0">نام کاربری</h6>
                                    </td>
                                    <td>
                                        <h6 class="mb-0">نام</h6>
                                    </td>
                                    <td>
                                        <h6 class="mb-0">ایمیل</h6>
                                    </td>
                                    <td>
                                        <h6 class="mb-0">دسترسی</h6>
                                    </td>
                                    <td>
                                        <a href="" class="link-title h6">حذف
                                        </a>
                                        |
                                        <a href="" class="link-title h6">افزودن
                                        </a>
                                        |
                                        <a href="" class="link-title h6">ویرایش
                                        </a>
                                    </td>
                                </tr>

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