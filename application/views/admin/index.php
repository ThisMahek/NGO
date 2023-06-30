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
                                <div class="col-md-6 col-lg-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row d-flex justify-content-center">
                                                <div class="col-9">
                                                    <p class="text-dark mb-0 fw-semibold">Total Register NGO's</p>
                                                    <h3 class="my-1 font-20 fw-bold">24</h3>
                                                    <p class="mb-0 text-truncate text-muted">Updated On : <span class="text-success">20-01-2023 10:00 AM</span></p>
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
                                <div class="col-md-6 col-lg-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row d-flex justify-content-center">                                                
                                                <div class="col-9">
                                                    <p class="text-dark mb-0 fw-semibold">Total Approved NGO's</p>
                                                    <h3 class="my-1 font-20 fw-bold">24</h3>
                                                    <p class="mb-0 text-truncate text-muted">Updated On : <span class="text-success">20-01-2023 10:00 AM</span></p>
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
                                <div class="col-md-6 col-lg-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row d-flex justify-content-center">                                                
                                                <div class="col-9">
                                                    <p class="text-dark mb-0 fw-semibold">Total Rejected NGO's</p>
                                                    <h3 class="my-1 font-20 fw-bold">24</h3>
                                                    <p class="mb-0 text-truncate text-muted">Updated On : <span class="text-success">20-01-2023 10:00 AM</span></p>
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
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="page-title-box">
                                        <h4 class="page-title">Urgent Requirements</h4><hr>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="table-responsive">
                                        <table class="table" id="datatable_1">
                                            <thead class="thead-light">
                                                <tr>
                                                    <th>SN. No.</th>
                                                    <th>Title</th>
                                                    <th>Organisation Name</th>
                                                    <th>Requiremwnts</th>
                                                    <th>View Details</th>
                                                    <th>Status</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                    <tr>
                                                        <td>
                                                            <?= $i++ ?>
                                                        </td>
                                                        <td><?= $row->title ?></td>
                                                        <td><?= $row->organisation_name ?></td>
                                                        <td><?= $row->requirement ?></td>
                                                        <td><a href="" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#viewDescription<?=$row->id ?>"><i class="fa fa-eye"></i></a></td>
                                                        <td class="text-<?php echo ($row->status == 1) ? 'success' : 'danger' ?>"><?php echo ($row->status == 1) ? 'Active' : 'Inactive' ?></td>
                                                        <td>
                                                        <a href="<?=base_url('AdminBackend/change_ngo_status/'.$row->id.'/0')?>"><button
                                                            class="btn waves-effect waves-light btn-success  btn-icon btn-custom" onclick="return confirm('Are you sure you want to reject this ?');">Approved</button>
                                                        </a>
                                                        </td>
                                                    </tr>
                                                    <!-- ===========View Description Modal============ -->
                                                    <div class="modal fade" id="viewDescription<?=$row->id?>" tabindex="-1"
                                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabel">Description
                                                                    </h5>
                                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                                        aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <span><?=$row->description?></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- ======================================== -->
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        <?php include_once("includes/footer.php"); ?>
    </body>
</html>