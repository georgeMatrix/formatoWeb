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

                                <select name="provedor" id="">
                                    @foreach($provedor as $prov)
                                        <option value="">{{$prov->id}}</option>
                                        @endforeach
                                </select>

                            </div>
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