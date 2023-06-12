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
                <?= $this->session->flashdata('success') ?>
                <?= $this->session->flashdata('error') ?>
                <div class="row">
                    <div class="col-lg-12">
                        <form action="<?= base_url('AdminBackend/add_and_edit_nav') ?>" method="POST">
                            <div class="row justify-content-center">
                                <div class="col-md-6">
                                    <label for="exampleInputEmail1" class="form-label">Order No.*</label>
                                    <input type="number" class="form-control" id="" name="order_no"
                                        placeholder="Enter Tab Order No." required>
                                </div>
                                <div class="col-md-6">
                                    <label for="exampleInputEmail1" class="form-label">Tab Name*</label>
                                    <input type="text" class="form-control" id="" name="tab_name"
                                        placeholder="Enter Tab Name" required>
                                </div>
                                <div class="col-md-6 mt-3">
                                    <label for="exampleInputEmail1" class="form-label">Url*</label>
                                    <input type="text" class="form-control" id="" name="url" placeholder="Enter Tab URL"
                                        required>
                                </div>
                                <div class="col-md-6 mt-3">
                                    <label for="exampleInputEmail1" class="form-label">Status*</label>
                                    <select type="text" class="form-control" id="" name="status" required>
                                        <option value="Active">Active</option>
                                        <option value="Inactive">Inactive</option>
                                    </select>
                                </div>
                                <div class="col-md-12 text-end mt-3">
                                    <input type="hidden" value="add" name="type">
                                    <button class="btn btn-primary" type="submit">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <?php include_once("includes/footer.php"); ?>
</body>
</html>