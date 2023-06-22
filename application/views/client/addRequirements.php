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
                    <form action="#" method="POST" enctype=multipart/form-data>
                            <div class="row justify-content-center">
                                <div class="col-md-6">
                                    <label for="exampleInputEmail1" class="form-label">Title*</label>
                                    <input type="text" class="form-control" id="" value="" name="" >
                                </div>
                                <div class="col-md-6">
                                    <label for="exampleInputEmail1" class="form-label">Name Of Organisation*</label>
                                    <input type="text" class="form-control" id="" value="#" name="" disabled>
                                </div>
                                <div class="col-md-6  mt-3">
                                    <label for="exampleInputEmail1" class="form-label">Your Requirements*</label>
                                    <input type="text" class="form-control" id="" value="" name="" >
                                </div>
                                <div class="col-md-6 mt-3">
                                    <label for="exampleInputEmail1" class="form-label">Upload Feature Image *</label>
                                    <div
                                        class="preview-box d-block justify-content-center rounded shadow overflow-hidden bg-light p-1">
                                    </div>
                                    <input type="file" id="input-file" name="image" accept="image/*" onchange={handleChange()} hidden require />
                                    <label class="btn-upload btn btn-outline-success mt-4" for="input-file">Click here
                                        to Upload Image</label>
                                </div>
                                <div class="col-sm-12 mt-3">
                                    <label for="exampleInputEmail1" class="form-label">Detail Descriptions*</label>
                                    <textarea name="editor1"><?= $page_data->content ?></textarea>
                                </div>
                                <div class="col-md-12 text-end mt-3">
                                    <input type="hidden" value="update" name="type">
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