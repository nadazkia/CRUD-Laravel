@extends('layouts')

@section('container')
    <div class="content-body">
        <div class="row page-titles mx-0">
            <div class="col p-md-0">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="#">Data Users</a></li>
                    <li class="breadcrumb-item"><a href="#">Add User</a></li>
                </ol>
            </div>
        </div>
        <!-- row -->

        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-header">
                                <h4 class="card-title float-start"> Tambah User</h4>
                                <a href="/admin" class="btn btn-info btn-sm mb-3 float-end">
                                    <i class="fa fa-arrow-left mr-1"></i>
                                    Back
                                </a>
                            </div>
                        </div>

                        @if (Session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif

                        <div class="card-body">
                            <form action="{{ route('store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div>
                                    <div class="mb-3 row">
                                        <label for="nama" class="col-md-4 col-form-label text-md-end text-start">Nama
                                            Pemesan</label>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control @error('nama') is-invalid @enderror"
                                                id="nama" name="nama" value="{{ old('nama') }}">
                                            @error('nama')
                                                <div class="text-danger">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="email"
                                            class="col-md-4 col-form-label text-md-end text-start">Email</label>
                                        <div class="col-md-6">
                                            <input type="email" class="form-control @error('email') is-invalid @enderror"
                                                id="email" name="email" value="{{ old('email') }}">
                                            @error('email')
                                                <div class="text-danger">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="password"
                                            class="col-md-4 col-form-label text-md-end text-start">Password</label>
                                        <div class="col-md-6">
                                            <input type="password" class="form-control @error('email') is-invalid @enderror"
                                                id="password" name="password">
                                            @error('password')
                                                <div class="text-danger">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="mb-3 row">
                                        <label for="roles"
                                            class="col-md-4 col-form-label text-md-end text-start">Roles</label>
                                        <div class="col-md-6">
                                            <select name="roles" class="form-select @error('roles') is-invalid @enderror"
                                                aria-label="Default select example">
                                                <option selected hidden>Pilih Role</option>
                                                <option value="admin" {{ old('roles') == 'admin' ? 'selected' : '' }}>Admin
                                                </option>
                                                <option value="vendor"{{ old('roles') == 'vendor' ? 'selected' : '' }}>
                                                    Vendor
                                                </option>
                                                <option value="user"{{ old('roles') == 'user' ? 'selected' : '' }}>User
                                                </option>
                                            </select>
                                            @error('roles')
                                                <div class="text-danger">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <button name="submit" type="submit" class="col-md-3 offset-md-5 btn btn-primary">
                                            Add User
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #/ container -->
    </div>
@endsection
