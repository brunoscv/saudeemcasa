//;
$(function () {
	$("#form_imoveis").validate({
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
			proprietario_id: {
				required: true
			},
			tipo: {
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
			estado: {
				required: true
			},
			cep: {
				required: true
			},
			valor: {
				required: true
			},
			valorCondominio: {
				required: true
			},
			valorIPTU: {
				required: true
			},
			matriculaIPTU: {
				required: true
			},
			matriculaAgua: {
				required: true
			},
			matriculaLuz: {
				required: true
			},
			matriculaGas: {
				required: true
			},
			dimensoesDoTerreno: {
				required: true
			},
			vagasGaragem: {
				required: true
			}
		}
	});
});
