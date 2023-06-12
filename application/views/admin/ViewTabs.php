<!DOCTYPE html>
<html lang="en" dir="ltr">
<<<<<<< HEAD
<head>
    <?php include_once("includes/common-head.php"); ?>
</head>
=======

<head>
    <?php include_once("includes/common-head.php"); ?>
</head>

>>>>>>> 74bf1d36172d554921bee7712d70db70c547ce3f
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
                <?= $this->session->flashdata('success') ?>
                <?= $this->session->flashdata('error') ?>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="table-responsive">
                            <table class="table" id="datatable_1">
                                <thead class="thead-light">
                                    <tr>
                                       <th>SN. No.</th>
                                        <th>Order No.</th>
                                        <th>Name</th>
                                        <th>Url</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $i=1;
                                    foreach($tab_data as $row)
                                    {
                                    ?>
                                    <tr>
                                        <td><?=$i++?></td>
                                        <td><?=$row->order_no?></td>
                                        <td><?=$row->tab_name?></td>
                                        <td><?=$row->url?></td>
                                        <td><?=$row->status?></td>
                                        <td>
                                            <a href="<?php echo base_url(); ?>admin/editTabs/<?=$row->id?>" class="btn btn-success"
                                                title="Edit"><i class="fa fa-edit"></i></a>
                                            <a href="<?php echo base_url(); ?>AdminBackend/delete_tab/<?=$row->id?>" class="btn btn-danger" title="Delete" onclick="return confirm('Are you sure want to delete this tab!')"><i
                                                    class="fa fa-trash"></i></a>
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
<<<<<<< HEAD
</html>
=======

</html>
>>>>>>> 74bf1d36172d554921bee7712d70db70c547ce3f
