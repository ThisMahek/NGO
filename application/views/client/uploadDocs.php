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
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Logo of Organisation<span class="text-danger">*</span></label>
                                        <div
                                            class="preview-box d-block justify-content-center rounded shadow overflow-hidden bg-light p-1">
                                        </div>
                                        <input type="file" id="input-file" name="image" accept="image/*"
                                            onchange={handleChange()} hidden require />
                                        <label class="btn-upload btn btn-outline-success mt-4" for="input-file">Click here
                                            to Upload Image</label>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="exampleInputEmail1" class="form-label">PAN Registration Document<span class="text-danger">*</span></label>
                                        <div
                                            class="preview-box d-block justify-content-center rounded shadow overflow-hidden bg-light p-1">
                                        </div>
                                        <input type="file" id="input-file" name="image" accept="image/*"
                                            onchange={handleChange()} hidden require />
                                        <label class="btn-upload btn btn-outline-success mt-4" for="input-file">Click here
                                            to Upload Image</label>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Proof of Address<span class="text-danger">*</span></label>
                                        <div
                                            class="preview-box d-block justify-content-center rounded shadow overflow-hidden bg-light p-1">
                                        </div>
                                        <input type="file" id="input-file" name="image" accept="image/*"
                                            onchange={handleChange()} hidden require />
                                        <label class="btn-upload btn btn-outline-success mt-4" for="input-file">Click here
                                            to Upload Image</label>
                                    </div>
                                    <div class="col-md-12 text-end mb-3">
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