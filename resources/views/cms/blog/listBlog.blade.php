@extends('cms.app')
@section('content')


<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Data Social Media</h4>
                <h6 class="card-subtitle">Social Media List</h6>
                <div class="table-responsive">
                @if(Session::has('success_delete'))
                <div class="alert alert-success" role="alert">
                    {{Session::get('success_delete')}}
                </div>
            @endif
                    <table id="myTable" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Title</th>
                                <th>Desc</th>
                                <th>Picture</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($articles as $article)
                            <tr role="row" class="even">
                                <td >{{$article->id}}</td>
                                <td>{{$article->title}}</td>
                                <td class="text-overflow: ellipsis; ">{{$article->body}}</td>
                                <td><img width=" 50px" src="{{asset('data_file')}}/{{$article->img_url}}"></td>
                                <td>
                                    <button type="button" class="btn btn-icon btn-pure btn-outline" data-toggle="tooltip" data-original-title="Edit" aria-describedby="tooltip19964"><a href="{{ url ('cms/blog/edit', $article->id) }}"><i class="mdi mdi-border-color" aria-hidden="true"></i></a></button>
                                    <button type="button" alt="alert" class="btn btn-icon btn-pure btn-outline" data-toggle="tooltip" data-original-title="Delete" aria-describedby="tooltip19964"><a href="{{ url ('cms/blog/delete', $article->id) }}"><i class="mdi mdi-delete-empty" aria-hidden="true"></i></a></button>
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