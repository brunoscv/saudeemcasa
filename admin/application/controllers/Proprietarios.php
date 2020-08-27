<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Proprietarios extends MY_Controller
{

	public $data;

	function __construct()
	{
		parent::__construct();
		$this->_auth();

		$this->load->model("Proprietarios_model");
	}

	public function index()
	{
		$this->data['listaProprietarios'] = $this->Proprietarios_model->getProprietarios();
	}

	public function criar()
	{
		$this->data['item'] = new StdClass();
		if ($this->input->post("enviar")) {
			if ($this->form_validation->run('Proprietarios') === FALSE) {
				$this->data['msg_error'] = validation_errors("<p>", "</p>");
			} else {
				//print_r('$proprietario');exit;
				$proprietario = array();
				$proprietario['nome'] = $this->input->post("nome", TRUE);
				$proprietario['razao_social'] = $this->input->post("razao_social", TRUE);
				$proprietario['cpf_cnpj'] = $this->input->post("cpf_cnpj", TRUE);
				$proprietario['forma_pagamento'] = $this->input->post("forma_pagamento", TRUE);
				$proprietario['banco'] = $this->input->post("banco", TRUE);
				$proprietario['agencia'] = $this->input->post("agencia", TRUE);
				$proprietario['conta'] = $this->input->post("conta", TRUE);
				$proprietario['codigo_operacao'] = $this->input->post("codigo_operacao", TRUE);
				$proprietario['nome_titular'] = $this->input->post("nome_titular", TRUE);
				$proprietario['cpf_titular'] = $this->input->post("cpf_titular", TRUE);
				$proprietario['rg'] = $this->input->post("rg", TRUE);
				$proprietario['orgao_expedidor'] = $this->input->post("orgao_expedidor", TRUE);
				$proprietario['data_expedicao'] = $this->input->post("data_expedicao", TRUE);
				$proprietario['celular'] = $this->input->post("celular", TRUE);
				$proprietario['telefone'] = $this->input->post("telefone", TRUE);
				$proprietario['email'] = $this->input->post("email", TRUE);
				$proprietario['sexo'] = $this->input->post("sexo", TRUE);
				$proprietario['nascimento'] = $this->input->post("nascimento", TRUE);
				$proprietario['estado_civil'] = $this->input->post("estado_civil", TRUE);
				$proprietario['nacionalidade'] = $this->input->post("nacionalidade", TRUE);
				$proprietario['cep'] = $this->input->post("cep", TRUE);
				$proprietario['endereco'] = $this->input->post("endereco", TRUE);
				$proprietario['numero'] = $this->input->post("numero", TRUE);
				$proprietario['complemento'] = $this->input->post("complemento", TRUE);
				$proprietario['bairro'] = $this->input->post("bairro", TRUE);
				$proprietario['cidade'] = $this->input->post("cidade", TRUE);
				$proprietario['uf'] = $this->input->post("uf", TRUE);
				$proprietario['profissao'] = $this->input->post("profissao", TRUE);
				$proprietario['ramo_atividade'] = $this->input->post("ramo_atividade", TRUE);
				$proprietario['renda_mensal'] = $this->input->post("renda_mensal", TRUE);
				$proprietario['nome_conjuge'] = $this->input->post("nome_conjuge", TRUE);
				$proprietario['cpf_conjuge'] = $this->input->post("cpf_conjuge", TRUE);
				$proprietario['rg_conjuge'] = $this->input->post("rg_conjuge", TRUE);
				$proprietario['orgao_expedidor_conjuge'] = $this->input->post("orgao_expedidor_conjuge", TRUE);
				$proprietario['nacionalidade_conjuge'] = $this->input->post("nacionalidade_conjuge", TRUE);
				$proprietario['sexo_conjuge'] = $this->input->post("sexo_conjuge", TRUE);
				$proprietario['profissao_conjuge'] = $this->input->post("profissao_conjuge", TRUE);
				$proprietario['celular_conjuge'] = $this->input->post("celular_conjuge", TRUE);
				$proprietario['telefone_conjuge'] = $this->input->post("telefone_conjuge", TRUE);
				$proprietario['email_conjuge'] = $this->input->post("email_conjuge", TRUE);
				$proprietario['observacao'] = $this->input->post("observacao", TRUE);


				$this->db->insert("proprietarios", $proprietario);

				$this->session->set_flashdata("msg_success", "Proprietário adicionado com sucesso!");
				redirect('proprietarios/index');
			}
		}
	}

	public function editar()
	{
		$id = $this->uri->segment(3);

		$proprietario = $this->db->from("proprietarios AS m")->where("id", $id)->get()->row();
		if (!$proprietario) {
			$this->session->set_flashdata("msg_error", "Proprietário não encontrado!");
			redirect('proprietarios/index');
		} else {
			$this->data['item'] = &$proprietario;
			//print_r($this->input->post("proprietario_id"));exit;
			if ($this->input->post("enviar")) {
				if ($this->form_validation->run('Proprietarios') === FALSE) {
					$this->data['msg_error'] = validation_errors("<p>", "</p>");
				} else {
					//print_r('Teste');exit;
					$proprietario = array();
					$proprietario['id'] = $id;
					$proprietario['nome'] = $this->input->post("nome", TRUE);
					$proprietario['razao_social'] = $this->input->post("razao_social", TRUE);
					$proprietario['cpf_cnpj'] = $this->input->post("cpf_cnpj", TRUE);
					$proprietario['forma_pagamento'] = $this->input->post("forma_pagamento", TRUE);
					$proprietario['banco'] = $this->input->post("banco", TRUE);
					$proprietario['agencia'] = $this->input->post("agencia", TRUE);
					$proprietario['conta'] = $this->input->post("conta", TRUE);
					$proprietario['codigo_operacao'] = $this->input->post("codigo_operacao", TRUE);
					$proprietario['nome_titular'] = $this->input->post("nome_titular", TRUE);
					$proprietario['cpf_titular'] = $this->input->post("cpf_titular", TRUE);
					$proprietario['rg'] = $this->input->post("rg", TRUE);
					$proprietario['orgao_expedidor'] = $this->input->post("orgao_expedidor", TRUE);
					$proprietario['data_expedicao'] = $this->input->post("data_expedicao", TRUE);
					//print_r($proprietario['data_expedicao']);exit;
					$proprietario['celular'] = $this->input->post("celular", TRUE);
					$proprietario['telefone'] = $this->input->post("telefone", TRUE);
					$proprietario['email'] = $this->input->post("email", TRUE);
					$proprietario['sexo'] = $this->input->post("sexo", TRUE);
					$proprietario['nascimento'] = $this->input->post("nascimento", TRUE);
					//print_r($proprietario['nascimento']);exit;
					$proprietario['estado_civil'] = $this->input->post("estado_civil", TRUE);
					$proprietario['nacionalidade'] = $this->input->post("nacionalidade", TRUE);
					$proprietario['cep'] = $this->input->post("cep", TRUE);
					$proprietario['endereco'] = $this->input->post("endereco", TRUE);
					$proprietario['numero'] = $this->input->post("numero", TRUE);
					$proprietario['complemento'] = $this->input->post("complemento", TRUE);
					$proprietario['bairro'] = $this->input->post("bairro", TRUE);
					$proprietario['cidade'] = $this->input->post("cidade", TRUE);
					$proprietario['uf'] = $this->input->post("uf", TRUE);
					$proprietario['profissao'] = $this->input->post("profissao", TRUE);
					$proprietario['ramo_atividade'] = $this->input->post("ramo_atividade", TRUE);
					$proprietario['renda_mensal'] = $this->input->post("renda_mensal", TRUE);
					$proprietario['nome_conjuge'] = $this->input->post("nome_conjuge", TRUE);
					$proprietario['cpf_conjuge'] = $this->input->post("cpf_conjuge", TRUE);
					$proprietario['rg_conjuge'] = $this->input->post("rg_conjuge", TRUE);
					$proprietario['orgao_expedidor_conjuge'] = $this->input->post("orgao_expedidor_conjuge", TRUE);
					$proprietario['nacionalidade_conjuge'] = $this->input->post("nacionalidade_conjuge", TRUE);
					$proprietario['sexo_conjuge'] = $this->input->post("sexo_conjuge", TRUE);
					$proprietario['profissao_conjuge'] = $this->input->post("profissao_conjuge", TRUE);
					$proprietario['celular_conjuge'] = $this->input->post("celular_conjuge", TRUE);
					$proprietario['telefone_conjuge'] = $this->input->post("telefone_conjuge", TRUE);
					$proprietario['email_conjuge'] = $this->input->post("email_conjuge", TRUE);
					$proprietario['observacao'] = $this->input->post("observacao", TRUE);
					//print_r($proprietario);exit;

					$this->db->where("id", $proprietario['id']);
					$this->db->update("proprietarios", $proprietario);

					$this->session->set_flashdata("msg_success", "Proprietário " . $proprietario['nome'] . " editado com sucesso!");
					redirect('proprietarios/index');
				}
			}
		}
	}

	public function delete()
	{
		$id = $this->uri->segment(3);

		$proprietario = $this->db->from("proprietarios")->where("id", $id)->get()->row();
		if (!$proprietario) {
			$this->session->set_flashdata("msg_error", "Proprietário não encontrado!");
			redirect('proprietarios/index');
		} else {
			$this->data['item'] = &$proprietario;
			if ($this->input->post("enviar")) {

				$this->db->where("id", $proprietario->id);
				$this->db->delete("proprietarios");
				$this->session->set_flashdata("msg_success", "Proprietário removido com sucesso!");
				redirect('proprietarios/index');
			}
		}
	}

}
