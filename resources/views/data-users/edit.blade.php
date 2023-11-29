@extends('layouts')

@section('container')
    <div class="content-body">
        <div class="row page-titles mx-0">
            <div class="col p-md-0">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="#">Data Users</a></li>
                    <li class="breadcrumb-item"><a href="#">Edit User</a></li>
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
                                <h4 class="card-title float-start">Edit User</h4>
                                <a href="{{ route('index') }}" class="btn btn-info btn-sm mb-3 float-end">
                                    <i class="fa fa-arrow-left mr-1"></i>
                                    Back
                                </a>
                            </div>
                        </div>

                        {{-- @if ($errors->any())
                            <div class="alert alert-danger">
                                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif --}}


                        <div class="card-body">
                            <form action="{{ route('update', $users->id) }}" method="POST">
                                @csrf
                                @method('PATCH')
                                <div>
                                    <input type="hidden" name="id" value="{{ old('nama', $users->id) }}">
                                    <div class="mb-3 row">
                                        <label for="nama" class="col-md-4 col-form-label text-md-end text-start">Nama
                                            Pemesan</label>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control @error('nama') is-invalid @enderror"
                                                id="nama" nama="nama" value='{{ $users['nama'] }}'>
                                            @error('nama')
                                                <span class="text-danger">
                                                    {{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="email"
                                            class="col-md-4 col-form-label text-md-end text-start">Email</label>
                                        <div class="col-md-6">
                                            <input type="email" class="form-control @error('email') is-invalid @enderror"
                                                id="email" nama="email" value='{{ $users['email'] }}'>
                                            @if ($errors->has('email'))
                                                <span class="text-danger">{{ $errors->first('email') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="password"
                                            class="col-md-4 col-form-label text-md-end text-start">Password</label>
                                        <div class="col-md-6">
                                            <input type="password"
                                                class="form-control @error('password') is-invalid @enderror" id="password"
                                                nama="password" value='{{ $users['email'] }}'>
                                            @if ($errors->has('password'))
                                                <span class="text-danger">{{ $errors->first('password') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="roles"
                                            class="col-md-4 col-form-label text-md-end text-start">Roles</label>
                                        <div class="col-md-6">
                                            <select class="form-select" aria-label="Default select example">
                                                <option hidden>Pilih Role</option>
                                                <option @if ($users->role == 'admin') selected @endif value="Admin">
                                                    Admin</option>
                                                <option @if ($users->role == 'co-admin') selected @endif value="Co-Admin">
                                                    Co-Admin</option>
                                                <option @if ($users->role == 'users') selected @endif value="Users">
                                                    Users</option>
                                            </select>

                                            @if ($errors->has('role'))
                                                <span class="text-danger">{{ $errors->first('role') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <button name="submit" type="submit"
                                            class="col-md-2 offset-md-5 btn btn-primary">Save</button>
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
