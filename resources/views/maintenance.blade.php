@extends('adminlte::page')
@extends('layouts.cdn')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="container" style="padding: 25px; background-color: white">
            <div class="row">
                <div class="col-9">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Agendar Manutenção</button>
                </div>

                

            </div>
           <br>
            <table id="datatable" class="table table-striped" style="width:100%" style="word-wrap: break-word; overflow-wrap: break-word;  ">
                <thead>
                    <tr>
                        <th>Carro</th>
                        <th>Cliente</th>
                        <th>Observação</th>
                        <th>Data</th>
                        <th style="width: 8%">Ações</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Dados Da Manutenção</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <input type="hidden" id="id_main">
        </div>
        <div class="modal-body">
            <div class="custom-control custom-switch" id="div_switche" style="display: none">
                <input type="checkbox" class="custom-control-input" id="customSwitch1" onchange="open_inputs()" >
                <label class="custom-control-label" for="customSwitch1">Habilitar Edição</label>
              </div>
              <br>
        <form action="" id="form_maintenance">
          <div class="row">
              <div class="col-6">
                <label for="">Nome do Cliente</label>
                <input id="client_name" type="text" class="form-control">
              </div>
              <div class="col-6">
                <label for="">Data</label>
                <input type="date" class="form-control" id="data">
              </div>

              <div class="col-5">
                <label for="">Carro</label>
                <select id="car" class="form-control" required onchange="get_info_car()">
                    <option value="">Selecione</option>
                    @foreach ($cars as $value)
                        <option value="{{ $value->id }}">{{ $value->identificador }}</option>
                    @endforeach
                </select>
            </div>
              <div class="col-5">
                <label for="">Modelo</label>
                <input type="text" class="form-control" id="model" readonly>
            </div>
              <div class="col-2">
                <label for="">Ano</label>
                <input type="text" class="form-control" id="year" readonly>
              </div>

              <div class="col-12">
                <label for="">Observação</label>
                <textarea class="form-control" id="obs" cols="30" rows="2"></textarea>
              </div>
              
          </div>
        </div>
    </form>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-danger mr-auto" onclick="delete_car()" id="delete_button" data-dismiss="modal" style="display: none">Excluir</button>
          <button type="button" class="btn btn-secondary" onclick="close_modal()" data-dismiss="modal">Sair</button>
          <button type="button" class="btn btn-success" onclick="save_maintenance()"  id="save_button" style="display: block">Salvar</button>
          <button type="button" class="btn btn-warning" onclick="update_car()" id="update_button" style="display: none">Atualizar Dados</button>
        </div>
      </div>
    </div>
  </div>

  

