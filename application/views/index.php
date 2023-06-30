<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once("includes/common-head.php"); ?>
</head>

<body class="home-style5">
    <?php include_once("includes/header.php"); ?>
    <main>

        <!-- ====== Slider Start ====== -->
        <section class="tc-breaking-news-style5 pt-2 pb-2">
            <div class="container">
                <div class="">
                    <div class="col-lg-12">
                        <div class="tc-post-overlay-style5 mb-5 mb-lg-0">
                            <div class="tc-post-overlay-slider5">
                                <div class="swiper-container">
                                    <div class="swiper-wrapper">
                                        <?php
                                        $i = 0;
                                        //<?= $i== 0 ? 'active':''?
                                        foreach ($slider_data as $s) {
                                        ?>
                                        <div class="swiper-slide">
                                        <div class="item">
                                        <div class="img th-525 img-cover">
                                        <img src="<?php echo base_url(); ?><?= $s->image ?>" alt="">
                                        </div>
                                        <div class="info">
                                        <h2 class="title mb-20">
                                        <?= $s->title ?>
                                        </h2>
                                    </div>
                                </div>
                            </div>
                            <?php $i++; } ?>
                            </div>
                        </div>
                        <!-- arrows -->
                        <div class="arrows">
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ====== Slider End ====== -->

        <!-- ====== Announcements & Updates ====== -->
        <section class="tc-post-grid-style5 overflow-hidden mt-3">
            <div class="container">
                <div class="content pb-50 border-1 border-bottom brd-gray">
                    <div class="row gx-5">
                        <div class="col-lg-6 border-1 border-end brd-gray mb-5 mb-lg-0">
                            <div class="item">
                                <div class="content">
                                    <h3 class="title mb-20">Announcements & Updates</h3>
                                    <hr>
                                    <marquee width="90%" direction="up" height="300px">
                                        <div class="tc-post-list-style5">
                                            <div class="items">
                                                <?php
                                                foreach ($announcements_data as $a) {

                                                    ?>
                                                    <div class="item pt-2">
                                                        <div class="row gx-0">
                                                            <div class="col-12 pe-10">
                                                                <div class="content">
                                                                    <div class="tags mb-15">
                                                                        <a
                                                                            href="#"><?= date("d/m/Y", strtotime($a->created_at)) ?></a>
                                                                    </div>
                                                                    <h5 class="title">
                                                                        <a href="<?=base_url()?>user/announcements/<?=$a->id?>"
                                                                            class="hover-underline">
                                                                            <?= $a->title ?>
                                                                        </a>
                                                                    </h5>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php } ?>
                                            </div>
                                        </div>
                                    </marquee>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="item">
                                <div class="content">
                                    <h4 class="title mb-20"> Have you earned your Transparency Key for 2021? </h4>
                                    <hr>
                                    <div class="text color-666 mb-20">Update your profile with 12A & ITR and get a free
                                        Transparency Key! Please enter your username and password below. If you have
                                        forgotten login details, visit Login and Update My Profile link on left panel.
                                    </div>
                                </div>
                                <h5>Login</h5>
                                <hr>
                                <form action="<?= base_url() ?>UserLogin\process_login_user" method="post">
                                    <div class="row text-center align-items-center">
                                        <div class="col-12 col-md-12  pb-3">
                                            <input type="text" class="form-control bdr-bottom" required id="email_login"
                                                placeholder="User Email" name="email"
                                                oninput="validate_email('email_login','login_email_error','btn_login')">
                                            <span id="login_email_error"></span>
                                        </div>
                                        <div class="col-12 col-md-12 pb-3">
                                            <input type="password" class="form-control bdr-bottom" required
                                                name="password" placeholder="Password">
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <button type="button" class="btn btn-outline-secondary w-100 p-2"
                                                data-bs-toggle="modal"
                                                data-bs-target="#ngoregistration">Registration</button>
                                        </div>
                                        <div class="col-12 col-md-6 text-end">
                                            <button type="submit" id="btn_login"
                                                class="btn btn-outline-secondary w-100 p-2">Login</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ====== end Announcements & Updates ====== -->
        <!-- ====== start about-history ====== -->
        <section class="tc-about-page">
            <div class="tc-about-history ">
                <div class="container">
                    <div class="title mb-80">
                        <div class="row align-items-center">
                            <div class="col-lg-6">
                                <p class="fsz-13px text-white text-uppercase mb-10"> URGENT </p>
                                <h2 class="fsz-30px text-white"> Requirements </h2>
                            </div>
                            <div class="col-lg-6">
                                <div class="arrows justify-content-lg-end">
                                    <div class="swiper-button-prev"></div>
                                    <div class="swiper-button-next"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="content">
                        <div class="tc-about-history-slider">
                            <div class="swiper-container overflow-visible">
                          
                                <div class="swiper-wrapper">
                                <?php
                                    foreach ($requirement_data as $a) {

                                        ?>
                                        <div class="swiper-slide">
                                            <div class="history-card">
                                                <div class="card-title mb-30">
                                                    <p class="fsz-13px color-main"><?=show_organisation_name($a->user_id)?> </p>
                                                    <h5 class="fsz-22px fw-bold"><?=$a->title?></h5>
                                                </div>
                                                <div class="text fsz-14px color-666 mb-20">
                                               
                                                <?php
                                                $string = strip_tags($a->description);
                                                    if (strlen($string) > 20) {
                                                        // truncate string
                                                        $stringCut = substr($string, 0, 100);
                                                        $endPoint = strrpos($stringCut, ' ');
                                                        //if the string doesn't contain any space then it will cut without word basis.
                                                        $string = $endPoint? substr($stringCut, 0, $endPoint) : substr($stringCut, 0);
                                                        $string .= '... <br><br><a href="'.base_url("user/requirements/$a->id").'">Read More</a>';
                                                    }
                                                    echo $string;
                                                ?>
                                                </div>
                                                <!-- <a href="#"> Read More </a> -->
                                            </div>
                                        </div>
                                        <?php } ?>
                                    </div>
                               
                            </div>
                          
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ====== end about-history ====== -->
        
        <!-- ====== start About Us ====== -->
        <section class="tc-post-grid-style5 mt-5 overflow-hidden">
            <div class="container">
                <div class="content pb-50 border-1 border-bottom brd-gray">
                    <div class="row gx-5">
                        <div class="col-lg-12 border-1  brd-gray mb-5 mb-lg-0">
                            <div class="item">
                                <div class="content">
                                    <h2 class="title mb-20">About Us</h2>
                                    <div class="text color-666 mb-20 ">
                                        <?php
                                            $string = strip_tags($about_us->content);
                                            if (strlen($string) >150) {
                                                // truncate string
                                                $stringCut = substr($string, 0, 100);
                                                $endPoint = strrpos($stringCut, ' ');
                                                //if the string doesn't contain any space then it will cut without word basis.
                                                $string = $endPoint? substr($stringCut, 0, $endPoint) : substr($stringCut, 0);
                                                $string .= '[...]';
                                            }
                                            echo $string;
                                        ?>
                                        <br><br><a href='<?=base_url("$about_us->url/$about_us->id")?>' class="ancor-tag">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ====== end About Us ====== -->
    </main>
    <!--End-Contents-->
    <!-- ====== Registration Modal  ====== -->
    <div class="modal fade" id="ngoregistration" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Register Yourself !</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i
                            class="la la-times text-white fs-18"></i></button>
                </div>
                <span id="show_msg"></span>
                <div class="modal-body">
                    <form action="<?= base_url() ?>user/user_register" method="post">
                        <div class="row text-center align-items-center">
                            <div class="col-12 col-md-9  pb-3">
                                <input type="email" name="email" id="email" class="form-control bdr-bottom"
                                    placeholder="Enter Email Id"
                                    oninput="validate_email('email','email_error','otp_btn')" required>
                                <span id="email_error"></span>
                            </div>
                            <div class="col-12 col-md-3 text-end mt--40">
                                <button type="button" class="btn btn-outline-secondary w-100 p-2" onclick="showOtp()"
                                    id="otp_btn"> Sent OTP</button>
                            </div>
                        </div>
                        <div class="row text-center align-items-center" style="display:none" id="otpDiv">
                            <div class="col-12 col-md-9  pb-3">
                                <input type="number" class="form-control bdr-bottom" id="otp_id"
                                    placeholder="Enter OTP" required>
                                    <span id="otp_error"></span>
                            </div>
                            <div class="col-12 col-md-3 text-end mt--40">
                                <button type="button" class="btn btn-outline-secondary w-100 btn-sm  p-2"
                                    onclick="showPassword()">Verify</button>
                                   
                            </div>
                        </div>
                        <div class="row text-center align-items-center" style="display:none" id="passwordDiv">
                            <div class="col-12 col-md-12  pb-3">
                                <input type="password" name="password" required id="password"
                                    class="form-control bdr-bottom" placeholder="Enter Password" required>
                            </div>
                            <div class="col-12 col-md-12  pb-3">
                                <input type="password" id="confirm_password" required class="form-control bdr-bottom"
                                    oninput="matchPassword('password','confirm_password','password_error','password_id')"
                                    placeholder="Re-Type Password" required>
                                <span id="password_error"></span>
                            </div>
                            <div class="col-12 col-md-12 text-end">
                                <button type="submit" id="password_id"
                                    class="btn btn-secondary w-100 btn-sm  p-2">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- ====== end Registration Modal ====== -->
    <script>
        function showOtp() {
            var email = document.getElementById('email').value;
            if(email!=""){
            $.ajax({
                url: "<?= base_url() ?>user/send_otp",
                method: "POST",
                data: { email: email },
                success: function (response) {
                    //alert (response);
                    if (response == 1) {
                        document.getElementById('otpDiv').style.display = "flex";
                    }
                }
            });
            document.getElementById('email_error').innerHTML="";
            document.getElementById('email_error').style.color="";
        }else{
            document.getElementById('email_error').innerHTML="Email field is required";
            document.getElementById('email_error').style.color="red";
        }
        }
        function showPassword() {

            var otp_id = document.getElementById('otp_id').value;
            var email = document.getElementById('email').value;
            var msg = document.getElementById('show_msg');
            if(otp_id){
            $.ajax({
                url: "<?= base_url() ?>user/verify_otp",
                method: "POST",
                data: { otp_id: otp_id, email: email },
                success: function (response) {
                    if (response == 1 ) {
                        document.getElementById('passwordDiv').style.display = "flex";
                        msg.innerHTML = "";
                        msg.style.color = "";
                    }else{
                        msg.innerHTML = "Invalid otp";
                        msg.style.color = "red";
                    }
                    
                }
            });
            document.getElementById('otp_error').innerHTML="";
            document.getElementById('otp_error').style.color="";
        }
        else{
                        document.getElementById('otp_error').innerHTML="OTP field is required";
                        document.getElementById('otp_error').style.color="red";
        }
        }

    </script>
    <?php include_once("includes/footer.php"); ?>
</body>

</html>