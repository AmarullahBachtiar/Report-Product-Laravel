@extends('dashboard.layouts.main')
@section('content')
<div class="card card-info">
  <div class="card-header">
    <h3 class="card-title">Horizontal Form</h3>
  </div>
  <form action="{{ route('produksi.update', $produksi->id) }}" class="form-horizontal" method="POST">
    @csrf
    @method('PUT')
    <div class="card-body">

      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Tanggal</label>
        <br><br>
        <div class="col-sm-10">
          <input type="date" class="form-control" name="tanggal" id="tanggal" value="{{ $produksi->tanggal }}" placeholder="Tanggal Produksi">
        </div>
        <label for="" class="col-sm-2 col-form-label"><b>Komoditas</b></label>
        <br><br>
        <div class="col-sm-10">
          <select class="form-control" style="width: 100%;" name="kode_kom" id="kode_kom">
            <option disabled value>Pilih Komoditas</option>
            <option value="{{ $produksi->kode_kom }} ">{{ $produksi->komoditas->nama_kom }}</option>
            @foreach ($komoditas as $k)
            <option value="{{ $k->id}} ">{{ $k->nama_kom }}</option>
            @endforeach
          </select>
        </div>
        <label class="col-sm-2 col-form-label">Produksi</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="produksi" id="produksi" value="{{ $produksi->produksi }}" placeholder=" Produksi">
        </div>
      </div>
      <div class="card-footer">
        <button type="submit" class="btn btn-sm btn-info">Simpan</button>
        <button type="reset" class="btn btn-sm btn-warning">Reset</button>
        <a class="btn btn-sm btn-default float-right" href="{{ route('produksi.index') }}">Kembali</a>
      </div> <!--  -->
      <!-- /.row -->
    </div>
  </form><!-- /.container-fluid -->
</div>
</div>

@endsection