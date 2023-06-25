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
                    <form action="<?= base_url('AdminBackend/add_edit_Slider') ?>" method="POST"
                            enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Title*</label>
                                    <input type="text" class="form-control" id="" name="title"
                                        placeholder="Enter Title" value="<?=$slider->title?>" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Status*</label>
                                    <select type="text" class="form-control" id="" name="status" required>
                                        <option value="1"
                                            <?= (($slider->status) == 1) ? "selected" : "" ?>>Active</option>
                                        <option value="0"
                                            <?= (($slider->status) == 0) ? "selected" : "" ?>>Inactive</option>
                                    </select>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Image*</label>
                                    <div
                                        class="preview-box d-block justify-content-center rounded shadow overflow-hidden bg-light p-1">
                                    </div>
                                    <?php $img =(!empty($slider->image))?$slider->image:'assets\client_document\images.jpg' ?>
                                    <input type="file" id="input-file-req" name="slider_img" accept="image/*"
                                        onchange="preview(this,'image_error','img')" hidden />
                                    <img src="<?= base_url() . $img ?>" alt="" height="110" width="90" class="image"
                                        id="img">
                                    <label class="btn-upload btn btn-outline-success mt-4" for="input-file-req">Click
                                        here
                                        to Upload Image</label>
                                    <span id="image_error"></span>
                                </div>
                                <div class="col-md-12 text-end">
                                <input type="hidden" value="<?=$slider->id?>" name="id">
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