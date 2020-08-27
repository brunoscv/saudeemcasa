<div class="header bg-gradient-template pb-6">
	<div class="container-fluid">
		<div class="header-body">
			<div class="row align-items-center py-4">
				<div class="col-lg-6 col-7">
					<!-- <h6 class="h2 text-white d-inline-block mb-0">Default</h6> -->
					<nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
						<ol class="breadcrumb breadcrumb-links breadcrumb-dark">
							<li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
							<li class="breadcrumb-item"><a href="#">Consultas</a></li>
							<li class="breadcrumb-item active" aria-current="page">Nova Consulta</li>
						</ol>
					</nav>
				</div>
				<div class="col-lg-6 col-5 text-right">
					<a href="<?= base_url()?>consultas" class="btn btn-sm btn-neutral"><i class="fa fa-list"></i> Lista de Consultas</a>
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
					<h3 class="mb-0">Painel de Consultas</h3>
						<?php $this->load->view('layout/messages.php'); ?>
					<!-- <p class="text-sm mb-0">
					.
					</p> -->
				</div>
				<div class="card-header">
				<form id="form_consultas" action="<?php echo current_url(); ?>" class="form-horizontal" method="post">
						<input name="id" type="hidden" id="id" class="form-control" value="<?php echo set_value("id", @$item->id) ?>" />
							
							<div class="form-group">
								<label class="col-sm-2 control-label" for="pacientes_id">Paciente</label>
								<div class="col-sm-10">
									<?php echo form_dropdown('pacientes_id', $listaPacientes, set_value('pacientes_id', @$item->pacientes_id), 
									'data-size="7" data-live-search="true" class="form-control fill_selectbtn_in own_selectbox" id="pacientes" required=""'); ?>
									<?php echo form_error('pacientes_id'); ?>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label" for="profissionais_id">Consultas</label>
								<div class="col-sm-10">
									<?php echo form_dropdown('profissionais_id', $listaProfissionais, set_value('profissionais_id', @$item->profissionais_id), 
									'data-size="7" data-live-search="true" class="form-control" id="profissionais"required=""'); ?>
									<?php echo form_error('profissionais_id'); ?>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label" for="qtd_atendimentos">Qtd. Atendimentos</label>
								<div class="col-sm-10">
									<input name="qtd_atendimentos" type="number" min="1" id="qtd_atendimentos" required="" class="form-control" value="<?php echo set_value("qtd_atendimentos", @$item->qtd_atendimentos) ?>" />
								<?php echo form_error('qtd_atendimentos'); ?>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label" for="freq_atendimentos">Freq. Semanal</label>
								<div class="col-sm-10">
									<input name="freq_atendimentos" type="number" min="1" id="freq_atendimentos" required="" class="form-control" value="<?php echo set_value("freq_atendimentos", @$item->freq_atendimentos) ?>" />
								<?php echo form_error('freq_atendimentos'); ?>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label" for="data_inicio">Inicio</label>
								<div class="col-sm-10">
									<input name="data_inicio" type="text" id="data_inicio" required="" class="form-control" value="<?= @$item->data_inicio ? set_value("data_inicio", date("d/m/Y", strtotime(@$item->data_inicio))) : "" ?>" />
								<?php echo form_error('data_inicio'); ?>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label" for="data_fim">Fim</label>
								<div class="col-sm-10">
									<input name="data_fim" type="text" id="data_fim" required="" class="form-control" value="<?= @$item->data_fim ? set_value("data_fim", date("d/m/Y", strtotime(@$item->data_fim))) : "" ?>" />
								<?php echo form_error('data_fim'); ?>
								</div>
							</div>
							
						<div class="form-actions">
							<div class="col-sm-10 col-offset-2">
								<input type="submit" name="enviar" class="btn btn-primary" value="Salvar" />
								<a href="<?php echo site_url("consultas"); ?>" class="btn">
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
		$("#data_inicio").mask("99/99/9999");
		$("#data_fim").mask("99/99/9999");
		// $("#cpf_prof").mask("999.999.999-99");
		// $("#especialidades").select2();
	});
</script>
