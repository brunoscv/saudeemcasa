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
					<h6 class="h2 text-white d-inline-block mb-0">Default</h6>
					<nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
						<ol class="breadcrumb breadcrumb-links breadcrumb-dark">
							<li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
							<li class="breadcrumb-item"><a href="#">Dashboards</a></li>
							<li class="breadcrumb-item active" aria-current="page">Default</li>
						</ol>
					</nav>
				</div>
				<div class="col-lg-6 col-5 text-right">
					<!-- <a href="<?= base_url()?>consultas/criar" class="btn btn-sm btn-neutral"><i class="fa fa-plus"></i> Novo</a> -->
					<!-- <a href="#" class="btn btn-sm btn-neutral">Filters</a> -->
					<a href="<?= base_url() . 'consultas/atendimentos/' . $listaAtendimentos[0]->consultas_id;?>"  class="btn btn-sm btn-neutral"><i class="fa fa-list"></i> Lista</a>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Cards Header -->
<!-- Page content -->
<div class="container-fluid mt--6">
	<!-- Table -->
	<div class="row">
        <div class="col">
          	<div class="card">
				<!-- Card header -->
				<div class="card-header">
					<h3 class="mb-0">Painel de Sessões</h3>
					<!-- <p class="text-sm mb-0">
					.
					</p> -->
				</div>
				<div class="table-responsive py-4">
					<table class="table table-flush" id="datatable-basic">
					<thead>
								<tr>
									<th>Paciente</th>
									<th>Profissional</th>
									<th style="text-align:center">Data Atd.</th>
									<th style="text-align:center">Presença</th>
									<th style="text-align:center">Status</th>
									<th style="text-align:center">Criado</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach($listaAtendimentos as $item): ?>
								<tr>
									<!-- <td><span class="label label-danger"> Inativo </span></td> -->
									<td><?php echo $item->nome_pac; ?></td>
									<td><?php echo $item->nome_prof; ?></td>
									<td style="text-align:center"><?php echo ( (!$item->data_atendimento)  ? "<span class=''> <input type='text' class='form-control data_atendimento' name='data_atendimento' id='data_atendimento_{$item->id}' style='text-align:center'/> <p id='mensagem_{$item->id}' style='color: red;font-size: 11px;font-style: italic;'></p> </span>" : date('d/m/Y H:i', strtotime($item->data_atendimento)) ); ?></td>
									<td style="text-align:center"><?php echo (($item->presenca == 1) ? "<span class='btn btn-success btn-sm mudarPresenca' sessoes_id='{$item->id}' presenca='{$item->presenca}' consultas_id='{$item->consultas_id}' atendimentos_id='{$item->atendimentos_id}'><i class='fa fa-check'></i> </span>" : "<span class='btn btn-danger btn-sm mudarPresenca' sessoes_id='{$item->id}' presenca='{$item->presenca}' consultas_id='{$item->consultas_id}' atendimentos_id='{$item->atendimentos_id}'><i class='fa fa-check'></i> </span>"); ?></td>
									<td><?php echo ($item->status == 1 ? '<span class="badge badge-success"> Ativo </span>' : '<span class="badge badge-danger"> Inativo </span>') ?></td>
									<td style="text-align:center"><?php echo date("d/m/Y", strtotime($item->createdAt)); ?></td>
								</tr>
								<?php endforeach; ?>
							</tbody>
					</table>
           	 	</div>
			</div>
		</div>
	</div>

<script src="<?php echo base_url(); ?>assets/plugins/bootbox/bootbox.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/modulos/consultas/js.js"></script>
<style type="text/css">
	.focus-danger {
		border-color: #d9534f;
		outline: 0;
		-webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075), 0 0 8px rgba(102, 175, 233, .6);
		box-shadow: inset 0 1px 1px rgba(0,0,0,.075), 0 0 8px rgba(102, 175, 233, .6);
	}
</style>

<script type="text/javascript">
	var base_url = "<?php echo base_url(); ?>";
    $(document).ready(function(event) {
		function formatar_data(data) {
            if(data.length == 10) {
                return (data.substr(6,4) + '-' + data.substr(3,2) + '-' + data.substr(0,2));
            } else if(data.length == 16) {
                return (data.substr(6,4) + '-' + data.substr(3,2) + '-' + data.substr(0,2) + ' ' + data.substr(11,2) + ':' + data.substr(14,2));
            }
		}
		$("body").on('click', '.mudarPresenca', function(event){
            event.preventDefault();
            var sessoes_id = $(this).attr("sessoes_id"); 
            var presenca = $(this).attr("presenca"); 
            var consultas_id = $(this).attr("consultas_id"); 
            var atendimentos_id = $(this).attr("atendimentos_id");
            var data_atendimento = formatar_data($('#data_atendimento_' + sessoes_id).val());

            bootbox.dialog({
                message: "Tem certeza que deseja <b>MODIFICAR</b> esse atendimento?",
                size: 'small',
                buttons: {
                    cancel: {
                        label: 'Não',
                        className: 'btn-danger',
                        callback: function(){
                            console.log('Custom cancel clicked');
                        }
                    },
                    confirm: {
                        label: 'Sim',
                        className: 'btn-success',
                        callback: function(){
                            if($('#data_atendimento_' + sessoes_id).val() == 0) {
                                $('#data_atendimento_'+ sessoes_id).addClass("focus-danger");
                                 $('#mensagem_'+ sessoes_id).html("O campo não pode ser vazio!");
                            } else {
                                $.ajax({
                                    url: base_url + 'consultas/mudar_presenca_consulta/' + sessoes_id + '/' + presenca + '/' + data_atendimento,
                                    type: "POST",
                                    dataType: 'json',
                                    context: this,
                                    data: { 
                                        sessoes_id: sessoes_id,
                                        presenca: presenca,
                                        data_atendimento: data_atendimento,
                                    },
                                    beforeSend: function() {
                                    },
                                    success: function(data) {
                                        console.log(data);
                                        var json_obj = data.presenca; //parse JSON
                                        if(data.sucesso == true) {
                                        	window.location.href = base_url + "consultas/sessoes/" + consultas_id + '/' + atendimentos_id;
                                        }
                                    },
                                    complete: function(data) {
                                        //toastr.success("Ação Completada com Sucesso");                                   
                                        console.log(data);
                                    },
                                    fail: function(data) {             
                                        console.log(data);
                                    },
                                });	
                            }  
                        }
                    },
                }
            });
        });
		$("body").on('click', '.data_atendimento', function(event){
			// $.datetimepicker.setLocale('pt-BR');
			$('.data_atendimento').datetimepicker({
				inline:false,
				format: 'd/m/Y H:i',
				// mask: '99/99/9999 99:99',
				monthChangeSpinner: false,
				closeOnDateSelect: false,
				closeOnTimeSelect: true,
				closeOnWithoutClick: false,
				closeOnInputClick: true,
				openOnFocus: true,
				timepicker: true,
				datepicker: true,
				// todayButton: true,
				prevButton: true,
				nextButton: true,
				defaultSelect: true,
				allowBlank: true,
				defaultTime: false,
				defaultDate: false
			});
			//$('.data_atendimento').datetimepicker('show');
		});
		$('.data_atendimento').mask("99/99/9999 99:99");
    });
</script>