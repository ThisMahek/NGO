<?php  $data=$this->db->where('status!=',2)->get('nav')->result();?>
<div class="leftbar-tab-menu">
    <div class="main-icon-menu">
        <a href="<?php echo base_url();?>admin/index" class="logo logo-metrica d-block text-center">
            <span>
                <img src="<?php echo base_url();?>user_assets/img/logo_home5.png" alt="logo-small" class="logo-sm">
            </span>
        </a>
        <div class="main-icon-menu-body">
            <div class="position-reletive h-100" data-simplebar style="overflow-x: hidden;">
                <ul class="nav nav-tabs" role="tablist" id="tab-menu">
                    <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Dashboard" data-bs-trigger="hover">
                        <a href="#MetricaDashboard" id="dashboard-tab" class="nav-link">
                            <i class="fas fa-home menu-icon"></i>
                        </a>
                    </li>
                    <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Nav Tabs" data-bs-trigger="hover">
                        <a href="#MetricaMenus" id="pages-tab" class="nav-link">
                            <i class="fas fa-ellipsis-v menu-icon"></i>
                        </a>
                    </li>
                    <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Slider" data-bs-trigger="hover">
                        <a href="#MetricaSlider" id="slider-tab" class="nav-link">
                            <i class="fas fa-images menu-icon"></i>
                        </a>
                    </li>
                    <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Announcements & Updates" data-bs-trigger="hover">
                        <a href="#MetricaAnnouncements" id="announcements-tab" class="nav-link">
                            <i class="fas fa-bullhorn menu-icon"></i>
                        </a>
                    </li>
                    <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Pages" data-bs-trigger="hover">
                        <a href="#MetricaPages" id="pages-tab" class="nav-link">
                            <i class="fas fa-file menu-icon"></i>
                        </a>
                    </li>
                    <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="NGO Lists" data-bs-trigger="hover">
                        <a href="#MetricaNgo" id="pages-tab" class="nav-link">
                            <i class="fas fa-list menu-icon"></i>
                        </a>
                    </li>
                    <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Settings" data-bs-trigger="hover">
                        <a href="#MetricaSetting" id="pages-tab" class="nav-link">
                            <i class="fas fa-cog menu-icon"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="main-menu-inner">
        <div class="topbar-left">
            <a href="<?php echo base_url();?>admin/index" class="logo">
                <span>
                   <h4>SARV SEVA</h4><hr>
                </span>
            </a>
        </div>
        <div class="menu-body navbar-vertical tab-content" data-simplebar>
            <div id="MetricaDashboard" class="main-icon-menu-pane tab-pane" role="tabpanel"
                aria-labelledby="dasboard-tab">
                <div class="title-box">
                    <h6 class="menu-title">Dashboard</h6>
                </div>

                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url();?>admin/index">- Home</a>
                    </li>
                </ul>
            </div>
            <div id="MetricaMenus" class="main-icon-menu-pane tab-pane" role="tabpanel" aria-labelledby="dasboard-tab">
                <div class="title-box">
                    <h6 class="menu-title">Manage Nav Tabs</h6>
                </div>
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url();?>admin/addTabs">- Add Nav Tabs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url();?>admin/ViewTabs">- View Nav Tabs</a>
                    </li>
                </ul>
            </div>
            <div id="MetricaSlider" class="main-icon-menu-pane tab-pane" role="tabpanel" aria-labelledby="dasboard-tab">
                <div class="title-box">
                    <h6 class="menu-title">Manage Slider</h6>
                </div>
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url();?>admin/addSlider">- Add Slider</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url();?>admin/ViewSlider">- View Slider</a>
                    </li>
                </ul>
            </div>
            <div id="MetricaPages" class="main-icon-menu-pane tab-pane" role="tabpanel" aria-labelledby="apps-tab">
                <div class="title-box">
                    <h6 class="menu-title">Pages</h6>
                </div>
                <div class="collapse navbar-collapse" id="sidebarCollapse">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <?php
                            foreach($data as $row){
                            ?>
                            <a class="nav-link" href="<?php echo base_url();?>page/<?=$row->id?>"><?=$row->tab_name?></a>
                            <?php }?>
                        </li>
                    </ul>
                </div>
            </div>
            <div id="MetricaNgo" class="main-icon-menu-pane tab-pane" role="tabpanel" aria-labelledby="dasboard-tab">
                <div class="title-box">
                    <h6 class="menu-title">Manage NGO</h6>
                </div>
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url();?>admin/ViewNgo">- View NGO</a>
                    </li>
                </ul>
            </div>
            <div id="MetricaAnnouncements" class="main-icon-menu-pane tab-pane" role="tabpanel" aria-labelledby="dasboard-tab">
                <div class="title-box">
                    <h6 class="menu-title">Manage Announcements</h6>
                </div>
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url();?>admin/addAnnouncements">- Add Announcement</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url();?>admin/ViewAnnouncements">- View Announcement</a>
                    </li>
                </ul>
            </div>
            <div id="MetricaSetting" class="main-icon-menu-pane tab-pane" role="tabpanel" aria-labelledby="dasboard-tab">
                <div class="title-box">
                    <h6 class="menu-title">Settings</h6>
                </div>
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url();?>admin/addlogo">- Logo</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url();?>admin/addContacts">- Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url();?>admin/addsocialMedia">- Social Media</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>