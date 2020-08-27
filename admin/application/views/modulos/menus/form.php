<style type="text/css">
.fa-archive::before {
    
}
</style>
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
					<a href="<?php echo site_url("menus");?>" class="btn btn-sm btn-neutral"><i class="fa fa-list"></i> Todos</a>
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
        <div class="col-lg-12">
          	<div class="card">
				<div class="card-header">
					<h3 class="mb-0">Controle de Menus</h3>
					<p class="text-sm mb-0">
						Aqui você controla o cadastro/edição de Menus do Sistema.
					</p>
				</div>
				<div class="card-body">
				<div class="panel-body" style="margin-top:10px;">
					<?php $this->load->view('layout/messages.php'); ?>

					<form id="form_menu" class="form-horizontal" method="post" action="<?php echo current_url(); ?>">
						<input type="hidden" id="id" name="id" value="<?php echo set_value("id", @$item->id); ?>" />
						<div class="form-group">
							<label class="col-sm-12 " for="menus_id">Menu</label>
							<div class="col-sm-12">
								<div class="input-group">
								<input readonly="true" type="text" value="<?php echo set_value("menupai", @$item->pai); ?>" class="form-control form-control-sm disabled" name="menupai" id="menupai">
								<a 
									href="<?php echo base_url("menus/ajax"); ?>" class="input-group-btn btn btn-sm btn-primary"
									style="font-size:14px; color:#fff;"
									data-widget="buscaMenu"
									data-dialog="one"
									data-width="90%"
									data-label="#menupai"
									data-value="#menus_id"
									data-title="Menus"
								><i class="fa fa-search"></i></a>
								<?php echo form_error('menupai'); ?>
								<input type="hidden" value="<?php echo set_value("menus_id",@$item->menus_id)?>" id="menus_id" name="menus_id" />
								</div>
							</div>
							
							<!-- /controls -->
						</div>
						<!-- /control-group -->
						
						<div class="form-group">
							<label class="col-sm-12 " for="descricao">Descrição</label>
							<div class="col-sm-12">
								<input type="text" value="<?php echo set_value("descricao", @$item->descricao); ?>" class="form-control form-control-sm" name="descricao" id="descricao">
								<?php echo form_error('descricao'); ?>
							</div>
							<!-- /controls -->
						</div>
						<!-- /control-group -->
						
						<div class="form-group">
							<label class="col-sm-12" for="icone">Ícone</label>
							<div class="col-sm-12">
								<div class="input-group">
									<input type="text" value="<?php echo set_value("icone", @$item->icone); ?>" class="form-control form-control-sm" name="icone" id="icone">
									<div class="input-group-btn btn btn-primary btn-sm" style="border-radius: 0px 4px 4px 0px !important;color: white;font-size: 14px;"><i id="preview-icone" class="<?php echo set_value("icone", @$item->icone); ?>"></i></div>
									<?php echo form_error('icone'); ?>
								</div>
							</div>
							<!-- /controls -->
						</div>
						<!-- /control-group -->
						
						<div class="form-group">
							<label class="col-sm-12 font-12" for="url">Url</label>
							<div class="col-sm-12">
								<input type="text" value="<?php echo set_value("url", @$item->url); ?>" class="form-control form-control-sm" name="url" id="url">
								<?php echo form_error('url'); ?>
							</div>
							<!-- /controls -->
						</div>
						<!-- /control-group -->

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

	<script type="text/javascript" src="<?php echo base_url(); ?>assets/modulos/menus/js.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/modulos/menus/validate.js"></script>

