<?php
class User extends Controller
{

    public function Login()
    {
        unset($_SESSION['msgLogin']);
        unset($error['username']);
        unset($error['password']);
        $error = array();
        $user = $this->model("UserModel");
        $useremail = isset($_POST['username']) ? $_POST['username'] : '';
        $userpassword = isset($_POST['password']) ? $_POST['password'] : '';
        if (isset($_POST['submit'])) {
            if (empty($useremail)) {
                $error['username'] = "Bạn chưa nhập username";
                
            }
            if (empty($userpassword)) {
                $error['password'] = "Bạn chưa nhập password";
               
            }
            if (!empty($userpassword) && !empty($userpassword)) {
                $user->Login($_POST['username'], $_POST['password']);
                if (isset($_SESSION['msgLogin'])) {
                    $error['login'] = "Sai tài khoản hoặc mật khẩu";
                } 
                elseif ($_SESSION['userrole'] == 2) {
                    header('Location: /index.php?url=Game');
                } 
                else {
                    header('Location: /index.php?url=Admin/OverView');
                }
            }
        }
        $data = [
            'method' => 'Login',
            'error' => $error
        ];
        $this->view("Login", $data);
    }
    public function LogOut()
    {   
        unset($_SESSION['id']);
        unset($_SESSION['username']);
        unset($_SESSION['usermail']);
        unset($_SESSION['userrole']);
        unset($_SESSION['msgLogin']);
        session_destroy();
        header('Location: /index.php?url=Game');
    }
}
