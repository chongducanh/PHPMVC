<?php
class Cart extends Controller
{
    public function Info(){
        $this->view("Cart", []);
    }
    public function AddToCart($id)
    {
        if ($id != 0) {
            $game = $this->model("GameModel");
            $info = $game->GetGameID($id);
            $get = mysqli_fetch_array($info);
            $cart_item = array($get['GameName'], $get['GamePrice'],1);
            if (!isset($_SESSION['cart'])) {
                $_SESSION['cart'] = array();
            }
            if(array_key_exists($id, $_SESSION['cart'])){
                $_SESSION['cart'][$id][2]=$_SESSION['cart'][$id][2]+1;
            }else{
                $_SESSION['cart'][$id]=$cart_item;
            }
        }
        header("Location: /index.php?url=Cart/Info/");
    }
    public function ClearCart()
    {
        unset($_SESSION['cart']);
        // header("Location: /index.php?url=Cart/AddToCart/0");
        header("Location: /index.php?url=Cart/Info/");
    }
}
