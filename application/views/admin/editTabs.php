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
                        <form action="<?= base_url('AdminBackend/add_and_edit_nav') ?>" method="POST">
                            <input type="hidden" class="form-control" name="id" value="<?= $tab_data->id ?>">
                            <div class="row justify-content-center">
                                <div class="col-md-6">
                                    <label for="exampleInputEmail1" class="form-label">Order No.*</label>
                                    <input type="number" class="form-control" id="" name="order_no"
                                        value="<?= $tab_data->order_no ?>" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="exampleInputEmail1" class="form-label">Tab Name*</label>
                                    <input type="text" class="form-control" id="" name="tab_name"
                                        value="<?= $tab_data->tab_name ?>" required>
                                </div>
                                <div class="col-md-6 mt-3">
                                    <label for="exampleInputEmail1" class="form-label">Url*</label>
                                    <input type="text" class="form-control" id="" name="url" value="<?= $tab_data->url ?>"
                                        required>
                                </div>
                                <div class="col-md-6 mt-3">
                                    <label for="exampleInputEmail1" class="form-label">Status*</label>
                                    <select type="text" class="form-control" id="" name="status" required>
                                        <option value="Active"
                                            <?= (($tab_data->status) == 'Active') ? "selected" : "" ?>>Active</option>
                                        <option value="Inactive"
                                            <?= (($tab_data->status) == 'Inactive') ? "selected" : "" ?>>Inactive</option>
                                    </select>
                                </div>
                                <div class="col-md-12 text-end mt-3">
                                    <input type="hidden" value="update" name="type">
                                    <button class="btn btn-primary" type="submit">Update</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <?php include_once("includes/footer.php"); ?>
</body>

</html>