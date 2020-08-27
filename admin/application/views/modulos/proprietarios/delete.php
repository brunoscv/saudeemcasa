<div class="header bg-gradient-template pb-6">
	<div class="container-fluid">
		<div class="header-body">
			<div class="row align-items-center py-4">
				<div class="col-lg-6 col-7">
					<h6 class="h2 text-white d-inline-block mb-0">Proprietários</h6>
					<nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
						<ol class="breadcrumb breadcrumb-links breadcrumb-dark">
							<li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
							<li class="breadcrumb-item active" aria-current="page">Proprietários</li>
						</ol>
					</nav>
				</div>
				<div class="col-lg-6 col-5 text-right">
					<a href="<?php echo base_url(); ?>proprietarios" class="btn btn-sm btn-neutral">Listagem</a>
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
							<h3 class="mb-0">Proprietários / Remover </h3>
						</div>
						<!-- Card body -->
						<div class="card-body">
							<div class="alert alert-warning alert-dismissible fade show" role="alert">
								<span class="alert-icon"><i class="ni ni-bell-55"></i></span>
								<span class="alert-text"><strong>Aviso!</strong> Esta ação não poderá ser desfeita!</span>
							</div>
							<button type="button" class="btn btn-warning" data-toggle="modal"
									data-target="#modal-notification">Remover
							</button>
							<a href="<?php echo site_url("proprietarios")?>" class="btn btn-outline-default ml-auto">
								Cancelar
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="col-md-4">
			<div class="modal fade" id="modal-notification" tabindex="-1" role="dialog"
				 aria-labelledby="modal-notification" aria-hidden="true">
				<div class="modal-dialog modal-danger modal-dialog-centered modal-" role="document">
					<div class="modal-content bg-gradient-danger">
						<form id="form_imovel" class="form-horizontal" method="post">
							<div class="modal-header">
								<h6 class="modal-title" id="modal-title-notification">Confirmação</h6>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">×</span>
								</button>
							</div>
							<div class="modal-body">
								<div class="py-3 text-center">
									<i class="ni ni-bell-55 ni-3x"></i>
									<h4 class="heading mt-4">Deseja continuar?</h4>
									<p>Ao continuar o registro será removido do sistema.</p>
									<div class="form-group">
										<div class="col-sm-10">
											<input type="text" disabled="" hidden class="form-control"
												   value="<?php echo set_value("id", $item->id); ?>" name="id" id="id">
										</div>
									</div>
								</div>
							</div>
							<div class="modal-footer">
								<input type="submit" name="enviar" class="btn btn-white" value="Ok, Apagar!" />
								<a href="<?php echo site_url("proprietarios")?>" class="btn btn-link text-white ml-auto">
									Cancelar
								</a>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
