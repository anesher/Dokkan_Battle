<?php
include_once 'cartas.php';
include_once 'usuario.php';
    class Tiradas extends Cartas {
        private int $id_tirada;
        private DateTime $fecha_tirada;
        public function __construct($id_tirada, $fecha_tirada, $id_carta, $id_usuario){
            parent::__construct($id_carta,$id_usuario);
            $this->id_tirada = $id_tirada;
            $this->fecha_tirada = $fecha_tirada;
        }
        //Getter
        public function getIdTirada() {
            return $this->id_tirada;
        }
        public function getFechaTirada() {
            return $this->fecha_tirada;
        }
        //Setter
        public function setIdTirada($id_tirada) {
            $this->id_tirada = $id_tirada;
        }
        public function setFechaTirada($fecha_tirada) {
            $this->fecha_tirada = $fecha_tirada;
        }

    }
?>