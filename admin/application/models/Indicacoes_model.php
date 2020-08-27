<?php

class Indicacoes_model extends CI_Model
{
	public $table = "indicacoes";

	public function __construct()
	{
		parent::__construct();
	}

	public function getIndicacoes() {
		return $this->db->query(" SELECT os.id, p.nome as parceiro, 
			percentual, CONCAT(i.tipo, ', ', i.endereco, ', ', i.numeroEndereco, ', ', i.bairro) AS imovel, valor
		    FROM indicacoes as os
		    inner join parceiros as p on parceiro_id = p.id
		    inner join imoveis as i on imovel_id = i.id")
		->result();
	}
	
}
