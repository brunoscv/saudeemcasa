<!-- Cards Header -->
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
			<a href="#" class="btn btn-sm btn-neutral">New</a>
			<a href="#" class="btn btn-sm btn-neutral">Filters</a>
		</div>
		</div>
		<!-- Card stats -->
		<div class="row">
		<div class="col-xl-3 col-md-6">
			<div class="card card-stats">
			<!-- Card body -->
			<div class="card-body">
				<div class="row">
				<div class="col">
					<h5 class="card-title text-uppercase text-muted mb-0">Profissionais Ativos</h5>
					<span class="h2 font-weight-bold mb-0"><?= $qtd_prof ?></span>
				</div>
				<div class="col-auto">
					<div class="icon icon-shape bg-gradient-red text-white rounded-circle shadow">
					<i class="ni ni-active-40"></i>
					</div>
				</div>
				</div>
			</div>
			</div>
		</div>
		<div class="col-xl-3 col-md-6">
			<div class="card card-stats">
				<!-- Card body -->
				<div class="card-body">
					<div class="row">
						<div class="col">
							<h5 class="card-title text-uppercase text-muted mb-0">Pacientes Ativos</h5>
							<span class="h2 font-weight-bold mb-0"><?= $qtd_pac ?></span>
						</div>
						<div class="col-auto">
							<div class="icon icon-shape bg-gradient-orange text-white rounded-circle shadow">
							<i class="ni ni-chart-pie-35"></i>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xl-3 col-md-6">
			<div class="card card-stats">
				<!-- Card body -->
				<div class="card-body">
					<div class="row">
						<div class="col">
							<h5 class="card-title text-uppercase text-muted mb-0">Atendimentos</h5>
							<span class="h2 font-weight-bold mb-0"><?= $qtd_atd ?></span>
						</div>
						<div class="col-auto">
							<div class="icon icon-shape bg-gradient-orange text-white rounded-circle shadow">
							<i class="ni ni-chart-pie-35"></i>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xl-3 col-md-6">
			<div class="card card-stats">
				<!-- Card body -->
				<div class="card-body">
					<div class="row">
						<div class="col">
							<h5 class="card-title text-uppercase text-muted mb-0">Especialidades Ativas</h5>
							<span class="h2 font-weight-bold mb-0"><?= $qtd_espec ?></span>
						</div>
						<div class="col-auto">
							<div class="icon icon-shape bg-gradient-orange text-white rounded-circle shadow">
							<i class="ni ni-chart-pie-35"></i>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		</div>
	</div>
	</div>
</div>

<div class="container-fluid mt--6">
	
	<div class="row">
		<div class="col-xl-12">
			<div class="row">
				<div class="col">
					<div class="card">
						<!-- Card header -->
						<div class="card-header border-0">
							<h3 class="mb-0">Profissionais Ativos</h3>
						</div>
						<div class="table-responsive py-4 p-2">
					<?php $this->load->view('layout/messages'); ?>
					<table class="table table-flush" id="datatable-basic">
						<thead class="thead-light">
								<tr>
									<th>#</th>
									<th>Nome</th>
									<th>Telefone</th>
									<th>Conselho</th>
									<!-- <th>Num Conselho</th>
									<th>UF Conselho</th> -->
									<th>Especialidade</th>
									<th>Status</th>
									<th>Criado</th>
									<th class="td-actions" <?= $displayed ?>></th>
								</tr>
							</thead>
							<tbody>
								<?php foreach($listaProfissionais as $item): ?>
								<tr>
									<td><?php echo $item->id; ?></td>
									<td><?php echo $item->nome_prof; ?></td>
									<td><?php echo $item->telefone_prof; ?></td>
									<td><?php echo $item->nome_conselho; ?></td>
									<!-- <td><?php echo $item->num_conselho_prof; ?></td>
									<td><?php echo $item->uf; ?></td> -->
									<td><?php echo $item->nome_espec; ?></td>
									<td><?php echo ($item->status == 1 ? '<span class="badge badge-success"> Ativo </span>' : '<span class="badge badge-danger"> Inativo </span>') ?></td>
									<td><?php echo date("m/d/Y", strtotime($item->createdAt)); ?></td>
									<td class="" <?= $displayed ?>>
										<a class="mr-2" href="<?php echo site_url("profissionais/editar/".$item->id); ?>"><i class='fas fa-edit'></i></a>
										<a class="" href="<?php echo site_url("profissionais/delete/". $item->id); ?>"><i class='fa fa-trash'></i></a>
									</td>
								</tr>
								<?php endforeach; ?>
							</tbody>
					</table>
           	 	</div>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript" src="<?php echo base_url(); ?>assets/modulos/dashboard/js.js"></script>