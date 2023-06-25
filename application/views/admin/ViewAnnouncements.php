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
                                    <li class="breadcrumb-item"><a
                                            href="<?php echo base_url(); ?>admin/index">Dashboard</a></li>
                                    <li class="breadcrumb-item active">
                                        <?php echo $pageName; ?>
                                    </li>
                                </ol>
                            </div>
                            <h4 class="page-title">
                                <?php echo $pageName; ?>
                            </h4>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="table-responsive">
                            <table class="table" id="datatable_1">
                                <thead class="thead-light">
                                    <tr>
                                        <th>sr. No.</th>
                                        <th>Title</th>
                                        <th>View Description</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $i = 1;
                                    foreach ($announcement as $row) {
                                        ?>
                                        <tr>
                                            <td>
                                                <?= $i++ ?>
                                            </td>
                                            <td>
                                                <?= $row->title ?>
                                            </td>
                                            <td><a href="" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#viewDescription<?=$row->id ?>"><i class="fa fa-eye"></i></a></td>
                                            <td>
                                                <?php
                                                if ($row->status == 1) { ?>
                                                    <button class="btn btn-sm btn-success">Active</button>
                                                    <?php
                                                } else { ?>
                                                    <button class="btn btn-sm btn-danger">Inactive</button>
                                                    <?php
                                                }
                                                ?>
                                            </td>
                                            <td>
                                                <a href="<?php echo base_url(); ?>admin/editAnnouncements/<?= $row->id ?>"
                                                    class="btn btn-success" title="Edit"><i class="fa fa-edit"></i></a>
                                                <a onclick="return confirm('Are you sure want to delete this announcement!')", href="<?php echo base_url(); ?>AdminBackend/delete_announcements/<?= $row->id ?>"
                                                    class="btn btn-danger" title="Delete"><i class="fa fa-trash"
                                                       ></i></a>
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
                                    <?php } ?>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <?php include_once("includes/footer.php"); ?>
            <!-- ===========View Description Modal============ -->
            <div class="modal fade" id="viewDescription" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Announcements Details</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            ...
                        </div>
                    </div>
                </div>
            </div>
            <!-- ======================================== -->
            <!-- </body>
</html> -->