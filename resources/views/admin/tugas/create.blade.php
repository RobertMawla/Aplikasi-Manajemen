@extends('layouts/app')

@section('content')
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">
        <i class="fas fa-plus mr-2"></i>
        {{ $title }}
    </h1>

    <div class="card">
        <div class="card-header bg-primary">

                <a href="{{ route('tugas') }}" class="btn btn-sm btn-success">
                    <i class="fas fa-arrow-left mr-2"></i>
                    Kembali
                </a>
        </div>

        <div class="card-body">
        <form action="{{ route('tugasStore')  }}" method="post">
        @csrf
        <div class="row mb-2">
                <div class="col-xl-12">
                    <label class="form-label">
                        <span class="text-danger">*</span> Nama :
                    </label>
                    <select name="user_id" class="form-control @error('user_id') is-invalid @enderror" >
                        <option selected disabled>Pilih Nama</option>
                        @foreach($user as $item)
                             <option value="{{ $item->id }}">{{ $item->nama }}</option>
                        @endforeach
                    </select>
                    @error('user_id')
                    <small class="text-danger">
                         {{ $message }}user_id
                    </small>
                    @enderror
                </div>
            </div>
                   <div class="row mb-2">
                <div class="col-xl-12 mb-2">
                    <label class="form-label">
                        <span class="text-danger">*</span> Tugas :
                    </label>
                    <div>

                    </div>
                    <textarea name="tugas" rows="5" class="form-control @error('tugas') is-invalid @enderror"></textarea>
                    @error('tugas')
                    <small class="text-danger">
                         {{ $message }}
                    </small>
                    @enderror
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-xl-6 mb-2">
                    <label class="form-label">
                        <span class="text-danger">*</span> Tanggal mulai :
                    </label>
                    <div>

                    </div>
                    <input type="date" name="tanggal_mulai" class="form-control @error('tanggal_mulai') is-invalid @enderror">
                    @error('tanggal_mulai')
                    <small class="text-danger">
                         {{ $message }}
                    </small>
                    @enderror
                </div>
                <div class="col-xl-6 mb-2">
                    <label class="form-label">
                        <span class="text-danger">*</span> Tanggal Selesai :
                    </label>
                    <div>

                    </div>
                    <input type="date" name="tanggal_selesai" class="form-control @error('tanggal_selesai') is-invalid @enderror">
                    @error('tanggal_selesai')
                    <small class="text-danger">
                         {{ $message }}
                    </small>
                    @enderror
                </div>
            </div>
            <button type="submit" class="btn btn-sm btn-primary">
            <i class="fas fa-save mr-2"></i>
            Simpan
            </button>
            </form>
            </div>
        </div>
    </div>
@endsection
