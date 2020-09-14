<?php 
class User extends Controller{
    
    public function Login(){
        $error = array();
        $user = $this->model("UserModel");
        $userpassword = isset($_POST['username']) ? $_POST['username'] : '';
        $userpassword = isset($_POST['password']) ? $_POST['password'] : '';
        if (isset($_POST['submit'])) {
            if(empty($useremail)){
                $error['username'] = "Bạn chưa nhập username";
            }
            if(empty($userpassword)){
                $error['password'] = "Bạn chưa nhập password";
            }
            if(!empty($userpassword) && !empty($userpassword)){
                $user->Login($_POST['username'], $_POST['password']);
                if(isset($_SESSION['msgLogin'])){
                    $error['login'] = "Sai tài khoản hoặc mật khẩu";
                }
            }
            
        }
        $data = [
            'method' => 'Login',
            'error' => $error
        ];
        $this->view("Login",$data);
    }
}
?>