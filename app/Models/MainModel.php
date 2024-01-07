<?php
    class MainModel extends Conexion{
        private $db;

        public function __construct(){
            $this->db = self::conectar();
        }

        public function getAllLanguages(){
            try{
                $sql = "SELECT * FROM languages_p ORDER BY id_lang ASC";
                $stmt = $this->db->query($sql);
                if(!$stmt->execute()){
                    return false;
                }
                else{
                    $registros = $stmt->fetchAll(PDO::FETCH_ASSOC);
                    return $registros;
                }
            }
            catch(PDOException $e){
                Logger::error($e->getMessage());
                die("Ha ocurrido un error en la conexión con sqlite");
            }
        }

        public function getAllProyectos(){
            try{
                $sql = "SELECT * FROM proyectos ORDER BY orden ASC";
                $stmt = $this->db->query($sql);
                if(!$stmt->execute()){
                    return false;
                }
                else{
                    $registros = $stmt->fetchAll(PDO::FETCH_ASSOC);
                    return $registros;
                }
            }
            catch(PDOException $e){
                Logger::error($e->getMessage());
                die("Ha ocurrido un error en la conexión con sqlite");
            }
        }

        public function getAllComplementosDev(){
            try{
                $sql = "SELECT * FROM complementos_dev ORDER BY orden ASC";
                $stmt = $this->db->query($sql);
                if(!$stmt->execute()){
                    return false;
                }
                else{
                    $registros = $stmt->fetchAll(PDO::FETCH_ASSOC);
                    return $registros;
                }
            }
            catch(PDOException $e){
                Logger::error($e->getMessage());
                die("Ha ocurrido un error en la conexión con sqlite");
            }
        }

        public function getAllOtrosConocimientos(){
            try{
                $sql = "SELECT * FROM otros_conocimientos ORDER BY orden ASC";
                $stmt = $this->db->query($sql);
                if(!$stmt->execute()){
                    return false;
                }
                else{
                    $registros = $stmt->fetchAll(PDO::FETCH_ASSOC);
                    return $registros;
                }
            }
            catch(PDOException $e){
                Logger::error($e->getMessage());
                die("Ha ocurrido un error en la conexión con sqlite");
            }
        }
    }
?>