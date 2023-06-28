<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <?php include_once("includes/common-head.php"); ?>
</head>
<?php
$query = $this->db->query("SELECT DISTINCT(`city_state`) AS state FROM education_center_city");
$st_arr = $query->result_array();
?>
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
                        <form action="<?= base_url() ?>User/save_origination" method="post">
                            <div class="row justify-content-center">
                                <input type="hidden" value="<?= $organisation->id ?>" name="id" required>
                                <div class="col-md-6 mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Organisation IT PAN <span
                                            class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="pan_id"
                                        value="<?= $organisation->it_pan ?>"
                                        oninput="validatePan('pan_id','pan_error','btn')" name="it_pan" required>
                                    <span id="pan_error"><span>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Legal (Registered) Name of
                                        Organisation <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id=""
                                        value="<?= $organisation->organisation_name ?>" name="organisation_name" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Organisation Email Id.<span
                                            class="text-danger">*</span></label>
                                    <input type="email" class="form-control" id=""
                                        value="<?= $this->session->userdata('email') ?>" name="" disabled required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Organisation Website (URL)<span
                                            class="text-danger">*</span></label>
                                    <input type="url" class="form-control" id="" value="<?= $organisation->website_url ?>"
                                        name="website_url" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Name of Person Filling the
                                        Form<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id=""
                                        value="<?= $organisation->person_name ?>" name="person_name"
                                        onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) || (event.charCode==32)"
                                        required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Designation of Person Filling the
                                        Form<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id=""
                                        value="<?= $organisation->designation ?>" name="designation"
                                        onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) || (event.charCode==32)"
                                        required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Address<span
                                            class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="" value="<?= $organisation->address ?>"
                                        name="address" required>
                                </div>
                                <div class="col-md-12">
                                    <div class="page-title-box">
                                        <h4 class="page-title">Contacts </h4>
                                    </div>
                                </div>
                                <hr>
                                <div class="col-md-6 mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Contact Person of Organisation
                                        <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id=""
                                        value="<?= $organisation->contact_person ?>" name="contact_person"
                                        onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) || (event.charCode==32)"
                                        required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Designation of Contact
                                        Person<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id=""
                                        value="<?= $organisation->cp_designation ?>" name="cp_designation"
                                        onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) || (event.charCode==32)"
                                        required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Mobile No.<span
                                            class="text-danger">*</span></label>
                                    <input type="number" class="form-control" id="mob_no_id" name="cp_mob_no"
                                        value="<?= $organisation->cp_mob_no ?>"
                                        oninput="validate_mobile('mob_no_id', 'mobile_error', 'btn')"
                                        onkeypress="return (event.charCode > 47 && event.charCode < 58)" required>
                                    <span id="mobile_error"></span>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Email Id.<span
                                            class="text-danger">*</span></label>
                                    <input type="email" class="form-control" id="email_id"
                                        value="<?= $organisation->cp_email_id ?>" name="cp_email_id"
                                        oninput="validate_email('email_id','email_error','btn')" required>
                                    <span id="email_error"></span>
                                </div>
                                <div class="col-sm-12 mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Brief Descriptions of
                                        Organisation <span class="text-danger">*</span></label>
                                    <textarea name="editor1"><?= $organisation->cp_descriptions ?></textarea>
                                </div>
                                <div class="col-md-12 text-end mb-3">
                                    <button class="btn btn-primary" type="submit" id="btn">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <?php include_once("includes/footer.php"); ?>
            <script>
            $('.stat').on('change', function() {
            var val=this.value;
            if(val==''){
            $('#st_error').html('Required').show();  
            }else{
            $.ajax({
            type: "POST",
            url: "<?= base_url() ?>Master/showcity",
            data: { val: val },
            success: function (data) {

            $('#cit').html(data).show();
            }
            }); 

            }
            });
            </script>
