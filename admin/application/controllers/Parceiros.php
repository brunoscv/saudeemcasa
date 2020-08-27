<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Parceiros extends MY_Controller {

	public $data;	
	function __construct(){
		parent::__construct();
		$this->_auth();
		
        $this->load->model("Parceiros_model");
	}

    public function index(){
		$this->data['listaParceiros'] = $this->Parceiros_model->getParceiros();
	}

    public function criar(){
		$this->data['item'] = new StdClass();
		if( $this->input->post("enviar") ){
			if ($this->form_validation->run('Parceiros') === FALSE) {
				$this->data['msg_error'] = validation_errors("<p>", "</p>");
			} else {
				$parceiro = array();
				$parceiro['nome'] = $this->input->post("nome", TRUE);
				$parceiro['razao_social'] = $this->input->post("razao_social", TRUE);
				$parceiro['cpf_cnpj'] = $this->input->post("cpf_cnpj", TRUE);
				$parceiro['forma_pagamento'] = $this->input->post("forma_pagamento", TRUE);
				$parceiro['banco'] = $this->input->post("banco", TRUE);
				$parceiro['agencia'] = $this->input->post("agencia", TRUE);
				$parceiro['conta'] = $this->input->post("conta", TRUE);
				$parceiro['codigo_operacao'] = $this->input->post("codigo_operacao", TRUE);
				$parceiro['nome_titular'] = $this->input->post("nome_titular", TRUE);
				$parceiro['cpf_titular'] = $this->input->post("cpf_titular", TRUE);
				$parceiro['rg'] = $this->input->post("rg", TRUE);
				$parceiro['orgao_expedidor'] = $this->input->post("orgao_expedidor", TRUE);
				$parceiro['data_expedicao'] = $this->input->post("data_expedicao", TRUE);
				$parceiro['celular'] = $this->input->post("celular", TRUE);
				$parceiro['telefone'] = $this->input->post("telefone", TRUE);
				$parceiro['email'] = $this->input->post("email", TRUE);
				$parceiro['sexo'] = $this->input->post("sexo", TRUE);
				$parceiro['nascimento'] = $this->input->post("nascimento", TRUE);
				$parceiro['estado_civil'] = $this->input->post("estado_civil", TRUE);
				$parceiro['nacionalidade'] = $this->input->post("nacionalidade", TRUE);
				$parceiro['cep'] = $this->input->post("cep", TRUE);
				$parceiro['endereco'] = $this->input->post("endereco", TRUE);
				$parceiro['numero'] = $this->input->post("numero", TRUE);
				$parceiro['complemento'] = $this->input->post("complemento", TRUE);
				$parceiro['bairro'] = $this->input->post("bairro", TRUE);
				$parceiro['cidade'] = $this->input->post("cidade", TRUE);
				$parceiro['uf'] = $this->input->post("uf", TRUE);
				$parceiro['profissao'] = $this->input->post("profissao", TRUE);
				$parceiro['ramo_atividade'] = $this->input->post("ramo_atividade", TRUE);
				$parceiro['renda_mensal'] = $this->input->post("renda_mensal", TRUE);
				$parceiro['nome_conjuge'] = $this->input->post("nome_conjuge", TRUE);
				$parceiro['cpf_conjuge'] = $this->input->post("cpf_conjuge", TRUE);
				$parceiro['rg_conjuge'] = $this->input->post("rg_conjuge", TRUE);
				$parceiro['orgao_expedidor_conjuge'] = $this->input->post("orgao_expedidor_conjuge", TRUE);
				$parceiro['nacionalidade_conjuge'] = $this->input->post("nacionalidade_conjuge", TRUE);
				$parceiro['sexo_conjuge'] = $this->input->post("sexo_conjuge", TRUE);
				$parceiro['profissao_conjuge'] = $this->input->post("profissao_conjuge", TRUE);
				$parceiro['celular_conjuge'] = $this->input->post("celular_conjuge", TRUE);
				$parceiro['telefone_conjuge'] = $this->input->post("telefone_conjuge", TRUE);
				$parceiro['email_conjuge'] = $this->input->post("email_conjuge", TRUE);
				$parceiro['observacao'] = $this->input->post("observacao", TRUE);
				$this->db->insert("parceiros", $parceiro);

				$this->session->set_flashdata("msg_success", "Parceiro adicionado com sucesso!");
				redirect('parceiros/index');
			}
		}
	}
	
	public function editar(){
		$id = $this->uri->segment(3);
		
		$parceiro = $this->db->from("parceiros AS m")->where("id", $id)->get()->row();
		if( !$parceiro ){
			$this->session->set_flashdata("msg_error", "Parceiro não encontrado!");
			redirect('parceiros/index');
		} else {
			$this->data['item'] = &$parceiro;
			
			if( $this->input->post("enviar") ){
				if ($this->form_validation->run('Parceiros') === FALSE) {
					$this->data['msg_error'] = validation_errors("<p>", "</p>");
				} else {
					$parceiro = array();
					$parceiro['id'] = $id;
					$parceiro['nome'] = $this->input->post("nome", TRUE);
					$parceiro['razao_social'] = $this->input->post("razao_social", TRUE);
					$parceiro['cpf_cnpj'] = $this->input->post("cpf_cnpj", TRUE);
					$parceiro['forma_pagamento'] = $this->input->post("forma_pagamento", TRUE);
					$parceiro['banco'] = $this->input->post("banco", TRUE);
					$parceiro['agencia'] = $this->input->post("agencia", TRUE);
					$parceiro['conta'] = $this->input->post("conta", TRUE);
					$parceiro['codigo_operacao'] = $this->input->post("codigo_operacao", TRUE);
					$parceiro['nome_titular'] = $this->input->post("nome_titular", TRUE);
					$parceiro['cpf_titular'] = $this->input->post("cpf_titular", TRUE);
					$parceiro['rg'] = $this->input->post("rg", TRUE);
					$parceiro['orgao_expedidor'] = $this->input->post("orgao_expedidor", TRUE);
					$parceiro['data_expedicao'] = $this->input->post("data_expedicao", TRUE);
					//print_r($parceiro['data_expedicao']);exit;
					$parceiro['celular'] = $this->input->post("celular", TRUE);
					$parceiro['telefone'] = $this->input->post("telefone", TRUE);
					$parceiro['email'] = $this->input->post("email", TRUE);
					$parceiro['sexo'] = $this->input->post("sexo", TRUE);
					$parceiro['nascimento'] = $this->input->post("nascimento", TRUE);
					//print_r($parceiro['nascimento']);exit;
					$parceiro['estado_civil'] = $this->input->post("estado_civil", TRUE);
					$parceiro['nacionalidade'] = $this->input->post("nacionalidade", TRUE);
					$parceiro['cep'] = $this->input->post("cep", TRUE);
					$parceiro['endereco'] = $this->input->post("endereco", TRUE);
					$parceiro['numero'] = $this->input->post("numero", TRUE);
					$parceiro['complemento'] = $this->input->post("complemento", TRUE);
					$parceiro['bairro'] = $this->input->post("bairro", TRUE);
					$parceiro['cidade'] = $this->input->post("cidade", TRUE);
					$parceiro['uf'] = $this->input->post("uf", TRUE);
					$parceiro['profissao'] = $this->input->post("profissao", TRUE);
					$parceiro['ramo_atividade'] = $this->input->post("ramo_atividade", TRUE);
					$parceiro['renda_mensal'] = $this->input->post("renda_mensal", TRUE);
					$parceiro['nome_conjuge'] = $this->input->post("nome_conjuge", TRUE);
					$parceiro['cpf_conjuge'] = $this->input->post("cpf_conjuge", TRUE);
					$parceiro['rg_conjuge'] = $this->input->post("rg_conjuge", TRUE);
					$parceiro['orgao_expedidor_conjuge'] = $this->input->post("orgao_expedidor_conjuge", TRUE);
					$parceiro['nacionalidade_conjuge'] = $this->input->post("nacionalidade_conjuge", TRUE);
					$parceiro['sexo_conjuge'] = $this->input->post("sexo_conjuge", TRUE);
					$parceiro['profissao_conjuge'] = $this->input->post("profissao_conjuge", TRUE);
					$parceiro['celular_conjuge'] = $this->input->post("celular_conjuge", TRUE);
					$parceiro['telefone_conjuge'] = $this->input->post("telefone_conjuge", TRUE);
					$parceiro['email_conjuge'] = $this->input->post("email_conjuge", TRUE);
					$parceiro['observacao'] = $this->input->post("observacao", TRUE);
					//print_r($parceiro);exit;

					$this->db->where("id", $parceiro['id']);
					$this->db->update("parceiros", $parceiro);

					$this->session->set_flashdata("msg_success", "Parceiro " . $parceiro['nome'] . " editado com sucesso!");
					redirect('parceiros/index');
				}
			}
		}
	}

	public function delete(){
		$id = $this->uri->segment(3);

		$parceiro = $this->db->from("parceiros")->where("id", $id)->get()->row();
		if( !$parceiro ){
			$this->session->set_flashdata("msg_error", "Parceiro não encontrado!");
			redirect('parceiros/index');
		} else {
			$this->data['item'] = &$parceiro;
			if( $this->input->post("enviar") ){
					
				$this->db->where("id", $parceiro->id);
				$this->db->delete("parceiros");
				$this->session->set_flashdata("msg_success", "Parceiro removido com sucesso!");
				redirect('parceiros/index');
			}
		}
	}
    
}
