<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Imoveis extends MY_Controller
{

	public $data;

	function __construct()
	{
		parent::__construct();
		$this->_auth();

		$this->load->helper('url');

		$this->load->model("Imoveis_model");
		$this->load->model("Proprietarios_model");
	}

	public function index()
	{
		$this->data['listaImoveis'] = $this->Imoveis_model->getImoveis();
	}

	public function criar()
	{
		$this->data['item'] = new StdClass();
		$listaProprietarios = $this->Proprietarios_model->getProprietarios();
		$this->data['listaProprietarios'] = array();
		$this->data['listaProprietarios'][''] = "Escolha um Proprietario";
		foreach ($listaProprietarios as $listaProprietarios) {
			$this->data['listaProprietarios'][$listaProprietarios->id] = $listaProprietarios->nome;
		}
		if ($this->input->post("enviar")) {
			if( $this->form_validation->run('Imoveis') === FALSE ){
				$this->data['msg_error'] = validation_errors("<p>","</p>");
			} else {
				//print_r('$imovel');exit;
				$imovel = array();
				$imovel['proprietario_id'] = $this->input->post("proprietario_id", TRUE);
				$imovel['tipo'] = $this->input->post("tipo", TRUE);
				$imovel['endereco'] = $this->input->post("endereco", TRUE);
				$imovel['numeroEndereco'] = $this->input->post("numeroEndereco", TRUE);
				$imovel['bairro'] = $this->input->post("bairro", TRUE);
				$imovel['complemento'] = $this->input->post("complemento", TRUE);
				$imovel['cidade'] = $this->input->post("cidade", TRUE);
				$imovel['estado'] = $this->input->post("estado", TRUE);
				$imovel['cep'] = $this->input->post("cep", TRUE);
				$imovel['valor'] = $this->input->post("valor", TRUE);
				$imovel['valorCondominio'] = $this->input->post("valorCondominio", TRUE);
				$imovel['valorIPTU'] = $this->input->post("valorIPTU", TRUE);
				$imovel['matriculaIPTU'] = $this->input->post("matriculaIPTU", TRUE);
				$imovel['matriculaAgua'] = $this->input->post("matriculaAgua", TRUE);
				$imovel['matriculaLuz'] = $this->input->post("matriculaLuz", TRUE);
				$imovel['matriculaGas'] = $this->input->post("matriculaGas", TRUE);
				$imovel['dimensoesDoTerreno'] = $this->input->post("dimensoesDoTerreno", TRUE);
				$imovel['vagasGaragem'] = $this->input->post("vagasGaragem", TRUE);
				$imovel['segunda'] = $this->input->post("segunda", TRUE);
				$imovel['terca'] = $this->input->post("terca", TRUE);
				$imovel['quarta'] = $this->input->post("quarta", TRUE);
				$imovel['quinta'] = $this->input->post("quinta", TRUE);
				$imovel['sexta'] = $this->input->post("sexta", TRUE);
				$imovel['sabado'] = $this->input->post("sabado", TRUE);
				$imovel['domingo'] = $this->input->post("domingo", TRUE);
				//print_r($imovel);exit;
				$data = array();

				// Count total files
				$countfiles = count($_FILES['files']['name']);
				// Looping all files
				for ($i = 0; $i < $countfiles; $i++) {
					if (!empty($_FILES['files']['name'][$i])) {
						// Define new $_FILES array - $_FILES['files']
						$_FILES['files']['name'] = $_FILES['files']['name'][$i];
						$_FILES['files']['type'] = $_FILES['files']['type'][$i];
						$_FILES['files']['tmp_name'] = $_FILES['files']['tmp_name'][$i];
						$_FILES['files']['error'] = $_FILES['files']['error'][$i];
						$_FILES['files']['size'] = $_FILES['files']['size'][$i];

						// Set preference
						$config['upload_path'] = '<?=base_url(); ?>uploads/';
						$config['allowed_types'] = 'jpg|jpeg|png|gif';
						$config['max_size'] = '5000'; // max_size in kb
						$config['file_name'] = $_FILES['files']['name'][$i];

						//Load upload library
						$this->load->library('upload', $config);
						// File upload
						if ($this->upload->do_upload('file')) {
							// Get data about the file
							$uploadData = $this->upload->data();
							$filename = $uploadData['file_name'];

							// Initialize array
							$data['filenames'][] = $filename;
						}
					}

				}
				$this->db->insert("imoveis", $imovel);

				$this->data['msg_success'] = $this->session->set_flashdata("msg_success", "Imóvel adicionado com sucesso!");
				redirect('imoveis/index');
			}
		}
	}

	public function editar()
	{
		$id = $this->uri->segment(3);

		$imovel = $this->db->from("imoveis AS m")->where("id", $id)->get()->row();
		$listaProprietarios = $this->Proprietarios_model->getProprietarios();
		$this->data['listaProprietarios'] = array();
		foreach ($listaProprietarios as $listaProprietarios) {
			$this->data['listaProprietarios'][$listaProprietarios->id] = $listaProprietarios->nome;
		}
		//print_r($listaProprietarios);exit;
		if (!$imovel) {
			$this->session->set_flashdata("msg_error", "Imóvel não encontrado!");
			redirect('imoveis/index');
		} else {
			$this->data['item'] = &$imovel;
			//print_r($this->input->post("proprietario_id"));exit;
			if ($this->input->post("enviar")) {
				if( $this->form_validation->run('Imoveis') === FALSE ){
					$this->data['msg_error'] = validation_errors("<p>","</p>");
				} else {
					//print_r('Teste');exit;
					$imovel = array();
					$imovel['id'] = $id;
					$imovel['proprietario_id'] = $this->input->post("proprietario_id", TRUE);
					$imovel['tipo'] = $this->input->post("tipo", TRUE);
					$imovel['endereco'] = $this->input->post("endereco", TRUE);
					$imovel['numeroEndereco'] = $this->input->post("numeroEndereco", TRUE);
					$imovel['bairro'] = $this->input->post("bairro", TRUE);
					$imovel['complemento'] = $this->input->post("complemento", TRUE);
					$imovel['cidade'] = $this->input->post("cidade", TRUE);
					$imovel['estado'] = $this->input->post("estado", TRUE);
					$imovel['cep'] = $this->input->post("cep", TRUE);
					$imovel['valor'] = $this->input->post("valor", TRUE);
					$imovel['valorCondominio'] = $this->input->post("valorCondominio", TRUE);
					$imovel['valorIPTU'] = $this->input->post("valorIPTU", TRUE);
					$imovel['matriculaIPTU'] = $this->input->post("matriculaIPTU", TRUE);
					$imovel['matriculaAgua'] = $this->input->post("matriculaAgua", TRUE);
					$imovel['matriculaLuz'] = $this->input->post("matriculaLuz", TRUE);
					$imovel['matriculaGas'] = $this->input->post("matriculaGas", TRUE);
					$imovel['dimensoesDoTerreno'] = $this->input->post("dimensoesDoTerreno", TRUE);
					$imovel['vagasGaragem'] = $this->input->post("vagasGaragem", TRUE);
					$imovel['segunda'] = $this->input->post("segunda", TRUE);
					$imovel['terca'] = $this->input->post("terca", TRUE);
					$imovel['quarta'] = $this->input->post("quarta", TRUE);
					$imovel['quinta'] = $this->input->post("quinta", TRUE);
					$imovel['sexta'] = $this->input->post("sexta", TRUE);
					$imovel['sabado'] = $this->input->post("sabado", TRUE);
					$imovel['domingo'] = $this->input->post("domingo", TRUE);

					$data = array();

					// Count total files
					$countfiles = (is_array($_FILES['files']['name']) ? count($_FILES['files']['name']) : 0);

					// Looping all files
					for ($i = 0; $i < $countfiles; $i++) {
						if (!empty($_FILES['files']['name'][$i])) {
							// Define new $_FILES array - $_FILES['files']
							$_FILES['file']['name'] = $_FILES['files']['name'][$i];
							$_FILES['file']['type'] = $_FILES['files']['type'][$i];
							$_FILES['file']['tmp_name'] = $_FILES['files']['tmp_name'][$i];
							$_FILES['file']['error'] = $_FILES['files']['error'][$i];
							$_FILES['file']['size'] = $_FILES['files']['size'][$i];
							// Set preference
							$config['upload_path'] = 'uploads/';
							$config['allowed_types'] = 'jpg|jpeg|png|gif';
							$config['max_size'] = '5000'; // max_size in kb
							$config['file_name'] = $_FILES['files']['name'][$i];

							//Load upload library
							$this->load->library('upload', $config);
							// File upload
							if ($this->upload->do_upload('file')) {
								// Get data about the file
								$uploadData = $this->upload->data();
								$filename = $uploadData['file_name'];

								// Initialize array
								$data['filenames'][] = $filename;
							}
						}

					}
					$this->db->where("id", $imovel['id']);
					$this->db->update("imoveis", $imovel);

					$this->data['msg_success'] = $this->session->set_flashdata("msg_success", "Imóvel alterado com sucesso!");
					redirect('imoveis/index');
				}
			}
		}
	}

	public function delete()
	{
		$id = $this->uri->segment(3);

		$imovel = $this->db->from("imoveis")->where("id", $id)->get()->row();
		if (!$imovel) {
			$this->session->set_flashdata("msg_error", "Imóvel não encontrado!");
			redirect('imoveis/index');
		} else {
			$this->data['item'] = &$imovel;
			if ($this->input->post("enviar")) {

				$this->db->where("id", $imovel->id);
				$this->db->delete("imoveis");
				$this->session->set_flashdata("msg_success", "Imóvel removido com sucesso!");
				redirect('imoveis/index');
			}
		}
	}

}
