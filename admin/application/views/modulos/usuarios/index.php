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
					<h6 class="h2 text-white d-inline-block mb-0">Usuários</h6>
					<nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
						<ol class="breadcrumb breadcrumb-links breadcrumb-dark">
							<li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
							<li class="breadcrumb-item"><a href="#">Dashboards</a></li>
							<li class="breadcrumb-item active" aria-current="page">Default</li>
						</ol>
					</nav>
				</div>
				<div class="col-lg-6 col-5 text-right">
					<a href="<?= site_url()?>usuarios/criar" class="btn btn-sm btn-neutral">Novo Usuário</a>
					<!-- <a href="#" class="btn btn-sm btn-neutral">Filters</a> -->
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
				<div class="card-header">
					<h3 class="mb-0">Controle de Usuários</h3>
					<p class="text-sm mb-0">
						Aqui você controla o cadastro de Usuários do Sistema.
					</p>
				</div>
				
				<div class="col-md-12">
					<?php $this->load->view('layout/messages.php'); ?>
				</div>
				<div class="card-body">
					<div class="table-responsive py-4">
						<table class="table table-flush" id="datatable-basic">
							<thead>
								<tr>
									<th>#</th>
									<th>Nome</th>
									<th>Usuário</th>
									<th>Email</th>
									<th>Criado</th>
									<th class="td-actions"></th>
								</tr>
							</thead>
							<tbody id="">
								<?php foreach($listaUsuarios as $item): ?>
								<tr id="project_id_<?php echo $item->id; ?>">
									<td><?php echo $item->id; ?></td>	
									<td><?php echo $item->nome_prof; ?></td>
									<!-- <td><?php echo (($item->status == 1) ? '<span class="label label-primary"> Ativo </span>' : (($item->status == 2) ? '<span class="label label-success"> Concluído </span>' : '<span class="label label-danger"> Inativo </span>')); ?></td> -->
									<!-- (($condition_1) ? "output_1" : (($condition_2) ?  "output_2" : "output_3")); -->
									<td><?php echo $item->usuario; ?></td>
									<td><?php echo $item->email; ?></td>
									<td><?php echo date("d/m/Y", strtotime($item->createdAt)); ?></td>
									<td class="text-center">
										<a href="<?= site_url('usuarios/editar/'.$item->id); ?>"><i class="fas fa-edit"> </i></a>
										<!-- <a href="<?= site_url("usuarios/delete/".$item->id); ?>"><i class="fa fa-trash"> </i></a> -->
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
	
<script src="<?php echo base_url(); ?>assets/plugins/parallax/jarallax.min.js"></script>
<!-- <script src="<?php echo base_url(); ?>assets/plugins/theme/js/script.js"></script> -->
<!-- <script src="<?php echo base_url(); ?>assets/plugins/gallery/script.js"></script> -->