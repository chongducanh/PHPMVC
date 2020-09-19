<?php 
class Admin extends Controller{
    public function OverView(){
        $game = $this->model("GameModel");
        $data = [
            'gamelist' => $game->GetAllGame()
        ];
        $this->view("Admin", $data);
    }
    public function InsertGame(){
        if (isset($_POST['insertsubmit'])) {
            $gamename = isset($_POST['gamename']) ? $_POST['gamename'] : '';
            $gamenprice = isset($_POST['gamenprice']) ? $_POST['gamenprice'] : '';
            $gameproducer = isset($_POST['gameproducer']) ? $_POST['gameproducer'] : '';
            $gamecatagory = isset($_POST['gamecatagory']) ? $_POST['gamecatagory'] : '';
            $gamequantity = isset($_POST['gamequantity']) ? $_POST['gamequantity'] : '';
            $gamedescription = isset($_POST['gamedescription']) ? $_POST['gamedescription'] : '';
            $gameimage = isset($_POST['gameimage']) ? $_POST['gameimage'] : '';
            $game = $this->model("GameModel");
            // echo $gamename.$gamenprice.$gameproducer.$gamecatagory.$gamequantity.$gamedescription.$gameimage;
            $game->Insert($gamename,$gamenprice,$gameproducer,$gamecatagory,$gamequantity,$gamedescription,$gameimage);
            header('Location: /index.php?url=Admin/OverView');  
        }

    }
}
?>