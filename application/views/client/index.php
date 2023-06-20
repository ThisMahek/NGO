<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <?php include_once("includes/common-head.php"); ?>    
    </head>
    <body id="body">
        <?php include_once("includes/sidebar.php"); ?> 
        <?php include_once("includes/header.php"); ?>
        <div class="page-wrapper">
            <div class="page-content-tab">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="page-title-box">
                                <div class="float-end">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                                        <li class="breadcrumb-item active"><?php echo $pageName; ?> </li>
                                    </ol>
                                </div>
                                <h4 class="page-title"><?php echo $pageName; ?> </h4>
                            </div>
                        </div>
                    </div><hr>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="row justify-content-center">
                                <div class="col-md-6 col-lg-3">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row d-flex justify-content-center">
                                                <div class="col-9">
                                                    <p class="text-dark mb-0 fw-semibold">Sessions</p>
                                                    <h3 class="my-1 font-20 fw-bold">24k</h3>
                                                    <p class="mb-0 text-truncate text-muted"><span class="text-success"><i class="mdi mdi-trending-up"></i>8.5%</span> New Sessions Today</p>
                                                </div>
                                                <div class="col-3 align-self-center">
                                                    <div class="d-flex justify-content-center align-items-center thumb-md bg-light-alt rounded-circle mx-auto">
                                                        <i class="ti ti-users font-24 align-self-center text-muted"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> 
                                    </div>
                                </div> 
                                <div class="col-md-6 col-lg-3">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row d-flex justify-content-center">                                                
                                                <div class="col-9">
                                                    <p class="text-dark mb-0 fw-semibold">Avg.Sessions</p>
                                                    <h3 class="my-1 font-20 fw-bold">00:18</h3>
                                                    <p class="mb-0 text-truncate text-muted"><span class="text-success"><i class="mdi mdi-trending-up"></i>1.5%</span> Weekly Avg.Sessions</p>
                                                </div>
                                                <div class="col-3 align-self-center">
                                                    <div class="d-flex justify-content-center align-items-center thumb-md bg-light-alt rounded-circle mx-auto">
                                                        <i class="ti ti-clock font-24 align-self-center text-muted"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> 
                                <div class="col-md-6 col-lg-3">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row d-flex justify-content-center">                                                
                                                <div class="col-9">
                                                    <p class="text-dark mb-0 fw-semibold">Bounce Rate</p>
                                                    <h3 class="my-1 font-20 fw-bold">$2400</h3>
                                                    <p class="mb-0 text-truncate text-muted"><span class="text-danger"><i class="mdi mdi-trending-down"></i>35%</span> Bounce Rate Weekly</p>
                                                </div>
                                                <div class="col-3 align-self-center">
                                                    <div class="d-flex justify-content-center align-items-center thumb-md bg-light-alt rounded-circle mx-auto">
                                                        <i class="ti ti-activity font-24 align-self-center text-muted"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> 
                                <div class="col-md-6 col-lg-3">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row d-flex justify-content-center">
                                                <div class="col-9">  
                                                    <p class="text-dark mb-0 fw-semibold">Goal Completions</p>                                         
                                                    <h3 class="my-1 font-20 fw-bold">85000</h3>
                                                    <p class="mb-0 text-truncate text-muted"><span class="text-success"><i class="mdi mdi-trending-up"></i>10.5%</span> Completions Weekly</p>
                                                </div>
                                                <div class="col-3 align-self-center">
                                                    <div class="d-flex justify-content-center align-items-center thumb-md bg-light-alt rounded-circle mx-auto">
                                                        <i class="ti ti-confetti font-24 align-self-center text-muted"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> 
                                </div>                               
                            </div>
                        </div>
                    </div>
                </div>
        <?php include_once("includes/footer.php"); ?>
    </body>
</html>