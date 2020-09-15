<?php 
class UserModel extends DBConnect{
    public function Login($userEmail, $userPassword){
        $query = "SELECT * FROM Users WHERE UserEmail = '$userEmail' and UserPassword = '$userPassword'";
        $result = $this->ExecuteQuery($query);
        if (mysqli_num_rows($result) == 1) {
            $userCur = mysqli_fetch_array($result);
            $_SESSION['id'] = $userCur['UserID'];
            $_SESSION['username'] = $userCur['UserName'];
            $_SESSION['usermail'] = $userCur['UserEmail'];
            $_SESSION['userrole'] = $userCur['UserRole'];
            // echo "Asdladkjaldksjaldjaksadksaalsdjajas";
            // echo $_SESSION['username'];
        }
        else{
            $_SESSION['msgLogin'] = "Error";
        }
    }
}
?>