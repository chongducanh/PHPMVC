<?php 
class Game extends Controller{
    function GameList(){
        $gamelist = $this->model("GameModel");
        $data = [
            'method'=>"GameList",
            'gamelist' => $gamelist->GetGameList()
            
        ];
        $this->view("OriginView",$data);

    }
    function GameDetail($id){
        $gamedetail = $this->model("GameModel");
        $data = [
            'method'=>"GameDetail",
            'gamedetail' => $gamedetail->GetGameID($id)
            
        ];
        $this->view("OriginView",$data);
    }
}
?>