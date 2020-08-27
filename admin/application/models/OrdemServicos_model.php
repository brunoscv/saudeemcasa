<?php

class OrdemServicos_model extends CI_Model
{
	public $table = "ordem_servico";

	public function __construct()
	{
		parent::__construct();
	}

	public function getOrdemServicos() {
		return $this->db->query(" SELECT os.id, p.nome as parceiro, 
			descricao, status, valor
		    FROM ordem_servico as os
		    inner join parceiros as p on parceiro_id = p.id")
		->result();
	}
	
}
