<?php
class Cart extends Controller
{
    public function AddToCart($id)
    {
        if ($id != 0) {
            $game = $this->model("GameModel");
            $info = $game->GetGameID($id);
            $get = mysqli_fetch_array($info);
            $input = array($get['GameName'], $get['GamePrice'], 1);
            if (!isset($_SESSION['cart'])) {
                $_SESSION['cart'] = array();
                array_push($_SESSION['cart'], $input);
                echo ("11111");
            } else {
                if (array_search($input, $_SESSION['cart']) != false) {
                    echo (var_dump(array_search($input, $_SESSION['cart'])));
                    echo ("in here wtf");
                    print_r($_SESSION['cart']);
                    print_r($input);
                    if($_SESSION['cart'][0] == $input ){
                        print("=====");
                    }
                    else {
                        print("!=====!");
                    }

                    array_push($_SESSION['cart'], $input);
                } else {
                    echo ("here");
                    unset($_SESSION['cart'][array_search($_SESSION['cart'], $input)]);
                    $input[2]++;
                    array_push($_SESSION['cart'], $input);
                }
            }
        }
        $this->view("Cart", []);
    }
    public function ClearCart()
    {
        unset($_SESSION['cart']);
        header("Location: /index.php?url=Cart/AddToCart/0");
    }
}
