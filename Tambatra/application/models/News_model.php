<?php
    if( !defined('BASEPATH') ) exit('No direct script access allowed') ;

    class News_model extends CI_Model
    {
        
        public function Rep(){
            return array('Nom'=>'Rasoa','Email'=>'mailRasoa'); 
        }

        public function SelectCategorie(){
            $query = $this->db->query('Select * from Categorie');
            $result = array();
            foreach($query->result_array() as $row)
            {
                $result[] = $row;
            }
            return $result;
        }

        public function InsererCategorie($NomCat)
        {
            $sql = " INSERT INTO Categorie(NomCategorie) values (%s) ";
            $sql = sprintf($sql,$this->db->escape($NomCat));
            $this->db->query($sql);
            // echo $this->db->affected_rows();
        }

        public function DropCategorie($Id)
        {
            $sql = "DELETE FROM Categorie where IdCategorie = (%s) ";
            $sql = sprintf($sql,$this->db->escape($Id));
            $this->db->query($sql);
        }

        public function AfficherPhotoUser($IdObjet)
        {
            $query = $this->db->query("Select * from Photo where IdObjet =".$IdObjet." limit 1");
            $result = array();
            foreach($query->result_array() as $row)
            {
                $result[] = $row;
            }
            return $result;
        }

        public function AfficherProduitAutreUser($Id)
        {
            $query = $this->db->query("Select * from Objet where IdUtilisateur !=".$Id);
            $result = array();
            foreach($query->result_array() as $row)
            {
                $Img = $this->AfficherPhotoUser('1');
                if(count($Img) > 0)
                {
                    $row['Image'] = $Img[0]['LienPhoto'];
                }else{
                    $row['Image'] = "Photo1.jpg";
                }
                $result[] = $row;
            }
            return $result;
        }

        public function InsertAppartenance($IdObjet,$IdUser)
        {
            $sql = " INSERT INTO Appartenance(IdObjet,IdUtilisateur) values (%s,%s) ";
            $sql = sprintf($sql,$this->db->escape($IdObjet),$this->db->escape($IdUser));
            $this->db->query($sql);
        }

        public function AjouterObjet($NomObj,$Description,$Prix,$IdCategorie,$IdUtilisateur)
        {
            $sql = " INSERT INTO Objet(NomObjet,Description,Prix,IdCategorie,IdUtilisateur) values (%s,%s,%s,%s,%s) ";
            $sql = sprintf($sql,$this->db->escape($NomObj),$this->db->escape($Description),$this->db->escape($Prix),$this->db->escape($IdCategorie),$this->db->escape($IdUtilisateur));
            $this->db->query($sql);
            $query = $this->db->query('select last_insert_Id()');
            $row = $query->row_array();
            $this->InsertAppartenance($row['last_insert_Id()'],$IdUtilisateur);
        }

        public function Proposer($IdObjet,$IdObjetEchange)
        {
            $sql = " INSERT INTO Proposition(IdObjet,IdObjetEchange) values (%s,%s) ";
            $sql = sprintf($sql,$this->db->escape($IdObjet),$this->db->escape($IdObjetEchange));
            $this->db->query($sql);
        }

        public function select_objet($idUtilisateur){
            $sql="select * from Objet where IdUtilisateur=%s";
            $sql= sprintf($sql , $this->db->escape($idUtilisateur));
            $sql = $this->db->query($sql);
            $tableau= array();
            foreach($sql->result_array() as $ligne){
                $tableau[]=$ligne;
            }
            return $tableau;
        } 

// -------------------------------------------------------------------------------------------------        
        public function CompteUtilisateur()
        {
            $query = $this->db->query(' select count(IdUtilisateur) from Utilisateur ');
            $row = $query->row_array();
            $Nb = $row['count(IdUtilisateur)'] - 1;
            return $Nb;
        }

        public function CompteEchange()
        {
            $query = $this->db->query(' select count(IdHistorique) from Historique ');
            $row = $query->row_array();
            $Nb = $row['count(IdHistorique)'];
            $Rep = array();
            $Rep['Historique'] = $Nb;
            $Rep['Utilisateur'] = $this->CompteUtilisateur();
            return $Rep;
        }

        public function SelectAppartenance($Id)
        {
            $query = $this->db->query("select  Appartenance.IdUtilisateur,Appartenance.IdAppartement,Utilisateur.NomUtilisateur,Objet.NomObjet,Objet.IdObjet,Appartenance.date from Appartenance
                join Utilisateur
                on Appartenance.IdUtilisateur = Utilisateur.IdUtilisateur
                join Objet
                on Objet.IdObjet = Appartenance.IdObjet where Objet.IdObjet =".$Id);
            $result = array();
            foreach($query->result_array() as $row)
            {
                $result[] = $row;
            }
            return $result;
        }
    }
?>