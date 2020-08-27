<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Corretores extends MY_Controller {

	public $data;	
	function __construct(){
		parent::__construct();
		$this->_auth();
		
        $this->load->model("Corretores_model");
	}

    public function index(){
		$this->data['listaCorretores'] = $this->Corretores_model->getCorretores();
	}

    public function criar(){
		$this->data['item'] = new StdClass();
		if( $this->input->post("enviar") ){
			if ($this->form_validation->run('Corretores') === FALSE) {
				$this->data['msg_error'] = validation_errors("<p>", "</p>");
			} else {
				$corretor = array();
				$corretor['nome'] = $this->input->post("nome", TRUE);
				$corretor['razao_social'] = $this->input->post("razao_social", TRUE);
				$corretor['cpf_cnpj'] = $this->input->post("cpf_cnpj", TRUE);
				$corretor['forma_pagamento'] = $this->input->post("forma_pagamento", TRUE);
				$corretor['banco'] = $this->input->post("banco", TRUE);
				$corretor['agencia'] = $this->input->post("agencia", TRUE);
				$corretor['conta'] = $this->input->post("conta", TRUE);
				$corretor['codigo_operacao'] = $this->input->post("codigo_operacao", TRUE);
				$corretor['nome_titular'] = $this->input->post("nome_titular", TRUE);
				$corretor['cpf_titular'] = $this->input->post("cpf_titular", TRUE);
				$corretor['rg'] = $this->input->post("rg", TRUE);
				$corretor['orgao_expedidor'] = $this->input->post("orgao_expedidor", TRUE);
				$corretor['data_expedicao'] = $this->input->post("data_expedicao", TRUE);
				$corretor['celular'] = $this->input->post("celular", TRUE);
				$corretor['telefone'] = $this->input->post("telefone", TRUE);
				$corretor['email'] = $this->input->post("email", TRUE);
				$corretor['sexo'] = $this->input->post("sexo", TRUE);
				$corretor['nascimento'] = $this->input->post("nascimento", TRUE);
				$corretor['estado_civil'] = $this->input->post("estado_civil", TRUE);
				$corretor['nacionalidade'] = $this->input->post("nacionalidade", TRUE);
				$corretor['cep'] = $this->input->post("cep", TRUE);
				$corretor['endereco'] = $this->input->post("endereco", TRUE);
				$corretor['numero'] = $this->input->post("numero", TRUE);
				$corretor['complemento'] = $this->input->post("complemento", TRUE);
				$corretor['bairro'] = $this->input->post("bairro", TRUE);
				$corretor['cidade'] = $this->input->post("cidade", TRUE);
				$corretor['uf'] = $this->input->post("uf", TRUE);
				$corretor['profissao'] = $this->input->post("profissao", TRUE);
				$corretor['ramo_atividade'] = $this->input->post("ramo_atividade", TRUE);
				$corretor['renda_mensal'] = $this->input->post("renda_mensal", TRUE);
				$corretor['nome_conjuge'] = $this->input->post("nome_conjuge", TRUE);
				$corretor['cpf_conjuge'] = $this->input->post("cpf_conjuge", TRUE);
				$corretor['rg_conjuge'] = $this->input->post("rg_conjuge", TRUE);
				$corretor['orgao_expedidor_conjuge'] = $this->input->post("orgao_expedidor_conjuge", TRUE);
				$corretor['nacionalidade_conjuge'] = $this->input->post("nacionalidade_conjuge", TRUE);
				$corretor['sexo_conjuge'] = $this->input->post("sexo_conjuge", TRUE);
				$corretor['profissao_conjuge'] = $this->input->post("profissao_conjuge", TRUE);
				$corretor['celular_conjuge'] = $this->input->post("celular_conjuge", TRUE);
				$corretor['telefone_conjuge'] = $this->input->post("telefone_conjuge", TRUE);
				$corretor['email_conjuge'] = $this->input->post("email_conjuge", TRUE);
				$corretor['observacao'] = $this->input->post("observacao", TRUE);
				$this->db->insert("corretores", $corretor);

				$this->session->set_flashdata("msg_success", "Corretor adicionado com sucesso!");
				redirect('corretores/index');
			}
		}
	}
	
	public function editar(){
		$id = $this->uri->segment(3);
		
		$corretor = $this->db->from("corretores AS m")->where("id", $id)->get()->row();
		if( !$corretor ){
			$this->session->set_flashdata("msg_error", "Corretor não encontrado!");
			redirect('corretores/index');
		} else {
			$this->data['item'] = &$corretor;
			
			if( $this->input->post("enviar") ){
				if ($this->form_validation->run('Corretores') === FALSE) {
					$this->data['msg_error'] = validation_errors("<p>", "</p>");
				} else {
					$corretor = array();
					$corretor['id'] = $id;
					$corretor['nome'] = $this->input->post("nome", TRUE);
					$corretor['razao_social'] = $this->input->post("razao_social", TRUE);
					$corretor['cpf_cnpj'] = $this->input->post("cpf_cnpj", TRUE);
					$corretor['forma_pagamento'] = $this->input->post("forma_pagamento", TRUE);
					$corretor['banco'] = $this->input->post("banco", TRUE);
					$corretor['agencia'] = $this->input->post("agencia", TRUE);
					$corretor['conta'] = $this->input->post("conta", TRUE);
					$corretor['codigo_operacao'] = $this->input->post("codigo_operacao", TRUE);
					$corretor['nome_titular'] = $this->input->post("nome_titular", TRUE);
					$corretor['cpf_titular'] = $this->input->post("cpf_titular", TRUE);
					$corretor['rg'] = $this->input->post("rg", TRUE);
					$corretor['orgao_expedidor'] = $this->input->post("orgao_expedidor", TRUE);
					$corretor['data_expedicao'] = $this->input->post("data_expedicao", TRUE);
					//print_r($corretor['data_expedicao']);exit;
					$corretor['celular'] = $this->input->post("celular", TRUE);
					$corretor['telefone'] = $this->input->post("telefone", TRUE);
					$corretor['email'] = $this->input->post("email", TRUE);
					$corretor['sexo'] = $this->input->post("sexo", TRUE);
					$corretor['nascimento'] = $this->input->post("nascimento", TRUE);
					//print_r($corretor['nascimento']);exit;
					$corretor['estado_civil'] = $this->input->post("estado_civil", TRUE);
					$corretor['nacionalidade'] = $this->input->post("nacionalidade", TRUE);
					$corretor['cep'] = $this->input->post("cep", TRUE);
					$corretor['endereco'] = $this->input->post("endereco", TRUE);
					$corretor['numero'] = $this->input->post("numero", TRUE);
					$corretor['complemento'] = $this->input->post("complemento", TRUE);
					$corretor['bairro'] = $this->input->post("bairro", TRUE);
					$corretor['cidade'] = $this->input->post("cidade", TRUE);
					$corretor['uf'] = $this->input->post("uf", TRUE);
					$corretor['profissao'] = $this->input->post("profissao", TRUE);
					$corretor['ramo_atividade'] = $this->input->post("ramo_atividade", TRUE);
					$corretor['renda_mensal'] = $this->input->post("renda_mensal", TRUE);
					$corretor['nome_conjuge'] = $this->input->post("nome_conjuge", TRUE);
					$corretor['cpf_conjuge'] = $this->input->post("cpf_conjuge", TRUE);
					$corretor['rg_conjuge'] = $this->input->post("rg_conjuge", TRUE);
					$corretor['orgao_expedidor_conjuge'] = $this->input->post("orgao_expedidor_conjuge", TRUE);
					$corretor['nacionalidade_conjuge'] = $this->input->post("nacionalidade_conjuge", TRUE);
					$corretor['sexo_conjuge'] = $this->input->post("sexo_conjuge", TRUE);
					$corretor['profissao_conjuge'] = $this->input->post("profissao_conjuge", TRUE);
					$corretor['celular_conjuge'] = $this->input->post("celular_conjuge", TRUE);
					$corretor['telefone_conjuge'] = $this->input->post("telefone_conjuge", TRUE);
					$corretor['email_conjuge'] = $this->input->post("email_conjuge", TRUE);
					$corretor['observacao'] = $this->input->post("observacao", TRUE);
					//print_r($corretor);exit;

					$this->db->where("id", $corretor['id']);
					$this->db->update("corretores", $corretor);

					$this->session->set_flashdata("msg_success", "Corretor " . $corretor['nome'] . " editado com sucesso!");
					redirect('corretores/index');
				}
			}
		}
	}

	public function delete(){
		$id = $this->uri->segment(3);

		$corretor = $this->db->from("corretores")->where("id", $id)->get()->row();
		if( !$corretor ){
			$this->session->set_flashdata("msg_error", "Corretor não encontrado!");
			redirect('corretores/index');
		} else {
			$this->data['item'] = &$corretor;
			if( $this->input->post("enviar") ){
					
				$this->db->where("id", $corretor->id);
				$this->db->delete("corretores");
				$this->session->set_flashdata("msg_success", "Corretor removido com sucesso!");
				redirect('corretores/index');
			}
		}
	}
    
}
