@extends('cms.app')
@section('content')


<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Data Social Media</h4>
                <h6 class="card-subtitle">Social Media List</h6>
                <div class="table-responsive">
                @if(Session::has('success_delete_poins'))
                <div class="alert alert-success" role="alert">
                    {{Session::get('success_delete_poins')}}
                </div>
            @endif
                    <table id="myTable" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Poins</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($home_poins_troubles as $pt)
                            <tr role="row" class="even">
                                <td >{{$pt->id}}</td>
                                <td>{{$pt->poins}}</td>
                                <td>
                                    <button type="button" class="btn btn-icon btn-pure btn-outline" data-toggle="tooltip" data-original-title="Edit" aria-describedby="tooltip19964"><a href="{{ url ('cms/home/trouble/editPoins', $pt->id) }}"><i class="mdi mdi-border-color" aria-hidden="true"></i></a></button>
                                    <button type="button" alt="alert" class="btn btn-icon btn-pure btn-outline" data-toggle="tooltip" data-original-title="Delete" aria-describedby="tooltip19964"><a href="{{ url ('cms/home/trouble/deletePoins', $pt->id) }}"><i class="mdi mdi-delete-empty" aria-hidden="true"></i></a></button>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>                       
    </div>
</div>

@endsection