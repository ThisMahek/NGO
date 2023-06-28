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
                                        <li class="breadcrumb-item active"><?php echo $pageName; ?> </li>
                                    </ol>
                                </div>
                                <h4 class="page-title"><?php echo $pageName; ?> </h4>
                            </div>
                        </div>
                    </div><hr>
                    <div class="row">
                        <div class="col-lg-12">
                        <form action="<?=base_url('User/save_legalDetails')?>" method="post" enctype="multipart/form-data">
                                <div class="row justify-content-center">
                                    <div class="col-md-6 mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Registration As<span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="" value="<?=$organisation->registration_as?>" name="registration_as" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Registration No<span class="text-danger">*</span></label>
                                        <input type="number" class="form-control" id="" value="<?=$organisation->registration_no?>" name="registration_no" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Registration Under<span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="" value="<?=$organisation->registration_under?>" name="registration_under" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Registration Date<span class="text-danger">*</span></label>
                                        <input type="date" class="form-control" id="" value="<?=$organisation->registration_date?>" name="registration_date" required>
                                    </div>
                                    <!-- <div class="col-md-6 mb-3">
                                        <label for="exampleInputEmail1" class="form-label">State where Registerd<span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="" value="<?=$organisation->state?>" name="state" required>
                                    </div> -->
                                    <div class="col-md-6 mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Registration Document<span class="text-danger">*</span></label>
                                        <div
                                            class="preview-box d-block justify-content-center rounded shadow overflow-hidden bg-light p-1">
                                        </div>
                                        <?php $img=(!empty($organisation->document))?$organisation->document:'assets\client_document\images.jpg'?>
                                        <input type="file" id="input-file" name="user_img" accept="image/*" 
                                            onchange="preview(this,'image_error','image1')" hidden require />
                                            <img src="<?=base_url().$img?>" alt="" height="110" width="90" class="image" id="image1">
                                        <label class="btn-upload btn btn-outline-success mt-4" for="input-file">Click here
                                            to Upload Image</label>
                                            <span id="image_error"></span>
                                    </div>
                                    <div class="col-md-12 text-end mb-3">
                                    <input type="hidden"  value="<?=$uri?>" name="uri" required>
                                    <input type="hidden"  value="<?=$organisation->id?>" name="id" required>
                                        <button class="btn btn-primary" id="btn" type="submit">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
        <?php include_once("includes/footer.php"); ?>
    </body>
</html>