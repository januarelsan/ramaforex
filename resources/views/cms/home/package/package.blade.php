@extends('app')
@section('content')

<div class="col-md-12">
    <div class="card">
        <div class="card-body p-b-0">
        <h4 class="card-title">Change Content</h4>
        <ul class="nav nav-tabs customtab" role="tablist">
            <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#home2" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">Classic</span></a> </li>
            <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#profile2" role="tab"><span class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down">Platinum</span></a> </li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane active" id="home2" role="tabpanel">
                <div class="p-20">
                @include('home.package.contentPlatinum')
                </div>
            </div>
            <div class="tab-pane  p-20" id="profile2" role="tabpanel">
                @include('home.package.contentClassic')
            </div>
        </div>
    </div>
</div>

@endsection