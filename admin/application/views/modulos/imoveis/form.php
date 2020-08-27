<div class="header bg-gradient-template pb-6">
	<div class="container-fluid">
		<div class="header-body">
			<div class="row align-items-center py-4">
				<div class="col-lg-6 col-7">
					<h6 class="h2 text-white d-inline-block mb-0">Imóveis</h6>
					<nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
						<ol class="breadcrumb breadcrumb-links breadcrumb-dark">
							<li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
							<li class="breadcrumb-item"><a href="#">Tables</a></li>
							<li class="breadcrumb-item active" aria-current="page">Imóveis</li>
						</ol>
					</nav>
				</div>
				<div class="col-lg-6 col-5 text-right">
					<a href="<?php echo base_url(); ?>imoveis" class="btn btn-sm btn-neutral">Listagem</a>
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
							<h3 class="mb-0">Imoveis / <?php echo (@$item->id) ? "Editar" : "Adicionar" ?> </h3>
						</div>
						<div class="col-md-12">
							<?php $this->load->view('layout/messages.php'); ?>
						</div>
						<!-- Card body -->
						<div class="card-body">
							<form id="form_imoveis" class="needs-validation"
								  action="<?php echo current_url(); ?>" method="post" enctype="multipart/form-data">
								<div class="form-row">
									<div class="col-md-6 mb-3">
										<label class="form-control-label" for="proprietarios_id">Proprietario</label>
										<?php echo form_dropdown('proprietario_id', $listaProprietarios, set_value('proprietario_id', @$item->proprietario_id),
												'data-size="7" data-live-search="true" class="form-control fill_selectbtn_in own_selectbox" id="proprietario" '); ?>
										<?php echo form_error('proprietario_id'); ?>
									</div>
									<div class="col-md-6 mb-3">
										<label class="form-control-label" for="tipo">Tipo</label>
										<input type="text" class="form-control" id="tipo" name="tipo"
											   placeholder="Ex: Casa Residencial"
											   value="<?php echo set_value("tipo", @$item->tipo) ?>" >
										<?php echo form_error('tipo'); ?>
									</div>
								</div>
								<div class="form-row">
									<div class="col-md-12 mb-3">
										<label class="form-control-label" for="endereco">Endereço</label>
										<input type="text" class="form-control" id="endereco" name="endereco"
											   placeholder="Endereço"
											   value="<?php echo set_value("endereco", @$item->endereco) ?>" >
										<?php echo form_error('endereco'); ?>
									</div>
								</div>
								<div class="form-row">
									<div class="col-md-4 mb-3">
										<label class="form-control-label" for="numeroEndereco">Numero</label>
										<input type="text" class="form-control" id="numeroEndereco" name="numeroEndereco"
											   placeholder="Numero"
											   value="<?php echo set_value("numeroEndereco", @$item->numeroEndereco) ?>">
									</div>
									<div class="col-md-4 mb-3">
										<label class="form-control-label" for="bairro">Bairro</label>
										<input type="text" class="form-control" id="bairro" name="bairro"
											   placeholder="Bairro"
											   value="<?php echo set_value("bairro", @$item->bairro) ?>" >
										<?php echo form_error('bairro'); ?>
									</div>
									<div class="col-md-4 mb-3">
										<label class="form-control-label" for="complemento">Complemento</label>
										<input type="text" class="form-control" id="complemento" name="complemento"
											   placeholder="Complemento"
											   value="<?php echo set_value("complemento", @$item->complemento) ?>">
									</div>
								</div>
								<div class="form-row">
									<div class="col-md-6 mb-3">
										<label class="form-control-label" for="cidade">Cidade</label>
										<input type="text" class="form-control" id="cidade" name="cidade"
											   placeholder="Cidade"
											   value="<?php echo set_value("cidade", @$item->cidade) ?>" >
										<?php echo form_error('cidade'); ?>
									</div>
									<div class="col-md-3 mb-3">
										<label class="form-control-label" for="estado">Estado</label>
										<input type="text" class="form-control" id="estado" name="estado"
											   placeholder="Estado"
											   value="<?php echo set_value("estado", @$item->estado) ?>" >
										<?php echo form_error('estado'); ?>
									</div>
									<div class="col-md-3 mb-3">
										<label class="form-control-label" for="cep">CEP</label>
										<input type="text" class="form-control" id="cep" name="cep"
											   placeholder="CEP"
											   value="<?php echo set_value("cep", @$item->cep) ?>" >
										<?php echo form_error('cep'); ?>
									</div>
								</div>
								<div class="form-row">
									<div class="col-md-4 mb-3">
										<label class="form-control-label" for="valor">Valor do Imóvel</label>
										<input type="text" class="form-control" id="valor" name="valor"
											   placeholder="Valor"
											   value="<?php echo set_value("valor", @$item->valor) ?>" >
										<?php echo form_error('valor'); ?>
									</div>
									<div class="col-md-4 mb-3">
										<label class="form-control-label" for="valorCondominio">Valor do
											Condominio</label>
										<input type="text" class="form-control" id="valorCondominio"
											   name="valorCondominio"
											   placeholder="Valor do Condominio"
											   value="<?php echo set_value("valorCondominio", @$item->valorCondominio) ?>"
											   >
										<?php echo form_error('valorCondominio'); ?>
									</div>
									<div class="col-md-4 mb-3">
										<label class="form-control-label" for="valorIPTU">Valor do IPTU</label>
										<input type="text" class="form-control" id="valorIPTU" name="valorIPTU"
											   placeholder="Valor do IPTU"
											   value="<?php echo set_value("valorIPTU", @$item->valorIPTU) ?>" >
										<?php echo form_error('valorIPTU'); ?>
									</div>
								</div>
								<div class="form-row">
									<div class="col-md-3 mb-3">
										<label class="form-control-label" for="matriculaIPTU">Matrícula do IPTU</label>
										<input type="text" class="form-control" id="matriculaIPTU" name="matriculaIPTU"
											   placeholder="Matricula do IPTU"
											   value="<?php echo set_value("matriculaIPTU", @$item->matriculaIPTU) ?>">
										<?php echo form_error('matriculaIPTU'); ?>
									</div>
									<div class="col-md-3 mb-3">
										<label class="form-control-label" for="matriculaAgua">Matrícula da Água</label>
										<input type="text" class="form-control" id="matriculaAgua" name="matriculaAgua"
											   placeholder="Matrícula da Água"
											   value="<?php echo set_value("matriculaAgua", @$item->matriculaAgua) ?>">
										<?php echo form_error('matriculaAgua'); ?>
									</div>
									<div class="col-md-3 mb-3">
										<label class="form-control-label" for="matriculaLuz">Matrícula da Luz</label>
										<input type="text" class="form-control" id="matriculaLuz" name="matriculaLuz"
											   placeholder="Matrícula da Luz"
											   value="<?php echo set_value("matriculaLuz", @$item->matriculaLuz) ?>">
										<?php echo form_error('matriculaLuz'); ?>
									</div>
									<div class="col-md-3 mb-3">
										<label class="form-control-label" for="matriculaGas">Matrícula do Gás</label>
										<input type="text" class="form-control" id="matriculaGas" name="matriculaGas"
											   placeholder="Matrícula do Gás"
											   value="<?php echo set_value("matriculaGas", @$item->matriculaGas) ?>">
										<?php echo form_error('matriculaGas'); ?>
									</div>
								</div>
								<div class="form-row">
									<div class="col-md-6 mb-3">
										<label class="form-control-label" for="dimensoesDoTerreno">Dimensões do
											Terreno</label>
										<input type="text" class="form-control" id="dimensoesDoTerreno"
											   name="dimensoesDoTerreno"
											   placeholder="Dimensões do Terreno"
											   value="<?php echo set_value("dimensoesDoTerreno", @$item->dimensoesDoTerreno) ?>">
										<?php echo form_error('dimensoesDoTerreno'); ?>
									</div>
									<div class="col-md-6 mb-3">
										<label class="form-control-label" for="vagasGaragem">Vagas de Garagem</label>
										<input type="text" class="form-control" id="vagasGaragem" name="vagasGaragem"
											   placeholder="Vagas de Garagem"
											   value="<?php echo set_value("vagasGaragem", @$item->vagasGaragem) ?>">
										<?php echo form_error('vagasGaragem'); ?>
									</div>
								</div>
								<div class="form-row">
									<div class="col-md-12 mb-3">
										<div class="custom-file">
											<input type="file" name="files[]" class="custom-file-input" id="customFileLang" lang="en" multiple>
											<label class="custom-file-label" for="customFileLang">Select file</label>
										</div>
									</div>
								</div>
								<div class="form-row">
									<div class="col-md-12 mb-3">
										<div class="card">
											<!-- Card header -->
											<div class="card-header">
												<h3 class="mb-0">Visitas</h3>
											</div>
											<!-- Card body -->
											<div class="card-body">
												<div class="form-row">
													<div class="col-md-12 mb-3">
														<label class="form-control-label" for="segunda">Segunda-Feira</label>
														<input type="text" id="segunda" name="segunda"
															   class="form-control" data-toggle="tags"
															   placeholder="Digite o horário (Ex: 12) aqui e tecle enter"
															   value="<?php echo set_value("segunda", @$item->segunda) ?>">
														<?php echo form_error('segunda'); ?>
													</div>
												</div>
												<div class="form-row">
													<div class="col-md-12 mb-3">
														<label class="form-control-label" for="terca">Terça-Feira</label>
														<input type="text" id="terca" name="terca"
															   class="form-control" data-toggle="tags"
															   placeholder="Digite o horário (Ex: 12) aqui e tecle enter"
															   value="<?php echo set_value("terca", @$item->terca) ?>">
														<?php echo form_error('terca'); ?>
													</div>
												</div>
												<div class="form-row">
													<div class="col-md-12 mb-3">
														<label class="form-control-label" for="quarta">Quarta-Feira</label>
														<input type="text" id="quarta" name="quarta"
															   class="form-control" data-toggle="tags"
															   placeholder="Digite o horário (Ex: 12) aqui e tecle enter"
															   value="<?php echo set_value("quarta", @$item->quarta) ?>">
														<?php echo form_error('quarta'); ?>
													</div>
												</div>
												<div class="form-row">
													<div class="col-md-12 mb-3">
														<label class="form-control-label" for="quinta">Quinta-Feira</label>
														<input type="text" id="quinta" name="quinta"
															   class="form-control" data-toggle="tags"
															   placeholder="Digite o horário (Ex: 12) aqui e tecle enter"
															   value="<?php echo set_value("quinta", @$item->quinta) ?>">
														<?php echo form_error('quinta'); ?>
													</div>
												</div>
												<div class="form-row">
													<div class="col-md-12 mb-3">
														<label class="form-control-label" for="sexta">Sexta-Feira</label>
														<input type="text" id="sexta" name="sexta"
															   class="form-control" data-toggle="tags"
															   placeholder="Digite o horário (Ex: 12) aqui e tecle enter"
															   value="<?php echo set_value("sexta", @$item->sexta) ?>">
														<?php echo form_error('sexta'); ?>
													</div>
												</div>
												<div class="form-row">
													<div class="col-md-12 mb-3">
														<label class="form-control-label" for="sabado">Sábado</label>
														<input type="text" id="sabado" name="sabado"
															   class="form-control" data-toggle="tags"
															   placeholder="Digite o horário (Ex: 12) aqui e tecle enter"
															   value="<?php echo set_value("sabado", @$item->sabado) ?>">
														<?php echo form_error('sabado'); ?>
													</div>
												</div>
												<div class="form-row">
													<div class="col-md-12 mb-3">
														<label class="form-control-label" for="domingo">Domingo</label>
														<input type="text" id="domingo" name="domingo"
															   class="form-control" data-toggle="tags"
															   placeholder="Digite o horário (Ex: 12) aqui e tecle enter"
															   value="<?php echo set_value("domingo", @$item->domingo) ?>">
														<?php echo form_error('domingo'); ?>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<input type="submit" name="enviar" class="btn btn-primary" value="Salvar" />
								<a href="<?php echo site_url("imoveis")?>" class="btn btn-outline-default ml-auto">
									Cancelar
								</a>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>

		<script type="text/javascript" src="<?php echo base_url(); ?>assets/modulos/imoveis/js.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>assets/modulos/imoveis/validate.js"></script>
