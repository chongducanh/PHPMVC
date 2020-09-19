<?php 
    class Controller
    {
        public function model($model)
        {
            require_once "/src/Model/".$model.".php";
            return new $model;
        }
        public function view($view, $data = [])
        {
            require_once "/src/View/".$view.".php";
        }
    }
?>