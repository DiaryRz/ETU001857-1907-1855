<?php 
   class Recherche extends CI_Model {
        public function recherche_multi($mot_cle , $categorie){
            $sql="";
            if( strcmp($categorie ,'')==0){
                $sql="SELECT * FROM objet WHERE (NomObjet LIKE '%s%s%s') or (Description LIKE '%s%s%s')";
                $sql = sprintf($sql ,'%' ,$mot_cle ,'%' , $sql ,'%' ,$mot_cle ,'%' );
            } else if(strcmp($mot_cle ,'')==0){
                $sql="SELECT * FROM objet WHERE   (IdCategorie LIKE %s)";
                $sql = sprintf($sql ,$categorie);
            }else if(strcmp($mot_cle ,'')==0 && strcmp($categorie ,'')==0){
                $sql="select * from objet";
            }else{
                $sql="SELECT * FROM objet WHERE   (Description LIKE '%s%s%s') or (Description LIKE '%s%s%s') and (IdCategorie LIKE %s) ";
                $sql = sprintf($sql ,'%' ,$mot_cle ,'%' ,'%' ,$mot_cle ,'%' , $categorie);
            }
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
    }
?>