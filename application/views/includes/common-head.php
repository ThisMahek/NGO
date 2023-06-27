    <!-- Metas -->
    <?php $data=$this->db->get('setting')->row();?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <!-- Title  -->
    <title><?php echo $title; ?> </title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo base_url();?><?=$data->favicon_image?>" title="Favicon" sizes="16x16" />

    <!-- bootstrap 5 -->
    <link rel="stylesheet" href="<?php echo base_url();?>user_assets/css/lib/bootstrap.min.css">

    <!-- font family -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&amp;display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Zilla+Slab:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet">

    <!-- ionicons icons  -->
    <link rel="stylesheet" href="<?php echo base_url();?>user_assets/css/lib/ionicons.css">
    <!-- line-awesome icons  -->
    <link rel="stylesheet" href="<?php echo base_url();?>user_assets/css/lib/line-awesome.css">
    <!-- animate css  -->
    <link rel="stylesheet" href="<?php echo base_url();?>user_assets/css/lib/animate.css" />
    <!-- fancybox popup  -->
    <link rel="stylesheet" href="<?php echo base_url();?>user_assets/css/lib/jquery.fancybox.css" />
    <!-- lity popup  -->
    <link rel="stylesheet" href="<?php echo base_url();?>user_assets/css/lib/lity.css" />
    <!-- swiper slider  -->
    <link rel="stylesheet" href="<?php echo base_url();?>user_assets/css/lib/swiper.min.css" />

    <!-- ====== main style ====== -->
    <link rel="stylesheet" href="<?php echo base_url();?>user_assets/css/style.css" />

    <style>
        .form-control{border: none;min-height:0px;}
        .pl-0{padding-left:0px!important;}
        .pr-0{padding-right:0px!important;}
        .bdr-bottom{border-bottom: 1px solid grey;}
        .bdr-left{border-left: 1px solid ;}
        .text-white{color:#fff;}
        .text-justify{text-align: justify;}
        .modal-header{background-color: #3c5c6e;color: #fff;}
        .btn-close{background: transparent;}
        .text-white{color:#fff;}
        .text-bold{font-weight:bold;}
        .btn-close:focus {box-shadow: none;}
    </style>