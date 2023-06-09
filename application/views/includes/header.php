<?php $data=$this->db->get('setting')->row();?>
<div class="loading-page style1">
    <div class="lad-cont">
        <h2 class="loading loading02">
            <span>S</span>
            <span>A</span>
            <span>R</span>
            <span>V</span>
            <span> </span>
            <span>S</span>
            <span>E</span>
            <span>V</span>
            <span>A</span>
        </h2>
        <small class="loading loading01 color-blue1">
            <span>l</span>
            <span>o</span>
            <span>a</span>
            <span>d</span>
            <span>i</span>
            <span>n</span>
            <span>g</span>
        </small>
    </div>
</div>
<div class="navbar-container">
    <div class="market-nav-style1 d-none d-lg-block">
        <div class="container">
            <div class="row">
                <div class="col-md-10">
                    <div class="content">
                        <div class="item">
                            <div class="cont">
                                <strong><i class="la la-phone fs-4 sOpen-btn"></i> +91-<?=$data->mob_no?> / <?=$data->alt_mob_no?></strong>
                            </div>
                        </div>
                        <div class="item">
                            <div class="cont">
                                <strong><i class="la la-envelope fs-4 sOpen-btn"></i> <?=$data->email?></strong>
                            </div>
                        </div>
                        <div class="item">
                            <div class="cont">
                                <strong><i class="la la-map-marker fs-4 sOpen-btn"></i> <?=$data->address?></strong>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 text-end">
                    <div class="cont text-white">
                        <a href="<?=base_url()?>Admin/index"><strong><i class="la la-user fs-4 sOpen-btn"></i> Login</strong></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="top-navbar style-5">
            <div class="container p-0">
                <div class="row align-items-center">
                    <div class="col-lg-2 text-center">
                        <a href="<?php echo base_url(); ?>" class="logo-brand d-none d-lg-inline-block">
                            <img src="<?php echo base_url(); ?><?=$data->logo?>" alt="" class="dark-none">
                            <img src="<?php echo base_url(); ?><?=$data->logo?>" alt=""
                                class="light-none">
                        </a>
                    </div>
                    <div class="col-lg-10">
                        <div class="sub-darkLight">
                            <form action="<?= base_url() ?>User/ngoList" class="bdr-bottom" method="post">
                                <div class="row text-center align-items-center">
                                    <div class="col-10 col-md-11">
                                        <input type="text" name="ngo_name" required value="<?=isset($_POST['ngo_name'])?$_POST['ngo_name']:""?>" class="form-control" placeholder="Search NGO by Name">
                                    </div>
                                    <div class="col-2 col-md-1 pl-0">
                                        <div class="nav-side bdr-left">
                                            <button type="submit" class="btn-search">
                                                <i class="la la-search fs-4 sOpen-btn"></i>
                                                <i class="la la-close fs-4 sClose-btn"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include_once("menu.php"); ?>

    </div>
</div>