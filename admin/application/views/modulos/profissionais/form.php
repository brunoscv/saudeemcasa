<div class="header bg-gradient-template pb-6">
	<div class="container-fluid">
		<div class="header-body">
			<div class="row align-items-center py-4">
				<div class="col-lg-6 col-7">
					<!-- <h6 class="h2 text-white d-inline-block mb-0">Default</h6> -->
					<nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
						<ol class="breadcrumb breadcrumb-links breadcrumb-dark">
							<li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
							<li class="breadcrumb-item"><a href="#">Profissional</a></li>
							<li class="breadcrumb-item active" aria-current="page">Novo Profissional/li>
						</ol>
					</nav>
				</div>
				<div class="col-lg-6 col-5 text-right">
					<a href="<?= base_url()?>profissionais" class="btn btn-sm btn-neutral"><i class="fa fa-list"></i> Lista de Profissional</a>
					<!-- <a href="#" class="btn btn-sm btn-neutral">Filters</a> -->
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Cards Header -->
<!-- Page content -->
<div class="container-fluid mt--6">
	<!-- Table -->
	<div class="row">
        <div class="col">
          	<div class="card">
				<!-- Card header -->
				<div class="card-header">
					<h3 class="mb-0">Painel de Profissional</h3>
						<?php $this->load->view('layout/messages.php'); ?>
					<!-- <p class="text-sm mb-0">
					.
					</p> -->
				</div>
				<div class="card-header">
				<form id="form_profissionais" action="<?php echo current_url(); ?>" class="form-horizontal" method="post">
						<input name="id" type="hidden" id="id" class="form-control" value="<?php echo set_value("id", @$item->id) ?>" />
						
						<div class="form-group">
							<label class="col-sm-2 control-label" for="nome_prof">Nome</label>
								<div class="col-sm-10">
									<input name="nome_prof" type="text" id="nome_prof" class="form-control" value="<?php echo set_value("nome_prof", @$item->nome_prof) ?>" />
									<?php echo form_error('nome_prof'); ?>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-2 control-label" for="telefone_prof">Telefone</label>
								<div class="col-sm-10">
									<input name="telefone_prof" type="text" id="telefone_prof" class="form-control" value="<?php echo set_value("telefone_prof", @$item->telefone_prof) ?>" />
									<?php echo form_error('telefone_prof'); ?>
								</div>
						</div>
						<div class="form-group">
							<label class="col-sm-2 control-label" for="profissionais_id">Conselho</label>
								<div class="col-sm-10">
								<?php echo form_dropdown('conselhos_id', $listaConselhos, set_value('conselhos_id', @$item->conselhos_id), 
									'data-size="7" data-live-search="true" class="form-control fill_selectbtn_in own_selectbox" id="profissionais"'); ?>
									<?php echo form_error('conselhos_id'); ?>
								</div>
						</div>
						<div class="form-group">
							<label class="col-sm-2 control-label" for="num_conselho_prof">Num Conselho</label>
								<div class="col-sm-10">
									<input name="num_conselho_prof" type="text" id="num_conselho_prof" class="form-control" value="<?php echo set_value("num_conselho_prof", @$item->num_conselho_prof) ?>" />
									<?php echo form_error('num_conselho_prof'); ?>
								</div>
						</div>
						<div class="form-group">
							<label class="col-sm-2 control-label" for="estados_id">UF Conselho</label>
								<div class="col-sm-10">
								<?php echo form_dropdown('estados_id', $listaEstados, set_value('estados_id', @$item->estados_id), 
									'data-size="7" data-live-search="true" class="form-control fill_selectbtn_in own_selectbox" id="estados"'); ?>
									<?php echo form_error('estados_id'); ?>
								</div>
						</div>
						<div class="form-group">
							<label class="col-sm-2 control-label" for="especialidades_id">Especialidade</label>
								<div class="col-sm-10">
									<?php echo form_dropdown('especialidades_id', $listaEspecialidades, set_value('especialidades_id', @$item->especialidades_id), 
									'data-size="7" data-live-search="true" class="form-control fill_selectbtn_in own_selectbox" id="especialidades"'); ?>
									<?php echo form_error('especialidades_id'); ?>
								</div>
						</div>

						<div class="form-actions">
							<div class="col-sm-10 col-offset-2">
								<input type="submit" name="enviar" class="btn btn-primary" value="Salvar" />
								<a href="<?php echo site_url("profissionais"); ?>" class="btn">
									Cancelar
								</a>
							</div>
						</div>
					</form>
				</div>
			</div>	
		</div>
	</div>

<script type="text/javascript" src="<?php echo base_url(); ?>assets/modulos/profissionais/js.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/modulos/profissionais/validate.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function() {
		$("#telefone_prof").mask("(99) 99999-9999");
		// $("#cpf_prof").mask("999.999.999-99");
		// $("#especialidades").select2();
	});
</script>
