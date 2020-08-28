<div class="header bg-gradient-template pb-6">
	<div class="container-fluid">
		<div class="header-body">
			<div class="row align-items-center py-4">
				<div class="col-lg-6 col-7">
					<!-- <h6 class="h2 text-white d-inline-block mb-0">Default</h6> -->
					<nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
						<ol class="breadcrumb breadcrumb-links breadcrumb-dark">
							<li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
							<li class="breadcrumb-item"><a href="#">Financeiro</a></li>
							<li class="breadcrumb-item active" aria-current="page">Novo Convenio</li>
						</ol>
					</nav>
				</div>
				<div class="col-lg-6 col-5 text-right">
					<a href="<?= base_url()?>financeiro" class="btn btn-sm btn-neutral"><i class="fa fa-list"></i> Lista</a>
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
					<h3 class="mb-0">Painel de Financeiro</h3>
						<?php $this->load->view('layout/messages.php'); ?>
					<!-- <p class="text-sm mb-0">
					.
					</p> -->
				</div>
				<div class="card-header">
				<form id="form_financeiro" action="<?php echo current_url(); ?>" class="form-horizontal" method="post">
						<input name="id" type="hidden" id="id" class="form-control" value="<?php echo set_value("id", @$item->id) ?>" />				
							<div class="form-group">
								<label class="col-sm-2 control-label" for="profissional_id">Profissional</label>
								<div class="col-sm-10">
									<?php echo form_dropdown('profissional_id', $listaProfissionais, set_value('profissional_id', @$item->profissional_id), 
									'data-size="7" data-live-search="true" class="form-control" id="profissionais"'); ?>
									<?php echo form_error('profissional_id'); ?>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label" for="data_nota">Data da Nota</label>
								<div class="col-sm-10">
									<input name="data_nota" type="text" id="data_nota" class="form-control" value="<?php @$item->data_nota ? set_value("data_nota", date("d/m/Y", strtotime(@$item->data_nota))) : set_value("data_nota", date("d/m/Y")) ?>" />
								<?php echo form_error('data_nota'); ?>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label" for="qtd_atendimentos">Qtd. Atendimentos</label>
								<div class="col-sm-10">
									<input name="qtd_atendimentos" type="number" id="qtd_atendimentos" class="form-control" value="<?php echo set_value("qtd_atendimentos", @$item->qtd_atendimentos) ?>" />
								<?php echo form_error('qtd_atendimentos'); ?>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label" for="valor_nota">Valor da Nota</label>
								<div class="col-sm-10">
									<div class="input-group mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text" id="basic-addon1">R$</span>
										</div>
										<input name="valor_nota" type="text" id="valor_nota" class="form-control" step="0.01" value="<?php echo set_value("valor_nota", formatar_moeda(@$item->valor_nota))?>" />
										<?php echo form_error('valor_nota'); ?>
									</div>
								</div>
							</div>
							
																			
						<div class="form-actions">
							<div class="col-sm-10 col-offset-2">
								<input type="submit" name="enviar" class="btn btn-primary" value="Salvar" />
								<a href="<?php echo site_url("financeiro"); ?>" class="btn">
									Cancelar
								</a>
							</div>
						</div>
					</form>
				</div>
			</div>	
		</div>
	</div>

<script type="text/javascript" src="<?php echo base_url(); ?>assets/modulos/financeiro/js.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/modulos/financeiro/validate.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function() {
		$("#data_nota").mask("99/99/9999");
		$("#valor_nota").maskMoney({allowNegative: false, thousands:'.', decimal:','});
	});
</script>

