@extends('layouts.admin')
@section('content')
    <!-- Index Tahun -->
            <div class="col-12">
              <div class="card recent-sales overflow-auto">

                <div class="card-header">
                  {{-- <a href="{{route('home')}}" class="btn btn-danger"><i class="bi bi-box-arrow-left" style="float:left"></i></a> --}}
                  {{-- <b><i>&nbsp;Tahun/Periode</i></b> --}}
                  <a href="{{ route('tahun.create') }}" class="btn btn-primary" style="left">
                   <b>Tambah Data</b>
              </a>
              </div>

                <div class="card-body">
                  <h5 class="card-title">Tahun Akademik</h5>

                  <table class="table table-borderless datatable">
                    <thead style="background-color: #1D79F2">
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">Tahun <br> Akademik</th>
                        <th scope="col">Periode</th>
                        <th scope="col">Keterangan</th>
                        <th scope="col">Status</th>
                        <th scope="col" style="text-align-center">Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      @php $no =1; @endphp
                      @foreach($tahun as $data)
                          <tr>
                              <td>{{ $no++ }}</td>
                              <td>{{ $data->tahun }}</td>
                              <td>{{ $data->periode }}</td>
                              <td>{{ $data->keterangan }}</td>
                              <td>{{ $data->status }}</td>
                              <td>
                                  <form action="{{ route('tahun.destroy', $data->id) }}" method="post">
                                      @csrf
                                      @method('delete')
                                      <a href="{{ route('tahun.edit', $data->id) }}" class="btn btn-warning"><i class="bi bi-pencil"></i></a>
                                      <a href="{{ route('tahun.show', $data->id) }}" class="btn btn-success"><i class="bi bi-eye"></i></a>
                                      {{-- <a href="cetak" class="btn btn-primary" style="float: center"><b><i>CETAK</i></b></a> --}}
                                      <button type="submit" class="btn btn-danger" onclick="return confirm('apakah anda yakin?')">
                                        <i class="bi bi-eraser"></i>
                                  </button>
                                  </form>
                              </td>
                          </tr>
                      @endforeach
                    </tbody>
                  </table>

                </div>

              </div>
            </div><!-- End Index Tahun -->
@endsection