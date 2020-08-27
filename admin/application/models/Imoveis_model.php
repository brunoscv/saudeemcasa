<?php

class Imoveis_model extends CI_Model
{
	public $table = "imoveis";

	public function __construct()
	{
		parent::__construct();
	}

	public function getImoveis()
	{
		return $this->db->
		query("
				SELECT i.id, p.nome as proprietario, i.tipo, i.valor, i.cep, i.endereco, i.numeroEndereco, i.complemento, i.bairro, i.cidade, i.estado, i.valorCondominio, i.valorIPTU, i.matriculaIPTU, i.matriculaAgua, i.matriculaLuz, i.matriculaGas, i.dimensoesDoTerreno, i.vagasGaragem 
				FROM imoveis i
				INNER JOIN proprietarios p on i.proprietario_id = p.id
				ORDER BY i.id
		")->result();
	}

}
