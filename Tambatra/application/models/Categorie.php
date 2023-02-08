<?php 
   class Categorie extends CI_Model {
    function modifier_categorie1($idCategorie , $nouveau_nom_categorie){
        $sql="update categorie set NomCategorie=%s where IdCategorie= %s";
        $sql= sprintf($sql , $this->db->escape($nouveau_nom_categorie) , $this->db->escape($idCategorie));
        $this->db->query($sql);
        return 1;
    }
    public function load_avatar() {
        $upload_data = $this->upload->data();
        $this->db->set('user_avatar', $upload_data['file_name']);
        return $this->db->insert('avatar');  
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

}
?>