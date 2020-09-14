<?php 
    class GameModel extends DBConnect{
        public function GetGameList(){
            $query = "SELECT * FROM Games";
            return $this->ExecuteQuery($query);
            // return "This is in model";
        }
        public function GetGameID($id){
            $query = "SELECT * FROM Games WHERE GameID = '$id'";
            $result = $this->ExecuteQuery($query);
            if (mysqli_num_rows($result)== 0){
                header('Location: /PNF.php');
            }
            else{
                return $result;
            }
        }
    }
?>