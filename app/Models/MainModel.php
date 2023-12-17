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
    }
?>