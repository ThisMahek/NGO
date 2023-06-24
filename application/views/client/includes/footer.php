
<footer class="footer text-center text-sm-start">
  &copy; <script>
  document.write(new Date().getFullYear())

  </script>  <span class="text-muted d-none d-sm-inline-block float-end">Design & Developed By  <i class="mdi mdi-heart text-danger"></i> by DevTeam</span>

  </script>  <span class="text-muted d-none d-sm-inline-block float-end">Design & Developed By  <i
  class="mdi mdi-heart text-danger"></i> by DevTeam</span>

</footer>
</div>
</div>   
<script src="<?php echo base_url();?>assets//libs/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo base_url();?>assets//libs/simplebar/simplebar.min.js"></script>
<script src="<?php echo base_url();?>assets//libs/feather-icons/feather.min.js"></script>
<script src="<?php echo base_url();?>assets//libs/simple-datatables/umd/simple-datatables.js"></script>
<script src="<?php echo base_url();?>assets//js/pages/datatable.init.js"></script>

<!-- App js -->
<script src="<?php echo base_url();?>assets//js/app.js"></script>
<script src="<?php echo base_url();?>assets/js/pages/file-upload.init.js"></script>
<script src="https://cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="<?php echo base_url(); ?>user_assets/js/lib/jquery.waypoints.min.js"></script>
<script src="<?php echo base_url(); ?>user_assets/js/lib/jquery.counterup.js"></script>
<script src="<?php echo base_url(); ?>user_assets/js/lib/jquery-3.0.0.min.js"></script>
<script src="<?php echo base_url(); ?>user_assets/js/lib/jquery-migrate-3.0.0.min.js"></script>
<script src="<?php echo base_url(); ?>user_assets/js/lib/jquery.fancybox.js"></script>
<script>
  CKEDITOR.replace('editor1');

</script>
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
        if ((regad.test(mobVal) == true || mobVal == "") && (mobVal.length)==10  )   {
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
    function validatePan(field,msg,btn){
        var panVal = $("#"+field).val();
        var sp1 = document.getElementById(msg);
        var regpan = /^([A-Z]){5}([0-9]){4}([A-Z]){1}?$/;
            if(regpan.test(panVal)==true){
           // valid pan card number
            sp1.innerHTML=("");
            sp1.style.color="";
            document.getElementById(btn).disabled=false;
            } 
            else {
            sp1.innerHTML="Invalid Pan Number";
            sp1.style.color="red";
            document.getElementById(btn).disabled=true;
            }
        }
  </script>
<?= $this->session->flashdata('success') ?>
<?= $this->session->flashdata('error') ?>

