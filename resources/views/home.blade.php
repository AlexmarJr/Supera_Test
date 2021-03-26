@extends('adminlte::page')
@extends('layouts.cdn')

@section('content')
    <table class="table" id="datatable">
        <thead>
            <tr>
                <th>Cliente</th>
                <th>Identificador do Carro</th>
                <th>Observação</th>
                <th>Data da Manutenção</th>
                <th>Ações</th>
            </tr>

        </thead>
        <tbody>
            @foreach ($all_main as $value)
                <tr>
                    <td>{{ $value->client_name }}</td>
                    <td>{{ $value->identificador }}</td>
                    <td>{{ $value->observation }}</td>
                    <td>{{ \Carbon\Carbon::parse($value->maintenance_date)->timezone('America/Sao_Paulo')->format('d/m/Y')}}</td>
                    <td><a class="btn btnEdit" title="Edit Record" onclick="get_info({{ $value->id }})"><i class="fas fa-info-circle"></i></a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
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
          <button type="button" class="btn btn-secondary" onclick="close_modal()" data-dismiss="modal">Sair</button>
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

    function get_info(id){
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
    }
</script>
@endsection
