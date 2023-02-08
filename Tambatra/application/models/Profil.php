<?php 
   class Profil extends CI_Model {
    // function modifier_categorie1($idCategorie , $nouveau_nom_categorie){
    //     $sql="update categorie set nomCategorie=%s where idCategories= %s";
    //     $sql= sprintf($sql , $this->db->escape($nouveau_nom_categorie) , $this->db->escape($idCategorie));
    //     $this->db->query($sql);
    //     return 1;
    // }

    // public function load_avatar() {
    //     $upload_data = $this->upload->data();
    //     $this->db->set('user_avatar', $upload_data['file_name']);
    //     return $this->db->insert('avatar');  
    //   }

    public function do_upload(){
        $config = array(
            'upload_path' => "./uploads/",
            'allowed_types' => "gif|jpg|png|jpeg|pdf",
            'overwrite' => TRUE,
            'max_size' => "2048000", // Can be set to particular file size , here it is 2 MB(2048 Kb)
            'max_height' => "768",
            'max_width' => "1024"
        );
            $this->load->library('upload', $config);
            if($this->upload->do_upload())
            {
                $data = array('upload_data' => $this->upload->data());
                $this->load->view('upload_success',$data);
            }
            else
            {
                $error = array('error' => $this->upload->display_errors());
                $this->load->view('custom_view', $error);
            }
        }

    
    public function obtenir_un_image($idObjet){
        $sql="select * from photo where idObjet=%s limit 1";
        $sql= sprintf($sql , $this->db->escape($idObjet));
        $sql = $this->db->query($sql);
        $tableau= array();
        foreach($sql->result_array() as $ligne){
            $tableau[]=$ligne;
        }
        return $tableau;
    }
    

    public function select_objet($idUtilisateur){
        $sql="select * from Objet where IdUtilisateur=%s";
        $sql= sprintf($sql , $this->db->escape($idUtilisateur));
        $sql = $this->db->query($sql);
        $tableau= array();
        $this->load->model('profil');
        foreach($sql->result_array() as $ligne){
            $table = $this->profil->obtenir_un_image($ligne['IdObjet']);
            if(count($table)!=0){
                
                $ligne['image']=$table[0]['LienPhoto'];
            }
            else{
                 $ligne['image']="hahha";
            }
            $tableau[]=$ligne;
        }
        return $tableau;
    }   

    public function  supprimer_un_objet($idObjet){
        $sql="delete from objet where IdObjet=%s";
        $sql= sprintf($sql , $this->db->escape($idObjet));
        $this->db->query($sql);
    }

    public function modifier_objet( $idObjet, $nom  , $description , $prix , $categorie){
        $sql=" update objet set NomObjet=%s,Description=%s,Prix=%s ,IdCategorie=%s   where IdObjet=%s";
        $sql= sprintf($sql , $this->db->escape($nom) ,$this->db->escape($description) , $this->db->escape($prix) , $this->db->escape($categorie) , $this->db->escape($idObjet));
        $this->db->query($sql);   
    }

    public function select_par_idObjet($idObjet){
        $sql="select * from Objet where IdObjet=%s";
        $sql= sprintf($sql , $this->db->escape($idObjet));
        $sql = $this->db->query($sql);
        $tableau= array();
        $this->load->model('profil');
        foreach($sql->result_array() as $ligne){
            $table = $this->profil->obtenir_un_image(1);
            $tableau[]=$ligne;
        }
        return $tableau;
    }
}
?>