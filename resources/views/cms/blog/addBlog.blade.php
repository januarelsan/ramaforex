@extends('cms.app')
@section('content')


<div class="row">
    <div class="col-lg-12">
        <div class="card card-outline-info">
            <div class="card-body">
                <form action="#">
                    <div class="form-body">
                        <h3 class="box-title">Add Blog</h3>
                        <hr>
                        <div class="row">
                            <div class="col-md-12 ">
                                <div class="form-group">
                                    <label>Title</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 ">
                                <div class="form-group">
                                    <label>Description</label>
                                    <textarea class="form-control" rows="5"></textarea>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="col-md-4">
                            <h5 class="m-t-30">Multiple select boxes</h5>
                            <div class="btn-group bootstrap-select show-tick"><button type="button" class="btn dropdown-toggle bs-placeholder form-control btn-secondary" data-toggle="dropdown" role="button" title="Nothing selected" aria-expanded="false"><span class="filter-option pull-left">Nothing selected</span>&nbsp;<span class="bs-caret"><span class="caret"></span></span></button><div class="dropdown-menu" role="combobox" x-placement="bottom-start" style="max-height: 44px; overflow: hidden; min-height: 0px; position: absolute; transform: translate3d(0px, 38px, 0px); top: 0px; left: 0px; will-change: transform;"><ul class="dropdown-menu inner" role="listbox" aria-expanded="false" style="max-height: 26px; overflow-y: auto; min-height: 0px;"><li data-original-index="0" class="ms-hover"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Mustard</span><span class="mdi mdi-check-circle check-mark"></span></a></li><li data-original-index="1"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Ketchup</span><span class="mdi mdi-check-circle check-mark"></span></a></li><li data-original-index="2"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Relish</span><span class="mdi mdi-check-circle check-mark"></span></a></li></ul></div><select class="selectpicker" multiple="" data-style="form-control btn-secondary" tabindex="-98">
                                <option>Mustard</option>
                                <option>Ketchup</option>
                                <option>Relish</option>
                            </select></div>
                        </div> -->
                        <div class="form-group">
                            <h5>Input Image<span class="text-danger">*</span></h5>
                            <div class="controls">
                                <input type="file" name="file" class="form-control" required="" aria-invalid="false"> <div class="help-block"></div></div>
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

