@extends('app')
@section('content')

<div class="col-md-4">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Success Message</h4>
            <img src="{{asset('material/images/alert/alert3.png')}}" alt="alert" class="img-responsive model_img" id="sa-success">
        </div>
    </div>
</div>

<div class="col-md-4">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">A basic message <small>(Click on image)</small> </h4>
            <img src="{{asset('material/images/alert/alert5.png')}}" alt="alert" class="img-responsive model_img" id="sa-savedata">
        </div>
    </div>
</div>

<div class="col-md-4">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Alert with time <small>(Click on image)</small></h4>
            <img src="{{asset('material/images/alert/alert6.png')}}" alt="alert" class="img-responsive model_img" id="sa-close">
        </div>
    </div>
</div>


@endsection