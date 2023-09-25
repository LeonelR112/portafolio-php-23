<?php
    class MainController{
        static function renderIndex(){
            view("homepage.indexHomePage", []);
        }
    }
?>