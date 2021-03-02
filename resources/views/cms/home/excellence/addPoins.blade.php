@extends('cms.app')
@section('content')


<div class="row">
    <div class="col-lg-12">
        <div class="card card-outline-info">
            <div class="card-body">
            @if(Session::get('success_add_listTrouble'))
                <div class="alert alert-success" id="sa-savedata" role="alert">
                    {{Session::get('success_add_listTrouble')}}
                </div>
            @endif
                <form action="{{ action('CMS\CmsHomeController@uploadPoinsExcellence') }}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-body">
                        <h3 class="box-title">Add Trouble List</h3>
                        <hr>
                        <div class="row">
                            <div class="col-md-12 ">
                                <div class="form-group">
                                    <label>Title</label>
                                    <input type="text" name="title" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 ">
                                <div class="form-group">
                                    <label>Description</label>
                                    <textarea class="form-control" name="desc" rows="5"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <h5>Icon<span class="text-danger">*</span></h5>
                            <div class="controls">
                                <input type="file" name="icon" class="form-control" required="" aria-invalid="false"> <div class="help-block"></div></div>
                        </div>
                    </div>
                    <div class="form-actions">
                        <button type="submit" class="btn btn-success" value="Upload"> <i class="fa fa-check"></i> Save</button>
                        <button type="button" class="btn btn-inverse">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection

