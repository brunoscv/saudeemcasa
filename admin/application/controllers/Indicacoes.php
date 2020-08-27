<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Indicacoes extends MY_Controller
{

	public $data;

	function __construct()
	{
		parent::__construct();
		$this->_auth();

		$this->load->model("Imoveis_model");
		$this->load->model("Parceiros_model");
		$this->load->model("Indicacoes_model");
	}

	public function index()
	{
		$this->data['listaIndicacoes'] = $this->Indicacoes_model->getIndicacoes();
	}

	public function criar()
	{
		$this->data['item'] = new StdClass();

		$listaParceiros = $this->Parceiros_model->getParceiros();
		$this->data['listaParceiros'] = array();
		$this->data['listaParceiros'][''] = "Escolha um Parceiro";
		foreach ($listaParceiros as $listaParceiros) {
			$valor = $listaParceiros->nome;
			$this->data['listaParceiros'][$listaParceiros->id] = $valor;
		}
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
		if ($this->input->post("enviar")) {
			if ($this->form_validation->run('Indicacoes') === FALSE) {
				$this->data['msg_error'] = validation_errors("<p>", "</p>");
			} else {
				$indicacao = array();
				$indicacao['parceiro_id'] = $this->input->post("parceiro_id", TRUE);
				$indicacao['imovel_id'] = $this->input->post("imovel_id", TRUE);
				$indicacao['percentual'] = $this->input->post("percentual", TRUE);

				$this->db->insert("indicacoes", $indicacao);

				$this->session->set_flashdata("msg_success", "Indicação adicionada com sucesso!");
				redirect('indicacoes/index');
			}
		}
	}

	public function editar()
	{
		$id = $this->uri->segment(3);

		$indicacao = $this->db->from("indicacoes AS m")->where("id", $id)->get()->row();

		$listaParceiros = $this->Parceiros_model->getParceiros();
		$this->data['listaParceiros'] = array();
		foreach ($listaParceiros as $listaParceiros) {
			$valor = $listaParceiros->nome;
			$this->data['listaParceiros'][$listaParceiros->id] = $valor;
		}
		$listaImoveis = $this->Imoveis_model->getImoveis();
		$this->data['listaImoveis'] = array();
		foreach ($listaImoveis as $listaImoveis) {
			$valor = $listaImoveis->tipo
				. ", " . $listaImoveis->endereco
				. ", " . $listaImoveis->numeroEndereco
				. ", " . $listaImoveis->bairro;
			$this->data['listaImoveis'][$listaImoveis->id] = $valor;
		}
		if (!$indicacao) {
			$this->session->set_flashdata("msg_error", "Indicação não encontrada!");
			redirect('indicacoes/index');
		} else {
			$this->data['item'] = &$indicacao;
			//print_r($this->input->post("contrato_id"));exit;
			if ($this->input->post("enviar")) {
				if ($this->form_validation->run('Indicacoes') === FALSE) {
					$this->data['msg_error'] = validation_errors("<p>", "</p>");
				} else {
					//print_r('Teste');exit;
					$indicacao = array();
					$indicacao['id'] = $id;
					$indicacao['parceiro_id'] = $this->input->post("parceiro_id", TRUE);
					$indicacao['imovel_id'] = $this->input->post("imovel_id", TRUE);
					$indicacao['percentual'] = $this->input->post("percentual", TRUE);
					//print_r($contrato);exit;

					$this->db->where("id", $indicacao['id']);
					$this->db->update("indicacoes", $indicacao);

					$this->session->set_flashdata("msg_success", "Indicação editada com sucesso!");
					redirect('indicacoes/index');
				}
			}
		}
	}

	public function delete()
	{
		$id = $this->uri->segment(3);

		$indicacao = $this->db->from("indicacoes")->where("id", $id)->get()->row();
		if (!$indicacao) {
			$this->session->set_flashdata("msg_error", "Indicação não encontrada!");
			redirect('indicacoes/index');
		} else {
			$this->data['item'] = &$indicacao;
			if ($this->input->post("enviar")) {

				$this->db->where("id", $indicacao->id);
				$this->db->delete("indicacoes");
				$this->session->set_flashdata("msg_success", "Indicação removida com sucesso!");
				redirect('indicacoes/index');
			}
		}
	}

}
