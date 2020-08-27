<div class="header bg-gradient-template pb-6">
	<div class="container-fluid">
		<div class="header-body">
			<div class="row align-items-center py-4">
				<div class="col-lg-6 col-7">
					<!-- <h6 class="h2 text-white d-inline-block mb-0">Default</h6> -->
					<nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
						<ol class="breadcrumb breadcrumb-links breadcrumb-dark">
							<li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
							<li class="breadcrumb-item"><a href="#">Convênios</a></li>
							<li class="breadcrumb-item active" aria-current="page">Novo Convenio</li>
						</ol>
					</nav>
				</div>
				<div class="col-lg-6 col-5 text-right">
					<a href="<?= base_url()?>documentos" class="btn btn-sm btn-neutral"><i class="fa fa-list"></i> Lista de Convênios</a>
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
					<h3 class="mb-0">Painel de Convênios</h3>
						<?php $this->load->view('layout/messages.php'); ?>
					<!-- <p class="text-sm mb-0">
					.
					</p> -->
				</div>
				<div class="card-header">
				<form id="form_convenios" class="form-horizontal" method="post" action="<?php echo site_url();?>documentos/salvar_documentos" enctype="multipart/form-data">
						<input type="hidden" id="id" name="id" value="<?php echo set_value("id", @$item->id); ?>" />
						<div class="form-group">
							<label class="col-sm-2 control-label" for="profissionais_id">Profissional</label>
							<div class="col-sm-10">
								<?php echo form_dropdown('profissionais_id', $listaProfissionais, set_value('profissionais_id', @$item->profissionais_id), 
								'data-size="7" data-live-search="true" class="form-control" id="profissionais"required=""'); ?>
								<?php echo form_error('profissionais_id'); ?>
							</div>
						</div>

						<div class="form-group">
							<label class="col-sm-2 control-label" for="descricao">Descrição</label>
							<div class="col-sm-10">
								<input name="descricao" type="text" id="descricao" required="" class="form-control" value="<?php echo set_value("descricao", @$item->descricao) ?>" />
							<?php echo form_error('descricao'); ?>
							</div>
						</div>
						
						<div class="form-group">
							<label class="col-sm-2 control-label" for="data_envio">Data de Referência</label>
							<div class="col-sm-10">
								<input name="data_envio" type="text" id="data_envio" required="" class="form-control" value="<?php echo set_value("data_envio", @$item->data_envio) ?>" />
							<?php echo form_error('data_envio'); ?>
							</div>
						</div>
						<!-- /control-group -->
						<div class="form-group">
							<label class="col-sm-2 control-label" for="status">Documentos</label>
							<div class="col-sm-10">
								<input type="file" name="files[]" multiple required="required"/>
							</div>
						</div>

						<div class="form-group">
							<div class="col-sm-offset-2 col-sm-10">
								<input type="submit" name="enviar" class="btn btn-primary" value="Salvar" />
								<a href="<?php echo site_url("documentos")?>" class="btn">
									Cancelar
								</a>
							</div>
						</div>
					</form>
				</div>
			</div>	
		</div>
	</div>

<script type="text/javascript" src="<?php echo base_url(); ?>assets/modulos/documentos/js.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/modulos/documentos/validate.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function() {
		$("#data_envio").mask("99/99/9999");
		// $("#data_fim").mask("99/99/9999");
		// $("#cpf_prof").mask("999.999.999-99");
		// $("#especialidades").select2();
	});
</script>
