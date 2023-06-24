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
                            <form>
                                <div class="row justify-content-center">
                                    <div class="col-md-6 mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Registration As<span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="" value="" name="" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Registration No<span class="text-danger">*</span></label>
                                        <input type="number" class="form-control" id="" value="" name="" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Registration Under<span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="" value="" name="" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Registration Date<span class="text-danger">*</span></label>
                                        <input type="date" class="form-control" id="" value="" name="" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="exampleInputEmail1" class="form-label">State where Registerd<span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="" value="" name="" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Registration Document<span class="text-danger">*</span></label>
                                        <div
                                            class="preview-box d-block justify-content-center rounded shadow overflow-hidden bg-light p-1">
                                        </div>
                                        <input type="file" id="input-file" name="image" accept="image/*"
                                            onchange={handleChange()} hidden require />
                                        <label class="btn-upload btn btn-outline-success mt-4" for="input-file">Click here
                                            to Upload Image</label>
                                    </div>
                                    <div class="col-md-12 text-end mb-3">
                                        <button class="btn btn-primary" type="submit">Next</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
        <?php include_once("includes/footer.php"); ?>
    </body>
</html>