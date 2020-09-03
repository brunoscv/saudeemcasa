<?php
class Profissionais_model extends CI_Model{
	
	public $table = "profissionais";

	public function __construct() {
		parent::__construct();
	}

	public function getProfissionais() {
		return $this->db->query(" SELECT * FROM profissionais ORDER BY nome_prof ASC")
						->result();
	}

	public function getProfissionalById($profissional_id) {
		return $this->db->query(" SELECT * FROM profissionais WHERE id = $profissional_id ORDER BY nome_prof ASC")
						->result();
	}
	
}