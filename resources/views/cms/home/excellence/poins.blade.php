
@extends('cms.app')
@section('content')


<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Data Table</h4>
                <h6 class="card-subtitle">Data table example</h6>
                <div class="table-responsive m-t-40">
                @if(Session::has('success_delete'))
                <div class="alert alert-success" role="alert">
                    {{Session::get('success_delete')}}
                </div>
                @endif
                    <table id="myTable" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Icon</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($poin_excellences as $poin_excellence)
                            <tr>
                                <td>{{$poin_excellence->id}}</td>
                                <td>{{$poin_excellence->title}}</td>
                                <td>{{$poin_excellence->desc}}</td>
                                <td><img width=" 50px" src="{{asset('data_file')}}/{{$poin_excellence->icon}}"></td>
                                <td>
                                    <button type="button" class="btn btn-icon btn-pure btn-outline" data-toggle="tooltip" data-original-title="Edit" aria-describedby="tooltip19964"><a href="{{ url ('cms/home/excellence/editExcellence', $poin_excellence->id) }}"><i class="mdi mdi-border-color" aria-hidden="true"></i></a></button>
                                    <button type="button" alt="alert" class="btn btn-icon btn-pure btn-outline" data-toggle="tooltip" data-original-title="Delete" aria-describedby="tooltip19964"><a href="{{ url ('cms/home/excellence/deleteExcellence', $poin_excellence->id) }}"><i class="mdi mdi-delete-empty" aria-hidden="true"></i></a></button>
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