@extends('cms.app')
@section('content')


<div class="row">
    <div class="col-lg-12">
        <div class="card card-outline-info">
            <div class="card-body">
            @if(Session::has('success_edit_listTrouble'))
                <div class="alert alert-success" id="sa-savedata" role="alert">
                    {{Session::get('success_edit_listTrouble')}}
                </div>
            @endif
            
                <form action="{{route('update.PoinsBotLogic')}}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <input type="hidden" name="id" value="{{$bot_logic_poin->id}}"/>
                    <div class="form-body">
                        <h3 class="box-title">Edit Blog</h3>
                        <hr>
                        <div class="row">
                            <div class="col-md-12 ">
                                <div class="form-group">
                                    <label>Title</label>
                                    <input type="text" name="title" value="{{$bot_logic_poin->title}}" class="form-control">
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <h5>Input Image<span class="text-danger">*</span></h5>
                            <div class="controls">
                                <input type="file" name="img" src="{{asset('data_file')}}/{{$bot_logic_poin->img}}" class="form-control" required="" aria-invalid="false"> <div class="help-block"></div></div>
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
