@extends('layouts')

{{-- ADMIN INDEX --}}
@section('container')
    <div class="content-body">
        <div class="row page-titles mx-0">
            <div class="col p-md-0">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                    <li class="breadcrumb-item active"><a href="#">Home</a></li>
                </ol>
            </div>
        </div>
        <!-- row -->

        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <h4 class="card-title">Data Table</h4>
                                <a href="create" class="btn btn-info btn-sm mb-3">
                                    <i class="fa fa-plus-circle mr-1"></i>
                                    Data Users
                                </a>
                                @if ($message = Session::get('success'))
                                    <div class="alert alert-success">
                                        <p>{{ $message }}</p>
                                    </div>
                                @endif
                                {{-- <table id="example" class="table table-striped table-bordered zero-configuration"> --}}
                                <table id="example" class="table table-striped table-bordered   ">
                                    <thead>
                                        <tr>
                                            {{-- <th scope="col">No.</th> --}}
                                            <th scope="col">Id</th>
                                            <th scope="col">Nama</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Roles</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($users as $user)
                                            <tr>
                                                {{-- <td>{{ $loop->iteration }}</td> --}}
                                                <td>{{ $user->id }}</td>
                                                <td>{{ $user->nama }}</td>
                                                <td>{{ $user->email }}</td>
                                                <td>{{ $user->role }}</td>
                                                <td>
                                                    <form action="{{ route('destroy', $user->id) }}" method="post">
                                                        <a href={{ $user->id }} class="btn btn-warning btn-sm"><i
                                                                class="bi bi-eye"></i>
                                                            Show</a>
                                                        <a href={{ $user->id . '/edit' }} class="btn btn-primary btn-sm"><i
                                                                class="bi bi-pencil-square"></i>
                                                            Edit</a>
                                                        @csrf
                                                        @method('DELETE')
                                                        <button class="btn btn-danger btn-sm"
                                                            onclick="return confirm('Do you want to delete this user?')>
                                                                    <i class="bi
                                                            bi-pencil-square"></i>
                                                            Delete</button>
                                                    </form>
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
        </div>
        <!-- #/ container -->
    </div>
@endsection
