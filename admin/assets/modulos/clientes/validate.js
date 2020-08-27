//;
$(function () {
	$("#form_clientes").validate({
		ignore: ".ignore",
		errorElement: "em",
		onfocusout: function (element) {
			if ((!this.check(element) || !this.checkable(element)) && (element.name in this.submitted || !this.optional(element))) {
				var currentObj = this;
				var currentElement = element;
				var delay = function () {
					currentObj.element(currentElement);
				};
				setTimeout(delay, 0);
			}
		},
		invalidHandler: function (form, validator) {
			var errors = validator.numberOfInvalids();
			if (errors) {
				validator.errorList[0].element.focus();
				var aba = $(validator.errorList[0].element).parents('div.tab-pane').attr('id');
				$("[href='#" + aba + "']").click();
			}
			return false;
		},
		rules: {
			id: {},
			nome: {
				required: true
			},
			razao_social: {
				required: true
			},
			cpf_cnpj: {
				required: true
			},
			celular: {
				required: true
			},
			telefone: {
				required: true
			},
			email: {
				required: true
			},
			sexo: {
				required: true
			},
			nascimento: {
				required: true
			},
			estado_civil: {
				required: true
			},
			nacionalidade: {
				required: true
			},
			forma_pagamento: {
				required: true
			},
			banco: {
				required: true
			},
			agencia: {
				required: true
			},
			codigo_operacao: {
				required: true
			},
			conta: {
				required: true
			},
			nome_titular: {
				required: true
			},
			cpf_titular: {
				required: true
			},
			rg: {
				required: true
			},
			orgao_expedidor: {
				required: true
			},
			data_expedicao: {
				required: true
			},
			cep: {
				required: true
			},
			endereco: {
				required: true
			},
			bairro: {
				required: true
			},
			cidade: {
				required: true
			},
			uf: {
				required: true
			},
			profissao: {
				required: true
			},
			ramo_atividade: {
				required: true
			},
			renda_mensal: {
				required: true
			},
			nome_conjuge: {
				required: true
			},
			cpf_conjuge: {
				required: true
			},
			rg_conjuge: {
				required: true
			},
			orgao_expedidor_conjuge: {
				required: true
			},
			celular_conjuge: {
				required: true
			},
			telefone_conjuge: {
				required: true
			},
			email_conjuge: {
				required: true
			},
			nacionalidade_conjuge: {
				required: true
			},
			sexo_conjuge: {
				required: true
			},
			profissao_conjuge: {
				required: true
			}
		}
	});
});
