@extends('dashboard.layouts.main')
@section('content')
<div class="card card-info">
  <div class="card-header">
    <h3 class="card-title">Horizontal Form</h3>
  </div>
  <form action="{{ route('komoditas.store') }}" class="form-horizontal" method="POST">
    @csrf
    <div class="card-body">

      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Komoditas</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="nama_kom" id="nama_kom" placeholder="Nama Komoditas">
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