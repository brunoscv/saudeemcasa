//;
$(function () {
	$("#form_contratos").validate({
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
			imovel_id: {
				required: true
			},
			cliente_id: {
				required: true
			},
			fiador_id: {
				required: true
			},
			corretor_id: {
				required: true
			},
			data_inicio_contrato: {
				required: true
			},
			data_fim_contrato: {
				required: true
			},
			finalidade_contrato: {
				required: true
			},
			valor_aluguel: {
				required: true
			},
			data_vencimento: {
				required: true
			},
			juros: {
				required: true
			},
			multa: {
				required: true
			},
			desconto_pontualidade: {
				required: true
			},
			taxa_adm: {
				required: true
			},
			clausulas_adicionais: {
				required: true
			},
			dias_tipo: {
				required: true
			},
			garantia_tipo: {
				required: true
			},
			data_inicio_garantia: {
				required: true
			},
			data_fim_garantia: {
				required: true
			},
			valor_garantia: {
				required: true
			}
		}
	});
});
