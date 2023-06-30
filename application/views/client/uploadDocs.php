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
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="page-title-box">
                            <div class="float-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
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
                        <form action="<?=base_url('User/save_uploadDocs')?>" method="post" enctype="multipart/form-data">
                        <?php $img=(!empty($organisation->organisation_logo))?$organisation->organisation_logo:'assets\client_document\images.jpg'?>
                        <?php $img2=(!empty($organisation->pan_registration_document))?$organisation->pan_registration_document:'assets\client_document\images.jpg'?>
                        <?php $img3=(!empty($organisation->address_proof))?$organisation->address_proof:'assets\client_document\images.jpg'?>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Logo of Organisation<span
                                            class="text-danger">*</span></label>
                                    <div
                                        class="preview-box d-block justify-content-center rounded shadow overflow-hidden bg-light p-1">
                                    </div>
                                    <input type="file" id="input-file" name="logo_img" accept="image/*"
                                        onchange="preview(this,'image_error1','image1')" hidden require />
                                    <img src="<?=base_url().$img?>" alt="" height="110" width="90"
                                        class="image" id="image1">
                                    <br><label class="btn-upload btn btn-outline-success mt-4" for="input-file">Click here
                                        to Upload Image</label>
                                        <span id="image_error1"></span>

                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="exampleInputEmail1" class="form-label">PAN Registration Document<span
                                            class="text-danger">*</span></label>
                                    <div
                                        class="preview-box d-block justify-content-center rounded shadow overflow-hidden bg-light p-1">
                                    </div>
                                    <input type="file" id="input-file2" name="pan_img" accept="image/*"
                                    onchange="preview(this,'image_error2','image2')" hidden require />
                                        <img src="<?=base_url().$img2?>" alt="" height="110" width="90"
                                        class="image" id="image2">
                                        <br><label class="btn-upload btn btn-outline-success mt-4" for="input-file2">Click here
                                        to Upload Image</label>
                                        <span id="image_error2"></span>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Proof of Address<span
                                            class="text-danger">*</span></label>
                                    <div
                                        class="preview-box d-block justify-content-center rounded shadow overflow-hidden bg-light p-1">
                                    </div>
                                    <input type="file" id="input-file3" name="address_proof_img" accept="image/*"
                                    onchange="preview(this,'image_error3','image3')"  hidden require />
                                    <img src="<?=base_url().$img3?>" alt="" height="110" width="90"
                                        class="image" id="image3">
                                        <br><label class="btn-upload btn btn-outline-success mt-4" for="input-file3">Click here
                                        to Upload Image</label>
                                        <span id="image_error3"></span>
                                </div>
                                <div class="col-md-12 text-end mb-3">
                                <input type="hidden"  value="<?=$uri?>" name="uri" required>
                                    <input type="hidden" value="<?= $organisation->id ?>" name="id" required>
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