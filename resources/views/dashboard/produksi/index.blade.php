@extends('dashboard.layouts.main')
@section('content')
<section class="content">
  <div class="card">
    <div class="card-header">
      <h3 class="card-title">Data Komoditas</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <div class="ibox-tools">
        <a type="button" class="btn btn-primary btn-sm btn-flat" href="{{ route('produksi.create') }}"> <i class=" fa fa-plus"></i> Tambah Data </a>
      </div>
      <table id="example2" class="table table-bordered table-striped">
        <thead>
          <tr>
            <th>Tanggal</th>
            <th>Komoditas</th>
            <th>Produksi</th>
            <th width="200">aksi</th>
          </tr>
        <tbody>
          @foreach ($produksi as $p)
          <tr>
            <td>{{ $p->tanggal }}</td>
            <td>{{ $p->komoditas->nama_kom }}</td>
            <td>{{ $p->produksi }}</td>
            <td>

              <form action="{{ route('produksi.destroy', $p->id)}}" method="post">
                <a href="{{ route('produksi.edit',$p->id)}}" class="btn btn-sm btn-primary">Edit</a>
                @csrf
                @method('DELETE')
                <button class="btn btn-sm btn-danger" type="submit">Delete</button>
              </form>
            </td>

          </tr>
        </tbody>
        @endforeach
        </thead>

      </table>
    </div>
  </div>
</section>
@endsection