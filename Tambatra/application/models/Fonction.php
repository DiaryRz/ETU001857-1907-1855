<?php
class Fonction extends CI_Model{
    public function _construct(){
        parent::_construct();
    }
    public function getUtilisateur(){
        $query = "SELECT * FROM utilisateur";
        $query =$this->db->query($query);
        $AllUtilisateur = $query->result_array();
        return $AllUtilisateur;
    }


    public function getAdmin(){
        $query = "SELECT * FROM utilisateur where idUtilisateur = 1";
        $query =$this->db->query($query);
        $admin = $query->result_array();
        return $admin;
    }

    public function insertion($nom,$email,$passe,$sexe){
        $sql ="INSERT INTO utilisateur VALUES (NULL,%s,%s,%s,%s)";
        $sql =sprintf($sql,$this->db->escape($nom),
        $this->db->escape($email),
        $this->db->escape($passe),$this->db->escape($sexe));
        echo $sql;
       $this->db->query($sql);
        return $this->db->affected_rows();
    }

    public function getId($nom){
        $query = "SELECT IdUtilisateur FROM utilisateur WHERE nomUtilisateur = %s";
        $query = sprintf($query,$this->db->escape($nom));
        $query =$this->db->query($query);
        $id = $query->row_array();
        return $id['IdUtilisateur'];
    }  
    
    public function getIdParEmail($email,$pass){
        $query = "SELECT IdUtilisateur FROM utilisateur WHERE email = %s and MotdePasse = %s";
        $query = sprintf($query,$this->db->escape($email),$this->db->escape($pass));
        $query =$this->db->query($query);
        $id = $query->row_array();
        return $id['IdUtilisateur'];
    }   
} 
?>