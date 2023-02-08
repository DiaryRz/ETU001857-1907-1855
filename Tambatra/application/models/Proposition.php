<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Proposition extends CI_Model{
    public function listeProposition($id){
        $sql = "SELECT objet.IdObjet,objet.NomObjet,Objet.Description,objet.Prix,
        objet.IdCategorie,objet.IdUtilisateur,objet.idUtilisateur,Proposition.IdObjetEchange FROM objet 
        join Proposition on objet.IdObjet = Proposition.IdObjet 
        where objet.IdUtilisateur = %s";
        $sql =sprintf($sql,$this->db->escape($id));
        $query =$this->db->query($sql);
        $AllUtilisateur = $query->result_array();
        return $AllUtilisateur;
    }

    public function getObject($id){
        $query = "SELECT * FROM objet where idUtilisateur = %s";
        $query =sprintf($query,$this->db->escape($id));
        $query =$this->db->query($query);
        $admin = array();
        foreach($query->result_array() as $row){
            $row['image']=$this->getPhoto($row['IdObjet']);
            $admin[]=$row;
        }
        return $admin;
    }

    public function getObjects($id){
        $query = "SELECT * FROM objet where idObjet = %s";
        $query =sprintf($query,$this->db->escape($id));
        $query =$this->db->query($query);
        $admin = array();
        foreach($query->result_array() as $row){
            $row['image']=$this->getPhoto($row['IdObjet']);
            $admin[]=$row;
        }
        return $admin;
    }

    public function checkProposition($idObjet){
        $query = "SELECT IdProposition FROM Proposition where idObjet = %s";
        $query =sprintf($query,$this->db->escape($idObjet));
        $query =$this->db->query($query);
        $row= $query->row_array(); 
        //echo $row['IdProposition'];
        return $row['IdProposition'];
    }

    public function getPhoto($id){
        $query = "SELECT * FROM photo where idObjet = %s";
        $query =sprintf($query,$this->db->escape($id));
        $query =$this->db->query($query);
        $photo = $query->result_array();
        return $photo;
    }

    public function getAllProposition($id){
        $query = "SELECT * FROM Proposition where idObjet = %s";
        $query =sprintf($query,$this->db->escape($id));
        $query =$this->db->query($query);
        $admin = array();
        foreach($query->result_array() as $row){
            $row['objet'] = $this->getObjects($row['IdObjetEchange']);
            $admin[]=$row;
        }
        return $admin;
    }

    // public function getPropositionWithProno($id){
    //     $query = "SELECT * FROM Proposition where idProposition = %s";
    //     $query =sprintf($query,$this->db->escape($id));
    //     $query =$this->db->query($query);
    //     $admin = array();
    //     $admin = $query->result_array();
    //     return $admin;
    // }

    public function getProposition($id){
        $query = "SELECT * FROM Proposition where idObjet = %s";
        $query =sprintf($query,$this->db->escape($id));
        $query =$this->db->query($query);
        $admin = array();
        $admin = $query->result_array();
        return $admin;
    }
    
    public function insertHistory($idObjet,$idUser1,$idObjetEchange,$idUser2){
        $sql ="INSERT INTO Historique(IdObjet,IdUtilisateur1,IdObjetEchange,IdUtilisateur2) VALUES (%s,%s,%s,%s)";
        $sql =sprintf($sql,$this->db->escape($idObjet),
        $this->db->escape($idUser1),
        $this->db->escape($idObjetEchange),
        $this->db->escape($idUser2));
        echo $sql;
       $this->db->query($sql);
        return $this->db->affected_rows();
    }


    public function update($id,$idobjet){
        $sql="UPDATE Objet set idUtilisateur = %s where idObjet = %s";
        $sql = sprintf($sql,$this->db->escape($id),
        $this->db->escape($idobjet));
        $valiny =$this->db->query($sql);
        return $valiny;
    }

    public function delete($idProposition){
        $sql="DELETE FROM Proposition WHERE idProposition = %s";
        $sql = sprintf($sql,$this->db->escape($idProposition));
        $value = $this->db->query($sql);
        return $value;
    }

    function refuser_proposition($idObjet , $idObjetEchange){
        $sql="delete from proposition where idObjet=%s and IdObjetEchange=%s;";
        $sql= sprintf($sql , $this->db->escape($idObjet) , $this->db->escape($idObjetEchange));
        $this->db->query($sql);
        return 1;
    }

    // public function deleteInsert($id,$iduser1,$iduser2){
    //     $table = $this->getProposition($id);
    //     echo $id;
        //$idObjet= $table[0]['IdObjet'];
        //$idObjetEchange = $table[0]['IdObjetEchange'];
        // echo  $idObjet;
        // echo  $idObjetEchange;
        //echo $idObjetEchange;
        // $valiny = $this->insertHistory($idObjet,$iduser1,$idObjetEchange,$iduser2);
        // $update1=$this->update($iduser2,$idObjet,$iduser1);
        // $update2=$this->update($iduser1,$idObjetEchange,$iduser2);
        // $valiny =$this->delete($id);
        //return $valiny;
    //}

}
?>