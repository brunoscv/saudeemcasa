<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Usuarios extends MY_Controller {

	public function __construct(){
		parent::__construct();
		
		$this->_auth();

		$this->load->model("Profissionais_model");

		//adiciona os dados do login para fazer as visualizacoes de informacoes
		$this->data['admin'] 	= $this->session->userdata('userdata')['principal'];
		$this->data['user_id'] 	= $this->session->userdata('userdata')['id'];
		$this->data['tipo_id'] 	= $this->session->userdata('userdata')['tipo_id'];
		
		$this->data['campos'] = array(
			'u.nome' => 'Nome',
			'u.email' => 'E-mail'
		);
	}
	
	public function usuarioExiste(){
		header('Content-Type: application/json');
		
		$this->load->model("Usuarios_model");
		$result['data'] = ($this->Usuarios_model->usuarioExiste($this->input->get("usuario"),  $this->input->get('id'))) ? false : true;						
		echo json_encode($result['data']);	
	}
	
	public function index(){
		// $perPage = '10';
		// $offset = ($this->input->get("per_page")) ? $this->input->get("per_page") : "0";
		
		// if( !is_null($this->input->get('busca')) ){
		// 	$campo = $this->input->get('filtro_field', true);
		// 	$valor = $this->input->get('filtro_valor', true);

		// 	if($campo && $valor){
		// 		if( array_key_exists($campo, $this->data['campos']) ){
		// 			$this->db->where("{$campo} LIKE","%".$valor."%");
		// 		}
		// 	}
		// }
		// if( !hasPerfil(1) ){
		// 	$this->db->where("id >",1);
		// }
		// $countUsuarios = $this->db
		// 					->select("count(u.id) AS quantidade")
		// 					->from("usuarios AS u")
		// 					->get()->row();
		
		// $quantidadeUsuarios = $countUsuarios->quantidade;
		
		// if( !is_null($this->input->get('busca')) ){
		// 	$campo = $this->input->get('filtro_field', true);
		// 	$valor = $this->input->get('filtro_valor', true);

		// 	if($campo && $valor){
		// 		if( array_key_exists($campo, $this->data['campos']) ){
		// 			$this->db->where("{$campo} LIKE","%".$valor."%");
		// 		}
		// 	}
		// }
		
		// if( !hasPerfil(1) ){
		// 	$this->db->where("id >",1);
		// }
		// $resultUsuarios = $this->db->select("*")->from("usuarios AS u")->limit($perPage,$offset)->get();
		
		// $this->data['listaUsuarios'] = $resultUsuarios->result();
		
		// $this->load->library('pagination');
		// $config['base_url'] = site_url("usuarios/index")."?";
		// $config['total_rows'] = $quantidadeUsuarios;
		// $config['per_page'] = $perPage;
		
		// $this->pagination->initialize($config);
		
		// $this->data['paginacao'] = $this->pagination->create_links();

		//$displayed = ($this->data['tipo_id'] != 1) ? $displayed = "style='display:none;'" : $displayed = "style='display:block;'";	
		$resultUsuarios = $this->db->select("u.*, p.nome_prof")->from("usuarios AS u")->join('profissionais AS p', "p.id = u.usuario_id")->get();

		$this->data['listaUsuarios'] = $resultUsuarios->result();
		//$this->data['displayed'] 	 = $displayed;
	}
	
	public function criar(){
		$this->load->model("Perfis_model");
		
		$this->data['item'] = (object) array();
		$this->data['item']->perfis = array();
		$this->data['listaPerfis'] = $this->Perfis_model->listaPerfis();

		//Campos relacionados
		//caso seja necessario adicione os relacionamento aqui
		$usuarios_tipos = $this->db->from("usuarios_tipos")->get()->result();
		$this->data['listaTipos'] = array();
		foreach ($usuarios_tipos as $tipo) {
			$this->data['listaTipos'][$tipo->id] = $tipo->descricao;
		}
		$profissionais = $this->Profissionais_model->getProfissionais();
		$this->data['listaProfissionais'] = array();
		$this->data['listaProfissionais'][''] = "Escolha um Profissional";
		foreach ($profissionais as $profissionais) {
			$this->data['listaProfissionais'][$profissionais->id] = $profissionais->nome_prof;
		}
		//fim Campos relacionados
		
		if( $this->input->post("enviar") ){
			if( $this->form_validation->run('Usuarios') === FALSE ){
				$this->data['msg_error'] = validation_errors("<p>","</p>");
			} else {
				$usuario = array();
				$usuario['usuario']   = strtolower($this->input->post("usuario",TRUE));
				//$usuario['nome'] 	  = $this->input->post("nome",TRUE);
				$usuario['email'] 	  = $this->input->post("email",TRUE);
				$usuario['senha'] 	  = $this->encryption->encrypt($this->input->post("senha",TRUE));
				$usuario['principal'] = ($this->input->post("principal")) ? $this->input->post("principal") : "0";
				$usuario['createdAt'] = date("Y-m-d H:i:s");
				
				$usuario["tipo_id"]    = $this->input->post("tipo_id",TRUE);
				$usuario["usuario_id"] = $this->input->post("usuario_id",TRUE);

				// switch ($usuario["tipo_id"]) {
				// 	case 1:
				// 		$usuario["usuario"] = "Saude em Casa";
				// 	break;					
				// 	default:
				// 		$usuarios = $this->db->select("nome_prof")->from("profissionais")->where("id", $usuario["usuario_id"])->get()->result();
				// 		$usuario["nome"] = $usuarios[0]->nome_prof;
				// 	break;
				// }

				// arShow($usuario);exit;
				
				$this->db->insert("usuarios", $usuario);
				if( $this->input->post("perfis") ){
					$usuario['id'] = $this->db->insert_id(); //pega o ultimo id inserido no BD
					
					$perfis = $this->input->post("perfis");
					foreach($perfis as $perfil){
						$usuario_perfil = array();
						$usuario_perfil['usuarios_id']  = $usuario['id'];
						$usuario_perfil['perfis_id'] = $perfil; 
						$this->db->insert("usuarios_perfis", $usuario_perfil);
					}

				}
				
				$this->session->set_flashdata("msg_success", "Usuário adicionado com sucesso!");
				redirect('usuarios/index');
			}
		}
	
	}
	
	public function editar(){
		$this->load->model("Perfis_model");
		$this->load->model("Usuarios_model");
		
		$id = $this->uri->segment(3);
		// if( !hasPerfil(1) ){
		// 	$this->db->where("id > ",1);
		// }

		//Campos relacionados
		//caso seja necessario adicione os relacionamento aqui
		$usuarios_tipos = $this->db->from("usuarios_tipos")->get()->result();
		$this->data['listaTipos'] = array();
		foreach ($usuarios_tipos as $tipo) {
			$this->data['listaTipos'][$tipo->id] = $tipo->descricao;
		}
		$profissionais = $this->Profissionais_model->getProfissionais();
		$this->data['listaProfissionais'] = array();
		foreach ($profissionais as $profissionais) {
			$this->data['listaProfissionais'][$profissionais->id] = $profissionais->nome_prof;
		}
		//fim Campos relacionados
		
		$usuario = $this->db->from("usuarios AS m")->where("id", $id)->get()->row();
		if( !$usuario ){
			$this->session->set_flashdata("msg_error", "Usuário não encontrado!");
			redirect('usuarios/index');
		} else {
			$this->data['item'] = &$usuario;
			$this->data['item']->perfis = $this->Usuarios_model->getPerfisId($usuario->id);
			$this->data['listaPerfis'] = $this->Perfis_model->listaPerfis();
			
			if( $this->input->post("enviar") ){
				if( $this->form_validation->run('Usuarios') === FALSE ){
					$this->data['msg_error'] = validation_errors();
				} else {
					$usuario = array();
					$usuario['id'] 			= $id; 
					$usuario['usuario'] 	= strtolower($this->input->post("usuario",TRUE));
					$usuario['email'] 		= $this->input->post("email",TRUE);
					$usuario['updatedAt'] 	= date("Y-m-d H:i:s");

					$usuario["tipo_id"] 	  = $this->input->post("tipo_id",TRUE);
					$usuario["usuario_id"] = $this->input->post("usuario_id",TRUE);
					
					if( $this->input->post("senha") ){
						// $usuario['senha'] 	= $this->encrypt->encode($this->input->post("senha",TRUE));
						$usuario['senha'] 	= $this->encryption->encrypt($this->input->post("senha",TRUE));
					}
					$usuario['principal'] 	= ($this->input->post("principal")) ? $this->input->post("principal") : "0";
					
					$this->db->where("id", $usuario['id']);
					$this->db->update("usuarios", $usuario);
					
					if( $this->input->post("perfis") ){
						$this->db->where("usuarios_id",$usuario["id"]);
						$this->db->delete("usuarios_perfis");
						
						$perfis = $this->input->post("perfis");
						foreach($perfis as $perfil){
							$usuario_perfil = array();
							$usuario_perfil['usuarios_id']  = $usuario['id'];
							$usuario_perfil['perfis_id'] = $perfil; 
							$this->db->insert("usuarios_perfis", $usuario_perfil);
						}

					}
					
					$this->session->set_flashdata("msg_success", "Usuário ".$usuario['usuario']." editado com sucesso!");
					redirect('usuarios/index');
				}
			}
		}
	}

	public function delete(){
		$id = $this->uri->segment(3);
		
		$usuario = $this->db
						->from("usuarios")
						->where("id", $id)->get()->row();
		if( !$usuario ){
			$this->session->set_flashdata("msg_error", "Usuário não encontrado!");
			redirect('usuarios/index');
		} else {
			$this->data['item'] = &$usuario;
			if( $this->input->post("enviar") ){
					
				$this->db->where("id", $usuario->id);
				$this->db->delete("usuarios");
				$this->session->set_flashdata("msg_success", "Usuário adicionado com sucesso!");
				redirect('usuarios/index');
			}
		}
	}

	/**
	 * Select que complementa os usuários que estarão no sistema
	 */
	public function get_usuarios_por_tipo() {
		$tipo_usuario_id = $this->input->post("tipo_id");

		//Campos relacionados
		//caso seja necessario adicione os relacionamento aqui
		$usuarios = $this->db->select("p.id, p.nome_prof, u.usuario_id")->from("profissionais AS p")->join("usuarios AS u", "u.usuario_id = p.id")->where("u.tipo_id", $tipo_usuario_id)->get()->result();
		$this->data['lista'] = array();
		foreach ($usuarios as $usuario) {
			$this->data['lista'][$usuario->id] = $usuario->nome_prof;
		}
		//fim Campos relacionados





		// $options = "";
		// foreach ($usuarios as $key => $u) {
		// 	$options .= "<option value='{$u->id}'>$u->nome_prof</option>".PHP_EOL;
		// }
		// print_r  ($options ) ;
	}
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */