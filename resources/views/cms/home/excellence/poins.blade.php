
@extends('cms.app')
@section('content')


<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Data Table</h4>
                <h6 class="card-subtitle">Data table example</h6>
                <div class="table-responsive m-t-40">
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
                            <tr>
                                <td>1</td>
                                <td>PROFITABLE</td>
                                <td>Terbukti menghasilkan profit secara konsisten selama 2 tahun dan belum pernah gagal mencetak profit setiap bulannya.</td>
                                <th>Icon</th>
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