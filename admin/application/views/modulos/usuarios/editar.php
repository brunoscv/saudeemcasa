<div class="header bg-gradient-template pb-6">
	<div class="container-fluid">
		<div class="header-body">
			<div class="row align-items-center py-4">
				<div class="col-lg-6 col-7">
					<h6 class="h2 text-white d-inline-block mb-0">Usuários</h6>
					<nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
						<ol class="breadcrumb breadcrumb-links breadcrumb-dark">
							<li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
							<li class="breadcrumb-item"><a href="#">Dashboards</a></li>
							<li class="breadcrumb-item active" aria-current="page">Default</li>
						</ol>
					</nav>
				</div>
				<div class="col-lg-6 col-5 text-right">
					<a href="<?php echo site_url("usuarios");?>" class="btn btn-sm btn-neutral"><i class="fa fa-list"></i> Todos</a>
					<!-- <a href="#" class="btn btn-sm btn-neutral">Filters</a> -->
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Page content -->
<div class="container-fluid mt--6">
    <!-- Table -->
    <div class="row">
        <div class="col-lg-12">
          	<div class="card">
				<div class="card-header">
					<h3 class="mb-0">Controle de Usuários</h3>
					<p class="text-sm mb-0">
						Aqui você controla o cadastro/edição de Usuários do Sistema.
					</p>
				</div>
				<div class="card-body">
					<div class="panel-body" style="margin-top:10px;">
						<?php $this->load->view('layout/messages.php'); ?>
						<form id="form_usuario" action="<?php echo current_url(); ?>" class="form-horizontal" method="post">
							<input type="hidden" id="id" name="id" value="<?php echo set_value("id", @$item->id); ?>" />
							
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
									<label class="bmd-label-floating">Tipo de Usuário: </label>
									<?php echo form_dropdown('tipo_id', $listaTipos, set_value('tipo_id', @$item->tipo_id), 
										'data-size="7" data-live-search="true" class="form-control fill_select btn_in own_selectbox" id="usuarios_tipo"'); ?>
										<small style="color:#F65676"><?php echo form_error('tipo_id'); ?></small>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
									<label class="bmd-label-floating">Lista de Usuário: </label>
									<?php echo form_dropdown('usuario_id', $listaProfissionais, set_value('usuario_id', @$item->usuario_id), 
										'data-size="7" data-live-search="true" class="form-control fill_select btn_in own_selectbox" id="usuarios"'); ?>
										<small style="color:#F65676"><?php echo form_error('usuario_id'); ?></small>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label class="bmd-label-floating">Usuário</label>
										<input type="text" class="form-control" value="<?php echo set_value("usuario", @$item->usuario); ?>" name="usuario" id="usuario" placeholder="ex: efortes">
										<small style="color:#F65676"><?php echo form_error('usuario'); ?></small>
										<p class="help-block">
											Seu nome de usuário para acessar o sistema
										</p>
										
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label class="bmd-label-floating">E-mail</label>
										<input type="text" class="form-control" value="<?php echo set_value("email", @$item->email); ?>" name="email" id="email" placeholder="ex: exemplo@email.com">
										<small style="color:#F65676"><?php echo form_error('email'); ?></small>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label class="bmd-label-floating" for="senha">Senha</label>
											<input type="password" class="form-control" name="senha" id="senha">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label class="bmd-label-floating" for="senha2">Confirmação</label>
											<input type="password" class="form-control" name="senha2" id="senha2">
									</div>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label" for="principal">Principal: </label>
								<div class="col-sm-10">
									<div class="checkbox checbox-switch switch-success">
										<label>
											<?php $checked = (@$item->principal==1) ? "checked='checked'" : ''; ?>
											<input type="checkbox" id="principal" name="principal" value="1" <?php echo $checked; ?> />
											<span></span>
										</label>
									</div>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label" for="senha2">Perfis de acesso</label>
								<div class="col-sm-12">
									<?php $values = ($this->input->post("perfis")) ? $this->input->post("perfis") : @$item->perfis; ?>
									<?php echo formPerfilList('perfis[]', $listaPerfis, $values,'class="" id="perfis" style="list-style:none;margin:0;padding:0;"'); ?>
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-12 pull-right">
									<input type="submit" name="enviar" class="btn btn-primary btn-sm btn-icon" value="Salvar" />
									<a href="<?php echo site_url("usuarios")?>" class="btn btn-default btn-sm btn-icon">
										Cancelar
									</a>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

<script type="text/javascript">
</script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/modulos/usuarios/js.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/modulos/usuarios/validate.js"></script>
<!-- <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-checktree.js"></script> -->