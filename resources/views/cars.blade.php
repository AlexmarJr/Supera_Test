@extends('adminlte::page')
@extends('layouts.cdn')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="container" style="padding: 25px; background-color: white">
            <div class="row">
                <div class="col-9">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Adicionar Carro</button>
                </div>

                

            </div>
           <br>
            <table id="datatable" class="table table-striped" style="width:100%" style="word-wrap: break-word; overflow-wrap: break-word;  ">
                <thead>
                    <tr>
                        <th>Identificador</th>
                        <th>Marca</th>
                        <th>Modelo</th>
                        <th>Ano</th>
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
          <h5 class="modal-title" id="exampleModalLabel">Dados Do Carro</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <input type="hidden" id="id_car">
        </div>
        <div class="modal-body">
            <div class="custom-control custom-switch" id="div_switche" style="display: none">
                <input type="checkbox" class="custom-control-input" id="customSwitch1" onchange="open_inputs()" >
                <label class="custom-control-label" for="customSwitch1">Habilitar Edição</label>
              </div>
              <br>
        <form action="" id="form_car">
          <div class="row">
              <div class="col-6">
                  <label for="">Identificador</label>
                  <input type="text" class="form-control" id="identificador">
              </div>
              <div class="col-6">
                  <label for="">Marca</label>
                  <input type="text" class="form-control" id="brand">
              </div>

              <div class="col-6">
                <label for="">Modelo</label>
                <input id="model" type="text" class="form-control " >
              </div>

              <div class="col-6">
                <label for="">Ano</label>
                <input id="year" type="int" class="form-control ">
              </div>
          </div>
        </div>
    </form>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-danger mr-auto" onclick="delete_car()" id="delete_button" data-dismiss="modal" style="display: none">Excluir</button>
          <button type="button" class="btn btn-secondary" onclick="close_modal()" data-dismiss="modal">Sair</button>
          <button type="button" class="btn btn-success" onclick="save_car()"  id="save_button" style="display: block">Salvar</button>
          <button type="button" class="btn btn-warning" onclick="update_car()" id="update_button" style="display: none">Atualizar Dados</button>
        </div>
      </div>
    </div>
  </div>

  

<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    

    function getRecords() {
        
        $.ajax({
            url: "{{ route('get_cars') }}",
            type: "get",
            dataType: 'json',
            success: function (data) {
                var s = '';
                
                var html='';
                data.forEach(function(row){
                    //if(row.price == "Ativo"){ s = 'color: green'}else{s = 'color: red'};
                    html += '<tr>'
                    html += '<td>' + row.identificador + '</td>'
                    html += '<td>' + row.brand + '</td>'
                    html += '<td>' + row.model + '</td>'
                    html += '<td>' + row.year + '</td>'
                    html += '<td>'
                    html += '<button  class="btn btnEdit" data-id="' + row.id + '" title="Edit Record" ><i class="fas fa-info-circle"></i></button> &nbsp &nbsp'
                    html += '</td> </tr>';
                })
                    $('#datatable').DataTable().destroy();
                    $('table tbody').html(html);
                 
                    $('#datatable').DataTable({
                        responsive: true,
                        paging: false,
                        searching: true,
                        info: false
                    });
                
                }
        })
    }
    getRecords()


    function save_car(){

        $.ajax({
            type: 'POST',
            url: "{{ route('post.car') }}",
            data: {
                'identificador':  $("#identificador").val(),
                'brand':  $("#brand").val(),
                'model': $('#model').val(),
                'year': $('#year').val(),
            },
            success: function() {
                swal.fire('Carro Registrado', '', 'success');
                $('#identificador').val('');
                $('#brand').val('');
                $('#model').val('');
                $('#year').val('');
                $('#exampleModal').modal('hide');
            },
        });
        getRecords()
    }

    function update_car(){
        $.ajax({
            type: 'POST',
            url: "{{ route('update.car') }}",
            data: {
                'id' : $("#id_car").val(),
                'identificador':  $("#identificador").val(),
                'brand':  $("#brand").val(),
                'model': $('#model').val(),
                'year': $('#year').val(),
            },
            success: function() {
                swal.fire('Dados Alterados', '', 'success');
                $('#brand').val('');
                $('#model').val('');
                $('#year').val('');
                $('#identificador').val('');
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
                    url: "{{ route('delete.car') }}",
                    data: {
                        'id' : $("#id_car").val(),
                    },
                    success: function() {
                        $('#id_car').val('');
                        $('#brand').val('');
                        $('#identificador').val('');
                        $('#model').val('');
                        $('#year').val('');
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
            url:"/get_car/" + id,
            type: "get",
            dataType: 'json',
        success: function (response) {
            $('#id_car').val(response.id);
            $('#model').val(response.model);
            $('#identificador').val(response.identificador);
            $('#year').val(response.year);
            $('#brand').val(response.brand);
            $('#exampleModal').modal('show');
            $('#form_car input ').attr('readonly', 'readonly');
            $("#div_switche").css({'display':'block'});
            $("#delete_button").css({'display':'none'});
            $("#save_button").css({'display':'none'});
            $("#update_button").css({'display':'block'});
        }
    })
}) 

function open_inputs(){
    if($("#customSwitch1").is(':checked') == true){
        $('#form_car input ').attr('readonly', false);
        $('#observation').attr('readonly', false);
        $("#delete_button").css({'display':'block'});
    }else{
        $('#form_car input ').attr('readonly', 'readonly');
        $('#observation').attr('readonly', true);
        $("#delete_button").css({'display':'none'});
    }
}

function close_modal(){
    $("#div_switche").css({'display':'none'});
    $('#form_car input ').attr('readonly', false);
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


</script>
@endsection

