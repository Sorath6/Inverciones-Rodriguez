@extends('adminlte::page')
@section('title', 'Inventario')



<!DOCTYPE html>
<html lang="en">
<head>
  
  </head>
<body>
@section('content_header')
<div class="container">
  <h2>INVENTARIO
      <button type ="Button" class="btn btn-primary" data-toggle="modal" data-target="#modal-insert-cliente"> 
        Insertar
      </button>
  </h2>
    
@stop
  @section('content')
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h3 class ="card-tittle">Inventario Disponible </h3>
          </div>
          <div class="card-body">
            <table id="Cod_Tipo_Categoria" class="table table-bordered table-striped">
              <thead>
                <td>Codigo Inventario</td>
                <td>Tipo Inventario</td>
                <td>Descripcion</td>
                <td>Fecha Ultimo Ingreso</td>
               
              </thead>

              <tbody>
                
              </tbody>
            </table>
          </div>
        </div>  
      </div> 
    </div> 
  </div>  
</div>

<!-- /.modal-Insert -->
<div class="modal fade" id="modal-insert-cliente">
    <div class="modal-dialog">
        <div class="modal-content bg-default">

            <div class="modal-header">
                <h4 class="modal-title">Agregar Producto</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
            </div>
            <form action="{{url('/TipoCategoria')}}" method="POST">
            {{ csrf_field() }}
            <div class="modal-body">
              <div class="from-group">  
                      <label for=""> Codigo Inventario </label>
                      <input type="text" name="Cod_Categoria">
                      <br>
                      <label for=""> Codigo Tipo Inventario </label>
                      <input type="text" name="Cod_Tipo_Categoria">
                      <br>
                      <label for=""> Descripcion </label>
                      <input type="text" name="Usr_Registro"> 
                      <br>
                      <label for=""> Fecha </label>
                      <input type="text" name="Usr_Registro"> 
                      <br>
              </div>
            </div>
          

            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-outline-primary">Insertar en Inventario</button>
            </div>
         </from>
        </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
@stop

@section('js')
<script>
$(document).ready(function() {
    $('#Cod_Tipo_Categoria').DataTable( {
        "order": [[ 3, "desc" ]]
    } );
} );
</script>
@stop

</body>
</html>