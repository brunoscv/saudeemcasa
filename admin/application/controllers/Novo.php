<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Novo extends MY_Controller {

    public $data;	
	function __construct(){
		parent::__construct();
		$this->_auth();
		
        $this->load->model("Financeiro_model");
        $this->load->model("Profissionais_model");
	}
	
	public function index(){

        
    }
}