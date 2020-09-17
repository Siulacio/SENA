@extends('app.dashboard')

@section('titulo-pagina')
    Registro de usuarios
@endsection
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card m-b-30">
                <div class="card-body">
                    {{-- propio de la vista --}}
                    <form action="{{url('/usuarios/guardar')}}" method="POST">
                        @csrf
                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Usuario</label>
                            <div class="col-sm-10">
                                <input class="form-control" name="username" type="text" value="" id="example-text-input">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Nombres</label>
                            <div class="col-sm-10">
                                <input class="form-control" name="nombres" type="text" value="" id="example-text-input">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                                <input class="form-control" name="email" type="email" value="" id="example-text-input" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Contraseña</label>
                            <div class="col-sm-10">
                                <input class="form-control" name="password" type="password" value="" id="example-text-input">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Rol</label>
                            <div class="col-sm-10">
                                <input class="form-control" name="rol" type="text" value="" id="example-text-input">
                                {{-- <select name="rol" id="rol" class="form-control">
                                    <option value="1">Admin</option>
                                    <option value="2">Lider</option>
                                    <option value="3">Aprendiz</option>
                                </select> --}}
                            </div>
                        </div>

                        <hr>
                        <div class="form-group row mr-3 align-center">
                        <hr>

                            <button type="submit" class="btn btn-primary">Guardar</button>
                            <a href="{{ asset('/usuarios/listado') }}" class="ml-1 btn btn-secondary">Regresar</a>
                        </div>
                    </form>
                    {{-- propio de la vista --}}
                </div>
            </div>
        </div>    
    </div>
@endsection
