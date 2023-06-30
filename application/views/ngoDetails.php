<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include_once("includes/common-head.php"); ?> 
    </head>
<body class="home-style5">
    <?php include_once("includes/header.php"); ?>
    <main>
        <section class="pt-60 pb-60 overflow-hidden">
            <div class="container">
                <div class="content">
                    <div class="row gx-5">
                        <div class="col-lg-12 border-1  brd-gray mb-5 mb-lg-0">
                            <div class="tc-recently-posts-style5">
                            <p class="color-000 text-uppercase mb-30"><?php echo $pageName; ?> </p>
                                <div class="tc-post-grid-style5">
                                    <!-- ==========List 1========== -->
                                    <div class="item pb-30 mb-4 border-1 border-bottom brd-gray">
                                        <div class="row gx-5">
                                            <div class="col-md-10 col-7 m-auto">
                                                <div class="content">
                                                    <h5 class="title mb-20"> 
                                                        <a href="#">
                                                           <?=$row->organisation_name?>
                                                        </a> 
                                                    </h5>
                                                    <div class="text color-666 mb-20 text-justify"><?=$row->cp_descriptions?></div>
                                                    <div class="meta-bot fsz-13px color-666">
                                                        <ul class="d-flex">
                                                            <li class="date me-5">
                                                                <a href="#"><i class="la la-phone me-2"></i>+91- <?=$row->cp_mob_no?></a>
                                                            </li>
                                                            <li class="comment me-5">
                                                                <a href="#"><i class="la la-envelope me-2"></i>  <?=$row->ngo_email?></a>
                                                            </li>
                                                            <li class="comment me-5">
                                                                <a href="#"><i class="la la-globe me-2"></i> <?=$row->website_url?></a>
                                                            </li>
                                                            <li class="comment">
                                                                <a href="#"><i class="la la-map-marker me-2"></i>  <?=$row->address?> </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-5 m-auto">
                                                <a href="#" class="img img-cover d-block">
                                                    <img src="<?php echo base_url();?><?=$row->organisation_logo?>" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="row gx-5 mt-5">
                                            <div class="col-md-12 m-auto mb-3">
                                               <p><b>Legal (Registered) Name of Organisation : </b></p>
                                            </div>
                                            <div class="col-md-4 m-auto mb-3">
                                               <p><b>Organisation IT PAN : </b>ABCTY1234D</p>
                                            </div>
                                            <div class="col-md-4 m-auto mb-3">
                                               <p><b>Contact Person of Organisation : </b> </p>
                                            </div>
                                            <div class="col-md-4 m-auto mb-3">
                                               <p><b>Designation of Contact Person : </b> </p>
                                            </div>
                                            <div class="col-md-4 m-auto mb-3">
                                               <p><b>Mobile No. : </b> </p>
                                            </div>
                                            <div class="col-md-4 m-auto mb-3">
                                               <p><b>Email Id. : </b> </p>
                                            </div>
                                            <div class="col-md-4 m-auto mb-3">
                                               <p><b>Registration As : </b> </p>
                                            </div>
                                            <div class="col-md-4 m-auto mb-3">
                                               <p><b>Registration No : </b> </p>
                                            </div>
                                            <div class="col-md-4 m-auto mb-3">
                                               <p><b>Registration Under : </b> </p>
                                            </div>
                                            <div class="col-md-4 m-auto mb-3">
                                               <p><b>Registration Date : </b> </p>
                                            </div>
                                            <div class="col-md-6 m-auto mb-3">
                                               <p class="mb-2"><b>Registration Document : </b></p>
                                               <img src="http://localhost/NGO//assets/client_document/images_(2)2.jpg" alt="" width="50%">
                                            </div>
                                            <div class="col-md-6 m-auto mb-3"></div>
                                        </div>
                                    </div>
                                    <!-- ========================== -->
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!--End-Contents-->
    <?php include_once("includes/footer.php"); ?>
</body>
</html>