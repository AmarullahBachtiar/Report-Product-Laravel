@extends('dashboard.layouts.main')
@section('content')
<div class="card card-info">
  <div class="card-header">
    <h3 class="card-title">Edit Komoditas</h3>
  </div>
  <form action="{{ route('komoditas.update', $komoditas->id) }}" class="form-horizontal" method="POST">
    @csrf
    @method('PUT')
    <div class="card-body">

      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Kode</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="kode_kom" id="kode_kom" value="{{ $komoditas->kode_kom }}" placeholder="Nama Komoditas">
        </div>
        <label class="col-sm-2 col-form-label">Komoditas</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="nama_kom" id="nama_kom" value="{{ $komoditas->nama_kom }}" placeholder="Nama Komoditas">
        </div>
      </div>
      <div class="card-footer">
        <button type="submit" class="btn btn-sm btn-info">Simpan</button>
        <button type="reset" class="btn btn-sm btn-warning">Reset</button>
        <a class="btn btn-sm btn-default float-right" href="{{ route('komoditas.index') }}">Kembali</a>
      </div> <!--  -->
      <!-- /.row -->
    </div>
  </form><!-- /.container-fluid -->
</div>
</div>

@endsection