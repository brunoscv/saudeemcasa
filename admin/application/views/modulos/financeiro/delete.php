<div class="header bg-gradient-template pb-6">
	<div class="container-fluid">
		<div class="header-body">
			<div class="row align-items-center py-4">
				<div class="col-lg-6 col-7">
					<h6 class="h2 text-white d-inline-block mb-0">Default</h6>
					<nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
						<ol class="breadcrumb breadcrumb-links breadcrumb-dark">
							<li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
							<li class="breadcrumb-item"><a href="#">Dashboards</a></li>
							<li class="breadcrumb-item active" aria-current="page">Default</li>
						</ol>
					</nav>
				</div>
				<div class="col-lg-6 col-5 text-right">
					<a href="<?= base_url()?>financeiro/" class="btn btn-sm btn-neutral"><i class="fa fa-plus"></i> Todos</a>
				</div>
			</div>
		</div>
	</div>
</div>
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
					<?php $this->load->view('layout/messages.php'); ?>
					<form class="form-horizontal" method="post">
						<div class="alert alert-danger" role="alert">
							<strong>Atenção!</strong> 
							Esta ação não poderá ser desfeita.
						</div>

						<div class="form-group">
							<label class="col-sm-2 control-label" for="nome_prof">Profissional</label>
							<div class="col-sm-10">
								<input type="text" disabled="" class="form-control" value="<?php echo set_value("nome_prof", $item->nome_prof); ?>" name="nome_prof" id="nome_prof" placeholder="ex: efortes">
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-2 control-label" for="valor_nota">Valor da Nota</label>
							<div class="col-sm-10">
								<input type="text" disabled="" class="form-control" value="<?php echo set_value("valor_nota", $item->valor_nota); ?>" name="valor_nota" id="valor_nota" placeholder="ex: efortes">
							</div>
						</div>

						<div class="form-group">
							<div class="col-sm-10 col-offset-2">
								<input type="submit" name="enviar" class="btn btn-danger" value="Apagar" />
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
</div>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/modulos/financeiro/js.js"></script>
<!-- <script type="text/javascript" src="<?php echo base_url(); ?>assets/modulos/financeiro/validate.js"></script> -->