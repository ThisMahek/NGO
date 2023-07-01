<?php  $data=$this->db->where('status','Active')->get('nav')->result();
$data2=$this->db->get('setting')->row();?>
<nav class="navbar navbar-expand-lg navbar-light style-5">
    <div class="container p-0">
        <div class="mob-nav-toggles d-flex align-items-center justify-content-between">
            <a href="#" class="logo-brand d-block d-lg-none w-25 my-4">
                <img src="<?php echo base_url();?><?=$data2->image?>" alt="" class="dark-none">
                <img src="<?php echo base_url();?><?=$data2->image?>" alt="" class="light-none">
            </a>
            <button class="btn btn-outline-secondary  d-sm-block d-md-none p-2" type="button"><i class="la la-plus fs-4 sOpen-btn"></i> Register</button>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item dropdown">
                    <a class="nav-link active" href="<?=base_url()?>" >
                        homes
                    </a>
                </li>
                <?php
                foreach($data as $row){
                ?>
                <li class="nav-item dropdown">
                    <a class="nav-link" href="<?=base_url()?>nav/<?=$row->id?>" >
                        <?=$row->tab_name?>
                    </a>
                </li>
                <?php }?>
                <!-- <li class="nav-item dropdown">
                    <a class="nav-link" href="#" >
                        Single posts
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link " href="#">
                        Pages
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="">
                        contact
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">
                        shop
                    </a>
                </li> -->
            </ul>
            </div>
        </div>
    </div>
</nav>