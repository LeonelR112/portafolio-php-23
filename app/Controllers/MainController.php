<?php
    class MainController{

        static function renderIndex(){
            $MainModel = new MainModel;
            $languages_prog = $MainModel->getAllLanguages();
            $proyectos = $MainModel->getAllProyectos();
            $complementos_dev = $MainModel->getAllComplementosDev();
            $otros_conocimientos = $MainModel->getAllOtrosConocimientos();
            $json_languages = json_encode($languages_prog, JSON_INVALID_UTF8_IGNORE);
            $json_proyectos = json_encode($proyectos, JSON_INVALID_UTF8_IGNORE);
            $json_complementos_dev = json_encode($complementos_dev, JSON_INVALID_UTF8_IGNORE);
            $json_otros_complementos = json_encode($otros_conocimientos, JSON_INVALID_UTF8_IGNORE);
            view("homepage.indexHomePage", [
                "languages_prog" => $languages_prog,
                "json_languages" => $json_languages,
                "proyectos" => $proyectos,
                'complementos_dev' => $complementos_dev,
                "json_proyectos" => $json_proyectos,
                "json_complementos_dev" => $json_complementos_dev,
                "otros_conocimientos" => $otros_conocimientos,
                "json_otros_complementos" => $json_otros_complementos
            ]);
        }
    }
?>