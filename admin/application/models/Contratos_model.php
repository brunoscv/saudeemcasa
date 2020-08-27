<?php

class Contratos_model extends CI_Model
{
	public $table = "contratos";

	public function __construct()
	{
		parent::__construct();
	}

	public function getContratos() {
		return $this->db->query(" SELECT c.id, CONCAT(i.tipo, ', ', i.endereco, ', ', i.numeroEndereco, ', ', i.bairro) AS imovel, cor.nome as corretor, cli.nome as cliente, data_inicio_contrato, data_fim_contrato, valor_aluguel, data_vencimento, juros, multa, desconto_pontualidade, clausulas_adicionais, taxa_adm, tem_repasse_garantido, qtd_meses_rep_garantido, data_repasse, dias_tipo, cobra_tarifa, finalidade_contrato, emite_nf, retem_imposto, quem_retera, fiador_id, garantia_tipo, data_inicio_garantia, data_fim_garantia, valor_garantia, obs_garantia, tem_seguro_incendio, data_inicio_seguro, data_fim_seguro, valor_seguro, nome_seguradora, apolice,obs_seguro
		    FROM contratos as c
		    inner join imoveis as i on imovel_id = i.id 
            inner join corretores as cor on corretor_id = cor.id 
            inner join clientes as cli on cliente_id = cli.id ")
		->result();
	}
	
}
