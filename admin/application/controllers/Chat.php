<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Chat extends MY_Controller {

	public $data;
	function __construct(){
		parent::__construct();
		$this->_auth();
	}

	public function index(){
	}

}
