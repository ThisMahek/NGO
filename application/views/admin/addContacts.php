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
                                    <label for="exampleInputEmail1" class="form-label">Mobile No.*</label>
                                    <input type="number" class="form-control" id="mobile" oninput="validate_mobile('mobile', 'mobile_msg', 'btn')"  name="mob_no" value="<?=$setting->mob_no?>" placeholder="Enter Mobile No." required>
                                    <span id="mobile_msg"></span>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Another Mobile No. (optional)</label>
                                    <input type="number" class="form-control" id="alt_mobile" name="alt_mob_no"  oninput="validate_mobile('alt_mobile', 'alt_mobile_msg', 'btn')"  value="<?=$setting->alt_mob_no?>" placeholder="Enter Another Mobile No.">
                                    <span id="alt_mobile_msg"></span>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Email Id.*</label>
                                    <input type="email" class="form-control" id="email"  oninput="validate_email('email', 'email_msg', 'btn')" name="email"  value="<?=$setting->email?>"placeholder="Enter Email Id." required>
                                    <span id="email_msg"></span>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Address*</label>
                                    <input type="text" class="form-control" id="" name="address" value="<?=$setting->address?>"placeholder="Enter Address" required>
                                </div>
                                <div class="col-md-12 text-end">
                                    <input type="hidden" value="add" name="type">
                                    <input type="hidden" value="<?=$setting->id?>" name="id">
                                    <input type="hidden" value="<?=$uri?>" name="uri">
                                    <button class="btn btn-primary" type="submit" id="btn">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <?php include_once("includes/footer.php"); ?>
            <script>
            function validate_email(field, msg, btn) {
        var emailVal = $("#" + field).val();
        var message = document.getElementById(msg);
        var regad = /[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$/;
        if (regad.test(emailVal) == true || emailVal == "") {
            message.innerHTML = ("");
            message.style.color = "";
            document.getElementById(btn).disabled = false;
        }
        else {
            message.innerHTML = "Invalid email id";
            message.style.color = "red";
            document.getElementById(btn).disabled = true;

        }
    }
    function validate_mobile(field, msg, btn) {
        var mobVal = $("#" + field).val();
        var message = document.getElementById(msg);
        var regad = /[6789]{1}[0-9]{9}/;
        if ((regad.test(mobVal) == true || mobVal == "") && (mobVal.length) == 10) {
            message.innerHTML = ("");
            message.style.color = "";
            document.getElementById(btn).disabled = false;
        }
        else {
            message.innerHTML = "Invalid mobile no";
            message.style.color = "red";
            document.getElementById(btn).disabled = true;

        }
    }
</script>