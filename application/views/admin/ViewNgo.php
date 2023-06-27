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
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="page-title-box">
                                <div class="float-end">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="<?php echo base_url();?>admin/index">Dashboard</a></li>
                                        <li class="breadcrumb-item active"><?php echo $pageName; ?> </li>
                                    </ol>
                                </div>
                                <h4 class="page-title"><?php echo $pageName; ?> </h4>
                            </div>
                        </div>
                    </div><hr>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="table-responsive">
                                <table class="table" id="datatable_1">
                                    <thead class="thead-light">
                                        <tr>
                                            <th>Sr. No.</th>
                                            <th>Application No.</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Password</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $i=1;

foreach($organisation as $row){
                                        ?>
                                        <tr>
                                            <td><?=$i++?></td>
                                            <td><?=$row->application_no?></td>
                                            <td><?=$row->organisation_name?></td>
                                            <td><?=$row->org_email?></td>
                                            <td><?=base64_decode($row->password)?></td>
                                            <td>Pending</td>
                                            <td>
                                                <!-- <a href="<?php echo base_url();?>admin/editTabs" class="btn btn-success" title="Edit"><i class="fa fa-edit"></i></a> -->
                                                <a href="#" class="btn btn-danger" title="Delete"><i class="fa fa-trash"></i></a>
                                            </td>
                                        </tr>
                                        <?php }?>                                                                                   
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
        <?php include_once("includes/footer.php"); ?>
    </body>
</html>

