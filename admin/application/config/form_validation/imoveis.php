<?php
$config['Imoveis'] = array(
    array(
            'field' => 'id',
            'label' => 'Id',
            'rules' => ''
    ),
	array(
		'field' => 'proprietario_id',
		'label' => 'Proprietário',
		'rules' => 'required'
	),
	array(
		'field' => 'tipo',
		'label' => 'Tipo',
		'rules' => 'required'
	),
	array(
		'field' => 'endereco',
		'label' => 'Endereço',
		'rules' => 'required'
	),
	array(
		'field' => 'bairro',
		'label' => 'Bairro',
		'rules' => 'required'
	),
	array(
		'field' => 'cidade',
		'label' => 'Cidade',
		'rules' => 'required'
	),
	array(
		'field' => 'estado',
		'label' => 'Estado',
		'rules' => 'required'
	),
	array(
		'field' => 'cep',
		'label' => 'CEP',
		'rules' => 'required'
	),
	array(
		'field' => 'valor',
		'label' => 'Valor',
		'rules' => 'required'
	),
	array(
		'field' => 'valorCondominio',
		'label' => 'Valor do Condomínio',
		'rules' => 'required'
	),
	array(
		'field' => 'valorIPTU',
		'label' => 'Valor do IPTU',
		'rules' => 'required'
	),
	array(
		'field' => 'matriculaIPTU',
		'label' => 'Matrícula do IPTU',
		'rules' => 'required'
	),
	array(
		'field' => 'matriculaAgua',
		'label' => 'Matrícula da Água',
		'rules' => 'required'
	),
	array(
		'field' => 'matriculaLuz',
		'label' => 'Matrícula da Luz',
		'rules' => 'required'
	),
	array(
		'field' => 'matriculaGas',
		'label' => 'Matrícula da Gás',
		'rules' => 'required'
	),
	array(
		'field' => 'dimensoesDoTerreno',
		'label' => 'Dimensões do Terreno',
		'rules' => 'required'
	),
	array(
		'field' => 'vagasGaragem',
		'label' => 'Vagas na Garagem',
		'rules' => 'required'
	)
);
