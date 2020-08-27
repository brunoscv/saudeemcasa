<div class="header bg-gradient-template pb-6">
	<div class="container-fluid">
		<div class="header-body">
			<div class="row align-items-center py-4">
				<div class="col-lg-6 col-7">
					<h6 class="h2 text-white d-inline-block mb-0">Corretores</h6>
					<nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
						<ol class="breadcrumb breadcrumb-links breadcrumb-dark">
							<li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
							<li class="breadcrumb-item active" aria-current="page">Corretores</li>
						</ol>
					</nav>
				</div>
				<div class="col-lg-6 col-5 text-right">
					<a href="<?php echo base_url(); ?>corretores" class="btn btn-sm btn-neutral">Listagem</a>
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
							<h3 class="mb-0">Corretores / <?php echo (@$item->id) ? "Editar" : "Adicionar" ?> </h3>
						</div>
						<div class="col-md-12">
							<?php $this->load->view('layout/messages.php'); ?>
						</div>
						<!-- Card body -->
						<div class="card-body">
							<form id="form_corretores" class="needs-validation"
								  action="<?php echo current_url(); ?>" method="post" enctype="multipart/form-data">
								<div class="card mb-4">
							        <!-- Card header -->
							        <div class="card-header">
							          <h1 class="mb-0">Dados Pessoais</h1>
							        </div>
							        <!-- Card body -->
							        <div class="card-body">
							        	<div class="form-row">
											<div class="col-md-4 mb-3">
												<label class="form-control-label" for="nome">Nome</label>
												<input type="text" class="form-control" id="nome" name="nome"
													   placeholder="Nome"
													   value="<?php echo set_value("nome", @$item->nome) ?>" >
												<?php echo form_error('nome'); ?>
											</div>
											<div class="col-md-4 mb-3">
												<label class="form-control-label" for="razao_social">Razão Social</label>
												<input type="text" class="form-control" id="razao_social" name="razao_social"
													   placeholder="Razão Social"
													   value="<?php echo set_value("razao_social", @$item->razao_social) ?>" >
												<?php echo form_error('razao_social'); ?>
											</div>
											<div class="col-md-4 mb-3">
												<label class="form-control-label" for="cpf_cnpj">CPF/CNPJ</label>
												<input type="text" class="form-control" id="cpf_cnpj" name="cpf_cnpj"
													   placeholder="CPF/CNPJ"
													   value="<?php echo set_value("cpf_cnpj", @$item->cpf_cnpj) ?>" >
												<?php echo form_error('cpf_cnpj'); ?>
											</div>
										</div>
										<div class="form-row">
											<div class="col-md-4 mb-3">
												<label class="form-control-label" for="celular">Celular</label>
												<input type="text" class="form-control" id="celular" name="celular"
													   placeholder="Ex: (86)91234-5678"
													   value="<?php echo set_value("celular", @$item->celular) ?>" >
												<?php echo form_error('celular'); ?>
											</div>
											<div class="col-md-4 mb-3">
												<label class="form-control-label" for="telefone">Telefone</label>
												<input type="text" class="form-control" id="telefone" name="telefone"
													   placeholder="Ex: (86)1234-5678"
													   value="<?php echo set_value("telefone", @$item->telefone) ?>" >
												<?php echo form_error('telefone'); ?>
											</div>
											<div class="col-md-4 mb-3">
												<label class="form-control-label" for="email">Email</label>
												<input type="text" class="form-control" id="email" name="email"
													   placeholder="Ex: email@exemplo.com"
													   value="<?php echo set_value("email", @$item->email) ?>" >
												<?php echo form_error('email'); ?>
											</div>
										</div>
										<div class="form-row">
											<div class="col-md-3 mb-3">
												<label class="form-control-label" for="sexo">Sexo</label>
												<input type="text" class="form-control" id="sexo" name="sexo"
													   placeholder="Ex: M/F"
													   value="<?php echo set_value("sexo", @$item->sexo) ?>" >
												<?php echo form_error('sexo'); ?>
											</div>
											<div class="col-md-3 mb-3">
												<label class="form-control-label" for="nascimento">Nascimento</label>
												<input type="date" class="form-control" id="nascimento" name="nascimento"
													   placeholder="Ex: 03/04/1971"
													   value="<?php echo set_value("nascimento", @$item->nascimento) ?>" >
												<?php echo form_error('nascimento'); ?>
											</div>
											<div class="col-md-3 mb-3">
												<label class="form-control-label" for="estado_civil">Estado Civil</label>
												<input type="text" class="form-control" id="estado_civil" name="estado_civil"
													   placeholder="Ex: Casado"
													   value="<?php echo set_value("estado_civil", @$item->estado_civil) ?>" >
												<?php echo form_error('estado_civil'); ?>
											</div>
											<div class="col-md-3 mb-3">
												<label class="form-control-label" for="nacionalidade">Nacionalidade</label>
												<input type="text" class="form-control" id="nacionalidade" name="nacionalidade"
													   placeholder="Ex: Brasileiro"
													   value="<?php echo set_value("nacionalidade", @$item->nacionalidade) ?>" >
												<?php echo form_error('nacionalidade'); ?>
											</div>
										</div>
							        </div>
							    </div>
							    <div class="card mb-4">
							        <!-- Card header -->
							        <div class="card-header">
							          <h1 class="mb-0">Dados Bancários</h1>
							        </div>
							        <!-- Card body -->
							        <div class="card-body">
								        <div class="form-row">
											<div class="col-md-3 mb-3">
												<label class="form-control-label" for="forma_pagamento">Forma de Pagamento</label>
												<input type="text" class="form-control" id="forma_pagamento" name="forma_pagamento"
													   placeholder="Ex: Dinheiro"
													   value="<?php echo set_value("forma_pagamento", @$item->forma_pagamento) ?>" >
												<?php echo form_error('forma_pagamento'); ?>
											</div>
											<div class="col-md-3 mb-3">
												<label class="form-control-label" for="banco">Banco</label>
												<input type="text" class="form-control" id="banco" name="banco"
													   placeholder="Banco"
													   value="<?php echo set_value("banco", @$item->banco) ?>" >
												<?php echo form_error('banco'); ?>
											</div>
											<div class="col-md-2 mb-3">
												<label class="form-control-label" for="agencia">Agência</label>
												<input type="text" class="form-control" id="agencia" name="agencia"
													   placeholder="Agência"
													   value="<?php echo set_value("agencia", @$item->agencia) ?>" >
												<?php echo form_error('agencia'); ?>
											</div>
											<div class="col-md-2 mb-3">
												<label class="form-control-label" for="codigo_operacao">Código de Operação</label>
												<input type="text" class="form-control" id="codigo_operacao" name="codigo_operacao"
													   placeholder="Código de Operação"
													   value="<?php echo set_value("codigo_operacao", @$item->codigo_operacao) ?>" >
												<?php echo form_error('codigo_operacao'); ?>
											</div>
											<div class="col-md-2 mb-3">
												<label class="form-control-label" for="conta">Conta</label>
												<input type="text" class="form-control" id="conta" name="conta"
													   placeholder="Conta"
													   value="<?php echo set_value("conta", @$item->conta) ?>" >
												<?php echo form_error('conta'); ?>
											</div>	
										</div>
										<div class="form-row">
											<div class="col-md-6 mb-3">
												<label class="form-control-label" for="nome_titular">Nome do Titular</label>
												<input type="text" class="form-control" id="nome_titular" name="nome_titular"
													   placeholder="Nome do Titular"
													   value="<?php echo set_value("nome_titular", @$item->nome_titular) ?>" >
												<?php echo form_error('nome_titular'); ?>
											</div>
											<div class="col-md-6 mb-3">
												<label class="form-control-label" for="cpf_titular">CPF do Titular</label>
												<input type="text" class="form-control" id="cpf_titular" name="cpf_titular"
													   placeholder="CPF do Titular"
													   value="<?php echo set_value("cpf_titular", @$item->cpf_titular) ?>" >
												<?php echo form_error('cpf_titular'); ?>
											</div>
										</div>
										<div class="form-row">
											<div class="col-md-4 mb-3">
												<label class="form-control-label" for="rg">RG</label>
												<input type="text" class="form-control" id="rg" name="rg"
													   placeholder="RG"
													   value="<?php echo set_value("rg", @$item->rg) ?>" >
												<?php echo form_error('rg'); ?>
											</div>
											<div class="col-md-4 mb-3">
												<label class="form-control-label" for="orgao_expedidor">Órgão Expedidor</label>
												<input type="text" class="form-control" id="orgao_expedidor" name="orgao_expedidor"
													   placeholder="Ex: SSP"
													   value="<?php echo set_value("orgao_expedidor", @$item->orgao_expedidor) ?>" >
												<?php echo form_error('orgao_expedidor'); ?>
											</div>
											<div class="col-md-4 mb-3">
												<label class="form-control-label" for="data_expedicao">Data de Expedição</label>
												<input type="date" class="form-control" id="data_expedicao" name="data_expedicao"
													   placeholder="Ex: 03/04/2017"
													   value="<?php echo set_value("data_expedicao", @$item->data_expedicao) ?>" >
												<?php echo form_error('data_expedicao'); ?>
											</div>
										</div>	
							        </div>
							    </div>

							    <div class="card mb-4">
							        <!-- Card header -->
							        <div class="card-header">
							          <h1 class="mb-0">Endereço</h1>
							        </div>
							        <!-- Card body -->
							        <div class="card-body">
									    <div class="form-row">
											<div class="col-md-2 mb-3">
												<label class="form-control-label" for="cep">CEP</label>
												<input type="text" class="form-control" id="cep" name="cep"
													   placeholder="Ex: 64000-000"
													   value="<?php echo set_value("cep", @$item->cep) ?>" >
												<?php echo form_error('cep'); ?>
											</div>
											<div class="col-md-8 mb-3">
												<label class="form-control-label" for="endereco">Endereco</label>
												<input type="text" class="form-control" id="endereco" name="endereco"
													   placeholder="Ex: R. das Orquídeas"
													   value="<?php echo set_value("endereco", @$item->endereco) ?>" >
												<?php echo form_error('endereco'); ?>
											</div>
											<div class="col-md-2 mb-3">
												<label class="form-control-label" for="numero">Número</label>
												<input type="text" class="form-control" id="numero" name="numero"
													   placeholder="Ex: 51"
													   value="<?php echo set_value("numero", @$item->numero) ?>" >
											</div>
											
										</div>
										<div class="form-row">
											<div class="col-md-4 mb-3">
												<label class="form-control-label" for="complemento">Complemento</label>
												<input type="text" class="form-control" id="complemento" name="complemento"
													   placeholder="Ex: Apart."
													   value="<?php echo set_value("complemento", @$item->complemento) ?>" >
											</div>
											<div class="col-md-4 mb-3">
												<label class="form-control-label" for="bairro">Bairro</label>
												<input type="text" class="form-control" id="bairro" name="bairro"
													   placeholder="Ex: Jóquei"
													   value="<?php echo set_value("bairro", @$item->bairro) ?>" >
												<?php echo form_error('bairro'); ?>
											</div>
											<div class="col-md-3 mb-3">
												<label class="form-control-label" for="cidade">Cidade</label>
												<input type="text" class="form-control" id="cidade" name="cidade"
													   placeholder="Ex: Teresina"
													   value="<?php echo set_value("cidade", @$item->cidade) ?>" >
												<?php echo form_error('cidade'); ?>
											</div>
											<div class="col-md-1 mb-3">
												<label class="form-control-label" for="uf">UF</label>
												<input type="text" class="form-control" id="uf" name="uf"
													   placeholder="Ex: PI"
													   value="<?php echo set_value("uf", @$item->uf) ?>" >
												<?php echo form_error('uf'); ?>
											</div>
										</div>	
							        </div>
							    </div>
								
								<div class="card mb-4">
							        <!-- Card header -->
							        <div class="card-header">
							          <h1 class="mb-0">Profissão</h1>
							        </div>
							        <!-- Card body -->
							        <div class="card-body">
							        <div class="form-row">								
									<div class="col-md-4 mb-3">
										<label class="form-control-label" for="profissao">Profissão</label>
										<input type="text" class="form-control" id="profissao" name="profissao"
											   placeholder="Ex: Analista"
											   value="<?php echo set_value("profissao", @$item->profissao) ?>" >
										<?php echo form_error('profissao'); ?>
									</div>								
									<div class="col-md-4 mb-3">
										<label class="form-control-label" for="ramo_atividade">Ramo de atividade</label>
										<input type="text" class="form-control" id="ramo_atividade" name="ramo_atividade"
											   placeholder="Ex: Comercial"
											   value="<?php echo set_value("ramo_atividade", @$item->ramo_atividade) ?>" >
										<?php echo form_error('ramo_atividade'); ?>
									</div>								
									<div class="col-md-4 mb-3">
										<label class="form-control-label" for="renda_mensal">Renda mensal</label>
										<input type="text" class="form-control" id="renda_mensal" name="renda_mensal"
											   placeholder="Ex: R$ 2.100,00"
											   value="<?php echo set_value("renda_mensal", @$item->renda_mensal) ?>" >
										<?php echo form_error('renda_mensal'); ?>
									</div>
								</div>
							        </div>
							    </div>
								<div class="card mb-4">
							        <!-- Card header -->
							        <div class="card-header">
							          <h1 class="mb-0">Cônjuge</h1>
							        </div>
							        <!-- Card body -->
							        <div class="card-body">
								        <div class="form-row">								
											<div class="col-md-4 mb-3">
												<label class="form-control-label" for="nome_conjuge">Nome</label>
												<input type="text" class="form-control" id="nome_conjuge" name="nome_conjuge"
													   placeholder="Nome do cônjuge"
													   value="<?php echo set_value("nome_conjuge", @$item->nome_conjuge) ?>" >
												<?php echo form_error('nome_conjuge'); ?>
											</div>							
											<div class="col-md-3 mb-3">
												<label class="form-control-label" for="cpf_conjuge">CPF</label>
												<input type="text" class="form-control" id="cpf_conjuge" name="cpf_conjuge"
													   placeholder="CPF do cônjuge"
													   value="<?php echo set_value("cpf_conjuge", @$item->cpf_conjuge) ?>" >
												<?php echo form_error('cpf_conjuge'); ?>
											</div>							
											<div class="col-md-3 mb-3">
												<label class="form-control-label" for="rg_conjuge">RG</label>
												<input type="text" class="form-control" id="rg_conjuge" name="rg_conjuge"
													   placeholder="RG do cônjuge"
													   value="<?php echo set_value("rg_conjuge", @$item->rg_conjuge) ?>" >
												<?php echo form_error('rg_conjuge'); ?>
											</div>								
											<div class="col-md-2 mb-3">
												<label class="form-control-label" for="orgao_expedidor_conjuge">Órgão expedidor</label>
												<input type="text" class="form-control" id="orgao_expedidor_conjuge" name="orgao_expedidor_conjuge"
													   placeholder="Ex: SSP"
													   value="<?php echo set_value("orgao_expedidor_conjuge", @$item->orgao_expedidor_conjuge) ?>" >
												<?php echo form_error('orgao_expedidor_conjuge'); ?>
											</div>
										</div>
										<div class="form-row">								
											<div class="col-md-4 mb-3">
												<label class="form-control-label" for="celular_conjuge">Celular</label>
												<input type="text" class="form-control" id="celular_conjuge" name="celular_conjuge"
													   placeholder="Ex: (86)91234-5678"
													   value="<?php echo set_value("celular_conjuge", @$item->celular_conjuge) ?>" >
												<?php echo form_error('celular_conjuge'); ?>
											</div>								
											<div class="col-md-4 mb-3">
												<label class="form-control-label" for="telefone_conjuge">Telefone</label>
												<input type="text" class="form-control" id="telefone_conjuge" name="telefone_conjuge"
													   placeholder="Ex: (86)1234-5678"
													   value="<?php echo set_value("telefone_conjuge", @$item->telefone_conjuge) ?>" >
												<?php echo form_error('telefone_conjuge'); ?>
											</div>								
											<div class="col-md-4 mb-3">
												<label class="form-control-label" for="email_conjuge">Email</label>
												<input type="text" class="form-control" id="email_conjuge" name="email_conjuge"
													   placeholder="Ex: email@exemplo.com"
													   value="<?php echo set_value("email_conjuge", @$item->email_conjuge) ?>" >
												<?php echo form_error('email_conjuge'); ?>
											</div>
										</div>
										<div class="form-row">								
											<div class="col-md-4 mb-3">
												<label class="form-control-label" for="nacionalidade_conjuge">Nacionalidade </label>
												<input type="text" class="form-control" id="nacionalidade_conjuge" name="nacionalidade_conjuge"
													   placeholder="Nacionalidade do cônjuge"
													   value="<?php echo set_value("nacionalidade_conjuge", @$item->nacionalidade_conjuge) ?>" >
												<?php echo form_error('nacionalidade_conjuge'); ?>
											</div>								
											<div class="col-md-4 mb-3">
												<label class="form-control-label" for="sexo_conjuge">Sexo</label>
												<input type="text" class="form-control" id="sexo_conjuge" name="sexo_conjuge"
													   placeholder="Ex: M/F"
													   value="<?php echo set_value("sexo_conjuge", @$item->sexo_conjuge) ?>" >
												<?php echo form_error('sexo_conjuge'); ?>
											</div>						
											<div class="col-md-4 mb-3">
												<label class="form-control-label" for="profissao_conjuge">Profissão</label>
												<input type="text" class="form-control" id="profissao_conjuge" name="profissao_conjuge"
													   placeholder="Ex: Supervisor"
													   value="<?php echo set_value("profissao_conjuge", @$item->profissao_conjuge) ?>" >
												<?php echo form_error('profissao_conjuge'); ?>
											</div>
										</div>
							        </div>
							    </div>
								
								<div class="card mb-4">
							        <!-- Card header -->
							        <div class="card-header">
							          <h1 class="mb-0">Observação</h1>
							        </div>
							        <!-- Card body -->
							        <div class="card-body">
							        <div class="form-row">								
											<div class="col-md-12 mb-3">
												<input type="text" class="form-control" id="observacao" name="observacao"
													   placeholder="Observação"
													   value="<?php echo set_value("observacao", @$item->observacao) ?>" >
												<?php echo form_error('observacao'); ?>
											</div>
										</div>
							        </div>
							    </div>
								
								<input type="submit" name="enviar" class="btn btn-primary" value="Salvar" />
								<a href="<?php echo site_url("corretores")?>" class="btn btn-outline-default ml-auto">
									Cancelar
								</a>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>

		<script type="text/javascript" src="<?php echo base_url(); ?>assets/modulos/corretores/js.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>assets/modulos/corretores/validate.js"></script>
