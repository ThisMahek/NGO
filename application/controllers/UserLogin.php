<?php
defined('BASEPATH') or exit('No direct script access allowed');
class UserLogin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_Model', "UM");
    }
    //login user
    public function process_login_user()
    {
        $email = $this->input->post('email');
        $password = md5($this->input->post('password'));
        $user_data = $this->UM->check_user_data($email);
        if (!empty($user_data)) {
            if ($user_data->password == $password) {
                $array = array(
                    'user_id' => $user_data->id,
                    'email' => $user_data->email
                );
                $this->session->set_userdata($array);
                $this->session->set_flashdata('success', '<script>
            swal({
                title: "Congratulations!",
                text: " You are login succesfully !",
                icon: "success",
                });
            </script>');
                redirect(base_url() . "client");
            } else {
                $this->session->set_flashdata('error', '<script>
            swal({
                title: "Sorry!",
                text: "Invalid password!",
                icon: "warning",
                });
            </script>');
                redirect(base_url());
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
            redirect(base_url());
        }

    }
    public function change_UserPassword()
    {
        $user_id = $this->session->userdata('user_id');
        $user = $this->UM->user_profile($user_id);
        $current = $user->password;
        $password = md5($this->input->post('password'));
        if ($password == $current) {
            $newpassword = md5($this->input->post('password1'));
            $response = $this->UM->change_password($newpassword);
            if ($response) {
                $this->session->set_flashdata('success', '<script>
                swal({
                    title: "Congratulations!",
                    text: " Password Updated Successfully!",
                    icon: "success",
                    });
                </script>');
                redirect(base_url() . "client/index");
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
            redirect(base_url() . "client");
        }
    }
    
    public function user_logout(){
        $this->session->unset_userdata('user_id');
        $this->session->unset_userdata('email');
        redirect(base_url());
    }
}
?>