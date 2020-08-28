<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Documentos extends MY_Controller {

	public $data;	
	function __construct(){
		parent::__construct();
		$this->_auth();
		
		$this->load->model("Documentos_model");
		$this->load->model("Profissionais_model");

		$this->data['user_id'] = $this->session->userdata('userdata')['id'];
		$this->data['admin'] = $this->session->userdata('userdata')['principal'];
		$this->data['tipo_id'] = $this->session->userdata('userdata')['tipo_id'];

		//adicione os campos da busca
		$camposFiltros["id"] = "Id";
		$camposFiltros["nome_convenio"] = "Nome Convenio";
		$this->data['campos']    = $camposFiltros;
	}
	
    public function index(){
		
		if($this->data['admin'] != 1) {
			$this->db->where("d.profissional_id", $this->data['user_id']);
		}

        $resultDocumentos = $this->db
			->select("d.*, pr.nome_prof")
			->from("documentos AS d")
			->join("profissionais AS pr", "d.profissional_id = pr.id")
			->get();
		
		$this->data['listaDocumentos'] = $resultDocumentos->result();

		$displayed = ($this->data['tipo_id'] != 1) ? $displayed = "style='display:none;'" : $displayed = "";
		$this->data['displayed'] = $displayed;

	}

	public function criar(){
		
		//Campos relacionados
		//caso seja necessario adicione os relacionamento aqui
		if($this->data['admin'] != 1) {
			$profissionais = $this->Profissionais_model->getProfissionalById($this->data['user_id']);
		} else {
			$profissionais = $this->Profissionais_model->getProfissionais();
		}
		$this->data['listaProfissionais'] = array();
		foreach ($profissionais as $profissionais) {
			$this->data['listaProfissionais'][$profissionais->id] = $profissionais->nome_prof;
		}
		//fim Campos relacionados
	}
	
	public function salvar_documentos() {
		$data = array();
		if($this->input->post('enviar')){
			if(isset($_FILES['files']['name']) && !empty($_FILES['files']['name'])){
				$filesCount = count($_FILES['files']['name']);

				for($i = 0; $i < $filesCount; $i++){
					$_FILES['file']['name']     = $_FILES['files']['name'][$i];
					$_FILES['file']['type']     = $_FILES['files']['type'][$i];
					$_FILES['file']['tmp_name'] = $_FILES['files']['tmp_name'][$i];
					$_FILES['file']['error']    = $_FILES['files']['error'][$i];
					$_FILES['file']['size']     = $_FILES['files']['size'][$i];
					
					$config['upload_path'] = FCPATH . '/public/uploads/arquivos/' . date("Ymd");
					if( !is_dir($config['upload_path']) ){
						mkdir($config['upload_path'], 0777, TRUE);
					}
					$config['allowed_types'] 	= 'jpg|jpeg|png|pdf';
					$config['max_size']			= 2*1024;
					$config['encrypt_name'] 	= TRUE;
					
					$this->load->library('upload', $config);
					$this->upload->initialize($config);
					
					if($this->upload->do_upload('file')){
						$fileData = $this->upload->data();
						$projectsFile[$i]['profissional_id']	= $this->input->post("profissionais_id", TRUE);
						$projectsFile[$i]['descricao']			= $this->input->post("descricao", TRUE);
						$projectsFile[$i]['nome_arquivo']		= $fileData['file_name'];
						$projectsFile[$i]['url'] 				= 'public/uploads/arquivos/' . date("Ymd") . '/';
						$projectsFile[$i]['data_envio'] 		= formatar_data($this->input->post("data_envio", TRUE));
						if(!empty($projectsFile)){
							$this->db->insert("documentos", $projectsFile[$i]);

							$this->session->set_flashdata("msg_success", "Registro adicionado com sucesso!");
							redirect('documentos/index');
						}
					}
				}
			}
		}
	}
    
}