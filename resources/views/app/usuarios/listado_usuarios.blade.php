@extends('app.dashboard')
@section('headers')
!-- DataTables -->
        <link href="{{asset('dashor/assets/plugins/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('dashor/assets/plugins/datatables/buttons.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
@endsection
@section('titulo-pagina')
    listado usuarios
@endsection
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card m-b-30">
                <div class="card-body">
                    {{-- propio de la vista --}}
                    <a href="{{url('/usuarios/nuevo')}}" class="btn btn-primary">Nuevo Usuario</a>
                    <hr>
                    <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                            <tr>
                                <td>Usuario</td>
                                <td>Nombres</td>
                                <td>Rol</td>
                                <td>Email</td>
                                <td>Acciones</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($usuarios as $usuario)
                                <tr>
                                    <td>{{$usuario->username}}</td>
                                    <td>{{$usuario->nombres}}</td>
                                    <td>{{$usuario->rol}}</td>
                                    <td>{{$usuario->email}}</td>
                                    <td>
                                        <a href="" ><i class="fas fa-edit" title="Editar Usuario"></i></a>
                                        <a href="" class="ml-2" ><i class="far fa-trash-alt" title="Eliminar Usuario"></i></a>
                                    </td>
                                </tr>                                
                            @endforeach
                            
                        </tbody>
                    </table>
                    {{-- propio de la vista --}}
                </div>
            </div>
        </div>    
    </div>
@endsection
@section('librerias')
    <script src="{{asset('dashor/assets/plugins/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('dashor/assets/plugins/datatables/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('dashor/assets/pages/datatables.init.js')}}"></script> 
@endsection