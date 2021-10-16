@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Data Penulis
                    <a href="{{route('penulis.create')}}" class="btn btn-sm btn-primary float-right">Tambah</a>
                </div>

                <div class="card-body">

                   <div class="table-responsive">
                         <table class="table">
                            <tr>
                                <th>No</th>
                                <th>Nama Pengarang</th>
                                <th>Email</th>
                                <th>Telepon</th>
                                <th>Aksi</th>
                            </tr>
                            @php $no = 1; @endphp
                            @foreach($penulis as $data)
                            <tr>
                                <td>
                                    {{$no++}}
                                </td>
                                <td>
                                    {{$data->nama_pengarang}}
                                </td>
                                <td>
                                    {{$data->email}}
                                </td>
                                <td>
                                    {{$data->telepon}}
                                </td>
                                <td>
                                    <button class="btn btn-success">Edit</button>|
                                    <button class="btn btn-warning">Show</button>|
                                    <button class="btn btn-danger">Delete</button>|
                                </td>
                            </tr>
                            @endforeach
                        </table>
                   </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
