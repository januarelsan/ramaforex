@extends('cms.app')
@section('content')


<div class="row">
    <div class="col-lg-12">
        <div class="card card-outline-info">
            <div class="card-body">
            @if(Session::has('success_edit'))
                <div class="alert alert-success" id="sa-savedata" role="alert">
                    {{Session::get('success_edit')}}
                </div>
            @endif
            
                <form action="{{route('update.PoinsBenefits')}}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <input type="hidden" name="id" value="{{$benefit_poins->id}}"/>
                    <div class="form-body">
                        <h3 class="box-title">Edit Benefit Poins</h3>
                        <hr>
                        <div class="row">
                            <div class="col-md-12 ">
                                <div class="form-group">
                                    <label>Poins</label>
                                    <input type="text" name="poins" value="{{$benefit_poins->poins}}" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-actions">
                        <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> Save</button>
                        <button type="button" class="btn btn-inverse">Cancel</button>
                    </div>
                </form>
                
            </div>
        </div>
    </div>
</div>

@endsection
