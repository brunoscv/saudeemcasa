<div class="header bg-gradient-template pb-6">
	<div class="container-fluid">
		<div class="header-body">
			<div class="row align-items-center py-4">
				<div class="col-lg-6 col-7">
					<h6 class="h2 text-white d-inline-block mb-0">Ordens de Serviços</h6>
					<nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
						<ol class="breadcrumb breadcrumb-links breadcrumb-dark">
							<li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
							<li class="breadcrumb-item active" aria-current="page">Ordens de Serviços</li>
						</ol>
					</nav>
				</div>
				<div class="col-lg-6 col-5 text-right">
					<a href="<?php echo base_url(); ?>ordemservicos" class="btn btn-sm btn-neutral">Listagem</a>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="main-content" id="panel">
	<div class="container-fluid mt--6">
		<div class="row">
			<div class="col">
				<div class="card-wrapper">
					<div class="card">
						<!-- Card header -->
						<div class="card-header">
							<h3 class="mb-0">Ordens de Serviços / <?php echo (@$item->id) ? "Editar" : "Adicionar" ?> </h3>
						</div>
						<div class="col-md-12">
							<?php $this->load->view('layout/messages.php'); ?>
						</div>
						<!-- Card body -->
						<div class="card-body">
							<form id="form_ordemservicos" class="needs-validation"
								  action="<?php echo current_url(); ?>" method="post" enctype="multipart/form-data">
								<div class="card mb-4">
							        <!-- Card header -->
							        <div class="card-header">
							          <h1 class="mb-0">Ordem de Serviço</h1>
							        </div>
							        <!-- Card body -->
							        <div class="card-body">
							        	<div class="form-row">
											<div class="col-md-3 mb-3">
												<label class="form-control-label" for="parceiro_id">ID do Parceiro</label>
												<?php echo form_dropdown('parceiro_id', $listaParceiros, set_value('parceiro_id', @$item->parceiro_id),
														'data-size="7" data-live-search="true" class="form-control fill_selectbtn_in own_selectbox" id="parceiro" '); ?>
												<?php echo form_error('parceiro_id'); ?>
											</div>
											<div class="col-md-3 mb-3">
												<label class="form-control-label" for="descricao">Descrição</label>
												<input type="text" class="form-control" id="descricao" name="descricao"
													   placeholder="Descrição"
													   value="<?php echo set_value("descricao", @$item->descricao) ?>" >
												<?php echo form_error('descricao'); ?>
											</div>
											<div class="col-md-3 mb-3">
												<label class="form-control-label" for="status">Status</label>
												<input type="text" class="form-control" id="status" name="status"
													   placeholder="Status"
													   value="<?php echo set_value("status", @$item->status) ?>" >
												<?php echo form_error('status'); ?>
											</div>
											<div class="col-md-3 mb-3">
												<label class="form-control-label" for="valor">Valor</label>
												<input type="text" class="form-control" id="valor" name="valor"
													   placeholder="Valor"
													   value="<?php echo set_value("valor", @$item->valor) ?>" >
												<?php echo form_error('valor'); ?>
											</div>
										</div>
									</div>
								</div>
								
								<input type="submit" name="enviar" class="btn btn-primary" value="Salvar" />
								<a href="<?php echo site_url("ordemservicos")?>" class="btn btn-outline-default ml-auto">
									Cancelar
								</a>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>

		<script type="text/javascript" src="<?php echo base_url(); ?>assets/modulos/ordemservicos/js.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>assets/modulos/ordemservicos/validate.js"></script>
