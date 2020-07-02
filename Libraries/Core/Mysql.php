<?php

    class Mysql extends Conexion {

        private $conexion;
        private $strquery;
        private $arrvalues;

        function __construct()
        {
            $this->conexion = new Conexion();
            $this->conexion = $this->conexion->conect();
        }

        //Insertar un registro
        public function insert(string $query, array $arrvalues){

            $this->strquery = $query;
            $this->arrVAlues = $arrvalues;


            $insert = $this->conexion->prepare($this->strquery);
            $resInsert = $insert->execute($this->arrVAlues);
            
            if($resInsert){
                $lastInsert = $this->conexion->lastInsertId();
            }else{
                $lastInsert = 0;
            }
            return $lastInsert;
        }

        //Buscar un registo
        public function select(string $query){

            $this->strquery = $query;
            $result = $this->conexion->prepare($this->strquery);
            $result->execute();
            $data = $result->fetch(PDO::FETCH_ASSOC);
            return $data;
        }

        //Devolver todos los registros
        public function select_all(string $query){

            $this->strquery = $query;
            $result = $this->conexion->prepare($this->strquery);
            $result->execute();
            $data = $result->fetchall(PDO::FETCH_ASSOC);
            return $data;
        }

        //Actualizar registros
        public function update(string $query, array $arrvalues){

            $this->strquery = $query;
            $this->arrVAlues = $arrvalues;
            $update = $this->conexion->prepare($this->strquery);
            $resExecute = $update->execute($this->arrVAlues);
            return $resExecute;
        }

        //Eliminar un registro
        public function delete(string $query){

            $this->strquery = $query;
            $result = $this->conexion->prepare($this->strquery);
            $del = $result->execute();
            return $del;
        }

    }

?>