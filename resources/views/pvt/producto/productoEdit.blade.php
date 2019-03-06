@extends('pvt.layoutABC.layout')
@section('contenido')
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header card-header-primary">
                    <h4 class="card-title">Producto</h4>
                    <p class="card-category">Completa los campos</p>
                </div>
                <div class="card-body">
                    <form action="/producto/{{$producto->id}}" method="post">

                        {{method_field('PUT')}}
                        {{csrf_field()}}
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Clave</label>
                                <input value="{{$producto->clave}}" type="text" name="clave" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Sku</label>
                                <input value="{{$producto->sku}}" type="text" name="sku" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">skuVnpk</label>
                                <input value="{{$producto->skuVnpk}}" type="text" name="skuVnpk" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Provedor</label>
                                <select name="provedor" id="" class="form-control" >
                                    @foreach($provedores as $provedor)
                                        <option value="{{$provedor->id}}"
                                            @if(is_null($producto->provedorF))
                                                {{$provedor->nombre}}
                                            @elseif($provedor->id == $producto->provedorF->id)
                                                selected
                                            @endIf
                                        >{{$provedor->nombre}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Categoria</label>
                                <select name="categoria" id="" class="form-control" >
                                    @foreach($categorias as $categoria)
                                        <option value="{{$categoria->id}}"
                                                @if(is_null($producto->categoriaF))
                                                {{$categoria->nombre}}
                                                @elseif($categoria->id == $producto->categoriaF->id)
                                                selected
                                                @endIf
                                        >{{$categoria->nombre}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Unidad de Medida</label>
                                <select name="unidad_Medida" id="" class="form-control" >
                                    @foreach($unidadMedidas as $unidadMedida)
                                        <option value="{{$unidadMedida->id}}"
                                                @if(is_null($producto->unidad_MedidaF))
                                                {{$unidadMedida->nombre}}
                                                @elseif($unidadMedida->id == $producto->unidad_MedidaF->id)
                                                selected
                                                @endIf
                                        >{{$unidadMedida->nombre}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Descripcion</label>
                                <input value="{{$producto->descripcion}}" type="text" name="descripcion" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Descripcion extendida</label>
                                <input value="{{$producto->descripcionE}}" type="text" name="descripcionE" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Costo</label>
                                <input value="{{$producto->costo}}" type="text" name="costo" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Iva Costo</label>
                                <input value="{{$producto->iva_costo}}" type="text" name="iva_costo" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Ieps Costo</label>
                                <input value="{{$producto->ieps_costo}}" type="text" name="ieps_costo" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Total Costo</label>
                                <input value="{{$producto->total_costo}}" type="text" name="total_costo" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Precio Mayoreo</label>
                                <input value="{{$producto->precio_Mayoreo}}" type="text" name="precio_Mayoreo" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Iva Precio Mayoreo</label>
                                <input value="{{$producto->iva_Precio_Mayoreo}}" type="text" name="iva_Precio_Mayoreo" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Ieps Precio Mayoreo</label>
                                <input value="{{$producto->ieps_Precio_Mayoreo}}" type="text" name="ieps_Precio_Mayoreo" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Total Precio Mayoreo</label>
                                <input value="{{$producto->total_Precio_Mayoreo}}" type="text" name="total_Precio_Mayoreo" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Precio Medio Mayoreo</label>
                                <input value="{{$producto->precio_Medio_Mayoreo}}" type="text" name="precio_Medio_Mayoreo" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Iva Precio Medio Mayoreo</label>
                                <input value="{{$producto->iva_Precio_Medio_Mayoreo}}" type="text" name="iva_Precio_Medio_Mayoreo" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Ieps Precio Medio Mayoreo</label>
                                <input value="{{$producto->ieps_Precio_Medio_Mayoreo}}" type="text" name="ieps_Precio_Medio_Mayoreo" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Total Precio Medio Mayoreo</label>
                                <input value="{{$producto->total_Precio_Medio_Mayoreo}}" type="text" name="total_Precio_Medio_Mayoreo" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Precio Retail</label>
                                <input value="{{$producto->precio_Retail}}" type="text" name="precio_Retail" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Iva Precio Retail</label>
                                <input value="{{$producto->iva_Precio_Retail}}" type="text" name="iva_Precio_Retail" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Ieps Precio Retail</label>
                                <input value="{{$producto->ieps_Precio_Retail}}" type="text" name="ieps_Precio_Retail" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Total Precio Retail</label>
                                <input value="{{$producto->total_Precio_Retail}}" type="text" name="total_Precio_Retail" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Existencia</label>
                                <input value="{{$producto->existencia}}" type="text" name="existencia" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <button type="submit" class="btn btn-primary">Guardar</button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card card-profile">
                <div class="card-avatar">
                    <a href="#pablo">
                        <img class="img" src="../assets/img/faces/marc.jpg" />
                    </a>
                </div>
                <div class="card-body">
                    <h6 class="card-category text-gray">CEO / Co-Founder</h6>
                    <h4 class="card-title">Alec Thompson</h4>
                    <p class="card-description">
                        Don't be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is...
                    </p>
                    <a href="#pablo" class="btn btn-primary btn-round">Follow</a>
                </div>
            </div>
        </div>
    </div>
@endsection