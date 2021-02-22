@extends('cms.app')
@section('content')


<div class="row">
    <div class="col-lg-12">
        <div class="card card-outline-info">
            <div class="card-body">
                <form action="javascript:;">
                    <div class="form-body">
                        <h3 class="box-title">Title And Backgound</h3>
                        <hr>
                        <div class="row">
                            <div class="col-md-7">
                                <div class="form-group">
                                    <label>Title</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="form-group">
                                    <h5>Input Backgound Image</h5>
                                    <div class="controls">
                                        <input type="file" accept="image/*" name="file" class="form-control" aria-invalid="false"></div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="form-actions">
                        <button type="submit" class="btn btn-success" id="sa-savedata"> <i class="fa fa-check"></i> Save</button>
                        <button type="button" class="btn btn-inverse">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection