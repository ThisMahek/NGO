<!-- ====== start footer ====== -->
<?php $data=$this->db->get('setting')->row();?>
<footer class="footer-style5 pt-80">
    <div class="container">
        <div class="content">
            <div class="row justify-content-between">
                <div class="col-lg-4">
                    <div class="info">
                        <h6 class="foot-tilte mb-40">Newzin - Business Magazine</h6>
                        <ul class="contact-info m-0">
                            <li>
                                <i class="la la-home me-2"></i>
                                <span><?=$data->address?></span>
                            </li>
                            <li>
                                <i class="la la-phone me-2"></i>
                                <span>+<?=$data->alt_mob_no?></span>
                            </li>
                            <li>
                                <i class="la la-envelope me-2"></i>
                                <span><?=$data->email?></span>
                            </li>
                        </ul>
                        <div class="social-links mt-50">
                            <a href="<?=$data->twitter?>" target="blank">
                                <i class="la la-twitter"></i>
                            </a>
                            <a href="<?=$data->facebook?>" target="blank">
                                <i class="la la-facebook-f"></i>
                            </a>
                            <a href="<?=$data->instagram?>" target="blank">  
                                <i class="la la-instagram"></i>
                            </a>
                            <a href="<?=$data->youtube?>" target="blank">
                                <i class="la la-youtube"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 mt-5 mt-lg-0">
                    <div class="link-group">
                        <h6 class="foot-tilte mb-40">Topics</h6>
                        <ul>
                            <li>
                                <a href="#" class="f-link">News</a>
                            </li>
                            <li>
                                <a href="#" class="f-link">business</a>
                            </li>
                            <li>
                                <a href="#" class="f-link">Tech</a>
                            </li>
                            <li>
                                <a href="#" class="f-link">politics</a>
                            </li>
                            <li>
                                <a href="#" class="f-link">economy</a>
                            </li>
                            <li>
                                <a href="#" class="f-link">market</a>
                            </li>
                            <li>
                                <a href="#" class="f-link">Videos</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 mt-5 mt-lg-0">
                    <div class="link-group">
                        <h6 class="foot-tilte mb-40">Help</h6>
                        <ul>
                            <li>
                                <a href="#" class="f-link">About</a>
                            </li>
                            <li>
                                <a href="#" class="f-link">Contact</a>
                            </li>
                            <li>
                                <a href="#" class="f-link">Advertise</a>
                            </li>
                            <li>
                                <a href="#" class="f-link">Career</a>
                            </li>
                            <li>
                                <a href="#" class="f-link">Policy</a>
                            </li>
                            <li>
                                <a href="#" class="f-link">FAQ</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 mt-5 mt-lg-0">
                    <div class="newsletter">
                        <h6 class="foot-tilte mb-40">newsletter</h6>
                        <div class="cont">
                            <div class="text">
                                Register now to get latest updates on promotions & coupons.
                            </div>
                            <form class="form mt-30">
                                <div class="form-group">
                                    <span class="icon">
                                        <i class="la la-envelope"></i>
                                    </span>
                                    <input type="text" placeholder="Enter your email">
                                    <button type="submit">
                                        <span> <i class="la la-send"></i> </span>
                                    </button>
                                </div>
                                <p class="text fst-italic fsz-14px mt-15 fw-light color-ccc">By subscribing, you
                                    accepted our <a href="#"
                                        class="text-decoration-underline fst-normal text-white">Policy</a></p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="foot mt-100 pb-60">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <div class="d-flex align-items-end">
                        <a href="#" class="foot-logo">
                            <img src="<?php echo base_url(); ?><?=$data->logo?>" alt="" width="25%">
                        </a>
                        <div class="text ps-70 fsz-14px color-ccc">
                            © 2023 Copyrights by <span class="text-white">Newzin</span>. All Rights Reserved.
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 text-lg-end">
                    <div class="foot-lang">
                        <div class="another-lang-links">
                            <a href="#" class="lang-link text-white">
                                <span class="flag icon-20 rounded-circle overflow-hidden img-cover me-3">
                                    <img src="<?php echo base_url(); ?>user_assets/img/ar.svg" alt="">
                                </span>
                                <span> arabic </span>
                            </a>
                            <a href="#" class="lang-link text-white">
                                <span class="flag icon-20 rounded-circle overflow-hidden img-cover me-3">
                                    <img src="<?php echo base_url(); ?>user_assets/img/en.svg" alt="">
                                </span>
                                <span> English </span>
                            </a>
                            <a href="#" class="lang-link text-white">
                                <span class="flag icon-20 rounded-circle overflow-hidden img-cover me-3">
                                    <img src="<?php echo base_url(); ?>user_assets/img/fr.svg" alt="">
                                </span>
                                <span> french </span>
                            </a>
                        </div>
                        <div class="lang-link text-white">
                            <span class="flag icon-30 rounded-circle overflow-hidden img-cover me-3">
                                <img src="<?php echo base_url(); ?>user_assets/img/en.svg" alt="">
                            </span>
                            <span> English <i class="la la-angle-up"></i> </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ====== start to top button ====== -->
    <a href="#" class="to_top">
        <i class="la la-angle-up"></i>
    </a>
    <!-- ====== end to top button ====== -->
