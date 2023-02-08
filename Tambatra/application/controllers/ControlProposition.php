<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ControlProposition extends CI_Controller {

    // public function PresseProposition(){
	
	// 	$this->load->view('index',$page);
    // }

    public function __construct(){
        parent::__construct();
        $this->load->model('proposition');
    }

    public function index(){
        
        $id  = $this->session->userdata('id');

        $data =array(); 
        $tableau=$this->proposition->getObject($id);
        $data['proposit'] =$tableau;        
        $page = 'proposition';

		$this->session->set_userdata('page',$page);

        $this->load->view('propositions',$data);
    }

    public function Allproposition(){
        $id = $this->input->get('idObjet');
        //echo "Metypppppppppp".$id;
        $idPropositon =$this->proposition->checkProposition($id);

        $this->session->set_userdata('idUObjet',$id);
        
        $this->session->set_userdata('Idproposition',$idPropositon);

        $data =array(); 
        $tableau =array();
        $tableau=$this->proposition->getAllProposition($id);
        for ($i=0; $i < count($tableau); $i++) { 
            echo $tableau[$i]['objet'][0]['image'][0]['LienPhoto'];
        }
        $data['Allproposit'] =$tableau;

        $page = 'AllProposition';

		$this->session->set_userdata('page',$page);

        $this->load->view('AllProposition',$data);
    }

    public function acceptation(){
        $idObjet = $this->input->get('idObjet');

        $idUtilisateur = $this->session->userdata('id');

        $idUtilisateurObjet=$this->session->userdata('idUObjet');
        
        $idProposition = $this->session->userdata('Idproposition');

        $idUtilisateur2 =   $this->input->get('idUser');
        
        $values=$this->proposition->update($idUtilisateur,$idObjet);
        echo "update1".$values;

        $valueS2 = $this->proposition->update($idUtilisateur2,$idUtilisateurObjet);
        
        echo "update2".$valueS2;

        $valueInsert = $this->proposition->insertHistory($idObjet,$idUtilisateur,$idUtilisateurObjet,$idUtilisateur2);
        echo "insert".$valueInsert;
        $delete = $this->proposition->delete($idProposition);
        echo $delete;

        $this->news_model->InsertAppartenance($idUtiliasteurObjet,$idUtilisateur2);
        $this->news_model->InsertAppartenance($idObjet,$idUtilisateur);
    }

    // public function acceptation(){
    //     $id =$this->input->get('idObjet');
    //     $user2 =$this->input->get('idUser');
    //     $iduser=$this->session->userdata('id');
    //     $this->proposition->deleteInsert($id,$iduser,$user2);
    //     //redirect(site_url('ControlProposition/Allproposition'));
    // }
}
?>