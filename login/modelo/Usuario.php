<?php
    class Usuario{
        // --Atributos
        private $id_int;
        private $alias_str;
        private $nombre_str;
        private $contrasena_str;

       // ---Setters
       public function setId($id){
        $this->id_int=$id;
       }

       public function setAlias($alias){
        $this->alias_str=$alias;
       }

       public function setNombre($nombre){
        $this->nombre_str=$nombre;
       }

       public function setContrasena($contrasena){
        $this->contrasena_str=$contrasena;
       }

       // ---Gettters
        public function getId() {
            return $this->id_int;
        }

        public function getAlias() {
            return $this->alias_str;
        }

        public function getNombre() {
            return $this->nombre_str;
        }

        public function getContrasena() {
            return $this->contrasena_str;
        }
    }
?>