</footer>
<!-- ====== end footer ====== -->

<!-- ====== start to top button ====== -->
<!-- <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102"><path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 220.587;"></path></svg>
    </div> -->
<!-- ====== end to top button ====== -->

<!-- ====== request ====== -->
<script src="<?php echo base_url(); ?>user_assets/js/lib/jquery-3.0.0.min.js"></script>
<script src="<?php echo base_url(); ?>user_assets/js/lib/jquery-migrate-3.0.0.min.js"></script>
<script src="<?php echo base_url(); ?>user_assets/js/lib/bootstrap.bundle.min.js"></script>
<script src="<?php echo base_url(); ?>user_assets/js/lib/wow.min.js"></script>
<script src="<?php echo base_url(); ?>user_assets/js/lib/jquery.fancybox.js"></script>
<script src="<?php echo base_url(); ?>user_assets/js/lib/lity.js"></script>
<script src="<?php echo base_url(); ?>user_assets/js/lib/swiper.min.js"></script>
<script src="<?php echo base_url(); ?>user_assets/js/lib/jquery.waypoints.min.js"></script>
<script src="<?php echo base_url(); ?>user_assets/js/lib/jquery.counterup.js"></script>
<script src="<?php echo base_url(); ?>user_assets/js/lib/pace.js"></script>
<script src="<?php echo base_url(); ?>user_assets/js/lib/back-to-top.js"></script>
<script src="<?php echo base_url(); ?>user_assets/js/lib/mixitup.min.js"></script>
<script src="<?php echo base_url(); ?>user_assets/js/lib/parallaxie.js"></script>
<script src="<?php echo base_url(); ?>user_assets/js/main.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<?= $this->session->flashdata('success') ?>
<?= $this->session->flashdata('error') ?>

<script>
    function validate_email(field, msg, btn) {
        var emailVal = $("#" + field).val();
        var message = document.getElementById(msg);
        var regad = /[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$/;
        if (regad.test(emailVal) == true || emailVal == "") {
            message.innerHTML = ("");
            message.style.color = "";
            document.getElementById(btn).disabled = false;
        }
        else {
            message.innerHTML = "Invalid email id";
            message.style.color = "red";
            document.getElementById(btn).disabled = true;

        }
    }
    function matchPassword(pwd, cpwd, msg, btn) {
        var password = $("#" + pwd).val();
        var confirm_password = $("#" + cpwd).val();
        var message = document.getElementById(msg);
        if (password != confirm_password) {
            message.innerHTML = "Password and confirm password did not match: Please try again....";
            message.style.color = "red";
            document.getElementById(btn).disabled = true;
        }
        else {
            message.innerHTML = ("");
            message.style.color = "";
            document.getElementById(btn).disabled = false;
            return true;
        }

    }



</script>