@extends('dashboard.layouts.main')
@section('content')
<section class="content">
  <div class="card">
    <div class="card-header">
      <h3 class="card-title">Data laporan</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <!-- <div class="ibox-tools">
        <a type="button" class="btn btn-primary btn-sm btn-flat" href=""> <i class=" fa fa-plus"></i> Tambah Data </a>
      </div> -->
      <table id="example2" class="table table-bordered table-striped">
        <thead>
          <tr>
            <th>Tahun</th>
            <th>Kom
              oditas</th>
            <th>Jan</th>
            <th>Feb</th>
            <th>Mar</th>
            <th>Apr</th>
            <th>Mei</th>
            <th>Jun</th>
            <th>Jul</th>
            <th>Agt</th>
            <th>Sep</th>
            <th>Okt</th>
            <th>Nov</th>
            <th>Des</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($laporan as $l)
          <tr>
            <td>{{ $l->tanggal }}</td>
            <td>{{ $l->komoditas->nama_kom }}</td>
            <td>{{ $l->produksi }}</td>
            <td>1</td>
            <td>1</td>
            <td>1</td>
            <td>1</td>
            <td>1</td>
            <td>1</td>
            <td>1</td>
            <td>1</td>
            <td>1</td>
            <td>3</td>
            <td>4</td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</section>
@endsection