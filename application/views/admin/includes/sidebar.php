<?php  $data=$this->db->where('status!=',2)->get('nav')->result();

?>
<div class="leftbar-tab-menu">
    <div class="main-icon-menu">
        <a href="<?php echo base_url();?>admin/index" class="logo logo-metrica d-block text-center">
            <span>
                <img src="<?php echo base_url();?>assets/images/logo-sm.png" alt="logo-small" class="logo-sm">
            </span>
        </a>
        <div class="main-icon-menu-body">
            <div class="position-reletive h-100" data-simplebar style="overflow-x: hidden;">
                <ul class="nav nav-tabs" role="tablist" id="tab-menu">
                    <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Dashboard" data-bs-trigger="hover">
                        <a href="#MetricaDashboard" id="dashboard-tab" class="nav-link">
                            <i class="ti ti-smart-home menu-icon"></i>
                        </a>
                    </li>
                    <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Nav Tabs" data-bs-trigger="hover">
                        <a href="#MetricaMenus" id="pages-tab" class="nav-link">
                            <i class="ti ti-apps menu-icon"></i>
                        </a>
                    </li>
                    <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Pages" data-bs-trigger="hover">
                        <a href="#MetricaPages" id="pages-tab" class="nav-link">
                            <i class="ti ti-files menu-icon"></i>
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
                    <img src="<?php echo base_url();?>assets/images/logo-dark.png" alt="logo-large" class="logo-lg logo-dark">
                    <img src="<?php echo base_url();?>assets/images/logo.png" alt="logo-large" class="logo-lg logo-light">
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
                        <a class="nav-link" href="<?php echo base_url();?>admin/index">Home</a>
                    </li>
                </ul>
            </div>
            <div id="MetricaMenus" class="main-icon-menu-pane tab-pane" role="tabpanel" aria-labelledby="dasboard-tab">
                <div class="title-box">
                    <h6 class="menu-title">Manage Nav Tabs</h6>
                </div>
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url();?>admin/addTabs">Add Nav Tabs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url();?>admin/ViewTabs">View Nav Tabs</a>
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
                            <a class="nav-link" href="<?php echo base_url();?>admin/aboutUs/<?=$row->id?>"><?=$row->tab_name?></a>
                            <?php }?>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>