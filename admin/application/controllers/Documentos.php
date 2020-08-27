<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Documentos extends MY_Controller {

	public $data;	
	function __construct(){
		parent::__construct();
		$this->_auth();
		
		$this->load->model("Documentos_model");
		$this->load->model("Profissionais_model");

		//adicione os campos da busca
		$camposFiltros["id"] = "Id";
		$camposFiltros["nome_convenio"] = "Nome Convenio";
		$this->data['campos']    = $camposFiltros;
	}
	
    public function index(){
		$user_id = $this->session->userdata('userdata')['id'];
		$admin = $this->session->userdata('userdata')['principal'];
		
        $resultDocumentos = $this->db
                            ->select("d.*, pr.nome_prof")
                            ->from("documentos AS d")
							->join("profissionais AS pr", "d.profissional_id = pr.id")
                            ->get();
		if($admin != 1) {
			$this->db->where("c.profissionais_id", $user_id);
		}
		$this->data['listaDocumentos'] = $resultDocumentos->result();
	}

	public function criar(){
		$profissionais = $this->Profissionais_model->getProfissionais();
		$this->data['listaProfissionais'] = array();
		$this->data['listaProfissionais'][''] = "Escolha um Profissional";
		foreach ($profissionais as $profissionais) {
			$this->data['listaProfissionais'][$profissionais->id] = $profissionais->nome_prof;
		}
	}
	
	public function salvar_documentos() {
		$data = array();
		//arShow($_FILES['files']);exit;
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
						/**$projectsFile[$i]['tamanho'] 		= $fileData['file_size'];
						$projectsFile[$i]['tipo'] 				= $fileData['file_type']; */
						$projectsFile[$i]['url'] 				= base_url() . 'public/uploads/arquivos/' . date("Ymd") . '/';
						$projectsFile[$i]['data_envio'] 		= formatar_data($this->input->post("data_envio", TRUE));
						/**$projectsFile[$i]['clientes_id']		= 1;
						$projectsFile[$i]['status'] 			= 1;
						$projectsFile[$i]['createdAt']			= date("Y-m-d H:i:s"); */
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