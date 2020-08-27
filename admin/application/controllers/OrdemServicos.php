<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class OrdemServicos extends MY_Controller
{

	public $data;

	function __construct()
	{
		parent::__construct();
		$this->_auth();

		$this->load->model("OrdemServicos_model");
		$this->load->model("Parceiros_model");
	}

	public function index()
	{
		$this->data['listaOrdemServicos'] = $this->OrdemServicos_model->getOrdemServicos();
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
		if ($this->input->post("enviar")) {
			if ($this->form_validation->run('OrdemServicos') === FALSE) {
				$this->data['msg_error'] = validation_errors("<p>", "</p>");
			} else {
				$ordemservico = array();
				$ordemservico['parceiro_id'] = $this->input->post("parceiro_id", TRUE);
				$ordemservico['descricao'] = $this->input->post("descricao", TRUE);
				$ordemservico['status'] = $this->input->post("status", TRUE);
				$ordemservico['valor'] = $this->input->post("valor", TRUE);

				$this->db->insert("ordem_servico", $ordemservico);

				$this->session->set_flashdata("msg_success", "Ordem de Serviço adicionada com sucesso!");
				redirect('ordemservicos/index');
			}
		}
	}

	public function editar()
	{
		$id = $this->uri->segment(3);

		$ordemservico = $this->db->from("ordem_servico AS m")->where("id", $id)->get()->row();

		$listaParceiros = $this->Parceiros_model->getParceiros();
		$this->data['listaParceiros'] = array();
		foreach ($listaParceiros as $listaParceiros) {
			$valor = $listaParceiros->nome;
			$this->data['listaParceiros'][$listaParceiros->id] = $valor;
		}
		if (!$ordemservico) {
			$this->session->set_flashdata("msg_error", "Ordem de Serviço não encontrada!");
			redirect('ordemservicos/index');
		} else {
			$this->data['item'] = &$ordemservico;
			//print_r($this->input->post("contrato_id"));exit;
			if ($this->input->post("enviar")) {
				if ($this->form_validation->run('OrdemServicos') === FALSE) {
					$this->data['msg_error'] = validation_errors("<p>", "</p>");
				} else {
					//print_r('Teste');exit;
					$ordemservico = array();
					$ordemservico['id'] = $id;
					$ordemservico['parceiro_id'] = $this->input->post("parceiro_id", TRUE);
					$ordemservico['descricao'] = $this->input->post("descricao", TRUE);
					$ordemservico['status'] = $this->input->post("status", TRUE);
					$ordemservico['valor'] = $this->input->post("valor", TRUE);
					//print_r($contrato);exit;

					$this->db->where("id", $ordemservico['id']);
					$this->db->update("ordem_servico", $ordemservico);

					$this->session->set_flashdata("msg_success", "Ordem de Serviço editada com sucesso!");
					redirect('ordemservicos/index');
				}
			}
		}
	}

	public function delete()
	{
		$id = $this->uri->segment(3);

		$ordemservico = $this->db->from("ordem_servico")->where("id", $id)->get()->row();
		if (!$ordemservico) {
			$this->session->set_flashdata("msg_error", "Ordem de Serviço não encontrada!");
			redirect('ordemservicos/index');
		} else {
			$this->data['item'] = &$ordemservico;
			if ($this->input->post("enviar")) {

				$this->db->where("id", $ordemservico->id);
				$this->db->delete("ordem_servico");
				$this->session->set_flashdata("msg_success", "Ordem de Serviço removida com sucesso!");
				redirect('ordemservicos/index');
			}
		}
	}

}
