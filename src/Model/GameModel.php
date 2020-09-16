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
        public function Insert($gname, $gprice, $gproducer, $gcatagory, $gquantity, $gdescription, $gimage){
            // echo $gname.$gprice.$gproducer.$gcatagory.$gquantity.$gdescription.$gimage;

            // var_dump($gprice. "this us");
            $gprice = intval($gprice);
            $gquantity = intval($gquantity);
            $query = "INSERT INTO Games (GameName, GamePrice, GameProducer, GameCatagory, GameQuantity, GameDescription, GameImage) VALUES ('$gname','$gprice','$gproducer','$gcatagory','$gquantity','$gdescription','$gimage')";
            return $this->ExecuteQuery($query);
            // print("asda" .$result);
        }
    }
?>