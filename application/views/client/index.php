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
                                        <label for="exampleInputEmail1" class="form-label">Organisation IT PAN <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="" value="" name="" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Legal (Registered) Name of Organisation <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="" value="" name="" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Organisation Email Id.<span class="text-danger">*</span></label>
                                        <input type="email" class="form-control" id="" value="" name="" disabled required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Organisation Website (URL)<span class="text-danger">*</span></label>
                                        <input type="url" class="form-control" id="" value="" name="" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Name of Person Filling the Form<span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="" value="" name="" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Designation of Person Filling the Form<span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="" value="" name="" required>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="page-title-box">
                                            <h4 class="page-title">Contacts </h4>
                                        </div>
                                    </div><hr>
                                    <div class="col-md-6 mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Contact Person of Organisation <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="" value="" name="" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Designation of Contact Person<span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="" value="" name="" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Mobile No.<span class="text-danger">*</span></label>
                                        <input type="number" class="form-control" id="" value="" name="" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Email Id.<span class="text-danger">*</span></label>
                                        <input type="email" class="form-control" id="" value="" name="" required>
                                    </div>
                                    <div class="col-sm-12 mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Brief Descriptions of Organisation <span class="text-danger">*</span></label>
                                        <textarea name="editor1"><?= $page_data->content ?></textarea>
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