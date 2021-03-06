<!-- Cards Header -->
<style type="text/css">
.table th, .table td {
    padding: 0.2em 0;
    vertical-align: middle;
}
.table-responsive {
    display: block;
    width: 100%;
    -webkit-overflow-scrolling: touch;
}
</style>
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
					<a href="<?= base_url()?>profissionais/criar" class="btn btn-sm btn-neutral"><i class="fa fa-plus"></i> Novo</a>
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
					<h3 class="mb-0">Painel de Profissionais</h3>
				</div>
				<div class="col-md-12">
					<?php $this->load->view('layout/messages.php'); ?>
				</div>
				<div class="table-responsive py-4 p-2">
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
									<th class="td-actions"></th>
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
									<td class="">
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

	<script type="text/javascript">
		$(document).ready(function(event) {
			$('[data-toggle="popover"]').popover(); 
		});
	</script>