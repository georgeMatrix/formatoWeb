@extends('pvt.layoutABC.layout')
@section('contenido')
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header card-header-primary">
                    <h4 class="card-title">Provedor</h4>
                    <p class="card-category">Completa los campos</p>
                </div>
                <div class="card-body">
                    <form action="/provedor/{{$provedor->id}}" method="post">
                        {{method_field('PUT')}}
                        {{csrf_field()}}
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Nombre</label>
                                <input type="text" name="nombre" value="{{$provedor->nombre}}" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Razon Social</label>
                                <input type="text" name="razon_social" value="{{$provedor->razon_social}}" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">RFC</label>
                                <input type="text" name="rfc" value="{{$provedor->rfc}}" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Direccion</label>
                                <input type="text" name="direccion" value="{{$provedor->direccion}}" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Telefono</label>
                                <input type="text" name="telefono" value="{{$provedor->telefono}}" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Contacto</label>
                                <input type="text" name="contacto" value="{{$provedor->contacto}}" class="form-control">
                            </div>
                        </div>
                    </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary pull-right">Guardar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        @include('pvt.layoutABC.tarjetaProgramador')
    </div>
@endsection