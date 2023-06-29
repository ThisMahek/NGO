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
                    <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Registration Form" data-bs-trigger="hover">
                        <a href="#MetricaDashboard" id="dashboard-tab" class="nav-link">
                            <i class="ti ti-smart-home menu-icon"></i>
                        </a>
                    </li>
                    <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Manage Your Requirements" data-bs-trigger="hover">
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
            <a href="<?php echo base_url();?>" class="logo">
                <span>
                   <h4>SARV SEVA</h4><hr>
                </span>
            </a>
        </div>
        <div class="menu-body navbar-vertical tab-content" data-simplebar>
            <div id="MetricaDashboard" class="main-icon-menu-pane tab-pane " role="tabpanel"
                aria-labelledby="dasboard-tab">
                <div class="title-box">
                    <h6 class="menu-title">Dashboard</h6>
                </div>
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url();?>client/index">- Basic Details</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url();?>client/legalDetails">- Legal Details</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url();?>client/uploadDocs">- Upload Documents</a>
                    </li>
                </ul>
            </div>

            <div id="MetricaPages" class="main-icon-menu-pane tab-pane" role="tabpanel" aria-labelledby="apps-tab">
                <div class="title-box">
                    <h6 class="menu-title">Manage Your Requirements</h6>
                </div>
                <div class="collapse navbar-collapse" id="sidebarCollapse">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url();?>client/addRequirements">- Add</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url();?>client/ViewRequirements">- View</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>