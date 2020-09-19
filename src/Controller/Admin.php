<?php
class Admin extends Controller
{
    public function OverView()
    {
        $game = $this->model("GameModel");
        $data = [
            'gamelist' => $game->GetAllGame()
        ];
        $this->view("Admin", $data);
    }
    public function InsertGame()
    {
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
            $game->Insert($gamename, $gamenprice, $gameproducer, $gamecatagory, $gamequantity, $gamedescription, $gameimage);
            header('Location: /index.php?url=Admin/OverView');
        }
    }
    public function ImportCSV()
    {
        $game = $this->model("GameModel");
        $filename = $_FILES["file"]["name"];
        $url = "/src/Public/" . $filename;
   
        $ext = substr($filename, strrpos($filename, "."), (strlen($filename) - strrpos($filename, ".")));
       
        if ($ext == ".csv") {
           
            $file = fopen($url, "r");
            while (($emapData = fgetcsv($file, 10000, ",")) !== FALSE) {
                
                $game->Insert($emapData[0],$emapData[1],$emapData[2],$emapData[3],$emapData[4],$emapData[5],$emapData[6]);

                header('Location: /index.php?url=Admin/OverView');
            }
            
            fclose($file);
        } else {
            $_SESSION['error'] = "Not CSV file";
        }
    }
}
