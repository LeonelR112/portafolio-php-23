<?php
    class MainController{

        static function renderIndex(){
            $MainModel = new MainModel;
            $languages_prog = $MainModel->getAllLanguages();
            $json_languages = json_encode($languages_prog, JSON_INVALID_UTF8_IGNORE);
            view("homepage.indexHomePage", [
                "languages_prog" => $languages_prog,
                "json_languages" => $json_languages
            ]);
        }
    }
?>