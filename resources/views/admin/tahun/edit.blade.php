@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-9">
                @include('layouts/_flash')
            </div>
            <div class="card-header">
                <h5 class="card-title">Tahun Akademik</h5>
            </div>
            <div class="card-body">
                <form action="{{ route('tahun.update', $tahun->id) }}" method="post">
                    @csrf
                    @method('put')
                    <div class="mb-3">
                        <label class="form-label">Tahun :</label>
                        <input type="text" class="form-control @error('tahun') is-invalid @enderror" name="tahun" value="{{ $tahun->tahun }}">
                        @error('tahun')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Periode :</label>
                        <input type="text" class="form-control @error('periode') is-invalid @enderror" name="periode" value="{{ $tahun->periode }}">
                        @error('periode')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Keterangan :</label>
                        <input type="text" class="form-control @error('keterangan') is-invalid @enderror" name="keterangan" value="{{ $tahun->keterangan }}">
                        @error('keterangan')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Status :</label>
                        <select class="form-control" name="status">
                            <option selected>Pilih Salah Satu</option>
                            <option value="Aktif" {{ $tahun->status == 'Aktif' ? 'selected' : '' }}>Aktif</option>
                            <option value="Tidak Aktif" {{ $tahun->status == 'Tidak Aktif' ? 'selected' : '' }}>Tidak Aktif</option>
                        </select>
                        @error('status')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <div>
                            <a href="{{ route('tahun.index') }}" class="btn btn-outline-warning"><b><i>Kembali</i></b></a>
                            <button class="btn btn-outline-primary" type="submit"><b><i>Edit</i></b></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection