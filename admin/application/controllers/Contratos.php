<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Contratos extends MY_Controller
{

	public $data;

	function __construct()
	{
		parent::__construct();
		$this->_auth();

		$this->load->model("Contratos_model");
		$this->load->model("Imoveis_model");
		$this->load->model("Clientes_model");
		$this->load->model("Corretores_model");
	}

	public function index()
	{
		$this->data['listaContratos'] = $this->Contratos_model->getContratos();
	}

	public function criar()
	{
		$this->data['item'] = new StdClass();
		$listaImoveis = $this->Imoveis_model->getImoveis();
		$this->data['listaImoveis'] = array();
		$this->data['listaImoveis'][''] = "Escolha um Imóvel";
		foreach ($listaImoveis as $listaImoveis) {
			$valor = $listaImoveis->tipo
				. ", " . $listaImoveis->endereco
				. ", " . $listaImoveis->numeroEndereco
				. ", " . $listaImoveis->bairro;
			$this->data['listaImoveis'][$listaImoveis->id] = $valor;
		}
		$listaClientes = $this->Clientes_model->getClientes();
		$this->data['listaClientes'] = array();
		$this->data['listaClientes'][''] = "Escolha um Cliente";
		foreach ($listaClientes as $listaClientes) {
			$valor = $listaClientes->nome;
			$this->data['listaClientes'][$listaClientes->id] = $valor;
		}
		$listaFiadores = $this->Clientes_model->getClientes();
		$this->data['listaFiadores'] = array();
		$this->data['listaFiadores'][''] = "Escolha um Fiador";
		foreach ($listaFiadores as $listaFiadores) {
			$valor = $listaFiadores->nome;
			$this->data['listaFiadores'][$listaFiadores->id] = $valor;
		}
		$listaCorretores = $this->Corretores_model->getCorretores();
		$this->data['listaCorretores'] = array();
		$this->data['listaCorretores'][''] = "Escolha um Corretor";
		foreach ($listaCorretores as $listaCorretores) {
			$valor = $listaCorretores->nome;
			$this->data['listaCorretores'][$listaCorretores->id] = $valor;
		}
		if ($this->input->post("enviar")) {
			if ($this->form_validation->run('Contratos') === FALSE) {
				$this->data['msg_error'] = validation_errors("<p>", "</p>");
			} else {
				$contrato = array();
				$contrato['imovel_id'] = $this->input->post("imovel_id", TRUE);
				$contrato['corretor_id'] = $this->input->post("corretor_id", TRUE);
				$contrato['cliente_id'] = $this->input->post("cliente_id", TRUE);
				$contrato['data_inicio_contrato'] = $this->input->post("data_inicio_contrato", TRUE);
				$contrato['data_fim_contrato'] = $this->input->post("data_fim_contrato", TRUE);
				$contrato['valor_aluguel'] = $this->input->post("valor_aluguel", TRUE);
				$contrato['data_vencimento'] = $this->input->post("data_vencimento", TRUE);
				$contrato['juros'] = $this->input->post("juros", TRUE);
				$contrato['multa'] = $this->input->post("multa", TRUE);
				$contrato['desconto_pontualidade'] = $this->input->post("desconto_pontualidade", TRUE);
				$contrato['clausulas_adicionais'] = $this->input->post("clausulas_adicionais", TRUE);
				$contrato['taxa_adm'] = $this->input->post("taxa_adm", TRUE);
				$contrato['tem_repasse_garantido'] = $this->input->post("tem_repasse_garantido", TRUE);
				$contrato['qtd_meses_rep_garantido'] = $this->input->post("qtd_meses_rep_garantido", TRUE);
				$contrato['data_repasse'] = $this->input->post("data_repasse", TRUE);
				$contrato['dias_tipo'] = $this->input->post("dias_tipo", TRUE);
				$contrato['cobra_tarifa'] = $this->input->post("cobra_tarifa", TRUE);
				$contrato['finalidade_contrato'] = $this->input->post("finalidade_contrato", TRUE);
				$contrato['emite_nf'] = $this->input->post("emite_nf", TRUE);
				$contrato['retem_imposto'] = $this->input->post("retem_imposto", TRUE);
				$contrato['quem_retera'] = $this->input->post("quem_retera", TRUE);
				$contrato['fiador_id'] = $this->input->post("fiador_id", TRUE);
				$contrato['garantia_tipo'] = $this->input->post("garantia_tipo", TRUE);
				$contrato['data_inicio_garantia'] = $this->input->post("data_inicio_garantia", TRUE);
				$contrato['data_fim_garantia'] = $this->input->post("data_fim_garantia", TRUE);
				$contrato['valor_garantia'] = $this->input->post("valor_garantia", TRUE);
				$contrato['obs_garantia'] = $this->input->post("obs_garantia", TRUE);
				$contrato['tem_seguro_incendio'] = $this->input->post("tem_seguro_incendio", TRUE);
				$contrato['data_inicio_seguro'] = $this->input->post("data_inicio_seguro", TRUE);
				$contrato['data_fim_seguro'] = $this->input->post("data_fim_seguro", TRUE);
				$contrato['valor_seguro'] = $this->input->post("valor_seguro", TRUE);
				$contrato['nome_seguradora'] = $this->input->post("nome_seguradora", TRUE);
				$contrato['apolice'] = $this->input->post("apolice", TRUE);
				$contrato['obs_seguro'] = $this->input->post("obs_seguro", TRUE);
				$this->db->insert("contratos", $contrato);

				$this->session->set_flashdata("msg_success", "Contrato adicionado com sucesso!");
				redirect('contratos/index');
			}
		}
	}

	public function editar()
	{
		$id = $this->uri->segment(3);

		$contrato = $this->db->from("contratos AS m")->where("id", $id)->get()->row();

		$listaImoveis = $this->Imoveis_model->getImoveis();
		$this->data['listaImoveis'] = array();
		foreach ($listaImoveis as $listaImoveis) {
			$valor = $listaImoveis->tipo
				. ", " . $listaImoveis->endereco
				. ", " . $listaImoveis->numeroEndereco
				. ", " . $listaImoveis->bairro;
			$this->data['listaImoveis'][$listaImoveis->id] = $valor;
		}
		$listaClientes = $this->Clientes_model->getClientes();
		$this->data['listaClientes'] = array();
		foreach ($listaClientes as $listaClientes) {
			$valor = $listaClientes->nome;
			$this->data['listaClientes'][$listaClientes->id] = $valor;
		}
		$listaFiadores = $this->Clientes_model->getClientes();
		$this->data['listaFiadores'] = array();
		foreach ($listaFiadores as $listaFiadores) {
			$valor = $listaFiadores->nome;
			$this->data['listaFiadores'][$listaFiadores->id] = $valor;
		}
		$listaCorretores = $this->Corretores_model->getCorretores();
		$this->data['listaCorretores'] = array();
		foreach ($listaCorretores as $listaCorretores) {
			$valor = $listaCorretores->nome;
			$this->data['listaCorretores'][$listaCorretores->id] = $valor;
		}
		if (!$contrato) {
			$this->session->set_flashdata("msg_error", "Contrato não encontrado!");
			redirect('contratos/index');
		} else {
			$this->data['item'] = &$contrato;
			//print_r($this->input->post("contrato_id"));exit;
			if ($this->input->post("enviar")) {
				if ($this->form_validation->run('Contratos') === FALSE) {
					$this->data['msg_error'] = validation_errors("<p>", "</p>");
				} else {
					//print_r('Teste');exit;
					$contrato = array();
					$contrato['id'] = $id;
					$contrato['imovel_id'] = $this->input->post("imovel_id", TRUE);
					$contrato['corretor_id'] = $this->input->post("corretor_id", TRUE);
					$contrato['cliente_id'] = $this->input->post("cliente_id", TRUE);
					$contrato['data_inicio_contrato'] = $this->input->post("data_inicio_contrato", TRUE);
					$contrato['data_fim_contrato'] = $this->input->post("data_fim_contrato", TRUE);
					$contrato['valor_aluguel'] = $this->input->post("valor_aluguel", TRUE);
					$contrato['data_vencimento'] = $this->input->post("data_vencimento", TRUE);
					$contrato['juros'] = $this->input->post("juros", TRUE);
					$contrato['multa'] = $this->input->post("multa", TRUE);
					$contrato['clausulas_adicionais'] = $this->input->post("clausulas_adicionais", TRUE);
					$contrato['taxa_adm'] = $this->input->post("taxa_adm", TRUE);
					$contrato['tem_repasse_garantido'] = $this->input->post("tem_repasse_garantido", TRUE);
					$contrato['qtd_meses_rep_garantido'] = $this->input->post("qtd_meses_rep_garantido", TRUE);
					//print_r($contrato['data_expedicao']);exit;
					$contrato['data_repasse'] = $this->input->post("data_repasse", TRUE);
					$contrato['dias_tipo'] = $this->input->post("dias_tipo", TRUE);
					$contrato['cobra_tarifa'] = $this->input->post("cobra_tarifa", TRUE);
					$contrato['finalidade_contrato'] = $this->input->post("finalidade_contrato", TRUE);
					$contrato['emite_nf'] = $this->input->post("emite_nf", TRUE);
					//print_r($contrato['nascimento']);exit;
					$contrato['retem_imposto'] = $this->input->post("retem_imposto", TRUE);
					$contrato['quem_retera'] = $this->input->post("quem_retera", TRUE);
					$contrato['fiador_id'] = $this->input->post("fiador_id", TRUE);
					$contrato['garantia_tipo'] = $this->input->post("garantia_tipo", TRUE);
					$contrato['data_inicio_garantia'] = $this->input->post("data_inicio_garantia", TRUE);
					$contrato['data_fim_garantia'] = $this->input->post("data_fim_garantia", TRUE);
					$contrato['valor_garantia'] = $this->input->post("valor_garantia", TRUE);
					$contrato['obs_garantia'] = $this->input->post("obs_garantia", TRUE);
					$contrato['tem_seguro_incendio'] = $this->input->post("tem_seguro_incendio", TRUE);
					$contrato['data_inicio_seguro'] = $this->input->post("data_inicio_seguro", TRUE);
					$contrato['data_fim_seguro'] = $this->input->post("data_fim_seguro", TRUE);
					$contrato['valor_seguro'] = $this->input->post("valor_seguro", TRUE);
					$contrato['nome_seguradora'] = $this->input->post("nome_seguradora", TRUE);
					$contrato['apolice'] = $this->input->post("apolice", TRUE);
					$contrato['obs_seguro'] = $this->input->post("obs_seguro", TRUE);
					//print_r($contrato);exit;

					$this->db->where("id", $contrato['id']);
					$this->db->update("contratos", $contrato);

					$this->session->set_flashdata("msg_success", "Contrato editado com sucesso!");
					redirect('contratos/index');
				}
			}
		}
	}

	public function delete()
	{
		$id = $this->uri->segment(3);

		$contrato = $this->db->from("contratos")->where("id", $id)->get()->row();
		if (!$contrato) {
			$this->session->set_flashdata("msg_error", "Contrato não encontrado!");
			redirect('contratos/index');
		} else {
			$this->data['item'] = &$contrato;
			if ($this->input->post("enviar")) {

				$this->db->where("id", $contrato->id);
				$this->db->delete("contratos");
				$this->session->set_flashdata("msg_success", "Contrato removido com sucesso!");
				redirect('contratos/index');
			}
		}
	}

}
