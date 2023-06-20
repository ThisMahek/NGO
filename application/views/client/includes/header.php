<div class="topbar">
  <nav class="navbar-custom" id="navbar-custom">
    <ul class="list-unstyled topbar-nav float-end mb-0">
      <li class="dropdown">
        <a class="nav-link dropdown-toggle nav-user" data-bs-toggle="dropdown" href="#" role="button"
          aria-haspopup="false" aria-expanded="false">
          <div class="d-flex align-items-center">
            <img src="<?php echo base_url(); ?>assets/images/users/admin.png" alt="profile-user"
              class="rounded-circle me-2 thumb-sm" />
            <div>
              <span class="d-none d-md-block fw-semibold font-12">Client <i class="mdi mdi-chevron-down"></i></span>
            </div>
          </div>
        </a>
        <div class="dropdown-menu dropdown-menu-end">
          <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#changePassword"><i
              class="ti ti-settings font-16 me-1 align-text-bottom"></i> Change Password</a>
          <a class="dropdown-item" href="#"><i class="ti ti-user font-16 me-1 align-text-bottom"></i> Profile</a>
          <div class="dropdown-divider mb-0"></div>
          <a class="dropdown-item" onclick="logout('<?= base_url() ?>admin/logout')"><i
              class="ti ti-power font-16 me-1 align-text-bottom"></i> Logout</a>
        </div>
      </li>
    </ul>
    <ul class="list-unstyled topbar-nav mb-0">
      <li>
        <button class="nav-link button-menu-mobile nav-icon" id="togglemenu">
          <i class="ti ti-menu-2"></i>
        </button>
      </li>
      <li class="hide-phone app-search">
        <form role="search" action="#" method="get">
          <input type="search" name="search" class="form-control top-search mb-0" placeholder="Type text...">
          <button type="submit"><i class="ti ti-search"></i></button>
        </form>
      </li>
    </ul>
  </nav>
</div>

<!-- ===============Change Password Modal============= -->
<div class="modal fade" id="changePassword" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Change Password</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form class="my-4" action="<?= base_url() ?>AdminLogin/change_AdminPassword" method="post">
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Current Password</label>
            <input type="password" name="password" class="form-control" id="currentPassword" required>
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">New Password</label>
            <input type="password" name="password1" class="form-control" id="password1" required>
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
            <input type="password" class="form-control" id="password2" required oninput="checkuserpassword()"> 
            <span id="sp_passmsg"></span>
          </div>
          <button type="submit" id="button_change" class="btn btn-primary">Update</button>
        </form>
      </div>
    </div>
  </div>
</div>

</div>
<script>
  function checkuserpassword() {
    var password = document.getElementById("password1").value;
    var cpassword = document.getElementById("password2").value;
    if (password != cpassword) {
      document.getElementById("sp_passmsg").innerHTML = " Password and confirm password did not match: Please try again";
      document.getElementById("sp_passmsg").style.color = "red";
      document.getElementById("button_change").disabled = true;
    }

    else {
      document.getElementById("sp_passmsg").innerHTML = " ";
      document.getElementById("sp_passmsg").style.color = "";
      document.getElementById("button_change").disabled = false;
    }
  }
</script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
  function logout(urll) {
    event.preventDefault();
    const url = urll
    swal({
      title: 'Are you sure?',
      text: 'You want to log out!',
      icon: 'warning',
      buttons: ["Cancel", "Yes!"],
    }).then(function (value) {
      if (value) {
        window.location.href = url;
      }
    });
  }  
</script>