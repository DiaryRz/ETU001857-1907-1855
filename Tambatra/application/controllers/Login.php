<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->database();
		$this->load->model('fonction');
		//$this->load->helper();
	}
	
	 public function index()
	{
		$page = 'welcome_message';
		$this->session->set_userdata('page',$page);
		$this->load->view('index');
		
	}	


	public function admin(){
		$admin = array();
		$admin=$this->fonction->getAdmin();
		//echo $admin[0]['Email'];
		$data = array(
			'admin' => $admin[0]['IdUtilisateur'],
			'email' => $admin[0]['Email'],
			'pass' => $admin[0]['MotDePasse']
		);
		$this->load->view('index',$data);
	}
	
	public function verification_login(){
		$email = $this->input->post('email');
        $password = $this->input->post('pw');
		//echo $email;
		$data= array();
		$data=$this->fonction->getUtilisateur();
		for ($i=0; $i < count($data) ; $i++) {
			
			if ($email==$data[$i]['Email'] && $password==$data[$i]['MotDePasse']) {
				$id = $this->fonction->getIdParEmail($email,$password);
				$this->session->set_userdata('id',$id);
				if($i==0){
					redirect(site_url('Control/ListeCategorie'));
				}else{
					redirect(site_url('Control/AfficherAccueil'));
				}
			}
		}
		$error = array(
			'email' => $email,
			'pass' => $password
		);
		//redirect(site_url('Login/index'));
		$this->load->view('index',$error);
	}

	public function verification_inscription(){
		$nom=$this->input->post('nom');
		$email = $this->input->post('email');
        $password = $this->input->post('pw');
		$passConf = $this->input->post('pass_conf');
		$sexe = $this->input->post('genre');
		if($passConf==$password){
			$verif=$this->fonction->insertion($nom,$email,$password,$sexe);
			$id = $this->fonction->getId($nom);
			$this->session->set_userdata('id',$id);
			redirect(site_url('Control/AfficherAccueil'));
		}else{
			$data = array(
				'nom' => $nom,
				'email' => $email,
				'password' => $password,
				'passconf' => $passConf
			);
			$this->load->view('index',$data);
		}
	}	

	public function accueil(){
		$this->load->view('accueil');
	}


	public function button(){
		$page = 'inscription';
		$this->session->set_userdata('page',$page);
		$this->load->view('index',$page);
	}
}
