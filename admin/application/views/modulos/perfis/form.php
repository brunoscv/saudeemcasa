<div class="header bg-gradient-template pb-6">
	<div class="container-fluid">
		<div class="header-body">
			<div class="row align-items-center py-4">
				<div class="col-lg-6 col-7">
					<h6 class="h2 text-white d-inline-block mb-0">Perfis</h6>
					<nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
						<ol class="breadcrumb breadcrumb-links breadcrumb-dark">
							<li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
							<li class="breadcrumb-item"><a href="#">Dashboards</a></li>
							<li class="breadcrumb-item active" aria-current="page">Default</li>
						</ol>
					</nav>
				</div>
				<div class="col-lg-6 col-5 text-right">
					<a href="<?= site_url()?>perfis/" class="btn btn-sm btn-neutral">Lista de Perfis</a>
					<!-- <a href="#" class="btn btn-sm btn-neutral">Filters</a> -->
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
				<div class="card-header">
					<h3 class="mb-0">Controle de Perfis</h3>
					<p class="text-sm mb-0">
						Aqui você controla o cadastro de Perfis do Sistema.
					</p>
				</div>
				<div class="card-body">
					<?php $this->load->view('layout/messages.php'); ?>
					<form id="form_perfil" class="form-horizontal" method="post">
						<input type="hidden" id="id" name="id" value="<?php echo set_value("id", @$item->id); ?>" />
						<div class="form-group">
							<label class="col-sm-2 control-label" for="descricao">Descrição</label>
							<div class="col-sm-12">
								<input type="text" value="<?php echo set_value("descricao", @$item->descricao); ?>" class="form-control" name="descricao" id="descricao">
								<?php echo form_error('descricao'); ?>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-2 control-label" for="descricao">Menus</label>
							<div class="col-sm-10">
								<?php $values = ($this->input->post("menus")) ? @$this->input->post("menus") : @$item->menus; ?>
								
								<?php echo recursiveFormMenuList('menus[]',$listaMenus, $values, 'id="menus"'); ?>
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-12 pull-right">
								<input type="submit" name="enviar" class="btn btn-primary btn-sm btn-icon" value="Salvar" />
								<a href="<?php echo site_url("menus")?>" class="btn btn-default btn-sm btn-icon">
									Cancelar
								</a>
							</div>
						</div>
					</form>
				</div>	
			</div>
		</div>
	</div>





<script type="text/javascript" src="<?php echo base_url(); ?>assets/modulos/perfis/js.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/modulos/perfis/validate.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-checktree.js"></script>
<script type="text/javascript">
	$(function(){
		$("#menus").checktree();
	})
</script>