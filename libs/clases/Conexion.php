<?php
    abstract class Conexion{
        static function conectar(){
            try{
                $link = new PDO("sqlite:" .__DIR__ . "/../../config/system/publicDB.db");
                $link->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
                return $link;
            }
            catch(PDOException $e){
                Logger::critical($e->getMessage());
                die('Ha ocurrido un error al conectarse al servidor! el programa no puede continuar.');
            }
        }

    }
?>