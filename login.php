<?php
include('inc/header.php')
?>

<!--hero section start-->

<section class="position-relative overflow-hidden">
    <div class="container">
        <div class="row text-center">
            <div class="col">
                <h1 class="mb-3">ورود</h1>
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

    <!--login start-->

    <section>
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-6 col-12">
                    <!-- Image -->
                    <lottie-player src="https://lottie.host/cbbc0c83-044c-4cf0-ba2e-54438fcbafd8/6M8MI7snvI.json"
                        background="transparent.html" speed="1" style="width: auto; height: auto;" loop autoplay>
                    </lottie-player>
                </div>
                <div class="col-lg-5 col-12 mt-5 mt-lg-0">
                    <div class="border border-light rounded-4 p-5">
                        <h2 class="mb-5">ورود ره حساب کاربری</h2>
                        <form id="contact-form" method="post" action="">
                            <div class="messages"></div>
                            <div class="form-group">
                                <input id="form_name" type="text" name="name" class="form-control"
                                    placeholder="نام کاربری" required>
                            </div>
                            <div class="form-group">
                                <input id="form_password" type="password" name="password" class="form-control"
                                    placeholder="رمز عبور" required>
                            </div>
                            <button class="btn btn-primary">ورود</button>
                        </form>
                        <div class="d-flex align-items-center mt-4"> <span class="text-muted me-1">حساب کاربری
                                ندارید؟</span>
                            <a href="signup.php">ثبت نام</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--login end-->
</div>

<!--body content end-->

<?php
include('inc/footer.php')
?>