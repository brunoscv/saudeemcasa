<div class="header bg-gradient-template pb-6">
	<div class="container-fluid">
		<div class="header-body">
			<div class="row align-items-center py-4">
				<div class="col-lg-6 col-7">
					<h6 class="h2 text-white d-inline-block mb-0">Menus</h6>
					<nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
						<ol class="breadcrumb breadcrumb-links breadcrumb-dark">
							<li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
							<li class="breadcrumb-item"><a href="#">Dashboards</a></li>
							<li class="breadcrumb-item active" aria-current="page">Default</li>
						</ol>
					</nav>
				</div>
				<div class="col-lg-6 col-5 text-right">
					<a href="<?= site_url()?>menus/criar" class="btn btn-sm btn-neutral">Novo Menu</a>
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
					<h3 class="mb-0">Controle de Menus</h3>
					<p class="text-sm mb-0">
						Aqui você controla o cadastro de Menus do Sistema.
					</p>
				</div>
				<div class="card-body">
					<div class="table-responsive py-4">
						<table class="table table-flush" id="datatable-basic">
							<thead class="thead-light">
								<th width="10%">Ícone</th>
								<th width="80%">Descrição</th>
								<th class="text-center">Ações</th>
							</thead>
							<tbody>
								<?php foreach($listaMenus as $menu): ?>
								<tr>
									<td><i class="<?= $menu->icone; ?>"></i></td>
									<td><?= $menu->descricao; ?></td>
									<td class="text-center">
										<a href="<?= site_url('menus/editar/'.$menu->id); ?>"><i class="fas fa-edit"> </i></a>
										<!-- <a href="<?= site_url("menus/delete/".$menu->id); ?>"><i class="fa fa-trash"> </i></a> -->
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
	