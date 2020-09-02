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
					<a href="<?= base_url()?>financeiro/criar" class="btn btn-sm btn-neutral"><i class="fa fa-plus"></i> Novo</a>
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
					<h3 class="mb-0">Painel Financeiro</h3>
					<!-- <p class="text-sm mb-0">
					.
					</p> -->
				</div>
				<div class="col-md-12">
					<?php $this->load->view('layout/messages.php'); ?>
				</div>
				<div class="table-responsive py-4">
					<table class="table table-flush" id="datatable-basic">
					<thead>
								<tr>
									<th>Cod.</th>
									<th>Profissional</th>
									<th>Data da Nota</th>
									<th>Qtd Atendimentos</th>
									<th>Valor</th>
									<th>Status</th>
									<th>Criado</th>
									<th class="td-actions" <?= $displayed ?>></th>
								</tr>
							</thead>
							<tbody>
								<?php foreach($listaFinanceiro as $item): ?>
								<tr>
									<!-- <td><span class="label label-danger"> Inativo </span></td> -->
									<td><?php echo $item->id; ?></td>
									<td><?php echo $item->nome_prof; ?></td>
									<td><?php echo date("d/m/Y", strtotime($item->data_nota)); ?></td>
									<td><?php echo $item->qtd_atendimentos; ?></td>
									<td><?php echo number_format($item->valor_nota, 2, ',', '.'); ?></td>
									<td><?php echo ($item->status == 1 ? '<span class="label label-success"> Ativo </span>' : '<span class="label label-danger"> Inativo </span>') ?></td>
									<td><?php echo date("d/m/Y", strtotime($item->createdAt)); ?></td>
									<td class="td-actions" <?= $displayed ?>>
									<a class="" href="<?php echo site_url("financeiro/delete/". $item->id); ?>"><i class='fa fa-trash'></i></a>
									</td>
								</tr>
								<?php endforeach; ?>
							</tbody>
					</table>
           	 	</div>
			</div>
		</div>
	</div>