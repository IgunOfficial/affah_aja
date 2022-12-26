@extends('layouts.admin')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-9">
                @include('layouts._flash')
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Tahun Akademik</h5>
                    </div><br>
                    <div class="card-body">
                        <form action="{{ route('tahun.store') }}" method="post">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label"><b>Tahun Akademik :</b></label>
                                <input type="text" class="form-control @error('tahun') is-invalid @enderror" name="tahun">
                                @error('tahun')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label"><b>Periode :</b></label>
                                <input type="text" class="form-control @error('periode') is-invalid @enderror" name="periode">
                                @error('periode')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label"><b>Keterangan :</b></label>
                                <input type="text" class="form-control @error('keterangan') is-invalid @enderror" name="keterangan">
                                @error('keterangan')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label"><b>Status :</b></label>
                                <select class="form-control @error('status') is-invalid @enderror" name="status">
                                    <option selected>Pilih Salah Satu</option>
                                    <option value="Aktif">Aktif</option>
                                    <option value="Tidak Aktif">Tidak Aktif</option>
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
                                    <button class="btn btn-outline-primary" type="submit"><b><i>Tambah</i></b></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection