<?php
include('inc/header.php');
//وضعیت ورود کار بر را بررسی و در صورت ورود قبلی به صفحه اصلی هدایت می کند
if (isset($_SESSION["state_login"]) && $_SESSION["state_login"] === true) {
?>
<script type="text/javascript">
location.replace("index.php");
</script>

<?php
    exit();
}
?>
<!--hero section start-->

<section class="position-relative overflow-hidden">
    <div class="container">
        <div class="row text-center">
            <div class="col">
                <h1 class="mb-3">ثبت نام</h1>
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

    <!--Sign Up start-->

    <section>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-12">
                    <div class="border border-light rounded-4 p-5">
                        <h2 class="mb-5 text-center">اطلاعات کاربری</h2>
                        <form id="signup" method="post" action="action-signup.php">
                            <div class="messages"></div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input id="form_name" type="text" name="UserName" class="form-control"
                                            placeholder="نام کاربری" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input id="form_name" type="text" name="Name" class="form-control"
                                            placeholder="نام نام خانوادگی" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input id="form_email" type="email" name="Email" class="form-control"
                                            placeholder="ایمیل" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input id="form_password" type="password" name="Password" class="form-control"
                                            placeholder="رمز عبور" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input id="form_password1" type="password" name="RepeatPassword"
                                            class="form-control" placeholder="تایید رمز عبور" required>
                                    </div>
                                </div>
                            </div>

                            <div class="row text-center">
                                <div class="col"> <button class="btn btn-primary" type="submit">ثبت نام</button>
                                    <span class="mt-4 d-block">حساب کاربری دارید؟<a
                                            href="login.php"><i>ورود!</i></a></span>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--Sign Up end-->

</div>

<!--body content end-->

<?php
include('inc/footer.php')
?>