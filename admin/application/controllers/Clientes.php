<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Clientes extends MY_Controller
{

	public $data;

	function __construct()
	{
		parent::__construct();
		$this->_auth();

		$this->load->model("Clientes_model");
	}

	public function index()
	{
		$this->data['listaClientes'] = $this->Clientes_model->getClientes();
	}

	public function criar()
	{
		$this->data['item'] = new StdClass();
		if ($this->input->post("enviar")) {
			if ($this->form_validation->run('Clientes') === FALSE) {
				$this->data['msg_error'] = validation_errors("<p>", "</p>");
			} else {
				$cliente = array();
				$cliente['nome'] = $this->input->post("nome", TRUE);
				$cliente['razao_social'] = $this->input->post("razao_social", TRUE);
				$cliente['cpf_cnpj'] = $this->input->post("cpf_cnpj", TRUE);
				$cliente['forma_pagamento'] = $this->input->post("forma_pagamento", TRUE);
				$cliente['banco'] = $this->input->post("banco", TRUE);
				$cliente['agencia'] = $this->input->post("agencia", TRUE);
				$cliente['conta'] = $this->input->post("conta", TRUE);
				$cliente['codigo_operacao'] = $this->input->post("codigo_operacao", TRUE);
				$cliente['nome_titular'] = $this->input->post("nome_titular", TRUE);
				$cliente['cpf_titular'] = $this->input->post("cpf_titular", TRUE);
				$cliente['rg'] = $this->input->post("rg", TRUE);
				$cliente['orgao_expedidor'] = $this->input->post("orgao_expedidor", TRUE);
				$cliente['data_expedicao'] = $this->input->post("data_expedicao", TRUE);
				$cliente['celular'] = $this->input->post("celular", TRUE);
				$cliente['telefone'] = $this->input->post("telefone", TRUE);
				$cliente['email'] = $this->input->post("email", TRUE);
				$cliente['sexo'] = $this->input->post("sexo", TRUE);
				$cliente['nascimento'] = $this->input->post("nascimento", TRUE);
				$cliente['estado_civil'] = $this->input->post("estado_civil", TRUE);
				$cliente['nacionalidade'] = $this->input->post("nacionalidade", TRUE);
				$cliente['cep'] = $this->input->post("cep", TRUE);
				$cliente['endereco'] = $this->input->post("endereco", TRUE);
				$cliente['numero'] = $this->input->post("numero", TRUE);
				$cliente['complemento'] = $this->input->post("complemento", TRUE);
				$cliente['bairro'] = $this->input->post("bairro", TRUE);
				$cliente['cidade'] = $this->input->post("cidade", TRUE);
				$cliente['uf'] = $this->input->post("uf", TRUE);
				$cliente['profissao'] = $this->input->post("profissao", TRUE);
				$cliente['ramo_atividade'] = $this->input->post("ramo_atividade", TRUE);
				$cliente['renda_mensal'] = $this->input->post("renda_mensal", TRUE);
				$cliente['nome_conjuge'] = $this->input->post("nome_conjuge", TRUE);
				$cliente['cpf_conjuge'] = $this->input->post("cpf_conjuge", TRUE);
				$cliente['rg_conjuge'] = $this->input->post("rg_conjuge", TRUE);
				$cliente['orgao_expedidor_conjuge'] = $this->input->post("orgao_expedidor_conjuge", TRUE);
				$cliente['nacionalidade_conjuge'] = $this->input->post("nacionalidade_conjuge", TRUE);
				$cliente['sexo_conjuge'] = $this->input->post("sexo_conjuge", TRUE);
				$cliente['profissao_conjuge'] = $this->input->post("profissao_conjuge", TRUE);
				$cliente['celular_conjuge'] = $this->input->post("celular_conjuge", TRUE);
				$cliente['telefone_conjuge'] = $this->input->post("telefone_conjuge", TRUE);
				$cliente['email_conjuge'] = $this->input->post("email_conjuge", TRUE);
				$cliente['observacao'] = $this->input->post("observacao", TRUE);
				$this->db->insert("clientes", $cliente);

				$this->session->set_flashdata("msg_success", "Cliente adicionado com sucesso!");
				redirect('clientes/index');
			}
		}
	}

	public function editar()
	{
		$id = $this->uri->segment(3);

		$cliente = $this->db->from("clientes AS m")->where("id", $id)->get()->row();
		if (!$cliente) {
			$this->session->set_flashdata("msg_error", "Cliente não encontrado!");
			redirect('clientes/index');
		} else {
			$this->data['item'] = &$cliente;
			//print_r($this->input->post("cliente_id"));exit;
			if ($this->input->post("enviar")) {
				if ($this->form_validation->run('Clientes') === FALSE) {
					$this->data['msg_error'] = validation_errors("<p>", "</p>");
				} else {
					//print_r('Teste');exit;
					$cliente = array();
					$cliente['id'] = $id;
					$cliente['nome'] = $this->input->post("nome", TRUE);
					$cliente['razao_social'] = $this->input->post("razao_social", TRUE);
					$cliente['cpf_cnpj'] = $this->input->post("cpf_cnpj", TRUE);
					$cliente['forma_pagamento'] = $this->input->post("forma_pagamento", TRUE);
					$cliente['banco'] = $this->input->post("banco", TRUE);
					$cliente['agencia'] = $this->input->post("agencia", TRUE);
					$cliente['conta'] = $this->input->post("conta", TRUE);
					$cliente['codigo_operacao'] = $this->input->post("codigo_operacao", TRUE);
					$cliente['nome_titular'] = $this->input->post("nome_titular", TRUE);
					$cliente['cpf_titular'] = $this->input->post("cpf_titular", TRUE);
					$cliente['rg'] = $this->input->post("rg", TRUE);
					$cliente['orgao_expedidor'] = $this->input->post("orgao_expedidor", TRUE);
					$cliente['data_expedicao'] = $this->input->post("data_expedicao", TRUE);
					//print_r($cliente['data_expedicao']);exit;
					$cliente['celular'] = $this->input->post("celular", TRUE);
					$cliente['telefone'] = $this->input->post("telefone", TRUE);
					$cliente['email'] = $this->input->post("email", TRUE);
					$cliente['sexo'] = $this->input->post("sexo", TRUE);
					$cliente['nascimento'] = $this->input->post("nascimento", TRUE);
					//print_r($cliente['nascimento']);exit;
					$cliente['estado_civil'] = $this->input->post("estado_civil", TRUE);
					$cliente['nacionalidade'] = $this->input->post("nacionalidade", TRUE);
					$cliente['cep'] = $this->input->post("cep", TRUE);
					$cliente['endereco'] = $this->input->post("endereco", TRUE);
					$cliente['numero'] = $this->input->post("numero", TRUE);
					$cliente['complemento'] = $this->input->post("complemento", TRUE);
					$cliente['bairro'] = $this->input->post("bairro", TRUE);
					$cliente['cidade'] = $this->input->post("cidade", TRUE);
					$cliente['uf'] = $this->input->post("uf", TRUE);
					$cliente['profissao'] = $this->input->post("profissao", TRUE);
					$cliente['ramo_atividade'] = $this->input->post("ramo_atividade", TRUE);
					$cliente['renda_mensal'] = $this->input->post("renda_mensal", TRUE);
					$cliente['nome_conjuge'] = $this->input->post("nome_conjuge", TRUE);
					$cliente['cpf_conjuge'] = $this->input->post("cpf_conjuge", TRUE);
					$cliente['rg_conjuge'] = $this->input->post("rg_conjuge", TRUE);
					$cliente['orgao_expedidor_conjuge'] = $this->input->post("orgao_expedidor_conjuge", TRUE);
					$cliente['nacionalidade_conjuge'] = $this->input->post("nacionalidade_conjuge", TRUE);
					$cliente['sexo_conjuge'] = $this->input->post("sexo_conjuge", TRUE);
					$cliente['profissao_conjuge'] = $this->input->post("profissao_conjuge", TRUE);
					$cliente['celular_conjuge'] = $this->input->post("celular_conjuge", TRUE);
					$cliente['telefone_conjuge'] = $this->input->post("telefone_conjuge", TRUE);
					$cliente['email_conjuge'] = $this->input->post("email_conjuge", TRUE);
					$cliente['observacao'] = $this->input->post("observacao", TRUE);
					//print_r($cliente);exit;

					$this->db->where("id", $cliente['id']);
					$this->db->update("clientes", $cliente);

					$this->session->set_flashdata("msg_success", "Cliente " . $cliente['nome'] . " editado com sucesso!");
					redirect('clientes/index');
				}
			}
		}
	}

	public function delete()
	{
		$id = $this->uri->segment(3);

		$cliente = $this->db->from("clientes")->where("id", $id)->get()->row();
		if (!$cliente) {
			$this->session->set_flashdata("msg_error", "Cliente não encontrado!");
			redirect('clientes/index');
		} else {
			$this->data['item'] = &$cliente;
			if ($this->input->post("enviar")) {

				$this->db->where("id", $cliente->id);
				$this->db->delete("clientes");
				$this->session->set_flashdata("msg_success", "Cliente removido com sucesso!");
				redirect('clientes/index');
			}
		}
	}

}
