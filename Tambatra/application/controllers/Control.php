<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Control extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('news_model');
	}

	public function index()
	{
		$this->load->view('welcome_message');
	}	

	public function ListeCategorie(){
		$this->load->model('news_model');
		$data = array();
		$data['base'] = $this->news_model->SelectCategorie();

		$this->load->view('AjouterCategorie',$data);
	}

	public function InsertCat()
	{
		if($_GET['Nom'] != '')
		{
			$this->load->model('news_model');
			$this->news_model->InsererCategorie($_GET['Nom']);
		}

		$this->ListeCategorie();
	}

	public function prendreCategorie(){

		
	}

	public function deletecat()
	{
		$Id =  $_GET['iddelete'];
		echo $Id;
		$this->news_model->DropCategorie( $Id);
		$this->ListeCategorie();
	}

	public function AfficherAccueil()
	{
		$this->load->model('news_model');
		$data = array();
		$id=$this->session->userdata('id');
		$data['Liste'] = $this->news_model->AfficherProduitAutreUser($id);
		$this->load->view('Acceuil',$data);
	}

	public function ListeCategorieSelect(){
		$this->load->model('news_model');
		$data = array();
		$id=$this->session->userdata('id');
		$data['Cat'] = $this->news_model->SelectCategorie($id);

		$this->load->view('AjouterObjet',$data);
	}

	public function InsertObjet()
	{
		$this->load->model('news_model');
		$id=$this->session->userdata('id');
		$this->news_model->AjouterObjet($_GET['Nom'],$_GET['Description'],$_GET['Prix'],$_GET['IdCategorie'],$id);
		$this->ListeCategorieSelect();
		// redirect('control/ListeCategorieSelect');
	}

	public function AfficherSesObjet()
	{
		$this->load->model('news_model');
		$data = array();
		$id=$this->session->userdata('id');
		$data['Liste'] = $this->news_model->select_objet($id);
		return $data['Liste'];
	}

	public function RecupereIdObjet()
	{
		$Liste = $this->AfficherSesObjet();
		$data = array(
			'IdObj' => $_GET['IdObjet'],
			'Liste' => $Liste
		);
		$this->load->view('Echange',$data);
	}

	public function Proposer()
	{
		$this->load->model('news_model');
		$this->news_model->Proposer($_GET['IdObjet'],$_GET['IdEchange']);
		$this->AfficherAccueil();
	}

//---------------------------------------- apropos Categories -------------------------------------------------------

	public function modifier_categorie(){
		$array= array();
		if($this->input->get('Id')!=null){
			$array['idCategorie']=$this->input->get('Id');
		}
		else{
			redirect('control/ListeCategorie');
		}
		$this->load->view('modifCategorie' , $array);
	}

	public function modifier(){
		$idCategorie=$this->input->get('idCategorie');
		$nouveau_nom= $this->input->get('nouveau_nom_categorie');
		$this->load->model('categorie');
		echo $nouveau_nom;
		$indice = $this->categorie->modifier_categorie1($idCategorie , $nouveau_nom);
		redirect('control/ListeCategorie');
	}

//------------------------------------------------ Profil --------------------------------------------------------------------------
	public function afficher_profil(){

		$this->load->model('profil');
		$id=$this->session->userdata('id');
		$tableau = $this->profil->select_objet($id);
		$data=array();
		$data['information']=$tableau;
		$this->load->view('profil' ,$data );
	}

	public function supprimer_objet(){
		$this->load->model('profil');
		$tableau = $this->profil->supprimer_un_objet($this->input->get('idObjet'));
		redirect('control/afficher_profil');
	}

	public function page_modifier_objet(){
		$idObjet= $this->input->get('idObjet');
		$this->load->model('profil');
		$this->load->model('categorie');
		$tableau = $this->profil->select_par_idObjet($idObjet);
		$categorie = $this->categorie->SelectCategorie();
		$data = array();
		if(count($tableau)!=0 ){
			$data['information_objet']=$tableau;
			$data['les_categories']=$categorie;
			$data['idObjet']=$idObjet;
		}else{
			redirect('control/afficher_profil');
		}	
		$this->load->view('modifier_objet' , $data);
	}

	public function modifier_objet(){
		$this->load->model('profil');
		$nom = $this->input->get('nom');
		$description = $this->input->get('description');
		$prix = $this->input->get('prix');
		$categorie = $this->input->get('categorie');
		$idObjet = $this->input->get('idObjet');
		$this->profil->modifier_objet($idObjet , $nom , $description , $prix , $categorie);
		redirect('control/afficher_profil');
	}
	public function refuser_proposition(){
		$this->load->model('proposition');
		$this->proposition->refuser_proposition(1 ,2);
	}

// ----------------------------------------------------------------------------------------------------------------
	public function NombreUtilisateur()
	{
		$this->load->model('news_model');
		$data['Nombre'] = $this->news_model->CompteEchange();
		$this->load->view('Statistique',$data);
	}

	public function InfoPrio()
	{
		$this->load->model('news_model');
		$data['Proprietaire'] = $this->news_model->SelectAppartenance($_GET['IdProduit']);
		$this->load->view('Appartenance',$data);
	}

	// ------------------------------------------------pour le recherche--------------------------------------------------------

public function page_recherche(){
	$this->load->model('categorie');
	$data= array();
	$categorie = $this->categorie->SelectCategorie();
	$data['les_categories']=$categorie;
	
	$data['les_categories']=$categorie;
	$this->load->view('recherche' , $data);
}
public function recherche(){
	$mot_cle=$this->input->get('mot_cle');
	$description= $this->input->get('categorie');
	$this->load->model('recherche');
	$resultat = $this->recherche->recherche_multi($mot_cle , $description);
	$data= array();
	$data['les_resultat'] = $resultat;
	$this->load->view('resultat_recherche' , $data);
	
}


//----------------------------------------------------------Deconnexion-----------------------------------------------------------------

public function Detruire()
{
	$this->session->unset_userdata('id');
	$this->session->unset_userdata('page');
	$this->session->unset_userdata('idUobject');
	$this->session->unset_userdata('Idaproposition');
	$this->session->unset_userdata('AllProposition');
	echo $this->session->userdata('id')."    ".$this->session->userdata('page')."   ".$this->session->userdata('idUobject');
	
	redirect('Login/index');
}

}
  