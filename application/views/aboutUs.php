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
                                    <?php
                                    if(!empty($about->content)){
                                    ?>
                                    <!-- ==========Content Section========== -->
                                    <section class="tc-about-about">
                                        <div class="container">
                                            <div class="row align-items-center justify-content-between">
                                                <div class="col-lg-<?=(!empty($about->image))?'6':'9'?>">
                                                <?php
                                                if((!empty($about->image)) || $about->image!=null){
                                                ?>
                                                    <div class="img img-cover">
                                                        <img src="<?php echo base_url();?><?=$about->image?>" alt="">
                                                    </div>
                                                    <?php }?>
                                                </div>
                                                <div class="col-lg-<?=(!empty($about->image))?'5':'12'?>">
                                                    <div class="info mt-4 mt-lg-0">
                                                        <!-- <h2 class="fsz-30px mb-40"> Our styleguide for our users <br> is very easy to catch </h2> -->
                                                        <div class="text fsz-14px color-666 mb-60">
                                                        <?=$about->content?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <?php }else{?>
                                        <h1>No data found</h1>
                                        <?php }?>
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