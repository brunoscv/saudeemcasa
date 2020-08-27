<?php
$config['OrdemServicos'] = array(
	array(
		'field' => 'id',
		'label' => 'Id',
		'rules' => ''
	),
	array(
		'field' => 'parceiro_id',
		'label' => 'Parceiro',
		'rules' => 'required'
	),
	array(
		'field' => 'descricao',
		'label' => 'Descrição',
		'rules' => 'required'
	),
	array(
		'field' => 'status',
		'label' => 'Status',
		'rules' => 'required'
	),
	array(
		'field' => 'valor',
		'label' => 'Valor',
		'rules' => 'required'
	)
);
