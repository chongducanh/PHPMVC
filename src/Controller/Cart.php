<?php 
class Cart extends Controller{
    public function AddToCart($id){
        // unset($_SESSION['cart']);
        $game = $this->model("GameModel");
        $info = $game->GetGameID($id);
        $get = mysqli_fetch_array($info);
        $quatity = 1;
        foreach($_SESSION['cart'] as $row){
            if(in_array($id,$row)){
                echo ("here");
                $row[3]++;      
            }
            else{
                array_push($_SESSION['cart'], array($get['id'], $get['GameName'],$get['GamePrice'],$quatity));
            }
        }
        
        $this->view("Cart",[]);
    }
}
?>