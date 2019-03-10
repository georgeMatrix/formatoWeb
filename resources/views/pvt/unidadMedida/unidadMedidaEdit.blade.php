@extends('pvt.layoutABC.layout')
@section('contenido')
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header card-header-primary">
                    <h4 class="card-title">Unidad de Medida</h4>
                    <p class="card-category">Completa los campos</p>
                </div>
                <div class="card-body">
                    <form action="/unidadMedida/{{$unidadMedida->id}}" method="post">
                        {{method_field('PUT')}}
                        {{csrf_field()}}
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Nombre</label>
                                <input name="nombre" value="{{$unidadMedida->nombre}}" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Descripcion</label>
                                <input name="descripcion" value="{{$unidadMedida->descripcion}}" type="text" class="form-control">
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