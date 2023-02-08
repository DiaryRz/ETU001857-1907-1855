<?php 
    class Deconnexion extends CI_Session{
        public function Detruire()
    {
        $this->session->sess_destroy();
    }

    }
?>