<script>
    $(document).ready(function() {
        $('#datatable').DataTable({
            responsive: true,
            paging: false,
            searching: false,
            info: false
        });
    } );

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    

    function getRecords() {
        
        $.ajax({
            url: "{{ route('get_all_maintenance') }}",
            type: "get",
            dataType: 'json',
            success: function (data) {
                var s = '';
                
                var html='';
                data.forEach(function(row){
                    //if(row.price == "Ativo"){ s = 'color: green'}else{s = 'color: red'};
                    html += '<tr>'
                    html += '<td>' + row.identificador + '</td>'
                    html += '<td>' + row.client_name + '</td>'
                    html += '<td>' + row.observation + '</td>'
                    html += '<td>' + row.maintenance_date + '</td>'
                    html += '<td>'
                    html += '<button  class="btn btnEdit" data-id="' + row.id + '" title="Edit Record" ><i class="fas fa-info-circle"></i></button> &nbsp &nbsp'
                    html += '</td> </tr>';
                })
                    $('#datatable').DataTable().destroy();
                    $('table tbody').html(html);
                 
                    $('#datatable').DataTable({
                        responsive: true,
                        paging: false,
                        searching: false,
                        info: false
                    });
                
                }
        })
    }
    getRecords()


    function save_maintenance(){

        $.ajax({
            type: 'POST',
            url: "{{ route('post.maintenance') }}",
            data: {
                'client_name':  $("#client_name").val(),
                'car':  $("#car").val(),
                'observation': $('#obs').val(),
                'maintenance_date': $('#data').val(),
            },
            success: function() {
                swal.fire('Manutenção Agendada', '', 'success');
                $('#client_name').val('');
                $('#car').val('');
                $('#observation').val('');
                $('#maintenance_date').val('');
                $('#exampleModal').modal('hide');
            },
        });
        getRecords()
    }

    function update_car(){
        $.ajax({
            type: 'POST',
            url: "{{ route('update.maintenance') }}",
            data: {
                'id':  $("#id_main").val(),
                'client_name':  $("#client_name").val(),
                'car':  $("#car").val(),
                'observation': $('#obs').val(),
                'maintenance_date': $('#data').val(),
            },
            success: function() {
                swal.fire('Dados Alterados', '', 'success');
                $('#client_name').val('');
                $('#car').val('');
                $('#observation').val('');
                $('#maintenance_date').val('');
                $('#exampleModal').modal('hide');
                $( "#customSwitch1" ).prop( "checked", false );
                $("#save_button").css({'display':'block'});
                $("#update_button").css({'display':'none'});
            },
        });
        getRecords()
    }

    function delete_car(){
        Swal.fire({
            title: 'Voce tem certeza que deseja Excluir?',
            showDenyButton: false,
            showCancelButton: true,
            confirmButtonText: `Apagar!`,
            }).then((result) => {
            /* Read more about isConfirmed, isDenied below */
            if (result.isConfirmed) {
                 $.ajax({
                    type: 'POST',
                    url: "{{ route('delete.maintenance') }}",
                    data: {
                        'id' : $("#id_main").val(),
                    },
                    success: function() {
                        $('#client_name').val('');
                        $('#car').val('');
                        $('#observation').val('');
                        $('#maintenance_date').val('');
                        $('#exampleModal').modal('hide');
                        $( "#customSwitch1" ).prop( "checked", false );
                        $("#save_button").css({'display':'block'});
                        $("#update_button").css({'display':'none'});
                    },
                });
                Swal.fire('Excluido!', '', 'success')
                getRecords()
            } 
            })
        
    }


  $('table').on('click', '.btnEdit', function () {
    var id = $(this).data('id');
    $.ajax({
            url:"/get_maintenance/" + id,
            type: "get",
            dataType: 'json',
        success: function (response) {
            $('#id_main').val(response.id);
            $('#client_name').val(response.client_name);
            $('#car').val(response.car);
            $('#obs').val(response.observation);
            $('#data').val(response.maintenance_date);
            $('#model').val(response.model);
            $('#year').val(response.year);
            $('#exampleModal').modal('show');
            $('#form_maintenance input ').attr('readonly', 'readonly');
            $('#car').attr('disabled', true);
            $('#obs').attr('readonly', true);
            $("#div_switche").css({'display':'block'});
            $("#delete_button").css({'display':'none'});
            $("#save_button").css({'display':'none'});
            $("#update_button").css({'display':'block'});
        }
    })
}) 

function open_inputs(){
    if($("#customSwitch1").is(':checked') == true){
        $('#form_maintenance input ').attr('readonly', false);
        $('#observation').attr('readonly', false);
        $('#year').attr('readonly', true);
        $('#obs').attr('readonly', false);
        $('#car').attr('disabled', false);
        $('#model').attr('readonly', true);
        $("#delete_button").css({'display':'block'});
    }else{
        $('#form_maintenance input ').attr('readonly', 'readonly');
        $('#observation').attr('readonly', true);
        $('#car').attr('disabled', true);
        $('#obs').attr('readonly', true);
        $("#delete_button").css({'display':'none'});
    }
}

function close_modal(){
    $("#div_switche").css({'display':'none'});
    $('#form_maintenance input ').attr('readonly', false);
    $('#observation').attr('readonly', false);
    $('#name').val('');
    $('#age').val('');
    $('#phone').val('');
    $('#contact_phone').val('');
    $('#email').val('');
    $('#id_patient').val('');
    $('#observation').val('');
    $( "#customSwitch1" ).prop( "checked", false );
    $("#save_button").css({'display':'block'});
    $("#delete_button").css({'display':'none'});
    $("#update_button").css({'display':'none'});
}

function get_info_car(){
    var id = $("#car").val();

    $.ajax({
            url:"/get_info_car/" + id,
            type: "get",
            dataType: 'json',
        success: function (response) {
            $('#model').val(response.model);
            $('#year').val(response.year);
        }
    })
}

</script>
@endsection

