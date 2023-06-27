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
                    <form action="<?=base_url()?>AdminBackend/add_edit_setting" method="POST" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                <input type="hidden" class="form-control" id="" name="id" value="<?=$setting->id?>">
                                    <label for="exampleInputEmail1" class="form-label">Facebook*</label>
                                    <input type="url" class="form-control" id="" name="facebook" value="<?=$setting->facebook?>"placeholder="Enter Facebook URL" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Twitter*</label>
                                    <input type="url" class="form-control" id="" name="twitter"value="<?=$setting->twitter?>" placeholder="Enter Twitter URL" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Linkdin*</label>
                                    <input type="url" class="form-control" id="" name="linkdin"value="<?=$setting->linkdin?>" placeholder="Enter Linkdin URL" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Instagram*</label>
                                    <input type="url" class="form-control" id="" name="instagram" value="<?=$setting->instagram?>"placeholder="Enter Instagram URL" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Youtube*</label>
                                    <input type="url" class="form-control" id="" name="youtube"value="<?=$setting->youtube?>" placeholder="Enter Youtube URL" required>
                                </div>
                                <div class="col-md-12 text-end">
                                    <input type="hidden" value="add" name="type">
                                    <input type="hidden" value="<?=$setting->id?>" name="id">
                                    <input type="hidden" value="<?=$uri?>" name="uri">
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