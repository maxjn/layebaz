<?php
include('inc/header.php')
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
                                    <th class="h5 mb-0 py-3 font-w-6" scope="col">قیمت</th>
                                    <th class="h5 mb-0 py-3 font-w-6" scope="col"> لینک دانلود</th>
                                </tr>
                            </thead>
                            <tbody class="border-top-0">
                                <tr>
                                    <td>
                                        <div class="d-md-flex align-items-center">
                                            <a href="#">
                                                <img class="img-fluid rounded me-lg-3 mb-2 mb-lg-0"
                                                    src="assets/images/product/01.jpg" alt="" width="70" height="50">
                                            </a>
                                            <div class="text-start">
                                                <a href="product-single.html" class="product-name link-title h6">کاور
                                                    پست
                                                </a>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <h6 class="mb-0">$75.00</h6>
                                    </td>

                                    <td class="border-right-0">
                                        <button type="submit" class="btn btn-primary py-2 px-3 fs-3">
                                            <i class="bi bi-download"></i>
                                        </button>
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