@extends('cms.app')
@section('content')


<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Data Social Media</h4>
                <h6 class="card-subtitle">Social Media List</h6>
                <div class="table-responsive">
                    <table id="myTable" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>Logo</th>
                                <th>Link</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr role="row" class="even">
                                <td >1</td>
                                <td>Instagram</td>
                                <td ><img src="{{asset('material/images/users/4.jpg')}}" alt="user" width="40" class="img-circle"></td>
                                <td><a href="https://www.instagram.com/receh.id/" target="_blank">https://www.instagram.com/receh.id/</a> </td>
                                <td>
                                    <button type="button" class="btn btn-icon btn-pure btn-outline" data-toggle="tooltip" data-original-title="Edit" aria-describedby="tooltip19964"><a href="{{ url('about/edit') }}"><i class="mdi mdi-border-color" aria-hidden="true"></i></a></button>
                                    <button type="button" id="sa-dellist" alt="alert" class="btn btn-icon btn-pure btn-outline" data-toggle="tooltip" data-original-title="Delete" aria-describedby="tooltip19964"><a href="javascript:;"><i class="mdi mdi-delete-empty" aria-hidden="true"></i></a></button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>                       
    </div>
</div>

@endsection