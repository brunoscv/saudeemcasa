<div class="header bg-gradient-template pb-6">
	<div class="container-fluid">
		<div class="header-body">
			<div class="row align-items-center py-4">
				<div class="col-lg-6 col-7">
					<!-- <h6 class="h2 text-white d-inline-block mb-0">Default</h6> -->
					<nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
						<ol class="breadcrumb breadcrumb-links breadcrumb-dark">
							<li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
							<li class="breadcrumb-item"><a href="#">Conselhos</a></li>
							<li class="breadcrumb-item active" aria-current="page">Novo Conselho</li>
						</ol>
					</nav>
				</div>
				<div class="col-lg-6 col-5 text-right">
					<a href="<?= base_url()?>conselhos" class="btn btn-sm btn-neutral"><i class="fa fa-list"></i> Lista de Conselhos</a>
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
					<h3 class="mb-0">Painel de Conselhos</h3>
						<?php $this->load->view('layout/messages.php'); ?>
					<!-- <p class="text-sm mb-0">
					.
					</p> -->
				</div>
				<div class="card-header">
					<form id="form_conselhos" class="form-horizontal" method="post" action="<?php echo current_url(); ?>">
						<input type="hidden" id="id" name="id" value="<?php echo set_value("id", @$item->id); ?>" />
						<div class="form-group">
							<label class="col-sm-2 control-label" for="nome_conselho">Nome Conselho</label>
							<div class="col-sm-10">
								<input type="text" value="<?php echo set_value("nome_conselho", @$item->nome_conselho); ?>" class="form-control" name="nome_conselho" id="nome_conselho">
								<?php echo form_error('nome_conselho'); ?>
							</div>
							<!-- /controls -->
						</div>
						
						<div class="form-group">
							<label class="col-sm-2 control-label" for="status">Status</label>
							<div class="col-sm-10">
								<input type="text" value="<?php echo set_value("status", @$item->status); ?>" class="form-control" name="status" id="status">
								<?php echo form_error('status'); ?>
							</div>
							<!-- /controls -->
						</div>
						<!-- /control-group -->

						<div class="col-md-6">
                        <div class="form-group bmd-form-group">
                          <label class="bmd-label-floating">Fist Name</label>
                          <input type="text" class="form-control">
                        </div>
                      </div>

						<div class="form-group">
							<div class="col-sm-offset-2 col-sm-10">
								<input type="submit" name="enviar" class="btn btn-sm btn-primary" value="Salvar" />
								<a href="<?php echo site_url("menus")?>" class="btn btn-sm">Cancelar</a>
							</div>
						</div>
					</form>
				</div>
			</div>	
		</div>
	</div>

<script type="text/javascript" src="<?php echo base_url(); ?>assets/modulos/conselhos/js.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/modulos/conselhos/validate.js"></script>

