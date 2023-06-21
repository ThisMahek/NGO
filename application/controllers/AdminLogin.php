<?php
defined('BASEPATH') or exit('No direct script access allowed');
class AdminLogin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Admin_model", "AM");

    }
    public function login()
    {
        $data['title'] = 'NGO - Admin | Login';
        $data['pageName'] = 'Login';
        $this->load->view('admin/login', $data);
    }
    public function ProcessLoginAdmin()
    {
        $result = $this->AM->CheckAdminData($this->input->post("username"));
        if ($result == 1) {
            $username = $this->input->post("username");
            $pass = md5($this->input->post("password"));
            $res = $this->AM->CheckAdminData($username);
            if ($res->password == $pass) {
                $data = array(
                    'admin_id' => $res->id,
                    'email' => $res->email,
                    // 'mobile' => $res->mobile,
                    // 'role' => $res->role,
                    // 'admin_logged_in' => true
                );
                $this->session->set_userdata($data);
                $this->session->set_flashdata('success', '<script>
    swal({
        title: "Congratulations!",
        text: " You are login succesfully !",
        icon: "success",
        });
    </script>');
                redirect(base_url() . "admin/index");
            } else {
                $this->session->set_flashdata('error', '<script>
        swal({
            title: "Sorry!",
            text: "Invalid password!",
            icon: "warning",
            });
        </script>');
                redirect(base_url() . "admin/login");
            }
        } else {
            $this->session->set_flashdata('error', '<script>
      swal({
          title: "Sorry!",
          text: " Invalid id password!",
          icon: "warning",
          button: "ok",
          });
      </script>');
            redirect(base_url() . "admin/login");
        }
    }
    public function LogoutAdmin()
    {
        $this->session->unset_userdata('admin_id');
        $this->session->unset_userdata('email');
        redirect(base_url() . "admin/login");
    }
    public function change_AdminPassword()
    {
        $user_id = $this->session->userdata('admin_id');
        $user = $this->AM->user_profile($user_id);
        $current = $user->password;
        $password = md5($this->input->post('password'));
        if ($password == $current) {
            $newpassword = md5($this->input->post('password1'));
            $response = $this->AM->change_password($newpassword);
            if ($response) {
                $this->session->set_flashdata('success', '<script>
                swal({
                    title: "Congratulations!",
                    text: " Password Updated Successfully!",
                    icon: "success",
                    });
                </script>');
                redirect(base_url() . "admin/index");
            }
        } else {
            $this->session->set_flashdata('error', '<script>
            swal({
                title: "Sorry!",
                text: " Current Password does not match please try again!",
                icon: "warning",
                button: "ok",
                });
            </script>');
            redirect(base_url() . "admin/index");
        }
    }
}