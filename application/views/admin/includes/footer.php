
<footer class="footer text-center text-sm-start">
  &copy; 
    <script>
        document.write(new Date().getFullYear())
    </script>
    Copyrights by Sarv Sewa Trust. All Rights Reserved.

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
   function preview(image,msg,show_img) {
        var filePath = image.value;
        var allowedExtensions = /(\.jpg|\.png|\.jpeg )$/i;
        if (!allowedExtensions.exec(filePath)) {
            document.getElementById(msg).innerText = '\n Please upload file having extensions .jpeg, .png, .jpeg only.';
            document.getElementById(msg).style.color='red';
            fileInput.value = '';
            return false;
        } else {
            //Image preview
            if (image.files && image.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('#'+show_img)
                        .attr('src', e.target.result)
                        .width(110)
                        .height(70);
                    document.getElementById(msg).innerText = " ";
                };
                reader.readAsDataURL(image.files[0]);
            }
        }
    }
  </script>
<?= $this->session->flashdata('success') ?>
                <?= $this->session->flashdata('error') ?>

