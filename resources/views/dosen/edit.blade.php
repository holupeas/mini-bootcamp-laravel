@extends('layouts.backend')

@section('title', 'Edit Dosen')

@section('content')
    <div class="page-inner">
        <div class="page-header">
            <h4 class="page-title">Edit Dosen</h4>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Form Edit Dosen</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('dosen.update', $dosen->id) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <input type="hidden" name="id" value="{{ $dosen->id }}">
                            <div class="form-group">
                                <label for="nip">NIP</label>
                                <input type="text" class="form-control" id="nip" name="nip" maxlength="16"
                                    value="{{ old('nip', $dosen->nip) }}">
                                @error('nip')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="nama">Name</label>
                                <input type="text" class="form-control" id="nama" name="nama"
                                    value="{{ old('nama', $dosen->nama) }}">
                                @error('nama')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email"
                                    value="{{ old('email', $dosen->email) }}">
                                @error('email')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Update</button>
                                <button type="button" class="btn btn-secondary"
                                    onclick="window.history.back();">Batal</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
