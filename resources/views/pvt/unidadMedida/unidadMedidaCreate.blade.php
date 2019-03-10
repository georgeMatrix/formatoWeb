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
                    <form action="{{route('unidadMedida.store')}}" method="post">
                        {{csrf_field()}}

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Nombre</label>
                                    <input type="text" class="form-control" name="nombre">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Descripcion</label>
                                    <input type="text" class="form-control" name="descripcion">
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