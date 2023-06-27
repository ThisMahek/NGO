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
                         <?php $img=(!empty($setting->logo))?$setting->logo:'assets\client_document\images.jpg'?>
                         <?php $img2=(!empty($setting->favicon_image))?$setting->favicon_image:'assets\client_document\images.jpg'?>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Upload Logo Image*</label>
                                    <div
                                        class="preview-box d-block justify-content-center rounded shadow overflow-hidden bg-light p-1">
                                    </div>
                                    <input type="file" id="input-file" name="logo" accept="image/*"
                                    onchange="preview(this,'image_error','image')" hidden require />
                                        <img src="<?=base_url().$img?>" alt="" height="110" width="90"
                                        class="image" id="image">
                                    <label class="btn-upload btn btn-outline-success mt-4" for="input-file">Click here
                                        to Upload Image</label>
                                        <span id="image_error2"></span>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Upload Favicone Image*</label>
                                    <div
                                        class="preview-box d-block justify-content-center rounded shadow overflow-hidden bg-light p-1">
                                    </div>
                                    <input type="file" id="input-file2" name="favicon_img" accept="image/*"
                                    onchange="preview(this,'image_error2','image2')" hidden require />
                                        <img src="<?=base_url().$img2?>" alt="" height="110" width="90"
                                        class="image" id="image2">
                                    <label class="btn-upload btn btn-outline-success mt-4" for="input-file2">Click here
                                        to Upload Image</label>
                                        <span id="image_error2"></span>
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