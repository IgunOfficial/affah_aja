@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="background-color: #1995AD">
                        <b>DATA TAHUN</b>
                    </div>
                    <div class="card-body">
                        {{-- <div class="mb-3">
                            <label class="form-label">Tahun :</label>
                            <input type="text" class="form-control" name="tahun" value="{{ $tahun->tahun }}" readonly>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Periode :</label>
                            <input type="text" class="form-control" name="periode" value="{{ $tahun->periode }}" readonly>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Keterangan :</label>
                            <input type="text" class="form-control" name="keterangan" value="{{ $tahun->keterangan }}" readonly>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Status :</label>
                            <input type="text" class="form-control" name="status" value="{{ $tahun->status }}" readonly>
                        </div> --}}
                        <center>
                            <table>
                                <tr>
                                    <td name="tahun"><b>Tahun</b></td>
                                    <td><b>:</b></td>
                                    <td>{{ $tahun->tahun }}</td>
                                </tr>
                                <tr>
                                    <td name="periode"><b>Periode</b></td>
                                    <td><b>:</b></td>
                                    <td>{{ $tahun->periode }}</td>
                                </tr>
                                <tr>
                                    <td name="keterangan"><b>Keterangan</b></td>
                                    <td><b>:</b></td>
                                    <td>{{ $tahun->keterangan }}</td>
                                </tr>
                                <tr>
                                    <td name="status"><b>Status</b></td>
                                    <td><b>:</b></td>
                                    <td>{{ $tahun->status }}</td>
                                </tr>
                            </table>
                        </center><br>
                        <div class="mb-3">
                            <div class="d-grid gap-2">
                                <a href="{{ route('tahun.index') }}" class="btn btn-outline-primary"><i class="bi bi-box-arrow-left"></i>&nbsp;&nbsp;<b><i>Kembali</i></b></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection