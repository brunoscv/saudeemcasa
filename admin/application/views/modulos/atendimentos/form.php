<div class="header bg-gradient-template pb-6">
	<div class="container-fluid">
		<div class="header-body">
			<div class="row align-items-center py-4">
				<div class="col-lg-6 col-7">
					<h6 class="h2 text-white d-inline-block mb-0">Contratos</h6>
					<nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
						<ol class="breadcrumb breadcrumb-links breadcrumb-dark">
							<li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
							<li class="breadcrumb-item active" aria-current="page">Contratos</li>
						</ol>
					</nav>
				</div>
				<div class="col-lg-6 col-5 text-right">
					<a href="<?php echo base_url(); ?>contratos" class="btn btn-sm btn-neutral">Listagem</a>
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
							<h3 class="mb-0">Contratos / <?php echo (@$item->id) ? "Editar" : "Adicionar" ?> </h3>
						</div>
						<div class="col-md-12">
							<?php $this->load->view('layout/messages.php'); ?>
						</div>
						<!-- Card body -->
						<div class="card-body">
							<form id="form_contratos" class="needs-validation"
								  action="<?php echo current_url(); ?>" method="post" enctype="multipart/form-data">
								<div class="card mb-4">
							        <!-- Card header -->
							        <div class="card-header">
							          <h1 class="mb-0">ID</h1>
							        </div>
							        <!-- Card body -->
							        <div class="card-body">
							        	<div class="form-row">
											<div class="col-md-3 mb-3">
												<label class="form-control-label" for="imovel_id">Imóvel</label>
												<?php echo form_dropdown('imovel_id', $listaImoveis, set_value('imovel_id', @$item->imovel_id),
														'data-size="7" data-live-search="true" class="form-control fill_selectbtn_in own_selectbox" id="imovel" '); ?>
												<?php echo form_error('imovel_id'); ?>
											</div>
											<div class="col-md-3 mb-3">
												<label class="form-control-label" for="cliente_id">Cliente</label>
												<?php echo form_dropdown('cliente_id', $listaClientes, set_value('cliente_id', @$item->cliente_id),
														'data-size="7" data-live-search="true" class="form-control fill_selectbtn_in own_selectbox" id="cliente" '); ?>
												<?php echo form_error('cliente_id'); ?>
											</div>
											<div class="col-md-3 mb-3">
												<label class="form-control-label" for="fiador_id">Fiador</label>
												<?php echo form_dropdown('fiador_id', $listaFiadores, set_value('fiador_id', @$item->fiador_id),
														'data-size="7" data-live-search="true" class="form-control fill_selectbtn_in own_selectbox" id="fiador" '); ?>
												<?php echo form_error('fiador_id'); ?>
											</div>
											<div class="col-md-3 mb-3">
												<label class="form-control-label" for="corretor_id">Corretor</label>
												<?php echo form_dropdown('corretor_id', $listaCorretores, set_value('corretor_id', @$item->corretor_id),
														'data-size="7" data-live-search="true" class="form-control fill_selectbtn_in own_selectbox" id="corretor" '); ?>
												<?php echo form_error('corretor_id'); ?>
											</div>
										</div>
									</div>
								</div>
								<div class="card mb-4">
							        <!-- Card header -->
							        <div class="card-header">
							          <h1 class="mb-0">Datas do Contrato</h1>
							        </div>
							        <!-- Card body -->
							        <div class="card-body">
										<div class="form-row">
											<div class="col-md-4 mb-3">
												<label class="form-control-label" for="data_inicio_contrato">Data de início do Contrato</label>
												<input type="date" class="form-control" id="data_inicio_contrato" name="data_inicio_contrato"
													   placeholder="Ex: 02/03/2020"
													   value="<?php echo set_value("data_inicio_contrato", @$item->data_inicio_contrato) ?>" >
												<?php echo form_error('data_inicio_contrato'); ?>
											</div>
											<div class="col-md-4 mb-3">
												<label class="form-control-label" for="data_fim_contrato">Data de fim do Contrato</label>
												<input type="date" class="form-control" id="telefone" name="data_fim_contrato"
													   placeholder="Ex: 02/03/2021"
													   value="<?php echo set_value("data_fim_contrato", @$item->data_fim_contrato) ?>" >
												<?php echo form_error('data_fim_contrato'); ?>
											</div>
											<div class="col-md-4 mb-3">
												<label class="form-control-label" for="finalidade_contrato">Finalidade do Contrato (Resid /Comer)</label>
												<input type="text" class="form-control" id="telefone" name="finalidade_contrato"
													   placeholder="Ex: Residencial"
													   value="<?php echo set_value("finalidade_contrato", @$item->finalidade_contrato) ?>" >
												<?php echo form_error('finalidade_contrato'); ?>
											</div>
										</div>
										<div class="form-row">
											<div class="col-md-3 mb-3">
												<label class="form-control-label" for="valor_aluguel">Valor do Aluguel</label>
												<input type="text" class="form-control" id="valor_aluguel" name="valor_aluguel"
													   placeholder="Ex: R$1.200,00"
													   value="<?php echo set_value("valor_aluguel", @$item->valor_aluguel) ?>" >
												<?php echo form_error('valor_aluguel'); ?>
											</div>
											<div class="col-md-3 mb-3">
												<label class="form-control-label" for="data_vencimento">Data de Vencimento</label>
												<input type="date" class="form-control" id="data_vencimento" name="data_vencimento"
													   placeholder="Ex: 21/03/2021"
													   value="<?php echo set_value("data_vencimento", @$item->data_vencimento) ?>" >
												<?php echo form_error('data_vencimento'); ?>
											</div>
											<div class="col-md-3 mb-3">
												<label class="form-control-label" for="juros">Juros</label>
												<input type="number" class="form-control" id="juros" name="juros"
													   placeholder="Ex: 13"
													   value="<?php echo set_value("juros", @$item->juros) ?>" >
												<?php echo form_error('juros'); ?>
											</div>
											<div class="col-md-3 mb-3">
												<label class="form-control-label" for="multa">Multa</label>
												<input type="number" class="form-control" id="multa" name="multa"
													   placeholder="Ex: 20"
													   value="<?php echo set_value("multa", @$item->multa) ?>" >
												<?php echo form_error('multa'); ?>
											</div>
										</div>
										<div class="form-row">
											<div class="col-md-6 mb-3">
												<label class="form-control-label" for="desconto_pontualidade">Desconto de Pontualidade</label>
												<input type="text" class="form-control" id="desconto_pontualidade" name="desconto_pontualidade"
													   placeholder="Ex: R$ 50,00"
													   value="<?php echo set_value("desconto_pontualidade", @$item->desconto_pontualidade) ?>" >
												<?php echo form_error('desconto_pontualidade'); ?>
											</div>
											<div class="col-md-6 mb-3">
												<label class="form-control-label" for="taxa_adm">Taxa de Administração</label>
												<input type="number" class="form-control" id="taxa_adm" name="taxa_adm"
													   placeholder="Ex: 4"
													   value="<?php echo set_value("taxa_adm", @$item->taxa_adm) ?>" >
												<?php echo form_error('taxa_adm'); ?>
											</div>
										</div>
									</div>
								</div>
							    <div class="card mb-4">
							        <!-- Card header -->
							        <div class="card-header">
							          <h1 class="mb-0">Clausulas Adicionais</h1>
							        </div>
							        <!-- Card body -->
							        <div class="card-body">
								        <div class="form-row">
											<div class="col-md-12 mb-3">
												<label class="form-control-label" for="clausulas_adicionais">Clausulas Adicionais</label>
												<input type="text" class="form-control" id="clausulas_adicionais" name="clausulas_adicionais"
													   placeholder="Clausulas Adicionais"
													   value="<?php echo set_value("clausulas_adicionais", @$item->clausulas_adicionais) ?>" >
												<?php echo form_error('clausulas_adicionais');?>
											</div>
										</div>
									</div>
								</div>
								<div class="card mb-4">
							        <!-- Card header -->
							        <div class="card-header">
							          <h1 class="mb-0">Repasse</h1>
							        </div>
							        <!-- Card body -->
							        <div class="card-body">
								        <div class="form-row">
											<div class="col-md-4 mb-3">
												<label class="form-control-label" for="dias_tipo">Tipo de dia</label>
												<input type="text" class="form-control" id="dias_tipo" name="dias_tipo"
													   placeholder="Ex: Úteis/Fixos/Corridos"
													   value="<?php echo set_value("dias_tipo", @$item->dias_tipo) ?>" >
												<?php echo form_error('dias_tipo'); ?>
											</div>
											<div class="col-md-4 mb-3">
												<label class="form-control-label" for="qtd_meses_rep_garantido">Número de meses garantidos</label>
												<input type="text" class="form-control" id="qtd_meses_rep_garantido" name="qtd_meses_rep_garantido"
													   placeholder="Ex: 6 meses"
													   value="<?php echo set_value("qtd_meses_rep_garantido", @$item->qtd_meses_rep_garantido) ?>" >
												<?php echo form_error('qtd_meses_rep_garantido'); ?>
											</div>
											<div class="col-md-4 mb-3">
												<label class="form-control-label" for="data_repasse">Data do Repasse</label>
												<input type="date" class="form-control" id="data_repasse" name="data_repasse"
													   placeholder="Ex: 25/03/2021"
													   value="<?php echo set_value("data_repasse", @$item->data_repasse) ?>" >
												<?php echo form_error('data_repasse'); ?>
											</div>	
										</div>
										<div class="form-row">
											<div class="col-md-4 mb-3">
												<label class="form-control-label" for="tem_repasse_garantido">Repasse Garantido?</label>
												<br>
												<label class="custom-toggle">
								                    <input type="checkbox">
								                    <span class="custom-toggle-slider rounded-circle" data-label-off="Não" data-label-on="Sim"></span>
								                </label>
											</div>
											<div class="col-md-4 mb-3">
												<label class="form-control-label" for="cobra_tarifa">Cobra tarifa bancária do locatário?</label>
												<br>
												<label class="custom-toggle">
								                    <input type="checkbox">
								                    <span class="custom-toggle-slider rounded-circle" data-label-off="Não" data-label-on="Sim"></span>
								                </label>
											</div>
										</div>
									</div>
								</div>
								<div class="card mb-4">
							        <!-- Card header -->
							        <div class="card-header">
							          <h1 class="mb-0">Garantia</h1>
							        </div>
							        <!-- Card body -->
							        <div class="card-body">
								        <div class="form-row">
											<div class="col-md-3 mb-3">
												<label class="form-control-label" for="garantia_tipo">Tipo de Garantia</label>
												<input type="text" class="form-control" id="garantia_tipo" name="garantia_tipo"
													   placeholder="Ex: Caução"
													   value="<?php echo set_value("garantia_tipo", @$item->garantia_tipo) ?>" >
												<?php echo form_error('garantia_tipo'); ?>
											</div>
											<div class="col-md-3 mb-3">
												<label class="form-control-label" for="data_inicio_garantia">Início da Garantia</label>
												<input type="date" class="form-control" id="data_inicio_garantia" name="data_inicio_garantia"
													   placeholder="Ex: 25/03/2020"
													   value="<?php echo set_value("data_inicio_garantia", @$item->data_inicio_garantia) ?>" >
												<?php echo form_error('data_inicio_garantia'); ?>
											</div>
											<div class="col-md-3 mb-3">
												<label class="form-control-label" for="data_fim_garantia">Final da Garantia</label>
												<input type="date" class="form-control" id="data_fim_garantia" name="data_fim_garantia"
													   placeholder="Ex: 25/03/2021"
													   value="<?php echo set_value("data_fim_garantia", @$item->data_fim_garantia) ?>" >
												<?php echo form_error('data_fim_garantia'); ?>
											</div>
											<div class="col-md-3 mb-3">
												<label class="form-control-label" for="valor_garantia">Valor da Garantia</label>
												<input type="text" class="form-control" id="valor_garantia" name="valor_garantia"
													   placeholder="Ex: R$10.000,00"
													   value="<?php echo set_value("valor_garantia", @$item->valor_garantia) ?>" >
												<?php echo form_error('valor_garantia'); ?>
											</div>											
										</div>
										<div class="form-row">
											<div class="col-md-12 mb-3">
												<label class="form-control-label" for="obs_garantia">Observações</label>
												<input type="text" class="form-control" id="obs_garantia" name="obs_garantia"
													   placeholder="Observações"
													   value="<?php echo set_value("obs_garantia", @$item->obs_garantia) ?>" >
											</div>
										</div>
									</div>
								</div>
								<div class="card mb-4">
							        <!-- Card header -->
							        <div class="card-header">
							          <h1 class="mb-0">Seguro</h1>
							        </div>
							        <!-- Card body -->
							        <div class="card-body">
										<div class="form-row">
											<div class="col-md-3 mb-3">
												<label class="form-control-label" for="tem_seguro_incendio">Seguro de Incêndio?</label>
												<br>
												<label class="custom-toggle">
								                    <input type="checkbox">
								                    <span class="custom-toggle-slider rounded-circle" data-label-off="Não" data-label-on="Sim"></span>
								                </label>
											</div>
											<div class="col-md-3 mb-3">
												<label class="form-control-label" for="data_inicio_seguro">Início do Seguro</label>
												<input type="date" class="form-control" id="data_inicio_seguro" name="data_inicio_seguro"
													   placeholder="Ex: 21/03/2020"
													   value="<?php echo set_value("data_inicio_seguro", @$item->data_inicio_seguro) ?>" >
											</div>
											<div class="col-md-3 mb-3">
												<label class="form-control-label" for="data_fim_seguro">Fim do Seguro</label>
												<input type="date" class="form-control" id="data_fim_seguro" name="data_fim_seguro"
													   placeholder="Ex: 21/03/2022"
													   value="<?php echo set_value("data_fim_seguro", @$item->data_fim_seguro) ?>" >
											</div>
											<div class="col-md-3 mb-3">
												<label class="form-control-label" for="valor_seguro">Valor do Seguro</label>
												<input type="text" class="form-control" id="valor_seguro" name="valor_seguro"
													   placeholder="Ex: R$ 5.000,00"
													   value="<?php echo set_value("valor_seguro", @$item->valor_seguro) ?>" >
											</div>
										</div>
										<div class="form-row">
											<div class="col-md-6 mb-3">
												<label class="form-control-label" for="nome_seguradora">Nome da Seguradora</label>
												<input type="text" class="form-control" id="nome_seguradora" name="nome_seguradora"
													   placeholder="Ex: PI"
													   value="<?php echo set_value("nome_seguradora", @$item->nome_seguradora) ?>" >
											</div>
											<div class="col-md-6 mb-3">
												<label class="form-control-label" for="apolice">Apólice</label>
												<input type="text" class="form-control" id="apolice" name="apolice"
													   placeholder="Ex: Analista"
													   value="<?php echo set_value("apolice", @$item->apolice) ?>" >
											</div>
										</div>
										<div class="form-row">								
											<div class="col-md-12 mb-3">
												<label class="form-control-label" for="obs_seguro">Observações</label>
												<input type="text" class="form-control" id="obs_seguro" name="obs_seguro"
												   placeholder="Observações"
												   value="<?php echo set_value("obs_seguro", @$item->obs_seguro) ?>" >
											</div>
										</div>
									</div>
								</div>
								<div class="card mb-4">
							        <!-- Card header -->
							        <div class="card-header">
							          <h1 class="mb-0">NF</h1>
							        </div>
							        <!-- Card body -->
							        <div class="card-body">
								        <div class="form-row">
								        	<div class="col-md-6 mb-3">
												<label class="form-control-label" for="emite_nf">Emissão de NF</label>
												<br>
												<label class="custom-toggle">
								                    <input type="checkbox">
								                    <span class="custom-toggle-slider rounded-circle" data-label-off="Não" data-label-on="Sim"></span>
								                </label>
											</div>
										</div>
										<div class="form-row">
											<div class="col-md-2 mb-3">
												<label class="form-control-label" for="retem_imposto">Retenção de Imposto</label>
												<br>
												<label class="custom-toggle">
								                    <input type="checkbox">
								                    <span class="custom-toggle-slider rounded-circle" data-label-off="Não" data-label-on="Sim"></span>
								                </label>
											</div>
								        	<div class="col-md-10 mb-3">
												<label class="form-control-label" for="quem_retera">Retido por</label>
												<input type="text" class="form-control" id="quem_retera" name="quem_retera"
													   placeholder="Quem retém"
													   value="<?php echo set_value("quem_retera", @$item->quem_retera) ?>" >
											</div>
										</div>
									</div>
								</div>

								<input type="submit" name="enviar" class="btn btn-primary" value="Salvar" />
								<a href="<?php echo site_url("contratos")?>" class="btn btn-outline-default ml-auto">
									Cancelar
								</a>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>

		<script type="text/javascript" src="<?php echo base_url(); ?>assets/modulos/contratos/js.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>assets/modulos/contratos/validate.js"></script>
