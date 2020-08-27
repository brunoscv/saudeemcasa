<?php

class Proprietarios_model extends CI_Model
{
	public $table = "proprietarios";

	public function __construct()
	{
		parent::__construct();
	}

	public function getProprietarios() {
		return $this->db->query(" SELECT id, nome, razao_social, cpf_cnpj, forma_pagamento, banco, agencia, conta, codigo_operacao, nome_titular, cpf_titular, rg, orgao_expedidor, data_expedicao, celular, telefone, email, sexo, nascimento, estado_civil, nacionalidade, cep, endereco, numero, complemento, bairro, cidade, uf, profissao, ramo_atividade, renda_mensal, nome_conjuge, cpf_conjuge, rg_conjuge, orgao_expedidor_conjuge, nacionalidade_conjuge, sexo_conjuge, profissao_conjuge, celular_conjuge, telefone_conjuge, email_conjuge, observacao
		                          FROM proprietarios ")
						->result();
	}
	
}
