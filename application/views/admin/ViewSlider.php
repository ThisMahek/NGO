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
                                        <th>Order No.</th>
                                        <th>Title</th>
                                        <th>Image</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $i = 1;
                                    foreach ($slider as $row) {
                                        ?>
                                        <tr>
                                            <td>
                                                <?= $i++ ?>
                                            </td>
                                            <td><?= $row->title ?></td>
                                            <td><img src="<?php echo base_url(); ?><?= $row->image ?>" width="10%"></td>
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
                                                <a href="<?php echo base_url(); ?>admin/editSlider/<?= $row->id ?>"
                                                    class="btn btn-success" title="Edit"><i class="fa fa-edit"></i></a>
                                                <a href="<?php echo base_url(); ?>AdminBackend/delete_slider/<?= $row->id ?>"
                                                    class="btn btn-danger" title="Delete"><i class="fa fa-trash" onclick="return confirm('Are you sure want to delete this slider!')"></i></a>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <?php include_once("includes/footer.php"); ?>
</body>

</html>