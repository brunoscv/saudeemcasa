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
					<a href="<?php echo base_url(); ?>ordemservicos/criar" class="btn btn-sm btn-neutral">Novo</a>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="container-fluid mt--6">
	<!-- Table -->
	<div class="row">
		<div class="col">
			<div class="card">
				<!-- Card header -->
				<div class="card-header">
					<h3 class="mb-0">Ordens de Serviços</h3>
				</div>
				<div class="col-md-12">
					<?php $this->load->view('layout/messages.php'); ?>
				</div>
				<div class="table-responsive py-4">
					<table class="table table-flush" id="datatable-basic">
						<thead class="thead-light">
						<tr>
							<th>Parceiro</th>
							<th>Descrição</th>
							<th>Status</th>
							<th>Valor</th>
							<th class="td-actions"></th>
						</tr>
						</thead>
						<tfoot>
						<tr>
							<th>Parceiro</th>
							<th>Descrição</th>
							<th>Status</th>
							<th>Valor</th>
							<th class="td-actions"></th>
						</tr>
						</tfoot>
						<tbody>
						<?php foreach ($listaOrdemServicos as $item): ?>
							<tr>
								<td><?php echo $item->parceiro; ?></td>
								 <td><?php echo $item->descricao; ?></td>
								<td><?php echo $item->status; ?></td>
								<td><?php echo $item->valor; ?></td>
								<td class="td-actions">
									<a href="<?php echo site_url("ordemservicos/editar/" . $item->id); ?>"
									   class="btn btn-small btn-primary"><i class="fa fa-edit"> </i>
									</a>
									<a href="<?php echo site_url("ordemservicos/delete/" . $item->id); ?>"
									   class="btn btn-danger btn-small"><i class="fa fa-times"> </i>
									</a>
								</td>
							</tr>
						<?php endforeach; ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
